<?php
class DBConnection{
    private $conn=null;

    public function __construct(){
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=trinh;port=3306', 'root','');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->conn;
    }

}