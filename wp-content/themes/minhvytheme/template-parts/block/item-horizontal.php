<div class="blog-sidebar-post">
    <a href="<?php echo get_the_permalink() ?>" class="blog-sidebar-post-thumb">
        <img src="<?php echo get_the_post_thumbnail_url() ?>"
             alt="<?php echo get_the_title() ?>">
    </a>
    <div class="blog-sidebar-post-content">
        <span class="blog-sidebar-post-date"><?php echo get_the_date() ?></span>
        <h5 class="blog-sidebar-post-title">
            <a href="<?php echo get_the_permalink() ?>">
                <?php echo get_the_title() ?>
            </a>
        </h5>
    </div>
</div>
