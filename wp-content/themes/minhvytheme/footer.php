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
                        <p><?php bloginfo('description')?></p>
                        <ul class="footer-widget-list-icon">
                            <li><i class="sli-location-pin"></i>Addresss: 123 Pall Mall, London England</li>
                            <li><i class="sli-envelope"></i>Email: hello@example.com</li>
                            <li><i class="sli-phone"></i>Phone: (012) 345 6789</li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12 mb-8">
                    <div class="footer-widget footer-widget-dark">
                        <h5 class="footer-widget-title">Dịch vụ</h5>
                        <ul class="footer-widget-list">
                            <li><a href="#">Returns Policy</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-3 col-sm-6 col-12 mb-8">
                    <div class="footer-widget footer-widget-dark">
                        <h5 class="footer-widget-title">Tin tức</h5>
                        <ul class="footer-widget-list">
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <div class="col-lg-2 col-sm-6 col-12 mb-8">
                    <div class="footer-widget footer-widget-dark">
                        <h5 class="footer-widget-title">Liên hệ</h5>
                        <ul class="footer-widget-list-icon">
                            <li><a href="#"><i class="sli-social-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="sli-social-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="sli-social-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="sli-social-youtube"></i>Youtube</a></li>
                            <li><a href="#"><i class="sli-social-pinterest"></i>Pinterest</a></li>
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
                            class="text-primary">Minhvyme</b> &copy;2023</p>
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
