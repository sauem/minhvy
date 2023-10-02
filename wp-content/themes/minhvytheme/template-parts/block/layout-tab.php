<?php
if (isset($args['term'])):
    $term = $args['term'];
    ?>
    <div class="h1-blog-section section section-padding pt-0">
        <div class="container">
            <div class="section-title section-title-center">
                <h2 class="sub-title">
                    <?php echo $term->name ?>
                </h2>
            </div>
            <div class="row g-6">
                <div class="col-lg-9">
                    <h4><?php pll_e('popular_new') ?></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <?php query_posts([
                                'posts_per_page' => 1,
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
                                <div class="col">
                                    <?php get_template_part('template-parts/block/item'); ?>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php query_posts([
                                'posts_per_page' => 4,
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
                                <div class="col">
                                    <?php get_template_part('template-parts/block/item-horizontal'); ?>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary btn-sm">Xem thêm</button>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
<?php endif;
