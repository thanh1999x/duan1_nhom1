<?php
class DB{
    protected $conn;
    protected $servername = "localhost:3366";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "duan1";
    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=$this->servername; charset=utf8; dbname=$this->dbname",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e){
            return "Connected failed".$e->getMessage();
        }
    }
}