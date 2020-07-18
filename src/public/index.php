<?php
require __DIR__.'/../../vendor/autoload.php';

use App\Database\DbFactory;
use App\Helper\DatabasePlugin;
use App\Helper\Facades\File;

$file = new File();
$envConfig = $file->readFile("../../.env");

$dbFactory = new DbFactory();

$db = $dbFactory->getDb(DatabasePlugin::MYSQL);
//$db = $dbFactory->getDb(DatabasePlugin::Mongo);
//$db = $dbFactory->getDb(DatabasePlugin::Postgres);

var_dump($db->connect());