<div class="col-md-9 col-sm-12">
    <div class="bigSlider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ul class="dot">
                <li class="dot__item"><i class="fas fa-circle dot__icon--sm"></i></li>
                <li class="dot__item"><i class="fas fa-circle dot__icon--sm"></i></li>
                <li class="dot__item"><i class="fas fa-circle dot__icon--sm"></i></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active dot__item"><i class="far fa-dot-circle dot__icon"></i></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="dot__item"><i class="far fa-dot-circle dot__icon"></i></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="dot__item"><i class="far fa-dot-circle dot__icon"></i></li>
                <li class="dot__item"><i class="fas fa-circle dot__icon--sm"></i></li>
                <li class="dot__item"><i class="fas fa-circle dot__icon--sm"></i></li>
                <li class="dot__item"><i class="fas fa-circle dot__icon--sm"></i></li>
            </ul>
            <div class="carousel-inner">
            <?php foreach ($data as $key => $value) : ?>
                <div class="carousel-item <?php if ($key == 0) : ?> active <?php endif; ?>">
                    <img src="public/upload/<?php echo $value->slide_img; ?>" class="d-block w-100 imgSlide" alt="...">
                </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>