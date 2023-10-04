<div class="top-menu bg-top d-none d-md-block">
    <div class="container d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <ul class="list">
                <li>
                    <a class="d-flex align-items-center" href="mailto:">
                        <i class="sli-envelope me-1"></i> email@gamil.com
                    </a>
                </li>
                <li>
                    <a class="d-flex align-items-center" href="tel:">
                        <i class="sli-phone me-1"></i> 038.456.9390
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <ul class="list">
                <li><?= date('d/m/Y, H:s') ?></li>
                <li>
                    <a href="/">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAATlBMVEX+AAD2AADvAQH/eXn+cXL9amr8YmL9Wlr8UlL7TkvoAAD8d0f6Pz/3ODf2Ly/0KSf6R0f6wTv60T31IBz6+jr4+Cv3QybzEhL4bizhAADgATv8AAAAW0lEQVR4AQXBgU3DQBRAMb+7jwKVUPefkQEQTYJqByBENpKUGoZslXoN5LPONH8G9WWZ7pGlOn6XZmaGRce1J/seei4dl+7dPWDqkk7+58e3+igdlySPcYbwBG+lPhCjrtt9EgAAAABJRU5ErkJggg=="
                             alt="Tiếng Việt" width="16" height="11" style="width: 16px; height: 11px;"
                             class="lazyloaded"
                             data-ll-status="loaded">
                    </a>
                </li>
                <li>
                    <a href="/en/">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5FNW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/rSnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg=="
                             alt="English" width="16" height="11" style="width: 16px; height: 11px;" class="lazyloaded"
                             data-ll-status="loaded">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="header sticky-header section">
    <div class="container-fluid">
        <div class="row align-items-center">

            <!-- Logo Start -->
            <div class="col-lg-2 col">
                <div class="header-logo py-1">
                    <a href="/">
                        <?php get_logo() ?>
                    </a>
                </div>
            </div>
            <!-- Logo End -->

            <!-- Menu Start -->
            <div class="col d-none d-lg-block">
                <nav class="main-menu justify-content-end">
                    <?php wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => '',
                    ]) ?>
                </nav>
            </div>
            <!-- Menu End -->

            <!-- Action Start -->
            <div class="col-auto">
                <div class="header-action">
                    <div class="header-action-item">
                        <button class="header-action-toggle" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-search"><i class="sli-magnifier"></i></button>
                    </div>

                    <div class="header-action-item d-lg-none">
                        <button class="header-action-toggle" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-header"><i class="sli-menu"></i></button>
                    </div>
                </div>
            </div>
            <!-- Action End -->

        </div>
    </div>
</div>
