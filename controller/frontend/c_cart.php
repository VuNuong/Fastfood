<?php
class cart
{
    public function __construct()
    {
        // Khởi tạo giỏ hàng
        if (!isset($_SESSION["customer_id"]))
            include "view/frontend/noLogin.php";
        if (!isset($_SESSION["cart"]))
            $_SESSION["cart"] = array();
            $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
            $action = isset($_GET["action"]) ? $_GET["action"] : "";
        switch ($action) {
            case 'add':
                $this->cartAdd($id);
                break;
            case "delete":
                $this->cartDelete($id);
                //quay tro lai trang gio hang
                echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
                break;
            case "destroy":
                $this->cartDestroy();
                //quay tro lai trang gio hang
                echo "<script language='javascript'>location.href='index.php?controller=cart';</script>";
                break;
            case "update":
                //duyet tung phan tu cua session array, lay so luong theo kieu POST
                foreach ($_SESSION["cart"] as $product) {
                    $product_id = $product["product_id"];
                    $number = $_POST["product_$product_id"];
                    //cap nhat lai so luong trong phan tu nay
                    $this->cartUpdate($product_id, $number);
                }
                //quay tro lai trang gio hang
                echo "<script language='javascript'>location.href='index.php?controller=checkout';</script>";
                break;
        }
        include "view/frontend/cart.php";
    }
    public function cartAdd($product_id)
    {
        if (isset($_SESSION['cart'][$product_id])) {
            //nếu đã có sp trong giỏ hàng thì số lượng lên 1
            $_SESSION['cart'][$product_id]['number']++;
        } else {
            //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
            $product = model::getRecord("select * from product where product_id = $product_id");
            $_SESSION['cart'][$product_id] = array(
                'product_id' => $product_id,
                'product_name' => $product->product_name,
                'product_img' => $product->product_img,
                'number' => 1,
                'product_price' => $product->product_price,
                'product_upTo' => $product->product_upTo,
            );
        }
    }
    /**
     * Cập nhật số lượng sản phẩm
     * @param int
     * @param int
     */
    public function cartUpdate($product_id, $number)
    {
        if ($number == 0) {
            //xóa sp ra khỏi giỏ hàng
            unset($_SESSION['cart'][$product_id]);
        } else {
            $_SESSION['cart'][$product_id]['number'] = $number;
        }
    }
    /**
     * Xóa sản phẩm ra khỏi giỏ hàng
     * @param int
     */
    public function cartDelete($product_id)
    {
        unset($_SESSION['cart'][$product_id]);
    }
    /**
     * Tổng giá trị giỏ hàng
     */
    public function cart_total()
    {
        $total = 0;
        foreach ($_SESSION['cart'] as $product) {
            $total += $product['product_price'] * $product['number'];
        }
        return $total;
    }
    /**
     * Số sản phẩm có trong giỏ hàng
     */
    public function cart_number()
    {
        $number = 0;
        foreach ($_SESSION['cart'] as $product) {
            $number += $product['number'];
        }
        return $number;
    }
    /**
     * Danh sách sản phẩm trong giỏ hàng
     */
    public function cartList()
    {
        return $_SESSION['cart'];
    }
    /**
     * Xóa giỏ hàng
     */
    public function cartDestroy()
    {
        $_SESSION['cart'] = array();
    }
}
new cart();
