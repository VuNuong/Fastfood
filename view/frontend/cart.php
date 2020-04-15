<div class="container">
    <section>
        <form class="row was-validate" method="post" action="index.php?controller=cart&action=update">
            <div class="col-md-9 col-sm-12 col-12">
                <div class="line">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="custom">
                                <label class="custom-control-label" for="custom">Chọn tất cả</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            Xoá tất cả <a href="index.php?controller=cart&action=destroy" class="del-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
                <?php foreach ($_SESSION["cart"] as $key => $value) : ?>
                    <div class="line">
                        <div class="row align-items-center">
                            <div class="col-md-1 col-sm-1 col-1">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="sp">
                                    <label class="custom-control-label" for="sp"></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-8 col-8">
                                <div class="row product">
                                    <div class="col-md-3 col-sm-3 col-3 product-img">
                                        <div class="product-img__crop">
                                            <img src="public/upload/<?php echo $value["product_img"]; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-9 product-content">
                                        <h6><?php echo $value["product_name"] ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-3 col-3 price">
                                <p class="price__fee"><?php echo $value["product_price"] - $value["product_upTo"]/100*$value["product_price"] ?>đ</p>
                                <p class="price__old"><?php echo $value["product_price"] ?>đ</p>
                                <p class="price__sale">-<?php echo $value["product_upTo"] ?>%</p>
                            </div>
                            <div class="col-md-2">
                                <input type="number" min="1" max="1000" step="1" class="count" value="1" name="product_<?php echo $value["product_id"] ?>">
                            </div>
                            <div class="col-md-1">
                                <a href="index.php?controller=cart&action=delete&id=<?php echo $value["product_id"]; ?>" class="del-btn"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-3">
                <div class="line">
                    <h5 class="sum-title">Thông tin đơn hàng</h5>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <span class="sum-desc">Tạm tính: </span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <span class="sum-fee" id="tamtinh"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <span class="sum-desc">Khuyến mãi: </span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <span class="sum-fee" id="khuyenmai">200000</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <span class="sum-desc sum-desc--title">Tổng tiền: </span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <span class="sum-fee sum-fee--title" id="thanhtien">0</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-outline-info btn-sm" href="index.php?controller=sanpham">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success w-100" type="submit">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>