<?php
    class category_slide {
        public function __construct() {
            $data = model::getAll("select * from slide");
            include "view/frontend/slide.php";
        }
    }
    new category_slide();
?>