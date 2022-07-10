<?php //テーマサポート
function custom_theme_support() {    
        add_theme_support( 'html5', array(
                        'search-form',
                        'comment-form',
                        'comment-list',        
                        'gallery',        
                        'caption', 
                                        ) );    
        add_theme_support( 'post-thumbnails' );    
        add_theme_support( 'title-tag' );
        add_theme_support( 'editor-styles' ); 
        add_theme_support( 'automatic-feed-links' );

        register_nav_menus( array(
        'footer_nav' => esc_html__( 'footer navigation', 'rtbread' ),
        'category_nav' => esc_html__( 'category navigation', 'rtbread' ),
                                ) ); 
        add_editor_style();
}
add_action( 'after_setup_theme', 'custom_theme_support' );

function Humbuger_script(){ //headに記載する読み込み
$locale = get_locale();
$locale = apply_filters('theme_locale', $locale, 'Humbuger_wp');
        wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v6.0.0/css/all.css');
        add_action('wp_enqueue_scripts','enqueue_scripts');
        wp_enqueue_style( 'Humbuger-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Humbuger-Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'Humbuger-normalize', get_theme_file_uri ( '/Scss/foundation/_ress.scss' ), array(), '4.5.0' );
        wp_enqueue_style( 'wpbeg-wpbeg', get_theme_file_uri (  '/css/style.css' ), array( 'wpbeg-normalize' ), '1.0.0' );
        wp_enqueue_style('hamburger', get_theme_file_uri('/css/style.css'), array(), '');
        wp_enqueue_script('text/javascript', get_theme_file_uri("/js/_js_toggle.js"),array( 'jquery' ),'', true);
}
add_action( 'wp_enqueue_scripts', 'Humbuger_script' );

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'archive'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);