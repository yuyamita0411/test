<?php
    class CustomizeBreadCrumb{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetBreadcrumbLayout' ) );
        }

        public function SetBreadcrumbLayout($wp_customize){
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'breadcrumbtemplate' => array(
                    'panel' => array(
                        'title'    => $lng["vals"]["CustomizeBreadCrumb"]["panel"]["title"],
                        'priority' => 4
                    ),

                    //デザイン
                    'BDsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeBreadCrumb"]["BDsection"]["title"], 'theme_slug' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'BDsetting' => 'BD_setting',
                    'BDcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'BD_section', 
                        'settings'    => 'BD_setting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["pt4"] ),
                            'pt5'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["pt5"] ),
                            'pt6'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["pt6"] ),
                            'none'   => __( $lng["vals"]["CustomizeBreadCrumb"]["BDcontroll"]["choices"]["none"] )
                        )
                    ),

                    //色の調整
                    'BCsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeBreadCrumb"]["BCsection"]["title"], 'theme_slug1' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'BCsetting' => 'BC_setting',
                    'BFCsetting' => 'BFC_setting',
                    'BHVFCsetting' => 'BHVFC_setting',
                    'BARRsetting' => 'BARR_setting',
                    'BCdefault' => array(
                        'default'     => '#e9ecef',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'BFCdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'BHVFCdefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'BARRdefault' => array(
                        'default'     => '#757575',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'BCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeBreadCrumb"]["BCcontroll"]["label"],
                        'section'    => 'BC_section',
                        'settings'   => 'BC_setting'
                    ),
                    'BFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeBreadCrumb"]["BFCcontroll"]["label"],
                        'section'    => 'BC_section',
                        'settings'   => 'BFC_setting'
                    ),
                    'BHVFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeBreadCrumb"]["BHVFCcontroll"]["label"],
                        'section'    => 'BC_section',
                        'settings'   => 'BHVFC_setting'
                    ),
                    'BARRcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeBreadCrumb"]["BARRcontroll"]["label"],
                        'section'    => 'BC_section',
                        'settings'   => 'BARR_setting'
                    ),
                    'BAnsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeBreadCrumb"]["BAnsection"]["title"], 'theme_slug' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'BAnsetting' => 'BAn_setting',
                    'BAncontroll' => array(
                        'label'       => $lng["vals"]["CustomizeBreadCrumb"]["BAncontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'BAn_section', 
                        'settings'    => 'BAn_setting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    ),

                    //フォントサイズの調整
                    'BFszsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeBreadCrumb"]["BFszsection"]["title"], 'theme_slug' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'BFszsetting' => 'BFsz_setting',
                    'BFszcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeBreadCrumb"]["BFszcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'BFsz_section', 
                        'settings'    => 'BFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                )
            );
            $wp_customize->add_panel('breadcrumb_design_panel', $settings['breadcrumbtemplate']['panel']);
            $wp_customize->add_section('BD_section', $settings['breadcrumbtemplate']['BDsection']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'BD_setting', $settings['breadcrumbtemplate']['BDcontroll']));

            $wp_customize->add_section('BC_section', $settings['breadcrumbtemplate']['BCsection']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BCsetting'], $settings['breadcrumbtemplate']['BCdefault']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BFCsetting'], $settings['breadcrumbtemplate']['BFCdefault']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BHVFCsetting'], $settings['breadcrumbtemplate']['BHVFCdefault']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BARRsetting'], $settings['breadcrumbtemplate']['BARRdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'BC_setting', $settings['breadcrumbtemplate']['BCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'BFC_setting', $settings['breadcrumbtemplate']['BFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'BHVFC_setting', $settings['breadcrumbtemplate']['BHVFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'BARR_setting', $settings['breadcrumbtemplate']['BARRcontroll']));

            $wp_customize->add_section('BAn_section', $settings['breadcrumbtemplate']['BAnsection']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BAnsetting'], $settings['breadcrumbtemplate']['BAndefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'BAn_setting', $settings['breadcrumbtemplate']['BAncontroll']));

            $wp_customize->add_section('BFsz_section', $settings['breadcrumbtemplate']['BFszsection']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['BFszsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'BFsz_setting', $settings['breadcrumbtemplate']['BFszcontroll']));
        }
        public static function Values(){
            return (object)[
                'BreadcrumbTemplate' => !get_theme_mod('BD_setting') ? 'pt1' : get_theme_mod('BD_setting'),
                'BCSetting' => !get_theme_mod('BC_setting') ? '#e9ecef' : get_theme_mod('BC_setting'),
                'BFCSetting' => !get_theme_mod('BFC_setting') ? '#06357c' : get_theme_mod('BFC_setting'),
                'BHVFCSetting' => !get_theme_mod('BHVFC_setting') ? '#afafaf' : get_theme_mod('BHVFC_setting'),
                'BARRSetting' => !get_theme_mod('BARR_setting') ? '#757575' : get_theme_mod('BARR_setting'),
                'BreadcrumbAnimation' => !get_theme_mod('BAn_setting') ? 'none' : get_theme_mod('BAn_setting'),
                'BreadCrumbFontSize' => !get_theme_mod('BFsz_setting') ? '16px' : get_theme_mod('BFsz_setting'),
            ];
        }
    }

    new CustomizeBreadCrumb();
?>