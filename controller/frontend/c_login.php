<?php
    class login {
        public function __construct() {
            $action = isset($_GET["action"]) ? $_GET["action"] : "";
            switch($action) {
                case 'logout':
                    $_SESSION["customer_id"] = null;
                    $_SESSION["customer_email"] = null;
                    echo "<script language='javascript'>location.href='index.php';</script>";
                    break;
            }
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $password = md5($password);
                // check thông tin trong csdl
                $arr = model::getRecord("select customer_id, customer_email, customer_pass, customer_name from customer where customer_email = '$email'");
                if(isset($arr->customer_email)){
                    // check pass
                    if($password == $arr->customer_pass)
                    // dang nhap thanh cong
                    $_SESSION["customer_id"] = $arr->customer_id;
                    $_SESSION["customer_email"] = $email;
                    if(isset($_GET["action"]) == "cart")
                        echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
                    else 
                        echo "<script language='javascript'>location.href='index.php';</script>";
                } else {
                    echo "<script language='javascript'>location.href='index.php?controller=login&action=fail';</script>";
                }
                echo "<script language='javascript'>location.href='index.php';</script>";
            }
            include "view/frontend/login.php";
        }
    }
    new login();
