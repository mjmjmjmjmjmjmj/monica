<?php

namespace App\Models;

use App\Helpers\CouchDbHelper;
use App\Helpers\RandomHelper;
use Jenssegers\Model\Model;
use PHPOnCouch\CouchDocument;

class CouchUser extends Model
{
    protected $hidden = [];
    protected $guarded = ['salt', 'password_sha', 'name', 'roles', 'type'];

    /**
     * Get a user from his user_id
     *
     * @return CouchDocument
     */
    public static function getOneById($userId)
    {
        $client = CouchDbHelper::client('_users');
        try {
            $doc = $client->getDoc('org.couchdb.user:'.$userId);
        } catch ( Exception $e ) {
            if ( $e->getCode() == 404 ) {
                return null;
            }
        }
        return $doc;
    }

    /**
     * Create a user from its equivalent in mysql
     *
     * @return void
     */
    public static function createFromUser($user)
    {
        $client = CouchDbHelper::client('_users');
        $adm = CouchDbHelper::admin();
        $userId = ''.$user->id;
        $roleName = 'account-'.$user->account_id;
        $databaseName = CouchDbHelper::getAccountDatabaseName($user->account_id);

        // create user and roles
        $adm->createUser($userId, RandomHelper::generateRandomString());
        $adm->addRoleToUser($userId, $roleName);
        
        // add custom data to user
        $couchUser = self::getOneById($userId);
        $couchUser->database = $databaseName;
        $client->storeDoc($couchUser);

        // create its database
        $client = CouchDbHelper::getAccountDatabase($user->account_id);
        $client->createDatabase();
        CouchDbHelper::admin(CouchDbHelper::getAccountDatabaseName($user->account_id))->addDatabaseMemberRole($roleName);
    }

}
