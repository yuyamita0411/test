<?php
    class CustomizeSideColumnNewestArticleArea{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'sidecolumntemplate' => array(
                    //関連記事一覧 デザイン
                    'SCNArADSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArADSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCNArADSetting' => 'CD_SCNArADSetting',
                    'SCNArADSPSetting' => 'CD_SCNArADSPSetting',
                    'SCNArATDSetting' => 'CD_SCNArATDSetting',
                    'SCNArAWBRSetting' => 'CD_SCNArAWBRSetting',
                    'SCNArACBRSetting' => 'CD_SCNArACBRSetting',
                    'SCNArAThBDSetting' => 'CD_SCNArAThBDSetting',
                    'SCNArADControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArADControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCNArADSection', 
                        'settings'    => 'CD_SCNArADSetting',
                        'default'   => 'pt7',
                        'choices'     =>  Settings::$SideColumnPCLayout
                    ),
                    'SCNArADSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArADSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCNArADSection', 
                        'settings'    => 'CD_SCNArADSPSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$SideColumnSPLayout
                    ),
                    'SCNArATDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCNArADSection', 
                        'settings'    => 'CD_SCNArATDSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATDControll"]["choices"]["pt3"] ),
                            'none'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATDControll"]["choices"]["none"] )
                        )
                    ),
                    'SCNArAWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArADSection', 
                        'settings'    => 'CD_SCNArAWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'SCNArACBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArACBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArADSection', 
                        'settings'    => 'CD_SCNArACBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'SCNArAThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCNArADSection', 
                        'settings'    => 'CD_SCNArAThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAThBDControll"]["choices"]["false"] )
                        )
                    ),
                    //最新記事全体の余白
                    'SCNArAPdSection' => array(
                        'title'    => __( '最新記事全体の余白を設定する', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCNArAPdSetting' => 'CD_SCNArAPdSetting',
                    'SCNArAPdControll' => array(
                        'label'       => '最新記事全体の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArAPdSection', 
                        'settings'    => 'CD_SCNArAPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumnpadding
                    ),
                    //関連記事一覧 表示数、タイトル(上)、(下)の設定
                    'SCNArALNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArALNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCNArALNSetting' => 'CD_SCNArALNSetting',
                    'SCNArATPdSetting' => 'CD_SCNArATPdSetting',
                    'SCNArACtPdSetting' => 'CD_SCNArACtPdSetting',
                    'SCNArAMgSetting' => 'CD_SCNArAMgSetting',
                    'SCNArATTSetting' => 'CD_SCNArATTSetting',
                    'SCNArATTDSetting' => 'CD_SCNArATTDSetting',
                    'SCNArATTFsSetting' => 'CD_SCNArATTFsSetting',
                    'SCNArATTAnSetting' => 'CD_SCNArATTAnSetting',
                    'SCNArABTSetting' => 'CD_SCNArABTSetting',
                    'SCNArABTFsSetting' => 'CD_SCNArABTFsSetting',
                    'SCNArABTDSetting' => 'CD_SCNArABTDSetting',
                    'SCNArABTAnSetting' => 'CD_SCNArABTAnSetting',
                    'SCNArALNControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArALNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArALNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'SCNArATPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArATPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumntitlepadding
                    ),
                    'SCNArACtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArACtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumncontentpadding
                    ),
                    'SCNArAMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArAMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$sidecolumtitlecontentnmargin
                    ),
                    'SCNArATTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTControll"]["label"],
                        'section'  => 'CD_SCNArALNSection',
                        'settings' => 'CD_SCNArATTSetting'
                    ),
                    'SCNArATTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArATTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCNArATTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArATTFsSetting',
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCNArATTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArATTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'SCNArABTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABTControll"]["label"],
                        'section'  => 'CD_SCNArALNSection',
                        'settings' => 'CD_SCNArABTSetting'
                    ),
                    'SCNArABTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArABTFsSetting', 
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCNArABTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArABTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCNArABTAnControll' => array(
                        'label'       => '見出しタイトル(下)のアニメーションを選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArALNSection', 
                        'settings'    => 'CD_SCNArABTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //関連記事一覧 背景画像の設定
                    'SCNArABgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCNArABgImgsetting' => 'SCNArABgImg_setting',
                    'SCNArABgImgStsetting' => 'SCNArABgImgSt_setting',
                    'SCNArABgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABgImgcontroll"]["label"],
                        'section' => 'SCNArABgImg_section',
                        'settings' => 'SCNArABgImg_setting',
                    ),
                    'SCNArABgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'SCNArABgImg_section', 
                        'settings'    => 'SCNArABgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),
                    
                    //関連記事一覧 色の調整
                    'SCNArATBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCNArATBgSetting' => 'CD_SCNArATBgSetting',
                    'SCNArATCSetting' => 'CD_SCNArATCSetting',
                    'SCNArABgSetting' => 'CD_SCNArABgSetting',
                    'SCNArAEBgSetting' => 'CD_SCNArAEBgSetting',
                    'SCNArACCSetting' => 'CD_SCNArACCSetting',
                    'SCNArACBgSetting' => 'CD_SCNArACBgSetting',
                    'SCNArADCSetting' => 'CD_SCNArADCSetting',
                    'SCNArAPCSetting' => 'CD_SCNArAPCSetting',
                    'SCNArAThBCSetting' => 'CD_SCNArAThBCSetting',
                    'SCNArATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArACBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArADCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArAPCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArAThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCNArATBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATBgControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArATBgSetting'
                    ),
                    'SCNArATCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArATCControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArATCSetting'
                    ),
                    'SCNArABgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArABgControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArABgSetting'
                    ),
                    'SCNArAEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAEBgControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArAEBgSetting'
                    ),
                    'SCNArADCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArADCControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArADCSetting'
                    ),
                    'SCNArAPCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAPCControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArAPCSetting'
                    ),
                    'SCNArAThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAThBCControll"]["label"],
                        'section'    => 'CD_SCNArATBgSection',
                        'settings'   => 'CD_SCNArAThBCSetting'
                    ),

                    //最新記事一覧 影の設定
                    'SCNArAShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCNArAShdSetting' => 'CD_SCNArAShdSetting',
                    'SCNArAShdLvSetting' => 'CD_SCNArAShdLvSetting',
                    'SCNArAShdInSetting' => 'CD_SCNArAShdInSetting',
                    'SCNArAShdLvInSetting' => 'CD_SCNArAShdLvInSetting',
                    'SCNArAShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArAShdSection', 
                        'settings'    => 'CD_SCNArAShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdControll"]["choices"]["true"]
                        )
                    ),
                    'SCNArAShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArAShdSection', 
                        'settings'    => 'CD_SCNArAShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'SCNArAShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArAShdSection', 
                        'settings'    => 'CD_SCNArAShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdInControll"]["choices"]["true"]
                        )
                    ),
                    'SCNArAShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnNewestArticleArea"]["SCNArAShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCNArAShdSection', 
                        'settings'    => 'CD_SCNArAShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            //関連記事一覧 デザイン
            $wp_customize->add_section('CD_SCNArADSection', $settings['sidecolumntemplate']['SCNArADSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArADSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArADSPSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAWBRSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArACBRSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArADSetting', $settings['sidecolumntemplate']['SCNArADControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArADSPSetting', $settings['sidecolumntemplate']['SCNArADSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArATDSetting', $settings['sidecolumntemplate']['SCNArATDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAWBRSetting', $settings['sidecolumntemplate']['SCNArAWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArACBRSetting', $settings['sidecolumntemplate']['SCNArACBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAThBDSetting', $settings['sidecolumntemplate']['SCNArAThBDControll']));

            //最新記事全体の余白
            $wp_customize->add_section('CD_SCNArAPdSection', $settings['sidecolumntemplate']['SCNArAPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAPdSetting', $settings['sidecolumntemplate']['SCNArAPdControll']));

            //最新記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_SCNArAMgSection', $settings['sidecolumntemplate']['SCNArAMgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAMgSetting', $settings['sidecolumntemplate']['SCNArAMgControll']));

            //最新記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_SCNArATPdSection', $settings['sidecolumntemplate']['SCNArATPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArATPdSetting', $settings['sidecolumntemplate']['SCNArATPdControll']));

            //最新記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_SCNArACtPdSection', $settings['sidecolumntemplate']['SCNArACtPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArACtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArACtPdSetting', $settings['sidecolumntemplate']['SCNArACtPdControll']));

            //関連記事一覧 表示する記事の数
            $wp_customize->add_section('CD_SCNArALNSection', $settings['sidecolumntemplate']['SCNArALNSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArALNSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArALNSetting', $settings['sidecolumntemplate']['SCNArALNControll']));

            //関連記事一覧 見出しタイトル(上)の修正
            $wp_customize->add_section('CD_SCNArATTSection', $settings['sidecolumntemplate']['SCNArATTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArATTSetting', $settings['sidecolumntemplate']['SCNArATTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArATTDSetting', $settings['sidecolumntemplate']['SCNArATTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArATTFsSetting', $settings['sidecolumntemplate']['SCNArATTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArATTAnSetting', $settings['sidecolumntemplate']['SCNArATTAnControll']));

            //関連記事一覧 見出しタイトル(下)の修正
            $wp_customize->add_section('CD_SCNArABTSection', $settings['sidecolumntemplate']['SCNArABTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArABTSetting', $settings['sidecolumntemplate']['SCNArABTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArABTFsSetting', $settings['sidecolumntemplate']['SCNArABTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArABTDSetting', $settings['sidecolumntemplate']['SCNArABTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArABTAnSetting', $settings['sidecolumntemplate']['SCNArABTAnControll']));

            //関連記事一覧 背景画像の設定
            $wp_customize->add_section('SCNArABgImg_section', $settings['sidecolumntemplate']['SCNArABgImgsection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABgImgsetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'SCNArABgImg_setting', $settings['sidecolumntemplate']['SCNArABgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SCNArABgImgSt_setting', $settings['sidecolumntemplate']['SCNArABgImgStcontroll']));

            //関連記事一覧 色の調整
            $wp_customize->add_section('CD_SCNArATBgSection', $settings['sidecolumntemplate']['SCNArATBgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATBgSetting'], $settings['sidecolumntemplate']['SCNArATBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArATCSetting'], $settings['sidecolumntemplate']['SCNArATCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArABgSetting'], $settings['sidecolumntemplate']['SCNArABgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAEBgSetting'], $settings['sidecolumntemplate']['SCNArAEBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArACCSetting'], $settings['sidecolumntemplate']['SCNArACCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArACBgSetting'], $settings['sidecolumntemplate']['SCNArACBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArADCSetting'], $settings['sidecolumntemplate']['SCNArADCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAPCSetting'], $settings['sidecolumntemplate']['SCNArAPCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArATBgSetting', $settings['sidecolumntemplate']['SCNArATBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArATCSetting', $settings['sidecolumntemplate']['SCNArATCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArABgSetting', $settings['sidecolumntemplate']['SCNArABgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArAEBgSetting', $settings['sidecolumntemplate']['SCNArAEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArADCSetting', $settings['sidecolumntemplate']['SCNArADCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArAPCSetting', $settings['sidecolumntemplate']['SCNArAPCControll']));

            //関連記事一覧 影の調整
            $wp_customize->add_section('CD_SCNArAShdSection', $settings['sidecolumntemplate']['SCNArAShdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAShdSetting'], $settings['sidecolumntemplate']['SCNArAShdDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAShdLvSetting'], $settings['sidecolumntemplate']['SCNArAShdLvDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAShdInSetting'], $settings['sidecolumntemplate']['SCNArAShdInDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAShdLvInSetting'], $settings['sidecolumntemplate']['SCNArAShdLvInDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCNArAThBCSetting'], $settings['sidecolumntemplate']['SCNArAThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAShdSetting', $settings['sidecolumntemplate']['SCNArAShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAShdLvSetting', $settings['sidecolumntemplate']['SCNArAShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAShdInSetting', $settings['sidecolumntemplate']['SCNArAShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCNArAShdLvInSetting', $settings['sidecolumntemplate']['SCNArAShdLvInControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCNArAThBCSetting', $settings['sidecolumntemplate']['SCNArAThBCControll']));
        }

        public static function Values(){
            return (object)[
                //関連記事一覧 デザイン
                'NewestArticleAreaSidebarTemplate' => !get_theme_mod('CD_SCNArADSetting') ? 'pt7' : get_theme_mod('CD_SCNArADSetting'),
                'NewestArticleAreaSPSidebarTemplate' => !get_theme_mod('CD_SCNArADSPSetting') ? 'pt1' : get_theme_mod('CD_SCNArADSPSetting'),
                'SetNewestArticleAreaSidebarTagDesign' => !get_theme_mod('CD_SCNArATDSetting') ? 'pt1' : get_theme_mod('CD_SCNArATDSetting'),
                'SetNewestArticleAreaWRadius' => !get_theme_mod('CD_SCNArAWBRSetting') ? '0px' : get_theme_mod('CD_SCNArAWBRSetting'),
                'SetNewestArticleAreaCRadius' => !get_theme_mod('CD_SCNArACBRSetting') ? '0px' : get_theme_mod('CD_SCNArACBRSetting'),
                'SetNewestArticleAreaThumBorder' => !get_theme_mod('CD_SCNArAThBDSetting') ? 'true' : get_theme_mod('CD_SCNArAThBDSetting'),

                //最新記事の余白
                'NewestArticleAreaPadding' => !get_theme_mod('CD_SCNArAPdSetting') ? '.5rem' : get_theme_mod('CD_SCNArAPdSetting'),

                //最新記事一覧 タイトルブロックと記事一覧の余白の間隔
                'NewestArticleAreaTitleBottomMargin' => !get_theme_mod('CD_SCNArAMgSetting') ? '.2rem' : get_theme_mod('CD_SCNArAMgSetting'),

                //最新記事一覧 タイトルブロックの余白
                'NewestArticleAreaTitlePadding' => !get_theme_mod('CD_SCNArATPdSetting') ? '.5rem' : get_theme_mod('CD_SCNArATPdSetting'),

                //最新記事一覧 コンテンツの余白
                'NewestArticleAreaContentPadding' => !get_theme_mod('CD_SCNArACtPdSetting') ? '.5rem' : get_theme_mod('CD_SCNArACtPdSetting'),

                //関連記事一覧 表示する記事の数
                'NewestArticleAreaNumber' => !get_theme_mod('CD_SCNArALNSetting') ? 5 : get_theme_mod('CD_SCNArALNSetting'),

                //関連記事一覧 見出しタイトル(上)の修正
                'NewestArticleAreaTitle' => !get_theme_mod('CD_SCNArATTSetting') ? '最新記事一覧' : get_theme_mod('CD_SCNArATTSetting'),
                'NewestArticleAreaTitleDir' => !get_theme_mod('CD_SCNArATTDSetting') ? 'center' : get_theme_mod('CD_SCNArATTDSetting'),
                'NewestArticleAreaTitleFontSize' => !get_theme_mod('CD_SCNArATTFsSetting') ? '18px' : get_theme_mod('CD_SCNArATTFsSetting'),
                'NewestArticleAreaTitleAnimation' => !get_theme_mod('CD_SCNArATTAnSetting') ? 'none' : get_theme_mod('CD_SCNArATTAnSetting'),

                //関連記事一覧 見出しタイトル(下)の修正
                'NewestArticleAreaBottomTitle' => !get_theme_mod('CD_SCNArABTSetting') ? 'New' : get_theme_mod('CD_SCNArABTSetting'),
                'NewestArticleAreaBottomTitleFontSize' => !get_theme_mod('CD_SCNArABTFsSetting') ? '16px' : get_theme_mod('CD_SCNArABTFsSetting'),
                'NewestArticleAreaBottomTitleDir' => !get_theme_mod('CD_SCNArABTDSetting') ? 'center' : get_theme_mod('CD_SCNArABTDSetting'),
                'NewestArticleAreaBottomTitleAnimation' => !get_theme_mod('CD_SCNArABTAnSetting') ? 'none' : get_theme_mod('CD_SCNArABTAnSetting'),

                //関連記事一覧 背景画像の設定
                'SetSCNArABgImg' => !get_theme_mod('SCNArABgImg_setting') ? NULL : get_theme_mod('SCNArABgImg_setting'),
                'SetSCNArABgImgStatus' => !get_theme_mod('SCNArABgImgSt_setting') ? '' : get_theme_mod('SCNArABgImgSt_setting'),

                //関連記事一覧 色の調整
                'NewestArticleAreaTitleBackground' => !get_theme_mod('CD_SCNArATBgSetting') ? '#ffffff' : get_theme_mod('CD_SCNArATBgSetting'),
                'NewestArticleAreaFontColor' => !get_theme_mod('CD_SCNArATCSetting') ? '#21252' : get_theme_mod('CD_SCNArATCSetting'),
                'NewestArticleAreaBackground' => !get_theme_mod('CD_SCNArABgSetting') ? '#f4f4f4' : get_theme_mod('CD_SCNArABgSetting'),
                'SetNewestArticleAreaEachBackground' => !get_theme_mod('CD_SCNArAEBgSetting') ? '#ffffff' : get_theme_mod('CD_SCNArAEBgSetting'),
                'SetNewestArticleAreaCatLinkColor' => !get_theme_mod('CD_SCNArACCSetting') ? '#ffffff' : get_theme_mod('CD_SCNArACCSetting'),
                'SetNewestArticleAreaCatLinkBackgroundColor' => !get_theme_mod('CD_SCNArACBgSetting') ? '#212529' : get_theme_mod('CD_SCNArACBgSetting'),
                'SetNewestArticleAreaDateFontColor' => !get_theme_mod('CD_SCNArADCSetting') ? '#212529' : get_theme_mod('CD_SCNArADCSetting'),
                'SetNewestArticleAreaTitleFontColor' => !get_theme_mod('CD_SCNArAPCSetting') ? '#212529' : get_theme_mod('CD_SCNArAPCSetting'),

                //最新記事一覧　影の調整
                'SetNewestArticleAreaShadow' => !get_theme_mod('CD_SCNArAShdSetting') ? 'false' : get_theme_mod('CD_SCNArAShdSetting'),
                'SetNewestArticleAreaShadowLevel' => !get_theme_mod('CD_SCNArAShdLvSetting') ? '0.5' : get_theme_mod('CD_SCNArAShdLvSetting'),
                'SetNewestArticleAreaContentShadow' => !get_theme_mod('CD_SCNArAShdInSetting') ? 'false' : get_theme_mod('CD_SCNArAShdInSetting'),
                'SetNewestArticleAreaContentShadowLevel' => !get_theme_mod('CD_SCNArAShdLvInSetting') ? '0.5' : get_theme_mod('CD_SCNArAShdLvInSetting'),
                'SetNewestArticleAreaThumbBorderColor' => !get_theme_mod('CD_SCNArAThBCSetting') ? '#212529' : get_theme_mod('CD_SCNArAThBCSetting')
            ];
        }
    }
    new CustomizeSideColumnNewestArticleArea();
?>