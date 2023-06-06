<?php
class CustomizeFont{
    public function __construct() {
        add_action( 'customize_register', array( $this,'SetMenuButton' ) );
    }

    public function SetMenuButton($wp_customize){
        $lng = SetWpLang::ReturnJson();

        $settings = array(
            'fontfamily' => array(
                'section' => array(
                    'title'    => __( $lng["vals"]["CustomizeFont"]["section"]["title"], 'theme_slug' ),
                    'priority' => 1
                ),
                'setting' => array(
                    'default'   => 'Dark',
                    'transport' => 'refresh',
                ),
                'controll' => array(
                    'label'       => 'font-family', 
                    'type'        => 'radio',
                    'section'     => 'theme_setting', 
                    'settings'    => 'checkbox_setting', 
                    'description' => $lng["vals"]["CustomizeFont"]["controll"]["description"], 
                    'choices'     =>  array(
                        'serif'   => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["serif"] ),
                        'sans-serif'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["sans-serif"] ),
                        'monospace'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["monospace"] ),
                        'cursive'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["cursive"] ),
                        'fantasy'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["fantasy"] ),
                        'system-ui'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["system-ui"] ),
                        'ui-serif'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["ui-serif"] ),
                        'ui-sans-serif'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["ui-sans-serif"] ),
                        'ui-monospace'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["ui-monospace"] ),
                        'ui-rounded'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["ui-rounded"] ),
                        'emoji'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["emoji"] ),
                        'math'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["math"] ),
                        'fangsong'  => __( $lng["vals"]["CustomizeFont"]["controll"]["choices"]["fangsong"] )
                    )
                )
            )
        );
        $wp_customize->add_section('theme_setting', $settings['fontfamily']['section']);
        $wp_customize->add_setting('checkbox_setting', $settings['fontfamily']['setting']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'checkbox_setting', $settings['fontfamily']['controll']));
    }
    public static function Values(){
        return (object)[
            'SetSiteFont' => !get_theme_mod('checkbox_setting') ? 'sans-serif' : get_theme_mod('checkbox_setting')
        ];
    }
}

new CustomizeFont();
?>