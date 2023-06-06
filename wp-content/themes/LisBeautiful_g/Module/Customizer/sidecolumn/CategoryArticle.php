<?php
    class CustomizeSideColumnCategoryArticle{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'sidecolumntemplate' => array(
                    //関連記事一覧 デザイン
                    'SCCatArADSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArADSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatArADSetting' => 'CD_SCCatArADSetting',
                    'SCCatArADSPSetting' => 'CD_SCCatArADSPSetting',
                    'SCCatArATDSetting' => 'CD_SCCatArATDSetting',
                    'SCCatArAWBRSetting' => 'CD_SCCatArAWBRSetting',
                    'SCCatArACBRSetting' => 'CD_SCCatArACBRSetting',
                    'SCCatArAThBDSetting' => 'CD_SCCatArAThBDSetting',
                    'SCCatArADControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArADControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCCatArADSection', 
                        'settings'    => 'CD_SCCatArADSetting',
                        'default'   => 'pt7',
                        'choices'     =>  Settings::$SideColumnPCLayout
                    ),
                    'SCCatArADSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArADSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCCatArADSection', 
                        'settings'    => 'CD_SCCatArADSPSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$SideColumnSPLayout
                    ),
                    'SCCatArATDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCCatArADSection', 
                        'settings'    => 'CD_SCCatArATDSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt4"] ),
                            'pt5'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt5"] ),
                            'pt6'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt6"] ),
                            'pt7'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt7"] ),
                            'pt8'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt8"] ),
                            'pt9'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["pt9"] ),
                            'none'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATDControll"]["choices"]["none"] )
                        )
                    ),
                    'SCCatArAWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArADSection', 
                        'settings'    => 'CD_SCCatArAWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'SCCatArACBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArACBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArADSection', 
                        'settings'    => 'CD_SCCatArACBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'SCCatArAThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_SCCatArADSection', 
                        'settings'    => 'CD_SCCatArAThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAThBDControll"]["choices"]["false"] )
                        )
                    ),
                    //関連記事全体の余白
                    'SCCatArAPdSection' => array(
                        'title'    => __( '関連記事全体の余白を設定する', 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatArAPdSetting' => 'CD_SCCatArAPdSetting',
                    'SCCatArAPdControll' => array(
                        'label'       => '関連記事全体の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArAPdSection', 
                        'settings'    => 'CD_SCCatArAPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumnpadding
                    ),
                    //関連記事一覧 表示数、タイトル(上)、(下)の設定
                    'SCCatArALNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArALNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatArALNSetting' => 'CD_SCCatArALNSetting',
                    'SCCatArAMgSetting' => 'CD_SCCatArAMgSetting',
                    'SCCatArATPdSetting' => 'CD_SCCatArATPdSetting',
                    'SCCatArACtPdSetting' => 'CD_SCCatArACtPdSetting',
                    'SCCatArATTSetting' => 'CD_SCCatArATTSetting',
                    'SCCatArATTDSetting' => 'CD_SCCatArATTDSetting',
                    'SCCatArATTFsSetting' => 'CD_SCCatArATTFsSetting',
                    'SCCatArATTAnSetting' => 'CD_SCCatArATTAnSetting',
                    'SCCatArABTSetting' => 'CD_SCCatArABTSetting',
                    'SCCatArABTFsSetting' => 'CD_SCCatArABTFsSetting',
                    'SCCatArABTDSetting' => 'CD_SCCatArABTDSetting',
                    'SCCatArABTAnSetting' => 'CD_SCCatArABTAnSetting',
                    'SCCatArALNControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArALNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArALNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'SCCatArATPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArATPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumntitlepadding
                    ),
                    'SCCatArACtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArACtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$sidecolumncontentpadding
                    ),
                    'SCCatArAMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArAMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$sidecolumtitlecontentnmargin
                    ),
                    'SCCatArATTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTControll"]["label"],
                        'section'  => 'CD_SCCatArALNSection',
                        'settings' => 'CD_SCCatArATTSetting'
                    ),
                    'SCCatArATTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArATTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCCatArATTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArATTFsSetting',
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCCatArATTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArATTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'SCCatArABTControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABTControll"]["label"],
                        'section'  => 'CD_SCCatArALNSection',
                        'settings' => 'CD_SCCatArABTSetting'
                    ),
                    'SCCatArABTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArABTFsSetting', 
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'SCCatArABTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArABTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABTDControll"]["choices"]["left"] )
                        )
                    ),
                    'SCCatArABTAnControll' => array(
                        'label'       => '見出しタイトル(下)のアニメーションを選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArALNSection', 
                        'settings'    => 'CD_SCCatArABTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //関連記事一覧 背景画像の設定
                    'SCCatArABgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatArABgImgsetting' => 'SCCatArABgImg_setting',
                    'SCCatArABgImgStsetting' => 'SCCatArABgImgSt_setting',
                    'SCCatArABgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABgImgcontroll"]["label"],
                        'section' => 'SCCatArABgImg_section',
                        'settings' => 'SCCatArABgImg_setting',
                    ),
                    'SCCatArABgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'SCCatArABgImg_section', 
                        'settings'    => 'SCCatArABgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),
                    
                    //関連記事一覧 色の調整
                    'SCCatArATBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatArATBgSetting' => 'CD_SCCatArATBgSetting',
                    'SCCatArATCSetting' => 'CD_SCCatArATCSetting',
                    'SCCatArABgSetting' => 'CD_SCCatArABgSetting',
                    'SCCatArAEBgSetting' => 'CD_SCCatArAEBgSetting',
                    'SCCatArACCSetting' => 'CD_SCCatArACCSetting',
                    'SCCatArACBgSetting' => 'CD_SCCatArACBgSetting',
                    'SCCatArADCSetting' => 'CD_SCCatArADCSetting',
                    'SCCatArAPCSetting' => 'CD_SCCatArAPCSetting',
                    'SCCatArAThBCSetting' => 'CD_SCCatArAThBCSetting',
                    'SCCatArATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArACBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArADCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArAPCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArAThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'SCCatArATBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATBgControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArATBgSetting'
                    ),
                    'SCCatArATCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArATCControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArATCSetting'
                    ),
                    'SCCatArABgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArABgControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArABgSetting'
                    ),
                    'SCCatArAEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAEBgControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArAEBgSetting'
                    ),
                    'SCCatArADCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArADCControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArADCSetting'
                    ),
                    'SCCatArAPCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAPCControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArAPCSetting'
                    ),
                    'SCCatArAThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAThBCControll"]["label"],
                        'section'    => 'CD_SCCatArATBgSection',
                        'settings'   => 'CD_SCCatArAThBCSetting'
                    ),

                    //関連記事一覧 影の設定
                    'SCCatArAShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'sidecolumn_design_panel'
                    ),
                    'SCCatArAShdSetting' => 'CD_SCCatArAShdSetting',
                    'SCCatArAShdLvSetting' => 'CD_SCCatArAShdLvSetting',
                    'SCCatArAShdInSetting' => 'CD_SCCatArAShdInSetting',
                    'SCCatArAShdLvInSetting' => 'CD_SCCatArAShdLvInSetting',
                    'SCCatArAShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArAShdSection', 
                        'settings'    => 'CD_SCCatArAShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdControll"]["choices"]["true"]
                        )
                    ),
                    'SCCatArAShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArAShdSection', 
                        'settings'    => 'CD_SCCatArAShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'SCCatArAShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArAShdSection', 
                        'settings'    => 'CD_SCCatArAShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdInControll"]["choices"]["true"]
                        )
                    ),
                    'SCCatArAShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeSideColumnCategoryArticle"]["SCCatArAShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_SCCatArAShdSection', 
                        'settings'    => 'CD_SCCatArAShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            //関連記事一覧 デザイン
            $wp_customize->add_section('CD_SCCatArADSection', $settings['sidecolumntemplate']['SCCatArADSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArADSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArADSPSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAWBRSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArACBRSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArADSetting', $settings['sidecolumntemplate']['SCCatArADControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArADSPSetting', $settings['sidecolumntemplate']['SCCatArADSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArATDSetting', $settings['sidecolumntemplate']['SCCatArATDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAWBRSetting', $settings['sidecolumntemplate']['SCCatArAWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArACBRSetting', $settings['sidecolumntemplate']['SCCatArACBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAThBDSetting', $settings['sidecolumntemplate']['SCCatArAThBDControll']));

            //関連記事全体の余白
            $wp_customize->add_section('CD_SCCatArAPdSection', $settings['sidecolumntemplate']['SCCatArAPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAPdSetting', $settings['sidecolumntemplate']['SCCatArAPdControll']));

            //関連記事一覧 表示する記事の数
            $wp_customize->add_section('CD_SCCatArALNSection', $settings['sidecolumntemplate']['SCCatArALNSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArALNSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArALNSetting', $settings['sidecolumntemplate']['SCCatArALNControll']));

            //関連記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_SCCatArAMgSection', $settings['sidecolumntemplate']['SCCatArAMgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAMgSetting', $settings['sidecolumntemplate']['SCCatArAMgControll']));

            //関連記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_SCCatArATPdSection', $settings['sidecolumntemplate']['SCCatArATPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArATPdSetting', $settings['sidecolumntemplate']['SCCatArATPdControll']));

            //関連記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_SCCatArACtPdSection', $settings['sidecolumntemplate']['SCCatArACtPdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArACtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArACtPdSetting', $settings['sidecolumntemplate']['SCCatArACtPdControll']));

            //関連記事一覧 見出しタイトル(上)の修正
            $wp_customize->add_section('CD_SCCatArATTSection', $settings['sidecolumntemplate']['SCCatArATTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArATTSetting', $settings['sidecolumntemplate']['SCCatArATTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArATTDSetting', $settings['sidecolumntemplate']['SCCatArATTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArATTFsSetting', $settings['sidecolumntemplate']['SCCatArATTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArATTAnSetting', $settings['sidecolumntemplate']['SCCatArATTAnControll']));

            //関連記事一覧 見出しタイトル(下)の修正
            $wp_customize->add_section('CD_SCCatArABTSection', $settings['sidecolumntemplate']['SCCatArABTSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABTSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABTFsSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABTDSetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABTAnSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArABTSetting', $settings['sidecolumntemplate']['SCCatArABTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArABTFsSetting', $settings['sidecolumntemplate']['SCCatArABTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArABTDSetting', $settings['sidecolumntemplate']['SCCatArABTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArABTAnSetting', $settings['sidecolumntemplate']['SCCatArABTAnControll']));

            //関連記事一覧 背景画像の設定
            $wp_customize->add_section('SCCatArABgImg_section', $settings['sidecolumntemplate']['SCCatArABgImgsection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABgImgsetting']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'SCCatArABgImg_setting', $settings['sidecolumntemplate']['SCCatArABgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'SCCatArABgImgSt_setting', $settings['sidecolumntemplate']['SCCatArABgImgStcontroll']));

            //関連記事一覧 色の調整
            $wp_customize->add_section('CD_SCCatArATBgSection', $settings['sidecolumntemplate']['SCCatArATBgSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATBgSetting'], $settings['sidecolumntemplate']['SCCatArATBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArATCSetting'], $settings['sidecolumntemplate']['SCCatArATCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArABgSetting'], $settings['sidecolumntemplate']['SCCatArABgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAEBgSetting'], $settings['sidecolumntemplate']['SCCatArAEBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArACCSetting'], $settings['sidecolumntemplate']['SCCatArACCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArACBgSetting'], $settings['sidecolumntemplate']['SCCatArACBgDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArADCSetting'], $settings['sidecolumntemplate']['SCCatArADCDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAPCSetting'], $settings['sidecolumntemplate']['SCCatArAPCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArATBgSetting', $settings['sidecolumntemplate']['SCCatArATBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArATCSetting', $settings['sidecolumntemplate']['SCCatArATCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArABgSetting', $settings['sidecolumntemplate']['SCCatArABgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArAEBgSetting', $settings['sidecolumntemplate']['SCCatArAEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArADCSetting', $settings['sidecolumntemplate']['SCCatArADCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArAPCSetting', $settings['sidecolumntemplate']['SCCatArAPCControll']));

            //関連記事一覧 影の調整
            $wp_customize->add_section('CD_SCCatArAShdSection', $settings['sidecolumntemplate']['SCCatArAShdSection']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAShdSetting'], $settings['sidecolumntemplate']['SCCatArAShdDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAShdLvSetting'], $settings['sidecolumntemplate']['SCCatArAShdLvDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAShdInSetting'], $settings['sidecolumntemplate']['SCCatArAShdInDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAShdLvInSetting'], $settings['sidecolumntemplate']['SCCatArAShdLvInDefault']);
            $wp_customize->add_setting($settings['sidecolumntemplate']['SCCatArAThBCSetting'], $settings['sidecolumntemplate']['SCCatArAThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAShdSetting', $settings['sidecolumntemplate']['SCCatArAShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAShdLvSetting', $settings['sidecolumntemplate']['SCCatArAShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAShdInSetting', $settings['sidecolumntemplate']['SCCatArAShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_SCCatArAShdLvInSetting', $settings['sidecolumntemplate']['SCCatArAShdLvInControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_SCCatArAThBCSetting', $settings['sidecolumntemplate']['SCCatArAThBCControll']));
        }

        public static function Values(){
            return (object)[
                //関連記事一覧 デザイン
                'CategoryArticleAreaSidebarTemplate' => !get_theme_mod('CD_SCCatArADSetting') ? 'pt7' : get_theme_mod('CD_SCCatArADSetting'),
                'CategoryArticleAreaSPSidebarTemplate' => !get_theme_mod('CD_SCCatArADSPSetting') ? 'pt1' : get_theme_mod('CD_SCCatArADSPSetting'),
                'SetCategoryArticleAreaSidebarTagDesign' => !get_theme_mod('CD_SCCatArATDSetting') ? 'pt1' : get_theme_mod('CD_SCCatArATDSetting'),
                'SetCategoryArticleAreaWRadius' => !get_theme_mod('CD_SCCatArAWBRSetting') ? '0px' : get_theme_mod('CD_SCCatArAWBRSetting'),
                'SetCategoryArticleAreaCRadius' => !get_theme_mod('CD_SCCatArACBRSetting') ? '0px' : get_theme_mod('CD_SCCatArACBRSetting'),
                'SetCategoryArticleAreaThumBorder' => !get_theme_mod('CD_SCCatArAThBDSetting') ? 'true' : get_theme_mod('CD_SCCatArAThBDSetting'),

                //関連記事の余白
                'CategoryArticlePadding' => !get_theme_mod('CD_SCCatArAPdSetting') ? '.5rem' : get_theme_mod('CD_SCCatArAPdSetting'),

                //関連記事一覧 表示する記事の数
                'CategoryArticleAreaNumber' => !get_theme_mod('CD_SCCatArALNSetting') ? 5 : get_theme_mod('CD_SCCatArALNSetting'),

                //関連記事一覧 タイトルブロックと記事一覧の余白の間隔
                'CategoryArticleAreaTitleBottomMargin' => !get_theme_mod('CD_SCCatArAMgSetting') ? '.2rem' : get_theme_mod('CD_SCCatArAMgSetting'),

                //関連記事一覧 タイトルブロックの余白
                'CategoryArticleAreaTitlePadding' => !get_theme_mod('CD_SCCatArATPdSetting') ? '.5rem' : get_theme_mod('CD_SCCatArATPdSetting'),

                //関連記事一覧 コンテンツの余白
                'CategoryArticleAreaContentPadding' => !get_theme_mod('CD_SCCatArACtPdSetting') ? '.5rem' : get_theme_mod('CD_SCCatArACtPdSetting'),

                //関連記事一覧 見出しタイトル(上)の修正
                'CategoryArticleAreaTitle' => !get_theme_mod('CD_SCCatArATTSetting') ? '関連記事一覧' : get_theme_mod('CD_SCCatArATTSetting'),
                'CategoryArticleAreaTitleDir' => !get_theme_mod('CD_SCCatArATTDSetting') ? 'center' : get_theme_mod('CD_SCCatArATTDSetting'),
                'CategoryArticleAreaTitleFontSize' => !get_theme_mod('CD_SCCatArATTFsSetting') ? '18px' : get_theme_mod('CD_SCCatArATTFsSetting'),
                'CategoryArticleAreaTitleAnimation' => !get_theme_mod('CD_SCCatArATTAnSetting') ? 'none' : get_theme_mod('CD_SCCatArATTAnSetting'),

                //関連記事一覧 見出しタイトル(下)の修正
                'CategoryArticleAreaBottomTitle' => !get_theme_mod('CD_SCCatArABTSetting') ? 'Related' : get_theme_mod('CD_SCCatArABTSetting'),
                'CategoryArticleAreaBottomTitleFontSize' => !get_theme_mod('CD_SCCatArABTFsSetting') ? '16px' : get_theme_mod('CD_SCCatArABTFsSetting'),
                'CategoryArticleAreaBottomTitleDir' => !get_theme_mod('CD_SCCatArABTDSetting') ? 'center' : get_theme_mod('CD_SCCatArABTDSetting'),
                'CategoryArticleAreaBottomTitleAnimation' => !get_theme_mod('CD_SCCatArABTAnSetting') ? 'none' : get_theme_mod('CD_SCCatArABTAnSetting'),

                //関連記事一覧 背景画像の設定
                'SetSCCatArABgImg' => !get_theme_mod('SCCatArABgImg_setting') ? NULL : get_theme_mod('SCCatArABgImg_setting'),
                'SetSCCatArABgImgStatus' => !get_theme_mod('SCCatArABgImgSt_setting') ? '' : get_theme_mod('SCCatArABgImgSt_setting'),

                //関連記事一覧 色の調整
                'CategoryArticleAreaTitleBackground' => !get_theme_mod('CD_SCCatArATBgSetting') ? '#ffffff' : get_theme_mod('CD_SCCatArATBgSetting'),
                'CategoryArticleAreaFontColor' => !get_theme_mod('CD_SCCatArATCSetting') ? '#21252' : get_theme_mod('CD_SCCatArATCSetting'),
                'CategoryArticleAreaBackground' => !get_theme_mod('CD_SCCatArABgSetting') ? '#f4f4f4' : get_theme_mod('CD_SCCatArABgSetting'),
                'SetCategoryArticleAreaEachBackground' => !get_theme_mod('CD_SCCatArAEBgSetting') ? '#ffffff' : get_theme_mod('CD_SCCatArAEBgSetting'),
                'SetCategoryArticleAreaCatLinkColor' => !get_theme_mod('CD_SCCatArACCSetting') ? '#ffffff' : get_theme_mod('CD_SCCatArACCSetting'),
                'SetCategoryArticleAreaCatLinkBackgroundColor' => !get_theme_mod('CD_SCCatArACBgSetting') ? '#212529' : get_theme_mod('CD_SCCatArACBgSetting'),
                'SetCategoryArticleAreaDateFontColor' => !get_theme_mod('CD_SCCatArADCSetting') ? '#212529' : get_theme_mod('CD_SCCatArADCSetting'),
                'SetCategoryArticleAreaTitleFontColor' => !get_theme_mod('CD_SCCatArAPCSetting') ? '#212529' : get_theme_mod('CD_SCCatArAPCSetting'),

                //関連記事一覧 影の調整
                'SetCategoryArticleAreaShadow' => !get_theme_mod('CD_SCCatArAShdSetting') ? 'false' : get_theme_mod('CD_SCCatArAShdSetting'),
                'SetCategoryArticleAreaShadowLevel' => !get_theme_mod('CD_SCCatArAShdLvSetting') ? '0.5' : get_theme_mod('CD_SCCatArAShdLvSetting'),
                'SetCategoryArticleAreaContentShadow' => !get_theme_mod('CD_SCCatArAShdInSetting') ? 'false' : get_theme_mod('CD_SCCatArAShdInSetting'),
                'SetCategoryArticleAreaContentShadowLevel' => !get_theme_mod('CD_SCCatArAShdLvInSetting') ? '0.5' : get_theme_mod('CD_SCCatArAShdLvInSetting'),
                'SetCategoryArticleAreaThumbBorderColor' => !get_theme_mod('CD_SCCatArAThBCSetting') ? '#212529' : get_theme_mod('CD_SCCatArAThBCSetting')
            ];
        }
    }
    new CustomizeSideColumnCategoryArticle();
?>