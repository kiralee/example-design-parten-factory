<?php

namespace App\Config;

class Database{

    public static function get(){
        $arrayConnections = [
            'connections' => [
                'mysql' => [
                    'host' => getenv("MYSQL_HOST"),
                    'port' => getenv("MYSQL_PORT"),
                    'database' => getenv("MYSQL_DBNAME"),
                    'username' => getenv("MYSQL_USERNAME"),
                    'password' => getenv("MYSQL_PASSWORD"),
                ],
        
                'pgsql' => [
                    'host' => getenv("PGSQL_HOST"),
                    'port' => getenv("PGSQL_PORT"),
                    'database' => getenv("PGSQL_DBNAME"),
                    'username' => getenv("PGSQL_USERNAME"),
                    'password' => getenv("PGSQL_PASSWORD"),
                ],
        
            ],
            
        ];
        
        return $arrayConnections;
    }
}
