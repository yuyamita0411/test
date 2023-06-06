<?php
    class CustomizeOtherBasic{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetOtherBasics' ) );
        }

        public function SetOtherBasics($wp_customize){
            $settings = array(
                'otherbasictemplate' => array(
                    'panel' => array(
                        'title'    => 'その他の設定',
                        'priority' => 12
                    ),
                    'fvImsection' => array(
                        'title'    => __( 'faviconの設定', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'fvImsetting' => 'fvIm_setting',
                    'fvImcontroll' => array(
                        'label' => 'faviconの設定。',
                        'section' => 'fvIm_section',
                        'settings' => 'fvIm_setting',
                    ),
                    'ThImsection' => array(
                        'title'    => __( 'サムネイルがない時のダミー画像', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'ThImsetting' => 'ThIm_setting',
                    'ThImcontroll' => array(
                        'label' => 'サムネイルがない時のダミー画像を設定する。',
                        'section' => 'ThIm_section',
                        'settings' => 'ThIm_setting',
                    ),
                    'TSBsection' => array(
                        'title'    => __( 'TOPへ戻るボタンの表示、非表示', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'TSBsetting' => 'TSB_setting',
                    'TSBcontroll' => array(
                        'label'       => 'TOPへ戻るボタンの表示、非表示を選択する', 
                        'type'        => 'select',
                        'section'     => 'TSB_section', 
                        'settings'    => 'TSB_setting',
                        'default'   => 'inline-block',
                        'choices' => array(
                            'inline-block' => 'あり',
                            'none' => 'なし'
                        )
                    ),
                    'TSBDsection' => array(
                        'title'    => __( 'TOPへ戻るボタンのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'TSBDsetting' => 'TSBD_setting',
                    'TSBDcontroll' => array(
                        'label'       => 'TOPへ戻るボタンのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'TSBD_section', 
                        'settings'    => 'TSBD_setting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( '正方形 + 三角' ),
                            'pt2'   => __( '円 + 三角' ),
                            'pt3'   => __( '円 + 矢印' ),
                            'pt4'   => __( '矢印(背景色なし)' ),
                            'pt5'   => __( '円 + 矢印(背景色なし)' ),
                            'pt6'   => __( '矢印(背景色なし)' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'TSBBgsection' => array(
                        'title'    => __( 'TOPへ戻るボタンの背景色を変更する', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'TSBBgsetting' => 'TSBBg_setting',
                    'TSBBgdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'TSBBgcontroll' => array(
                        'label'    => 'TOPへ戻るボタンの背景色を変更する',
                        'section'    => 'TSBBg_section',
                        'settings'   => 'TSBBg_setting'
                    ),
                    'SMHsection' => array(
                        'title'    => __( 'サイトマップhtmlの自動更新を設定する', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'SMHsetting' => 'SMH_setting',
                    'SMHcontroll' => array(
                        'label'       => 'サイトマップhtmlの自動更新を選択する', 
                        'type'        => 'select',
                        'section'     => 'SMH_section', 
                        'settings'    => 'SMH_setting',
                        'default'   => 'on',
                        'choices' => array(
                            'on' => '自動更新をオンにする',
                            'off' => '自動更新をオフにする'
                        )
                    ),
                    'SMXsection' => array(
                        'title'    => __( 'サイトマップxmlの自動更新を設定する', 'theme_slug' ),
                        'panel'    => 'otherbasic_design_panel'
                    ),
                    'SMXsetting' => 'SMX_setting',
                    'SMXcontroll' => array(
                        'label'       => 'サイトマップxmlの自動更新を選択する', 
                        'type'        => 'select',
                        'section'     => 'SMX_section', 
                        'settings'    => 'SMX_setting',
                        'default'   => 'on',
                        'choices' => array(
                            'on' => '自動更新をオンにする',
                            'off' => '自動更新をオフにする'
                        )
                    )
                )
            );

            $wp_customize->add_panel('otherbasic_design_panel', $settings['otherbasictemplate']['panel']);
            $wp_customize->add_section('fvIm_section', $settings['otherbasictemplate']['fvImsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['fvImsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'fvIm_setting', $settings['otherbasictemplate']['fvImcontroll']));

            $wp_customize->add_section('ThIm_section', $settings['otherbasictemplate']['ThImsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['ThImsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'ThIm_setting', $settings['otherbasictemplate']['ThImcontroll']));

            $wp_customize->add_section('TSB_section', $settings['otherbasictemplate']['TSBsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['TSBsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TSB_setting', $settings['otherbasictemplate']['TSBcontroll']));

            $wp_customize->add_section('TSBD_section', $settings['otherbasictemplate']['TSBDsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['TSBDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TSBD_setting', $settings['otherbasictemplate']['TSBDcontroll']));

            $wp_customize->add_section('TSBBg_section', $settings['otherbasictemplate']['TSBBgsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['TSBBgsetting']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'TSBBg_setting', $settings['otherbasictemplate']['TSBBgcontroll']));

            $wp_customize->add_section('SMH_section', $settings['otherbasictemplate']['SMHsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['SMHsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SMH_setting', $settings['otherbasictemplate']['SMHcontroll']));

            $wp_customize->add_section('SMX_section', $settings['otherbasictemplate']['SMXsection']);
            $wp_customize->add_setting($settings['otherbasictemplate']['SMXsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SMX_setting', $settings['otherbasictemplate']['SMXcontroll']));
        }
        public static function Values(){
            return (object)[
                'GetFaviconImg' => !get_theme_mod('fvIm_setting') ? get_theme_file_uri('img/logo.png') : get_theme_mod('fvIm_setting'),
                'GetNothumbnailImg' => !get_theme_mod('ThIm_setting') ? get_theme_file_uri('img/noimage.jpg') : get_theme_mod('ThIm_setting'),
                'DisplayTopScrollButton' => !get_theme_mod('TSB_setting') ? 'inline-block' : get_theme_mod('TSB_setting'),
                'TopScrollButtonDesign' => !get_theme_mod('TSBD_setting') ? 'pt1' : get_theme_mod('TSBD_setting'),
                'TopScrollButtonBgcolor' => !get_theme_mod('TSBBg_setting') ? '#06357c' : get_theme_mod('TSBBg_setting'),
                'SitemapHTMLStatus' => !get_theme_mod('SMH_setting') ? 'on' : get_theme_mod('SMH_setting'),
                'SitemapXMLStatus' => !get_theme_mod('SMX_setting') ? 'on' : get_theme_mod('SMX_setting')
            ];
        }
    }
    new CustomizeOtherBasic();
?>