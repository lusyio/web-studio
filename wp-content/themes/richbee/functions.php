<?php
/**
 * Richbee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if (!function_exists('wp_bootstrap_starter_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_bootstrap_starter_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on WP Bootstrap Starter, use a find and replace
         * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
         */
        load_theme_textdomain('wp-bootstrap-starter', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wp_bootstrap_starter_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }

        add_action('admin_init', 'wp_boostrap_starter_add_editor_styles');

    }
endif;
add_action('after_setup_theme', 'wp_bootstrap_starter_setup');


/**cc
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder()
{
    $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

    if (!get_option('triggered_welcomet')) {
        $message = sprintf(__('Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter'),
            esc_url($theme_page_url)
        );

        printf(
            '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
            $message
        );
        add_option('triggered_welcomet', '1', '', 'yes');
    }

}

add_action('admin_notices', 'wp_bootstrap_starter_reminder');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_bootstrap_starter_content_width', 1170);
}

add_action('after_setup_theme', 'wp_bootstrap_starter_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'wp-bootstrap-starter'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'wp-bootstrap-starter'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'wp-bootstrap-starter'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'wp-bootstrap-starter'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'wp-bootstrap-starter'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'wp_bootstrap_starter_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts()
{
    // load bootstrap css
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css');
    // fontawesome cdn
    wp_enqueue_style('wp-bootstrap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    // load bootstrap css
    // load AItheme styles
    // load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri());
    if (get_theme_mod('theme_option_setting') && get_theme_mod('theme_option_setting') !== 'default') {
        wp_enqueue_style('wp-bootstrap-starter-' . get_theme_mod('theme_option_setting'), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/' . get_theme_mod('theme_option_setting') . '.css', false, '');
    }
    if (get_theme_mod('preset_style_setting') === 'poppins-lora') {
        wp_enqueue_style('wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700');
    }
    if (get_theme_mod('preset_style_setting') === 'montserrat-merriweather') {
        wp_enqueue_style('wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800');
    }
    if (get_theme_mod('preset_style_setting') === 'poppins-poppins') {
        wp_enqueue_style('wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    }
    if (get_theme_mod('preset_style_setting') === 'roboto-roboto') {
        wp_enqueue_style('wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i');
    }
    if (get_theme_mod('preset_style_setting') === 'arbutusslab-opensans') {
        wp_enqueue_style('wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800');
    }
    if (get_theme_mod('preset_style_setting') === 'oswald-muli') {
        wp_enqueue_style('wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700');
    }
    if (get_theme_mod('preset_style_setting') === 'montserrat-opensans') {
        wp_enqueue_style('wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800');
    }
    if (get_theme_mod('preset_style_setting') === 'robotoslab-roboto') {
        wp_enqueue_style('wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i');
    }
    if (get_theme_mod('preset_style_setting') && get_theme_mod('preset_style_setting') !== 'default') {
        wp_enqueue_style('wp-bootstrap-starter-' . get_theme_mod('preset_style_setting'), get_template_directory_uri() . '/inc/assets/css/presets/typography/' . get_theme_mod('preset_style_setting') . '.css', false, '');
    }
    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');


function wp_bootstrap_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}

add_filter('the_password_form', 'wp_bootstrap_starter_password_form');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

remove_action('wp_head', 'feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head', 'feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head', 'rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head', 'wp_generator');  // скрыть версию wordpress

/**
 * Удаление json-api ссылок
 */
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

/**
 * Cкрываем разные линки при отображении постов блога (следующий, предыдущий, короткий url)
 */
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/**
 * `Disable Emojis` Plugin Version: 1.7.2
 */
if ('Отключаем Emojis в WordPress') {

    /**
     * Disable the emoji's
     */
    function disable_emojis()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
        add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
    }

    add_action('init', 'disable_emojis');

    /**
     * Filter function used to remove the tinymce emoji plugin.
     *
     * @param array $plugins
     * @return   array             Difference betwen the two arrays
     */
    function disable_emojis_tinymce($plugins)
    {
        if (is_array($plugins)) {
            return array_diff($plugins, array('wpemoji'));
        }

        return array();
    }

    /**
     * Remove emoji CDN hostname from DNS prefetching hints.
     *
     * @param array $urls URLs to print for resource hints.
     * @param string $relation_type The relation type the URLs are printed for.
     * @return array                 Difference betwen the two arrays.
     */
    function disable_emojis_remove_dns_prefetch($urls, $relation_type)
    {

        if ('dns-prefetch' == $relation_type) {

            // Strip out any URLs referencing the WordPress.org emoji location
            $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
            foreach ($urls as $key => $url) {
                if (strpos($url, $emoji_svg_url_bit) !== false) {
                    unset($urls[$key]);
                }
            }

        }

        return $urls;
    }

}

/**
 * Удаляем стили для recentcomments из header'а
 */
function remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}

add_action('widgets_init', 'remove_recent_comments_style');

/**
 * Удаляем ссылку на xmlrpc.php из header'а
 */
remove_action('wp_head', 'wp_bootstrap_starter_pingback_header');

/**
 * Удаляем стили для #page-sub-header из  header'а
 */
remove_action('wp_head', 'wp_bootstrap_starter_customizer_css');

//области вставки меню
function register_my_menus()
{
    register_nav_menus(
        array(
            'second' => __('second'),
        )
    );
}

add_action('init', 'register_my_menus');

/**
 * Добавляем классы для инпутов Caldera forms
 */

add_filter('caldera_forms_field_attributes', function ($attrs, $field, $form) {
    if ('email' === Caldera_Forms_Field_Util::get_type($field, $form) || 'phone' === Caldera_Forms_Field_Util::get_type($field, $form)) {
        $attrs['class'] .= ' form-control';
    }
    return $attrs;
}, 20, 3);

/**
 * Удаляем div-обертку radio-input'ов
 */
add_filter('caldera_forms_render_field_structure_type-radio', function ($field_structure) {
    $field_structure['wrapper_before'] = '<div class="row">';
    $field_structure['field_before'] = '<div class="col d-flex flex-wrap">';
    $field_structure['field_after'] = '</div>';
    $field_structure['wrapper_after'] = '</div>';
    return $field_structure;
});

/**
 * Удаляем div-обертку checkbox-input'ов
 */
add_filter('caldera_forms_render_field_structure_type-checkbox', function ($field_structure) {
    $field_structure['wrapper_before'] = '<div class="row">';
    $field_structure['field_before'] = '<div class="col d-flex flex-wrap">';
    $field_structure['field_after'] = '</div>';
    $field_structure['wrapper_after'] = '</div>';
    return $field_structure;
});

/**
 * Оборачиваем текст radio-input'ов в <span>
 */
add_filter('caldera_forms_render_get_field_type-radio', function ($field) {
    if ($field['type'] == 'radio' && isset($field['config']['option'])) {
        foreach ($field['config']['option'] as $key => $value) {
            $field['config']['option'][$key]['label'] = '<span>' . $value['label'] . '</span>';
        }
    }
    return $field;
});

/**
 * Оборачиваем текст checkbox-input'ов в <span>
 */
add_filter('caldera_forms_render_get_field_type-checkbox', function ($field) {
    if ($field['type'] == 'checkbox' && isset($field['config']['option'])) {
        foreach ($field['config']['option'] as $key => $value) {
            $field['config']['option'][$key]['label'] = '<span>' . $value['label'] . '</span>';
        }
    }
    return $field;
});

/**
 * Удаляем div-обертку полей для ввода и submit-ов
 */
add_filter('caldera_forms_render_field_structure', function ($field_structure) {
    $elementIds = [
        'fld_8791407',
        'fld_1292397',
        'fld_3805134',
        'fld_6086802',
        'fld_4575049',
        'fld_945005',
        'fld_3821774',
        'fld_4262387',
        'fld_6476113'

    ];
    if (in_array($field_structure['id'], $elementIds)) {
        $field_structure['wrapper_before'] = '';
        $field_structure['wrapper_after'] = '';
    }
    if (in_array($field_structure['id'], $elementIds)) {
        $field_structure['field_before'] = '';
        $field_structure['field_after'] = '';
    }
    return $field_structure;
});

/**
 * Получаем html-код submit-ов
 */
$submit_field = [];
add_filter('caldera_forms_render_field_slug-email_wait', function ($field_html) {
    global $submit_field;
    $submit_field['email_wait'] = $field_html;
    return $field_html;
});
add_filter('caldera_forms_render_field_slug-message_wait', function ($field_html) {
    global $submit_field;
    $submit_field['message_wait'] = $field_html;
    return $field_html;
});
add_filter('caldera_forms_render_field_slug-call_wait', function ($field_html) {
    global $submit_field;
    $submit_field['call_wait'] = $field_html;
    return $field_html;
});
add_filter('caldera_forms_render_field_slug-order', function ($field_html) {
    global $submit_field;
    $submit_field['call_wait'] = $field_html;
    return $field_html;
});

/**
 * Присоединяем submit'ы к текстовым полям
 */
add_filter('caldera_forms_render_field_structure', function ($field_structure) {
    global $submit_field;
    $submit_button = null;
    if ($field_structure['id'] == 'fld_8791407') {
        $submit_button = $submit_field['email_wait'];
    }
    if ($field_structure['id'] == 'fld_1292397') {
        $submit_button = $submit_field['message_wait'];
    }
    if ($field_structure['id'] == 'fld_72245') {
        $submit_button = $submit_field['call_wait'];
    }
    if ($field_structure['id'] == 'fld_3821774') {
        $submit_button = $submit_field['order'];
    }
    if (!is_null($submit_button)) {
        $field_structure['field_before'] = '<div class="input-group mb-3">';
        $field_structure['field_after'] = '<div class="input-group-append">' . $submit_button . '</div></div>';
    }
    return $field_structure;
});

add_filter('caldera_forms_render_field_structure', function ($field_structure) {
    if ($field_structure['id'] == 'fld_5518090' || $field_structure['id'] == 'fld_9190050') {
        $field_structure['wrapper_before'] = '';
        $field_structure['wrapper_after'] = '';
    }
    if ($field_structure['id'] == 'fld_9190050') {
        $field_structure['field_before'] = '<div class="input-group mb-3">';
        $field_structure['field_after'] = '';
    }
    if ($field_structure['id'] == 'fld_5518090') {
        $field_structure['field_before'] = '<div class="input-group-append">';
        $field_structure['field_after'] = '</div></div>';
    }

    if ($field_structure['id'] == 'fld_4262387' || $field_structure['id'] == 'fld_9190050') {
        $field_structure['wrapper_before'] = '';
        $field_structure['wrapper_after'] = '';
    }
    if ($field_structure['id'] == 'fld_3821774') {
        $field_structure['field_before'] = '<div class="input-group mb-3">';
        $field_structure['field_after'] = '';
    }
    if ($field_structure['id'] == 'fld_4262387') {
        $field_structure['field_before'] = '<div class="input-group-append">';
        $field_structure['field_after'] = '</div></div>';
    }

    if ($field_structure['id'] == 'fld_5335556') {
        $field_structure['wrapper_before'] = '<div class="row"><div class="col-lg-6 col-12">';
        $field_structure['wrapper_after'] = '</div></div>';
    }


    return $field_structure;
});

/**
 * Добавляем классы для обычных инпутов и инпутов с иконками в форме запроса на расчет стоимости
 */

add_filter('caldera_forms_render_field_structure_type-radio', function ($field_structure) {
    if ($field_structure['id'] === 'fld_4474812') {
        $field_structure['field_before'] = '<div class="contact-type">';
    }
    if ($field_structure['id'] === 'fld_5156183') {
        $field_structure['field_before'] = '<div class="service-type">';
    }
    return $field_structure;
});

add_filter('caldera_forms_magic_summary_should_use_label', function ($use, $field, $form) {
    if ('CF5d6cd3f839ccc' == $form['ID']) {
        return true;
    }
    if ('CF5d79005c6c8fe' == $form['ID']) {
        return true;
    }
    if ('CF5d6e63522b362' == $form['ID']) {
        return true;
    }
    return $use;
}, 10, 3);

add_filter('caldera_forms_mailer', function ($mail, $data, $form) {
    if ('CF5d6cd3f839ccc' == $form['ID']) {
        $mail['message'] = preg_replace('~service~', 'Услуга для расчета:', $mail['message']);
        $mail['message'] = preg_replace('~contact-type~', 'Выбранный способ связи:', $mail['message']);
        $mail['message'] = preg_replace('~contact-phone~', 'Номер телефона:', $mail['message']);
        $mail['message'] = preg_replace('~contact-email~', 'E-mail:', $mail['message']);
    }

    if ('CF5d79005c6c8fe' == $form['ID']) {
        $mail['message'] = preg_replace('~name~', 'ФИО клиента:', $mail['message']);
        $mail['message'] = preg_replace('~phone~', 'Номер телефона:', $mail['message']);
        $mail['message'] = preg_replace('~uslugi-target~', 'Хочет заказать:', $mail['message']);
    }

    if ('CF5d6e63522b362' == $form['ID']) {
        $mail['message'] = preg_replace('~consult-phone~', 'Номер телефона:', $mail['message']);
    }

    return $mail;

}, 10, 3);

function do_excerpt($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    echo implode(' ', $words) . '...';
}

/* убирает URL в комментах */
add_filter('comment_form_default_fields', 'wp_url_remove');
function wp_url_remove($fields)
{
    if (isset($fields['url']))
        unset($fields['url']);
    return $fields;
}

/* Отключает чекбокс GDPR */
function comment_form_hide_cookies_consent($fields)
{
    unset($fields['cookies']);
    return $fields;
}

add_filter('comment_form_default_fields', 'comment_form_hide_cookies_consent');

/* Шорткод для кейсов */
function true_url_external($atts)
{
    $params = shortcode_atts(array( // параметры по умолчанию
        'anchor' => 'Хочу такой же', // параметр 1
        'url' => 'https://richbee.ru/uslugi', // параметр 2
    ), $atts);
    return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
}

add_shortcode('caseShort', 'true_url_external');

/* Шорткод для баннера */

function add_lusy_banner($atts)
{
    $params = shortcode_atts(array( // параметры по умолчанию
        'h2-1' => 'Хочешь разгрузить свою голову?', // параметр 1
        'h2-2' => 'Попробуй сервис постановки задач', // параметр 2
        'h2-3' => 'Lusy - бесплатно, удобно и эффективно', // параметр 3
        'url' => 'https://lusy.io/?promo=LIOLUSYIO', // параметр 4
        'url-name' => 'Lusy.io', // параметр 5
    ), $atts);
    return '';
//    return "<div class=\"row\">
//                        <div class=\"col p-0 pl-md-3 pr-md-3\">
//                            <div class=\"card border-0 text-center\">
//                                <div class=\"card-body p-0 banner pt-4 pt-xl-5 pb-5\">
//                                    <div class=\"swiper-container vertical p-0\">
//                                        <div class=\"swiper-wrapper\">
//                                            <div class=\"swiper-slide swiper-slide-vertical\">
//                                                <h2 class=\"new m-0\">
//                                                {$params['h2-1']}
//                                                </h2>
//                                            </div>
//                                            <div class=\"swiper-slide swiper-slide-vertical\">
//                                                <h2 class=\"new m-0\">
//                                                    {$params['h2-2']}
//                                                </h2>
//                                            </div>
//                                            <div class=\"swiper-slide swiper-slide-vertical\">
//                                                <h2 class=\"new mt-0\">
//                                                    {$params['h2-3']}
//                                                </h2>
//                                            </div>
//                                        </div>
//                                    </div>
//                                    <a href=\"{$params['url']}\"
//                                       class=\"btn btn-promo-lusy text-inverse\">{$params['url-name']}</a>
//                                </div>
//                            </div>
//                        </div>
//                    </div>";
}

add_shortcode('lusy_banner', 'add_lusy_banner');

/**
 * СОЗДАНИЕ ПОЛЕЙ ДЛЯ ТЕЛЕФОНА И ПОЧТЫ НА СТРАНИЦЕ НАСТРОЕК
 */
add_action( 'admin_init', 'header_contact_settings_api_init' );
function header_contact_settings_api_init() {
    // Добавляем блок опций на базовую страницу "Общие настройки"
    //контакты
    add_settings_section(
        'header_contact_setting_section', // секция
        'Контактные данные',
        'header_contact_setting_section_callback_function',
        'general' // страница
    );

    // Добавляем поля опций. Указываем название, описание,
    // функцию выводящую html код поля опции.
    add_settings_field(
        'header_contact_setting_name',
        'Телефон',
        'header_contact_setting_phone_function', // можно указать ''
        'general', // страница
        'header_contact_setting_section' // секция
    );
    add_settings_field(
        'header_contact_setting_name2',
        'e-mail',
        'header_contact_setting_email_function',
        'general', // страница
        'header_contact_setting_section' // секция
    );

    //секция ютуба
    add_settings_section(
        'header_youtube_setting_section', // секция
        'Настройки видео',
        'header_youtube_setting_section_callback_function',
        'general' // страница
    );

    // Добавляем поля опций. Указываем название, описание,
    // функцию выводящую html код поля опции.
    add_settings_field(
        'header_youtube_setting_name',
        'ID Youtube видео',
        'header_youtube_setting_youtubeid_function', // можно указать ''
        'general', // страница
        'header_youtube_setting_section' // секция
    );
    add_settings_field(
        'header_youtube_setting_name2',
        'Превью Youtube',
        'header_youtube_setting_youtubebg_function',
        'general', // страница
        'header_youtube_setting_section' // секция
    );

    //секция услуги
    add_settings_section(
        'header_services_setting_section', // секция
        'Параметры услуг',
        'header_services_setting_section_callback_function',
        'general' // страница
    );

    // Добавляем поля опций. Указываем название, описание,
    // функцию выводящую html код поля опции.
    add_settings_field(
        'header_services_setting_name',
        'Корпоративный сайт стоимость',
        'header_services_setting_coop_function', // можно указать ''
        'general', // страница
        'header_services_setting_section' // секция
    );
    add_settings_field(
        'header_services_setting_name2',
        'Интернет магазин стоимость',
        'header_services_setting_shops_function',
        'general', // страница
        'header_services_setting_section' // секция
    );
    add_settings_field(
        'header_services_setting_name3',
        'Лендинг стоимость',
        'header_services_setting_landing_function',
        'general', // страница
        'header_services_setting_section' // секция
    );
    add_settings_field(
        'header_services_setting_name4',
        'Разработка сервисов стоимость',
        'header_services_setting_service_function',
        'general', // страница
        'header_services_setting_section' // секция
    );
    add_settings_field(
        'header_services_setting_name5',
        'SEO продвижение стоимость',
        'header_services_setting_seo_function',
        'general', // страница
        'header_services_setting_section' // секция
    );
    add_settings_field(
        'header_services_setting_name6',
        'Яндекс.Директ стоимость',
        'header_services_setting_direct_function',
        'general', // страница
        'header_services_setting_section' // секция
    );
    add_settings_field(
        'header_services_setting_name7',
        'Яндекс.Директ стоимость',
        'header_services_setting_vk_function',
        'general', // страница
        'header_services_setting_section' // секция
    );

    // Регистрируем опции, чтобы они сохранялись при отправке
    // $_POST параметров и чтобы callback функции опций выводили их значение.

    //контакты
    register_setting( 'general', 'header_contact_setting_phone' );
    register_setting( 'general', 'header_contact_setting_email' );

    //ютуб
    register_setting( 'general', 'header_youtube_setting_youtubeid' );
    register_setting( 'general', 'header_youtube_setting_youtubebg' );

    //услуги
    register_setting( 'general', 'header_services_setting_coop' );
    register_setting( 'general', 'header_services_setting_shops' );
    register_setting( 'general', 'header_services_setting_landing' );
    register_setting( 'general', 'header_services_setting_service' );
    register_setting( 'general', 'header_services_setting_seo' );
    register_setting( 'general', 'header_services_setting_direct' );
    register_setting( 'general', 'header_services_setting_vk' );


}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно выводить
// никакой текст или делать что-то еще до того как выводить опции,
// то функцию можно не использовать для этого укажите '' в третьем
// параметре add_settings_section
//

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем text input теги
//
//Поля для сексции контакты
function header_contact_setting_phone_function() {
    echo '<input 
        class="regular-text"
		name="header_contact_setting_phone"  
		type="text" 
		value="' . get_option( 'header_contact_setting_phone' ) . '" 
		class="code2"
	 />';
}
function header_contact_setting_email_function() {
    echo '<input 
        class="regular-text"
		name="header_contact_setting_email"  
		type="text" 
		value="' . get_option( 'header_contact_setting_email' ) . '" 
		class="code2"
	 />';
}
//Поля для сексии ютуба
function header_youtube_setting_youtubeid_function() {
    echo '<input 
        class="regular-text"
		name="header_youtube_setting_youtubeid"  
		type="text" 
		value="' . get_option( 'header_youtube_setting_youtubeid' ) . '" 
		class="code2"
	 />';
}

function header_youtube_setting_youtubebg_function() {
    echo '<input 
        class="regular-text"
		name="header_youtube_setting_youtubebg"  
		type="text" 
		value="' . get_option( 'header_youtube_setting_youtubebg' ) . '" 
		class="code2"
	 />';
}

//Поля для секции услуги

function header_services_setting_coop_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_coop"  
		type="text" 
		value="' . get_option( 'header_services_setting_coop' ) . '" 
		class="code2"
	 />';
}

function header_services_setting_shops_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_shops"  
		type="text" 
		value="' . get_option( 'header_services_setting_shops' ) . '" 
		class="code2"
	 />';
}

function header_services_setting_landing_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_landing"  
		type="text" 
		value="' . get_option( 'header_services_setting_landing' ) . '" 
		class="code2"
	 />';
}

function header_services_setting_service_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_service"  
		type="text" 
		value="' . get_option( 'header_services_setting_service' ) . '" 
		class="code2"
	 />';
}

function header_services_setting_seo_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_seo"  
		type="text" 
		value="' . get_option( 'header_services_setting_seo' ) . '" 
		class="code2"
	 />';
}

function header_services_setting_direct_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_direct"  
		type="text" 
		value="' . get_option( 'header_services_setting_direct' ) . '" 
		class="code2"
	 />';
}

function header_services_setting_vk_function() {
    echo '<input 
        class="regular-text"
		name="header_services_setting_vk"  
		type="text" 
		value="' . get_option( 'header_services_setting_vk' ) . '" 
		class="code2"
	 />';
}

add_filter( 'make_link_for_phone', 'make_link_for_phone_filter' );
add_filter( 'make_title_for_phone', 'make_title_for_phone_filter' );

/**
 * Фильтр для перевода номера телефона из 8(10 цифр) в +7(10 цифр)
 * @param string $phone - номер телефона
 * @return string
 */
function make_link_for_phone_filter($phone)
{
    $phone = trim($phone);
    if (preg_match('~^8[0-9]{10}$~', $phone)) {
        $result_phone = '+7' . mb_substr($phone, 1);
        return $result_phone;
    }
    return $phone;
}

/**
 * Фильтр для форматирования номера телефона в вид 8 *** *** ** **
 *  * @param string $phone - номер телефона
 *  * @return string
 */
function make_title_for_phone_filter($phone)
{
    $non_formatted_phone = trim($phone);
    if (preg_match('~^\\+7[0-9]+$~', $non_formatted_phone)) {
        $non_formatted_phone = '8' . mb_substr($non_formatted_phone, 2);
    }
    if (preg_match('~^8[0-9]{10}$~', $non_formatted_phone)) {
        $formatted_phone = mb_substr($non_formatted_phone, 0, 1) . ' '
            . mb_substr($non_formatted_phone, 1, 3) . ' '
            . mb_substr($non_formatted_phone, 4, 3) . ' '
            . mb_substr($non_formatted_phone, 6, 2) . ' '
            . mb_substr($non_formatted_phone, 8, 2);
    } else {
        $formatted_phone = $non_formatted_phone;
    }
    return $formatted_phone;
}
