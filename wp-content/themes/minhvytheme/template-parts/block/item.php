<div class="blog">
    <a href="<?php echo get_the_permalink() ?>" class="blog-thumb">
        <img loading="lazy"
             src="<?php echo get_the_post_thumbnail_url() ?>"
             alt="<?php echo get_the_title() ?>" width="100%"
             height="200"></a>
    <div class="blog-content">

        <h4 class="blog-title">
            <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>
        </h4>
        <p><?php echo get_the_date() ?></p>
    </div>
</div>
