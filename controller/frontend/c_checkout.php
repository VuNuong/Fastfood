<?php
class checkout
{
    public function __construct()
    {
        if (isset($_SESSION["cart"]) && isset($_SESSION["customer_id"]) && $_SESSION["customer_id"] != null && count($_SESSION["cart"]) > 0) {
            $customer_id = $_SESSION["customer_id"];
            $tonggia = 0;
            foreach ($_SESSION["cart"] as $product)
                $tonggia = $tonggia + $product["number"] * $product["product_price"];
            $order_id = model::execute("insert into orderr set customer_id = $customer_id, order_date = now(), order_price = $tonggia");
        }
        else {
            echo "<script>location.href='index.php?controller=login';</script>";
        }
        foreach($_SESSION["cart"] as $key => $value) {
            model::execute("insert into order_detail set order_id = $order_id, order_product_id = " .$value["product_id"]. ", order_number = " .$value["number"]);
        }
        $_SESSION["cart"] = array();
        include "view/frontend/checkout.php";
        // echo "<script>location.href='index.php?controller=cart';</script>";
    }
}
new checkout();
