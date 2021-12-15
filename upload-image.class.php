<?php

class UploadImage {

    // start of active record code

    static public $database;

    // TODO: figure out why I can't set this to protected
    static public function set_database($database) {
        self::$database = $database;
    }
    
    static public function find_by_sql($sql) {
        $result = self::$database->query($sql);
        if(!$result) {
            exit("Database query failed.");
        }
        return $result;
    }

    static public function find_all() {
        $sql = "SELECT * FROM images ORDER BY id DESC";
        return self::find_by_sql($sql);
    }


}