<?php get_header(); ?>

<body <?php body_class(); ?>>
<div class="navigation">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'mainmenu',
                'menu_id'        => 'mainmenucontainer',
                'menu_class'     => 'list-inline text-center text-danger',
            )
        );
    ?>
</div>

<div class="posts">
    <?php
        while(have_posts()){
            the_post();
            get_template_part("post-formats/content",get_post_format());
        }
    ?>
</div>
</body>
</html>