<?php

class Dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "toto";
        $this->password = "toto";
        $this->dbname = "oop_tuto";
        $this->charset = "utf8mb4";

        try {
            //DATA SOURCE NAME = dsn
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOEXCEPTION $e){
            echo "connection failed: ".$e->getMessage;
        }
    }
}