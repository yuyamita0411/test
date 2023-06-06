<?php
    class CustomizeMainColumn{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $settings = array(
                'mainbackground' => array(
                    'panel' => array(
                        'title'    => 'メインカラムの設定',
                        'priority' => 5
                    ),
                    //デザイン
                    'ADsection' => array(
                        'title'    => __( 'デザインを変更する', 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'SNSTDsetting' => 'SNSTD_setting',
                    'SNSDsetting' => 'SNSD_setting',
                    'SNSTDcontroll' => array(
                        'label'       => 'SNSエリアの見出しのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'AD_section', 
                        'settings'    => 'SNSTD_setting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'pt4'   => __( 'パターン4' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'SNSDcontroll' => array(
                        'label'       => 'SNSボタンのデザインを選択する', 
                        'type'        => 'radio',
                        'section'     => 'AD_section', 
                        'settings'    => 'SNSD_setting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'pt4'   => __( 'パターン4' ),
                            'pt5'   => __( 'パターン5' ),
                            'none'   => __( '非表示' )
                        )
                    ),

                    //色の調整
                    'MBGCsection' => array(
                        'title' => __( '色の調整', 'mytheme' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'MBGCsetting' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ABGsetting' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'TWCsetting' => array(
                        'default'     => '#3ab4ff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'FCCsetting' => array(
                        'default'     => '#3b8df7',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HTCsetting' => array(
                        'default'     => '#45b5f7',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PCKTCsetting' => array(
                        'default'     => '#ff7b7b',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'LCsetting' => array(
                        'default'     => '#59d869',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SNSBGsetting' => array(
                        'default'     => '#e9ecef',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SNSTCsetting' => array(
                        'default'     => '#3d3d3d',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SNSTBGsetting' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'MBGCcontroll' => array(
                        'label'      => __( 'メインカラムの色を選択してください。', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'MBGC_setting'
                    ),
                    'ABGcontroll' => array(
                        'label'      => __( '「この記事を書いた人」の色合いを設定してください。', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'ABG_setting',
                        'priority'   => 5,
                    ),
                    'TWCcontroll' => array(
                        'label'      => __( 'Twitterシェアリンクの色合いを設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'TWC_setting',
                        'priority'   => 5,
                    ),
                    'FCCcontroll' => array(
                        'label'      => __( 'Facebookシェアリンクの色合いを設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'FCC_setting',
                        'priority'   => 5,
                    ),
                    'HTCcontroll' => array(
                        'label'      => __( 'はてなブックマークの色合いを設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'HTC_setting',
                        'priority'   => 5,
                    ),
                    'PCKTCcontroll' => array(
                        'label'      => __( 'pocketの色合いを設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'PCKTC_setting',
                        'priority'   => 5,
                    ),
                    'LCcontroll' => array(
                        'label'      => __( 'LINEシェアリンクの色合いを設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'LC_setting',
                        'priority'   => 5,
                    ),
                    'SNSBGcontroll' => array(
                        'label'      => __( 'SNSエリアの背景色を設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'SNSBG_setting',
                        'priority'   => 5,
                    ),
                    'SNSTCcontroll' => array(
                        'label'      => __( 'SNSエリアの見出しのタイトルの文字色を設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'SNSTC_setting',
                        'priority'   => 5,
                    ),
                    'SNSTBGcontroll' => array(
                        'label'      => __( 'SNSエリアの見出しのタイトルの背景色を設定してください', 'mytheme' ),
                        'section'    => 'MBGC_section',
                        'settings'   => 'SNSTBG_setting',
                        'priority'   => 5,
                    ),

                    //メインカラムの余白設定
                    'MCCPdsection' => array(
                        'title'    => __( 'メインカラムの余白を設定する', 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'MCCPdsetting' => 'MCCPd_setting',
                    'MCCPdcontroll' => array(
                        'label'       => 'メインカラムの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'MCCPd_section', 
                        'settings'    => 'MCCPd_setting', 
                        'default'   => 'none',
                        'choices'     =>  Settings::$contentpadding
                    ),

                    //アニメーション
                    'MCAnsection' => array(
                        'title'    => __( 'メインカラムのアニメーションを選択する', 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'MCAnsetting' => 'MCAn_setting',
                    'MCAncontroll' => array(
                        'label'       => 'メインカラムのアニメーションを選択する', 
                        'type'        => 'select',
                        'section'     => 'MCAn_section', 
                        'settings'    => 'MCAn_setting', 
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    ),

                    //文字
                    'SNSTsection' => array(
                        'title'    => 'SNSエリアの見出しのタイトルを設定する',
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'SNSTsetting' => 'SNST_setting',
                    'SNSTcontroll' => array(
                        'label'    => '編集する',
                        'section'  => 'SNST_section',
                        'settings' => 'SNST_setting',
                        'priority' => 1
                    ),

                    //各パートの順序設定
                    'OOSection' => array(
                        'title'    => __( '各パートの順序設定・表示、非表示', 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'OOSetting' => 'OOSetting',
                    'OTSetting' => 'OTSetting',
                    'OTHSetting' => 'OTHSetting',
                    'OFSetting' => 'OFSetting',
                    'OFVSetting' => 'OFVSetting',
                    'OOControll' => array(
                        'label'       => '1番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'OOSection', 
                        'settings'    => 'OOSetting',
                        'default'   => 'Content',
                        'choices'     =>  array(
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'OTControll' => array(
                        'label'       => '2番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'OOSection', 
                        'settings'    => 'OTSetting',
                        'default'   => 'NewestArticleArea',
                        'choices'     =>  array(
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'OTHControll' => array(
                        'label'       => '3番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'OOSection', 
                        'settings'    => 'OTHSetting',
                        'default'   => 'CategoryArticle',
                        'choices'     =>  array(
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'OFControll' => array(
                        'label'       => '4番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'OOSection', 
                        'settings'    => 'OFSetting',
                        'default'   => 'CategoryLink',
                        'choices'     =>  array(
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'OFVControll' => array(
                        'label'       => '5番目のパートを選択する', 
                        'type'        => 'select',
                        'section'     => 'OOSection', 
                        'settings'    => 'OFVSetting',
                        'default'   => 'PopularArticleArea',
                        'choices'     =>  array(
                            'PopularArticleArea'   => __( '人気記事一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( '関連記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'none'   => __( '非表示' )
                        )
                    )
                )
            );
            $wp_customize->add_panel('maincolumn_design_panel', $settings['mainbackground']['panel']);

            $wp_customize->add_section('AD_section', $settings['mainbackground']['ADsection']);
            $wp_customize->add_setting($settings['mainbackground']['SNSTDsetting']);
            $wp_customize->add_setting($settings['mainbackground']['SNSDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SNSTD_setting', $settings['mainbackground']['SNSTDcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SNSD_setting', $settings['mainbackground']['SNSDcontroll']));

            $wp_customize->add_section('MBGC_section', $settings['mainbackground']['MBGCsection']);
            $wp_customize->add_setting('MBGC_setting', $settings['mainbackground']['MBGCsetting']);
            $wp_customize->add_setting('ABG_setting', $settings['mainbackground']['ABGsetting']);
            $wp_customize->add_setting('TWC_setting', $settings['mainbackground']['TWCsetting']);
            $wp_customize->add_setting('FCC_setting', $settings['mainbackground']['FCCsetting']);
            $wp_customize->add_setting('HTC_setting', $settings['mainbackground']['HTCsetting']);
            $wp_customize->add_setting('PCKTC_setting', $settings['mainbackground']['PCKTCsetting']);
            $wp_customize->add_setting('LC_setting', $settings['mainbackground']['LCsetting']);
            $wp_customize->add_setting('SNSBG_setting', $settings['mainbackground']['SNSBGsetting']);
            $wp_customize->add_setting('SNSTC_setting', $settings['mainbackground']['SNSTCsetting']);
            $wp_customize->add_setting('SNSTBG_setting', $settings['mainbackground']['SNSTBGsetting']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'MBGC_setting', $settings['mainbackground']['MBGCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'ABG_setting', $settings['mainbackground']['ABGcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'TWC_setting', $settings['mainbackground']['TWCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'FCC_setting', $settings['mainbackground']['FCCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HTC_setting', $settings['mainbackground']['HTCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'PCKTC_setting', $settings['mainbackground']['PCKTCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'LC_setting', $settings['mainbackground']['LCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SNSBG_setting', $settings['mainbackground']['SNSBGcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SNSTC_setting', $settings['mainbackground']['SNSTCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'SNSTBG_setting', $settings['mainbackground']['SNSTBGcontroll']));

            //メインカラムの余白
            $wp_customize->add_section('MCCPd_section', $settings['mainbackground']['MCCPdsection']);
            $wp_customize->add_setting($settings['mainbackground']['MCCPdsetting'], $settings['mainbackground']['MCCPddefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'MCCPd_setting', $settings['mainbackground']['MCCPdcontroll']));

            $wp_customize->add_section('MCAn_section', $settings['mainbackground']['MCAnsection']);
            $wp_customize->add_setting($settings['mainbackground']['MCAnsetting'], $settings['mainbackground']['MCAndefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'MCAn_setting', $settings['mainbackground']['MCAncontroll']));

            $wp_customize->add_section('SNST_section', $settings['mainbackground']['SNSTsection']);
            $wp_customize->add_setting($settings['mainbackground']['SNSTsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SNST_setting', $settings['mainbackground']['SNSTcontroll']));

            $wp_customize->add_section('OOSection', $settings['mainbackground']['OOSection']);
            $wp_customize->add_setting($settings['mainbackground']['OOSetting']);
            $wp_customize->add_setting($settings['mainbackground']['OTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['OTHSetting']);
            $wp_customize->add_setting($settings['mainbackground']['OFSetting']);
            $wp_customize->add_setting($settings['mainbackground']['OFVSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'OOSetting', $settings['mainbackground']['OOControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'OTSetting', $settings['mainbackground']['OTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'OTHSetting', $settings['mainbackground']['OTHControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'OFSetting', $settings['mainbackground']['OFControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'OFVSetting', $settings['mainbackground']['OFVControll']));

            //各パートのデザイン
        }
        public static function Values(){
            $CustomizeMainColumnCategoryArticle = CustomizeMainColumnCategoryArticle::Values();
            $CustomizeMainColumnNewestArticleArea = CustomizeMainColumnNewestArticleArea::Values();
            $CustomizeMainColumnCategoryLink = CustomizeMainColumnCategoryLink::Values();
            $CustomizeMainColumnPopularArticleArea = CustomizeMainColumnPopularArticleArea::Values();
            $CustomizeAuthorInfo = CustomizeAuthorInfo::Values();

            return (object)[
                'SetSNSAreaTitleDesign' => !get_theme_mod('SNSTD_setting') ? 'pt1' : get_theme_mod('SNSTD_setting'),
                'SetSNSButton' => !get_theme_mod('SNSD_setting') ? 'pt1' : get_theme_mod('SNSD_setting'),
                'MainColumnColor' => !get_theme_mod('MBGC_setting') ? '#ffffff' : get_theme_mod('MBGC_setting'),
                'SetAuthorColor' => !get_theme_mod('ABG_setting') ? '#06357c' : get_theme_mod('ABG_setting'),
                'SetTwitterColor' => !get_theme_mod('TWC_setting') ? '#3ab4ff' : get_theme_mod('TWC_setting'),
                'SetFacebookColor' => !get_theme_mod('FCC_setting') ? '#3b8df7' : get_theme_mod('FCC_setting'),
                'SetHatenaColor' => !get_theme_mod('HTC_setting') ? '#45b5f7' : get_theme_mod('HTC_setting'),
                'SetPocketColor' => !get_theme_mod('PCKTC_setting') ? '#ff7b7b' : get_theme_mod('PCKTC_setting'),
                'SetLineColor' => !get_theme_mod('LC_setting') ? '#59d869' : get_theme_mod('LC_setting'),
                'SetSNSAreaColor' => !get_theme_mod('SNSBG_setting') ? '#e9ecef' : get_theme_mod('SNSBG_setting'),
                'SetSNSAreaTitleColor' => !get_theme_mod('SNSTC_setting') ? '#3d3d3d' : get_theme_mod('SNSTC_setting'),
                'SetSNSAreaTitleBackgroundColor' => !get_theme_mod('SNSTBG_setting') ? '#ffffff' : get_theme_mod('SNSTBG_setting'),
                'MainColumnPadding' => !get_theme_mod('MCCPd_setting') ? 'none' : get_theme_mod('MCCPd_setting'),
                'MainColumnAnimation' => !get_theme_mod('MCAn_setting') ? 'none' : get_theme_mod('MCAn_setting'),
                'SetSNSAreaTitle' => !get_theme_mod('SNST_setting') ? 'SHARE!!' : get_theme_mod('SNST_setting'),
                'DisplayFirstOrder' => !get_theme_mod('OOSetting') ? 'Content' : get_theme_mod('OOSetting'),
                'DisplaySecondOrder' => !get_theme_mod('OTSetting') ? 'NewestArticleArea' : get_theme_mod('OTSetting'),
                'DisplayThirdOrder' => !get_theme_mod('OTHSetting') ? 'CategoryArticle' : get_theme_mod('OTHSetting'),
                'DisplayForthOrder' => !get_theme_mod('OFSetting') ? 'CategoryLink' : get_theme_mod('OFSetting'),
                'DisplayFifthOrder' => !get_theme_mod('OFVSetting') ? 'PopularArticleArea' : get_theme_mod('OFVSetting'),

                'CategoryArticleNumber' => $CustomizeMainColumnCategoryArticle->CategoryArticleNumber,
                'CategoryArticleTemplate' => $CustomizeMainColumnCategoryArticle->CategoryArticleTemplate,
                'CategoryArticleSPTemplate' => $CustomizeMainColumnCategoryArticle->CategoryArticleSPTemplate,
                'SetCategoryArticleTagDesign' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleTagDesign,
                'SetCategoryArticleWRadius' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleWRadius,
                'SetCategoryArticleCRadius' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleCRadius,
                'SetCatABgImg' => $CustomizeMainColumnCategoryArticle->SetCatABgImg,
                'SetCatABgImgStatus' => $CustomizeMainColumnCategoryArticle->SetCatABgImgStatus,
                'CategoryArticleTitle' => $CustomizeMainColumnCategoryArticle->CategoryArticleTitle,
                'CategoryArticleAreaTitleMargin' => $CustomizeMainColumnCategoryArticle->CategoryArticleAreaTitleBottomMargin,
                'CategoryArticleAreaTitlePadding' => $CustomizeMainColumnCategoryArticle->CategoryArticleAreaTitlePadding,
                'CategoryArticleAreaContentPadding' => $CustomizeMainColumnCategoryArticle->CategoryArticleAreaContentPadding,
                'CategoryArticleTitleDir' => $CustomizeMainColumnCategoryArticle->CategoryArticleTitleDir,
                'CategoryArticleTitleFontSize' => $CustomizeMainColumnCategoryArticle->CategoryArticleTitleFontSize,
                'CategoryArticleTitleFontWeight' => $CustomizeMainColumnCategoryArticle->CategoryArticleTitleFontWeight,
                'CategoryArticleTitleFontAnimation' => $CustomizeMainColumnCategoryArticle->CategoryArticleTitleFontAnimation,
                'CategoryArticleBottomTitle' => $CustomizeMainColumnCategoryArticle->CategoryArticleBottomTitle,
                'CategoryArticleBottomTitleDir' => $CustomizeMainColumnCategoryArticle->CategoryArticleBottomTitleDir,
                'CategoryArticleBottomTitleAnimation' => $CustomizeMainColumnCategoryArticle->CategoryArticleBottomTitleAnimation,
                'CategoryArticleBottomTitleFontSize' => $CustomizeMainColumnCategoryArticle->CategoryArticleBottomTitleFontSize,
                'CategoryArticleBottomTitleFontWeight' => $CustomizeMainColumnCategoryArticle->CategoryArticleBottomTitleFontWeight,
                'CategoryArticleTitleBackground' => $CustomizeMainColumnCategoryArticle->CategoryArticleTitleBackground,
                'CategoryArticleFontColor' => $CustomizeMainColumnCategoryArticle->CategoryArticleFontColor,
                'CategoryArticleBackground' => $CustomizeMainColumnCategoryArticle->CategoryArticleBackground,
                'CategoryArticleAnimation' => $CustomizeMainColumnCategoryArticle->CategoryArticleAnimation,
                'SetCategoryArticleEachBackground' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleEachBackground,
                'SetCategoryArticleCatLinkColor' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleCatLinkColor,
                'SetCategoryArticleCatLinkBackgroundColor' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleCatLinkBackgroundColor,
                'SetCategoryArticleDateFontColor' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleDateFontColor,
                'SetCategoryArticleTitleFontColor' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleTitleFontColor,
                'SetCategoryArticleThumbBorder' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleThumbBorder,
                'SetCategoryArticleThumbBorderColor' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleThumbBorderColor,
                'SetCategoryArticleAreaShadow' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleAreaShadow,
                'SetCategoryArticleAreaShadowLevel' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleAreaShadowLevel,
                'SetCategoryArticleAreaContentShadow' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleAreaContentShadow,
                'SetCategoryArticleAreaContentShadowLevel' => $CustomizeMainColumnCategoryArticle->SetCategoryArticleAreaContentShadowLevel,

                'NewestArticleAreaTemplate' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTemplate,
                'NewestArticleAreaSPTemplate' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaSPTemplate,
                'NewestArticleAreaNumber' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaNumber,
                'NewestArticleAreaTitle' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitle,
                'NewestArticleAreaTitlePadding' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaaTitlePadding,
                'NewestArticleAreaBottomTitleMargin' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitleBottomMargin,
                'NewestArticleAreaContentPadding' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaContentPadding,
                'NewestArticleAreaTitleDir' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitleDir,
                'NewestArticleAreaTitleFontSize' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitleFontSize,
                'NewestArticleAreaTitleFontWeight' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitleFontWeight,
                'NewestArticleAreaTitleAnimation' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitleAnimation,
                'NewestArticleAreaBottomTitle' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaBottomTitle,
                'NewestArticleAreaBottomTitleFontSize' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaBottomTitleFontSize,
                'NewestArticleAreaBottomTitleFontWeight' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaBottomTitleFontWeight,
                'NewestArticleAreaBottomTitleDir' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaBottomTitleDir,
                'NewestArticleAreaBottomTitleAnimation' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaBottomTitleAnimation,
                'NewestArticleAreaTitleBackground' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaTitleBackground,
                'NewestArticleAreaFontColor' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaFontColor,
                'NewestArticleAreaBackground' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaBackground,
                'NewestArticleAreaAnimation' => $CustomizeMainColumnNewestArticleArea->NewestArticleAreaAnimation,
                'SetNewestArticleAreaEachBackground' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaEachBackground,
                'SetNewestArticleAreaCatLinkColor' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaCatLinkColor,
                'SetNewestArticleAreaCatLinkBackgroundColor' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaCatLinkBackgroundColor,
                'SetNewestArticleAreaDateFontColor' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaDateFontColor,
                'SetNewestArticleAreaTitleFontColor' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaTitleFontColor,

                'SetNArABgImg' => $CustomizeMainColumnNewestArticleArea->SetNArABgImg,
                'SetNArABgImgStatus' => $CustomizeMainColumnNewestArticleArea->SetNArABgImgStatus,
                'SetNewestArticleAreaShadow' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaShadow,
                'SetNewestArticleAreaShadowLevel' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaShadowLevel,
                'SetNewestArticleAreaContentShadow' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaContentShadow,
                'SetNewestArticleAreaContentShadowLevel' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaContentShadowLevel,
                'SetNewestArticleAreaTagDesign' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaTagDesign,
                'SetNewestArticleAreaWRadius' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaWRadius,
                'SetNewestArticleAreaCRadius' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaCRadius,
                'SetNewestArticleAreaThumBorder' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaThumBorder,
                'SetNewestArticleAreaThumbBorderColor' => $CustomizeMainColumnNewestArticleArea->SetNewestArticleAreaThumbBorderColor,

                'CatLinkTemplate' => $CustomizeMainColumnCategoryLink->CatLinkTemplate,
                'CatLinkTitle' => $CustomizeMainColumnCategoryLink->CatLinkTitle,
                'CatLinkTitleDir' => $CustomizeMainColumnCategoryLink->CatLinkTitleDir,
                'CatLinkTitleFontSize' => $CustomizeMainColumnCategoryLink->CatLinkTitleFontSize,
                'CatLinkTitleAnimation' => $CustomizeMainColumnCategoryLink->CatLinkTitleAnimation,
                'CatLinkBottomTitle' => $CustomizeMainColumnCategoryLink->CatLinkBottomTitle,
                'CatLinkSidebarTitlePadding' => $CustomizeMainColumnCategoryLink->CatLinkTitlePadding,
                'CatLinkSidebarBottomTitleMargin' => $CustomizeMainColumnCategoryLink->CatLinkTitleBottomMargin,
                'CatLinkSidebarContentPadding' => $CustomizeMainColumnCategoryLink->CatLinkContentPadding,
                'CatLinkBottomTitleDir' => $CustomizeMainColumnCategoryLink->CatLinkBottomTitleDir,
                'CatLinkBottomTitleFontSize' => $CustomizeMainColumnCategoryLink->CatLinkBottomTitleFontSize,
                'CatLinkBottomTitleAnimation' => $CustomizeMainColumnCategoryLink->CatLinkBottomTitleAnimation,
                'CatLinkTitleBackground' => $CustomizeMainColumnCategoryLink->CatLinkTitleBackground,
                'CatLinkFontColor' => $CustomizeMainColumnCategoryLink->CatLinkFontColor,
                'CatLinkBackground' => $CustomizeMainColumnCategoryLink->CatLinkBackground,
                'CatLinkAnimation' => $CustomizeMainColumnCategoryLink->CatLinkAnimation,
                'EachCatLinkColor' => $CustomizeMainColumnCategoryLink->EachCatLinkColor,
                'EachCatLinkBackground' => $CustomizeMainColumnCategoryLink->EachCatLinkBackground,
                'SetCatLBgImg' => $CustomizeMainColumnCategoryLink->SetCatLBgImg,
                'SetCatLBgImgStatus' => $CustomizeMainColumnCategoryLink->SetCatLBgImgStatus,

                'PopularArticleAreaTemplate' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTemplate,
                'PopularArticleAreaSPTemplate' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaSPTemplate,
                'PopularArticleAreaNumber' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaNumber,
                'PopularArticleAreaTitle' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitle,
                'PopularArticleAreaTitlePadding' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitlePadding,
                'PopularArticleAreaContentPadding' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaContentPadding,
                'PopularArticleAreaBottomTitleMargin' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitleBottomMargin,
                'PopularArticleAreaTitleDir' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitleDir,
                'PopularArticleAreaTitleFontSize' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitleFontSize,
                'PopularArticleAreaTitleFontWeight' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitleFontWeight,
                'PopularArticleAreaTitleFontAnimation' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitleFontAnimation,
                'PopularArticleAreaBottomTitle' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaBottomTitle,
                'PopularArticleAreaBottomTitleDir' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaBottomTitleDir,
                'PopularArticleAreaBottomTitleFontSize' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaBottomTitleFontSize,
                'PopularArticleAreaBottomTitleFontWeight' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaBottomTitleFontWeight,
                'PopularArticleAreaBottomTitleAnimation' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaBottomTitleAnimation,
                'PopularArticleAreaTitleBackground' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaTitleBackground,
                'PopularArticleAreaFontColor' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaFontColor,
                'PopularArticleAreaBackground' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaBackground,
                'PopularArticleAreaAnimation' => $CustomizeMainColumnPopularArticleArea->PopularArticleAreaAnimation,
                'SetPopularArticleAreaEachBackground' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaEachBackground,
                'SetPopularArticleAreaCatLinkColor' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaCatLinkColor,
                'SetPopularArticleAreaCatLinkBackgroundColor' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaCatLinkBackgroundColor,
                'SetPopularArticleAreaDateFontColor' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaDateFontColor,
                'SetPopularArticleAreaTitleFontColor' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaTitleFontColor,
                'SetPopularArticleAreaShadow' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaShadow,
                'SetPopularArticleAreaShadowLevel' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaShadowLevel,
                'SetPopularArticleAreaContentShadow' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaContentShadow,
                'SetPopularArticleAreaContentShadowLevel' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaContentShadowLevel,
                'SetPopularArticleAreaTagDesign' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaTagDesign,
                'SetPopularArticleAreaContentShadowLevel' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaContentShadowLevel,
                'SetPopularArticleAreaWRadius' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaWRadius,
                'SetPopularArticleAreaCRadius' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaCRadius,
                'SetPopularArticleAreaThumBorder' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaThumBorder,
                'SetPopularArticleAreaThumbBorderColor' => $CustomizeMainColumnPopularArticleArea->SetPopularArticleAreaThumbBorderColor,
                'SetPArBgImg' => $CustomizeMainColumnPopularArticleArea->SetPArBgImg,
                'SetPArBgImgStatus' => $CustomizeMainColumnPopularArticleArea->SetPArBgImgStatus,

                'AuthoInfoDisplay' => $CustomizeAuthorInfo->AuthoInfoDisplay,
                'AuthoInfoDesign' => $CustomizeAuthorInfo->AuthoInfoDesign,
                'AuthoInfoOutLineCat' => $CustomizeAuthorInfo->AuthoInfoOutLineCat,
                'AuthoInfoOutLineThickness' => $CustomizeAuthorInfo->AuthoInfoOutLineThickness,
                'AuthoInfoOutLineColor' => $CustomizeAuthorInfo->AuthoInfoOutLineColor,
                //'AuthoInfoOutLinePadding' => $CustomizeAuthorInfo->AuthoInfoOutLinePadding,
                //'AuthoInfoPaddingColor' => $CustomizeAuthorInfo->AuthoInfoPaddingColor,
                'AuthoInfoTitleColor' => $CustomizeAuthorInfo->AuthoInfoTitleColor,
                'AuthoInfoTitleBackgroundColor' => $CustomizeAuthorInfo->AuthoInfoTitleBackgroundColor,
                'AuthoInfoTitleOutlineColor' => $CustomizeAuthorInfo->AuthoInfoTitleOutlineColor,
                'AuthoInfoTitleFontsize' => $CustomizeAuthorInfo->AuthoInfoTitleFontsize,
                'AuthoInfoTitleBorderRadius' => $CustomizeAuthorInfo->AuthoInfoTitleBorderRadius,
                'AuthoInfoNameColor' => $CustomizeAuthorInfo->AuthoInfoNameColor,
                'AuthoInfoNameBackgroundColor' => $CustomizeAuthorInfo->AuthoInfoNameBackgroundColor,
                'AuthoInfoNameOutlineColor' => $CustomizeAuthorInfo->AuthoInfoNameOutlineColor,
                'AuthoInfoNameFontsize' => $CustomizeAuthorInfo->AuthoInfoNameFontsize,
                'AuthoInfoNameBorderRadius' => $CustomizeAuthorInfo->AuthoInfoNameBorderRadius,
                'AuthoInfoImageOutlineDisplay' => $CustomizeAuthorInfo->AuthoInfoImageOutlineDisplay,
                'AuthoInfoImageOutlineColor' => $CustomizeAuthorInfo->AuthoInfoImageOutlineColor,
                'AuthoInfoImageOutlineCategory' => $CustomizeAuthorInfo->AuthoInfoImageOutlineCategory,
                'AuthoInfoImageOutlineThickness' => $CustomizeAuthorInfo->AuthoInfoImageOutlineThickness,
                'AuthoInfoSegmentlineColor' => $CustomizeAuthorInfo->AuthoInfoSegmentlineColor,
                'AuthoInfoProfAreaFontColor' => $CustomizeAuthorInfo->AuthoInfoProfAreaFontColor,
                'AuthoInfoProfAreaBackgroundColor' => $CustomizeAuthorInfo->AuthoInfoProfAreaBackgroundColor,
                'AuthoInfoSegmentlineCategory' => $CustomizeAuthorInfo->AuthoInfoSegmentlineCategory,
                'AuthoInfoSegmentlineThickness' => $CustomizeAuthorInfo->AuthoInfoSegmentlineThickness
            ];
        }
    }
    new CustomizeMainColumn();
?>