<?php

/**
 * FMBenfica funções e definições
 */

if (!function_exists('fmbenfica_setup')) {

    /**
     * Configura padrões de tema e registra suporte para vários recursos do WordPress.
     *
     * Observe que esta função está ligada ao gancho after_setup_theme, que
     * é executado antes do gancho de inicialização. O gancho de inicialização é muito tarde para alguns recursos.
     */
    function fmbenfica_setup()
    {
        /*
        * Disponibiliza o suporte para tradução.
        * As traduções podem ser arquivadas no diretório /languages/.
        */
        load_theme_textdomain('fmbenfica', get_template_directory() . '/languages');

        // Adiciona links de feeds RSS de posts e comentários padrão no cabeçalho.
        add_theme_support('automatic-feed-links');

        /*
        * Deixe o WordPress gerenciar o título do documento.
        * Ao adicionar suporte a temas, declaramos que este tema não usa um
        * tag <title> codificada no cabeçalho do documento e espera que o WordPress
        * o forneça.
        */
        add_theme_support('title-tag');


        /*
        * Habilite o suporte para Post Thumbnails em posts e páginas.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-thumbnails');

        /**
         * Registra os menus que serão utilizado no site
         */
        register_nav_menus(array(
            'main_menu' => esc_html__('Menu Principal', 'fmbenfica'),
        ));

        /*
        * Alterna a marcação principal padrão para formulário de pesquisa, formulário de comentário e comentários
        * para gerar HTML5 válido.
        */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Adiciona suporte de tema para atualização seletiva de widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Adiciona suporte para logotipo personalizado.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }

    add_action('after_setup_theme', 'fmbenfica_setup');
}

function fmbenfica_scripts()
{
    wp_enqueue_style('fmbenfica-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), '24032022');
    //wp_enqueue_style('fmbenfica-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), '24032022');

    wp_enqueue_style('fmbenfica-main-style', get_template_directory_uri() . '/assets/css/app.css', array('fmbenfica-fonts'), '24032022');

    wp_enqueue_script('jquery');

    wp_enqueue_script('fmbenfica-script', get_template_directory_uri() . '/assets/js/app.js', array(), '24032022', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'fmbenfica_scripts');
