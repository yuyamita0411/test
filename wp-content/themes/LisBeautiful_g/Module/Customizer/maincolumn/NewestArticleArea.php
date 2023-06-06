<?php
    class CustomizeMainColumnNewestArticleArea{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'mainbackground' => array(
                    //最新記事一覧 デザイン
                    'NArADSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArADSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'NArADSetting' => 'CD_NArADSetting',
                    'NArADSPSetting' => 'CD_NArADSPSetting',
                    'NArATDSetting' => 'CD_NArATDSetting',
                    'NArAWBRSetting' => 'CD_NArAWBRSetting',
                    'NArACBRSetting' => 'CD_NArACBRSetting',
                    'NArAThBDSetting' => 'CD_NArAThBDSetting',
                    'NArADControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArADControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArADSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListLayout
                    ),
                    'NArADSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArADSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArADSPSetting',
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListSPLayout
                    ),
                    'NArATDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArATDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt4"] ),
                            'pt5'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt5"] ),
                            'pt6'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt6"] ),
                            'pt7'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt7"] ),
                            'pt8'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt8"] ),
                            'pt9'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["pt9"] ),
                            'none'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATDControll"]["choices"]["none"] )
                        )
                    ),
                    'NArAWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArAWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'NArACBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArACBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArACBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'NArAThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArAThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAThBDControll"]["choices"]["false"] )
                        )
                    ),

                    //背景画像の設定
                    'NArABgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'NArABgImgsetting' => 'NArABgImg_setting',
                    'NArABgImgStsetting' => 'NArABgImgSt_setting',
                    'NArABgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeMainColumnNewestArticleArea"],
                        'section' => 'NArABgImg_section',
                        'settings' => 'NArABgImg_setting',
                    ),
                    'NArABgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'NArABgImg_section', 
                        'settings'    => 'NArABgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),

                    //最新記事一覧 表示数、タイトル(上)、(下)の設定
                    'NArALNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArALNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'NArALNSetting' => 'CD_NArALNSetting',
                    'NArALNControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArALNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArALNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'NArATTSetting' => 'CD_NArATTSetting',
                    'NArATTDSetting' => 'CD_NArATTDSetting',
                    'NArAMgSetting' => 'CD_NArAMgSetting',
                    'NArATPdSetting' => 'CD_NArATPdSetting',
                    'NArACtPdSetting' => 'CD_NArACtPdSetting',
                    'NArATTFsSetting' => 'CD_NArATTFsSetting',
                    'NArATTFwSetting' => 'CD_NArATTFwSetting',
                    'NArATTAnSetting' => 'CD_NArATTAnSetting',
                    'NArATTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTControll"]["label"],
                        'section'  => 'CD_NArALNSection',
                        'settings' => 'CD_NArATTSetting'
                    ),
                    'NArATTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArATTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTDControll"]["choices"]["left"] )
                        )
                    ),
                    'NArATPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArATPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumntitlepadding
                    ),
                    'NArACtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArACtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumncontentpadding
                    ),
                    'NArAMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArAMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$maincolumtitlecontentnmargin
                    ),
                    'NArATTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArATTFsSetting', 
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'NArATTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArATTFwSetting',
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'NArATTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArATTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'NArABTSetting' => 'CD_NArABTSetting',
                    'NArABTDSetting' => 'CD_NArABTDSetting',
                    'NArABTFsSetting' => 'CD_NArABTFsSetting',
                    'NArABTFwSetting' => 'CD_NArABTFwSetting',
                    'NArABTAnSetting' => 'CD_NArABTAnSetting',
                    'NArABTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTControll"]["label"],
                        'section'  => 'CD_NArALNSection',
                        'settings' => 'CD_NArABTSetting'
                    ),
                    'NArABTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArABTFsSetting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    //ここから
                    'NArABTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArABTFwSetting', 
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'NArABTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArABTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTDControll"]["choices"]["left"] )
                        )
                    ),
                    'NArABTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArALNSection', 
                        'settings'    => 'CD_NArABTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //最新記事一覧 色の調整
                    'NArATBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'NArATBgSetting' => 'CD_NArATBgSetting',
                    'NArATCSetting' => 'CD_NArATCSetting',
                    'NArABgSetting' => 'CD_NArABgSetting',
                    'NArAEBgSetting' => 'CD_NArAEBgSetting',
                    'NArACCSetting' => 'CD_NArACCSetting',
                    'NArACBgSetting' => 'CD_NArACBgSetting',
                    'NArACDCSetting' => 'CD_NArACDCSetting',
                    'NArAPTCSetting' => 'CD_NArAPTCSetting',
                    'NArAThBCSetting' => 'CD_NArAThBCSetting',
                    'NArATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'default3-8' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArACDCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArAPTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArAThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArATBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATBgControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArATBgSetting'
                    ),
                    'NArATCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArATCControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArATCSetting'
                    ),
                    'NArABgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArABgControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArABgSetting'
                    ),
                    'NArAEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAEBgControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArAEBgSetting'
                    ),
                    'NArACDCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArACDCControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArACDCSetting'
                    ),
                    'NArAPTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAPTCControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArAPTCSetting'
                    ),
                    'NArAThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAThBCControll"]["label"],
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArAThBCSetting'
                    ),

                    'NArAAnSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAAnSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'NArAAnSetting' => 'CD_NArAAnSetting',
                    'NArAAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArAAnSection', 
                        'settings'    => 'CD_NArAAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    ),

                    //最新記事一覧 影の設定
                    'NArAShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'NArAShdSetting' => 'CD_NArAShdSetting',
                    'NArAShdLvSetting' => 'CD_NArAShdLvSetting',
                    'NArAShdInSetting' => 'CD_NArAShdInSetting',
                    'NArAShdLvInSetting' => 'CD_NArAShdLvInSetting',
                    'NArAShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArAShdSection', 
                        'settings'    => 'CD_NArAShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdControll"]["choices"]["true"]
                        )
                    ),
                    'NArAShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArAShdSection', 
                        'settings'    => 'CD_NArAShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'NArAShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArAShdSection', 
                        'settings'    => 'CD_NArAShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdInControll"]["choices"]["true"]
                        )
                    ),
                    'NArAShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnNewestArticleArea"]["NArAShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_NArAShdSection', 
                        'settings'    => 'CD_NArAShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            $wp_customize->add_section('CD_NArADSection', $settings['mainbackground']['NArADSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArADSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArADSPSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArATDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArAWBRSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArACBRSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArAThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArADSetting', $settings['mainbackground']['NArADControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArADSPSetting', $settings['mainbackground']['NArADSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATDSetting', $settings['mainbackground']['NArATDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAWBRSetting', $settings['mainbackground']['NArAWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArACBRSetting', $settings['mainbackground']['NArACBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAThBDSetting', $settings['mainbackground']['NArAThBDControll']));

            //最新記事一覧 表示数、タイトル(上)、(下)の設定
            $wp_customize->add_section('CD_NArALNSection', $settings['mainbackground']['NArALNSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArALNSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArATTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArATTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArATTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArATTFwSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArATTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArABTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArABTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArABTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArABTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArABTFwSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArALNSetting', $settings['mainbackground']['NArALNControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTSetting', $settings['mainbackground']['NArATTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTDSetting', $settings['mainbackground']['NArATTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTFsSetting', $settings['mainbackground']['NArATTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTFwSetting', $settings['mainbackground']['NArATTFwControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTAnSetting', $settings['mainbackground']['NArATTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTSetting', $settings['mainbackground']['NArABTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTDSetting', $settings['mainbackground']['NArABTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTAnSetting', $settings['mainbackground']['NArABTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTFsSetting', $settings['mainbackground']['NArABTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTFwSetting', $settings['mainbackground']['NArABTFwControll']));

            //最新記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_NArAMgSection', $settings['mainbackground']['NArAMgSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArAMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAMgSetting', $settings['mainbackground']['NArAMgControll']));

            //最新記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_NArATPdSection', $settings['mainbackground']['NArATPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArATPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATPdSetting', $settings['mainbackground']['NArATPdControll']));

            //最新記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_NArACtPdSection', $settings['mainbackground']['NArACtPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArACtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArACtPdSetting', $settings['mainbackground']['NArACtPdControll']));

            //最新記事一覧　背景画像の設定
            $wp_customize->add_section('NArABgImg_section', $settings['mainbackground']['NArABgImgsection']);
            $wp_customize->add_setting($settings['mainbackground']['NArABgImgsetting']);
            $wp_customize->add_setting($settings['mainbackground']['NArABgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'NArABgImg_setting', $settings['mainbackground']['NArABgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'NArABgImgSt_setting', $settings['mainbackground']['NArABgImgStcontroll']));

            //最新記事一覧 色の調整
            $wp_customize->add_section('CD_NArATBgSection', $settings['mainbackground']['NArATBgSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArATBgSetting'], $settings['mainbackground']['NArATBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArATCSetting'], $settings['mainbackground']['NArATCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArABgSetting'], $settings['mainbackground']['NArABgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArAEBgSetting'], $settings['mainbackground']['NArAEBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArACCSetting'], $settings['mainbackground']['NArACCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArACBgSetting'], $settings['mainbackground']['default3-8']);
            $wp_customize->add_setting($settings['mainbackground']['NArACDCSetting'], $settings['mainbackground']['NArACDCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArAPTCSetting'], $settings['mainbackground']['NArAPTCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArAThBCSetting'], $settings['mainbackground']['NArAThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArATBgSetting', $settings['mainbackground']['NArATBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArATCSetting', $settings['mainbackground']['NArATCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArABgSetting', $settings['mainbackground']['NArABgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArAEBgSetting', $settings['mainbackground']['NArAEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArACDCSetting', $settings['mainbackground']['NArACDCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArAPTCSetting', $settings['mainbackground']['NArAPTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArAThBCSetting', $settings['mainbackground']['NArAThBCControll']));

            //最新記事一覧 影の調整
            $wp_customize->add_section('CD_NArAShdSection', $settings['mainbackground']['NArAShdSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArAShdSetting'], $settings['mainbackground']['NArAShdDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArAShdLvSetting'], $settings['mainbackground']['NArAShdLvDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArAShdInSetting'], $settings['mainbackground']['NArAShdInDefault']);
            $wp_customize->add_setting($settings['mainbackground']['NArAShdLvInSetting'], $settings['mainbackground']['NArAShdLvInDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAShdSetting', $settings['mainbackground']['NArAShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAShdLvSetting', $settings['mainbackground']['NArAShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAShdInSetting', $settings['mainbackground']['NArAShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAShdLvInSetting', $settings['mainbackground']['NArAShdLvInControll']));

            //最新記事一覧 コンテンツのアニメーション
            $wp_customize->add_section('CD_NArAAnSection', $settings['mainbackground']['NArAAnSection']);
            $wp_customize->add_setting($settings['mainbackground']['NArAAnSetting'], $settings['mainbackground']['NArAAnDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArAAnSetting', $settings['mainbackground']['NArAAnControll']));
        }

        public static function Values(){
            return (object)[
                'NewestArticleAreaNumber' => !get_theme_mod('CD_NArALNSetting') ? 5 : get_theme_mod('CD_NArALNSetting'),
                'NewestArticleAreaTemplate' => !get_theme_mod('CD_NArADSetting') ? 'pt1' : get_theme_mod('CD_NArADSetting'),
                'NewestArticleAreaSPTemplate' => !get_theme_mod('CD_NArADSPSetting') ? 'pt1' : get_theme_mod('CD_NArADSPSetting'),
                'SetNewestArticleAreaTagDesign' => !get_theme_mod('CD_NArATDSetting') ? 'pt1' : get_theme_mod('CD_NArATDSetting'),
                'SetNewestArticleAreaWRadius' => !get_theme_mod('CD_NArAWBRSetting') ? '0px' : get_theme_mod('CD_NArAWBRSetting'),
                'SetNewestArticleAreaCRadius' => !get_theme_mod('CD_NArACBRSetting') ? '0px' : get_theme_mod('CD_NArACBRSetting'),

                //最新記事一覧 タイトルブロックと記事一覧の余白の間隔
                'NewestArticleAreaTitleBottomMargin' => !get_theme_mod('CD_NArAMgSetting') ? '.2rem' : get_theme_mod('CD_NArAMgSetting'),

                //最新記事一覧 タイトルブロックの余白
                'NewestArticleAreaaTitlePadding' => !get_theme_mod('CD_NArATPdSetting') ? '.5rem' : get_theme_mod('CD_NArATPdSetting'),

                //最新記事一覧 コンテンツの余白
                'NewestArticleAreaContentPadding' => !get_theme_mod('CD_NArACtPdSetting') ? '.5rem' : get_theme_mod('CD_NArACtPdSetting'),

                //最新記事一覧　背景画像の設定
                'SetNArABgImg' => !get_theme_mod('NArABgImg_setting') ? NULL : get_theme_mod('NArABgImg_setting'),
                'SetNArABgImgStatus' => !get_theme_mod('NArABgImgSt_setting') ? '' : get_theme_mod('NArABgImgSt_setting'),

                'NewestArticleAreaTitle' => !get_theme_mod('CD_NArATTSetting') ? '最新記事一覧' : get_theme_mod('CD_NArATTSetting'),
                'NewestArticleAreaTitleDir' => !get_theme_mod('CD_NArATTDSetting') ? 'center' : get_theme_mod('CD_NArATTDSetting'),
                'NewestArticleAreaTitleFontSize' => !get_theme_mod('CD_NArATTFsSetting') ? '18px' : get_theme_mod('CD_NArATTFsSetting'),
                'NewestArticleAreaTitleFontWeight' => !get_theme_mod('CD_NArATTFwSetting') ? 'normal' : get_theme_mod('CD_NArATTFwSetting'),
                'NewestArticleAreaTitleAnimation' => !get_theme_mod('CD_NArATTAnSetting') ? 'none' : get_theme_mod('CD_NArATTAnSetting'),
                'NewestArticleAreaBottomTitle' => !get_theme_mod('CD_NArABTSetting') ? 'New' : get_theme_mod('CD_NArABTSetting'),
                'NewestArticleAreaBottomTitleDir' => !get_theme_mod('CD_NArABTDSetting') ? 'center' : get_theme_mod('CD_NArABTDSetting'),
                'NewestArticleAreaBottomTitleAnimation' => !get_theme_mod('CD_NArABTAnSetting') ? 'none' : get_theme_mod('CD_NArABTAnSetting'),
                'NewestArticleAreaBottomTitleFontSize' => !get_theme_mod('CD_NArABTFsSetting') ? '16px' : get_theme_mod('CD_NArABTFsSetting'),
                'NewestArticleAreaBottomTitleFontWeight' => !get_theme_mod('CD_NArABTFwSetting') ? 'normal' : get_theme_mod('CD_NArABTFwSetting'),
                'NewestArticleAreaTitleBackground' => !get_theme_mod('CD_NArATBgSetting') ? '#ffffff' : get_theme_mod('CD_NArATBgSetting'),
                'NewestArticleAreaFontColor' => !get_theme_mod('CD_NArATCSetting') ? '#212529' : get_theme_mod('CD_NArATCSetting'),
                'NewestArticleAreaBackground' => !get_theme_mod('CD_NArABgSetting') ? '#f4f4f4' : get_theme_mod('CD_NArABgSetting'),
                'NewestArticleAreaAnimation' => !get_theme_mod('CD_NArAAnSetting') ? 'none' : get_theme_mod('CD_NArAAnSetting'),
                'SetNewestArticleAreaEachBackground' => !get_theme_mod('CD_NArAEBgSetting') ? '#ffffff' : get_theme_mod('CD_NArAEBgSetting'),
                'SetNewestArticleAreaCatLinkColor' => !get_theme_mod('CD_NArACCSetting') ? '#ffffff' : get_theme_mod('CD_NArACCSetting'),
                'SetNewestArticleAreaCatLinkBackgroundColor' => !get_theme_mod('CD_NArACBgSetting') ? '#212529' : get_theme_mod('CD_NArACBgSetting'),
                'SetNewestArticleAreaDateFontColor' => !get_theme_mod('CD_NArACDCSetting') ? '#212529' : get_theme_mod('CD_NArACDCSetting'),
                'SetNewestArticleAreaTitleFontColor' => !get_theme_mod('CD_NArAPTCSetting') ? '#212529' : get_theme_mod('CD_NArAPTCSetting'),
                'SetNewestArticleAreaThumBorder' => !get_theme_mod('CD_NArAThBDSetting') ? 'true' : get_theme_mod('CD_NArAThBDSetting'),
                'SetNewestArticleAreaThumbBorderColor' => !get_theme_mod('CD_NArAThBCSetting') ? '#212529' : get_theme_mod('CD_NArAThBCSetting'),
                'SetNewestArticleAreaShadow' => !get_theme_mod('CD_NArAShdSetting') ? 'false' : get_theme_mod('CD_NArAShdSetting'),
                'SetNewestArticleAreaShadowLevel' => !get_theme_mod('CD_NArAShdLvSetting') ? '0.5' : get_theme_mod('CD_NArAShdLvSetting'),
                'SetNewestArticleAreaContentShadow' => !get_theme_mod('CD_NArAShdInSetting') ? 'false' : get_theme_mod('CD_NArAShdInSetting'),
                'SetNewestArticleAreaContentShadowLevel' => !get_theme_mod('CD_NArAShdLvInSetting') ? '0.5' : get_theme_mod('CD_NArAShdLvInSetting')
            ];
        }
    }
    new CustomizeMainColumnNewestArticleArea();
?>