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
                    if (!empty($cores)) {
                        foreach ($cores as $core) {
                            ?>
                            <div class="col mb-4">
                                <div class="feature-2">
                                    <div class="feature-icon">
                                        <img loading="lazy"
                                             src="<?php echo $core['image'] ?>"
                                             alt="Coffee World sorts" width="80" height="80"></div>
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


<?php
get_footer();
?>
