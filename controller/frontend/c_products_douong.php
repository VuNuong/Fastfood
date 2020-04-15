<?php
    class products_douong {
        public function __construct() {
            $data = model::getAll("select * from product where product_fk_id = 7 order by product_id asc limit 0,10");
            $count = model::numRows("select product_id from product where product_fk_id = 7");
            include "view/frontend/products_douong.php";
        }
    }
    new products_douong();
?>