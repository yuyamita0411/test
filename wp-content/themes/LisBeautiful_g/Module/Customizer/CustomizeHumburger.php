<?php
    class CustomizeHumburger{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetHumburgerLayout' ) );
        }

        public function SetHumburgerLayout($wp_customize){
            $settings = array(
                'humburgertemplate' => array(
                    'panel' => array(
                        'title'    => 'ハンバーガーメニューの設定',
                        'priority' => 3
                    ),
                    //デザイン
                    'HbgDsection' => array(
                        'title'    => __( 'デザインを変更する', 'theme_slug' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 1
                    ),
                    'HbgDsetting' => 'HbgD_setting',
                    'HBDsetting' => 'HBD_setting',
                    'HbgDcontroll' => array(
                        'label'       => 'ハンバーガーメニューのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'HbgD_section', 
                        'settings'    => 'HbgD_setting', 
                        'default'   => 'pt1',
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
                    'HBDcontroll' => array(
                        'label'       => 'ハンバーガーメニューのボタンのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'HbgD_section', 
                        'settings'    => 'HBD_setting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( '三本線 →回転 ×' ),
                            'pt2'   => __( '三本線 → 一本線' ),
                            'pt3'   => __( '三本線下部に文字あり → 回転 ×' ),
                            'pt4'   => __( '三本線下部に文字あり → 一本線' ),
                            'pt5'   => __( '二本線 →回転 ×' ),
                            'pt6'   => __( '二本線 → 一本線' ),
                            'pt7'   => __( '二本線中央に文字あり → 回転 ×' ),
                            'pt8'   => __( '二本線中央に文字あり → 一本線' ),
                            'none'   => __( '非表示' )
                        )
                    ),

                    //色
                    'HBCsection' => array(
                        'title'    => __( '色の調整', 'theme_slug1' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 7
                    ),
                    'HBCsetting' => 'HBC_setting',
                    'HBLCsetting' => 'HBLC_setting',
                    'HBMBGCsetting' => 'HBMBGC_setting',
                    'HBFCsetting' => 'HBFC_setting',
                    'HBHVCsetting' => 'HBHVC_setting',
                    'HBCdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HBLCdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HBMBGCdefault' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HBFCdefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HBHVCdefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HBCcontroll' => array(
                        'label'    => 'ハンバーガーメニューのボタンの色を変更する',
                        'section'    => 'HBC_section',
                        'settings'   => 'HBC_setting'
                    ),
                    'HBLCcontroll' => array(
                        'label'    => 'ハンバーガーメニューの線の色を変更する',
                        'section'    => 'HBC_section',
                        'settings'   => 'HBLC_setting'
                    ),
                    'HBMBGCcontroll' => array(
                        'label'    => 'ハンバーガーメニューの背景色を変更する',
                        'section'    => 'HBC_section',
                        'settings'   => 'HBMBGC_setting'
                    ),
                    'HBFCcontroll' => array(
                        'label'    => 'ハンバーガーメニューの文字の色を変更する',
                        'section'    => 'HBC_section',
                        'settings'   => 'HBFC_setting'
                    ),
                    'HBHVCcontroll' => array(
                        'label'    => 'ハンバーガーメニューにマウスをかざした時のフォントの色',
                        'section'    => 'HBC_section',
                        'settings'   => 'HBHVC_setting'
                    ),

                    //アニメーション
                    'HAnsection' => array(
                        'title'    => __( 'アニメーションの設定', 'theme_slug' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 1
                    ),
                    'HAnsetting' => 'HAn_setting',
                    'HBFAnsetting' => 'HBFAn_setting',
                    'HAncontroll' => array(
                        'label'       => 'ハンバーガーメニューのアニメーションを選択する', 
                        'type'        => 'radio',
                        'section'     => 'HAn_section', 
                        'settings'    => 'HAn_setting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'フェードイン' ),
                            'pt2'   => __( '右からスライド' ),
                            'pt3'   => __( '上からスライド' ),
                            'pt4'   => __( '左からスライド' ),
                            //'pt5'   => __( '下からスライド' ),
                            'none'   => __( 'なし' )
                        )
                    ),
                    'HBFAncontroll' => array(
                        'label'    => 'ハンバーガーメニューのフォントのアニメーションを設定する',
                        'type'        => 'radio',
                        'section'    => 'HAn_section',
                        'settings'   => 'HBFAn_setting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$MultiFClickAnimation
                    ),

                    //フォントサイズの調整
                    'HBFszsection' => array(
                        'title'    => __( 'フォントサイズの調整', 'theme_slug' ),
                        'panel'    => 'humburger_design_panel'
                    ),
                    'HBFszsetting' => 'HBFsz_setting',
                    'HBFszcontroll' => array(
                        'label'       => 'リンクのフォントサイズを選択する', 
                        'type'        => 'select',
                        'section'     => 'HBFsz_section', 
                        'settings'    => 'HBFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                )
            );
            $wp_customize->add_panel('humburger_design_panel', $settings['humburgertemplate']['panel']);

            $wp_customize->add_section('HbgD_section', $settings['humburgertemplate']['HbgDsection']);
            $wp_customize->add_setting($settings['humburgertemplate']['HbgDsetting']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HbgD_setting', $settings['humburgertemplate']['HbgDcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HBD_setting', $settings['humburgertemplate']['HBDcontroll']));

            $wp_customize->add_section('HBC_section', $settings['humburgertemplate']['HBCsection']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBCsetting'], $settings['humburgertemplate']['HBCdefault']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBLCsetting'], $settings['humburgertemplate']['HBLCdefault']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBMBGCsetting'], $settings['humburgertemplate']['HBMBGCdefault']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBFCsetting'], $settings['humburgertemplate']['HBFCdefault']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBHVCsetting'], $settings['humburgertemplate']['HBHVCdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HBC_setting', $settings['humburgertemplate']['HBCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HBLC_setting', $settings['humburgertemplate']['HBLCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HBMBGC_setting', $settings['humburgertemplate']['HBMBGCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HBFC_setting', $settings['humburgertemplate']['HBFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HBHVC_setting', $settings['humburgertemplate']['HBHVCcontroll']));

            $wp_customize->add_section('HAn_section', $settings['humburgertemplate']['HAnsection']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBFAnsetting']);
            $wp_customize->add_setting($settings['humburgertemplate']['HAnsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HBFAn_setting', $settings['humburgertemplate']['HBFAncontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HAn_setting', $settings['humburgertemplate']['HAncontroll']));

            $wp_customize->add_section('HBFsz_section', $settings['humburgertemplate']['HBFszsection']);
            $wp_customize->add_setting($settings['humburgertemplate']['HBFszsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HBFsz_setting', $settings['humburgertemplate']['HBFszcontroll']));
        }
        public static function Values(){
            return (object)[
                'HumburgerTemplate' => !get_theme_mod('HbgD_setting') ? 'pt1' : get_theme_mod('HbgD_setting'),
                'HumburgerMenueAnimation' => !get_theme_mod('HAn_setting') ? 'pt1' : get_theme_mod('HAn_setting'),
                'HumburgerButtonTemplate' => !get_theme_mod('HBD_setting') ? 'pt1' : get_theme_mod('HBD_setting'),
                'SetHbuttonWrapperBg' => !get_theme_mod('HBC_setting') ? '#06357c' : get_theme_mod('HBC_setting'),
                'SetHbuttonInnerLineColor' => !get_theme_mod('HBLC_setting') ? '#ffffff' : get_theme_mod('HBLC_setting'),
                'SetHbMenuWrapperBg' => !get_theme_mod('HBMBGC_setting') ? '#ededce' : get_theme_mod('HBMBGC_setting'),
                'SetHbMenuWrapperFontColor' => !get_theme_mod('HBFC_setting') ? '#afafaf' : get_theme_mod('HBFC_setting'),
                'SetHbMenuWrapperFontColorHover' => !get_theme_mod('HBHVC_setting') ? '#afafaf' : get_theme_mod('HBHVC_setting'),
                'HumburgerAnimation' => !get_theme_mod('HBFAn_setting') ? 'none' : get_theme_mod('HBFAn_setting'),
                'HumburgerFontSize' => !get_theme_mod('HBFsz_setting') ? '16px' : get_theme_mod('HBFsz_setting')
            ];
        }
    }
    new CustomizeHumburger();
?>