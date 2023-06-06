<?php
    class CustomizeSideColumnCategoryLink{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'sidecolumntemplate' => array(
                    //カテゴリ一覧 デザイン
                    'SCCatLDSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLDSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatLDSetting' => 'CD_SCCatLDSetting',
                    'SCCatLDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCCatLDSection', 
                        'settings'    => 'CD_SCCatLDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLDControll"]["choices"]["pt3"] )
                        )
                    ),
                    //カテゴリ一覧全体の余白
                    'SCCatLPdSection' => array(
                        'title'    => __( 'カテゴリ一覧全体の余白を設定する', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatLPdSetting' => 'CD_SCCatLPdSetting',
                    'SCCatLPdControll' => array(
                        'label'       => 'カテゴリ一覧全体の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLPdSection', 
                        'settings'    => 'CD_SCCatLPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumnpadding
                    ),
                    //カテゴリ一覧 見出しタイトル(上)(下)の修正
                    'SCCatLTTSection' => array(
                        'title'    => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTSection"]["title"],
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatLTTSetting' => 'CD_SCCatLTTSetting',
                    'SCCatLTPdSetting' => 'CD_SCCatLTPdSetting',
                    'SCCatLCtPdSetting' => 'CD_SCCatLCtPdSetting',
                    'SCCatLMgSetting' => 'CD_SCCatLMgSetting',
                    'SCCatLTTDSetting' => 'CD_SCCatLTTDSetting',
                    'SCCatLTTFsSetting' => 'CD_SCCatLTTFsSetting',
                    'SCCatLTTAnSetting' => 'CD_SCCatLTTAnSetting',
                    'SCCatLBTSetting' => 'CD_SCCatLBTSetting',
                    'SCCatLBTDSetting' => 'CD_SCCatLBTDSetting',
                    'SCCatLBTFsSetting' => 'CD_SCCatLBTFsSetting',
                    'SCCatLBTAnSetting' => 'CD_SCCatLBTAnSetting',
                    'SCCatLTTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTControll"]["label"],
                        'section'  => 'CD_SCCatLTTSection',
                        'settings' => 'CD_SCCatLTTSetting'
                    ),
                    'SCCatLTPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLTPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumntitlepadding
                    ),
                    'SCCatLCtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLCtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumncontentpadding
                    ),
                    'SCCatLMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$sidecolumtitlecontentnmargin
                    ),
                    'SCCatLTTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLTTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCCatLTTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLTTFsSetting',
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCCatLTTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLTTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'SCCatLBTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTControll"]["label"],
                        'section'  => 'CD_SCCatLTTSection',
                        'settings' => 'CD_SCCatLBTSetting'
                    ),
                    'SCCatLBTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLBTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCCatLBTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLBTFsSetting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCCatLBTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatLTTSection', 
                        'settings'    => 'CD_SCCatLBTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //カテゴリ一覧 背景画像の設定
                    'SCCatLBgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatLBgImgsetting' => 'SCCatLBgImg_setting',
                    'SCCatLBgImgStsetting' => 'SCCatLBgImgSt_setting',
                    'SCCatLBgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBgImgcontroll"]["label"],
                        'section' => 'SCCatLBgImg_section',
                        'settings' => 'SCCatLBgImg_setting',
                    ),
                    'SCCatLBgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBgImgStcontroll"]["label"],
                        'type'        => 'select',
                        'section'     => 'SCCatLBgImg_section', 
                        'settings'    => 'SCCatLBgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;' => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBgImgStcontroll"]["choices"]["backgroundrepeat"],
                            'background-repeat: no-repeat; background-size: 100%;' => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBgImgStcontroll"]["choices"]["backgroundnorepeat"]
                        )
                    ),

                    //カテゴリ一覧 色の調整
                    'SCCatLTBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatLTBgSetting' => 'CD_SCCatLTBgSetting',
                    'SCCatLTCSetting' => 'CD_SCCatLTCSetting',
                    'SCCatLBgSetting' => 'CD_SCCatLBgSetting',
                    'SCCatLLSetting' => 'CD_SCCatLLSetting',
                    'SCCatLLBgSetting' => 'CD_SCCatLLBgSetting',
                    'SCCatLTBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatLTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatLBgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatLLDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatLLBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatLTBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTBgControll"]["label"],
                        'section'    => 'CD_SCCatLTBgSection',
                        'settings'   => 'CD_SCCatLTBgSetting'
                    ),
                    'SCCatLTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLTCControll"]["label"],
                        'section'    => 'CD_SCCatLTBgSection',
                        'settings'   => 'CD_SCCatLTCSetting'
                    ),
                    'SCCatLBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryLink"]["SCCatLBgControll"]["label"],
                        'section'    => 'CD_SCCatLTBgSection',
                        'settings'   => 'CD_SCCatLBgSetting'
                    )
                )
            );

            //カテゴリ一覧 デザイン
            $wp_customize->add_section('CD_SCCatLDSection', $settings['sidecolumntemplate']['SCCatLDSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLDSetting', $settings['sidecolumntemplate']['SCCatLDControll']));

            //カテゴリ一覧全体の余白
            $wp_customize->add_section('CD_SCCatLPdSection', $settings['sidecolumntemplate']['SCCatLPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLPdSetting', $settings['sidecolumntemplate']['SCCatLPdControll']));

            //カテゴリ一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_SCCatLMgSection', $settings['sidecolumntemplate']['SCCatLMgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLMgSetting', $settings['sidecolumntemplate']['SCCatLMgControll']));

            //カテゴリ一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_SCCatLTPdSection', $settings['sidecolumntemplate']['SCCatLTPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLTPdSetting', $settings['sidecolumntemplate']['SCCatLTPdControll']));

            //カテゴリ一覧　コンテンツの余白
            $wp_customize->add_section('CD_SCCatLCtPdSection', $settings['sidecolumntemplate']['SCCatLCtPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLCtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLCtPdSetting', $settings['sidecolumntemplate']['SCCatLCtPdControll']));

            //カテゴリ一覧 見出しタイトル(上)(下)の修正
            $wp_customize->add_section('CD_SCCatLTTSection', $settings['sidecolumntemplate']['SCCatLTTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTTAnSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLTTSetting', $settings['sidecolumntemplate']['SCCatLTTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLTTDSetting', $settings['sidecolumntemplate']['SCCatLTTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLTTFsSetting', $settings['sidecolumntemplate']['SCCatLTTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLTTAnSetting', $settings['sidecolumntemplate']['SCCatLTTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLBTSetting', $settings['sidecolumntemplate']['SCCatLBTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLBTDSetting', $settings['sidecolumntemplate']['SCCatLBTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLBTFsSetting', $settings['sidecolumntemplate']['SCCatLBTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatLBTAnSetting', $settings['sidecolumntemplate']['SCCatLBTAnControll']));

            //カテゴリ一覧 背景画像の設定
            $wp_customize->add_section('SCCatLBgImg_section', $settings['sidecolumntemplate']['SCCatLBgImgsection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBgImgsetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'SCCatLBgImg_setting', $settings['sidecolumntemplate']['SCCatLBgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SCCatLBgImgSt_setting', $settings['sidecolumntemplate']['SCCatLBgImgStcontroll']));

            //カテゴリ一覧 色の調整
            $wp_customize->add_section('CD_SCCatLTBgSection', $settings['sidecolumntemplate']['SCCatLTBgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTBgSetting'], $settings['sidecolumntemplate']['SCCatLTBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLTCSetting'], $settings['sidecolumntemplate']['SCCatLTCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLBgSetting'], $settings['sidecolumntemplate']['SCCatLBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLLSetting'], $settings['sidecolumntemplate']['SCCatLLDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatLLBgSetting'], $settings['sidecolumntemplate']['SCCatLLBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatLTBgSetting', $settings['sidecolumntemplate']['SCCatLTBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatLTCSetting', $settings['sidecolumntemplate']['SCCatLTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatLBgSetting', $settings['sidecolumntemplate']['SCCatLBgControll']));
        }

        public static function Values(){
            return (object)[
                //カテゴリ一覧
                'CatLinkSidebarTemplate' => !get_theme_mod('CD_SCCatLDSetting') ? 'pt1' : get_theme_mod('CD_SCCatLDSetting'),
                'CatLinkSidebarTitle' => !get_theme_mod('CD_SCCatLTTSetting') ? 'カテゴリ一覧' : get_theme_mod('CD_SCCatLTTSetting'),
                'CatLinkSidebarTitleDir' => !get_theme_mod('CD_SCCatLTTDSetting') ? 'center' : get_theme_mod('CD_SCCatLTTDSetting'),
                'CatLinkSidebarTitleFontSize' => !get_theme_mod('CD_SCCatLTTFsSetting') ? '18px' : get_theme_mod('CD_SCCatLTTFsSetting'),
                'CatLinkSidebarTitleAnimation' => !get_theme_mod('CD_SCCatLTTAnSetting') ? 'none' : get_theme_mod('CD_SCCatLTTAnSetting'),
                'CatLinkSidebarBottomTitle' => !get_theme_mod('CD_SCCatLBTSetting') ? 'Categories' : get_theme_mod('CD_SCCatLBTSetting'),
                'CatLinkSidebarBottomTitleDir' => !get_theme_mod('CD_SCCatLBTDSetting') ? 'center' : get_theme_mod('CD_SCCatLBTDSetting'),
                'CatLinkSidebarBottomTitleFontSize' => !get_theme_mod('CD_SCCatLBTFsSetting') ? '16px' : get_theme_mod('CD_SCCatLBTFsSetting'),
                'CatLinkSidebarBottomTitleAnimation' => !get_theme_mod('CD_SCCatLBTAnSetting') ? 'none' : get_theme_mod('CD_SCCatLBTAnSetting'),
                'CatLinkSidebarTitleBackground' => !get_theme_mod('CD_SCCatLTBgSetting') ? '#ffffff' : get_theme_mod('CD_SCCatLTBgSetting'),
                'CatLinkSidebarFontColor' => !get_theme_mod('CD_SCCatLTCSetting') ? '#212529' : get_theme_mod('CD_SCCatLTCSetting'),
                'CatLinkSidebarBackground' => !get_theme_mod('CD_SCCatLBgSetting') ? '#f4f4f4' : get_theme_mod('CD_SCCatLBgSetting'),
                //'CatLinkSidebarAnimation' => !get_theme_mod('CD_SCCatLAnSetting') ? 'none' : get_theme_mod('CD_SCCatLAnSetting'),
                'EachSidebarCatLinkColor' => !get_theme_mod('CD_SCCatLLSetting') ? '#ffffff' : get_theme_mod('CD_SCCatLLSetting'),
                'EachSidebarCatLinkBackground' => !get_theme_mod('CD_SCCatLLBgSetting') ? '#212529' : get_theme_mod('CD_SCCatLLBgSetting'),

                //カテゴリ一覧の余白
                'CatLinkSidebarPadding' => !get_theme_mod('CD_SCCatLPdSetting') ? '.5rem' : get_theme_mod('CD_SCCatLPdSetting'),

                //カテゴリ一覧 タイトルブロックと記事一覧の余白の間隔
                'CatLinkSidebarTitleBottomMargin' => !get_theme_mod('CD_SCCatLMgSetting') ? '.2rem' : get_theme_mod('CD_SCCatLMgSetting'),

                //カテゴリ一覧 タイトルブロックの余白
                'CatLinkSidebarTitlePadding' => !get_theme_mod('CD_SCCatLTPdSetting') ? '.5rem' : get_theme_mod('CD_SCCatLTPdSetting'),

                //カテゴリ一覧 コンテンツの余白
                'CatLinkSidebarContentPadding' => !get_theme_mod('CD_SCCatLCtPdSetting') ? '.5rem' : get_theme_mod('CD_SCCatLCtPdSetting'),

                //カテゴリ一覧 背景画像の設定
                'SetSCCatLBgImg' => !get_theme_mod('SCCatLBgImg_setting') ? NULL : get_theme_mod('SCCatLBgImg_setting'),
                'SetSCCatLBgImgStatus' => !get_theme_mod('SCCatLBgImgSt_setting') ? '' : get_theme_mod('SCCatLBgImgSt_setting')
            ];
        }
    }
    new CustomizeSideColumnCategoryLink();
?>