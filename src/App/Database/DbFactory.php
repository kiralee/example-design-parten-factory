<?php

namespace App\Database;

class DbFactory{
    public function getDb($dbConstant){
        $instance = "App\\Database\\$dbConstant";
        return new $instance();
    }
}