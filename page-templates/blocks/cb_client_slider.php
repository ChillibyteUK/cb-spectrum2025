<section class="clients">
    <div class="container">Our Clients</div>
    <?php
    while (have_rows('client_logos')) {
        the_row();
        ?>
    <div><img src="<?=wp_get_attachment_image_url(get_sub_field('logo'))?>"></div>
        <?php
    }
    ?>
</section>