<div class="blog-sidebar-item">
    <h4 class="blog-sidebar-title"><?php pll_e('Danh mục') ?></h4>
    <div class="blog-sidebar-body">
        <ul class="blog-sidebar-archive">
            <?php
            $categories = get_terms([
                'taxonomy' => 'category'
            ]);
            if (!empty($categories)) {
                foreach ($categories as $term) {
                    ?>
                    <li>
                        <a href="<?php echo get_term_link($term) ?>">
                            <?php echo $term->name ?>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</div>
<div class="blog-sidebar-item">
    <h4 class="blog-sidebar-title"><?php pll_e('Tìm kiếm') ?></h4>
    <div class="blog-sidebar-body">
        <div class="blog-sidebar-search">
            <form action="/<?php echo pll_current_language() ?>">
                <input name="s" class="form-field" type="text" placeholder="<?php pll_e('Tìm kiếm') ?>....">
                <button class="btn"><i class="sli-magnifier"></i></button>
            </form>
        </div>
    </div>
</div>
<div class="blog-sidebar-item">
    <h4 class="blog-sidebar-title"><?php pll_e('Bài viết mới') ?></h4>
    <div class="blog-sidebar-body">
        <?php query_posts([
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        ]);
        while (have_posts()): the_post();
            get_template_part('template-parts/block/item-horizontal');
        endwhile;
        ?>
    </div>
</div>
