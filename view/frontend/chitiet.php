<div class="container">
    <section>
        <div class="row">
            <div class="col-md-5">
                <div class="album">
                    <div class="album-img">
                        <div class="album-img__crop">
                            <img src="public/upload/<?php echo $data->product_img; ?>" class="">
                        </div>
                    </div>
                    <div class="album-list">
                        <ul class="row justify-content-center album-list__content">
                            <li class="col-4">
                                <div class="album-img">
                                    <div class='album-img__crop'>
                                        <img src="public/upload/<?php echo $data->product_img; ?>" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="info">
                    <h4 class='info__head'><?php echo $data->product_name; ?></h4>
                    <?php
                    $priceMain = $data->product_price;
                    $priceSale = $data->product_upTo;
                    $priceNew = $priceMain - ($priceSale / 100) * $priceMain;
                    ?>
                    <p class='info__desc'>Giá: <span><?php echo number_format($priceNew); ?>đ</span></p>
                    <p class='info__desc'>Mô tả sản phẩm:</p>
                    <?php echo $data->product_content; ?>
                    <form action="cart/add" method="post" enctype="multipart/form-data">
                        <a class="btn btn-outline-danger info__btn" href="index.php?controller=cart&action=add&id=<?php echo $data->product_id; ?>">Thêm vào giỏ</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="sweet">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-9 col-sm-9 col-9">
                    <h3 class="sweet__title">sản phẩm liên quan</h3>
                </div>
                <div class="col-md-3 col-sm-3 col-3 text-right">
                    <a class="btn btn-secondary btn-sm prev-btn-12">
                        <i class="fas fa-angle-left"></i>
                    </a>
                    <a class="btn btn-secondary btn-sm next-btn-12">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="bonSlide" id="slide-12">
            <?php foreach ($all as $key => $value) : ?>
                <div class="bonS">
                    <div class="bonS__main">
                        <a href="index.php?controller=chitiet&id=<?php echo $value->product_id; ?>">
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
                            <div class="bonS__fee"><?php echo $priceNew; ?>đ</div>
                            <div class="bonS__del"><?php echo $value->product_price; ?>đ</div>
                        </div>
                        <div class="bonS__btn">
                            <a href="#" class="btn btn-outline-dark btn-sm bonS__link"><i class="fas fa-cart-plus"></i> Mua
                                hàng</a>
                        </div>
                        <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem nhanh
                        </div>
                        <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>