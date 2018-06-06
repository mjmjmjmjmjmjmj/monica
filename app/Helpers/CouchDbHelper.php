<?php

namespace App\Helpers;

use PHPOnCouch\CouchAdmin;
use PHPOnCouch\CouchClient;

class CouchDbHelper
{
    public static function client($dbName)
    {
        $config = config('database.connections.couchdb');
        // dd($config);
        return new CouchClient('http://'.$config['user'].':'.$config['password'].'@'.$config['host'].':'.$config['port'], $dbName);
    }

    public static function admin($dbName = 'users')
    {
        $client = self::client($dbName);

        return new CouchAdmin($client);
    }

    public static function getAccountDatabase($clientId)
    {
        return self::client(self::getAccountDatabaseName($clientId));
    }

    public static function getAccountDatabaseName($clientId)
    {
        return 'accountdb-'.$clientId;
    }

    public static function getRoleName($clientId)
    {
        return 'account-'.$clientId;
    }
}
