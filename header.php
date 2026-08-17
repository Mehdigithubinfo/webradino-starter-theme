<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">

        <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>

        <button
    class="menu-toggle"
    type="button"
    aria-controls="primary-navigation"
    aria-expanded="false"
>
  <span class="menu-toggle-icon" aria-hidden="true">
    <span></span>
    <span></span>
    <span></span>
</span>

<span class="screen-reader-text">
    <?php esc_html_e( 'Toggle Menu', 'webradino' ); ?>
</span>
</button>

        <nav  id="primary-navigation" class="site-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'webradino' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'fallback_cb'    => false,
                )
            );
            ?>
        </nav>

    </div>
</header>

<main id="main-content" class="site-main">