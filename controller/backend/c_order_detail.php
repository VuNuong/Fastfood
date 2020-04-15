<?php
    class order_detail {
        public function __construct() {
            $action = isset($_GET["act"]) ? $_GET["act"] : "";
            $order_id = isset($_GET["order_id"]) && is_numeric($_GET["order_id"]) ? $_GET["order_id"] : 0;
            switch($action) {
                case 'send':
                    model::execute("update orderr set order_status=1 where order_id = $order_id");
                    header("location:admin.php?controller=order_detail&order_id=$order_id");
                    break;
            }
            $recordPerPage = 5;
            $totalRecord = model::numRows("select * from order_detail where order_id = $order_id");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from order_detail where order_id = $order_id limit $from, $recordPerPage");
            include "view/backend/order_detail.php";
        }
    }
    new order_detail();
?>