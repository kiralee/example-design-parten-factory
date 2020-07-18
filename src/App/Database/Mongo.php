<?php

namespace App\Database;

use App\Interfaces\InterfaceDb;

class Mongo implements InterfaceDb{
    public function connect(){
        return "MongoDB";
    }
}