<?php
    class CustomizeHeader{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetHeaderLayout' ) );
        }

        public function SetHeaderLayout($wp_customize){
            $lng = SetWpLang::ReturnJson();

            $settings = array(
                'headertemplate' => array(
                    'panel' => array(
                        'title'    => $lng["vals"]["CustomizeHeader"]["panel"]["title"],
                        'priority' => 2
                    ),
                    //デザイン
                    'HDsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HDsection"]["title"], 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HDsetting' => 'HD_setting',
                    'HNDsetting' => 'HND_setting',
                    'HDcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HDcontroll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'HD_section',
                        'settings'    => 'HD_setting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeHeader"]["HDcontroll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeHeader"]["HDcontroll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeHeader"]["HDcontroll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeHeader"]["HDcontroll"]["choices"]["pt4"] ),
                            'none'   => __( $lng["vals"]["CustomizeHeader"]["HDcontroll"]["choices"]["none"] )
                        )
                    ),
                    'HdBgImgsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HdBgImgsection"]["title"], 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HdBgImgsetting' => 'HdBgImg_setting',
                    'HdLoBgImgsetting' => 'HdLoBgImg_setting',
                    'HdBgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeHeader"]["HdBgImgcontroll"]["label"],
                        'section' => 'HdBgImg_section',
                        'settings' => 'HdBgImg_setting',
                        'description' => $lng["vals"]["CustomizeHeader"]["HdBgImgcontroll"]["description"],
                    ),
                    'HdLoBgImgcontroll' => array(
                        'label' => $lng["vals"]["CustomizeHeader"]["HdLoBgImgcontroll"]["label"],
                        'section' => 'HdBgImg_section',
                        'settings' => 'HdLoBgImg_setting',
                        'description' => $lng["vals"]["CustomizeHeader"]["HdLoBgImgcontroll"]["description"],
                    ),
                    'HdBgImgStsetting' => 'HdBgImgSt_setting',
                    'HdLoBgImgStsetting' => 'HdLoBgImgSt_setting',
                    'HdBgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HdBgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HdBgImg_section', 
                        'settings'    => 'HdBgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeHeader"]["HdBgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeHeader"]["HdBgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),
                    'HdLoBgImgStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HdLoBgImgStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HdBgImg_section', 
                        'settings'    => 'HdLoBgImgSt_setting',
                        'default'   => '',
                        'choices'     =>  array(
                            'background-repeat: repeat;'   => __( $lng["vals"]["CustomizeHeader"]["HdLoBgImgStcontroll"]["choices"]["backgroundrepeat"] ),
                            'background-repeat: no-repeat; background-size: 100%;'   => __( $lng["vals"]["CustomizeHeader"]["HdLoBgImgStcontroll"]["choices"]["backgroundnorepeat"] )
                        )
                    ),

                    'HNDControll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HNDControll"]["label"], 
                        'type'        => 'radio',
                        'section'     => 'HD_section',
                        'settings'    => 'HND_setting',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( $lng["vals"]["CustomizeHeader"]["HNDControll"]["choices"]["pt1"] ),
                            'pt2'   => __( $lng["vals"]["CustomizeHeader"]["HNDControll"]["choices"]["pt2"] ),
                            'pt3'   => __( $lng["vals"]["CustomizeHeader"]["HNDControll"]["choices"]["pt3"] ),
                            'pt4'   => __( $lng["vals"]["CustomizeHeader"]["HNDControll"]["choices"]["pt4"] ),
                            'none'   => __( $lng["vals"]["CustomizeHeader"]["HNDControll"]["choices"]["none"] )
                        )
                    ),

                    //色
                    'HCsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HCsection"]["title"], 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HWrpBGsetting' => 'HWrpBG_setting',
                    'HWrpBGStsetting' => 'HWrpBGSt_setting',
                    'HBGsetting' => 'HBG_setting',
                    'HBGStsetting' => 'HBGSt_setting',
                    'HLoBGsetting' => 'HLoBG_setting',
                    'HLoBGStsetting' => 'HLoBGSt_setting',
                    'HFCsetting' => 'HFC_setting',
                    'HFLoCsetting' => 'HFLoC_setting',
                    'HFHVFCsetting' => 'HFHVFC_setting',
                    'HNFCsetting' => 'HNFC_setting',
                    'HNHVFCsetting' => 'HNHVFC_setting',
                    'HNBGsetting' => 'HNBG_setting',
                    'HNBGStsetting' => 'HNBGSt_setting',
                    'HWrpBGdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HBGdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HLoBGdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HFCdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HFLoCdefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HFHVFCdefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HNFCdefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HNHVFCdefault' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HNBGdefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'HWrpBGcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HWrpBGcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HWrpBG_setting'
                    ),
                    'HWrpBGStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HWrpBGStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HC_section', 
                        'settings'    => 'HWrpBGSt_setting',
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeHeader"]["HWrpBGStcontroll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeHeader"]["HWrpBGStcontroll"]["choices"]["false"] )
                        )
                    ),
                    'HBGcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HBGcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HBG_setting'
                    ),
                    'HBGStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HBGStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HC_section', 
                        'settings'    => 'HBGSt_setting',
                        'default'   => 'false',
                        'choices'     =>  array(
                            'false'   => __( $lng["vals"]["CustomizeHeader"]["HBGStcontroll"]["choices"]["false"] ),
                            'true'   => __( $lng["vals"]["CustomizeHeader"]["HBGStcontroll"]["choices"]["true"] )
                        )
                    ),
                    'HLoBGcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HLoBGcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HLoBG_setting'
                    ),
                    'HLoBGStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HLoBGStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HC_section', 
                        'settings'    => 'HLoBGSt_setting',
                        'default'   => 'false',
                        'choices'     =>  array(
                            'false'   => __( $lng["vals"]["CustomizeHeader"]["HLoBGStcontroll"]["choices"]["false"] ),
                            'true'   => __( $lng["vals"]["CustomizeHeader"]["HLoBGStcontroll"]["choices"]["true"] )
                        )
                    ),
                    'HFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HFCcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HFC_setting'
                    ),
                    'HFLoCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HFLoCcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HFLoC_setting'
                    ),
                    'HFHVFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HFHVFCcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HFHVFC_setting'
                    ),
                    'HNFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HNFCcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HNFC_setting'
                    ),
                    'HNHVFCcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HNHVFCcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HNHVFC_setting'
                    ),
                    'HNBGcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HNBGcontroll"]["label"],
                        'section'    => 'HC_section',
                        'settings'   => 'HNBG_setting'
                    ),
                    'HNBGStcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HNBGStcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HC_section', 
                        'settings'    => 'HNBGSt_setting',
                        'default'   => 'true',
                        'choices'     =>  array(
                            'true'   => __( $lng["vals"]["CustomizeHeader"]["HNBGStcontroll"]["choices"]["true"] ),
                            'false'   => __( $lng["vals"]["CustomizeHeader"]["HNBGStcontroll"]["choices"]["false"] )
                        )
                    ),
                    //フォントサイズの調整
                    'HFszsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HFszsection"]["title"], 'theme_slug3' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'LkFszsetting' => 'LkFsz_setting',
                    'LFszsetting' => 'LFsz_setting',
                    'HNFszsetting' => 'HNFsz_setting',
                    'LkFszcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["LkFszcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HFsz_section', 
                        'settings'    => 'LkFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'LFszcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["LFszcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HFsz_section', 
                        'settings'    => 'LFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),
                    'HNFszcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HNFszcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HFsz_section', 
                        'settings'    => 'HNFsz_setting',
                        'default'   => '16px',
                        'choices'     =>  Settings::Fsize()
                    ),

                    //アニメーション
                    'LAnsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["LAnsection"]["title"], 'theme_slug3' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'LAnsetting' => 'LAn_setting',
                    'LkAnsetting' => 'LkAn_setting',
                    'LAncontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["LAncontroll"]["label"],
                        'type'        => 'radio',
                        'section'    => 'An_section',
                        'settings'   => 'LAn_setting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$FontAnimation
                    ),
                    'LkAncontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["LkAncontroll"]["label"],
                        'type'        => 'radio',
                        'section'    => 'An_section',
                        'settings'   => 'LkAn_setting',
                        'default'   => 'none',
                        'choices'     =>  Settings::$MultiFontAnimation
                    ),

                    'HSDsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HSDsection"]["title"], 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HSDsetting' => 'HSD_setting',
                    'HSDcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HSDcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HSD_section', 
                        'settings'    => 'HSD_setting',
                        'default'   => 'box-shadow:none;',
                        'choices' => array(
                            'box-shadow:0.1px 0.1px 5px rgb(0, 0, 0, 0.2);' => $lng["vals"]["CustomizeHeader"]["HSDcontroll"]["choices"]["boxshadow"],
                            'border-bottom:0.5px solid rgb(0, 0, 0, 0.2);' => $lng["vals"]["CustomizeHeader"]["HSDcontroll"]["choices"]["borderbottom"],
                            '' => $lng["vals"]["CustomizeHeader"]["HSDcontroll"]["choices"]["none"],
                        )
                    ),
                    //文字
                    'HTsection' => array(
                        'title'    => $lng["vals"]["CustomizeHeader"]["HTsection"]["title"],
                        'panel'    => 'header_design_panel'
                    ),
                    'HTsetting' => 'HT_setting',
                    'HTcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HTcontroll"]["label"],
                        'section'  => 'HT_section',
                        'settings' => 'HT_setting'
                    ),
                    'HTLsection' => array(
                        'title'    => $lng["vals"]["CustomizeHeader"]["HTLsection"]["title"],
                        'panel'    => 'header_design_panel'
                    ),
                    'HTLsetting' => 'HTL_setting',
                    'HTLcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HTLcontroll"]["label"],
                        'section'  => 'HTL_section',
                        'settings' => 'HTL_setting'
                    ),

                    //ロゴ画像
                    'HLDssection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HLDssection"]["title"], 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HLDssetting' => 'HLDs_setting',
                    'HLDscontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HLDscontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HLDs_section', 
                        'settings'    => 'HLDs_setting',
                        'default'   => 'd-inline-block',
                        'choices' => array(
                            'd-inline-block' => $lng["vals"]["CustomizeHeader"]["HLDscontroll"]["choices"]["inlineblock"],
                            'd-none' => $lng["vals"]["CustomizeHeader"]["HLDscontroll"]["choices"]["none"]
                        )
                    ),
                    'HLTDsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HLTDsection"]["title"], 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HLTDsetting' => 'HLTD_setting',
                    'HLTDcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HLTDcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HLTD_section', 
                        'settings'    => 'HLTD_setting',
                        'default'   => 'd-inline-block',
                        'choices' => array(
                            'd-inline-block' => $lng["vals"]["CustomizeHeader"]["HLTDcontroll"]["choices"]["inlineblock"],
                            'd-none' => $lng["vals"]["CustomizeHeader"]["HLTDcontroll"]["choices"]["none"]
                        )
                    ),
                    'HLTsection' => array(
                        'title'    => $lng["vals"]["CustomizeHeader"]["HLTsection"]["title"],
                        'panel'    => 'header_design_panel'
                    ),
                    'HLTsetting' => 'HLT_setting',
                    'HLTcontroll' => array(
                        'label'    => $lng["vals"]["CustomizeHeader"]["HLTcontroll"]["label"],
                        'section'  => 'HLT_section',
                        'settings' => 'HLT_setting',
                        'priority' => 1
                    ),

                    'HPsection' => array(
                        'title'    => __( $lng["vals"]["CustomizeHeader"]["HPsection"]["title"], 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'HPsetting' => 'HP_setting',
                    'HPcontroll' => array(
                        'label'       => $lng["vals"]["CustomizeHeader"]["HPcontroll"]["label"], 
                        'type'        => 'select',
                        'section'     => 'HP_section', 
                        'settings'    => 'HP_setting',
                        'default'   => 'fixed',
                        'choices' => array(
                            'fixed' => $lng["vals"]["CustomizeHeader"]["HPcontroll"]["choices"]["fixed"],
                            'none' => $lng["vals"]["CustomizeHeader"]["HPcontroll"]["choices"]["none"]
                        )
                    ),
                )
            );
            $wp_customize->add_panel('header_design_panel', $settings['headertemplate']['panel']);
            $wp_customize->add_section('HD_section', $settings['headertemplate']['HDsection']);
            $wp_customize->add_setting($settings['headertemplate']['HDsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HNDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HD_setting', $settings['headertemplate']['HDcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HND_setting', $settings['headertemplate']['HNDControll']));

            $wp_customize->add_section('HdBgImg_section', $settings['headertemplate']['HdBgImgsection']);
            $wp_customize->add_setting($settings['headertemplate']['HdBgImgsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HdLoBgImgsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HdBgImgStsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HdLoBgImgStsetting']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'HdBgImg_setting', $settings['headertemplate']['HdBgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'HdLoBgImg_setting', $settings['headertemplate']['HdLoBgImgcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HdBgImgSt_setting', $settings['headertemplate']['HdBgImgStcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HdLoBgImgSt_setting', $settings['headertemplate']['HdLoBgImgStcontroll']));

            $wp_customize->add_section('HC_section', $settings['headertemplate']['HCsection']);
            $wp_customize->add_setting($settings['headertemplate']['HWrpBGsetting'], $settings['headertemplate']['HWrpBGdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HWrpBGStsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HBGsetting'], $settings['headertemplate']['HBGdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HBGStsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HLoBGsetting'], $settings['headertemplate']['HLoBGdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HLoBGStsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HFCsetting'], $settings['headertemplate']['HFCdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HFLoCsetting'], $settings['headertemplate']['HFLoCdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HFHVFCsetting'], $settings['headertemplate']['HFHVFCdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HNFCsetting'], $settings['headertemplate']['HNFCdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HNHVFCsetting'], $settings['headertemplate']['HNHVFCdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HNBGsetting'], $settings['headertemplate']['HNBGdefault']);
            $wp_customize->add_setting($settings['headertemplate']['HNBGStsetting']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HWrpBG_setting', $settings['headertemplate']['HWrpBGcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HWrpBGSt_setting', $settings['headertemplate']['HWrpBGStcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HBG_setting', $settings['headertemplate']['HBGcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HBGSt_setting', $settings['headertemplate']['HBGStcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HLoBG_setting', $settings['headertemplate']['HLoBGcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HLoBGSt_setting', $settings['headertemplate']['HLoBGStcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HFC_setting', $settings['headertemplate']['HFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HFLoC_setting', $settings['headertemplate']['HFLoCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HFHVFC_setting', $settings['headertemplate']['HFHVFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HNFC_setting', $settings['headertemplate']['HNFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HNHVFC_setting', $settings['headertemplate']['HNHVFCcontroll']));
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'HNBG_setting', $settings['headertemplate']['HNBGcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HNBGSt_setting', $settings['headertemplate']['HNBGStcontroll']));

            $wp_customize->add_section('HFsz_section', $settings['headertemplate']['HFszsection']);
            $wp_customize->add_setting($settings['headertemplate']['LkFszsetting']);
            $wp_customize->add_setting($settings['headertemplate']['LFszsetting']);
            $wp_customize->add_setting($settings['headertemplate']['HNFszsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'LkFsz_setting', $settings['headertemplate']['LkFszcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'LFsz_setting', $settings['headertemplate']['LFszcontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HNFsz_setting', $settings['headertemplate']['HNFszcontroll']));

            $wp_customize->add_section('An_section', $settings['headertemplate']['LAnsection']);
            $wp_customize->add_setting($settings['headertemplate']['LAnsetting'], $settings['headertemplate']['LAndefault']);
            $wp_customize->add_setting($settings['headertemplate']['LkAnsetting'], $settings['headertemplate']['LkAndefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'LAn_setting', $settings['headertemplate']['LAncontroll']));
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'LkAn_setting', $settings['headertemplate']['LkAncontroll']));

            $wp_customize->add_section('HSD_section', $settings['headertemplate']['HSDsection']);
            $wp_customize->add_setting($settings['headertemplate']['HSDsetting'], $settings['headertemplate']['HSDdefault']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HSD_setting', $settings['headertemplate']['HSDcontroll']));

            $wp_customize->add_section('HT_section', $settings['headertemplate']['HTsection']);
            $wp_customize->add_setting($settings['headertemplate']['HTsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HT_setting', $settings['headertemplate']['HTcontroll']));

            $wp_customize->add_section('HTL_section', $settings['headertemplate']['HTLsection']);
            $wp_customize->add_setting($settings['headertemplate']['HTLsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HTL_setting', $settings['headertemplate']['HTLcontroll']));

            $wp_customize->add_section('HLDs_section', $settings['headertemplate']['HLDssection']);
            $wp_customize->add_setting($settings['headertemplate']['HLDssetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HLDs_setting', $settings['headertemplate']['HLDscontroll']));

            $wp_customize->add_section('HLTD_section', $settings['headertemplate']['HLTDsection']);
            $wp_customize->add_setting($settings['headertemplate']['HLTDsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HLTD_setting', $settings['headertemplate']['HLTDcontroll']));

            $wp_customize->add_section('HLT_section', $settings['headertemplate']['HLTsection']);
            $wp_customize->add_setting($settings['headertemplate']['HLTsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HLT_setting', $settings['headertemplate']['HLTcontroll']));

            //その他
            $wp_customize->add_section('HP_section', $settings['headertemplate']['HPsection']);
            $wp_customize->add_setting($settings['headertemplate']['HPsetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'HP_setting', $settings['headertemplate']['HPcontroll']));
        }

        public static function Values(){
            return (object)[
                'HeaderTemplate' => !get_theme_mod('HD_setting') ? 'pt1' : get_theme_mod('HD_setting'),
                'ReturnHeaderWrpBGColor' => !get_theme_mod('HWrpBG_setting') ? '#06357c' : get_theme_mod('HWrpBG_setting'),
                'ReturnHeaderWrpBGStatus' => !get_theme_mod('HWrpBGSt_setting') ? 'true' : get_theme_mod('HWrpBGSt_setting'),
                'ReturnHeaderBGColor' => !get_theme_mod('HBG_setting') ? '#06357c' : get_theme_mod('HBG_setting'),
                'ReturnHeaderBGStatus' => !get_theme_mod('HBGSt_setting') ? 'false' : get_theme_mod('HBGSt_setting'),
                'ReturnHeaderLogoBGColor' => !get_theme_mod('HLoBG_setting') ? '#ffffff' : get_theme_mod('HLoBG_setting'),
                'ReturnHeaderLogoBGStatus' => !get_theme_mod('HLoBGSt_setting') ? 'false' : get_theme_mod('HLoBGSt_setting'),
                'ReturnHeaderFCColor' => !get_theme_mod('HFC_setting') ? '#ffffff' : get_theme_mod('HFC_setting'),
                'ReturnHeaderFLoCColor' => !get_theme_mod('HFLoC_setting') ? '#212529' : get_theme_mod('HFLoC_setting'),
                'ReturnHeaderHVFCColor' => !get_theme_mod('HFHVFC_setting') ? '#afafaf' : get_theme_mod('HFHVFC_setting'),
                'LinkFontSize' => !get_theme_mod('LkFsz_setting') ? '16px' : get_theme_mod('LkFsz_setting'),
                'LogoFontSize' => !get_theme_mod('LFsz_setting') ? '16px' : get_theme_mod('LFsz_setting'),
                'HeaderNotificationFontSize' => !get_theme_mod('HNFsz_setting') ? '16px' : get_theme_mod('HNFsz_setting'),
                'SetTLAnimation' => !get_theme_mod('LAn_setting') ? 'none' : get_theme_mod('LAn_setting'),
                'SetTLinkAnimation' => !get_theme_mod('LkAn_setting') ? 'none' : get_theme_mod('LkAn_setting'),
                'SetShadowUnderHeader' => !get_theme_mod('HSD_setting') ? 'box-shadow:none;' : get_theme_mod('HSD_setting'),
                'SetHeaderNotifiCationTitle' => !get_theme_mod('HT_setting') ? 'お知らせ' : get_theme_mod('HT_setting'),
                'SetHeaderNotifiCationTitleURL' => !get_theme_mod('HTL_setting') ? get_bloginfo('url') : get_theme_mod('HTL_setting'),
                'SetHeaderNotifiCationDesign' => !get_theme_mod('HND_setting') ? 'pt1' : get_theme_mod('HND_setting'),
                'SetHdBgImg' => !get_theme_mod('HdBgImg_setting') ? NULL : get_theme_mod('HdBgImg_setting'),
                'SetHdLoBgImg' => !get_theme_mod('HdLoBgImg_setting') ? NULL : get_theme_mod('HdLoBgImg_setting'),
                'SetHdBgImgStatus' => !get_theme_mod('HdBgImgSt_setting') ? '' : get_theme_mod('HdBgImgSt_setting'),
                'SetHdLoBgImgStatus' => !get_theme_mod('HdLoBgImgSt_setting') ? '' : get_theme_mod('HdLoBgImgSt_setting'),
                'SetHeaderNotifiCationFontColor' => !get_theme_mod('HNFC_setting') ? '#ffffff' : get_theme_mod('HNFC_setting'),
                'SetHeaderNotifiCationFontHoverColor' => !get_theme_mod('HNHVFC_setting') ? '#afafaf' : get_theme_mod('HNHVFC_setting'),
                'SetHeaderNotifiCationBackgroundColor' => !get_theme_mod('HNBG_setting') ? '#06357c' : get_theme_mod('HNBG_setting'),
                'ReturnNotifiCationBGStatus' => !get_theme_mod('HNBGSt_setting') ? 'true' : get_theme_mod('HNBGSt_setting'),
                'LogoImgVisib' => !get_theme_mod('HLDs_setting') ? 'd-inline-block' : get_theme_mod('HLDs_setting'),
                'LogoTTlVisib' => !get_theme_mod('HLTD_setting') ? 'd-inline-block' : get_theme_mod('HLTD_setting'),
                'STtlSetting' => !get_theme_mod('HLT_setting') ? 'logo' : get_theme_mod('HLT_setting'),
                'HeaderPositionSetting' => !get_theme_mod('HP_setting') ? 'fixed' : get_theme_mod('HP_setting')
            ];
        }
    }
    new CustomizeHeader();
?>