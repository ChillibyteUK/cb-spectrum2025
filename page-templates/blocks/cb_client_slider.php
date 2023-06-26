<section class="clients">
    <div class="container">Our Clients</div>
    <div class="clients__slider">
    <?php
    if (have_rows('client_logos','options')) {
        while (have_rows('client_logos','options')) {
            the_row();
        ?>
    <div><img src="<?=wp_get_attachment_image_url(get_sub_field('logo'))?>"></div>
        <?php
        }
    }
    else {
        echo 'nope';
    }
    ?>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
jQuery(function($){
    $('.clients__slider').slick({
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1000,
        speed: 500,
        pauseOnHover: false,
        cssEase: 'ease',
        arrows: true,
        nextArrow: '<i class="fa fa-angle-right fa-3x"></i>',
        prevArrow: '<i class="fa fa-angle-left fa-3x"></i>',
        dots: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true
                }
            }
        ]
    });
});
</script>
    <?php
}, 9999);
?>