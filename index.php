<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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