<?php
$list = array();
$title = '';

if (get_field('type') == 'Accreditations') {
    $title = 'Accreditations';
    $list = get_field('accreditations','options');        
}
else {
    $title = 'Awards';
    $list = get_field('awards','options');
}
?>
<section class="awards_list">
    <div class="container-xl">
        <h2 class="text-blue-400 dot mb-5"><?=$title?></h2>
        <div class="awards_list__grid">
        <?php
        foreach ($list as $l) {
            ?>
            <div><img src="<?=wp_get_attachment_image_url($l['logo'],'large')?>" alt=""></div>
            <div><?=$l['description']?></div>
            <?php
        }
        ?>
        </div>
    </div>
</section>