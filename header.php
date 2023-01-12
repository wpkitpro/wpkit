<!doctype html>
<html <?php language_attributes(); ?> <?php wk_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="app">
    <?php wk_template('sections/header') ?>

    <main id="main" class="content-area">
