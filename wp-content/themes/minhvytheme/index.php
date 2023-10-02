<?php
get_header(); ?>

<?php get_template_part('template-parts/slider/home') ?>

<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 mb-n8">

            <div class="col mb-8">
                <div class="row row-cols-lg-2 row-cols-sm-2 row-cols-1 mb-n6">
                    <div class="col mb-6">
                        <div class="feature-2">
                            <div class="feature-icon">
                                <img loading="lazy"
                                     src="<?php echo ASSET ?>/images/feature/two/feature-1.png"
                                     alt="Coffee World sorts" width="80" height="80"></div>
                            <div class="feature-content">
                                <h3 class="feature-title">Coffee World sorts</h3>
                                <p class="feature-text">This is the perfect place to find a nice and cozy spot to sip
                                    some.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-6">
                        <div class="feature-2">
                            <div class="feature-icon">
                                <img loading="lazy"
                                     src="<?php echo ASSET ?>/images/feature/two/feature-2.png"
                                     alt="Sed sagittis sodales" width="80" height="80"></div>
                            <div class="feature-content">
                                <h3 class="feature-title">Sed sagittis sodales</h3>
                                <p class="feature-text">Coffee Bean and more shops right in this website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-6">
                        <div class="feature-2">
                            <div class="feature-icon">
                                <img loading="lazy"
                                     src="<?php echo ASSET ?>/images/feature/two/feature-3.png"
                                     alt="Curabitur in eleifend" width="80" height="80"></div>
                            <div class="feature-content">
                                <h3 class="feature-title">Curabitur in eleifend</h3>
                                <p class="feature-text">Find the Java Jungle, Coffee Bean and more shops right in this
                                    website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-6">
                        <div class="feature-2">
                            <div class="feature-icon">
                                <img loading="lazy"
                                     src="<?php echo ASSET ?>/images/feature/two/feature-4.png"
                                     alt="Eleifend vehicula odio." width="80" height="80"></div>
                            <div class="feature-content">
                                <h3 class="feature-title">Eleifend vehicula odio.</h3>
                                <p class="feature-text">Perfect place to find a nice and some more shops right in this
                                    website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-8">
                <div class="section-title">
                    <h2 class="sub-title"><span class="text-primary">KOFI</span> ABOUT INFO</h2>
                    <p class="text">A coffee shop is a small business that sells coffee, pastries, and other morning
                        goods. There are many different types of coffee shops around the world. Some have a barista,
                        while some just have a cashier.</p>
                </div>
                <div class="feature-1 mw-100">
                    <div class="feature-content">
                        <h3 class="feature-title">WE START AT 2023</h3>
                        <p class="feature-text">Some coffee shops have a seating area, while some just have a spot to
                            order and then go somewhere else to sit down. The coffee shop that I am going to describe is
                            a place with a seating area and barista.</p>
                    </div>
                </div>
                <div class="feature-1 mw-100">
                    <div class="feature-content">
                        <h3 class="feature-title">WIN BEST ONLINE SHOP AT 2023</h3>
                        <p class="feature-text">My goal for this coffee shop is to be able to get a coffee and get on
                            with my day. It's a Thursday morning and I am rushing between meetings. I need to
                            caffeinate, but don't have time to sit down at the cafe for fifteen minutes.</p>
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
