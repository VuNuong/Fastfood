<?php
    class login {
        public function __construct() {
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $pass = md5($pass);
                $check = model::getRecord("select user_email, user_password from user where user_email='$email'");
                if(isset($check->user_email)){
                    if($check->user_password == $pass){
                        $_SESSION["user_email"] = $email;
                        header("location:admin.php");
                    }
                }
            }
            include "view/backend/login.php";
        }
    }
    new login();
?>