<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <script src="https://kit.fontawesome.com/f6f8cbf1c2.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php include get_stylesheet_directory().'/modules/mega-menu-mobile.php'; ?>

	<div id="page">
        <section class="header-banner">
            <header class="header">
                
                <div class="header--site__wide__notice">
                    <div class="max__width">
                        <p>We're now located in Devoils Lane!</p>
                    </div>
                </div>

                <div class="header__main">
                    <div class="max__width">
                        <div class="header__main--left">
                            <div class="logo">
                                <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">
                                    <h2 style="color: white; font-size: 30px;">Mamdani Opticians</h2>
                                </a>
                            </div>

                        </div>

                        <div class="header__main--right">
                            <a href="#nav_mobile" class="burger__menu">
                                <i class="fal fa-bars"></i>
                            </a>

                            <?php include get_stylesheet_directory().'/modules/mega-menu.php'; ?>

                        </div>
                    </div><!-- max__width -->
                </div><!-- header__main -->
            </header><!-- header -->
        </section><!-- header-banner -->