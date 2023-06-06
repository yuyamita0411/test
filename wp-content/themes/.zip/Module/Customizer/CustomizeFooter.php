<?php
    class CustomizeFooter{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetFooterLayout' ) );
        }

        public function SetFooterLayout($wp_customize){
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'footertemplate' => array(
                    'panel' => array(
                        'title'    => $lng["vals"]["CustomizeFooter"]["panel"]["title"],
                        'priority' => 8
                    ),
                    //デザイン
                    'FDsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeFooter"]["FDsection"]["title"], 'theme_slug' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'FDsetting' => 'FD_setting',
                    'FDcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeFooter"]["FDcontroll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'FD_section', 
                        'settings'    => 'FD_setting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["pt4"] ),
                            'pt5'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["pt5"] ),
                            'pt6'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["pt6"] ),
                            'none'   => __( $lng["vals"]["CustomizeFooter"]["FDcontroll"]["choices"]["none"] )
                        )
                    ),
                    //色の調整
                    'FBGsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeFooter"]["FBGsection"]["title"], 'theme_slug1' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'FBGsetting' => 'FBG_setting',
                    'FFCsetting' => 'FFC_setting',
                    'FHVFCsetting' => 'FHVFC_setting',
                    'FBGdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'FFCdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'FHVFCdefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'FBGcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeFooter"]["FBGcontroll"]["label"],
                        'section'    => 'FC_section',
                        'settings'   => 'FBG_setting'
                    ),
                    'FFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeFooter"]["FFCcontroll"]["label"],
                        'section'    => 'FC_section',
                        'settings'   => 'FFC_setting'
                    ),
                    'FHVFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeFooter"]["FHVFCcontroll"]["label"],
                        'section'    => 'FC_section',
                        'settings'   => 'FHVFC_setting'
                    ),

                    //フォントサイズの調整
                    'FFszsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeFooter"]["FFszsection"]["title"], 'theme_slug' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'FFszsetting' => 'FFsz_setting',
                    'FCprFszsetting' => 'FCprFsz_setting',
                    'FFszcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeFooter"]["FFszcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'FFsz_section', 
                        'settings'    => 'FFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'FCprFszcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeFooter"]["FCprFszcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'FFsz_section', 
                        'settings'    => 'FCprFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'FCprsection' => array(
                        'title'    => $lng["vals"]["CustomizeFooter"]["FCprsection"]["title"],
                        'panel'    => 'footer_design_panel'
                    ),
                    'FCprsetting' => 'FCpr_setting',
                    'FCprcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeFooter"]["FCprcontroll"]["label"],
                        'section'  => 'FCpr_section',
                        'settings' => 'FCpr_setting',
                        'priority' => 1
                    )
                )
            );
            $wp_customize->add_panel('footer_design_panel', $settings['footertemplate']['panel']);
            $wp_customize->add_section('FD_section', $settings['footertemplate']['FDsection']);
            $wp_customize->add_setting($settings['footertemplate']['FDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'FD_setting', $settings['footertemplate']['FDcontroll']));

            $wp_customize->add_section('FC_section', $settings['footertemplate']['FBGsection']);
            $wp_customize->add_setting($settings['footertemplate']['FBGsetting'], $settings['footertemplate']['FBGdefault']);
            $wp_customize->add_setting($settings['footertemplate']['FFCsetting'], $settings['footertemplate']['FFCdefault']);
            $wp_customize->add_setting($settings['footertemplate']['FHVFCsetting'], $settings['footertemplate']['FHVFCdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'FBG_setting', $settings['footertemplate']['FBGcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'FFC_setting', $settings['footertemplate']['FFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'FHVFC_setting', $settings['footertemplate']['FHVFCcontroll']));

            $wp_customize->add_section('FFsz_section', $settings['footertemplate']['FFszsection']);
            $wp_customize->add_setting($settings['footertemplate']['FFszsetting']);
            $wp_customize->add_setting($settings['footertemplate']['FCprFszsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'FFsz_setting', $settings['footertemplate']['FFszcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'FCprFsz_setting', $settings['footertemplate']['FCprFszcontroll']));

            $wp_customize->add_section('FCpr_section', $settings['footertemplate']['FCprsection']);
            $wp_customize->add_setting($settings['footertemplate']['FCprsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'FCpr_setting', $settings['footertemplate']['FCprcontroll']));
        }
        public static function Values(){
            return (object)[
                'FooterTemplate' => !get_theme_mod('FD_setting') ? 'pt1' : get_theme_mod('FD_setting'),
                'FooterColor' => !get_theme_mod('FBG_setting') ? '#06357c' : get_theme_mod('FBG_setting'),
                'FooterFontColor' => !get_theme_mod('FFC_setting') ? '#ffffff' : get_theme_mod('FFC_setting'),
                'FooterFontHoverColor' => !get_theme_mod('FHVFC_setting') ? '#afafaf' : get_theme_mod('FHVFC_setting'),
                'FooterlinkFontSize' => !get_theme_mod('FFsz_setting') ? '16px' : get_theme_mod('FFsz_setting'),
                'FooterCopyrightFontSize' => !get_theme_mod('FCprFsz_setting') ? '16px' : get_theme_mod('FCprFsz_setting'),
                'STCprSetting' => !get_theme_mod('FCpr_setting') ? 'corporate' : get_theme_mod('FCpr_setting')
            ];
        }
    }
    new CustomizeFooter();
?>