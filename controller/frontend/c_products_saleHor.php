<?php
    class products_saleHor {
        public function __construct() {
            $data = model::getAll("select * from product where product_sale = 1 order by product_id asc limit 0,3");
            include "view/frontend/products_saleHor.php";
        }
    }
    new products_saleHor();
?>