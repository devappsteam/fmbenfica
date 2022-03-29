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


function programing_type()
{
    $labels = array(
        'name'                => __('Programações', 'fmbenfica'),
        'singular_name'       => __('Programação', 'fmbenfica'),
        'menu_name'           => __('Programações', 'fmbenfica'),
        'parent_item_colon'   => __('Programação', 'fmbenfica'),
        'all_items'           => __('Todas as Programações', 'fmbenfica'),
        'view_item'           => __('Ver Programação', 'fmbenfica'),
        'add_new_item'        => __('Adicionar Programação', 'fmbenfica'),
        'add_new'             => __('Adicionar Programação', 'fmbenfica'),
        'edit_item'           => __('Editar Programação', 'fmbenfica'),
        'update_item'         => __('Atualizar Programalção', 'fmbenfica'),
        'search_items'        => __('Pesquisar Programação', 'fmbenfica'),
        'not_found'           => __('Nenhuma programação encontrada!', 'fmbenfica'),
        'not_found_in_trash'  => __('Nenhuma programação encontrada!', 'fmbenfica'),
    );

    $args = array(
        'label'               => __('programing', 'fmbenfica'),
        'description'         => __('Programação da rádio', 'fmbenfica'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-video',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );
    register_post_type('programacao', $args);
}

add_action('init', 'programing_type', 0);


function metabox_programacao()
{
    add_meta_box(
        'programacao_box_id',
        'Informações da Programação',
        'metabox_programacao_html',
        'programacao'
    );
}

function metabox_programacao_html($post)
{
    include('template_parts/admin/info_programacao.php');
}

add_action('add_meta_boxes', 'metabox_programacao');

function admin_style_css()
{

    // Upload de Imagens
    wp_enqueue_media();

    wp_enqueue_style('fmbenfica-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '24032022');

    //Registra os scripts
    wp_enqueue_script('fmbenfica-admin', get_template_directory_uri() . '/assets/js/admin.js', array('jquery', 'media-upload', 'thickbox'), true);
}

add_action('admin_enqueue_scripts', 'admin_style_css');



function save_metadata_programacao($post_id)
{
    $data = array(
        'programing_author' => addslashes($_POST['programing_author']),
        'programing_datetime' => addslashes($_POST['programing_datetime']),
        'programing_image' => $_POST['programing_image']
    );

    update_post_meta(
        $post_id,
        '_programacao',
        $data
    );
}

add_action('save_post_programacao', 'save_metadata_programacao');
