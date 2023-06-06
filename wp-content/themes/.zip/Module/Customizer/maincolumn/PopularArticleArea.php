<?php
    class CustomizeMainColumnPopularArticleArea{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuStatus' ) );
        }

        public function SetMenuStatus( $wp_customize ) {
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'mainbackground' => array(
                    //人気記事一覧 デザイン
                    'PArDSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArDSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'PArDSetting' => 'CD_PArDSetting',
                    'PArDSPSetting' => 'CD_PArDSPSetting',
                    'PArTDSetting' => 'CD_PArTDSetting',
                    'PArWBRSetting' => 'CD_PArWBRSetting',
                    'PArCBRSetting' => 'CD_PArCBRSetting',
                    'PArThBDSetting' => 'CD_PArThBDSetting',
                    'PArDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArDSetting', 
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListLayout
                    ),
                    'PArDSPControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArDSPControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArDSPSetting',
                        'default'   => 'pt1',
                        'choices'     =>  Settings::$ArticleListSPLayout
                    ),
                    'PArTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArTDSetting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTDControll"]["choices"]["pt3"] ),
                            'none'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTDControll"]["choices"]["none"] )
                        )
                    ),
                    'PArWBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArWBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArWBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'PArCBRControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArCBRControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArCBRSetting', 
                        'default'   => '0px',
                        'choices'     =>  Settings::BorderRadius()
                    ),
                    'PArThBDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArThBDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArThBDSetting', 
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArThBDControll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArThBDControll"]["choices"]["false"] )
                        )
                    ),

                    //背景画像の設定
                    'PArBgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'PArBgImgsetting' => 'PArBgImg_setting',
                    'PArBgImgStsetting' => 'PArBgImgSt_setting',
                    'PArBgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeMainColumnPopularArticleArea"],
                        'section' => 'PArBgImg_section',
                        'settings' => 'PArBgImg_setting',
                    ),
                    'PArBgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'PArBgImg_section', 
                        'settings'    => 'PArBgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),

                    //人気記事一覧 表示数、タイトル(上)、(下)の設定
                    'PArLNSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArLNSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'PArLNSetting' => 'CD_PArLNSetting',
                    'PArLNControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArLNControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArLNSetting',
                        'default'   => 5,
                        'choices'     =>  Settings::ArNum()
                    ),
                    'PArTTSetting' => 'CD_PArTTSetting',
                    'PArTTDSetting' => 'CD_PArTTDSetting',
                    'PArMgSetting' => 'CD_PArMgSetting',
                    'PArTPdSetting' => 'CD_PArTPdSetting',
                    'PArCtPdSetting' => 'CD_PArCtPdSetting',
                    'PArTTFsSetting' => 'CD_PArTTFsSetting',
                    'PArTTFwSetting' => 'CD_PArTTFwSetting',
                    'PArTTAnSetting' => 'CD_PArTTAnSetting',
                    'PArTTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTControll"]["label"],
                        'section'  => 'CD_PArLNSection',
                        'settings' => 'CD_PArTTSetting'
                    ),
                    'PArTTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArTTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTDControll"]["choices"]["left"] )
                        )
                    ),
                    'PArTPdControll' => array(
                        'label'       => 'タイトルブロックの余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArTPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumntitlepadding
                    ),
                    'PArCtPdControll' => array(
                        'label'       => '記事の余白を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArCtPdSetting',
                        'default'   => '.5rem',
                        'choices'     =>  Settings::$maincolumncontentpadding
                    ),
                    'PArMgControll' => array(
                        'label'       => 'タイトルブロックと記事一覧の間隔を設定する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArMgSetting',
                        'default'   => '.2rem',
                        'choices'     =>  Settings::$maincolumtitlecontentnmargin
                    ),
                    'PArTTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArTTFsSetting', 
                        'default'   => '18px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'PArTTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArTTFwSetting',
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'PArTTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArTTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'PArBTSetting' => 'CD_PArBTSetting',
                    'PArBTDSetting' => 'CD_PArBTDSetting',
                    'PArBTFsSetting' => 'CD_PArBTFsSetting',
                    'PArBTFwSetting' => 'CD_PArBTFwSetting',
                    'PArBTAnSetting' => 'CD_PArBTAnSetting',
                    'PArBTControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTControll"]["label"],
                        'section'  => 'CD_PArLNSection',
                        'settings' => 'CD_PArBTSetting'
                    ),
                    'PArBTFsControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTFsControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArBTFsSetting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    //ここから
                    'PArBTFwControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTFwControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArBTFwSetting', 
                        'default'   => 'normal',
                        'choices'     =>  array(
                            'normal'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTFwControll"]["choices"]["normal"] ),
                            'bold'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTFwControll"]["choices"]["bold"] )
                        )
                    ),
                    'PArBTDControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTDControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArBTDSetting',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTDControll"]["choices"]["center"] ),
                            'right'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTDControll"]["choices"]["right"] ),
                            'left'   => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTDControll"]["choices"]["left"] )
                        )
                    ),
                    'PArBTAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBTAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArLNSection', 
                        'settings'    => 'CD_PArBTAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),

                    //人気記事一覧 色の調整
                    'PArTBgSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTBgSection"]["title"], 'theme_slug1' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'PArTBgSetting' => 'CD_PArTBgSetting',
                    'PArTCSetting' => 'CD_PArTCSetting',
                    'PArBgSetting' => 'CD_PArBgSetting',
                    'PArEBgSetting' => 'CD_PArEBgSetting',
                    'PArCCSetting' => 'CD_PArCCSetting',
                    'PArCBgSetting' => 'CD_PArCBgSetting',
                    'PArCDCSetting' => 'CD_PArCDCSetting',
                    'PArPTCSetting' => 'CD_PArPTCSetting',
                    'PArThBCSetting' => 'CD_PArThBCSetting',
                    'PArTBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArBgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArCCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'default3-8' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArCDCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArPTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArThBCDefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArTBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTBgControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArTBgSetting'
                    ),
                    'PArTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArTCControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArTCSetting'
                    ),
                    'PArBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArBgControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArBgSetting'
                    ),
                    'PArEBgControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArEBgControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArEBgSetting'
                    ),
                    'PArCCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArCCControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArCCSetting'
                    ),
                    'PArCDCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArCDCControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArCDCSetting'
                    ),
                    'PArPTCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArPTCControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArPTCSetting'
                    ),
                    'PArThBCControll' => array(
                        'label'    => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArThBCControll"]["label"],
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArThBCSetting'
                    ),

                    'PArAnSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArAnSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'PArAnSetting' => 'CD_PArAnSetting',
                    'PArAnControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArAnControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArAnSection', 
                        'settings'    => 'CD_PArAnSetting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$ElementAnimation
                    ),

                    //人気記事一覧 影の設定
                    'PArShdSection' => array(
                        'title'    => __( $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdSection"]["title"], 'theme_slug' ),
                        'panel'    => 'maincolumn_design_panel'
                    ),
                    'PArShdSetting' => 'CD_PArShdSetting',
                    'PArShdLvSetting' => 'CD_PArShdLvSetting',
                    'PArShdInSetting' => 'CD_PArShdInSetting',
                    'PArShdLvInSetting' => 'CD_PArShdLvInSetting',
                    'PArShdControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArShdSection', 
                        'settings'    => 'CD_PArShdSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdControll"]["choices"]["true"]
                        )
                    ),
                    'PArShdLvControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdLvControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArShdSection', 
                        'settings'    => 'CD_PArShdLvSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    ),
                    'PArShdInControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArShdSection', 
                        'settings'    => 'CD_PArShdInSetting',
                        'default'   => 'true',
                        'choices' => array(
                            'false' => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdInControll"]["choices"]["false"],
                            'true' => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdInControll"]["choices"]["true"]
                        )
                    ),
                    'PArShdLvInControll' => array(
                        'label'       => $lng["vals"]["CustomizeMainColumnPopularArticleArea"]["PArShdLvInControll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'CD_PArShdSection', 
                        'settings'    => 'CD_PArShdLvInSetting', 
                        'default'   => '0.5',
                        'choices'     =>  Settings::Num0To1()
                    )
                )
            );

            $wp_customize->add_section('CD_PArDSection', $settings['mainbackground']['PArDSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArDSPSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArWBRSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArCBRSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArThBDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArDSetting', $settings['mainbackground']['PArDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArDSPSetting', $settings['mainbackground']['PArDSPControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTDSetting', $settings['mainbackground']['PArTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArWBRSetting', $settings['mainbackground']['PArWBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArCBRSetting', $settings['mainbackground']['PArCBRControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArThBDSetting', $settings['mainbackground']['PArThBDControll']));

            //人気記事一覧 表示数、タイトル(上)、(下)の設定
            $wp_customize->add_section('CD_PArLNSection', $settings['mainbackground']['PArLNSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArLNSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArTTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArTTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArTTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArTTFwSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArTTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArBTSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArBTDSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArBTAnSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArBTFsSetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArBTFwSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArLNSetting', $settings['mainbackground']['PArLNControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTSetting', $settings['mainbackground']['PArTTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTDSetting', $settings['mainbackground']['PArTTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTFsSetting', $settings['mainbackground']['PArTTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTFwSetting', $settings['mainbackground']['PArTTFwControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTAnSetting', $settings['mainbackground']['PArTTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTSetting', $settings['mainbackground']['PArBTControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTDSetting', $settings['mainbackground']['PArBTDControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTAnSetting', $settings['mainbackground']['PArBTAnControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTFsSetting', $settings['mainbackground']['PArBTFsControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTFwSetting', $settings['mainbackground']['PArBTFwControll']));

            //最新記事一覧 タイトルブロックと記事一覧の余白の間隔
            $wp_customize->add_section('CD_PArMgSection', $settings['mainbackground']['PArMgSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArMgSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArMgSetting', $settings['mainbackground']['PArMgControll']));

            //最新記事一覧　タイトルブロックの余白
            $wp_customize->add_section('CD_PArTPdSection', $settings['mainbackground']['PArTPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArTPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTPdSetting', $settings['mainbackground']['PArTPdControll']));

            //最新記事一覧　コンテンツの余白
            $wp_customize->add_section('CD_PArCtPdSection', $settings['mainbackground']['PArCtPdSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArCtPdSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArCtPdSetting', $settings['mainbackground']['PArCtPdControll']));

            //人気記事一覧　背景画像の設定
            $wp_customize->add_section('PArBgImg_section', $settings['mainbackground']['PArBgImgsection']);
            $wp_customize->add_setting($settings['mainbackground']['PArBgImgsetting']);
            $wp_customize->add_setting($settings['mainbackground']['PArBgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'PArBgImg_setting', $settings['mainbackground']['PArBgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'PArBgImgSt_setting', $settings['mainbackground']['PArBgImgStcontroll']));

            //人気記事一覧 色の調整
            $wp_customize->add_section('CD_PArTBgSection', $settings['mainbackground']['PArTBgSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArTBgSetting'], $settings['mainbackground']['PArTBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArTCSetting'], $settings['mainbackground']['PArTCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArBgSetting'], $settings['mainbackground']['PArBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArEBgSetting'], $settings['mainbackground']['PArEBgDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArCCSetting'], $settings['mainbackground']['PArCCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArCBgSetting'], $settings['mainbackground']['default3-8']);
            $wp_customize->add_setting($settings['mainbackground']['PArCDCSetting'], $settings['mainbackground']['PArCDCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArPTCSetting'], $settings['mainbackground']['PArPTCDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArThBCSetting'], $settings['mainbackground']['PArThBCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArTBgSetting', $settings['mainbackground']['PArTBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArTCSetting', $settings['mainbackground']['PArTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArBgSetting', $settings['mainbackground']['PArBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArEBgSetting', $settings['mainbackground']['PArEBgControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArCCSetting', $settings['mainbackground']['PArCCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArCDCSetting', $settings['mainbackground']['PArCDCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArPTCSetting', $settings['mainbackground']['PArPTCControll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArThBCSetting', $settings['mainbackground']['PArThBCControll']));

            //人気記事一覧 影の調整
            $wp_customize->add_section('CD_PArShdSection', $settings['mainbackground']['PArShdSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArShdSetting'], $settings['mainbackground']['PArShdDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArShdLvSetting'], $settings['mainbackground']['PArShdLvDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArShdInSetting'], $settings['mainbackground']['PArShdInDefault']);
            $wp_customize->add_setting($settings['mainbackground']['PArShdLvInSetting'], $settings['mainbackground']['PArShdLvInDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArShdSetting', $settings['mainbackground']['PArShdControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArShdLvSetting', $settings['mainbackground']['PArShdLvControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArShdInSetting', $settings['mainbackground']['PArShdInControll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArShdLvInSetting', $settings['mainbackground']['PArShdLvInControll']));

            //人気記事一覧 コンテンツのアニメーション
            $wp_customize->add_section('CD_PArAnSection', $settings['mainbackground']['PArAnSection']);
            $wp_customize->add_setting($settings['mainbackground']['PArAnSetting'], $settings['mainbackground']['PArAnDefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArAnSetting', $settings['mainbackground']['PArAnControll']));
        }

        public static function Values(){
            return (object)[
                'PopularArticleAreaNumber' => !get_theme_mod('CD_PArLNSetting') ? 5 : get_theme_mod('CD_PArLNSetting'),
                'PopularArticleAreaTemplate' => !get_theme_mod('CD_PArDSetting') ? 'pt1' : get_theme_mod('CD_PArDSetting'),
                'PopularArticleAreaSPTemplate' => !get_theme_mod('CD_PArDSPSetting') ? 'pt1' : get_theme_mod('CD_PArDSPSetting'),
                'SetPopularArticleAreaTagDesign' => !get_theme_mod('CD_PArTDSetting') ? 'pt1' : get_theme_mod('CD_PArTDSetting'),
                'SetPopularArticleAreaWRadius' => !get_theme_mod('CD_PArWBRSetting') ? '0px' : get_theme_mod('CD_PArWBRSetting'),
                'SetPopularArticleAreaCRadius' => !get_theme_mod('CD_PArCBRSetting') ? '0px' : get_theme_mod('CD_PArCBRSetting'),

                //人気記事一覧　背景画像の設定
                'SetPArBgImg' => !get_theme_mod('PArBgImg_setting') ? NULL : get_theme_mod('PArBgImg_setting'),
                'SetPArBgImgStatus' => !get_theme_mod('PArBgImgSt_setting') ? '' : get_theme_mod('PArBgImgSt_setting'),

                //最新記事一覧 タイトルブロックと記事一覧の余白の間隔
                'PopularArticleAreaTitleBottomMargin' => !get_theme_mod('CD_PArMgSetting') ? '.2rem' : get_theme_mod('CD_PArMgSetting'),

                //最新記事一覧 タイトルブロックの余白
                'PopularArticleAreaTitlePadding' => !get_theme_mod('CD_PArTPdSetting') ? '.5rem' : get_theme_mod('CD_PArTPdSetting'),

                //最新記事一覧 コンテンツの余白
                'PopularArticleAreaContentPadding' => !get_theme_mod('CD_PArCtPdSetting') ? '.5rem' : get_theme_mod('CD_PArCtPdSetting'),

                'PopularArticleAreaTitle' => !get_theme_mod('CD_PArTTSetting') ? '人気記事一覧' : get_theme_mod('CD_PArTTSetting'),
                'PopularArticleAreaTitleDir' => !get_theme_mod('CD_PArTTDSetting') ? 'center' : get_theme_mod('CD_PArTTDSetting'),
                'PopularArticleAreaTitleFontSize' => !get_theme_mod('CD_PArTTFsSetting') ? '18px' : get_theme_mod('CD_PArTTFsSetting'),
                'PopularArticleAreaTitleFontWeight' => !get_theme_mod('CD_PArTTFwSetting') ? 'normal' : get_theme_mod('CD_PArTTFwSetting'),
                'PopularArticleAreaTitleFontAnimation' => !get_theme_mod('CD_PArTTAnSetting') ? 'none' : get_theme_mod('CD_PArTTAnSetting'),
                'PopularArticleAreaBottomTitle' => !get_theme_mod('CD_PArBTSetting') ? 'Popular' : get_theme_mod('CD_PArBTSetting'),
                'PopularArticleAreaBottomTitleDir' => !get_theme_mod('CD_PArBTDSetting') ? 'center' : get_theme_mod('CD_PArBTDSetting'),
                'PopularArticleAreaBottomTitleAnimation' => !get_theme_mod('CD_PArBTAnSetting') ? 'none' : get_theme_mod('CD_PArBTAnSetting'),
                'PopularArticleAreaBottomTitleFontSize' => !get_theme_mod('CD_PArBTFsSetting') ? '16px' : get_theme_mod('CD_PArBTFsSetting'),
                'PopularArticleAreaBottomTitleFontWeight' => !get_theme_mod('CD_PArBTFwSetting') ? 'normal' : get_theme_mod('CD_PArBTFwSetting'),
                'PopularArticleAreaTitleBackground' => !get_theme_mod('CD_PArTBgSetting') ? '#ffffff' : get_theme_mod('CD_PArTBgSetting'),
                'PopularArticleAreaFontColor' => !get_theme_mod('CD_PArTCSetting') ? '#212529' : get_theme_mod('CD_PArTCSetting'),
                'PopularArticleAreaBackground' => !get_theme_mod('CD_PArBgSetting') ? '#f4f4f4' : get_theme_mod('CD_PArBgSetting'),
                'PopularArticleAreaAnimation' => !get_theme_mod('CD_PArAnSetting') ? 'none' : get_theme_mod('CD_PArAnSetting'),
                'SetPopularArticleAreaEachBackground' => !get_theme_mod('CD_PArEBgSetting') ? '#ffffff' : get_theme_mod('CD_PArEBgSetting'),
                'SetPopularArticleAreaCatLinkColor' => !get_theme_mod('CD_PArCCSetting') ? '#ffffff' : get_theme_mod('CD_PArCCSetting'),
                'SetPopularArticleAreaCatLinkBackgroundColor' => !get_theme_mod('CD_PArCBgSetting') ? '#212529' : get_theme_mod('CD_PArCBgSetting'),
                'SetPopularArticleAreaDateFontColor' => !get_theme_mod('CD_PArCDCSetting') ? '#212529' : get_theme_mod('CD_PArCDCSetting'),
                'SetPopularArticleAreaTitleFontColor' => !get_theme_mod('CD_PArPTCSetting') ? '#212529' : get_theme_mod('CD_PArPTCSetting'),
                'SetPopularArticleAreaThumbBorderColor' => !get_theme_mod('CD_PArThBCSetting') ? '#212529' : get_theme_mod('CD_PArThBCSetting'),
                'SetPopularArticleAreaShadow' => !get_theme_mod('CD_PArShdSetting') ? 'false' : get_theme_mod('CD_PArShdSetting'),
                'SetPopularArticleAreaShadowLevel' => !get_theme_mod('CD_PArShdLvSetting') ? '0.5' : get_theme_mod('CD_PArShdLvSetting'),
                'SetPopularArticleAreaContentShadow' => !get_theme_mod('CD_PArShdInSetting') ? 'false' : get_theme_mod('CD_PArShdInSetting'),
                'SetPopularArticleAreaContentShadowLevel' => !get_theme_mod('CD_PArShdLvInSetting') ? '0.5' : get_theme_mod('CD_PArShdLvInSetting')
            ];
        }
    }
    new CustomizeMainColumnPopularArticleArea();
?>