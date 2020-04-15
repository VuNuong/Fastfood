<style>
    table tr th,
    table tr td {
        padding: 0.4rem !important;
    }
</style>
<h3 class="display-3">List Order</h3>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Khách hàng</th>
                <th scope="col">Ngày mua</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value) : ?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td><?php echo $value->customer_name; ?></td>
                    <td>
                        <?php
                        $date = date_create($value->order_date);
                        echo date_format($date, "d/m/Y");
                        ?>
                    </td>
                    <td><?php echo number_format($value->order_price, 0, ".", "."); ?> VNĐ</td>
                    <td><?php echo $value->order_status == 1 ? "Đã giao hàng" : "<span style='color: #ab3434;'>Chưa giao hàng</span>" ?></td>
                    <td>
                        <a class="btn btn-outline-info btn-sm" href="admin.php?controller=order_detail&order_id=<?php echo $value->order_id; ?>">Chi tiết</a>
                        <a class="btn btn-outline-danger btn-sm" href="admin.php?controller=order&action=delete&order_id=<?php echo $value->order_id; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<ul class="pagination float-right">
    <?php for ($i = 1; $i <= $numPage; $i++) : ?>
        <li class="page-item"><a class="page-link" href="admin.php?controller=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
</ul>