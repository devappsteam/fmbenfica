<?php

/**
 * Template name: Página Inicial
 */

get_header();
?>
<section class="hero">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main_slider" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/banner/banner_1.jpg"; ?>');">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#main_slider" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#main_slider" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <div class="hero__radio">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md hero__radio-button bg-white">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" widht="64" height="64" viewBox="0 0 172 172">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path d="M85.99541,14.11922c-40.1882,0.00101 -72.89385,31.27587 -72.89385,69.71753v70.01147c0.00494,1.48888 1.21108,2.69443 2.69997,2.69865h23.53662c0.71054,-0.00359 1.3903,-0.29049 1.88853,-0.7971c0.49823,-0.50661 0.77377,-1.19105 0.76551,-1.90155v-50.59468c0,-1.48418 -1.16886,-2.80823 -2.65404,-2.80823h-20.86159v-16.60857c0,-35.47769 30.29172,-64.34122 67.49982,-64.34122c18.04723,0.11825 35.0201,6.87269 47.77464,19.01918c12.74446,12.13675 19.77241,28.23256 19.77241,45.32204v16.60857h-20.86159c-1.48384,0 -2.65404,1.32405 -2.65404,2.80823v50.59468c-0.00826,0.71051 0.26728,1.39495 0.76551,1.90155c0.49823,0.50661 1.17799,0.79351 1.88853,0.7971h23.53793c1.48837,-0.00494 2.69371,-1.21028 2.69865,-2.69865v-70.01147c0,-18.57466 -7.61721,-36.05248 -21.43701,-49.21484c-13.74925,-13.09384 -32.02666,-20.37537 -51.46602,-20.50269zM47.96033,99.2236c-1.45292,0.04259 -2.60868,1.23265 -2.60876,2.68619v53.28218c0,1.48427 1.20323,2.6875 2.6875,2.6875c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-53.28218c-0.00004,-0.7264 -0.29413,-1.42184 -0.81525,-1.92788c-0.52112,-0.50604 -1.2249,-0.77959 -1.95099,-0.75831zM123.8822,99.2236c-1.45292,0.04259 -2.60868,1.23265 -2.60876,2.68619v53.28218c0,1.48427 1.20323,2.6875 2.6875,2.6875c1.48427,0 2.6875,-1.20323 2.6875,-2.6875v-53.28218c-0.00004,-0.7264 -0.29413,-1.42184 -0.81525,-1.92788c-0.52112,-0.50604 -1.2249,-0.77959 -1.95099,-0.75831z"></path>
                            </g>
                        </g>
                    </svg>
                    <span>Ouça ao Vivo</span>
                </div>
                <div class="col-12 col-md hero__radio-button">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" widht="64" height="64" viewBox="0 0 172 172">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#ffffff">
                                <path d="M5.375,37.625v5.375v91.375h161.25v-96.75zM16.125,48.375h139.75v75.25h-139.75zM48.375,139.75l-2.6875,8.0625h80.625l-2.6875,-5.375c-34.9375,-2.6875 -75.25,-2.6875 -75.25,-2.6875z"></path>
                            </g>
                        </g>
                    </svg>
                    <span>Assista ao Vivo</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="programing" id="programing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="programing__title">A melhor programação</h1>
            </div>
            <div class="col-12 p-0">
                <div class="owl-carousel owl-theme" id="programing_carousel">
                    <?php
                    $args = array(
                        'post_type'     => 'programacao',
                        'post_status'   => array('publish'),
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'limit'         => 12,
                        'nopaging'      => true
                    );
                    $programings = get_posts($args);
                    ?>

                    <?php
                    if (!empty($programings)) {
                        foreach ($programings as $programing) {
                            setup_postdata($programing);
                            $info = get_post_meta($programing->ID, '_programacao', true);
                            $borders = array(
                                1 => 'right',
                                2 => 'left',
                                3 => 'top',
                                4 => 'bottom'
                            );

                            $border = rand(1, 4);

                    ?>
                            <div class="item">
                                <div class="programing__card">
                                    <div class="programing__image border--<?php echo $borders[$border]; ?> rounded-circle" style="background-image: url('<?php echo $info['programing_image'] ?>');"></div>
                                    <div class="programing__info">
                                        <h3 class="programing__title"><?php echo $programing->post_title; ?></h3>
                                        <p class="programing__announcer"><?php echo $info['programing_author'] ?></p>
                                        <span class="programing__hour"><?php echo $info['programing_datetime'] ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php
                            wp_reset_postdata();
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="noticies" id="noticies">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="noticies__title">Principais Notícias do Dia</h1>
            </div>

            <div class="col-12 noticies__slider owl-carousel owl-theme" id="noticies_slider">
                <div class="noticies__slider-item">
                    <div class="noticies__slide" style="background-image: url('https://wallpaperaccess.com/full/2863786.jpg');">
                        <div class="noticies__slide-header">
                            <span class="noticies_date">23 de Janeiro de 2022</span>
                        </div>
                        <div class="noticies__slide-description">
                            <h3>
                                Decreto cria 'mineração artesanal' na Amazônia;
                                <br>
                                para ONGs, governo quer incentivar garimpo ilegal
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="noticies__slider-item">
                    <div class="noticies__slide" style="background-image: url('https://wallpaperaccess.com/full/2365465.jpg');">
                        <div class="noticies__slide-header">
                            <span class="noticies_date">23 de Janeiro de 2022</span>
                        </div>
                        <div class="noticies__slide-description">
                            <h3>
                                Decreto cria 'mineração artesanal' na Amazônia;
                                <br>
                                para ONGs, governo quer incentivar garimpo ilegal
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="noticies__slider-item">
                    <div class="noticies__slide" style="background-image: url('https://cdn.wallpapersafari.com/54/3/8gmxDw.jpg');">
                        <div class="noticies__slide-header">
                            <span class="noticies_date">23 de Janeiro de 2022</span>
                        </div>
                        <div class="noticies__slide-description">
                            <h3>
                                Decreto cria 'mineração artesanal' na Amazônia;
                                <br>
                                para ONGs, governo quer incentivar garimpo ilegal
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="noticies__slider-item">
                    <div class="noticies__slide" style="background-image: url('https://a-static.besthdwallpaper.com/ashish-wilson-montanha-papel-de-parede-2880x1620-71441_52.jpg');">
                        <div class="noticies__slide-header">
                            <span class="noticies_date">23 de Janeiro de 2022</span>
                        </div>
                        <div class="noticies__slide-description">
                            <h3>
                                Decreto cria 'mineração artesanal' na Amazônia;
                                <br>
                                para ONGs, governo quer incentivar garimpo ilegal
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="noticies__slider-item">
                    <div class="noticies__slide" style="background-image: url('https://www.10wallpaper.com/wallpaper/1366x768/1407/snowy_mountain_peaks-Nature_HD_Wallpaper_1366x768.jpg');">
                        <div class="noticies__slide-header">
                            <span class="noticies_date">23 de Janeiro de 2022</span>
                        </div>
                        <div class="noticies__slide-description">
                            <h3>
                                Decreto cria 'mineração artesanal' na Amazônia;
                                <br>
                                para ONGs, governo quer incentivar garimpo ilegal
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="noticies__more">
                <h3>Confira mais em <a href="#" class="btn btn-success">Portal de Notícias</a></h3>
            </div>
        </div>
    </div>
</section>
<section class="sponsors" id="sponsors">
    <div class="sponsors__header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <h1 class="sponsors__title">Patrocinadores</h1>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <p class="sponsors__description">
                        Seja você também um anunciante<br>
                        em nossa programação
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sponsors__content">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md ">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
                <div class="col-6 col-md">
                    <img src="https://logodownload.org/wp-content/uploads/2014/04/pepsi-logo-5.png" class="img-fluid sponsors__image">
                </div>
            </div>
        </div>
    </div>

</section>
<?php
get_footer();
