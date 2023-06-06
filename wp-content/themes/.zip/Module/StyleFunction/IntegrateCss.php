<?php
    class IntegrateCss{
        public function __construct() {
            //execute these methods only when the theme installed for the first time or editting admin menu or editting customizer
            if (!is_user_logged_in()) {
                return;
            }
            add_action( 'wp_enqueue_scripts', array( $this,'MakeCVal' ), 1 );
            add_action( 'wp_enqueue_scripts', array( $this,'WriteStyle' ), 2 );
            add_action( 'wp_enqueue_scripts', array( $this,'MakeJs' ), 3 );
        }
        public $CustomizeFont,
        $MakeMainColumnStyle,
        $MakeSideColumnStyle,
        $MakeSidebarStyle,
        $MakeFooterStyle,
        $MakeHeaderStyle,
        $CustomizeHeader,
        $CustomizeBreadCrumb,
        $CustomizeHumburger,
        $CustomizeSidebar,
        $CustomizeMainColumn,
        $CustomizeSideColumn,
        $CustomizeOtherBasic,
        $loadresize,
        $scloadresize,
        $appjs;

        public function MakeCVal(){
            require get_template_directory() . '/Module/StyleFunction/header/index.php';//ヘッダーのcss
            require get_template_directory() . '/Module/StyleFunction/footer/index.php';//フッターのcss
            require get_template_directory() . '/Module/StyleFunction/maincolumn/index.php';//メインカラムのcss
            require get_template_directory() . '/Module/StyleFunction/sidebar/index.php';//サイドバーのcss
            require get_template_directory() . '/Module/StyleFunction/sidecolumn/index.php';//サイドカラムのcss
    
            $this->CustomizeFont = CustomizeFont::Values();
            $this->MakeMainColumnStyle = MakeMainColumnStyle::Value();
            $this->MakeSideColumnStyle = MakeSideColumnStyle::Value();
            $this->MakeSidebarStyle = MakeSidebarStyle::Value();
            $this->MakeFooterStyle = MakeFooterStyle::Value();
            $this->MakeHeaderStyle = MakeHeaderStyle::Value();
        
            $this->CustomizeHeader = CustomizeHeader::Values();
            $this->CustomizeBreadCrumb = CustomizeBreadCrumb::Values();
            $this->CustomizeHumburger = CustomizeHumburger::Values();
            $this->CustomizeSidebar = CustomizeSidebar::Values();
            $this->CustomizeMainColumn = CustomizeMainColumn::Values();
            $this->CustomizeSideColumn = CustomizeSideColumn::Values();
        
            $this->CustomizeOtherBasic = CustomizeOtherBasic::Values();
            $this->CustomizePageLayout = CustomizePageLayout::Values();

            require get_template_directory() . '/Module/StyleFunction/maincolumn/CategoryArticle/sp/js/'.$this->CustomizeMainColumn->CategoryArticleSPTemplate.'.php';
            require get_template_directory() . '/Module/StyleFunction/maincolumn/CategoryArticle/pc/js/'.$this->CustomizeMainColumn->CategoryArticleTemplate.'.php';
            $this->loadresize .= $McCategoryArticlePcJS;
            $this->loadresize .= $McCategoryArticlepJS;

            require get_template_directory() . '/Module/StyleFunction/maincolumn/NewestArticleArea/sp/js/'.$this->CustomizeMainColumn->NewestArticleAreaSPTemplate.'.php';
            require get_template_directory() . '/Module/StyleFunction/maincolumn/NewestArticleArea/pc/js/'.$this->CustomizeMainColumn->NewestArticleAreaTemplate.'.php';
            $this->loadresize .= $NewestArticleAreaPcJS;
            $this->loadresize .= $NewestArticleAreaSpJS;

            require get_template_directory() . '/Module/StyleFunction/maincolumn/PopularArticleArea/sp/js/'.$this->CustomizeMainColumn->PopularArticleAreaSPTemplate.'.php';
            require get_template_directory() . '/Module/StyleFunction/maincolumn/PopularArticleArea/pc/js/'.$this->CustomizeMainColumn->PopularArticleAreaTemplate.'.php';
            $this->loadresize .= $PopularArticleAreaPcCss;
            $this->loadresize .= $PopularArticleAreapCss;

            require get_template_directory() . '/Module/StyleFunction/sidecolumn/CategoryArticle/sp/js/'.$this->CustomizeSideColumn->CategoryArticleAreaSPSidebarTemplate.'.php';
            require get_template_directory() . '/Module/StyleFunction/sidecolumn/CategoryArticle/pc/js/'.$this->CustomizeSideColumn->CategoryArticleAreaSidebarTemplate.'.php';
            $this->scloadresize .= $ScCategoryArticlePcJS;
            $this->scloadresize .= $ScCategoryArticlepJS;

            require get_template_directory() . '/Module/StyleFunction/sidecolumn/NewestArticleArea/sp/js/'.$this->CustomizeSideColumn->NewestArticleAreaSPSidebarTemplate.'.php';
            require get_template_directory() . '/Module/StyleFunction/sidecolumn/NewestArticleArea/pc/js/'.$this->CustomizeSideColumn->NewestArticleAreaSidebarTemplate.'.php';
            $this->scloadresize .= $ScNewestArticleAreaPcJS;
            $this->scloadresize .= $ScNewestArticleAreaSpJS;

            require get_template_directory() . '/Module/StyleFunction/sidecolumn/PopularArticleArea/sp/js/'.$this->CustomizeSideColumn->PopularArticleAreaSPSidebarTemplate.'.php';
            require get_template_directory() . '/Module/StyleFunction/sidecolumn/PopularArticleArea/pc/js/'.$this->CustomizeSideColumn->PopularArticleAreaSidebarTemplate.'.php';
            $this->scloadresize .= $ScPopularArticleAreaPcJS;
            $this->scloadresize .= $ScPopularArticleAreapJS;

            if($this->CustomizeOtherBasic->TopScrollButtonDesign != 'none'){
                require get_template_directory() . '/Module/StyleFunction/footer/parts/topscrollbutton/js/'.$this->CustomizeOtherBasic->TopScrollButtonDesign.'.php';
                $this->appjs .= $SetScrolltopMotion;
            }

            if($this->CustomizeHeader->HeaderTemplate != 'none'){
                require get_template_directory() . '/Module/StyleFunction/header/pc/js/common.php';//ヘッダーのcss
                $this->appjs .= $HeaderCommonJs;

                if($this->CustomizeHeader->HeaderPositionSetting != 'none'){
                    require get_template_directory() . '/Module/StyleFunction/header/pc/js/'.$this->CustomizeHeader->HeaderTemplate.".php";
                    $this->appjs .= $HeaderNavCommonJs;
                }
            }

            if($this->CustomizeSidebar->SidebarTemplate != 'none'){
                require get_template_directory() . '/Module/StyleFunction/sidebar/js/common.php';//ヘッダーのcss
                $this->appjs .= $SidebarCommonJs;
            }

            if($this->CustomizeHumburger->HumburgerButtonTemplate != 'none'){
                require get_template_directory() . '/Module/StyleFunction/header/sp/menu/js/'.$this->CustomizeHumburger->HumburgerTemplate.".php";
                $this->appjs .= $HumburgerButtonCommonJs;
            }

            if(is_archive()){
                $dir1 = get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/archivetemplates/pc/js/'.$this->CustomizePageLayout->ArchiveArticleTemplate.'.php';
                $dir2 = get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/archivetemplates/sp/js/'.$this->CustomizePageLayout->ArchiveArticleSPTemplate.'.php';
                if ($dir1) {
                    require_once $dir1;
                    $this->scloadresize .= $ArchiveDesignJs;
                }
                if ($dir2) {
                    require_once $dir2;
                    $this->scloadresize .= $ArchiveDesignSpJs;
                }
            }

        }

        public function WriteStyle(){
            $CssStr = '';

            $Btrapdir = get_template_directory().'/Module/StyleFunction/bootstrap.min.css';
            exec('chmod 777 '.$Btrapdir);
            $Bcontent = file_get_contents($Btrapdir);
            if ($Btrapdir != false) {
                $CssStr .= $Bcontent;
            }

            $Basedir = get_template_directory().'/Module/StyleFunction/base.css';
            //$editorDir = get_template_directory().'/Module/styles/css/editor-style.css';
            exec('chmod 777 '.$Basedir);
            exec('chmod 777 '.$editorDir);
            $Bcontent = file_get_contents($Basedir);
            $Econtent = file_get_contents($editorDir);
            if ($Basedir != false) {

                $Bcontent = str_replace("'/"."*SetSiteFont*"."/'", $this->CustomizeFont->SetSiteFont, $Bcontent);

                $CssNolimit = 
                $this->MakeMainColumnStyle->CssNolimit.
                $this->MakeSideColumnStyle->CssNolimit.
                $this->MakeSidebarStyle->CssNolimit.
                $this->MakeFooterStyle->CssNolimit.
                $this->MakeHeaderStyle->CssNolimit;
                $Bcontent = str_replace('/'.'*CssNolimit*'.'/', $CssNolimit, $Bcontent);

                $CssMin1200 = 
                $this->MakeMainColumnStyle->CssMin1200.
                $this->MakeSideColumnStyle->CssMin1200.
                $this->MakeSidebarStyle->CssMin1200.
                $this->MakeFooterStyle->CssMin1200.
                $this->MakeHeaderStyle->CssMin1200;
                $Bcontent = str_replace('/'.'*CssMin1200*'.'/', $CssMin1200, $Bcontent);

                $CssMin981 = 
                $this->MakeMainColumnStyle->CssMin981.
                $this->MakeSideColumnStyle->CssMin981.
                $this->MakeSidebarStyle->CssMin981.
                $this->MakeFooterStyle->CssMin981.
                $this->MakeHeaderStyle->CssMin981;
                $Bcontent = str_replace('/'.'*CssMin981*'.'/', $CssMin981, $Bcontent);

                $CssMin768 = 
                $this->MakeMainColumnStyle->CssMin768.
                $this->MakeSideColumnStyle->CssMin768.
                $this->MakeSidebarStyle->CssMin768.
                $this->MakeFooterStyle->CssMin768.
                $this->MakeHeaderStyle->CssMin768;
                $Bcontent = str_replace('/'.'*CssMin768*'.'/', $CssMin768, $Bcontent);

                $CssMax981 = 
                $this->MakeMainColumnStyle->CssMax981.
                $this->MakeSideColumnStyle->CssMax981.
                $this->MakeSidebarStyle->CssMax981.
                $this->MakeFooterStyle->CssMax981.
                $this->MakeHeaderStyle->CssMax981;
                $Bcontent = str_replace('/'.'*CssMax981*'.'/', $CssMax981, $Bcontent);

                $CssMin401to980 = 
                $this->MakeMainColumnStyle->CssMin401to980.
                $this->MakeSideColumnStyle->CssMin401to980.
                $this->MakeSidebarStyle->CssMin401to980.
                $this->MakeFooterStyle->CssMin401to980.
                $this->MakeHeaderStyle->CssMin401to980;
                $Bcontent = str_replace('/'.'*CssMin401to980*'.'/', $CssMin401to980, $Bcontent);

                $CssMax768 = 
                $this->MakeMainColumnStyle->CssMax768.
                $this->MakeSideColumnStyle->CssMax768.
                $this->MakeSidebarStyle->CssMax768.
                $this->MakeFooterStyle->CssMax768.
                $this->MakeHeaderStyle->CssMax768;
                $Bcontent = str_replace('/'.'*CssMax768*'.'/', $CssMax768, $Bcontent);

                $CssMax400 = 
                $this->MakeMainColumnStyle->CssMax400.
                $this->MakeSideColumnStyle->CssMax400.
                $this->MakeSidebarStyle->CssMax400.
                $this->MakeFooterStyle->CssMax400.
                $this->MakeHeaderStyle->CssMax400;
                $Bcontent = str_replace('/'.'*CssMax400*'.'/', $CssMax400, $Bcontent);
            }
            $CssStr .= $Bcontent;
            $CssStr .= $Econtent;

            $StyleFromAdmin = new AdminMenue();
            $CssStr .= $StyleFromAdmin::defineIconStyle();
            $CssStr .= $StyleFromAdmin::DefineMarkerStyle();
            $CssStr .= $StyleFromAdmin::DefineTitleDesign();

            $CatColorCodes = SubQuery::GetColorCode();
            $GetAllTerms = SubQuery::GetAllTerms();
            foreach ($GetAllTerms as $slug) {
                $CssStr .= '.'.$slug.'-bg{
                    background:#000;
                }';
                $CssStr .= '.'.$slug.'-fontcolor{
                    color:#ffff;
                }';
            }

            foreach ($CatColorCodes as $ColorCode) {
                if (preg_match('/-bg$/', $ColorCode->option_name)) {
                    $CssStr .= '.'.$ColorCode->option_name.'{
                        background:'.$ColorCode->option_value.';
                    }';
                }
                if (preg_match('/-fontcolor$/', $ColorCode->option_name)) {
                    $CssStr .= '.'.$ColorCode->option_name.'{
                        color:'.$ColorCode->option_value.';
                    }';
                }
            }

            $editorCssdir = get_template_directory().'/Module/Admin/Editor/css/editor.css';
            exec('chmod 777 '.$editorCssdir);
            $editorCsscontent = file_get_contents($editorCssdir);
            if ($editorCsscontent != false) {
                $CssStr .= $editorCsscontent;
            }

            $CssStr = str_replace("0.", ".", $CssStr);
            $CssStr = str_replace("  ", "", $CssStr);
            $CssStr = str_replace("\n", "", $CssStr);

            $cssurl = get_template_directory().'/Module/styles/css/style.css';
            exec('chmod 777 '.$cssurl);
            $CSSfile = fopen($cssurl, "w");
            fwrite($CSSfile, $CssStr);
            fclose($CSSfile);
        }

        public function MakeJs(){

            $this->loadresizeapp = "
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
                    ".$this->loadresize
                    .$this->scloadresize."
                });
            });
            ";

            $this->appjs .= $this->loadresizeapp;

            if($this->CustomizeHeader->HeaderTemplate != 'none'){
                if($this->CustomizeHeader->SetTLAnimation != 'none'){
                    $SetTLAnimation = $this->CustomizeHeader->SetTLAnimation;
                    $this->appjs .= $SetTLAnimation(
                        array(
                            'target' => '#LogoStr',
                            'triggerelem' => 'window',
                            'eventname' => 'load'
                        )
                    );
                }
                if($this->CustomizeHeader->SetTLinkAnimation != 'none'){
                    $SetTLinkAnimation = $this->CustomizeHeader->SetTLinkAnimation;
                    $this->appjs .= $SetTLinkAnimation(
                        array(
                            'target' => '#menu > li > a',
                            'triggerelem' => 'window',
                            'eventname' => 'load',
                            'timing' => 0
                        )
                    );
                }
        
                //パンくずリストのアニメーション
                if($this->CustomizeBreadCrumb->BreadcrumbAnimation != 'none'){
                    $BreadcrumbAnimation = $this->CustomizeBreadCrumb->BreadcrumbAnimation;
                    $this->appjs .= $BreadcrumbAnimation(
                        array(
                            'target' => '#breadcrumb',
                            'triggerelem' => 'window',
                            'eventname' => 'load'
                        )
                    );
                }

                //ハンバーガーメニューのアニメーション
                if($this->CustomizeHumburger->HumburgerAnimation != 'none'){
                    $HumburgerAnimation = $this->CustomizeHumburger->HumburgerAnimation;
                    $this->appjs .= $HumburgerAnimation(
                        array(
                            'target' => '#hbmenuwraapper > ul > li > a',
                            'triggerelem' => '#hbuttoncover',
                            'eventname' => 'click',
                            'timing' => 500
                        )
                    );
                }
            }

            if($this->CustomizeSidebar->SidebarLinkAnimation != 'none'){
                $SidebarLinkAnimation = $this->CustomizeSidebar->SidebarLinkAnimation;
                $this->appjs .= $SidebarLinkAnimation(
                    array(
                        'target' => '#sidebar > ul > li > a',
                        'triggerelem' => '#sidebarbutton',
                        'eventname' => 'click',
                        'timing' => 500
                    )
                );
            }

            if($this->CustomizeMainColumn->MainColumnAnimation != 'none'){
                $MainColumnAnimation = $this->CustomizeMainColumn->MainColumnAnimation;
                $this->appjs .= $MainColumnAnimation(
                    array(
                        'target' => '#contentArticle',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            //関連記事エリアのアニメーション
            if($this->CustomizeMainColumn->CategoryArticleTitleFontAnimation != 'none'){
                $CategoryArticleTitleFontAnimation = $this->CustomizeMainColumn->CategoryArticleTitleFontAnimation;
                $this->appjs .= $CategoryArticleTitleFontAnimation(
                    array(
                        'target' => '.contentarea .CategoryTitleFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->CategoryArticleBottomTitleAnimation != 'none'){
                $CategoryArticleBottomTitleAnimation = $this->CustomizeMainColumn->CategoryArticleBottomTitleAnimation;
                $this->appjs .= $CategoryArticleBottomTitleAnimation(
                    array(
                        'target' => '.contentarea .CategoryTitleFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->CategoryArticleAnimation != 'none'){
                $CategoryArticleAnimation = $this->CustomizeMainColumn->CategoryArticleAnimation;
                $this->appjs .= $CategoryArticleAnimation(
                    array(
                        'target' => '.contentarea .CategoryArticleArea',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            //カテゴリ一覧のアニメーション
            if($this->CustomizeMainColumn->CatLinkTitleAnimation != 'none'){
                $CatLinkTitleAnimation = $this->CustomizeMainColumn->CatLinkTitleAnimation;
                $this->appjs .= $CatLinkTitleAnimation(
                    array(
                        'target' => '.contentarea .EachCatLinkTitleFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->CatLinkBottomTitleAnimation != 'none'){
                $CatLinkBottomTitleAnimation = $this->CustomizeMainColumn->CatLinkBottomTitleAnimation;
                $this->appjs .= $CatLinkBottomTitleAnimation(
                    array(
                        'target' => '.contentarea .EachCatLinkTitleFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->CatLinkAnimation != 'none'){
                $CatLinkAnimation = $this->CustomizeMainColumn->CatLinkAnimation;
                $this->appjs .= $CatLinkAnimation(
                    array(
                        'target' => '.contentarea #ECatLinkArea',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            //最新記事一覧のアニメーション
            if($this->CustomizeMainColumn->NewestArticleAreaTitleAnimation != 'none'){
                $NewestArticleAreaTitleAnimation = $this->CustomizeMainColumn->NewestArticleAreaTitleAnimation;
                $this->appjs .= $NewestArticleAreaTitleAnimation(
                    array(
                        'target' => '.contentarea .NewestArticleAreaFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->NewestArticleAreaBottomTitleAnimation != 'none'){
                $NewestArticleAreaBottomTitleAnimation = $this->CustomizeMainColumn->NewestArticleAreaBottomTitleAnimation;
                $this->appjs .= $NewestArticleAreaBottomTitleAnimation(
                    array(
                        'target' => '.contentarea .NewestArticleAreaFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->NewestArticleAreaAnimation != 'none'){
                $NewestArticleAreaAnimation = $this->CustomizeMainColumn->NewestArticleAreaAnimation;
                $this->appjs .= $NewestArticleAreaAnimation(
                    array(
                        'target' => '.contentarea .NewestArticleArea',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            //人気記事一覧のアニメーション
            if($this->CustomizeMainColumn->PopularArticleAreaTitleFontAnimation != 'none'){
                $PopularArticleAreaTitleFontAnimation = $this->CustomizeMainColumn->PopularArticleAreaTitleFontAnimation;
                $this->appjs .= $PopularArticleAreaTitleFontAnimation(
                    array(
                        'target' => '.contentarea .PopularArticleAreaFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->PopularArticleAreaBottomTitleAnimation != 'none'){
                $PopularArticleAreaBottomTitleAnimation = $this->CustomizeMainColumn->PopularArticleAreaBottomTitleAnimation;
                $this->appjs .= $PopularArticleAreaBottomTitleAnimation(
                    array(
                        'target' => '.contentarea .PopularArticleAreaFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeMainColumn->PopularArticleAreaAnimation != 'none'){
                $PopularArticleAreaAnimation = $this->CustomizeMainColumn->PopularArticleAreaAnimation;
                $this->appjs .= $PopularArticleAreaAnimation(
                    array(
                        'target' => '.contentarea .PopularArticleArea',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            //サイドカラムのアニメーション
            if($this->CustomizeSideColumn->CategoryArticleAreaTitleAnimation != 'none'){
                $CategoryArticleAreaTitleAnimation = $this->CustomizeSideColumn->CategoryArticleAreaTitleAnimation;
                $this->appjs .= $CategoryArticleAreaTitleAnimation(
                    array(
                        'target' => '.sidecolumn .CategoryArticleAreaFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeSideColumn->CategoryArticleAreaBottomTitleAnimation != 'none'){
                $CategoryArticleAreaBottomTitleAnimation = $this->CustomizeSideColumn->CategoryArticleAreaBottomTitleAnimation;
                $this->appjs .= $CategoryArticleAreaBottomTitleAnimation(
                    array(
                        'target' => '.sidecolumn .CategoryArticleAreaFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeSideColumn->CatLinkSidebarTitleAnimation != 'none'){
                $CatLinkSidebarTitleAnimation = $this->CustomizeSideColumn->CatLinkSidebarTitleAnimation;
                $this->appjs .= $CatLinkSidebarTitleAnimation(
                    array(
                        'target' => '.sidecolumn .CategoryLinkAreaFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeSideColumn->CatLinkSidebarBottomTitleAnimation != 'none'){
                $CatLinkSidebarBottomTitleAnimation = $this->CustomizeSideColumn->CatLinkSidebarBottomTitleAnimation;
                $this->appjs .= $CatLinkSidebarBottomTitleAnimation(
                    array(
                        'target' => '.sidecolumn .CategoryLinkAreaFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeSideColumn->NewestArticleAreaTitleAnimation != 'none'){
                $NewestArticleAreaTitleAnimation = $this->CustomizeSideColumn->NewestArticleAreaTitleAnimation;
                $this->appjs .= $NewestArticleAreaTitleAnimation(
                    array(
                        'target' => '.sidecolumn .NewestArticleAreaFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeSideColumn->NewestArticleAreaBottomTitleAnimation != 'none'){
                $NewestArticleAreaBottomTitleAnimation = $this->CustomizeSideColumn->NewestArticleAreaBottomTitleAnimation;
                $this->appjs .= $NewestArticleAreaBottomTitleAnimation(
                    array(
                        'target' => '.sidecolumn .NewestArticleAreaFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            if($this->CustomizeSideColumn->PopularArticleAreaTitleAnimation != 'none'){
                $PopularArticleAreaTitleAnimation = $this->CustomizeSideColumn->PopularArticleAreaTitleAnimation;
                $this->appjs .= $PopularArticleAreaTitleAnimation(
                    array(
                        'target' => '.contentarea .PopularArticleAreaFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizeSideColumn->PopularArticleAreaBottomTitleAnimation != 'none'){
                $PopularArticleAreaBottomTitleAnimation = $this->CustomizeSideColumn->PopularArticleAreaBottomTitleAnimation;
                $this->appjs .= $PopularArticleAreaBottomTitleAnimation(
                    array(
                        'target' => '.contentarea .PopularArticleAreaFontBottomInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            //archive page animation
            if($this->CustomizePageLayout->ArchiveArticleTitleFontAnimation != 'none'){
                $ArchiveArticleTitleFontAnimation = $this->CustomizePageLayout->ArchiveArticleTitleFontAnimation;
                $this->appjs .= $ArchiveArticleTitleFontAnimation(
                    array(
                        'target' => '.contentarea .ArchiveTitleFontTopInner',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }
            if($this->CustomizePageLayout->ArchiveArticleAnimation != 'none'){
                $ArchiveArticleAnimation = $this->CustomizePageLayout->ArchiveArticleAnimation;
                $this->appjs .= $ArchiveArticleAnimation(
                    array(
                        'target' => '.contentarea .ArchiveArticleArea',
                        'triggerelem' => 'window',
                        'eventname' => 'scroll'
                    )
                );
            }

            $EditorAccordionDir = get_template_directory().'/Module/Admin/Editor/js/script.js';
            exec('chmod 777 '.$EditorAccordionDir);
            $EditorAccordionContent = file_get_contents($EditorAccordionDir);
            $this->appjs .= $EditorAccordionContent;

            $this->appjs = str_replace("  ", "", $this->appjs);
            $this->appjs = str_replace("\n", "", $this->appjs);

            $cssurl = get_template_directory().'/Module/styles/js/script.js';
            exec('chmod 777 '.$this->appjs);
            $CSSfile = fopen($cssurl, "w");
            fwrite($CSSfile, $this->appjs);
            fclose($CSSfile);
        }
    }
    new IntegrateCss();
?>