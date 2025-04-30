<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reeni is a modern personal portfolio template for designers, developers, content writer, cleaner, programmer, fashion designer, model, Influencer and freelancers. Fully responsive, SEO-friendly, Bootstrap and easy to customize.">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg">

    <?php wp_head(); ?>
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
                                    // functions.php theke, $wp_customize->add_setting( 'pfa_logo', ... ) er sathe match kore ei string dewa hoice
                                    if ( empty( $logo_url ) ) {
                                        echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo/white-logo-reeni.png' );
                                    } else {
                                        echo esc_url( $logo_url );
                                    }
                                ?>" alt="Reeni - Personal Portfolio HTML Template for developers and freelancers">
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
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
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