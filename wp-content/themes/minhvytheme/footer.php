<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$footers = wp_get_menu_array('footer-menu');
?>
<div class="footer-section section">
    <!-- Footer Top Section Start -->
    <div class="footer-top section">
        <div class="container">
            <div class="row mb-n8 gy-lg-0 gy-4">

                <!-- Footer Widget Start -->
                <div class="col-lg-4 col-sm-6 col-12 mb-8">
                    <div class="footer-widget footer-widget-dark">
                        <h5 class="footer-widget-title"><?php bloginfo(); ?></h5>
                        <p><?php bloginfo('description') ?></p>
                        <ul class="footer-widget-list-icon">
                            <li><i class="sli-location-pin"></i><?php __trans('Địa chỉ'); ?>: <?php echo setting('info_address') ?></li>
                            <li>
                                <a href="mailto:<?php echo setting('info_email') ?>">
                                    <i class="sli-envelope"></i>Email: <?php echo setting('info_email') ?>
                                </a>
                            </li>
                            <li class="d-flex">
                                <i class="sli-phone"></i><?php __trans('Điện thoại'); ?>:
                                <?php
                                $phones = setting('info_hotline');
                                $phones = explode(',', $phones);
                                if (!empty($phones)) {
                                    foreach ($phones as $phone) {
                                        ?>
                                        <a style="flex: unset" href="tel:<?php echo $phone ?>">
                                            <?php echo $phone ?>
                                        </a>
                                        <?php
                                    }
                                }
                                ?>

                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget End -->
                <?php if (!empty($footers)):
                    foreach ($footers as $menu):
                        ?>
                        <div class="col-lg-3 col-sm-6 col-12 mb-8">
                            <div class="footer-widget footer-widget-dark">
                                <h5 class="footer-widget-title"><?php echo $menu['title'] ?></h5>
                                <ul class="footer-widget-list">
                                    <?php foreach (@$menu['children'] as $item): ?>
                                        <li>
                                            <a href="<?php echo $item['url'] ?>">
                                                <?php echo $item['title'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>

                <!-- Footer Widget Start -->
                <div class="col-lg-2 col-sm-6 col-12 mb-8">
                    <div class="footer-widget footer-widget-dark">
                        <h5 class="footer-widget-title"><?php pll_e('Liên hệ') ?></h5>
                        <ul class="footer-widget-list-icon">
                            <?php
                            $socials = setting('social');
                            if (!empty($socials)):
                                foreach ($socials as $key => $social):
                                    if (!$social['active']) {
                                        continue;
                                    }
                                    ?>
                                    <li>
                                        <a href="<?php echo $social['link'] ?>">
                                            <i class="sli-social-<?php echo $key ?>"></i>
                                            <?php echo ucfirst($key) ?>
                                        </a>
                                    </li>
                                <?php
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->

    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom footer-bottom-dark section">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-n2">

                <p class="footer-copyright footer-copyright-dark text-center">Copyright <b
                            class="text-white">Minhvyme</b> &copy;2023</p>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->

</div>

<button class="scroll-to-top"><i class="sli-arrow-up"></i></button>

<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src="<?php echo ASSET ?>/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="<?php echo ASSET ?>/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?php echo ASSET ?>/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="<?php echo ASSET ?>/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Plugins JS -->
<script src="<?php echo ASSET ?>/js/plugins/swiper-bundle.min.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/jquery.countdown.min.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/svg-inject.min.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/ion.rangeSlider.min.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/jquery.zoom.min.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/resize-sensor.js"></script>
<script src="<?php echo ASSET ?>/js/plugins/jquery.sticky-sidebar.min.js"></script>

<!-- Activation JS -->
<script src="<?php echo ASSET ?>/js/active.js"></script>
<?php wp_footer(); ?>

</body>
</html>
