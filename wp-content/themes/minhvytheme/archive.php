<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
$term = get_term(get_queried_object_id());

?>
    <div class="page-banner-section section" style="background-image: none">
        <div class="container">
            <?php yoast_breadcrumb() ?>
        </div>
    </div>
    <div class="shop-product-section section pb-5">
        <div class="container">
            <div class="row flex-lg-row-reverse gy-4">

                <div class="col-lg-9 col-12 mb-8">
                    <div class="row row-cols-md-3 row-cols-1 g-4">
                        <?php
                        $current_page = get_query_var('page') ? get_query_var('page') : 1;
                        $query = new WP_Query(array_merge([
                            'posts_per_page' => 12,
                            'paged' => $current_page,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'category',
                                    'field' => 'term_id',
                                    'terms' => get_queried_object_id(),
                                ]
                            ]
                        ]));
                        if ($query->have_posts()):
                            while (have_posts()): the_post();
                                ?>
                                <div class="col">
                                    <?php get_template_part('template-parts/block/item'); ?>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                        ?>
                    </div>
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
