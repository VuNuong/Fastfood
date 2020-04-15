<div class="bigSlider">
    <div id="exp" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($data as $key => $value) : ?>
                <li data-target="#exp" data-slide-to="<?php echo $key ?>" class="<?php if ($key == 0) : ?> active <?php endif; ?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($data as $key => $value) : ?>
                <div class="carousel-item <?php if ($key == 0) : ?> active <?php endif; ?>">
                    <img src="public/upload/<?php echo $value->slide_2_img; ?>" class="d-block w-100 imgSlide imgSlide--sm" alt="...">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>