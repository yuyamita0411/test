<?php
    class Widgets{
        public function __construct() {
            add_action( 'after_setup_theme', array( $this,'theme_setup' ) );
            add_action( 'widgets_init', array( $this,'theme_widgets_init' ) );
        }
        public function theme_setup() {

            load_theme_textdomain( 'corporatesite', get_template_directory() . '/languages' );

            add_theme_support( 'automatic-feed-links' );

            add_theme_support( 'title-tag' );

            add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
            );

            add_theme_support( 'post-thumbnails' );
            set_post_thumbnail_size( 1568, 9999 );

            register_nav_menus(
                array(
                    'header' => 'ヘッダー',
                    'side'   => 'サイド',
                    'footer' => 'フッター'
                )
            );

            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
            );

            $logo_width  = 300;
            $logo_height = 100;

            add_theme_support(
                'custom-logo',
                array(
                    'height'               => $logo_height,
                    'width'                => $logo_width,
                    'flex-width'           => true,
                    'flex-height'          => true,
                    'unlink-homepage-logo' => true,
                )
            );

            add_theme_support( 'customize-selective-refresh-widgets' );

            add_theme_support( 'wp-block-styles' );

            add_theme_support( 'align-wide' );

            add_theme_support( 'editor-styles' );
            $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
            /*if ( 127 > Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
                add_theme_support( 'dark-editor-style' );
            }*/

            $editor_stylesheet_path = './assets/css/style-editor.css';

            global $is_IE;
            if ( $is_IE ) {
                $editor_stylesheet_path = './assets/css/ie-editor.css';
            }

            add_editor_style( $editor_stylesheet_path );

        }
    }
    new Widgets();
?>