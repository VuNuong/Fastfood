<div class='container-fluid'>
    <section id="banh-kem">
        <div class="row">
            <div class="col-md-5">
                <a class="tasty" href="#">
                    <div class="tasty__crop">
                        <img src="public/upload/1554315472123.jpg" alt="" class="tasty__img">
                    </div>
                    <div class="tasty__content">
                        <h4 class="tasty__title">Bánh kem tươi</h4>
                        <button class="btn btn-danger tasty__btn"><i class="fas fa-hand-point-right"></i>
                            Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="col-md-7">
                <div class="bonSlide" id="slide-7">
                    <?php foreach ($banhKem as $key => $value) : ?>
                        <div class="bonS bonS--sm">
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
                                    <div class="bonS__fee"><?php echo number_format($priceNew, 0, ".", "."); ?>đ</div>
                                    <div class="bonS__del"><?php echo number_format($value->product_price, 0, ".", "."); ?>đ</div>
                                </div>
                                <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem
                                    nhanh
                                </div>
                                <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
                                <form action="cart/add" method="post" enctype="multipart/form-data">
                                    <div class="bonS__btn">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $value->product_id; ?>" class="btn btn-sm btn-outline-dark bonS__link"><i class="fas fa-cart-plus"></i> Mua
                                            hàng</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow">
                    <a href="#" id="arrow-prev" class="arrow__item"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" id="arrow-next" class='arrow__item'><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="banh-gato">
        <div class="row">
            <div class="col-md-7">
                <div class="bonSlide" id="slide-8">
                    <?php foreach ($banhTrangMieng as $key => $value) : ?>
                        <div class="bonS bonS--sm">
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
                                    <div class="bonS__fee"><?php echo number_format($priceNew, 0, ".", "."); ?>đ</div>
                                    <div class="bonS__del"><?php echo number_format($value->product_price, 0, ".", "."); ?>đ</div>
                                </div>
                                <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem
                                    nhanh
                                </div>
                                <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
                                <form action="cart/add" method="post" enctype="multipart/form-data">
                                    <div class="bonS__btn">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $value->product_id; ?>" class="btn btn-sm btn-outline-dark bonS__link"><i class="fas fa-cart-plus"></i> Mua
                                            hàng</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow">
                    <a href="#" id="arrow-prev-1" class="arrow__item"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" id="arrow-next-1" class='arrow__item'><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <a class="tasty" href="#">
                    <div class="tasty__crop">
                        <img src="public/upload/15542652621000x600p_636815855950737125_HasThumb.jpg" alt="" class="tasty__img">
                    </div>
                    <div class="tasty__content">
                        <h4 class="tasty__title">Đồ ăn vặt</h4>
                        <button class="btn btn-danger tasty__btn"><i class="fas fa-hand-point-right"></i>
                            Xem chi tiết</button>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="banh-trangmieng">
        <div class="row">
            <div class="col-md-5">
                <a class="tasty" href="#">
                    <div class="tasty__crop">
                        <img src="public/upload/15542650151000x600p_636815852441696419_HasThumb.jpg" alt="" class="tasty__img">
                    </div>
                    <div class="tasty__content">
                        <h4 class="tasty__title">Đồ uống</h4>
                        <button class="btn btn-danger tasty__btn"><i class="fas fa-hand-point-right"></i>
                            Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="col-md-7">
                <div class="bonSlide" id="slide-9">
                    <?php foreach ($banhGato as $key => $value) : ?>
                        <div class="bonS bonS--sm">
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
                                    <div class="bonS__fee"><?php echo number_format($priceNew, 0, ".", "."); ?>đ</div>
                                    <div class="bonS__del"><?php echo number_format($value->product_price, 0, ".", "."); ?>đ</div>
                                </div>
                                <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem
                                    nhanh
                                </div>
                                <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
                                <form action="cart/add" method="post" enctype="multipart/form-data">
                                    <div class="bonS__btn">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $value->product_id; ?>" class="btn btn-sm btn-outline-dark bonS__link"><i class="fas fa-cart-plus"></i> Mua
                                            hàng</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow">
                    <a href="#" id="arrow-prev-2" class="arrow__item"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" id="arrow-next-2" class='arrow__item'><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

        </div>
    </section>
    <section id="banh-mytuoi">
        <div class="row">
            <div class="col-md-7">
                <div class="bonSlide" id="slide-10">
                    <?php foreach ($banhKem as $key => $value) : ?>
                        <div class="bonS bonS--sm">
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
                                    <div class="bonS__fee"><?php echo number_format($priceNew, 0, ".", "."); ?>đ</div>
                                    <div class="bonS__del"><?php echo number_format($value->product_price, 0, ".", "."); ?>đ</div>
                                </div>
                                <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem
                                    nhanh
                                </div>
                                <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
                                <form action="cart/add" method="post" enctype="multipart/form-data">
                                    <div class="bonS__btn">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $value->product_id; ?>" class="btn btn-sm btn-outline-dark bonS__link"><i class="fas fa-cart-plus"></i> Mua
                                            hàng</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow">
                    <a href="#" id="arrow-prev-3" class="arrow__item"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" id="arrow-next-3" class='arrow__item'><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <a class="tasty" href="#">
                    <div class="tasty__crop">
                        <img src="public/upload/1554315472123.jpg" alt="" class="tasty__img">
                    </div>
                    <div class="tasty__content">
                        <h4 class="tasty__title">Bánh kem</h4>
                        <button class="btn btn-danger tasty__btn"><i class="fas fa-hand-point-right"></i>
                            Xem chi tiết</button>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="do-uong">
        <div class="row">
            <div class="col-md-5">
                <a class="tasty" href="#">
                    <div class="tasty__crop">
                        <img src="public/upload/1554314739fb 83 2.jpg" alt="" class="tasty__img">
                    </div>
                    <div class="tasty__content">
                        <h4 class="tasty__title">Đồ ăn vặt</h4>
                        <button class="btn btn-danger tasty__btn"><i class="fas fa-hand-point-right"></i>
                            Xem chi tiết</button>
                    </div>
                </a>
            </div>
            <div class="col-md-7">
                <div class="bonSlide" id="slide-11">
                    <?php foreach ($banhTrangMieng as $key => $value) : ?>
                        <div class="bonS bonS--sm">
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
                                    <div class="bonS__fee"><?php echo number_format($priceNew, 0, ".", "."); ?>đ</div>
                                    <div class="bonS__del"><?php echo number_format($value->product_price, 0, ".", "."); ?>đ</div>
                                </div>
                                <div class="bonS__fast btn btn-danger"><i class="far fa-check-square"></i> Xem
                                    nhanh
                                </div>
                                <div class="bonS__cir text-center">-<?php echo $value->product_upTo; ?>%</div>
                                <form action="cart/add" method="post" enctype="multipart/form-data">
                                    <div class="bonS__btn">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $value->product_id; ?>" class="btn btn-sm btn-outline-dark bonS__link"><i class="fas fa-cart-plus"></i> Mua
                                            hàng</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="arrow">
                    <a href="#" id="arrow-prev-4" class="arrow__item"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" id="arrow-next-4" class='arrow__item'><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

        </div>
    </section>
</div>