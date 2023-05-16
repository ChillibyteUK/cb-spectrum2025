<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5 pb-3">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-4">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/gaffsy-logo--wo.svg"
                        class="footer__logo" alt="Gaffsy Logo">
                    <p><?=get_field('about', 'options')?>
                    </p>

                </div>
                <div class="footer__heading">Contact Us</div>
                <ul class="fa-ul mb-4">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span> <a
                            href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span> <a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('address', 'options')?>
                    </li>
                </ul>
                <div class="social-icons mb-2">
                    <?php
                    $social = get_field('social', 'options');
if ($social) {
    if ($social['twitter_url']) {
        ?>
                    <a href="<?=$social['twitter_url']?>"
                        target="_blank" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <?php
    }
    if ($social['linkedin_url']) {
        ?>
                    <a href="<?=$social['linkedin_url']?>"
                        target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <?php
    }
    if ($social['facebook_url']) {
        ?>
                    <a href="<?=$social['facebook_url']?>"
                        target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <?php
    }
    if ($social['youtube_url']) {
        ?>
                    <a href="<?=$social['youtube_url']?>"
                        target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <?php
    }
}
?>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer__heading">Our Links</div>
                        <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__heading">Essential Guides</div>
                        <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
                    </div>
                    <div class="col-12 mt-lg-4">
                        <p>Registered with the Information Commissioner's Office under ref: ZA771201</p>
                        <div class="logos d-flex justify-content-start gap-4">
                            <img src="<?=get_stylesheet_directory_uri()?>/img/logo-napb.png "
                                alt="NAPB">
                            <img src="<?=get_stylesheet_directory_uri()?>/img/logo-prop-ombudsman.png "
                                alt="The Property Ombudsman" width=159 height=56>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container py-2">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-md-8 text-center text-md-start">
                &copy; <?=date('Y')?> Sell House
                Quick Now Ltd. T/A Gaffsy. Registered in England no 1240334
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-end flex-wrap gap-3">
                <a href="/privacy-policy/">Privacy & Cookies</a> |
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>