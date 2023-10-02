<div class="h2-hero-section section">
    <div class="hero-slider hero-slider-2 swiper">

        <div class="swiper-wrapper">

            <?php query_posts([
                'post_type' => 'slider',
                'orderby' => 'date',
                'order' => 'DESC'
            ]);
            while (have_posts()): the_post();
                ?>
                <div class="swiper-slide hero-slide-2 bg-dark"
                     style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full')?>');">

                </div>
            <?php
            endwhile;
            ?>

        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev d-none d-md-flex"></div>
        <div class="swiper-button-next d-none d-md-flex"></div>
    </div>
</div>
