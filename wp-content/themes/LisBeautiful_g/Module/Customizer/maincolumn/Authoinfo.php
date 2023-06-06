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
                        'default'   => 'inline-block',
                        'choices'     =>  array(
                            'inline-block'   => __( '表示' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'AInfoDSetting' => 'AInfoDSetting',
                    'AInfoDControll' => array(
                        'label'       => '「この記事を書いた人」のデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoDSetting',
                        'default'   => 'pt2',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
//                            'pt3'   => __( 'パターン3' )
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
                        'default'   => '.1',
                        'choices'     =>  settings::Num0To1()
                    ),
                    'AInfoOLClSetting' => 'AInfoOLClSetting',
                    'AInfoOLClDefault' => array(
                        'default'     => '#f2f2f2',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoOLClControll' => array(
                        'label'    => '外枠の色調整',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoOLClSetting'
                    ),
                    'CatATCSetting' => 'CatATCSetting',
                    'CatATCDefault' => array(
                        'default'     => '#f2f2f2',
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
                    /*'AInfoPsSetting' => 'AInfoPsSetting',
                    'AInfoPsControll' => array(
                        'label'       => 'プロフィール部分の余白調整', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoPsSetting', 
                        'default'   => '0.1',
                        'choices'     =>  settings::Num0To1()
                    ),*/
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
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoTCControll' => array(
                        'label'    => 'タイトル文字色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoTCSetting'
                    ),
                    'AInfoTBgCSetting' => 'AInfoTBgCSetting',
                    'AInfoTBgCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoTBgCControll' => array(
                        'label'    => 'タイトル背景色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoTBgCSetting'
                    ),

                    'AInfoTAlCSetting' => 'AInfoTAlCSetting',
                    'AInfoTAlCDefault' => array(
                        'default'     => '#dddddd',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoTAlCControll' => array(
                        'label'    => 'タイトル枠線色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoTAlCSetting'
                    ),

                    'AInfoTFsSetting' => 'AInfoTFsSetting',
                    'AInfoTFsControll' => array(
                        'label'       => 'タイトル文字大きさ', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoTFsSetting',
                        'default'   => '20px',
                        'choices'     =>  settings::Fsize()
                    ),
                    'AInfoTBRSetting' => 'AInfoTBRSetting',
                    'AInfoTBRControll' => array(
                        'label'       => 'タイトル枠線丸み', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoTBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
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
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoFBgCControll' => array(
                        'label'    => '名前文字背景',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoFBgCSetting'
                    ),
                    'AInfoFAlCSetting' => 'AInfoFAlCSetting',
                    'AInfoFAlCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoFAlCControll' => array(
                        'label'    => '名前枠線色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoFAlCSetting'
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
                    'AInfoNBRSetting' => 'AInfoNBRSetting',
                    'AInfoNBRControll' => array(
                        'label'       => '名前枠線丸み', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoNBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
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
                    'AInfoBgImOCSetting' => 'AInfoBgImOCSetting',
                    'AInfoBgImOCdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoBgImOCcontroll' => array(
                        'label'    => '画像枠線色',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoBgImOCSetting'
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
                        'default'   => '0.1',
                        'choices'     =>  settings::Num0To1()
                    ),
                    'AInfoImOThSetting' => 'AInfoImOThSetting',
                    'AInfoImOThdefault' => array(
                        'default'     => '#f2f2f2',
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
                        'default'   => 'solid',
                        'choices'     =>  array(
                            'solid'   => __( 'デフォルト' ),
                            'dotted'   => __( '点線' ),
                            'double'   => __( '二重線' ),
                            'none'   => __( 'なし' )
                        )
                    ),

                    'AInfoSLThSetting' => 'AInfoSLThSetting',
                    'AInfoSLThControll' => array(
                        'label'       => '仕切り枠の太さ', 
                        'type'        => 'select',
                        'section'     => 'AInfoSection', 
                        'settings'    => 'AInfoSLThSetting', 
                        'default'   => '0.1',
                        'choices'     =>  settings::Num0To1()
                    ),

                    'AInfoPaFCSetting' => 'AInfoPaFCSetting',
                    'AInfoPaFCdefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoPaFCcontroll' => array(
                        'label'    => 'プロフィールエリアの文字色調整',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoPaFCSetting'
                    ),
                    'AInfoPaBgCSetting' => 'AInfoPaBgCSetting',
                    'AInfoPaBgCdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'AInfoPaBgCcontroll' => array(
                        'label'    => 'プロフィールエリアの背景色調整',
                        'section'    => 'AInfoSection',
                        'settings'   => 'AInfoPaBgCSetting'
                    ),
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
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgSetting'], $settings['authorinfo']['AInfoTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoBgSetting', $settings['authorinfo']['AInfoBgControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoTCSetting'], $settings['authorinfo']['AInfoTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoTCSetting', $settings['authorinfo']['AInfoTCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoTBgCSetting'], $settings['authorinfo']['AInfoTBgCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoTBgCSetting', $settings['authorinfo']['AInfoTBgCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoTAlCSetting'], $settings['authorinfo']['AInfoTBgCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoTAlCSetting', $settings['authorinfo']['AInfoTAlCControll']));
            $wp_customize->add_setting($settings['authorinfo']['AInfoTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoTFsSetting', $settings['authorinfo']['AInfoTFsControll']));
            $wp_customize->add_setting($settings['authorinfo']['AInfoTBRSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoTBRSetting', $settings['authorinfo']['AInfoTBRControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoNCSetting'], $settings['authorinfo']['AInfoNCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoNCSetting', $settings['authorinfo']['AInfoNCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoFBgCSetting'], $settings['authorinfo']['AInfoFBgCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoFBgCSetting', $settings['authorinfo']['AInfoFBgCControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoFAlCSetting'], $settings['authorinfo']['AInfoFAlCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoFAlCSetting', $settings['authorinfo']['AInfoFAlCControll']));
            $wp_customize->add_setting($settings['authorinfo']['AInfoNFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoNFsSetting', $settings['authorinfo']['AInfoNFsControll']));
            $wp_customize->add_setting($settings['authorinfo']['AInfoNBRSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoNBRSetting', $settings['authorinfo']['AInfoNBRControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoDisSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoDisSetting', $settings['authorinfo']['AInfoDisControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImOCSetting'], $settings['authorinfo']['AInfoBgImOCdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoBgImOCSetting', $settings['authorinfo']['AInfoBgImOCcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImOCatSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoBgImOCatSetting', $settings['authorinfo']['AInfoBgImOCatControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoBgImOThSetting'], $settings['authorinfo']['AInfoBgImOThDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoBgImOThSetting', $settings['authorinfo']['AInfoBgImOThControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoImOThSetting'], $settings['authorinfo']['AInfoImOThdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoImOThSetting', $settings['authorinfo']['AInfoImOThcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoPaFCSetting'], $settings['authorinfo']['AInfoPaFCdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoPaFCSetting', $settings['authorinfo']['AInfoPaFCcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoPaBgCSetting'], $settings['authorinfo']['AInfoPaBgCdefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'AInfoPaBgCSetting', $settings['authorinfo']['AInfoPaBgCcontroll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoSLCatSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoSLCatSetting', $settings['authorinfo']['AInfoSLCatControll']));
            $wp_customize->add_Setting($settings['authorinfo']['AInfoSLThSetting'], $settings['authorinfo']['AInfoSLThDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'AInfoSLThSetting', $settings['authorinfo']['AInfoSLThControll']));
        }

        public static function Values(){
            return (object)[
                'AuthoInfoDisplay' => !get_theme_mod('AInfoDsSetting') ? 'inline-block' : get_theme_mod('AInfoDsSetting'),//「この記事を書いた人」の表示、非表示 ok
                'AuthoInfoDesign' => !get_theme_mod('AInfoDSetting') ? 'pt2' : get_theme_mod('AInfoDSetting'),//「この記事を書いた人」のデザインを選択する
                'AuthoInfoOutLineCat' => !get_theme_mod('AInfoOLCatSetting') ? 'solid' : get_theme_mod('AInfoOLCatSetting'),//外枠の種類 ok
                'AuthoInfoOutLineThickness' => !get_theme_mod('AInfoOLThSetting') ? '.1' : get_theme_mod('AInfoOLThSetting'),//外枠の太さ調整 ok
                'AuthoInfoOutLineColor' => !get_theme_mod('AInfoOLClSetting') ? '#f2f2f2' : get_theme_mod('AInfoOLClSetting'),//外枠の色調整 ok
                //'AuthoInfoOutLinePadding' => !get_theme_mod('AInfoPsSetting') ? '0.1' : get_theme_mod('AInfoPsSetting'),//プロフィール部分の余白調整 ok
                //'AuthoInfoPaddingColor' => !get_theme_mod('AInfoBgSetting') ? '#f4f4f4' : get_theme_mod('AInfoBgSetting'),//余白色設定 ok
                'AuthoInfoTitleColor' => !get_theme_mod('AInfoTCSetting') ? '#212529' : get_theme_mod('AInfoTCSetting'),//タイトル文字色 ok
                'AuthoInfoTitleBackgroundColor' => !get_theme_mod('AInfoTBgCSetting') ? '#ffffff' : get_theme_mod('AInfoTBgCSetting'),//タイトル背景色 ok
                'AuthoInfoTitleOutlineColor' => !get_theme_mod('AInfoTAlCSetting') ? '#ffffff' : get_theme_mod('AInfoTAlCSetting'),//タイトル枠線色 ok
                'AuthoInfoTitleFontsize' => !get_theme_mod('AInfoTFsSetting') ? '20px' : get_theme_mod('AInfoTFsSetting'),//タイトル文字大きさ
                'AuthoInfoTitleBorderRadius' => !get_theme_mod('AInfoTBRSetting') ? '0px' : get_theme_mod('AInfoTBRSetting'),//タイトル枠線丸み
                'AuthoInfoNameColor' => !get_theme_mod('AInfoNCSetting') ? '#212529' : get_theme_mod('AInfoNCSetting'),//名前文字色 ok
                'AuthoInfoNameBackgroundColor' => !get_theme_mod('AInfoFBgCSetting') ? '#ffffff' : get_theme_mod('AInfoFBgCSetting'),//名前文字背景 ok
                'AuthoInfoNameOutlineColor' => !get_theme_mod('AInfoFAlCSetting') ? '#ffffff' : get_theme_mod('AInfoFAlCSetting'),//名前枠線色 ok
                'AuthoInfoNameFontsize' => !get_theme_mod('AInfoNFsSetting') ? '18px' : get_theme_mod('AInfoNFsSetting'),//名前文字大きさ
                'AuthoInfoNameBorderRadius' => !get_theme_mod('AInfoNBRSetting') ? '0px' : get_theme_mod('AInfoNBRSetting'),//名前文字大きさ
                'AuthoInfoImageOutlineDisplay' => !get_theme_mod('AInfoDisSetting') ? 'true' : get_theme_mod('AInfoDisSetting'),//画像枠線の表示、非表示
                'AuthoInfoImageOutlineColor' => !get_theme_mod('AInfoBgImOCSetting') ? '#ffffff' : get_theme_mod('AInfoBgImOCSetting'),//画像枠線色
                'AuthoInfoImageOutlineCategory' => !get_theme_mod('AInfoBgImOCatSetting') ? 'normal' : get_theme_mod('AInfoBgImOCatSetting'),//画像枠線種類
                'AuthoInfoImageOutlineThickness' => !get_theme_mod('AInfoBgImOThSetting') ? '.1' : get_theme_mod('AInfoBgImOThSetting'),//画像枠線太さ
                'AuthoInfoSegmentlineColor' => !get_theme_mod('AInfoImOThSetting') ? '#f2f2f2' : get_theme_mod('AInfoImOThSetting'),//仕切り枠の色調整
                'AuthoInfoProfAreaFontColor' => !get_theme_mod('AInfoPaFCSetting') ? '#212529' : get_theme_mod('AInfoPaFCSetting'),//プロフィールエリアの文字色調整
                'AuthoInfoProfAreaBackgroundColor' => !get_theme_mod('AInfoPaBgCSetting') ? '#ffffff' : get_theme_mod('AInfoPaBgCSetting'),//プロフィールエリアの背景色調整
                'AuthoInfoSegmentlineCategory' => !get_theme_mod('AInfoSLCatSetting') ? 'solid' : get_theme_mod('AInfoSLCatSetting'),//仕切り枠の種類
                'AuthoInfoSegmentlineThickness' => !get_theme_mod('AInfoSLThSetting') ? '.1' : get_theme_mod('AInfoSLThSetting')//仕切り枠の太さ
            ];
        }
    }
    new CustomizeAuthorInfo();
?>