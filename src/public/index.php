<?php
require __DIR__.'/../../vendor/autoload.php';
use App\Helper\HelloPattern;
$hello = new HelloPattern();
//Comment code
echo $hello->show();