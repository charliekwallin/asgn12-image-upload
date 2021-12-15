<?php

class UploadImage {

    // start of active record code
    
    static public $database;

    static public function set_database($database) {
        self::$database = $database;
    }
}