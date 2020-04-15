<div class="burger">
    <span></span>
    <span></span>
    <span></span>
</div>
<div class="menunav">
    <span class="btn btn-close">&times;</span>
    <ul>
        <?php foreach ($data as $key => $value) : ?>
            <li><a href="#"><?php echo $value->menu_name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
<nav class="navVer stickMenu">
    <div class="container">
        <ul class="menuVer">
            <li><a href="index.php" class="menuVer__item activeVer">trang chủ</a></li>
            <li class="drop">
                <a href="index.php?controller=sanpham" class="menuVer__item">sản phẩm <i class="fas fa-sort-down" style="position: absolute; top: 30%; right: 0;"></i></a>
                <div class="drop-content">
                    <?php foreach ($dataHor as $key => $value) : ?>
                        <a href="index.php?controller=info&id=<?php echo $value->category_product_id; ?>"><?php echo $value->category_product_name; ?></a>
                    <?php endforeach; ?>
                </div>
            </li>
            <li><a href="index.php" class="menuVer__item">blog</a></li>
            <li><a href="index.php" class="menuVer__item">giới thiệu</a></li>
            <li><a href="index.php" class="menuVer__item">liên hệ</a></li>
        </ul>
    </div>
</nav>