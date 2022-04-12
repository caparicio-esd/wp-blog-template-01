<header class="header">
    <div class="header_logo">
        <a href="<?php echo home_url(); ?>">logo</a>
    </div>
    <nav class="header_menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'header-menu'
            )
        );
        ?>
    </nav>
    <div class="searchbox">
        <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
            <span class="fa fa-search"></span>
            <input type="text" class="field" name="s" placeholder="Qué buscas" />
        </form>
    </div>
    <div class="login">
        <a href="<?php echo get_admin_url(); ?>" class="button">Login</a>
    </div>
</header>