<?php get_header(); ?>

<body <?php body_class(); ?>>
<div class="navigation">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'mainmenu',
                'menu_id'        => 'mainmenucontainer',
                'menu_class'     => 'list-inline text-center',
            )
        );
    ?>
</div>
    <h1>Hello</h1>
</body>
</html>