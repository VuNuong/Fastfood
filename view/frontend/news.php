<div class="sweet">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-9 col-sm-9 col-9">
            <h3 class="sweet__title">bài viết nổi bật</h3>
        </div>
        <div class="col-md-3 col-sm-3 col-3 text-right">
            <a class="btn btn-secondary btn-sm prev-btn-6">
                <i class="fas fa-angle-left"></i>
            </a>
            <a class="btn btn-secondary btn-sm next-btn-6">
                <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="bonSlide" id="slide-6">
    <?php foreach ($data as $key => $value) : ?>
        <div class="fish">
            <div class="boxImg">
                <div class="boxImgCrop">
                    <img src="public/upload/<?php echo $value->new_img; ?>" class="">
                </div>
            </div>
            <div class="fish__time"><i class="far fa-calendar-alt"></i> 28/12/2018</div>
            <a href="#" class="fish__title"><?php echo $value->new_name; ?></a>
            <div class="fish__desc"><?php echo substr($value->new_content, 0, 100); ?></div>
            <a href="#" class="fish__add">Xem thêm<i class="fas fa-arrow-right"></i></a>
        </div>
    <?php endforeach; ?>
</div>