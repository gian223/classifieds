<?php
class Database{
    public $connection;

    public function __construct(){
        $this->open_db_connection();
    }
    
    public function open_db_connection(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->connection->connect_errno){
            die(' Database failed to connect');
        }
    }

    public function query($sql){
        $escaped = $this->escape_string($sql);
        $result = $this->connection->query($escaped);
        return $result;
    }

    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }
}

$database = new Database();
