<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
$term_id = yoast_get_primary_term_id('category', get_the_ID());
if (!$term_id) {
    $terms = get_the_category();
    $term_id = $terms[0]->term_id;
}
$term = get_term($term_id);
?>
    <div class="page-banner-section section"
         style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><?php echo $term->name ?></li>
            </ul>
        </div>
    </div>
    <div class="shop-product-section section section-padding">
        <div class="container">
            <div class="row flex-lg-row-reverse gy-4">

                <div class="col-lg-9 col-12 mb-8">
                    <div class="single-blog">
                        <div class="single-blog-content">
                            <h1 class="single-blog-title"><?php echo get_the_title() ?></h1>
                            <ul class="single-blog-meta">
                                <li><?php echo get_the_date() ?></li>
                            </ul>
                            <div class="single-blog-description">
                                <?php the_content(); ?>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="single-blog-tags">
                                        <span>Danh mục:</span>
                                        <ul>
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                foreach ($categories as $category) {
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo get_term_link($category) ?>">
                                                            <?php echo $category->name ?>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="single-blog-share">
                                        <span>Share:</span>
                                        <ul>
                                            <li><a href="#"><i class="sli-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="sli-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="sli-social-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="next-prev-post-nav">
                        <?php
                        $next_post = get_next_post();
                        $prev_post = get_previous_post();
                        ?>
                        <li><a href="<?php echo get_permalink($prev_post) ?>"><i class="sli-arrow-left"></i>Bài
                                trước</a></li>
                        <li><a href="<?php echo get_permalink($next_post) ?>"><i class="sli-arrow-right"></i>Bài sau</a>
                        </li>
                    </ul>
                    <div class="single-blog-comment">
                        <?php
                        get_template_part('template-parts/block/layout', 'slider', [
                            'term' => $term,
                            'title' => $term->name . ' khác'
                        ]);
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 col-12 mb-8">
                    <?php echo get_template_part('template-parts/block/right-sidebar'); ?>
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
