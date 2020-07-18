<?php

namespace App\Database;

// use App\Helper\DatabasePlugin;
// use App\Database\Mongo;
// use App\Database\MySql;
// use App\Database\Postgres;

class DbFactory{
    public function getDb($dbConstant){
        // switch($dbName){
        //     case DatabasePlugin::MySql:
        //         return new MySql();
        //     break;
        //     case DatabasePlugin::Mongo:
        //         return new Mongo();
        //     break;
        //     case DatabasePlugin::Postgres:
        //         return new Postgres();
        //     break;
        // }
        $instance = "App\\Database\\$dbConstant";
        return new $instance();
    }
}