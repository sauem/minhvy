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
?>
    <div class="section section-padding">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
<?php
get_footer();
