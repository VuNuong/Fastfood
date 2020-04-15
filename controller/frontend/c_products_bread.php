<?php
    class product_bread {
        public function __construct() {
            $action = isset($_GET['action']) ? $_GET["action"] : "";
            $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
            $category = model::getRecord("select * from category_product where category_product_id = $id");
            include "view/frontend/products_bread.php";
        }
    }
    new product_bread();
?>