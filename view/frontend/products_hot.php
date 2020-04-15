<div class="sweet">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-9 col-sm-9 col-9">
            <h3 class="sweet__title">sản phẩm nổi bật</h3>
        </div>
        <div class="col-md-3 col-sm-3 col-3 text-right">
            <a class="btn btn-secondary btn-sm prev-btn-3">
                <i class="fas fa-angle-left"></i>
            </a>
            <a class="btn btn-secondary btn-sm next-btn-3">
                <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="bonSlide" id="slide-3">
    <?php foreach ($data as $key => $value) : ?>
        <div class="bonS">
            <div class="bonS__main">
                <a href="index.php?controller=chitiet&id=<?php echo $value->product_id; ?>" title="<?php echo $value->product_name; ?>">
                    <div class="bonS__img">
                        <div class="bonS_imgCrop">
                            <img src="public/upload/<?php echo $value->product_img; ?>" class="">
                        </div>
                    </div>
                    <h3 class="bonS__title text-center"><?php echo $value->product_name; ?></h3>
                </a>
                <div class="bonS__price text-center">
                    <?php
                    $priceMain = $value->product_price;
                    $priceSale = $value->product_upTo;
                    $priceNew = $priceMain - ($priceSale / 100) * $priceMain;
                    ?>
                    <div class="bonS__fee"><?php echo number_format($priceNew, 0, ".", "."); ?>đ</div>
                    <div class="bonS__del"><?php echo number_format($value->product_price, 0, ".", "."); ?>đ</div>
                </div>
                <form action="cart/add" method="post" enctype="multipart/form-data">
                    <div class="bonS__btn">
                        <a href="index.php?controller=cart&action=add&id=<?php echo $value->product_id; ?>" class="btn btn-sm btn-outline-dark bonS__link"><i class="fas fa-cart-plus"></i> Mua
                            hàng</a>
                    </div>
                </form>
                <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem nhanh
                </div>
                <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
            </div>
        </div>
    <?php endforeach; ?>
</div>