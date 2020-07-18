<?php

namespace App\Helper\Facades;

class File{

    public function readFile($fileName){
        $myfile = fopen($fileName, "r") or die("Unable to open file!");
       // Output one line until end-of-file
        while(!feof($myfile)) {
            $value = \trim(fgets($myfile));
            if($value){
                putenv($value);
            }
            
        }
        fclose($myfile);
    }
}