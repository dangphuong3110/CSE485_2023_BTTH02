<?php
include("/configs/DBConnection.php");
include("/models/Category.php");
class CategoryServices
{
    public function getAllCategory()
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai INNER JOIN baiviet ON baiviet.ma_tloai=ma_tloai.id";
        $stmt = $conn->query($sql);

        $categories = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'], $row['ten_tloai'], $row['so_luong']);
            array_push($categories, $category);
        }
        
        return $categories;
    }
}
?>