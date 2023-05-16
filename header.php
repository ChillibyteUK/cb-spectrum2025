<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cb-hydronix
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-300.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-500.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-700.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
if (get_field('ga_property', 'options')) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
            );
    </script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
            );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

wp_head();
?>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Gaffsy",
            "url": "https://www.gaffsy.com/",
            "logo": "https://www.gaffsy.com/wp-content/theme/cb-gaffsy/img/gaffsy-logo.jpg",
            "description": "Sell House Fast | Quick House Sale For Cash | Gaffsy",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Argyle House, 29-31 Euston Road",
                "addressRegion": "London",
                "postalCode": "NW1 2SD",
                "addressCountry": "UK"
            },
            "telephone": "+44 (0) 207 459 4546",
            "email": "info@gaffsy.com",
            "sameAs": [
                "https://twitter.com/",
                "https://www.facebook.com/",
                "https://www.linkedin.com/company/"
            ]
        }
        }
    </script>

</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
<div id="wrapper-navbar" class="fixed-top p-0">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-xl pt-3 pb-2 nav-top align-items-center">
            <div class="text-lg-center logo-container"><a href="/" class="logo" aria-label="Gaffsy Homepage"></a></div>
            <div class="button-container d-lg-none">
                <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="d-none d-xl-flex phone-container">
                <a href="<?=parse_phone(get_field('contact_phone','options'))?>" class="nav-top__phone">
                    <div><i class="fas fa-phone-alt"></i></div>
                    <div><?=get_field('contact_phone','options')?></span></div>
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar">
                    <?php
                    wp_nav_menu(
    array(
        'theme_location'  => 'primary_nav',
        'container_class' => 'w-100',
        // 'container_id'    => 'primaryNav',
        'menu_class'      => 'navbar-nav justify-content-around w-100',
        'fallback_cb'     => '',
        'menu_id'         => 'navbar',
        'depth'           => 3,
        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
    )
);
?>
            </div>
            <div class="d-flex justify-content-end align-items-center cta-container">
                <a href="/get-offer/" class="d-none d-lg-inline btn btn--accent">Free Cash Offer</a>
            </div>
        </div>
    </nav>
</div>