<?php
if (isset($args['term'])):
    $term = $args['term'];
    $ignore = [];
    ?>
    <div class="h1-blog-section section section-padding pt-0">
        <div class="container">
            <div class="section-title section-title-center">
                <h2 class="sub-title">
                    <?php echo $term->name ?>
                </h2>
            </div>
            <div class="row g-6">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-5">
                            <?php query_posts([
                                'posts_per_page' => 1,
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'tax_query' => [
                                    [
                                        'taxonomy' => $term->taxonomy,
                                        'field' => 'term_id',
                                        'terms' => $term->term_id
                                    ]
                                ]
                            ]);
                            while (have_posts()): the_post();
                                $ignore[] = get_the_ID();
                                ?>
                                <div class="col">
                                    <?php get_template_part('template-parts/block/item'); ?>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                        </div>
                        <div class="col-md-7">
                            <div class="row row-cols-md-2 row-cols-sm-1">
                                <?php query_posts([
                                    'posts_per_page' => 4,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post__not_in' => $ignore,
                                    'tax_query' => [
                                        [
                                            'taxonomy' => $term->taxonomy,
                                            'field' => 'term_id',
                                            'terms' => $term->term_id
                                        ]
                                    ]
                                ]);
                                while (have_posts()): the_post();
                                    echo "<div class='col mb-3'>";
                                    get_template_part('template-parts/block/item-horizontal');
                                    echo "</div>";
                                endwhile;
                                wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="<?php echo get_term_link($term)?>" class="btn btn-primary btn-sm">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;
