<?php  

class Dbh {
    //Database properties
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "postcenter";
    private $charset = "utf8mb4";

    //connect into database fuction
    protected function connection(){
        
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $pdo;
            
         }  catch (PDOException $e) {
            echo "Conenction failed: ".$e->getMessage();
        }
        //check the connection

    }
}
