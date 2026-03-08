<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar">
    <div class="nav-brand">
        <a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <ul class="nav-links">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'items_wrap'     => '%3$s'
        ]); ?>
    </ul>
</nav>
