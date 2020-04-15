<?php
    class products_dongot {
        public function __construct() {
            $slide = model::getAll("select * from slide_2");
            $data = model::getAll("select * from product where product_fk_id = 1 order by product_id asc limit 0,10");
            include "view/frontend/products_dongot.php";
        }
    }
    new products_dongot();
?>