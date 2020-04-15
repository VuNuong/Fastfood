<?php
    class sanpham {
        public function __construct() {
            $banhKem = model::getAll("select * from product where product_fk_id = 1");
            $banhTrangMieng = model::getAll("select * from product where product_fk_id = 5");
            $banhGato = model::getAll("select * from product where product_fk_id = 7");
            // echo "<pre>";
            // print_r($banhKem);
            // echo "</pre>";
            include "view/frontend/sanpham.php";
        }
    }
    new sanpham();
?>