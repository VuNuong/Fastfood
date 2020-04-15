<?php
    class category_news {
        public function __construct() {
            $data = model::getAll("select * from new");
            include "view/frontend/news.php";
        }
    }
    new category_news();
?>