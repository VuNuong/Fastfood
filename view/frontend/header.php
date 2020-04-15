<!-- begin: header -->
<header>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="top-header__left list">
                        <a href="#" class="list__item"><i class="fas fa-phone list__icon list__icon"></i>
                            Hotline: 1900.636.099</a>
                        <a href="#" class="list__item"><i class="far fa-envelope list__icon list__icon"></i>
                            E-mail: hi@haravan.com</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="top-header__right list justify-content-end">
                        <a href="#" class="list__item list__item--sm"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fas fa-wifi"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fab fa-google"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fas fa-camera"></i></a>
                        <a href="#" class="list__item list__item--sm"><i class="fas fa-air-freshener"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div style="padding:0;" class="main-header__logo d-flex justify-content-center">
                        <img style="width: 150px;" src="public/upload/logo.gif" class="img-fluid" alt="logo">
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="main-header__form">
                        <div class="row login">
                            <div class="col-lg-12">
                                <div class="list">
                                    <?php
                                    if (isset($_SESSION["customer_email"])) {
                                        ?>
                                        <a href="#" class="list__item list__item--bdr list__item--xs"><i class="fas fa-key list__icon"></i> Xin chào <?php echo $_SESSION["customer_email"]; ?></a>
                                        <a href="index.php?controller=login&action=logout" class="list__item list__item--bdr list__item--xs">Logout</a>
                                    <?php } else { ?>
                                        <a href="index.php?controller=login" class="list__item list__item--bdr list__item--xs">
                                            <i class="fas fa-key list__icon"></i> Đăng nhập
                                        </a>
                                        <a href="index.php?controller=register" class="list__item list__item--xs">
                                            <i class="fas fa-user list__icon"></i> Đăng kí
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <form class="search" method="" action="">
                                    <div class="search__text">
                                        <input type="text" name="" placeholder="Tìm kiếm...">
                                    </div>
                                    <div class="search__btn">
                                        <input type="submit" name="" value="Tìm kiếm">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3 col-sm-4 col-4">
                                <form class="shop" method="" action="">
                                    <button type="submit" class="shop__btn">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span>Giỏ hàng (0)</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: header -->