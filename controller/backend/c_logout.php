<?php
    class logout {
        public function __construct() {
            unset($_SESSION["user_email"]);
            header("location:admin.php");
        }
    }
    new logout();
?>