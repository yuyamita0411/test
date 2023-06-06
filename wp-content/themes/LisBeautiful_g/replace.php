<?php
    class CustomizeAuthorInfo{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }
        public function SetMenuStatus( $wp_customize ) {

            $settings = array(
                'authorinfo' => array(

                    'AInfoDsSection' => array(
                        'title'    => __( '「この記事を書いた人」のデザインを選択する', 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'AInfoDsSetting' => 'AInfoDsSetting',
                    'AInfoDsControll' => array(
                        'label'       => '「この記事を書いた人」の表示、非表示', 
                        'type'        => 'radio',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoDsSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( '表示' ),
                            'false'   => __( '非表示' )
                        )
                    ),
                    'AInfoDSetting' => 'AInfoDSetting',
                    'AInfoDControll' => array(
                        'label'       => '「この記事を書いた人」のデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' )
                        )
                    ),
                    'AInfoOLCatSetting' => 'AInfoOLCatSetting',
                    'AInfoOLCatControll' => array(
                        'label'       => '外枠の種類', 
                        'type'        => 'radio',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoOLCatSetting',
                        'default'   => 'solid',
                        'choices'     =>  array(
                            'solid'   => __( 'デフォルト' ),
                            'dotted'   => __( '点線' ),
                            'double'   => __( '二重線' ),
                            'none'   => __( 'なし' )
                        )
                    ),
                    'AInfoOLThSetting' => 'AInfoOLThSetting',
                    'AInfoOLThControll' => array(
                        'label'       => '外枠の太さ調整', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoOLThSetting', 
                        'default'   => '0px',
                        'choices'     =>  settings::Num0To1()
                    ),
                    'AInfoOLClSetting' => 'AInfoOLClSetting',
                    'AInfoOLClDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoOLClControll' => array(
                        'label'    => '外枠の色調整',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoOLClSetting'
                    ),
                    'CatATCSetting' => 'CatATCSetting',
                    'CatATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatATCControll' => array(
                        'label'    => '背景色設定',
                        'section'    => 'AInfoSection',
                        'settings'   => 'CatATCSetting'
                    ),
                    'AInfoBgImgSetting' => 'AInfoBgImg_Setting',
                    'AInfoBgImgStSetting' => 'AInfoBgImgSt_Setting',
                    'AInfoBgImgcontroll' => array(
                        'label' => '背景画像設定',
                        'section' => 'AInfoSection',
                        'settings' => 'AInfoBgImg_Setting',
                    ),
                    'AInfoPsSetting' => 'AInfoPsSetting',
                    'AInfoPsControll' => array(
                        'label'       => '余白調整', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoPsSetting', 
                        'default'   => '0.5',
                        'choices'     =>  settings::Num0To1()
                    ),
                    'AInfoBgSetting' => 'AInfoBgSetting',
                    'AInfoBgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoBgControll' => array(
                        'label'    => '余白色設定',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoBgSetting'
                    ),
                    'AInfoTCSetting' => 'AInfoTCSetting',
                    'AInfoTCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoTCControll' => array(
                        'label'    => 'タイトル文字色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoTCSetting'
                    ),
                    'AInfoTBgCSetting' => 'AInfoTBgCSetting',
                    'AInfoTBgCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoTBgCControll' => array(
                        'label'    => 'タイトル背景色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoTBgCSetting'
                    ),
                    'AInfoTFsSetting' => 'AInfoTFsSetting',
                    'AInfoTFsControll' => array(
                        'label'       => 'タイトル文字大きさ', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoTFsSetting',
                        'default'   => '18px',
                        'choices'     =>  settings::Fsize()
                    ),
                    'AInfoNCSetting' => 'AInfoNCSetting',
                    'AInfoNCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoNCControll' => array(
                        'label'    => '名前文字色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoNCSetting'
                    ),
                    'AInfoFBgCSetting' => 'AInfoFBgCSetting',
                    'AInfoFBgCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoFBgCControll' => array(
                        'label'    => '名前文字背景',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoFBgCSetting'
                    ),
                    'AInfoNFsSetting' => 'AInfoNFsSetting',
                    'AInfoNFsControll' => array(
                        'label'       => '名前文字大きさ', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoNFsSetting', 
                        'default'   => '18px',
                        'choices'     =>  settings::Fsize()
                    ),
                    'AInfoDisSetting' => 'AInfoDisSetting',
                    'AInfoDisControll' => array(
                        'label'       => '画像枠線の表示、非表示', 
                        'type'        => 'radio',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoDisSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => '表示',
                            'false'   => '非表示'
                        )
                    ),
                    'AInfoBgImOCSetting' => 'AInfoBgImOC_Setting',
                    'AInfoBgImOCdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoBgImOCcontroll' => array(
                        'label'    => '画像枠線色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoBgImOC_Setting'
                    ),
                    'AInfoBgImOCatSetting' => 'AInfoBgImOCatSetting',
                    'AInfoBgImOCatControll' => array(
                        'label'       => '画像枠線種類', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoBgImOCatSetting', 
                        'default'   => 'solid',
                        'choices'     =>  array(
                            'solid'   => __( 'デフォルト' ),
                            'dotted'   => __( '点線' ),
                            'double'   => __( '二重線' ),
                            'none'   => __( 'なし' )
                        )
                    ),
                    'AInfoBgImOThSetting' => 'AInfoBgImOThSetting',
                    'AInfoBgImOThControll' => array(
                        'label'       => '画像枠線太さ', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoBgImOThSetting', 
                        'default'   => '0.5',
                        'choices'     =>  settings::Num0To1()
                    ),
                    'AInfoImOThSetting' => 'AInfoImOThSetting',
                    'AInfoImOThdefault' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoImOThcontroll' => array(
                        'label'    => '仕切り枠の色調整',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoImOThSetting'
                    ),
                    'AInfoSLCatSetting' => 'AInfoSLCatSetting',
                    'AInfoSLCatControll' => array(
                        'label'       => '仕切り枠の種類', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoSLCatSetting',
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'solid'   => __( 'デフォルト' ),
                            'dotted'   => __( '点線' ),
                            'double'   => __( '二重線' ),
                            'none'   => __( 'なし' )
                        )
                    )
                )
            );

            $wp_customize->add_section('AInfoSection', $settings['authorinfo']['AInfoDsSection']);
            $wp_customize->add_Setting($settings['authorinfo']['AInfoDsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoDsSetting', $settings['authorinfo']['AInfoDsControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoDSetting', $settings['authorinfo']['AInfoDControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoOLCatSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoOLCatSetting', $settings['authorinfo']['AInfoOLCatControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoOLThSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoOLThSetting', $settings['authorinfo']['AInfoOLThControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoOLClSetting'], $settings['authorinfo']['AInfoOLClDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoOLClSetting', $settings['authorinfo']['AInfoOLClControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoPsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoPsSetting', $settings['authorinfo']['AInfoPsControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoBgSetting', $settings['authorinfo']['AInfoBgControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoTCSetting'], $settings['authorinfo']['AInfoTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoTCSetting', $settings['authorinfo']['AInfoTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoTBgCSetting', $settings['authorinfo']['AInfoTBgCControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoTFsSetting', $settings['authorinfo']['AInfoTFsControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoNCSetting', $settings['authorinfo']['AInfoNCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoFBgCSetting'], $settings['authorinfo']['AInfoFBgCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoFBgCSetting', $settings['authorinfo']['AInfoFBgCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoDisSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoDisSetting', $settings['authorinfo']['AInfoDisControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoBgImOC_Setting', $settings['authorinfo']['AInfoBgImOCcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImOCatSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoBgImOCatSetting', $settings['authorinfo']['AInfoBgImOCatControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImOThSetting'], $settings['authorinfo']['AInfoBgImOThDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoBgImOThSetting', $settings['authorinfo']['AInfoBgImOThControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoImOThSetting'], $settings['authorinfo']['AInfoImOThdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoImOThSetting', $settings['authorinfo']['AInfoImOThcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoSLCatSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoSLCatSetting', $settings['authorinfo']['AInfoSLCatControll']));


            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoNFsSetting', $settings['authorinfo']['AInfoNFsControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImgSetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'AInfoBgImg_Setting', $settings['authorinfo']['AInfoBgImgcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['CatATCSetting'], $settings['authorinfo']['CatATCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CatATCSetting', $settings['authorinfo']['CatATCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImOCSetting'], $settings['authorinfo']['AInfoBgImOCdefault']);

        }

        public static function Values(){
            return (object)[
                'AuthoInfoDisplay' => !get_theme_mod('AInfoDsSetting') ? 'true' : get_theme_mod('AInfoDsSetting'),//「この記事を書いた人」の表示、非表示
                'AuthoInfoDesign' => !get_theme_mod('AInfoDSetting') ? 'pt1' : get_theme_mod('AInfoDSetting'),//「この記事を書いた人」のデザインを選択する
                'AuthoInfoOutLineCat' => !get_theme_mod('AInfoOLCatSetting') ? 'pt1' : get_theme_mod('AInfoOLCatSetting'),//外枠の種類
                'AuthoInfoOutLineThickness' => !get_theme_mod('AInfoOLThSetting') ? '0px' : get_theme_mod('AInfoOLThSetting'),//外枠の太さ調整
                'AuthoInfoOutLineColor' => !get_theme_mod('AInfoOLClSetting') ? '#ffffff' : get_theme_mod('AInfoOLClSetting'),//外枠の色調整
                'AuthoInfoOutLinePadding' => !get_theme_mod('AInfoPsSetting') ? '0.5' : get_theme_mod('AInfoPsSetting'),//余白調整
                'AuthoInfo' => !get_theme_mod('AInfoBgSetting') ? '#f4f4f4' : get_theme_mod('AInfoBgSetting'),//余白色設定
                'AuthoInfo' => !get_theme_mod('AInfoTCSetting') ? '#ffffff' : get_theme_mod('AInfoTCSetting'),//タイトル文字色
                'AuthoInfo' => !get_theme_mod('AInfoTBgCSetting') ? '#212529' : get_theme_mod('AInfoTBgCSetting'),//タイトル背景色
                'AuthoInfo' => !get_theme_mod('AInfoTFsSetting') ? '18px' : get_theme_mod('AInfoTFsSetting'),//タイトル文字大きさ
                'AuthoInfo' => !get_theme_mod('AInfoNCSetting') ? '#212529' : get_theme_mod('AInfoNCSetting'),//名前文字色
                'AuthoInfo' => !get_theme_mod('AInfoFBgCSetting') ? '#212529' : get_theme_mod('AInfoFBgCSetting'),//名前文字色
                'AuthoInfo' => !get_theme_mod('AInfoNFsSetting') ? '18px' : get_theme_mod('AInfoNFsSetting'),//名前文字大きさ
                'AuthoInfo' => !get_theme_mod('AInfoDisSetting') ? 'true' : get_theme_mod('AInfoDisSetting'),//画像枠線の表示、非表示
                'AuthoInfo' => !get_theme_mod('AInfoBgImOC_Setting') ? '#06357c' : get_theme_mod('AInfoBgImOC_Setting'),//画像枠線色
                'AuthoInfo' => !get_theme_mod('AInfoBgImOCatSetting') ? 'normal' : get_theme_mod('AInfoBgImOCatSetting'),//画像枠線種類
                'AuthoInfo' => !get_theme_mod('AInfoBgImOThSetting') ? '0.5' : get_theme_mod('AInfoBgImOThSetting'),//画像枠線太さ
                'AuthoInfo' => !get_theme_mod('AInfoImOThSetting') ? '#ededce' : get_theme_mod('AInfoImOThSetting'),//仕切り枠の色調整
                'AuthoInfo' => !get_theme_mod('AInfoSLCatSetting') ? 'normal' : get_theme_mod('AInfoSLCatSetting')//仕切り枠の種類
            ];
        }
    }
    new CustomizeAuthorInfo();
?>