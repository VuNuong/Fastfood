<?php
    session_start();
    include "config.php";
    include "model/model.php";
    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
    $fileController = "controller/frontend/c_$controller.php";
    if(file_exists($fileController))  
        include "view/frontend/second.php";
    else
        include "view/frontend/home.php";
?>