<?php
    class CustomizeSideColumn{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetSideColumnLayout' ) );
        }

        public function SetSideColumnLayout($wp_customize){
            $settings = array(
                'sidecolumntemplate' => array(
                    'panel' => array(
                        'title'    => 'サイドカラム(右)の設定',
                        'priority' => 7
                    ),

                    'SbDSection' => array(
                        'title'    => __( 'サイドカラムの・表示、非表示', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SbDSetting' => 'SbDSetting',
                    'SbDControll' => array(
                        'label'       => 'サイドカラムの・表示、非表示を設定する', 
                        'type'        => 'select',
                        'section'     => 'SbDSection', 
                        'settings'    => 'SbDSetting',
                        'default'   => 'NewestArticleArea',
                        'choices'     =>  array(
                            'true'   => __( '表示' ),
                            'false'   => __( '非表示' )
                        )
                    ),
                    //サイドカラムの余白設定
                    'SCCPdsection' => array(
                        'title'    => __( 'サイドカラムの余白を設定する', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCPdsetting' => 'SCCPd_setting',
                    'SCCPdcontroll' => array(
                        'label'       => 'サイドカラムの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'SCCPd_section', 
                        'settings'    => 'SCCPd_setting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::$sidecolumnpadding
                    ),
                    //サイドカラムの背景、影
                    'SCBgCSection' => array(
                        'title'    => __( 'サイドカラムの背景色、影を設定する', 'theme_slug1' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCBgCSetting' => 'CD_SCBgCSetting',
                    'SNWrpShdSetting' => 'CD_SNWrpShdSetting',
                    'SNWrpShdLvSetting' => 'CD_SNWrpShdLvSetting',
                    'SCBgCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCBgCControll' => array(
                        'label'    => 'サイドカラムの背景色を変更する',
                        'section'    => 'CD_SCBgCSection',
                        'settings'   => 'CD_SCBgCSetting'
                    ),
                    'SNWrpShdControll' => array(
                        'label'       => 'サイドカラムの影のあり、なしを選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCBgCSection', 
                        'settings'    => 'CD_SNWrpShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => 'なし',
                            'true' => 'あり'
                        )
                    ),
                    'SNWrpShdLvControll' => array(
                        'label'       => 'サイドカラムの影の影の明さを選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCBgCSection', 
                        'settings'    => 'CD_SNWrpShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),

                    //各パートの順序設定
                    'SOOSection' => array(
                        'title'    => __( '各パートの順序設定・間隔・表示、非表示', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SOOSetting' => 'SOOSetting',
                    'SOTSetting' => 'SOTSetting',
                    'SOTHSetting' => 'SOTHSetting',
                    'SOFSetting' => 'SOFSetting',
                    'SmgSetting' => 'SmgSetting',
                    'SmgControll' => array(
                        'label'       => '各パートの間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'SOOSection', 
                        'settings'    => 'SmgSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumnmargin
                    ),
                    'SOOControll' => array(
                        'label'       => '1番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'SOOSection', 
                        'settings'    => 'SOOSetting',
                        'default'   => 'NewestArticleArea',
                        'choices'     =>  array(
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'SOTControll' => array(
                        'label'       => '2番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'SOOSection', 
                        'settings'    => 'SOTSetting',
                        'default'   => 'CategoryArticle',
                        'choices'     =>  array(
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'SOTHControll' => array(
                        'label'       => '3番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'SOOSection', 
                        'settings'    => 'SOTHSetting',
                        'default'   => 'CategoryLink',
                        'choices'     =>  array(
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'SOFControll' => array(
                        'label'       => '4番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'SOOSection', 
                        'settings'    => 'SOFSetting',
                        'default'   => 'PopularArticleArea',
                        'choices'     =>  array(
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'none'   => __( '非表示' )
                        )
                    )
                )
            );
            $wp_customize->add_panel('sidecolumn_design_panel', $settings['sidecolumntemplate']['panel']);

            //サイドカラムの表示、非表示
            $wp_customize->add_section('SbDSection', $settings['sidecolumntemplate']['SbDSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SbDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SbDSetting', $settings['sidecolumntemplate']['SbDControll']));

            //サイドカラムの余白
            $wp_customize->add_section('SCCPd_section', $settings['sidecolumntemplate']['SCCPdsection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCPdsetting'], $settings['sidecolumntemplate']['SCCPddefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SCCPd_setting', $settings['sidecolumntemplate']['SCCPdcontroll']));

            //サイドカラムの背景、影
            $wp_customize->add_section('CD_SCBgCSection', $settings['sidecolumntemplate']['SCBgCSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCBgCSetting'], $settings['sidecolumntemplate']['SCBgCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SNWrpShdSetting'], $settings['sidecolumntemplate']['SNWrpShdDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SNWrpShdLvSetting'], $settings['sidecolumntemplate']['SNWrpShdLvDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCBgCSetting', $settings['sidecolumntemplate']['SCBgCControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SNWrpShdSetting', $settings['sidecolumntemplate']['SNWrpShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SNWrpShdLvSetting', $settings['sidecolumntemplate']['SNWrpShdLvControll']));

            //各パートの順序
            $wp_customize->add_section('SOOSection', $settings['sidecolumntemplate']['SOOSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SOOSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SOTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SOTHSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SOFSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SmgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SOOSetting', $settings['sidecolumntemplate']['SOOControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SOTSetting', $settings['sidecolumntemplate']['SOTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SOTHSetting', $settings['sidecolumntemplate']['SOTHControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SOFSetting', $settings['sidecolumntemplate']['SOFControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SmgSetting', $settings['sidecolumntemplate']['SmgControll']));
        }
        public static function Values(){
            $CustomizeSideColumnNewestArticleArea = CustomizeSideColumnNewestArticleArea::Values();
            $CustomizeSideColumnCategoryArticle = CustomizeSideColumnCategoryArticle::Values();
            $CustomizeSideColumnPopularArticleArea = CustomizeSideColumnPopularArticleArea::Values();
            $CustomizeSideColumnCategoryLink = CustomizeSideColumnCategoryLink::Values();
            return (object)[
                //サイドカラムの表示、非表示
                'DisplaySidebar' => !get_theme_mod('SbDSetting') ? 'true' : get_theme_mod('SbDSetting'),

                //サイドカラムの余白
                'SideColumnPadding' => !get_theme_mod('SCCPd_setting') ? '0px' : get_theme_mod('SCCPd_setting'),

                //サイドカラムの背景
                'SetSidebarBgColor' => !get_theme_mod('CD_SCBgCSetting') ? '#ffffff' : get_theme_mod('CD_SCBgCSetting'),
                'SetSidebarBgShadow' => !get_theme_mod('CD_SNWrpShdSetting') ? 'false' : get_theme_mod('CD_SNWrpShdSetting'),
                'SetSidebarBgShadowLevel' => !get_theme_mod('CD_SNWrpShdLvSetting') ? '0.5' : get_theme_mod('CD_SNWrpShdLvSetting'),

                //各パートの順序、間隔設定
                'DisplayFirstOrder' => !get_theme_mod('SOOSetting') ? 'NewestArticleArea' : get_theme_mod('SOOSetting'),
                'DisplaySecondOrder' => !get_theme_mod('SOTSetting') ? 'CategoryArticle' : get_theme_mod('SOTSetting'),
                'DisplayThirdOrder' => !get_theme_mod('SOTHSetting') ? 'CategoryLink' : get_theme_mod('SOTHSetting'),
                'DisplayForthOrder' => !get_theme_mod('SOFSetting') ? 'PopularArticleArea' : get_theme_mod('SOFSetting'),
                'SetSidebarMargin' => !get_theme_mod('SmgSetting') ? '0px' : get_theme_mod('SmgSetting'),

                'NewestArticleAreaSidebarTemplate' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaSidebarTemplate,
                'NewestArticleAreaSPSidebarTemplate' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaSPSidebarTemplate,
                'SetNewestArticleAreaSidebarTagDesign' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaSidebarTagDesign,
                'SetNewestArticleAreaSidebarPadding' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaPadding,
                'SetNewestArticleAreaWRadius' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaWRadius,
                'SetNewestArticleAreaCRadius' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaCRadius,
                'SetNewestArticleAreaThumBorder' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaThumBorder,
                'NewestArticleAreaNumber' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaNumber,
                'NewestArticleAreaTitle' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitle,
                'NewestArticleAreaTitlePadding' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitlePadding,
                'NewestArticleAreaContentPadding' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaContentPadding,
                'NewestArticleAreaTitleDir' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitleDir,
                'NewestArticleAreaTitleFontSize' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitleFontSize,
                'NewestArticleAreaTitleAnimation' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitleAnimation,
                'NewestArticleAreaBottomTitle' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaBottomTitle,
                'NewestArticleAreaBottomTitleMargin' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitleBottomMargin,
                'NewestArticleAreaBottomTitleFontSize' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaBottomTitleFontSize,
                'NewestArticleAreaBottomTitleDir' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaBottomTitleDir,
                'NewestArticleAreaBottomTitleAnimation' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaBottomTitleAnimation,
                'SetSCNArABgImg' => $CustomizeSideColumnNewestArticleArea->SetSCNArABgImg,
                'SetSCNArABgImgStatus' => $CustomizeSideColumnNewestArticleArea->SetSCNArABgImgStatus,
                'NewestArticleAreaTitleBackground' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaTitleBackground,
                'NewestArticleAreaFontColor' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaFontColor,
                'NewestArticleAreaBackground' => $CustomizeSideColumnNewestArticleArea->NewestArticleAreaBackground,
                'SetNewestArticleAreaEachBackground' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaEachBackground,
                'SetNewestArticleAreaCatLinkColor' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaCatLinkColor,
                'SetNewestArticleAreaCatLinkBackgroundColor' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaCatLinkBackgroundColor,
                'SetNewestArticleAreaDateFontColor' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaDateFontColor,
                'SetNewestArticleAreaTitleFontColor' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaTitleFontColor,
                'SetNewestArticleAreaShadow' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaShadow,
                'SetNewestArticleAreaShadowLevel' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaShadowLevel,
                'SetNewestArticleAreaContentShadow' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaContentShadow,
                'SetNewestArticleAreaContentShadowLevel' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaContentShadowLevel,
                'SetNewestArticleAreaThumbBorderColor' => $CustomizeSideColumnNewestArticleArea->SetNewestArticleAreaThumbBorderColor,

                'CategoryArticleAreaSidebarTemplate' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaSidebarTemplate,
                'CategoryArticleAreaSPSidebarTemplate' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaSPSidebarTemplate,
                'SetCategoryArticleAreaSidebarTagDesign' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaSidebarTagDesign,
                'SetCategoryArticleAreaSidebarPadding' => $CustomizeSideColumnCategoryArticle->CategoryArticlePadding,
                'SetCategoryArticleAreaWRadius' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaWRadius,
                'SetCategoryArticleAreaCRadius' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaCRadius,
                'SetCategoryArticleAreaThumBorder' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaThumBorder,
                'CategoryArticleAreaNumber' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaNumber,
                'CategoryArticleAreaTitle' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitle,
                'CategoryArticleAreaTitlePadding' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitlePadding,
                'CategoryArticleAreaContentPadding' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaContentPadding,
                'CategoryArticleAreaTitleMargin' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitleBottomMargin,
                'CategoryArticleAreaTitleDir' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitleDir,
                'CategoryArticleAreaTitleFontSize' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitleFontSize,
                'CategoryArticleAreaTitleAnimation' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitleAnimation,
                'CategoryArticleAreaBottomTitle' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaBottomTitle,
                'CategoryArticleAreaBottomTitleFontSize' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaBottomTitleFontSize,
                'CategoryArticleAreaBottomTitleDir' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaBottomTitleDir,
                'CategoryArticleAreaBottomTitleAnimation' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaBottomTitleAnimation,
                'SetSCCatArABgImg' => $CustomizeSideColumnCategoryArticle->SetSCCatArABgImg,
                'SetSCCatArABgImgStatus' => $CustomizeSideColumnCategoryArticle->SetSCCatArABgImgStatus,
                'CategoryArticleAreaTitleBackground' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaTitleBackground,
                'CategoryArticleAreaFontColor' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaFontColor,
                'CategoryArticleAreaBackground' => $CustomizeSideColumnCategoryArticle->CategoryArticleAreaBackground,
                'SetCategoryArticleAreaEachBackground' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaEachBackground,
                'SetCategoryArticleAreaCatLinkColor' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaCatLinkColor,
                'SetCategoryArticleAreaCatLinkBackgroundColor' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaCatLinkBackgroundColor,
                'SetCategoryArticleAreaDateFontColor' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaDateFontColor,
                'SetCategoryArticleAreaTitleFontColor' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaTitleFontColor,
                'SetCategoryArticleAreaShadow' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaShadow,
                'SetCategoryArticleAreaShadowLevel' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaShadowLevel,
                'SetCategoryArticleAreaContentShadow' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaContentShadow,
                'SetCategoryArticleAreaContentShadowLevel' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaContentShadowLevel,
                'SetCategoryArticleAreaThumbBorderColor' => $CustomizeSideColumnCategoryArticle->SetCategoryArticleAreaThumbBorderColor,

                'CatLinkSidebarTemplate' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTemplate,
                'CatLinkSidebarTitle' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitle,
                'CatLinkSidebarTitlePadding' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitlePadding,
                'CatLinkSidebarContentPadding' => $CustomizeSideColumnCategoryLink->CatLinkSidebarContentPadding,
                'CatLinkSidebarTitleDir' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitleDir,
                'CatLinkSidebarPadding' => $CustomizeSideColumnCategoryLink->CatLinkSidebarPadding,
                'CatLinkSidebarTitleFontSize' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitleFontSize,
                'CatLinkSidebarTitleAnimation' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitleAnimation,
                'CatLinkSidebarBottomTitle' => $CustomizeSideColumnCategoryLink->CatLinkSidebarBottomTitle,
                'CatLinkSidebarBottomTitleMargin' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitleBottomMargin,
                'CatLinkSidebarBottomTitleDir' => $CustomizeSideColumnCategoryLink->CatLinkSidebarBottomTitleDir,
                'CatLinkSidebarBottomTitleFontSize' => $CustomizeSideColumnCategoryLink->CatLinkSidebarBottomTitleFontSize,
                'CatLinkSidebarBottomTitleAnimation' => $CustomizeSideColumnCategoryLink->CatLinkSidebarBottomTitleAnimation,
                'CatLinkSidebarTitleBackground' => $CustomizeSideColumnCategoryLink->CatLinkSidebarTitleBackground,
                'CatLinkSidebarFontColor' => $CustomizeSideColumnCategoryLink->CatLinkSidebarFontColor,
                'CatLinkSidebarBackground' => $CustomizeSideColumnCategoryLink->CatLinkSidebarBackground,
                //'CatLinkSidebarAnimation' => $CustomizeSideColumnCategoryLink->//CatLinkSidebarAnimation,
                'EachSidebarCatLinkColor' => $CustomizeSideColumnCategoryLink->EachSidebarCatLinkColor,
                'EachSidebarCatLinkBackground' => $CustomizeSideColumnCategoryLink->EachSidebarCatLinkBackground,
                'SetSCCatLBgImg' => $CustomizeSideColumnCategoryLink->SetSCCatLBgImg,
                'SetSCCatLBgImgStatus' => $CustomizeSideColumnCategoryLink->SetSCCatLBgImgStatus,

                'PopularArticleAreaSidebarTemplate' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaSidebarTemplate,
                'PopularArticleAreaSPSidebarTemplate' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaSPSidebarTemplate,
                'SetPopularArticleAreaSidebarTagDesign' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaSidebarTagDesign,
                'SetPopularArticleAreaSidebarPadding' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaPadding,
                'SetPopularArticleAreaWRadius' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaWRadius,
                'SetPopularArticleAreaCRadius' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaCRadius,
                'SetPopularArticleAreaThumBorder' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaThumBorder,
                'PopularArticleAreaNumber' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaNumber,
                'PopularArticleAreaTitle' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitle,
                'PopularArticleAreaTitlePadding' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitlePadding,
                'PopularArticleAreaContentPadding' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaContentPadding,
                'PopularArticleAreaTitleDir' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitleDir,
                'PopularArticleAreaTitleFontSize' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitleFontSize,
                'PopularArticleAreaTitleAnimation' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitleAnimation,
                'PopularArticleAreaBottomTitle' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaBottomTitle,
                'PopularArticleAreaBottomTitleMargin' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitleBottomMargin,
                'PopularArticleAreaBottomTitleFontSize' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaBottomTitleFontSize,
                'PopularArticleAreaBottomTitleDir' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaBottomTitleDir,
                'PopularArticleAreaBottomTitleAnimation' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaBottomTitleAnimation,
                'SetSCFArABgImg' => $CustomizeSideColumnPopularArticleArea->SetSCFArABgImg,
                'SetSCFArABgImgStatus' => $CustomizeSideColumnPopularArticleArea->SetSCFArABgImgStatus,
                'PopularArticleAreaTitleBackground' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaTitleBackground,
                'PopularArticleAreaFontColor' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaFontColor,
                'PopularArticleAreaBackground' => $CustomizeSideColumnPopularArticleArea->PopularArticleAreaBackground,
                'SetPopularArticleAreaEachBackground' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaEachBackground,
                'SetPopularArticleAreaCatLinkColor' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaCatLinkColor,
                'SetPopularArticleAreaCatLinkBackgroundColor' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaCatLinkBackgroundColor,
                'SetPopularArticleAreaDateFontColor' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaDateFontColor,
                'SetPopularArticleAreaTitleFontColor' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaTitleFontColor,
                'SetPopularArticleAreaShadow' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaShadow,
                'SetPopularArticleAreaShadowLevel' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaShadowLevel,
                'SetPopularArticleAreaContentShadow' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaContentShadow,
                'SetPopularArticleAreaContentShadowLevel' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaContentShadowLevel,
                'SetPopularArticleAreaThumbBorderColor' => $CustomizeSideColumnPopularArticleArea->SetPopularArticleAreaThumbBorderColor
            ];
        }
    }
    new CustomizeSideColumn();
?>