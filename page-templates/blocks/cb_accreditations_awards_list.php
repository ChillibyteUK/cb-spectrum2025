<?php
$list = array();

if (get_field('type') == 'Accreditations') {
    $list = get_field('accreditations','options');        
}
else {
    $list = get_field('awards','options');
}
?>
<section class="awards_list">
    <div class="container-xl">
        <?php
        foreach ($list as $l) {
            echo '<div>';
            var_dump($l);
            echo '</div>';
        }
        ?>
    </div>
</section>