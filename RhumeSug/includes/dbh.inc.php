<?php

require 'configBDD.inc.php';

class Dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    public $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }
    public function connect(){
        $this->servername = CONFIG_DB['host'];
        $this->username = CONFIG_DB['username'];
        $this->password = CONFIG_DB['password'];
        $this->dbname = CONFIG_DB['dbname'];
        $this->charset = CONFIG_DB['charset'];

        try {
            //DATA SOURCE NAME = dsn
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            echo "connection success";
        } catch (PDOEXCEPTION $e){
            echo "connection failed: ".$e->getMessage;
        }
    }
}