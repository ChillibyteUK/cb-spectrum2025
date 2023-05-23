<section class="sectors_nav py-5">
    <div class="container-xl">
        <h2 class="dot mb-5"><?=get_field('title')?></h2>
        <div class="sectors">
        <?php
        while (have_rows('sectors')) {
            the_row();
            $s = get_sub_field('sector');
            $img = get_the_post_thumbnail($s,'large') ?: get_stylesheet_directory_uri() . '/img/missing-image.png';
            ?>
            <a class="sectors__card" href="<?=get_the_permalink($s)?>">
                <div class="img_container"><img src="<?=$img?>"></div>
                <h3 class="text-green-400"><?=get_the_title($s)?></h3>
            </a>
            <?php
        }
        ?>
        </div>
    </div>
</section>