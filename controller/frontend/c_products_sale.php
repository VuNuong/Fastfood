<?php
    class products_sale {
        public function __construct() {
            $data = model::getAll("select * from product where product_sale = 1 order by product_id asc limit 0,10");
            include "view/frontend/products_sale.php";
        }
    }
    new products_sale();
?>