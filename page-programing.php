<?php

/**
 * Template name: Pragramação
 */
get_header();

?>
<section class="posts__hero">
    <div class="posts__hero-image" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/banner_page.png'; ?>');">
        <h1 class="posts__hero-title">Programação</h1>
    </div>
</section>
<section class="posts__list">
    <?php get_template_part('template_parts/content', 'programing'); ?>
</section>
<?php
get_footer();
