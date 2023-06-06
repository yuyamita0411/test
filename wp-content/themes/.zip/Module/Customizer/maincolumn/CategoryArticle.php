<?php
    class CustomizeMainColumnCategoryArticle{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'mainbackground' => array(
                    //関連記事一覧 デザイン
                    'CatADSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatADSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatADSetting' => 'CD_CatADSetting',
                    'CatADSPSetting' => 'CD_CatADSPSetting',
                    'CatATDSetting' => 'CD_CatATDSetting',
                    'CatAWBRSetting' => 'CD_CatAWBRSetting',
                    'CatACBRSetting' => 'CD_CatACBRSetting',
                    'CatAThBDSetting' => 'CD_CatAThBDSetting',
                    'CatADControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatADControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatADSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListLayout
                    ),
                    'CatADSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatADSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatADSPSetting',
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListSPLayout
                    ),
                    'CatATDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatATDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATDControll"]["choices"]["pt3"] ),
                            'none'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATDControll"]["choices"]["none"] )
                        )
                    ),
                    'CatAWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatAWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'CatACBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatACBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatACBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'CatAThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatAThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAThBDControll"]["choices"]["false"] )
                        )
                    ),

                    //背景画像の設定
                    'CatABgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatABgImgsetting' => 'CatABgImg_setting',
                    'CatABgImgStsetting' => 'CatABgImgSt_setting',
                    'CatABgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeMainColumnCategoryArticle"],
                        'section' => 'CatABgImg_section',
                        'settings' => 'CatABgImg_setting',
                    ),
                    'CatABgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CatABgImg_section', 
                        'settings'    => 'CatABgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),

                    //関連記事一覧 表示数、タイトル(上)、(下)、余白の設定
                    'CatALNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatALNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatALNSetting' => 'CD_CatALNSetting',
                    'CatALNControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatALNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatALNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'CatATTSetting' => 'CD_CatATTSetting',
                    'CatATTDSetting' => 'CD_CatATTDSetting',
                    'CatArAMgSetting' => 'CD_CatArAMgSetting',
                    'CatArATPdSetting' => 'CD_CatArATPdSetting',
                    'CatArACtPdSetting' => 'CD_CatArACtPdSetting',
                    'CatATTFsSetting' => 'CD_CatATTFsSetting',
                    'CatATTFwSetting' => 'CD_CatATTFwSetting',
                    'CatATTAnSetting' => 'CD_CatATTAnSetting',
                    'CatATTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTControll"]["label"],
                        'section'  => 'CD_CatALNSection',
                        'settings' => 'CD_CatATTSetting'
                    ),
                    'CatATTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatATTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTDControll"]["choices"]["left"] )
                        )
                    ),
                    'CatArATPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatArATPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumntitlepadding
                    ),
                    'CatArACtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatArACtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumncontentpadding
                    ),
                    'CatArAMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatArAMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$maincolumtitlecontentnmargin
                    ),
                    'CatATTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatATTFsSetting', 
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'CatATTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatATTFwSetting',
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'CatATTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatATTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'CatABTSetting' => 'CD_CatABTSetting',
                    'CatABTDSetting' => 'CD_CatABTDSetting',
                    'CatABTFsSetting' => 'CD_CatABTFsSetting',
                    'CatABTFwSetting' => 'CD_CatABTFwSetting',
                    'CatABTAnSetting' => 'CD_CatABTAnSetting',
                    'CatABTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTControll"]["label"],
                        'section'  => 'CD_CatALNSection',
                        'settings' => 'CD_CatABTSetting'
                    ),
                    'CatABTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatABTFsSetting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    //ここから
                    'CatABTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatABTFwSetting', 
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'CatABTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatABTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTDControll"]["choices"]["left"] )
                        )
                    ),
                    'CatABTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatALNSection', 
                        'settings'    => 'CD_CatABTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //関連記事一覧 色の調整
                    'CatATBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatATBgSetting' => 'CD_CatATBgSetting',
                    'CatATCSetting' => 'CD_CatATCSetting',
                    'CatABgSetting' => 'CD_CatABgSetting',
                    'CatAEBgSetting' => 'CD_CatAEBgSetting',
                    'CatACCSetting' => 'CD_CatACCSetting',
                    'CatACBgSetting' => 'CD_CatACBgSetting',
                    'CatACDCSetting' => 'CD_CatACDCSetting',
                    'CatAPTCSetting' => 'CD_CatAPTCSetting',
                    'CatAThBCSetting' => 'CD_CatAThBCSetting',
                    'CatATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'default3-8' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatACDCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatAPTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatAThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatATBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATBgControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatATBgSetting'
                    ),
                    'CatATCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatATCControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatATCSetting'
                    ),
                    'CatABgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatABgControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatABgSetting'
                    ),
                    'CatAEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAEBgControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatAEBgSetting'
                    ),
                    'CatACDCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatACDCControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatACDCSetting'
                    ),
                    'CatAPTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAPTCControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatAPTCSetting'
                    ),
                    'CatAThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAThBCControll"]["label"],
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatAThBCSetting'
                    ),

                    'CatAAnSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAAnSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatAAnSetting' => 'CD_CatAAnSetting',
                    'CatAAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatAAnSection', 
                        'settings'    => 'CD_CatAAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    ),

                    //関連記事一覧 影の設定
                    'CatAShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'CatAShdSetting' => 'CD_CatAShdSetting',
                    'CatAShdLvSetting' => 'CD_CatAShdLvSetting',
                    'CatAShdInSetting' => 'CD_CatAShdInSetting',
                    'CatAShdLvInSetting' => 'CD_CatAShdLvInSetting',
                    'CatAShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatAShdSection', 
                        'settings'    => 'CD_CatAShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdControll"]["choices"]["true"]
                        )
                    ),
                    'CatAShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatAShdSection', 
                        'settings'    => 'CD_CatAShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'CatAShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatAShdSection', 
                        'settings'    => 'CD_CatAShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdInControll"]["choices"]["true"]
                        )
                    ),
                    'CatAShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnCategoryArticle"]["CatAShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_CatAShdSection', 
                        'settings'    => 'CD_CatAShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            $wp_customize->add_section('CD_CatADSection', $settings['mainbackground']['CatADSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatADSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatADSPSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatATDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatAWBRSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatACBRSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatAThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatADSetting', $settings['mainbackground']['CatADControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatADSPSetting', $settings['mainbackground']['CatADSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATDSetting', $settings['mainbackground']['CatATDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAWBRSetting', $settings['mainbackground']['CatAWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatACBRSetting', $settings['mainbackground']['CatACBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAThBDSetting', $settings['mainbackground']['CatAThBDControll']));

            //関連記事一覧 表示数、タイトル(上)、(下)の設定
            $wp_customize->add_section('CD_CatALNSection', $settings['mainbackground']['CatALNSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatALNSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatATTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatATTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatATTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatATTFwSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatATTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatABTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatABTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatABTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatABTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatABTFwSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatALNSetting', $settings['mainbackground']['CatALNControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTSetting', $settings['mainbackground']['CatATTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTDSetting', $settings['mainbackground']['CatATTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTFsSetting', $settings['mainbackground']['CatATTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTFwSetting', $settings['mainbackground']['CatATTFwControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTAnSetting', $settings['mainbackground']['CatATTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTSetting', $settings['mainbackground']['CatABTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTDSetting', $settings['mainbackground']['CatABTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTAnSetting', $settings['mainbackground']['CatABTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTFsSetting', $settings['mainbackground']['CatABTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTFwSetting', $settings['mainbackground']['CatABTFwControll']));

            //関連記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_CatArAMgSection', $settings['mainbackground']['CatArAMgSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatArAMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatArAMgSetting', $settings['mainbackground']['CatArAMgControll']));

            //関連記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_CatArATPdSection', $settings['mainbackground']['CatArATPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatArATPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatArATPdSetting', $settings['mainbackground']['CatArATPdControll']));

            //関連記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_CatArACtPdSection', $settings['mainbackground']['CatArACtPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatArACtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatArACtPdSetting', $settings['mainbackground']['CatArACtPdControll']));

            //関連記事一覧　背景画像の設定
            $wp_customize->add_section('CatABgImg_section', $settings['mainbackground']['CatABgImgsection']);
            $wp_customize->add_setting($settings['mainbackground']['CatABgImgsetting']);
            $wp_customize->add_setting($settings['mainbackground']['CatABgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'CatABgImg_setting', $settings['mainbackground']['CatABgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CatABgImgSt_setting', $settings['mainbackground']['CatABgImgStcontroll']));

            //関連記事一覧 色の調整
            $wp_customize->add_section('CD_CatATBgSection', $settings['mainbackground']['CatATBgSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatATBgSetting'], $settings['mainbackground']['CatATBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatATCSetting'], $settings['mainbackground']['CatATCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatABgSetting'], $settings['mainbackground']['CatABgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatAEBgSetting'], $settings['mainbackground']['CatAEBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatACCSetting'], $settings['mainbackground']['CatACCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatACBgSetting'], $settings['mainbackground']['default3-8']);
            $wp_customize->add_setting($settings['mainbackground']['CatACDCSetting'], $settings['mainbackground']['CatACDCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatAPTCSetting'], $settings['mainbackground']['CatAPTCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatAThBCSetting'], $settings['mainbackground']['CatAThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatATBgSetting', $settings['mainbackground']['CatATBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatATCSetting', $settings['mainbackground']['CatATCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatABgSetting', $settings['mainbackground']['CatABgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatAEBgSetting', $settings['mainbackground']['CatAEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatACDCSetting', $settings['mainbackground']['CatACDCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatAPTCSetting', $settings['mainbackground']['CatAPTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatAThBCSetting', $settings['mainbackground']['CatAThBCControll']));

            //関連記事一覧 影の調整
            $wp_customize->add_section('CD_CatAShdSection', $settings['mainbackground']['CatAShdSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatAShdSetting'], $settings['mainbackground']['CatAShdDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatAShdLvSetting'], $settings['mainbackground']['CatAShdLvDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatAShdInSetting'], $settings['mainbackground']['CatAShdInDefault']);
            $wp_customize->add_setting($settings['mainbackground']['CatAShdLvInSetting'], $settings['mainbackground']['CatAShdLvInDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAShdSetting', $settings['mainbackground']['CatAShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAShdLvSetting', $settings['mainbackground']['CatAShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAShdInSetting', $settings['mainbackground']['CatAShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAShdLvInSetting', $settings['mainbackground']['CatAShdLvInControll']));

            //関連記事一覧 コンテンツのアニメーション
            $wp_customize->add_section('CD_CatAAnSection', $settings['mainbackground']['CatAAnSection']);
            $wp_customize->add_setting($settings['mainbackground']['CatAAnSetting'], $settings['mainbackground']['CatAAnDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatAAnSetting', $settings['mainbackground']['CatAAnControll']));
        }

        public static function Values(){
            return (object)[
                'CategoryArticleNumber' => !get_theme_mod('CD_CatALNSetting') ? 5 : get_theme_mod('CD_CatALNSetting'),
                'CategoryArticleTemplate' => !get_theme_mod('CD_CatADSetting') ? 'pt1' : get_theme_mod('CD_CatADSetting'),
                'CategoryArticleSPTemplate' => !get_theme_mod('CD_CatADSPSetting') ? 'pt1' : get_theme_mod('CD_CatADSPSetting'),
                'SetCategoryArticleTagDesign' => !get_theme_mod('CD_CatATDSetting') ? 'pt1' : get_theme_mod('CD_CatATDSetting'),
                'SetCategoryArticleWRadius' => !get_theme_mod('CD_CatAWBRSetting') ? '0px' : get_theme_mod('CD_CatAWBRSetting'),
                'SetCategoryArticleCRadius' => !get_theme_mod('CD_CatACBRSetting') ? '0px' : get_theme_mod('CD_CatACBRSetting'),

                //関連記事一覧 タイトルブロックと記事一覧の余白の間隔
                'CategoryArticleAreaTitleBottomMargin' => !get_theme_mod('CD_CatArAMgSetting') ? '.2rem' : get_theme_mod('CD_CatArAMgSetting'),

                //関連記事一覧 タイトルブロックの余白
                'CategoryArticleAreaTitlePadding' => !get_theme_mod('CD_CatArATPdSetting') ? '.5rem' : get_theme_mod('CD_CatArATPdSetting'),

                //関連記事一覧 コンテンツの余白
                'CategoryArticleAreaContentPadding' => !get_theme_mod('CD_CatArACtPdSetting') ? '.5rem' : get_theme_mod('CD_CatArACtPdSetting'),
                
                //関連記事一覧　背景画像の設定
                'SetCatABgImg' => !get_theme_mod('CatABgImg_setting') ? NULL : get_theme_mod('CatABgImg_setting'),
                'SetCatABgImgStatus' => !get_theme_mod('CatABgImgSt_setting') ? '' : get_theme_mod('CatABgImgSt_setting'),

                'CategoryArticleTitle' => !get_theme_mod('CD_CatATTSetting') ? '関連記事一覧' : get_theme_mod('CD_CatATTSetting'),
                'CategoryArticleTitleDir' => !get_theme_mod('CD_CatATTDSetting') ? 'center' : get_theme_mod('CD_CatATTDSetting'),
                'CategoryArticleTitleFontSize' => !get_theme_mod('CD_CatATTFsSetting') ? '18px' : get_theme_mod('CD_CatATTFsSetting'),
                'CategoryArticleTitleFontWeight' => !get_theme_mod('CD_CatATTFwSetting') ? 'normal' : get_theme_mod('CD_CatATTFwSetting'),
                'CategoryArticleTitleFontAnimation' => !get_theme_mod('CD_CatATTAnSetting') ? 'none' : get_theme_mod('CD_CatATTAnSetting'),
                'CategoryArticleBottomTitle' => !get_theme_mod('CD_CatABTSetting') ? 'Related' : get_theme_mod('CD_CatABTSetting'),
                'CategoryArticleBottomTitleDir' => !get_theme_mod('CD_CatABTDSetting') ? 'center' : get_theme_mod('CD_CatABTDSetting'),
                'CategoryArticleBottomTitleAnimation' => !get_theme_mod('CD_CatABTAnSetting') ? 'none' : get_theme_mod('CD_CatABTAnSetting'),
                'CategoryArticleBottomTitleFontSize' => !get_theme_mod('CD_CatABTFsSetting') ? '16px' : get_theme_mod('CD_CatABTFsSetting'),
                'CategoryArticleBottomTitleFontWeight' => !get_theme_mod('CD_CatABTFwSetting') ? 'normal' : get_theme_mod('CD_CatABTFwSetting'),
                'CategoryArticleTitleBackground' => !get_theme_mod('CD_CatATBgSetting') ? '#ffffff' : get_theme_mod('CD_CatATBgSetting'),
                'CategoryArticleFontColor' => !get_theme_mod('CD_CatATCSetting') ? '#212529' : get_theme_mod('CD_CatATCSetting'),
                'CategoryArticleBackground' => !get_theme_mod('CD_CatABgSetting') ? '#f4f4f4' : get_theme_mod('CD_CatABgSetting'),
                'CategoryArticleAnimation' => !get_theme_mod('CD_CatAAnSetting') ? 'none' : get_theme_mod('CD_CatAAnSetting'),
                'SetCategoryArticleEachBackground' => !get_theme_mod('CD_CatAEBgSetting') ? '#ffffff' : get_theme_mod('CD_CatAEBgSetting'),
                'SetCategoryArticleCatLinkColor' => !get_theme_mod('CD_CatACCSetting') ? '#ffffff' : get_theme_mod('CD_CatACCSetting'),
                'SetCategoryArticleCatLinkBackgroundColor' => !get_theme_mod('CD_CatACBgSetting') ? '#212529' : get_theme_mod('CD_CatACBgSetting'),
                'SetCategoryArticleDateFontColor' => !get_theme_mod('CD_CatACDCSetting') ? '#212529' : get_theme_mod('CD_CatACDCSetting'),
                'SetCategoryArticleTitleFontColor' => !get_theme_mod('CD_CatAPTCSetting') ? '#212529' : get_theme_mod('CD_CatAPTCSetting'),
                'SetCategoryArticleThumbBorderColor' => !get_theme_mod('CD_CatAThBCSetting') ? '#212529' : get_theme_mod('CD_CatAThBCSetting'),
                'SetCategoryArticleAreaShadow' => !get_theme_mod('CD_CatAShdSetting') ? 'false' : get_theme_mod('CD_CatAShdSetting'),
                'SetCategoryArticleAreaShadowLevel' => !get_theme_mod('CD_CatAShdLvSetting') ? '0.5' : get_theme_mod('CD_CatAShdLvSetting'),
                'SetCategoryArticleAreaContentShadow' => !get_theme_mod('CD_CatAShdInSetting') ? 'false' : get_theme_mod('CD_CatAShdInSetting'),
                'SetCategoryArticleAreaContentShadowLevel' => !get_theme_mod('CD_CatAShdLvInSetting') ? '0.5' : get_theme_mod('CD_CatAShdLvInSetting')
            ];
        }
    }
    new CustomizeMainColumnCategoryArticle();
?>