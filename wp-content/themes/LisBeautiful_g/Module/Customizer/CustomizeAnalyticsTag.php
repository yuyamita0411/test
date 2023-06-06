<?php
class CustomizeAnalyticsTag{
    public function __construct(){
        add_action( 'customize_register', array( $this,'SetAnalyticsTag' ) );
    }

    public function SetAnalyticsTag($wp_customize){
        $lng = SetWpLang::ReturnJson();

        $settings = array(
            'analyticspanel' => array(
                'panel' => array(
                    'title'    => $lng["vals"]["CustomizeAnalyticsTag"]["panel"]["title"],
                    'priority' => 11
                ),
                'HTgsection' => array(
                    'title'    => $lng["vals"]["CustomizeAnalyticsTag"]["HTgsection"]["title"],
                    'panel'    => 'analytics_tag_panel'
                ),
                'HTgsetting' => 'HTg_setting',
                'HTgcontroll' => array(
                    'label'    => $lng["vals"]["CustomizeAnalyticsTag"]["HTgcontroll"]["label"],
                    'type'    => 'textarea',
                    'section'  => 'HTg_section',
                    'settings' => 'HTg_setting',
                    'description' => $lng["vals"]["CustomizeAnalyticsTag"]["HTgcontroll"]["description"], 
                    'priority' => 1
                ),
                'FTgsection' => array(
                    'title'    => $lng["vals"]["CustomizeAnalyticsTag"]["FTgsection"]["title"],
                    'panel'    => 'analytics_tag_panel'
                ),
                'FTgsetting' => 'FTg_setting',
                'FTgcontroll' => array(
                    'label'    => $lng["vals"]["CustomizeAnalyticsTag"]["FTgcontroll"]["label"],
                    'type'    => 'textarea',
                    'section'  => 'FTg_section',
                    'settings' => 'FTg_setting',
                    'description' => $lng["vals"]["CustomizeAnalyticsTag"]["FTgcontroll"]["description"], 
                    'priority' => 1
                )
            )
        );
        $wp_customize->add_panel('analytics_tag_panel', $settings['analyticspanel']['panel']);
        $wp_customize->add_section('HTg_section', $settings['analyticspanel']['HTgsection']);
        $wp_customize->add_setting($settings['analyticspanel']['HTgsetting']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HTg_setting', $settings['analyticspanel']['HTgcontroll']));

        $wp_customize->add_section('FTg_section', $settings['analyticspanel']['FTgsection']);
        $wp_customize->add_setting($settings['analyticspanel']['FTgsetting']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'FTg_setting', $settings['analyticspanel']['FTgcontroll']));
    }
    public static function Values(){
        return (object)[
            'AnalyticsHeadTag' => !get_theme_mod('HTg_setting') ? '' : '<script>'.get_theme_mod('HTg_setting').'</script>',
            'AnalyticsFootTag' => !get_theme_mod('FTg_setting') ? '' : '<script>'.get_theme_mod('FTg_setting').'</script>'
        ];
    }
}

new CustomizeAnalyticsTag();
?>