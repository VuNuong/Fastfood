<div class="col-md-3 col-sm-12 col-12">
    <div class="menuHor">
        <h3 class="menuHor__head" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width: 100%">
            <i class="fas fa-bars"></i> Danh mục sản phẩm
        </h3>
        <ul class="menuHor__content">
            <?php foreach ($data as $key => $value) : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controller=info&id=<?php echo $value->category_product_id; ?>"> <?php echo $value->category_product_name; ?><span class="sr-only">(current)</span></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="collapse" id="collapseExample">
            <ul class="navbar-nav mr-auto">
                <?php foreach ($data as $key => $value) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=info&id=<?php echo $value->category_product_id; ?>"> <?php echo $value->category_product_name; ?><span class="sr-only">(current)</span></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>