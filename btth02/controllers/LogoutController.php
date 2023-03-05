<?php
class LogoutController {
    public function index() {
        session_start();
        if (isset($_SESSION['LAST_ACTIVITY'])) {
            session_destroy();
            header("Location: ?controller=login");
        }
    }
}
?>