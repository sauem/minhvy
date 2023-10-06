<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

    <div class="page-banner-section section" style="background-image: none">
        <div class="container">
            <?php yoast_breadcrumb() ?>
        </div>
    </div>
    <div class="shop-product-section section pb-5">
        <div class="container">
            <div class="row flex-lg-row-reverse gy-4">

                <div class="col-lg-9 col-12 mb-8">
                    <?php
                    $current_page = get_query_var('page') ? get_query_var('page') : 1;
                    $query = new WP_Query(array_merge([
                        'posts_per_page' => 12,
                        'paged' => $current_page,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        's' => $_GET['s'],
                    ]));
                    if ($query->have_posts()):
                        ?>
                        <p>
                            <?php
                            echo sprintf(pll__('Có %s kết quả phù hợp'), $query->post_count);
                            ?>

                        </p>
                        <div class="row row-cols-md-3 row-cols-1 g-4">
                            <?php
                            while (have_posts()): the_post();
                                ?>
                                <div class="col">
                                    <?php get_template_part('template-parts/block/item'); ?>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    <?php else: ?>
                        <p><?php pll_e('Không có kết quả phù hợp')?></p>
                    <?php endif;
                    wp_reset_query();
                    ?>
                    <div class="pagination justify-content-center mt-4">
                        <?php
                        echo paginate_links(array(
                            'type' => 'list',
                            'base' => add_query_arg('page', '%#%'),
                            'total' => $query->max_num_pages,
                            'format' => '?page=%#%',
                            'current' => max(1, $current_page),
                            'prev_text' => '<i class="sli-arrow-left"></i>',
                            'next_text' => '<i class="sli-arrow-right"></i>',
                        ));
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mb-8">
                    <?php get_template_part('template-parts/block/right-sidebar') ?>
                </div>

            </div>
        </div>
    </div>
<?php
get_footer();
