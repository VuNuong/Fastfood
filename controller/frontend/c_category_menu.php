<?php
    class category_menu {
        public function __construct() {
            $data = model::getAll("select * from category_menu");
            $dataHor = model::getAll("select * from category_product");
            include "view/frontend/category_menu.php";
        }
    }
    new category_menu();
?>