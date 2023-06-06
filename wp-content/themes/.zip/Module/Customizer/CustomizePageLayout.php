<?php
    class CustomizePageLayout{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetpagePageLayout' ) );
        }

        public function SetpagePageLayout($wp_customize){
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'pagelayouttemplate' => array(
                    'panel' => array(
                        'title'    => 'アーカイブページのレイアウト設定',
                        'priority' => 10
                    ),
                    //関連記事一覧 デザイン
                    'ArchADSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchADSection"]["title"], 'theme_slug' ),
                        'panel'    => 'archive_design_panel'
                    ),
                    'ArchADSetting' => 'CD_ArchADSetting',
                    'ArchADSPSetting' => 'CD_ArchADSPSetting',
                    'ArchATDSetting' => 'CD_ArchATDSetting',
                    'ArchAWBRSetting' => 'CD_ArchAWBRSetting',
                    'ArchACBRSetting' => 'CD_ArchACBRSetting',
                    'ArchAThBDSetting' => 'CD_ArchAThBDSetting',
                    'ArchADControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchADControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_ArchADSection', 
                        'settings'    => 'CD_ArchADSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListLayout
                    ),
                    'ArchADSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchADSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_ArchADSection', 
                        'settings'    => 'CD_ArchADSPSetting',
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListSPLayout
                    ),
                    'ArchATDControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchATDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_ArchADSection', 
                        'settings'    => 'CD_ArchATDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATDControll"]["choices"]["pt3"] ),
                            'none'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATDControll"]["choices"]["none"] )
                        )
                    ),
                    'ArchAWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchADSection', 
                        'settings'    => 'CD_ArchAWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'ArchACBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchACBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchADSection', 
                        'settings'    => 'CD_ArchACBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'ArchAThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_ArchADSection', 
                        'settings'    => 'CD_ArchAThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchAThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchAThBDControll"]["choices"]["false"] )
                        )
                    ),

                    //背景画像の設定
                    'ArchABgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchABgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'archive_design_panel'
                    ),
                    'ArchABgImgsetting' => 'ArchABgImg_setting',
                    'ArchABgImgStsetting' => 'ArchABgImgSt_setting',
                    'ArchABgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeArchiveArticle"],
                        'section' => 'ArchABgImg_section',
                        'settings' => 'ArchABgImg_setting',
                    ),
                    'ArchABgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchABgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'ArchABgImg_section', 
                        'settings'    => 'ArchABgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchABgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchABgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),

                    //関連記事一覧 表示数、タイトル(上)、(下)、余白の設定
                    'ArchALNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchALNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'archive_design_panel'
                    ),
                    'ArchALNSetting' => 'CD_ArchALNSetting',
                    'ArchALNControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchALNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchALNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'ArchATTSetting' => 'CD_ArchATTSetting',
                    'ArchATTDSetting' => 'CD_ArchATTDSetting',
                    'ArchArAMgSetting' => 'CD_ArchArAMgSetting',
                    'ArchArATPdSetting' => 'CD_ArchArATPdSetting',
                    'ArchArACtPdSetting' => 'CD_ArchArACtPdSetting',
                    'ArchATTFsSetting' => 'CD_ArchATTFsSetting',
                    'ArchATTFwSetting' => 'CD_ArchATTFwSetting',
                    'ArchATTAnSetting' => 'CD_ArchATTAnSetting',
                    'ArchATTControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchATTControll"]["label"],
                        'section'  => 'CD_ArchALNSection',
                        'settings' => 'CD_ArchATTSetting'
                    ),
                    'ArchATTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchATTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchATTDSetting',
                        'default'   => 'left',
                        'choices'     =>  array(
                            'left'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATTDControll"]["choices"]["left"] ),
                            'center'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATTDControll"]["choices"]["right"] )
                        )
                    ),
                    'ArchArATPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchArATPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumntitlepadding
                    ),
                    'ArchArACtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchArACtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumncontentpadding
                    ),
                    'ArchArAMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchArAMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$maincolumtitlecontentnmargin
                    ),
                    'ArchATTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchATTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchATTFsSetting', 
                        'default'   => '30px',
                        'choices'     =>  Settings::ArFsize()
                    ),
                    'ArchATTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchATTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchATTFwSetting',
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'ArchATTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchATTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchALNSection', 
                        'settings'    => 'CD_ArchATTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    //関連記事一覧 色の調整
                    'ArchATBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchATBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'archive_design_panel'
                    ),
                    'ArchATBgSetting' => 'CD_ArchATBgSetting',
                    'ArchATCSetting' => 'CD_ArchATCSetting',
                    'ArchABgSetting' => 'CD_ArchABgSetting',
                    'ArchAEBgSetting' => 'CD_ArchAEBgSetting',
                    'ArchACCSetting' => 'CD_ArchACCSetting',
                    'ArchACBgSetting' => 'CD_ArchACBgSetting',
                    'ArchACDCSetting' => 'CD_ArchACDCSetting',
                    'ArchAPTCSetting' => 'CD_ArchAPTCSetting',
                    'ArchAThBCSetting' => 'CD_ArchAThBCSetting',
                    'ArchATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'default3-8' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchACDCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchAPTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchAThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'ArchATBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchATBgControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchATBgSetting'
                    ),
                    'ArchATCControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchATCControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchATCSetting'
                    ),
                    'ArchABgControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchABgControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchABgSetting'
                    ),
                    'ArchAEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchAEBgControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchAEBgSetting'
                    ),
                    'ArchACDCControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchACDCControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchACDCSetting'
                    ),
                    'ArchAPTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchAPTCControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchAPTCSetting'
                    ),
                    'ArchAThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeArchiveArticle"]["ArchAThBCControll"]["label"],
                        'section'    => 'CD_ArchATBgSection',
                        'settings'   => 'CD_ArchAThBCSetting'
                    ),

                    'ArchAAnSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchAAnSection"]["title"], 'theme_slug' ),
                        'panel'    => 'archive_design_panel'
                    ),
                    'ArchAAnSetting' => 'CD_ArchAAnSetting',
                    'ArchAAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchAAnSection', 
                        'settings'    => 'CD_ArchAAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    ),

                    //関連記事一覧 影の設定
                    'ArchAShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'archive_design_panel'
                    ),
                    'ArchAShdSetting' => 'CD_ArchAShdSetting',
                    'ArchAShdLvSetting' => 'CD_ArchAShdLvSetting',
                    'ArchAShdInSetting' => 'CD_ArchAShdInSetting',
                    'ArchAShdLvInSetting' => 'CD_ArchAShdLvInSetting',
                    'ArchAShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchAShdSection', 
                        'settings'    => 'CD_ArchAShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdControll"]["choices"]["true"]
                        )
                    ),
                    'ArchAShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchAShdSection', 
                        'settings'    => 'CD_ArchAShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'ArchAShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchAShdSection', 
                        'settings'    => 'CD_ArchAShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdInControll"]["choices"]["true"]
                        )
                    ),
                    'ArchAShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeArchiveArticle"]["ArchAShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_ArchAShdSection', 
                        'settings'    => 'CD_ArchAShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            $wp_customize->add_panel('archive_design_panel', $settings['pagelayouttemplate']['panel']);
            $wp_customize->add_section('CD_ArchADSection', $settings['pagelayouttemplate']['ArchADSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchADSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchADSPSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATDSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAWBRSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchACBRSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchADSetting', $settings['pagelayouttemplate']['ArchADControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchADSPSetting', $settings['pagelayouttemplate']['ArchADSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchATDSetting', $settings['pagelayouttemplate']['ArchATDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAWBRSetting', $settings['pagelayouttemplate']['ArchAWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchACBRSetting', $settings['pagelayouttemplate']['ArchACBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAThBDSetting', $settings['pagelayouttemplate']['ArchAThBDControll']));

            //関連記事一覧 表示数、タイトル(上)、(下)の設定
            $wp_customize->add_section('CD_ArchALNSection', $settings['pagelayouttemplate']['ArchALNSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchALNSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATTSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATTDSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATTFsSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATTFwSetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchALNSetting', $settings['pagelayouttemplate']['ArchALNControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchATTSetting', $settings['pagelayouttemplate']['ArchATTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchATTDSetting', $settings['pagelayouttemplate']['ArchATTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchATTFsSetting', $settings['pagelayouttemplate']['ArchATTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchATTFwSetting', $settings['pagelayouttemplate']['ArchATTFwControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchATTAnSetting', $settings['pagelayouttemplate']['ArchATTAnControll']));

            //関連記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_ArchArAMgSection', $settings['pagelayouttemplate']['ArchArAMgSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchArAMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchArAMgSetting', $settings['pagelayouttemplate']['ArchArAMgControll']));

            //関連記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_ArchArATPdSection', $settings['pagelayouttemplate']['ArchArATPdSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchArATPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchArATPdSetting', $settings['pagelayouttemplate']['ArchArATPdControll']));

            //関連記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_ArchArACtPdSection', $settings['pagelayouttemplate']['ArchArACtPdSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchArACtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchArACtPdSetting', $settings['pagelayouttemplate']['ArchArACtPdControll']));

            //関連記事一覧　背景画像の設定
            $wp_customize->add_section('ArchABgImg_section', $settings['pagelayouttemplate']['ArchABgImgsection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchABgImgsetting']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchABgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'ArchABgImg_setting', $settings['pagelayouttemplate']['ArchABgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'ArchABgImgSt_setting', $settings['pagelayouttemplate']['ArchABgImgStcontroll']));

            //関連記事一覧 色の調整
            $wp_customize->add_section('CD_ArchATBgSection', $settings['pagelayouttemplate']['ArchATBgSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATBgSetting'], $settings['pagelayouttemplate']['ArchATBgDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchATCSetting'], $settings['pagelayouttemplate']['ArchATCDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchABgSetting'], $settings['pagelayouttemplate']['ArchABgDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAEBgSetting'], $settings['pagelayouttemplate']['ArchAEBgDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchACCSetting'], $settings['pagelayouttemplate']['ArchACCDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchACBgSetting'], $settings['pagelayouttemplate']['default3-8']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchACDCSetting'], $settings['pagelayouttemplate']['ArchACDCDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAPTCSetting'], $settings['pagelayouttemplate']['ArchAPTCDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAThBCSetting'], $settings['pagelayouttemplate']['ArchAThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchATBgSetting', $settings['pagelayouttemplate']['ArchATBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchATCSetting', $settings['pagelayouttemplate']['ArchATCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchABgSetting', $settings['pagelayouttemplate']['ArchABgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchAEBgSetting', $settings['pagelayouttemplate']['ArchAEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchACDCSetting', $settings['pagelayouttemplate']['ArchACDCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchAPTCSetting', $settings['pagelayouttemplate']['ArchAPTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_ArchAThBCSetting', $settings['pagelayouttemplate']['ArchAThBCControll']));

            //関連記事一覧 影の調整
            $wp_customize->add_section('CD_ArchAShdSection', $settings['pagelayouttemplate']['ArchAShdSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAShdSetting'], $settings['pagelayouttemplate']['ArchAShdDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAShdLvSetting'], $settings['pagelayouttemplate']['ArchAShdLvDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAShdInSetting'], $settings['pagelayouttemplate']['ArchAShdInDefault']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAShdLvInSetting'], $settings['pagelayouttemplate']['ArchAShdLvInDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAShdSetting', $settings['pagelayouttemplate']['ArchAShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAShdLvSetting', $settings['pagelayouttemplate']['ArchAShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAShdInSetting', $settings['pagelayouttemplate']['ArchAShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAShdLvInSetting', $settings['pagelayouttemplate']['ArchAShdLvInControll']));

            //関連記事一覧 コンテンツのアニメーション
            $wp_customize->add_section('CD_ArchAAnSection', $settings['pagelayouttemplate']['ArchAAnSection']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['ArchAAnSetting'], $settings['pagelayouttemplate']['ArchAAnDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_ArchAAnSetting', $settings['pagelayouttemplate']['ArchAAnControll']));
        }
        public static function Values(){
            return (object)[
                'ArchiveArticleNumber' => !get_theme_mod('CD_ArchALNSetting') ? 5 : get_theme_mod('CD_ArchALNSetting'),
                'ArchiveArticleTemplate' => !get_theme_mod('CD_ArchADSetting') ? 'pt1' : get_theme_mod('CD_ArchADSetting'),
                'ArchiveArticleSPTemplate' => !get_theme_mod('CD_ArchADSPSetting') ? 'pt1' : get_theme_mod('CD_ArchADSPSetting'),
                'SetArchiveArticleTagDesign' => !get_theme_mod('CD_ArchATDSetting') ? 'pt1' : get_theme_mod('CD_ArchATDSetting'),
                'SetArchiveArticleWRadius' => !get_theme_mod('CD_ArchAWBRSetting') ? '0px' : get_theme_mod('CD_ArchAWBRSetting'),
                'SetArchiveArticleCRadius' => !get_theme_mod('CD_ArchACBRSetting') ? '0px' : get_theme_mod('CD_ArchACBRSetting'),

                //タイトルブロックと記事一覧の余白の間隔
                'ArchiveArticleAreaTitleMargin' => !get_theme_mod('CD_ArchArAMgSetting') ? '.2rem' : get_theme_mod('CD_ArchArAMgSetting'),

                //タイトルブロックの余白
                'ArchiveArticleAreaTitlePadding' => !get_theme_mod('CD_ArchArATPdSetting') ? '.5rem' : get_theme_mod('CD_ArchArATPdSetting'),

                //コンテンツの余白
                'ArchiveArticleAreaContentPadding' => !get_theme_mod('CD_ArchArACtPdSetting') ? '.5rem' : get_theme_mod('CD_ArchArACtPdSetting'),
                
                //背景画像の設定
                'SetArchABgImg' => !get_theme_mod('ArchABgImg_setting') ? NULL : get_theme_mod('ArchABgImg_setting'),
                'SetArchABgImgStatus' => !get_theme_mod('ArchABgImgSt_setting') ? '' : get_theme_mod('ArchABgImgSt_setting'),

                'ArchiveArticleTitle' => !get_theme_mod('CD_ArchATTSetting') ? '' : get_theme_mod('CD_ArchATTSetting'),
                'ArchiveArticleTitleDir' => !get_theme_mod('CD_ArchATTDSetting') ? 'left' : get_theme_mod('CD_ArchATTDSetting'),
                'ArchiveArticleTitleFontSize' => !get_theme_mod('CD_ArchATTFsSetting') ? '30px' : get_theme_mod('CD_ArchATTFsSetting'),
                'ArchiveArticleTitleFontWeight' => !get_theme_mod('CD_ArchATTFwSetting') ? 'normal' : get_theme_mod('CD_ArchATTFwSetting'),
                'ArchiveArticleTitleFontAnimation' => !get_theme_mod('CD_ArchATTAnSetting') ? 'none' : get_theme_mod('CD_ArchATTAnSetting'),
                'ArchiveArticleTitleBackground' => !get_theme_mod('CD_ArchATBgSetting') ? '#ffffff' : get_theme_mod('CD_ArchATBgSetting'),
                'ArchiveArticleFontColor' => !get_theme_mod('CD_ArchATCSetting') ? '#212529' : get_theme_mod('CD_ArchATCSetting'),
                'ArchiveArticleBackground' => !get_theme_mod('CD_ArchABgSetting') ? '#f4f4f4' : get_theme_mod('CD_ArchABgSetting'),
                'ArchiveArticleAnimation' => !get_theme_mod('CD_ArchAAnSetting') ? 'none' : get_theme_mod('CD_ArchAAnSetting'),
                'SetArchiveArticleEachBackground' => !get_theme_mod('CD_ArchAEBgSetting') ? '#ffffff' : get_theme_mod('CD_ArchAEBgSetting'),
                'SetArchiveArticleCatLinkColor' => !get_theme_mod('CD_ArchACCSetting') ? '#ffffff' : get_theme_mod('CD_ArchACCSetting'),
                'SetArchiveArticleCatLinkBackgroundColor' => !get_theme_mod('CD_ArchACBgSetting') ? '#212529' : get_theme_mod('CD_ArchACBgSetting'),
                'SetArchiveArticleDateFontColor' => !get_theme_mod('CD_ArchACDCSetting') ? '#212529' : get_theme_mod('CD_ArchACDCSetting'),
                'SetArchiveArticleTitleFontColor' => !get_theme_mod('CD_ArchAPTCSetting') ? '#212529' : get_theme_mod('CD_ArchAPTCSetting'),
                'SetArchiveArticleThumbBorderColor' => !get_theme_mod('CD_ArchAThBCSetting') ? '#212529' : get_theme_mod('CD_ArchAThBCSetting'),
                'SetArchiveArticleAreaShadow' => !get_theme_mod('CD_ArchAShdSetting') ? 'false' : get_theme_mod('CD_ArchAShdSetting'),
                'SetArchiveArticleAreaShadowLevel' => !get_theme_mod('CD_ArchAShdLvSetting') ? '0.5' : get_theme_mod('CD_ArchAShdLvSetting'),
                'SetArchiveArticleAreaContentShadow' => !get_theme_mod('CD_ArchAShdInSetting') ? 'false' : get_theme_mod('CD_ArchAShdInSetting'),
                'SetArchiveArticleAreaContentShadowLevel' => !get_theme_mod('CD_ArchAShdLvInSetting') ? '0.5' : get_theme_mod('CD_ArchAShdLvInSetting')
            ];
        }
    }
    new CustomizePageLayout();
?>