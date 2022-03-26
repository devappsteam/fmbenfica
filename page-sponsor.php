<?php

/**
 * Template name: Seja um Patrocinador
 */
get_header();
?>
<div class="sponsor-page">
    <section class="sponsor__hero" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/sponsor_hero.png' ?>');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponsor__title">
                        <p class="sponsor__title-top">Seja um</p>
                        <p class="sponsor__title-bottom">Patrocinador</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsor__form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="pl-md-5">
                        <p class="sponsor__form-top">Faça parte</p>
                        <p class="sponsor__form-middle">desse</p>
                        <p class="sponsor__form-middle">time</p>
                        <p class="sponsor__form-bottom">vencedor!</p>
                    </div>
                    <div class="sponsor__bar"></div>
                </div>
                <div class="col-12 col-md-6">
                    <form method="post">
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nome" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <input type="text" name="company" class="form-control" placeholder="Nome da Empresa" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Telefone" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <input type="email" name="name" class="form-control" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <textarea name="note" class="form-control" placeholder="Observação" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-orange btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsors-carousel my-4">
        <h3 class="sponsors-carousel__title">Seja você tambêm um anunciante em nossa programação</h3>
    </section>
</div>
<?php
get_footer();
