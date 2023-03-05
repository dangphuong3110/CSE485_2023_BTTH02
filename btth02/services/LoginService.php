<?php
include("configs/DBConnection.php");
class LoginService {
    public function checkLogin($username, $password) {
        $db = new DBConnection();
        $conn = $db->getConnection();

        $sql = "SELECT * FROM user WHERE ten_dnhap = '$username' and mat_khau = '$password'";
        $stmt = $conn->query($sql);

        return $stmt->fetch();
    }
}
?>