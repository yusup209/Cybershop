<?php
    class Database{
        private $dsn = "mysql",
                $host = "localhost",
                $usrname = "root",
                $passwrd = "root",
                $dbname  = "cybershop";
        public $conn = null;


        function __construct(){
            $this->conn = new PDO($this->dsn.":host=".$this->host.";dbname=".$this->dbname.";",$this->usrname,$this->passwrd);
        }
    }

    
?>