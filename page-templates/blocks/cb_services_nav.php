<?php
$classes = (get_field('dark')[0] ?? null) == 'Yes' ? 'dark' : '';
?>
<section class="services_nav py-5 <?=$classes?>">
    <div class="container-xl">
        <h2 class="dot mb-3">Our Services</h2>
        <?php
        if (get_field('intro')) {
            ?>
        <div class="fs-450 w-short"><?=get_field('intro')?></div>
            <?php
        }
        ?>
        <div class="services mt-5">
        <?php
        while (have_rows('services')) {
            the_row();
            $s = get_sub_field('service');
            $img = get_sub_field('icon') ?: get_stylesheet_directory_uri() . '/img/missing-image.png';
            ?>
            <a class="services__card" href="<?=get_the_permalink($s)?>">
                <h3><?=get_the_title($s)?></h3>
                <div class="icon_container"><img src="<?=$img?>"></div>
                <p><?=get_sub_field('content')?></p>
            </a>
            <?php
        }
        ?>
        </div>
    </div>
</section>