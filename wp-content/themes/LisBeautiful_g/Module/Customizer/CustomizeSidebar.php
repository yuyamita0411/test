<?php
    class CustomizeSidebar{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetSidebarLayout' ) );
        }

        public function SetSidebarLayout($wp_customize){
            $settings = array(
                'sidebartemplate' => array(
                    'panel' => array(
                        'title'    => 'サイドバー(開閉メニュー)の設定',
                        'priority' => 6
                    ),
                    //デザイン
                    'SBDsection' => array(
                        'title'    => __( 'サイドバーのデザインを変更する', 'sideber' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 1
                    ),
                    'SBDsetting' => 'SBD_setting',
                    'SBBDsetting' => 'SBBD_setting',
                    'SBDcontroll' => array(
                        'label'       => 'サイドバーのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'SBD_section', 
                        'settings'    => 'SBD_setting', 
                        'default'   => 'pt3',
                        'choices'     =>  array(
                            'pt1'   => __( '不透明 幅100%' ),
                            'pt2'   => __( '不透明 幅75%' ),
                            'pt3'   => __( '不透明 幅50%' ),
                            'pt4'   => __( '半透明 幅100%' ),
                            'pt5'   => __( '半透明 幅75%' ),
                            'pt6'   => __( '半透明 幅50%' ),
                            'pt7'   => __( '半透明 幅25% 不透明 幅75%' ),
                            'pt8'   => __( '半透明 幅50% 不透明 幅50%' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'SBBDcontroll' => array(
                        'label'       => 'サイドバーのボタンのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'SBD_section', 
                        'settings'    => 'SBBD_setting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( '長方形 + 三角' ),
                            'pt2'   => __( '正方形 + 三角' ),
                            'pt3'   => __( '円 + 三角' ),
                            'pt4'   => __( '長方形 + 矢印' ),
                            'pt5'   => __( '円 + 矢印' ),
                            'pt6'   => __( '矢印(背景色なし)' ),
                            'pt7'   => __( '円 + 矢印(背景色なし)' ),
                            'pt8'   => __( '矢印(背景色なし)' ),
                            'none'   => __( '非表示' )
                        )
                    ),

                    //色の調整
                    'SBBgsection' => array(
                        'title'    => __( 'サイドバーの背景色を変更する', 'sideber2' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 2
                    ),
                    'SBBgsetting' => 'SBBg_setting',
                    'SBFCsetting' => 'SBFC_setting',
                    'SBHVFCsetting' => 'SBHVFC_setting',
                    'SBBCsetting' => 'SBBC_setting',
                    'SBBgdefault' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SBFCdefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SBHVFCdefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SBBCdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SBBgcontroll' => array(
                        'label'    => 'サイドバーの背景色を変更する',
                        'section'    => 'SBBg_section',
                        'settings'   => 'SBBg_setting'
                    ),
                    'SBFCcontroll' => array(
                        'label'    => 'サイドバーの文字色を変更する',
                        'section'    => 'SBBg_section',
                        'settings'   => 'SBFC_setting'
                    ),
                    'SBHVFCcontroll' => array(
                        'label'    => 'サイドバーにマウスをかざした時の文字色を変更する',
                        'section'    => 'SBBg_section',
                        'settings'   => 'SBHVFC_setting'
                    ),
                    'SBBCcontroll' => array(
                        'label'    => 'サイドバーのボタンの色を変更する',
                        'section'    => 'SBBg_section',
                        'settings'   => 'SBBC_setting'
                    ),

                    //アニメーション
                    'SBLAnsection' => array(
                        'title'    => __( 'サイドバーのリンクのアニメーションを設定する', 'theme_slug3' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 7
                    ),
                    'SBLAnsetting' => 'SBLAn_setting',
                    'SBLAncontroll' => array(
                        'label'    => 'サイドバーのリンクのアニメーションを設定する',
                        'type'        => 'radio',
                        'section'    => 'SBLAn_section',
                        'settings'   => 'SBLAn_setting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$MultiFClickAnimation
                    ),

                    //フォントサイズの調整
                    'SBLFszsection' => array(
                        'title'    => __( 'フォントサイズの調整', 'theme_slug' ),
                        'panel'    => 'sidebar_design_panel'
                    ),
                    'SBLFszsetting' => 'SBLFsz_setting',
                    'SBLFszcontroll' => array(
                        'label'       => 'リンクのフォントサイズを選択する', 
                        'type'        => 'select',
                        'section'     => 'SBLFsz_section', 
                        'settings'    => 'SBLFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                )
            );
            $wp_customize->add_panel('sidebar_design_panel', $settings['sidebartemplate']['panel']);

            //デザイン
            $wp_customize->add_section('SBD_section', $settings['sidebartemplate']['SBDsection']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SBD_setting', $settings['sidebartemplate']['SBDcontroll']));

            $wp_customize->add_section('SBBD_section', $settings['sidebartemplate']['SBBDsection']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBBDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SBBD_setting', $settings['sidebartemplate']['SBBDcontroll']));

            ///色の調整
            $wp_customize->add_section('SBBg_section', $settings['sidebartemplate']['SBBgsection']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBBgsetting'], $settings['sidebartemplate']['SBBgdefault']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBFCsetting'], $settings['sidebartemplate']['SBFCdefault']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBHVFCsetting'], $settings['sidebartemplate']['SBHVFCdefault']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBBCsetting'], $settings['sidebartemplate']['SBBCdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SBBg_setting', $settings['sidebartemplate']['SBBgcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SBFC_setting', $settings['sidebartemplate']['SBFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SBHVFC_setting', $settings['sidebartemplate']['SBHVFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SBBC_setting', $settings['sidebartemplate']['SBBCcontroll']));

            //アニメーション
            $wp_customize->add_section('SBLAn_section', $settings['sidebartemplate']['SBLAnsection']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBLAnsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SBLAn_setting', $settings['sidebartemplate']['SBLAncontroll']));

            $wp_customize->add_section('SBLFsz_section', $settings['sidebartemplate']['SBLFszsection']);
            $wp_customize->add_setting($settings['sidebartemplate']['SBLFszsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SBLFsz_setting', $settings['sidebartemplate']['SBLFszcontroll']));
        }
        public static function Values(){
            return (object)[
                'SidebarTemplate' => !get_theme_mod('SBD_setting') ? 'pt3' : get_theme_mod('SBD_setting'),
                'SidebarButtonTemplate' => !get_theme_mod('SBBD_setting') ? 'pt1' : get_theme_mod('SBBD_setting'),
                'SidebarLinkAnimation' => !get_theme_mod('SBLAn_setting') ? 'none' : get_theme_mod('SBLAn_setting'),
                'SidebarColor' => !get_theme_mod('SBBg_setting') ? '#ededce' : get_theme_mod('SBBg_setting'),
                'SidebarFontColor' => !get_theme_mod('SBFC_setting') ? '#afafaf' : get_theme_mod('SBFC_setting'),
                'SidebarFontHoverColor' => !get_theme_mod('SBHVFC_setting') ? '#efefda' : get_theme_mod('SBHVFC_setting'),
                'SidebarButtonColor' => !get_theme_mod('SBBC_setting') ? '#06357c' : get_theme_mod('SBBC_setting'),
                'SidebarLinkFontsize' => !get_theme_mod('SBLFsz_setting') ? '16px' : get_theme_mod('SBLFsz_setting')
            ];
        }
    }
    new CustomizeSidebar();
?>