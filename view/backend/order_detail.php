<style>
    table tr th,
    table tr td {
        padding: 0.4rem !important;
        text-align: center;
    }

    .desc {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.8);
    }

    .title {
        font-size: 16px;
        font-weight: 600;
    }
</style>
<h3 class="display-3">Chi tiết order</h3>
<?php 
        //kiem tra, neu don hang chua giao thi hien thi button giao hang
        $check = model::getRecord("select customer_id,order_status from orderr where order_id=$order_id");
        if($check->order_status == 0)
        {
     ?>
        <a style="background-color: #335353" href="admin.php?controller=order_detail&act=send&order_id=<?php echo $order_id; ?>" class="btn btn-primary">Giao hàng</a>&nbsp;
        <?php } ?>
<?php
$customer = model::getRecord("select * from customer where customer_id = $check->customer_id");
?>

<div class="row">
    <div class="col-md-2"><span class="title">Khách hàng:</span></div>
    <div class="col-md-10"><span class="desc"><?php echo $customer->customer_name; ?></span></div>
</div>
<div class="row">
    <div class="col-md-2"><span class="title">Địa chỉ:</span></div>
    <div class="col-md-10"><span class="desc"><?php echo $customer->customer_address; ?></span></div>
</div>
<div class="row">
    <div class="col-md-2"><span class="title">Điện thoại:</span></div>
    <div class="col-md-10"><span class="desc"><?php echo $customer->customer_phone; ?></span></div>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) : ?>
                <?php
                $product = model::getRecord("select * from product where product_id = " . $value->order_product_id);
                ?>
                <tr>
                    <th scope="col"><?php echo $key + 1 ?></th>
                    <td><?php echo $product->product_name ?></td>
                    <td>
                        <img src="public/upload/<?php echo $product->product_img ?>" alt="" style="width: 60px">
                    </td>
                    <td><?php echo number_format($product->product_price, 0, ".", ".") ?> VNĐ</td>
                    <td><?php echo $value->order_number ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<button class='btn btn-outline-dark' onclick="history.go(-1)">Back</button>
<ul class="pagination float-right">
    <?php for ($i = 1; $i <= $numPage; $i++) : ?>
        <li class="page-item"><a class="page-link" href="admin.php?controller=order_detail&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul>