<?php
if (isset($args['term'])):
    $term = $args['term'];
    $title = $args['title'] ?? $term->name;
    $class = '';
    ?>
    <div class="h1-blog-section section section-padding pt-0">
        <div class="container">
            <div class="section-title section-title-center">
                <h2 class="sub-title"><?php echo $title ?></h2>
            </div>

            <div class="blog-carousel swiper">

                <div class="swiper-wrapper">
                    <?php query_posts([
                        'posts_per_page' => 8,
                        'tax_query' => [
                            [
                                'taxonomy' => $term->taxonomy,
                                'field' => 'term_id',
                                'terms' => $term->term_id
                            ]
                        ]
                    ]);
                    while (have_posts()): the_post();
                        ?>
                        <div class="swiper-slide">
                            <?php get_template_part('template-parts/block/item'); ?>
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>

                <div class="swiper-pagination d-md-none"></div>
                <div class="swiper-button-prev d-none d-md-flex"></div>
                <div class="swiper-button-next d-none d-md-flex"></div>
            </div>

        </div>
    </div>
<?php endif;
