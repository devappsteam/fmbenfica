<div class="container">
    <?php

    $args = array(
        'post_type' => 'programacao',
        'post_status' => array('publish'),
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $programings = new WP_Query($args);

    if ($programings->have_posts()) :
        while ($programings->have_posts()) : $programings->the_post();
    ?>
            <div class="row my-5">
                <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center">
                    <?php
                    $thumbnail = get_template_directory_uri() . '/assets/images/logo.png';
                    if (has_post_thumbnail()) {
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    }
                    ?>
                    <div class="posts-thumbnail" style="background-image:url('<?php echo $thumbnail; ?>');"></div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="posts-info">
                        <a href="<?php the_permalink(); ?>" class="posts__link">
                            <h1 class="posts-info__title"><?php the_title(); ?></h1>
                        </a>
                        <p class="posts-info__date"><?php echo get_the_date(); ?></p>
                        <p class="posts-info__description"><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    else :
        ?>
        <div class="row">
            <div class="col-12">
                <p class="text-center">Nenhum resultado encontrado.</p>
            </div>
        </div>
    <?php
    endif;
    ?>
    <div class="row">
        <div class="col-12">
            <div class="posts__pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('Anterior', 'fmbenfica'),
                    'next_text' => __('Próximo', 'fmbenfica'),
                ));
                ?>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
</div>