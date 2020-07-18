<?php

namespace App\Database;

use App\Interfaces\InterfaceDb;


class MySql implements InterfaceDb{

    public function connect(){
        $DbConfig = 
        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            return "Connection failed: " . $conn->connect_error;
        }
        return "Connected successfully";
    }
}
