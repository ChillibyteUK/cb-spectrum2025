<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

$page_for_posts = get_option( 'page_on_front' );
$bg = get_the_post_thumbnail_url($page_for_posts,'full');

get_header();
?>
<main id="main">
<!-- hero -->
<section class="hero" style="background-image:url(<?=$bg?>">
    <div class="overlay--dark"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-8 py-5">
                <h1>Case Studies</h1>
            </div>
        </div>
    </div>
</section>

    <div class="container-xl py-5">
        <?php
        ?>
        <div class="cs_index row">
            <?php
                query_posts( array( 'post_type' => 'case-studies', 'posts_per_page' => -1 ) );

            while (have_posts()) {
                the_post();
                $img = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                if (!$img) {
                    $img = get_stylesheet_directory_uri() . '/img/default-blog.jpg';
                }
                $the_date = get_the_date('jS F, Y');

                $gallery = get_field('gallery', get_the_ID());
                $img = wp_get_attachment_image_url($gallery[0] , 'large' );
        
                ?>
            <div class="col-md-4">
                <a href="<?=get_the_permalink(get_the_ID())?>" class="cs_index__card">
                    <div class="cs_index__image_container">
                        <img class="cs_index__image" src="<?=$img?>">
                    </div>
                    <div class="cs_index__content">
                        <div class="cs_index__title"><?=get_the_title()?></div>
                    </div>
                </a>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</main>
<?php

get_footer();