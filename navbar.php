<div class="container nav-bar d-flex justify-content-between align-items-center">
        <?php if(current_theme_supports( "custom-logo" )): ?>
        <div class="header-logo text-center">
            <?php the_custom_logo(); ?>
        </div>
        <?php endif; ?>

        <div class="contacts d-flex">
            <p class="contact-number">+8801711843533</p>
            <p>lpgactive@gmail.com</p>
        </div>
    </div>

<div class="menu">
    <div class="container">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'mainmenu',
                    'menu_class'     => 'mainmenucontainer',
                )
            );
        ?>
    </div>
</div>