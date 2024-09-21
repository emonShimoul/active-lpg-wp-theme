<?php get_header(); ?>

<body <?php body_class(); ?>>
    <?php get_template_part("navbar"); ?>

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