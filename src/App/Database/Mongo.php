<?php

namespace App\Database;

use App\Interfaces\InterfaceDb;
use App\Helper\Facades\Config;
use App\Helper\DatabasePlugin;

class Mongo implements InterfaceDb{

    protected $_host = "";
    protected $_userName = "";
    protected $_password = "";
    protected $_dbName = "";
    protected $_connect = null;
    protected $_pluginName = DatabasePlugin::MONGO;

    /**
     * Connect Function
     *
     * @return Mongo
     */
    public function connect(){
        try{
            $dbConfig = Config::getConfig($this->_pluginName);
            // Create connection
            $this->_host = $dbConfig['host'];
            $this->_userName = $dbConfig['username'];
            $this->_password = $dbConfig['password'];
            $this->_dbName = $dbConfig['database'];
            $this->_connect = new \MongoDB\Driver\Manager("mongodb://localhost:27017/");
            return $this;
        }catch(\PDOException  $e){
            return $e->getMessage();
        }    
    }
}