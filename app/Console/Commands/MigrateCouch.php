<?php

namespace App\Console\Commands;

use App\Helpers\CouchDbHelper;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MigrateCouch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:couchdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Mysql to CouchDB';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        // if (! $this->confirm('Are you sure you want to proceed? This will delete ALL couchdb data in your environment. YOU SHOULD MAKE A BACKUP BEFORE RUNNING THIS COMMAND.')) {
        //     return;
        // }

        $client = CouchDbHelper::client('_users');
        $adm = CouchDbHelper::admin();

        $this->info('✓ Removing every couchdb database');
        $dbs = $client->listDatabases();
        foreach ($dbs as $dbName) {
            $db = CouchDbHelper::client($dbName);
            $db->deleteDatabase();
        }
        $this->info('✓ Creating _users database');
        $client->createDatabase();

        $users = DB::table('users')->get();
        $this->info('✓ Migrating '.count($users).' users and their account');
        foreach ($users as $user) {
            // create the user
            $adm->createUser($user->id.'', generateRandomString());
            $adm->addRoleToUser($user->id.'', CouchDbHelper::getRoleName($user->account_id));

            // create his db
            $client = CouchDbHelper::getAccountDatabase($user->account_id);
            $client->createDatabase();
            CouchDbHelper::admin(CouchDbHelper::getAccountDatabaseName($user->account_id))->addDatabaseMemberRole(CouchDbHelper::getRoleName($user->account_id));

            //setting note design documents
            $favNotesFn = "function(doc) { if (doc.type === 'note' && doc.is_favorited === true) { emit(doc.created_at, null); } }";
            $design_doc = (object) [
                '_id' => '_design/notes',
                'language' => 'javascript',
                'views' => [
                    'favorites'=> ['map' => $favNotesFn],
                ],
            ];
            $client->storeDoc($design_doc);
        }

        $notes = DB::table('notes')->get();
        $this->info('✓ Migrating '.count($notes).' notes');
        foreach ($notes as $note) {
            $client = CouchDbHelper::getAccountDatabase($note->account_id);

            $new_doc = (object) [
                '_id' => 'legacy-note-'.$note->id,
                'type' => 'note',
                'contact_id' => $note->contact_id,
                'created_at' => $note->created_at,
                'updated_at' => $note->updated_at,
                'body' => $note->body,
                'is_favorited' => $note->is_favorited ? true : false,
                'favorited_at' => $note->favorited_at,
            ];
            $client->storeDoc($new_doc);
        }

        $this->info('');
        $this->info('');
        $this->info('✓ Done migrating CouchDB. Enjoy your brand new offline first database !');
        $this->info('');
    }
}

function generateRandomString($length = 100)
{
    return 'aaaa';
    // return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
