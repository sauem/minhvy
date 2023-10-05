<?php
if (isset($args['term'])):
    $term = $args['term'];
    $categories = get_terms([
        'hide_empty' => false,
        'taxonomy' => 'category',
        'parent' => $term->term_id
    ]);

    $term_ids = array_column($categories, 'term_id');
    $term_ids = [...@$term_ids, $term->term_id];
    ?>
    <div class="h1-blog-section section section-padding pt-0">
        <div class="container">
            <div class="section-title section-title-center">
                <h2 class="sub-title">
                    <?php echo $term->name ?>
                </h2>
            </div>
            <div class="row">
                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active"
                                id="pills-all-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab"
                                aria-controls="pills-all"
                                aria-selected="true">Tất cả
                        </button>
                    </li>
                    <?php
                    if (!empty($categories)):
                        foreach ($categories as $key => $category):
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link"
                                        id="pills-<?php echo $category->slug ?>-tab"
                                        data-bs-toggle="pill"
                                        data-bs-target="#pills-<?php echo $category->slug ?>" type="button" role="tab"
                                        aria-controls="pills-<?php echo $category->slug ?>"
                                        aria-selected="true"><?php echo $category->name ?>
                                </button>
                            </li>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show"
                         id="pills-all"
                         role="tabpanel"
                         aria-labelledby="pills-all-tab">
                        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-6">
                            <?php
                            query_posts([
                                'posts_per_page' => 8,
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'category',
                                        'field' => 'term_id',
                                        'terms' => $term_ids
                                    ]
                                ]
                            ]);
                            while (have_posts()): the_post(); ?>
                                <div class="col">
                                    <?php get_template_part('template-parts/block/item'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="text-center mt-4">
                            <a href="<?php echo get_term_link($term)?>" class="btn btn-primary btn-sm">Xem thêm</a>
                        </div>
                    </div>
                    <?php
                    if (!empty($categories)):
                        foreach ($categories as $key => $category):
                            ?>

                            <div class="tab-pane fade"
                                 id="pills-<?php echo $category->slug ?>"
                                 role="tabpanel"
                                 aria-labelledby="pills-<?php echo $category->slug ?>-tab">
                                <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-6">
                                    <?php
                                    query_posts([
                                        'posts_per_page' => 8,
                                        'order' => 'DESC',
                                        'orderby' => 'date',
                                        'tax_query' => [
                                            [
                                                'taxonomy' => $category->taxonomy,
                                                'field' => 'term_id',
                                                'terms' => $category->term_id
                                            ]
                                        ]
                                    ]);
                                    while (have_posts()): the_post(); ?>
                                        <div class="col">
                                            <?php get_template_part('template-parts/block/item'); ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="<?php echo get_term_link($category)?>" class="btn btn-primary btn-sm">Xem thêm</a>
                                </div>
                            </div>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;
