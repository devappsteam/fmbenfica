<?php

/**
 * Template name: A Rádio Benfica
 */

get_header();
?>
<div class="page-about">
    <section class="about__hero">
        <?php
        $thumbnail = get_template_directory_uri() . '/assets/images/about.jpg';
        if (has_post_thumbnail()) {
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }
        ?>
        <div class="about__hero-image" style="background-image: url('<?php echo $thumbnail; ?>');"></div>
        <div class="about__hero-dots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>
    <section class="about__content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="about__title">Conheça nossa História</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 about__text">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;

                    else :
                    ?>
                        <p>Nenhum resultado encontrado!</p>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
