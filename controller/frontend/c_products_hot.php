<?php
    class products_hot {
        public function __construct() {
            $data = model::getAll("select * from product where product_hot = 1 order by product_id asc limit 0,10");
            include "view/frontend/products_hot.php";
        }
    }
    new products_hot();
?>