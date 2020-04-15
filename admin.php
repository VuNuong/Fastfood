<?php
    session_start();
    include "config.php";
    include "model/model.php";
    if(isset($_SESSION["user_email"]) == false)
        include "controller/backend/c_login.php";
    else{
        $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
        $controller = "controller/backend/c_$controller.php";
        include "view/backend/home.php";
    }
?>