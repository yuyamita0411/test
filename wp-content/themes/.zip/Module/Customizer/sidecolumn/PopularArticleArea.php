<?php
    class CustomizeSideColumnPopularArticleArea{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'sidecolumntemplate' => array(
                    //関連記事一覧 デザイン
                    'SCFArADSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArADSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCFArADSetting' => 'CD_SCFArADSetting',
                    'SCFArADSPSetting' => 'CD_SCFArADSPSetting',
                    'SCFArATDSetting' => 'CD_SCFArATDSetting',
                    'SCFArAWBRSetting' => 'CD_SCFArAWBRSetting',
                    'SCFArACBRSetting' => 'CD_SCFArACBRSetting',
                    'SCFArAThBDSetting' => 'CD_SCFArAThBDSetting',
                    'SCFArADControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArADControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCFArADSection', 
                        'settings'    => 'CD_SCFArADSetting',
                        'default'   => 'pt7',
                        'choices'     =>  Settings::$SideColumnPCLayout
                    ),
                    'SCFArADSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArADSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCFArADSection', 
                        'settings'    => 'CD_SCFArADSPSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$SideColumnSPLayout
                    ),
                    'SCFArATDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCFArADSection', 
                        'settings'    => 'CD_SCFArATDSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATDControll"]["choices"]["pt3"] ),
                            'none'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATDControll"]["choices"]["none"] )
                        )
                    ),
                    'SCFArAWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArADSection', 
                        'settings'    => 'CD_SCFArAWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'SCFArACBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArACBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArADSection', 
                        'settings'    => 'CD_SCFArACBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'SCFArAThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCFArADSection', 
                        'settings'    => 'CD_SCFArAThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAThBDControll"]["choices"]["false"] )
                        )
                    ),
                    //人気記事全体の余白
                    'SCFArAPdSection' => array(
                        'title'    => __( '人気記事全体の余白を設定する', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCFArAPdSetting' => 'CD_SCFArAPdSetting',
                    'SCFArAPdControll' => array(
                        'label'       => '人気記事全体の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArAPdSection', 
                        'settings'    => 'CD_SCFArAPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumnpadding
                    ),
                    //関連記事一覧 表示数、タイトル(上)、(下)の設定
                    'SCFArALNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArALNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCFArALNSetting' => 'CD_SCFArALNSetting',
                    'SCFArATPdSetting' => 'CD_SCFArATPdSetting',
                    'SCFArACtPdSetting' => 'CD_SCFArACtPdSetting',
                    'SCFArAMgSetting' => 'CD_SCFArAMgSetting',
                    'SCFArATTSetting' => 'CD_SCFArATTSetting',
                    'SCFArATTDSetting' => 'CD_SCFArATTDSetting',
                    'SCFArATTFsSetting' => 'CD_SCFArATTFsSetting',
                    'SCFArATTAnSetting' => 'CD_SCFArATTAnSetting',
                    'SCFArABTSetting' => 'CD_SCFArABTSetting',
                    'SCFArABTFsSetting' => 'CD_SCFArABTFsSetting',
                    'SCFArABTDSetting' => 'CD_SCFArABTDSetting',
                    'SCFArABTAnSetting' => 'CD_SCFArABTAnSetting',
                    'SCFArALNControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArALNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArALNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'SCFArATPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArATPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumntitlepadding
                    ),
                    'SCFArACtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArACtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumncontentpadding
                    ),
                    'SCFArAMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArAMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$sidecolumtitlecontentnmargin
                    ),
                    'SCFArATTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTControll"]["label"],
                        'section'  => 'CD_SCFArALNSection',
                        'settings' => 'CD_SCFArATTSetting'
                    ),
                    'SCFArATTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArATTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCFArATTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArATTFsSetting',
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCFArATTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArATTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'SCFArABTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABTControll"]["label"],
                        'section'  => 'CD_SCFArALNSection',
                        'settings' => 'CD_SCFArABTSetting'
                    ),
                    'SCFArABTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArABTFsSetting', 
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCFArABTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArABTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCFArABTAnControll' => array(
                        'label'       => '見出しタイトル(下)のアニメーションを選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArALNSection', 
                        'settings'    => 'CD_SCFArABTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //関連記事一覧 背景画像の設定
                    'SCFArABgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCFArABgImgsetting' => 'SCFArABgImg_setting',
                    'SCFArABgImgStsetting' => 'SCFArABgImgSt_setting',
                    'SCFArABgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABgImgcontroll"]["label"],
                        'section' => 'SCFArABgImg_section',
                        'settings' => 'SCFArABgImg_setting',
                    ),
                    'SCFArABgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'SCFArABgImg_section', 
                        'settings'    => 'SCFArABgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),
                    
                    //関連記事一覧 色の調整
                    'SCFArATBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCFArATBgSetting' => 'CD_SCFArATBgSetting',
                    'SCFArATCSetting' => 'CD_SCFArATCSetting',
                    'SCFArABgSetting' => 'CD_SCFArABgSetting',
                    'SCFArAEBgSetting' => 'CD_SCFArAEBgSetting',
                    'SCFArACCSetting' => 'CD_SCFArACCSetting',
                    'SCFArACBgSetting' => 'CD_SCFArACBgSetting',
                    'SCFArADCSetting' => 'CD_SCFArADCSetting',
                    'SCFArAPCSetting' => 'CD_SCFArAPCSetting',
                    'SCFArAThBCSetting' => 'CD_SCFArAThBCSetting',
                    'SCFArATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArACBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArADCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArAPCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArAThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCFArATBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATBgControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArATBgSetting'
                    ),
                    'SCFArATCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArATCControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArATCSetting'
                    ),
                    'SCFArABgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArABgControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArABgSetting'
                    ),
                    'SCFArAEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAEBgControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArAEBgSetting'
                    ),
                    'SCFArADCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArADCControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArADCSetting'
                    ),
                    'SCFArAPCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAPCControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArAPCSetting'
                    ),
                    'SCFArAThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAThBCControll"]["label"],
                        'section'    => 'CD_SCFArATBgSection',
                        'settings'   => 'CD_SCFArAThBCSetting'
                    ),

                    //関連記事一覧 影の設定
                    'SCFArAShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCFArAShdSetting' => 'CD_SCFArAShdSetting',
                    'SCFArAShdLvSetting' => 'CD_SCFArAShdLvSetting',
                    'SCFArAShdInSetting' => 'CD_SCFArAShdInSetting',
                    'SCFArAShdLvInSetting' => 'CD_SCFArAShdLvInSetting',
                    'SCFArAShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArAShdSection', 
                        'settings'    => 'CD_SCFArAShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdControll"]["choices"]["true"]
                        )
                    ),
                    'SCFArAShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArAShdSection', 
                        'settings'    => 'CD_SCFArAShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'SCFArAShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArAShdSection', 
                        'settings'    => 'CD_SCFArAShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdInControll"]["choices"]["true"]
                        )
                    ),
                    'SCFArAShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnPopularArticleArea"]["SCFArAShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCFArAShdSection', 
                        'settings'    => 'CD_SCFArAShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            //関連記事一覧 デザイン
            $wp_customize->add_section('CD_SCFArADSection', $settings['sidecolumntemplate']['SCFArADSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArADSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArADSPSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAWBRSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArACBRSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArADSetting', $settings['sidecolumntemplate']['SCFArADControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArADSPSetting', $settings['sidecolumntemplate']['SCFArADSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArATDSetting', $settings['sidecolumntemplate']['SCFArATDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAWBRSetting', $settings['sidecolumntemplate']['SCFArAWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArACBRSetting', $settings['sidecolumntemplate']['SCFArACBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAThBDSetting', $settings['sidecolumntemplate']['SCFArAThBDControll']));

            //人気記事全体の余白
            $wp_customize->add_section('CD_SCFArAPdSection', $settings['sidecolumntemplate']['SCFArAPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAPdSetting', $settings['sidecolumntemplate']['SCFArAPdControll']));

            //人気記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_SCFArAMgSection', $settings['sidecolumntemplate']['SCFArAMgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAMgSetting', $settings['sidecolumntemplate']['SCFArAMgControll']));

            //人気記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_SCFArATPdSection', $settings['sidecolumntemplate']['SCFArATPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArATPdSetting', $settings['sidecolumntemplate']['SCFArATPdControll']));

            //人気記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_SCFArACtPdSection', $settings['sidecolumntemplate']['SCFArACtPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArACtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArACtPdSetting', $settings['sidecolumntemplate']['SCFArACtPdControll']));

            //関連記事一覧 表示する記事の数
            $wp_customize->add_section('CD_SCFArALNSection', $settings['sidecolumntemplate']['SCFArALNSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArALNSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArALNSetting', $settings['sidecolumntemplate']['SCFArALNControll']));

            //関連記事一覧 見出しタイトル(上)の修正
            $wp_customize->add_section('CD_SCFArATTSection', $settings['sidecolumntemplate']['SCFArATTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArATTSetting', $settings['sidecolumntemplate']['SCFArATTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArATTDSetting', $settings['sidecolumntemplate']['SCFArATTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArATTFsSetting', $settings['sidecolumntemplate']['SCFArATTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArATTAnSetting', $settings['sidecolumntemplate']['SCFArATTAnControll']));

            //関連記事一覧 見出しタイトル(下)の修正
            $wp_customize->add_section('CD_SCFArABTSection', $settings['sidecolumntemplate']['SCFArABTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArABTSetting', $settings['sidecolumntemplate']['SCFArABTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArABTFsSetting', $settings['sidecolumntemplate']['SCFArABTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArABTDSetting', $settings['sidecolumntemplate']['SCFArABTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArABTAnSetting', $settings['sidecolumntemplate']['SCFArABTAnControll']));

            //関連記事一覧 背景画像の設定
            $wp_customize->add_section('SCFArABgImg_section', $settings['sidecolumntemplate']['SCFArABgImgsection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABgImgsetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'SCFArABgImg_setting', $settings['sidecolumntemplate']['SCFArABgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SCFArABgImgSt_setting', $settings['sidecolumntemplate']['SCFArABgImgStcontroll']));

            //関連記事一覧 色の調整
            $wp_customize->add_section('CD_SCFArATBgSection', $settings['sidecolumntemplate']['SCFArATBgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATBgSetting'], $settings['sidecolumntemplate']['SCFArATBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArATCSetting'], $settings['sidecolumntemplate']['SCFArATCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArABgSetting'], $settings['sidecolumntemplate']['SCFArABgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAEBgSetting'], $settings['sidecolumntemplate']['SCFArAEBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArACCSetting'], $settings['sidecolumntemplate']['SCFArACCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArACBgSetting'], $settings['sidecolumntemplate']['SCFArACBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArADCSetting'], $settings['sidecolumntemplate']['SCFArADCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAPCSetting'], $settings['sidecolumntemplate']['SCFArAPCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArATBgSetting', $settings['sidecolumntemplate']['SCFArATBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArATCSetting', $settings['sidecolumntemplate']['SCFArATCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArABgSetting', $settings['sidecolumntemplate']['SCFArABgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArAEBgSetting', $settings['sidecolumntemplate']['SCFArAEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArACCSetting', $settings['sidecolumntemplate']['SCFArACCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArADCSetting', $settings['sidecolumntemplate']['SCFArADCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArAPCSetting', $settings['sidecolumntemplate']['SCFArAPCControll']));

            //関連記事一覧 影の調整
            $wp_customize->add_section('CD_SCFArAShdSection', $settings['sidecolumntemplate']['SCFArAShdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAShdSetting'], $settings['sidecolumntemplate']['SCFArAShdDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAShdLvSetting'], $settings['sidecolumntemplate']['SCFArAShdLvDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAShdInSetting'], $settings['sidecolumntemplate']['SCFArAShdInDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAShdLvInSetting'], $settings['sidecolumntemplate']['SCFArAShdLvInDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCFArAThBCSetting'], $settings['sidecolumntemplate']['SCFArAThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAShdSetting', $settings['sidecolumntemplate']['SCFArAShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAShdLvSetting', $settings['sidecolumntemplate']['SCFArAShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAShdInSetting', $settings['sidecolumntemplate']['SCFArAShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCFArAShdLvInSetting', $settings['sidecolumntemplate']['SCFArAShdLvInControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCFArAThBCSetting', $settings['sidecolumntemplate']['SCFArAThBCControll']));
        }

        public static function Values(){
            return (object)[
                //関連記事一覧 デザイン
                'PopularArticleAreaSidebarTemplate' => !get_theme_mod('CD_SCFArADSetting') ? 'pt7' : get_theme_mod('CD_SCFArADSetting'),
                'PopularArticleAreaSPSidebarTemplate' => !get_theme_mod('CD_SCFArADSPSetting') ? 'pt1' : get_theme_mod('CD_SCFArADSPSetting'),
                'SetPopularArticleAreaSidebarTagDesign' => !get_theme_mod('CD_SCFArATDSetting') ? 'pt1' : get_theme_mod('CD_SCFArATDSetting'),
                'SetPopularArticleAreaWRadius' => !get_theme_mod('CD_SCFArAWBRSetting') ? '0px' : get_theme_mod('CD_SCFArAWBRSetting'),
                'SetPopularArticleAreaCRadius' => !get_theme_mod('CD_SCFArACBRSetting') ? '0px' : get_theme_mod('CD_SCFArACBRSetting'),
                'SetPopularArticleAreaThumBorder' => !get_theme_mod('CD_SCFArAThBDSetting') ? 'true' : get_theme_mod('CD_SCFArAThBDSetting'),

                //人気記事の余白
                'PopularArticleAreaPadding' => !get_theme_mod('CD_SCFArAPdSetting') ? '.5rem' : get_theme_mod('CD_SCFArAPdSetting'),

                //人気記事一覧 タイトルブロックと記事一覧の余白の間隔
                'PopularArticleAreaTitleBottomMargin' => !get_theme_mod('CD_SCFArAMgSetting') ? '.2rem' : get_theme_mod('CD_SCFArAMgSetting'),

                //人気記事一覧 タイトルブロックの余白
                'PopularArticleAreaTitlePadding' => !get_theme_mod('CD_SCFArATPdSetting') ? '.5rem' : get_theme_mod('CD_SCFArATPdSetting'),

                //人気記事一覧 コンテンツの余白
                'PopularArticleAreaContentPadding' => !get_theme_mod('CD_SCFArACtPdSetting') ? '.5rem' : get_theme_mod('CD_SCFArACtPdSetting'),

                //関連記事一覧 表示する記事の数
                'PopularArticleAreaNumber' => !get_theme_mod('CD_SCFArALNSetting') ? 5 : get_theme_mod('CD_SCFArALNSetting'),

                //関連記事一覧 見出しタイトル(上)の修正
                'PopularArticleAreaTitle' => !get_theme_mod('CD_SCFArATTSetting') ? '人気記事一覧' : get_theme_mod('CD_SCFArATTSetting'),
                'PopularArticleAreaTitleDir' => !get_theme_mod('CD_SCFArATTDSetting') ? 'center' : get_theme_mod('CD_SCFArATTDSetting'),
                'PopularArticleAreaTitleFontSize' => !get_theme_mod('CD_SCFArATTFsSetting') ? '18px' : get_theme_mod('CD_SCFArATTFsSetting'),
                'PopularArticleAreaTitleAnimation' => !get_theme_mod('CD_SCFArATTAnSetting') ? 'none' : get_theme_mod('CD_SCFArATTAnSetting'),

                //関連記事一覧 見出しタイトル(下)の修正
                'PopularArticleAreaBottomTitle' => !get_theme_mod('CD_SCFArABTSetting') ? 'Popular' : get_theme_mod('CD_SCFArABTSetting'),
                'PopularArticleAreaBottomTitleFontSize' => !get_theme_mod('CD_SCFArABTFsSetting') ? '16px' : get_theme_mod('CD_SCFArABTFsSetting'),
                'PopularArticleAreaBottomTitleDir' => !get_theme_mod('CD_SCFArABTDSetting') ? 'center' : get_theme_mod('CD_SCFArABTDSetting'),
                'PopularArticleAreaBottomTitleAnimation' => !get_theme_mod('CD_SCFArABTAnSetting') ? 'none' : get_theme_mod('CD_SCFArABTAnSetting'),

                //関連記事一覧 背景画像の設定
                'SetSCFArABgImg' => !get_theme_mod('SCFArABgImg_setting') ? NULL : get_theme_mod('SCFArABgImg_setting'),
                'SetSCFArABgImgStatus' => !get_theme_mod('SCFArABgImgSt_setting') ? '' : get_theme_mod('SCFArABgImgSt_setting'),

                //関連記事一覧 色の調整
                'PopularArticleAreaTitleBackground' => !get_theme_mod('CD_SCFArATBgSetting') ? '#ffffff' : get_theme_mod('CD_SCFArATBgSetting'),
                'PopularArticleAreaFontColor' => !get_theme_mod('CD_SCFArATCSetting') ? '#21252' : get_theme_mod('CD_SCFArATCSetting'),
                'PopularArticleAreaBackground' => !get_theme_mod('CD_SCFArABgSetting') ? '#f4f4f4' : get_theme_mod('CD_SCFArABgSetting'),
                'SetPopularArticleAreaEachBackground' => !get_theme_mod('CD_SCFArAEBgSetting') ? '#ffffff' : get_theme_mod('CD_SCFArAEBgSetting'),
                'SetPopularArticleAreaCatLinkColor' => !get_theme_mod('CD_SCFArACCSetting') ? '#ffffff' : get_theme_mod('CD_SCFArACCSetting'),
                'SetPopularArticleAreaCatLinkBackgroundColor' => !get_theme_mod('CD_SCFArACBgSetting') ? '#212529' : get_theme_mod('CD_SCFArACBgSetting'),
                'SetPopularArticleAreaDateFontColor' => !get_theme_mod('CD_SCFArADCSetting') ? '#212529' : get_theme_mod('CD_SCFArADCSetting'),
                'SetPopularArticleAreaTitleFontColor' => !get_theme_mod('CD_SCFArAPCSetting') ? '#212529' : get_theme_mod('CD_SCFArAPCSetting'),

                //関連記事一覧 影の調整
                'SetPopularArticleAreaShadow' => !get_theme_mod('CD_SCFArAShdSetting') ? 'false' : get_theme_mod('CD_SCFArAShdSetting'),
                'SetPopularArticleAreaShadowLevel' => !get_theme_mod('CD_SCFArAShdLvSetting') ? '0.5' : get_theme_mod('CD_SCFArAShdLvSetting'),
                'SetPopularArticleAreaContentShadow' => !get_theme_mod('CD_SCFArAShdInSetting') ? 'false' : get_theme_mod('CD_SCFArAShdInSetting'),
                'SetPopularArticleAreaContentShadowLevel' => !get_theme_mod('CD_SCFArAShdLvInSetting') ? '0.5' : get_theme_mod('CD_SCFArAShdLvInSetting'),
                'SetPopularArticleAreaThumbBorderColor' => !get_theme_mod('CD_SCFArAThBCSetting') ? '#212529' : get_theme_mod('CD_SCFArAThBCSetting')
            ];
        }
    }
    new CustomizeSideColumnPopularArticleArea();
?>