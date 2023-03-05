<?php
require_once("configs/DBConnection.php");
include("models/Author.php");

class AuthorService{
    private $conn = null;
    public function __construct()
    {
        $dbConn = new DBConnection();
        $this->conn = $dbConn->getConnection();
    }

    public function getAllAuthor() {
        $sql = "SELECT * FROM tacgia";
        $stmt = $this->conn->query($sql);
        
        $authors = [];
        while ($row = $stmt->fetch()) {
            $author = new Author($row['ma_tgia'], $row['ten_tgia'], $row['hinh_tgia']);
            array_push($authors, $author);
        }
        return $authors;
    }

    public function getAuthorById($id){
        $sql = "SELECT * FROM tacgia WHERE ma_tgia = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();
        $author = ($row) ? new Author($row['ma_tgia'], $row['ten_tgia'], $row['hinh_tgia']) : null;
        return $author;
    }

    public function create($arguments) : bool{
        $sql = "INSERT INTO tacgia (ten_tgia, hinh_tgia) VALUE (:name, :image)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($arguments);
    }

    public function edit($arguments) : bool {
        $sql = "UPDATE tacgia SET ten_tgia = :name, hinh_tgia = :image WHERE ma_tgia = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($arguments);
    }

    public function delete($id) : bool {
        $sql = "DELETE FROM baiviet WHERE ma_tgia = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        $sql = "DELETE FROM tacgia WHERE ma_tgia = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}