<?php
include("configs/DBConnection.php");
include("models/Category.php");
class CategoryServices
{
    public function getAllCategory()
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai";
        $stmt = $conn->query($sql);

        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
            array_push($categories, $category);
        }
        
        return $categories;
    }

    public function editCategory($id)
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai WHERE ma_tloai = '" . $id . "'";
        $stmt = $conn->query($sql);

        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
            array_push($categories, $category);
        }

        return $categories;
    }

    public function updateCategory($id, $name)
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "UPDATE `theloai` SET `ten_tloai` = '" . $name . "' WHERE `ma_tloai` = '" . $id . "'";
        $stmt_update = $conn->query($sql_update);

        $sql_select = "SELECT * FROM theloai";
        $stmt_select = $con->query($sql_select);

        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
            array_push($categories, $category);
        }

        return $categories;
    }

    public function storeCategory($name)
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql_store = "INSERT INTO `theloai`(`ten_tloai`) VALUE ('" . $name . "')";
        $stmt_store = $conn->query($sql_store);

        $sql_select = "SELECT * FROM theloai";
        $stmt_select = $con->query($sql_select);

        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
            array_push($categories, $category);
        }

        return $categories;
    }

    public function deleteCategory($id)
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql_delete = "DELETE FROM `theloai` WHERE `ma_tloai` = '" . $id . "'";
        $stmt_delete = $conn->query($sql_delete);

        $sql_select = "SELECT * FROM theloai";
        $stmt_select = $conn->query($sql_select);

        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai'], $row['SLBaiViet']);
            array_push($categories, $category);
        }

        return $categories;
    }
}
?>