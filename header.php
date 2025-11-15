<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">

    <!-- Google Analytics & Site Verification -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RP397QC617"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-RP397QC617');
    </script>

    <meta
        name="google-site-verification"
        content="7EYn90yqg2MPoPPGnKVlo8XIlCVcTkZQExXI18_rE1w"
    />

    <?php wp_head(); ?>

    <?php if(is_front_page()) : ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <?php endif; ?>

    <?php if(is_page('about')) : ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/about.js"></script>
    <?php endif; ?>

    <?php if(is_page('contact')) : ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>

    <header class="tmp-header-area-start header-one header--sticky header--transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-content">
                        <div class="logo">
                            <a href="/">
                                <img class="logo-dark" src="<?php
                                    $logo_url = get_theme_mod( 'pfa_logo' );
                                    if ( empty( $logo_url ) ) {
                                        echo esc_url( get_stylesheet_directory_uri() . '/assets/images/portfolio/md-yusuf-logo.png' );
                                    } else {
                                        echo esc_url( $logo_url );
                                    }
                                ?>" alt="Md Yusuf">
                            </a>
                        </div>
                        <nav class="tmp-mainmenu-nav d-none d-xl-block">
                            <ul class="tmp-mainmenu">
                                <!-- Home -->
                                <li>
                                    <a href="/">Home
                                        </a>
                                    </li>
                                <!-- About -->
                                <li>
                                    <a href="/about">About</a>
                                </li>
                                <!-- Blog -->
                                <li>
                                    <a href="/blog">Blog</a>
                                </li>
                                <!-- Contact -->
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>

                        </nav>
                        <div class="tmp-header-right">
                            <div class="social-share-wrapper d-none d-md-block">
                                <div class="social-link">
                                    <?php get_template_part('socials'); ?>
                                </div>
                            </div>
                            <div class="actions-area">
                                <div class="tmp-side-collups-area d-none d-xl-block">
                                    <button class="tmp-menu-bars tmp_button_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                                <div class="tmp-side-collups-area d-block d-xl-none">
                                    <button class="tmp-menu-bars humberger_menu_active"><i class="fa-regular fa-bars-staggered"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>