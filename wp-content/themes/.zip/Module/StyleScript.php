<?php
    class StyleScript{
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this,'set_stylesheet' ), 4 );
            add_action( 'init', array( $this,'RemoveDefaultScript' ) );
            add_filter( 'wp_resource_hints', array( $this,'remove_dns_prefetch' ), 10, 2 );

            if (!is_user_logged_in()) {
                add_action( 'wp_enqueue_scripts', array( $this,'dequeStyles'), 1000);
            }

            if( is_admin() ){
                wp_enqueue_script( 'init', get_template_directory_uri().'/Module/Admin/js/color-picker.js', array( 'wp-color-picker' ), false, true );
                add_action('wp_default_scripts', array( $this,'wpDefaultColorPicker' ));
            }

            if (is_user_logged_in()) {
                add_action( 'admin_enqueue_scripts', array( $this,'readEditorCss' ));
                add_action( 'enqueue_block_editor_assets', array( $this,'theme_name_scripts' ) );
            }
            
        }

        public function set_stylesheet(){
            wp_dequeue_style( 'global-styles' );

            wp_enqueue_script( 'font-awesome-d', get_template_directory_uri() . '/Module/styles/js/font-awesome-d.js');
            wp_enqueue_script( 'scrollscript', get_template_directory_uri() . '/Module/styles/js/smoothscroll.js');

            wp_enqueue_style( 'cssmodule', get_template_directory_uri() . '/Module/styles/css/style.css' );
            wp_enqueue_script( 'commonscript', get_template_directory_uri() . '/Module/styles/js/script.js');
        }

        public function dequeStyles () {
            wp_dequeue_style('wp-block-library');
            wp_dequeue_style('wp-block-library-theme');
        }
        public function RemoveDefaultScript(){

            remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'wp_print_styles', 'print_emoji_styles' );
            remove_action( 'admin_print_styles', 'print_emoji_styles' );    
            remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
            remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
            remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
            add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

            remove_action('wp_head', 'feed_links', 2);
            remove_action('wp_head', 'feed_links_extra', 3);
            remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
            remove_action('wp_head', 'wp_generator');
            remove_action('wp_head', 'rsd_link');
            remove_action('wp_head', 'wlwmanifest_link');
            remove_action('wp_head', 'wp_shortlink_wp_head');
            remove_action('wp_head', 'rest_output_link_wp_head');
        }

        public function remove_dns_prefetch( $hints, $relation_type ) {
          if ( 'dns-prefetch' === $relation_type ) {
            return array_diff( wp_dependencies_unique_hosts(), $hints );
          }
          return $hints;
        }

        public function wpDefaultColorPicker( $scripts ){
            wp_enqueue_style( 'wp-color-picker' );
            $scripts->add( 'wp-color-picker', "/wp-admin/js/color-picker.min.js", array( 'iris' ), false, 1 );
            did_action( 'init' ) && $scripts->localize(
                'wp-color-picker',
                'wpColorPickerL10n',
                array(
                    'clear'            => __( 'Clear' ),
                    'clearAriaLabel'   => __( 'Clear color' ),
                    'defaultString'    => __( 'Default' ),
                    'defaultAriaLabel' => __( 'Select default color' ),
                    'pick'             => __( 'Select Color' ),
                    'defaultLabel'     => __( 'Color value' ),
                )
            );
        }

        //管理画面を触ってる時に反映する
        public function theme_name_scripts() {
            wp_enqueue_script( 'font-awesome-d', get_template_directory_uri() . '/Module/styles/js/font-awesome-d.js');
            wp_enqueue_script( 'script-name', get_template_directory_uri().'/Module/Admin/Editor/customblock/build/index.js', array(), '1.0.0', true );
        }

        public function readEditorCss () {
            wp_enqueue_style( 'editor-css', get_template_directory_uri().'/Module/Admin/Editor/customblock/src/css/editor.css' );
        }
    }
    new StyleScript();
?>