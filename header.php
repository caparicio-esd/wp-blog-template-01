<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
        <?php if (wp_title('', false)) {
            echo ' :';
        } ?>
        <?php bloginfo('name'); ?>
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/styles/main.css">
    <link href="<?php echo get_template_directory_uri() ?>/assets/styles/main.css.map">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part("template-parts/header-template") ?>
