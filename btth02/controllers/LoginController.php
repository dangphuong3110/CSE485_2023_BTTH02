<?php
include("services/LoginService.php");
class LoginController {
    public function index() {
        include("views/home/login.php");
    }

    public function checkLogin() {
        $username = $_GET['username'] ?? '';
        $password = $_GET['password'] ?? '';

        if($username != '' and $password != '') {
            $loginService = new LoginService();
            if ($loginService->checkLogin($username, $password)) {
                session_start();
                $_SESSION['LAST_ACTIVITY'] = time();
                // include("views/admin/index.php");
                header("Location: ?controller=admin");
            } else {
                $message = "Lỗi không đăng nhập được";
                $invalid = true;
                include("views/home/login.php");
            }
        } else {
            $message = "Lỗi không đăng nhập được";
            $invalid = true;
            include("views/home/login.php");
        }
    }
}
