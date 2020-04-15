<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sweet Bon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAnw -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/home/favicon.ico">
    <link href="public/home/css/app.css" rel="stylesheet">
</head>

<body>
    <!-- begin: Scroll to top -->
    <a href="#" class="totop"><i class="fas fa-arrow-up"></i></a>
    <!-- end: Scroll to top -->
    <div id="pageContainer">
        <?php include "view/frontend/header.php"; ?>
        <!-- begin: menu -->
        <?php include "controller/frontend/c_category_menu.php"; ?>
        <!-- begin: menu -->
        <div class="main">
            <?php
            if (file_exists($fileController))
                include $fileController;
            ?>
        </div>
        <footer>
            <!-- begin: footer-top -->
            <div class="ft-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="bear">
                                <div class="bear__main">
                                    <div class="bear__icon"><i class="fab fa-algolia"></i></div>
                                    <div class="bear__contact">+ 1900.636.099</div>
                                    <div class="bear__desc">hỗ trợ trực tuyến</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bear">
                                <div class="bear__main">
                                    <div class="bear__icon"><i class="fab fa-algolia"></i></div>
                                    <div class="bear__contact">thời gian làm việc</div>
                                    <div class="bear__desc">các ngày trong tuần</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bear">
                                <div class="bear__main">
                                    <div class="bear__icon"><i class="fab fa-algolia"></i></div>
                                    <div class="bear__contact">giao hàng miễn phí</div>
                                    <div class="bear__desc">với hoá đơn trên 500k</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bear">
                                <div class="bear__main">
                                    <div class="bear__icon"><i class="fab fa-algolia"></i></div>
                                    <div class="bear__contact">đổi trả hàng</div>
                                    <div class="bear__desc">đổi trả miễn phí 7 ngày</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: footer-top -->
            <!-- begin: footer-mid -->
            <div class="ft-mid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="bush">
                                <a href="#" class="bush__title">liên kết</a>
                                <div class="bush__list">
                                    <a href="#" class="bush__link"><i class="far fa-star"></i> trang chủ</a>
                                    <a href="#" class="bush__link"><i class="far fa-star"></i> sản phẩm</a>
                                    <a href="#" class="bush__link"><i class="far fa-star"></i> blog</a>
                                    <a href="#" class="bush__link"><i class="far fa-star"></i> giới thiệu</a>
                                    <a href="#" class="bush__link"><i class="far fa-star"></i> liên hệ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bush">
                                <a href="#" class="bush__title">kết nối với chúng tôi</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bush">
                                <a href="#" class="bush__title">bản tin</a>
                                <form class="search" method="" action="">
                                    <div class="search__text">
                                        <input type="text" name="" placeholder="Nhập email của bạn">
                                    </div>
                                    <div class="search__btn--icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </form>
                                <div class="bush__hi">
                                    <a href="#" class="bush__icon"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="bush__icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="bush__icon"><i class="fas fa-wifi"></i></a>
                                    <a href="#" class="bush__icon"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="bush__icon"><i class="fab fa-google"></i></a>
                                    <a href="#" class="bush__icon"><i class="fab fa-pinterest"></i></a>
                                    <a href="#" class="bush__icon"><i class="fas fa-camera"></i></a>
                                    <a href="#" class="bush__icon"><i class="fas fa-air-freshener"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: footer-mid -->
        </footer>
    </div>
    <script type="text/javascript" src="public/home/js/app.bundle.js"></script>
</body>

</html>