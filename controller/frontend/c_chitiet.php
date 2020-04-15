<?php
    class chitiet{
        public function __construct() {
            $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
            $data = model::getRecord("select * from product where product_id = $id");
            $all = model::getAll("select * from product where product_fk_id = $data->product_fk_id");
            include "view/frontend/chitiet.php";
        }
    }
    new chitiet();
?>