<?php
    class CustomizeMainColumnCategoryLink{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'mainbackground' => array(
                    //カテゴリ一覧 デザイン
                    'CatLDSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatLDSetting' => 'CD_CatLDSetting',
                    'CatLDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_CatLDSection', 
                        'settings'    => 'CD_CatLDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt4"] ),
                            'pt5'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt5"] ),
                            'pt6'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt6"] ),
                            'pt7'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt7"] ),
                            'pt8'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt8"] ),
                            'pt9'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLDControll"]["choices"]["pt9"] )
                        )
                    ),

                    //カテゴリ一覧 見出しタイトル(上)(下)の修正
                    'CatLTTSection' => array(
                        'title'    => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTSection"]["title"],
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatLTTSetting' => 'CD_CatLTTSetting',
                    'CatLTTDSetting' => 'CD_CatLTTDSetting',
                    'CatLMgSetting' => 'CD_CatLMgSetting',
                    'CatLTPdSetting' => 'CD_CatLTPdSetting',
                    'CatLCtPdSetting' => 'CD_CatLCtPdSetting',
                    'CatLTTFsSetting' => 'CD_CatLTTFsSetting',
                    'CatLTTAnSetting' => 'CD_CatLTTAnSetting',
                    'CatLBTSetting' => 'CD_CatLBTSetting',
                    'CatLBTDSetting' => 'CD_CatLBTDSetting',
                    'CatLBTFsSetting' => 'CD_CatLBTFsSetting',
                    'CatLBTAnSetting' => 'CD_CatLBTAnSetting',
                    'CatLTTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTControll"]["label"],
                        'section'  => 'CD_CatLTTSection',
                        'settings' => 'CD_CatLTTSetting'
                    ),
                    'CatLTTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLTTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTDControll"]["choices"]["left"] )
                        )
                    ),
                    'CatLTPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLTPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumntitlepadding
                    ),
                    'CatLCtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLCtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumncontentpadding
                    ),
                    'CatLMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$maincolumtitlecontentnmargin
                    ),
                    'CatLTTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLTTFsSetting',
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'CatLTTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLTTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'CatLBTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBTControll"]["label"],
                        'section'  => 'CD_CatLTTSection',
                        'settings' => 'CD_CatLBTSetting'
                    ),
                    'CatLBTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLBTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'CatLBTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLBTFsSetting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'CatLBTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTSection', 
                        'settings'    => 'CD_CatLBTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //カテゴリ一覧 背景画像の設定
                    'CatLBgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatLBgImgsetting' => 'CatLBgImg_setting',
                    'CatLBgImgStsetting' => 'CatLBgImgSt_setting',
                    'CatLBgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBgImgStsetting"]["label"],
                        'section' => 'CatLBgImg_section',
                        'settings' => 'CatLBgImg_setting',
                    ),
                    'CatLBgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CatLBgImg_section', 
                        'settings'    => 'CatLBgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),

                    //カテゴリ一覧 色の調整
                    'CatLTBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatLTBgSetting' => 'CD_CatLTBgSetting',
                    'CatLTCSetting' => 'CD_CatLTCSetting',
                    'CatLBgSetting' => 'CD_CatLBgSetting',
                    'CatLLSetting' => 'CD_CatLLSetting',
                    'CatLLBgSetting' => 'CD_CatLLBgSetting',
                    'CatLTBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLBgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLLDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLLBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLTBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTBgControll"]["label"],
                        'section'    => 'CD_CatLTBgSection',
                        'settings'   => 'CD_CatLTBgSetting'
                    ),
                    'CatLTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLTCControll"]["label"],
                        'section'    => 'CD_CatLTBgSection',
                        'settings'   => 'CD_CatLTCSetting'
                    ),
                    'CatLBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLBgControll"]["label"],
                        'section'    => 'CD_CatLTBgSection',
                        'settings'   => 'CD_CatLBgSetting'
                    ),

                    //カテゴリ一覧 コンテンツのアニメーション
                    'CatLAnSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLAnSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatLAnSetting' => 'CD_CatLAnSetting',
                    'CatLAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryLink"]["CatLAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatLAnSection', 
                        'settings'    => 'CD_CatLAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    )
                )
            );

            //カテゴリ一覧 デザイン
            $wp_customize->add_section('CD_CatLDSection', $settings['mainbackground']['CatLDSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLDSetting', $settings['mainbackground']['CatLDControll']));

            //カテゴリ一覧 見出しタイトル(上)(下)の修正
            $wp_customize->add_section('CD_CatLTTSection', $settings['mainbackground']['CatLTTSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTSetting', $settings['mainbackground']['CatLTTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTDSetting', $settings['mainbackground']['CatLTTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTFsSetting', $settings['mainbackground']['CatLTTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTAnSetting', $settings['mainbackground']['CatLTTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTSetting', $settings['mainbackground']['CatLBTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTDSetting', $settings['mainbackground']['CatLBTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTFsSetting', $settings['mainbackground']['CatLBTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTAnSetting', $settings['mainbackground']['CatLBTAnControll']));

            //カテゴリ一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_CatLMgSection', $settings['mainbackground']['CatLMgSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLMgSetting', $settings['mainbackground']['CatLMgControll']));

            //カテゴリ一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_CatLTPdSection', $settings['mainbackground']['CatLTPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTPdSetting', $settings['mainbackground']['CatLTPdControll']));

            //カテゴリ一覧　コンテンツの余白
            $wp_customize->add_section('CD_CatLCtPdSection', $settings['mainbackground']['CatLCtPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLCtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLCtPdSetting', $settings['mainbackground']['CatLCtPdControll']));

            //カテゴリ一覧　背景画像の設定
            $wp_customize->add_section('CatLBgImg_section', $settings['mainbackground']['CatLBgImgsection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBgImgsetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'CatLBgImg_setting', $settings['mainbackground']['CatLBgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CatLBgImgSt_setting', $settings['mainbackground']['CatLBgImgStcontroll']));

            //カテゴリ一覧 色の調整
            $wp_customize->add_section('CD_CatLTBgSection', $settings['mainbackground']['CatLTBgSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTBgSetting'], $settings['mainbackground']['CatLTBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatLTCSetting'], $settings['mainbackground']['CatLTCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatLBgSetting'], $settings['mainbackground']['CatLBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatLLSetting'], $settings['mainbackground']['CatLLDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatLLBgSetting'], $settings['mainbackground']['CatLLBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLTBgSetting', $settings['mainbackground']['CatLTBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLTCSetting', $settings['mainbackground']['CatLTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLBgSetting', $settings['mainbackground']['CatLBgControll']));

            //カテゴリ一覧 コンテンツのアニメーション
            $wp_customize->add_section('CD_CatLAnSection', $settings['mainbackground']['CatLAnSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatLAnSetting'], $settings['mainbackground']['CatLAnDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLAnSetting', $settings['mainbackground']['CatLAnControll']));
        }

        public static function Values(){
            return (object)[
                'CatLinkTemplate' => !get_theme_mod('CD_CatLDSetting') ? 'pt1' : get_theme_mod('CD_CatLDSetting'),
                'CatLinkTitle' => !get_theme_mod('CD_CatLTTSetting') ? 'カテゴリ一覧' : get_theme_mod('CD_CatLTTSetting'),
                'CatLinkTitleDir' => !get_theme_mod('CD_CatLTTDSetting') ? 'center' : get_theme_mod('CD_CatLTTDSetting'),
                'CatLinkTitleFontSize' => !get_theme_mod('CD_CatLTTFsSetting') ? '18px' : get_theme_mod('CD_CatLTTFsSetting'),
                'CatLinkTitleAnimation' => !get_theme_mod('CD_CatLTTAnSetting') ? 'none' : get_theme_mod('CD_CatLTTAnSetting'),
                'CatLinkBottomTitle' => !get_theme_mod('CD_CatLBTSetting') ? 'Categories' : get_theme_mod('CD_CatLBTSetting'),
                'CatLinkBottomTitleDir' => !get_theme_mod('CD_CatLBTDSetting') ? 'center' : get_theme_mod('CD_CatLBTDSetting'),
                'CatLinkBottomTitleFontSize' => !get_theme_mod('CD_CatLBTFsSetting') ? '16px' : get_theme_mod('CD_CatLBTFsSetting'),
                'CatLinkBottomTitleAnimation' => !get_theme_mod('CD_CatLBTAnSetting') ? 'none' : get_theme_mod('CD_CatLBTAnSetting'),
                'CatLinkTitleBackground' => !get_theme_mod('CD_CatLTBgSetting') ? '#ffffff' : get_theme_mod('CD_CatLTBgSetting'),
                'CatLinkFontColor' => !get_theme_mod('CD_CatLTCSetting') ? '#212529' : get_theme_mod('CD_CatLTCSetting'),
                'CatLinkBackground' => !get_theme_mod('CD_CatLBgSetting') ? '#f4f4f4' : get_theme_mod('CD_CatLBgSetting'),
                'CatLinkAnimation' => !get_theme_mod('CD_CatLAnSetting') ? 'none' : get_theme_mod('CD_CatLAnSetting'),
                'EachCatLinkColor' => !get_theme_mod('CD_CatLLSetting') ? '#ffffff' : get_theme_mod('CD_CatLLSetting'),
                'EachCatLinkBackground' => !get_theme_mod('CD_CatLLBgSetting') ? '#212529' : get_theme_mod('CD_CatLLBgSetting'),

                //カテゴリ一覧 タイトルブロックと記事一覧の余白の間隔
                'CatLinkTitleBottomMargin' => !get_theme_mod('CD_CatLMgSetting') ? '.2rem' : get_theme_mod('CD_CatLMgSetting'),

                //カテゴリ一覧 タイトルブロックの余白
                'CatLinkTitlePadding' => !get_theme_mod('CD_CatLTPdSetting') ? '.5rem' : get_theme_mod('CD_CatLTPdSetting'),

                //カテゴリ一覧 コンテンツの余白
                'CatLinkContentPadding' => !get_theme_mod('CD_CatLCtPdSetting') ? '.5rem' : get_theme_mod('CD_CatLCtPdSetting'),

                //カテゴリ一覧　背景画像の設定
                'SetCatLBgImg' => !get_theme_mod('CatLBgImg_setting') ? NULL : get_theme_mod('CatLBgImg_setting'),
                'SetCatLBgImgStatus' => !get_theme_mod('CatLBgImgSt_setting') ? '' : get_theme_mod('CatLBgImgSt_setting')
            ];
        }
    }
    new CustomizeMainColumnCategoryLink();
?>