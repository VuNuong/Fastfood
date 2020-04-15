<?php
    class product {
        public function __construct() {
            $action = isset($_GET['action']) ? $_GET["action"] : "";
            $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
            $recordPerPage = 10;
            $totalRecord = model::numRows("select product_id from product where product_fk_id = $id");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $category = model::getRecord("select * from category_product where category_product_id = $id");
            $data = model::getAll("select * from product where product_fk_id = $id order by product_id asc limit $from,$totalRecord");
            include "view/frontend/products_category.php";
        }
    }
    new product();
?>