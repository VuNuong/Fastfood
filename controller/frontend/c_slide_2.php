<?php
    class category_slide_2 {
        public function __construct() {
            $data = model::getAll("select * from slide_2");
            include "view/frontend/slide_2.php";
        }
    }
    new category_slide_2();
?>