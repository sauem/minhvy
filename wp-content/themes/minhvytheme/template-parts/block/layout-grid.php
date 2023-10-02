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
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-6">
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
                        <?php get_template_part('template-parts/block/item'); ?>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
<?php endif;
