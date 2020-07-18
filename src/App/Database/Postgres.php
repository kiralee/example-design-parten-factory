<?php

namespace App\Database;

use App\Interfaces\InterfaceDb;


class Postgres implements InterfaceDb{

    public function connect(){
        return "Postgres";
    }
}
