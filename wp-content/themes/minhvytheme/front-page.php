<?php
get_header(); ?>

<?php get_template_part('template-parts/slider/home') ?>

<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 mb-n8">

            <div class="col mb-8">
                <div class="row row-cols-lg-2 row-cols-sm-2 row-cols-1 mb-n6">
                    <?php
                    $cores = setting('core_value');
                    if (!empty($cores) && is_array($cores)) {
                        foreach ($cores as $core) {
                            ?>
                            <div class="col mb-4">
                                <div class="feature-2">
                                    <div class="feature-icon">
                                        <img loading="lazy"
                                             src="<?php echo $core['image'] ?>"
                                             alt="<?php echo $core['title'] ?>"
                                             style="max-width: 80px"
                                             width="80" height="80">
                                    </div>
                                    <div class="feature-content">
                                        <h3 class="feature-title"><?php echo $core['title'] ?></h3>
                                        <p class="feature-text"><?php echo $core['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="col mb-8">
                <div class="section-title">
                    <h2 class="sub-title line-left"><?php echo setting('about_title'); ?></h2>
                    <div class="feature-content">
                        <?php echo setting('about_content'); ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<?php
$categories = get_categories([
    'hide_empty' => false,
    'meta_query' => [
        [
            'key' => 'show_home',
            'value' => 'active',
            'compare' => '='
        ]
    ],
]);
if (!empty($categories)) {
    foreach ($categories as $term) {
        $layout = get_term_meta($term->term_id, 'layout', true);
        get_template_part('template-parts/block/layout', $layout, [
            'term' => $term
        ]);
    }
}
?>

<div class="h1-blog-section section section-padding pt-0">
    <div class="container">
        <div class="section-title section-title-center">
            <h2 class="sub-title">Đối tác</h2>
        </div>

        <div class="logo-carousel swiper">

            <div class="swiper-wrapper">
                <?php query_posts([
                    'posts_per_page' => 8,
                    'post_type' => 'logo',
                ]);
                while (have_posts()): the_post();
                    ?>
                    <div class="swiper-slide">
                        <a class="logo-item" href="<?php get_post_meta(get_the_ID(), 'href', true) ?>">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""/>
                        </a>
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

<?php
get_footer();
?>
