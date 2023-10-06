<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="Kofi - Coffee Shop Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_site_icon() ?>
    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Fonts CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Oswald:wght@200;300;400;500;600;700&amp;display=swap"
          rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/vendor/bootstrap.min.css">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/plugins/simple-line-icons.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/plugins/ion.rangeSlider.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo ASSET ?>/css/custom.css?v=<?= time() ?>">
    <?php wp_head(); ?>
</head>

<?php get_template_part('template-parts/header/desktop-menu') ?>
<?php get_template_part('template-parts/header/mobile-menu') ?>

<div class="offcanvas offcanvas-end w-100 bg-dark border-0" id="offcanvas-search">
    <div class="offcanvas-body d-flex align-items-center justify-content-center">
        <button type="button" class="btn-close offcanvas-search-close-btn text-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        <div class="offcanvas-search-form">
            <form action="/<?php echo pll_current_language() ?>">
                <input type="search" name="s" placeholder="<?php pll_e('Tìm kiếm') ?>...">
                <button type="submit"><i class="sli-magnifier"></i></button>
            </form>
        </div>
    </div>
</div>
