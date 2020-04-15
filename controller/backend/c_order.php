<?php
    class order {
        public function __construct() {
            $action = isset($_GET["action"]) ? $_GET["action"] : "";
            $order_id = isset($_GET["order_id"]) && is_numeric($_GET["order_id"]) ? $_GET["order_id"] : 0;
            switch($action) {
                case 'delete':
                    // echo "dellllll";
                    model::execute("delete from orderr where order_id = $order_id");
                    break;
            }
            $recordPerPage = 10;
            $totalRecord = model::numRows("select * from orderr inner join customer on orderr.customer_id = customer.customer_id");
            $numPage = ceil($totalRecord/$recordPerPage);
            $p = isset($_GET["p"]) && $_GET["p"] > 0 && is_numeric($_GET["p"]) ? $_GET["p"] - 1 : 0;
            $from = $p * $recordPerPage;
            $data = model::getAll("select * from orderr inner join customer on orderr.customer_id = customer.customer_id order by order_status, order_id desc limit $from, $recordPerPage");
            include "view/backend/order.php";
        }
    }
    new order();