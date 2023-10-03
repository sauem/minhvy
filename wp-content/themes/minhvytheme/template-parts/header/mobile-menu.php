<div class="offcanvas offcanvas-end" id="offcanvas-header">
    <div class="offcanvas-header">
        <h5>Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="mobile-menu">
            <?php wp_nav_menu([
                'theme_location' => 'main-menu',
                'container' => '',
            ]) ?>
        </nav>
    </div>
</div>
