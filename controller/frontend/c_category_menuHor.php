<?php
    class category_menuHor {
        public function __construct() {
            $data = model::getAll("select * from category_product");
            include "view/frontend/category_menuHor.php";
        }
    }
    new category_menuHor();
?>