<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header') ?>

    <div id="app"></div>

    <?php do_action('get_footer') ?>
    <?php wp_footer(); ?>
</body>

</html>
