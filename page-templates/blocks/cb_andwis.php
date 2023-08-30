<section class="andwis py-5">
    <div class="container-xl">
        <h2 class="text-blue-400 dot mb-5">Part of The Andwis Group</h2>
        <div class="andwis__grid mb-4">
            <?php
            while (have_rows('companies','options')) {
                the_row();
                $name = get_sub_field('name');
                $logo = wp_get_attachment_image_url(get_sub_field('logo'),'large');
                $icons = get_sub_field('services');
                $intro = get_sub_field('intro');
                ?>
            <div class="andwis__card">
                <div class="andwis__inner">
                    <img src="<?=$logo?>" alt="<?=$name?>">
                    <div class="andwis__details">
                        <div class="andwis__icons">
                            <?php
                            foreach ($icons as $i) {
                                ?>
                            <img src="<?=get_stylesheet_directory_uri()?>/img/andwis/icon__<?=$i?>--emerald.svg" alt="<?=$i?> icon">
                                <?php
                            }
                            ?>
                        </div>
                        <div class="andwis__detail">
                            <h3><?=$name?></h3>
                            <p><?=$intro?></p>
                        </div>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>
        </div>
        <div class="text-center">
            <a href="https://www.andwis.com/" class="btn btn-primary" target="_blank">More about Andwis</a>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
jQuery(function($){
    $('.andwis__grid').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        pauseOnHover: false,
        cssEase: 'ease',
        arrows: false,
        nextArrow: '<i class="fa fa-angle-right fa-2x"></i>',
        prevArrow: '<i class="fa fa-angle-left fa-2x"></i>',
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