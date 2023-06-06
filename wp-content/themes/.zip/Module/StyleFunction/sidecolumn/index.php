<?php
    class MakeSideColumnStyle{
        public static function Value(){
            $CustomizeSideColumn = CustomizeSideColumn::Values();

            $CssNolimit = '';
            $CssMin1200 = '';
            $CssMin981 = '
            .sidecolumn .PcontEx,
            .sidecolumn .catlink_and_date,
            .sidecolumn .catlink:before,
            .sidecolumn .catlink{
                font-size:16px;
            }
            ';
            $CssMin768 = '';
            $CssMin401to980 = '
            .sidecolumn .PcontEx,
            .sidecolumn .catlink_and_date,
            .sidecolumn .catlink:before,
            .sidecolumn .catlink{
                font-size:14px;
            }
            ';
            $CssMax768 = '';
            $CssMax400 = '
            .sidecolumn .PcontEx,
            .sidecolumn .catlink_and_date,
            .sidecolumn .catlink:before,
            .sidecolumn .catlink{
                font-size:12px;
            }
            ';

            $CssNolimit .= '
            .sidecolumn{
                padding:'.$CustomizeSideColumn->SideColumnPadding.';
            }
            .sidecolumn .CategoryArticleTitleArea{
                background-color:'.$CustomizeSideColumn->CategoryArticleAreaTitleBackground.'; 
            }
            .sidecolumn .CategoryArticleAreaFontTopInner, .sidecolumn .CategoryArticleAreaFontTopInner > span{
                font-size:'.$CustomizeSideColumn->CategoryArticleAreaTitleFontSize.';
            }
            .sidecolumn .CategoryArticleAreaFontBottomInner, .sidecolumn .CategoryArticleAreaFontBottomInner > span{
                font-size:'.$CustomizeSideColumn->CategoryArticleAreaBottomTitleFontSize.';
            }
            .sidecolumn .CategoryArticleAreaFontTop,.sidecolumn .CategoryArticleAreaFontBottom{
                color:"'.$CustomizeSideColumn->CategoryArticleAreaFontColor.'"; 
            }
            .sidecolumn .CategoryArticleAreaFontTop, .sidecolumn .CategoryArticleAreaFontBottom{
                line-height:1;
            }
            .sidecolumn .CategoryArticleAreaFontTop{
                text-align:'.$CustomizeSideColumn->CategoryArticleAreaTitleDir.';
            }
            .sidecolumn .CategoryArticleAreaFontBottom{
                text-align:'.$CustomizeSideColumn->CategoryArticleAreaBottomTitleDir.';
            }
            .sidecolumn .CategoryArticleNav{
                padding:'.$CustomizeSideColumn->SetCategoryArticleAreaSidebarPadding.';
            }
            .sidecolumn .CategoryArticleNav{
                background-color:'.$CustomizeSideColumn->CategoryArticleAreaBackground.'; 
            }
            .sidecolumn .CategoryArticleNav{
                min-width:200px;
            }
            .sidecolumn .CategoryArticleNav{
                border-radius:'.$CustomizeSideColumn->SetCategoryArticleAreaWRadius.';
            }
            .sidecolumn .CategoryArticleNav{
                background-image:url("'.$CustomizeSideColumn->SetSCCatArABgImg.'");
                '.$CustomizeSideColumn->SetSCCatArABgImgStatus.'
            }
            .sidecolumn .CategoryArticlelinkarea > div{
                border-radius:'.$CustomizeSideColumn->SetCategoryArticleAreaCRadius.';
            }

            .sidecolumn .CategoryArticlelinkarea a > img{
                object-fit:cover;
            }
            .sidecolumn .CategoryArticlelinkarea > div{
                background-color:'.$CustomizeSideColumn->SetCategoryArticleAreaEachBackground.'; 
            }
            .sidecolumn .CategoryArticlelinkarea .datefont{
                color:'.$CustomizeSideColumn->SetCategoryArticleAreaDateFontColor.';
            }
            .sidecolumn .CategoryArticlelinkarea .posttitle{
                color:'.$CustomizeSideColumn->SetCategoryArticleAreaTitleFontColor.';
            }
            .sidecolumn .CategoryArticleNav .CategoryArticleTitleArea{
                '.Settings::ShadowFormat($CustomizeSideColumn->SetCategoryArticleAreaShadow, $CustomizeSideColumn->SetCategoryArticleAreaShadowLevel).';
            }
            .sidecolumn .CategoryArticlelinkarea > div{
                '.Settings::ShadowFormat($CustomizeSideColumn->SetCategoryArticleAreaContentShadow, $CustomizeSideColumn->SetCategoryArticleAreaContentShadowLevel).';
            }

            .sidecolumn .CategoryLinkTitleArea{
                background-color:'.$CustomizeSideColumn->CatLinkSidebarTitleBackground.'; 
            }
            .sidecolumn .CategoryLinkAreaFontTopInner, .sidecolumn .CategoryLinkAreaFontTopInner > span{
                font-size:'.$CustomizeSideColumn->CatLinkSidebarTitleFontSize.';
            }
            .sidecolumn .CategoryLinkAreaFontBottomInner, .sidecolumn .CategoryLinkAreaFontBottomInner > span{
                font-size:'.$CustomizeSideColumn->CatLinkSidebarBottomTitleFontSize.';
            }
            .sidecolumn .CategoryLinkAreaFontTop,.sidecolumn .CategoryLinkAreaFontBottom{
                color:'.$CustomizeSideColumn->CatLinkSidebarFontColor.'; 
            }
            .sidecolumn .CategoryLinkAreaFontTop, .sidecolumn .CategoryLinkAreaFontBottom{
                line-height:1;
            }
            .sidecolumn .CategoryLinkAreaFontTop{
                text-align:'.$CustomizeSideColumn->CatLinkSidebarTitleDir.';
            }
            .sidecolumn .CategoryLinkAreaFontBottom{
                text-align:'.$CustomizeSideColumn->CatLinkSidebarBottomTitleDir.';
            }
            .sidecolumn .CategoryLinkNav{
                padding:'.$CustomizeSideColumn->CatLinkSidebarPadding.'; 
            }
            .sidecolumn .CategoryLinkNav{
                background-color:'.$CustomizeSideColumn->CatLinkSidebarBackground.'; 
            }
            .sidecolumn .CategoryLinkNav{
                background-image:url("'.$CustomizeSideColumn->SetSCCatLBgImg.'");
                '.$CustomizeSideColumn->SetSCCatLBgImgStatus.'
            }
            .sidecolumn .CategoryLinkNav{
                min-width:200px;
            }

            .sidecolumn .NewestArticleTitleArea{
                background-color:'.$CustomizeSideColumn->NewestArticleAreaTitleBackground.'; 
            }
            .sidecolumn .NewestArticleAreaFontTopInner, .sidecolumn .NewestArticleAreaFontTopInner > span{
                font-size:'.$CustomizeSideColumn->NewestArticleAreaTitleFontSize.';
            }
            .sidecolumn .NewestArticleAreaFontBottomInner, .sidecolumn .NewestArticleAreaFontBottomInner > span{
                font-size:'.$CustomizeSideColumn->NewestArticleAreaBottomTitleFontSize.';
            }
            .sidecolumn .NewestArticleAreaFontTop,.sidecolumn .NewestArticleAreaFontBottom{
                color:"'.$CustomizeSideColumn->NewestArticleAreaFontColor.'"; 
            }
            .sidecolumn .NewestArticleAreaFontTop, .sidecolumn .NewestArticleAreaFontBottom{
                line-height:1;
            }
            .sidecolumn .NewestArticleAreaFontTop{
                text-align:'.$CustomizeSideColumn->NewestArticleAreaTitleDir.';
            }
            .sidecolumn .NewestArticleAreaFontBottom{
                text-align:'.$CustomizeSideColumn->NewestArticleAreaBottomTitleDir.';
            }
            .sidecolumn .NewestArticleNav{
                padding:'.$CustomizeSideColumn->SetNewestArticleAreaSidebarPadding.'; 
            }
            .sidecolumn .NewestArticleNav{
                background-color:'.$CustomizeSideColumn->NewestArticleAreaBackground.'; 
            }
            .sidecolumn .NewestArticleNav{
                min-width:200px;
            }
            .sidecolumn .NewestArticleNav{
                border-radius:'.$CustomizeSideColumn->SetNewestArticleAreaWRadius.';
            }
            .sidecolumn .NewestArticleNav{
                background-image:url("'.$CustomizeSideColumn->SetSCNArABgImg.'");
                '.$CustomizeSideColumn->SetSCNArABgImgStatus.'
            }
            .sidecolumn .NewestArticlelinkarea > div{
                border-radius:'.$CustomizeSideColumn->SetNewestArticleAreaCRadius.';
            }
            .sidecolumn .NewestArticlelinkarea a > img{
                object-fit:cover;
            }
            .sidecolumn .NewestArticlelinkarea > div{
                background-color:'.$CustomizeSideColumn->SetNewestArticleAreaEachBackground.'; 
            }
            .sidecolumn .NewestArticlelinkarea .datefont{
                color:'.$CustomizeSideColumn->SetNewestArticleAreaDateFontColor.';
            }
            .sidecolumn .NewestArticlelinkarea .posttitle{
                color:'.$CustomizeSideColumn->SetNewestArticleAreaTitleFontColor.';
            }
            .sidecolumn .NewestArticleNav .NewestArticleTitleArea{
                '.Settings::ShadowFormat($CustomizeSideColumn->SetNewestArticleAreaShadow, $CustomizeSideColumn->SetNewestArticleAreaShadowLevel).';
            }
            .sidecolumn .NewestArticlelinkarea > div{
                '.Settings::ShadowFormat($CustomizeSideColumn->SetNewestArticleAreaContentShadow, $CustomizeSideColumn->SetNewestArticleAreaContentShadowLevel).';
            }

            .sidecolumn .PopularArticleAreaTitleArea{
                background-color:'.$CustomizeSideColumn->PopularArticleAreaTitleBackground.'; 
            }
            .sidecolumn .PopularArticleAreaFontTopInner, .sidecolumn .PopularArticleAreaFontTopInner > span{
                font-size:'.$CustomizeSideColumn->PopularArticleAreaTitleFontSize.';
            }
            .sidecolumn .PopularArticleAreaFontBottomInner, .sidecolumn .PopularArticleAreaFontBottomInner > span{
                font-size:'.$CustomizeSideColumn->PopularArticleAreaBottomTitleFontSize.';
            }
            .sidecolumn .PopularArticleAreaFontTop,.sidecolumn .PopularArticleAreaFontBottom{
                color:"'.$CustomizeSideColumn->PopularArticleAreaFontColor.'"; 
            }
            .sidecolumn .PopularArticleAreaFontTop, .sidecolumn .PopularArticleAreaFontBottom{
                line-height:1;
            }
            .sidecolumn .PopularArticleAreaFontTop{
                text-align:'.$CustomizeSideColumn->PopularArticleAreaTitleDir.';
            }
            .sidecolumn .PopularArticleAreaFontBottom{
                text-align:'.$CustomizeSideColumn->PopularArticleAreaBottomTitleDir.';
            }
            .sidecolumn .PopularArticleAreaNav{
                padding:'.$CustomizeSideColumn->SetPopularArticleAreaSidebarPadding.'; 
            }
            .sidecolumn .PopularArticleAreaNav{
                background-color:'.$CustomizeSideColumn->PopularArticleAreaBackground.'; 
            }
            .sidecolumn .PopularArticleAreaNav{
                background-image:url("'.$CustomizeSideColumn->SetSCFArABgImg.'");
                '.$CustomizeSideColumn->SetSCFArABgImgStatus.'
            }
            .sidecolumn .PopularArticleAreaNav{
                min-width:200px;
            }
            .sidecolumn .PopularArticleAreaNav{
                border-radius:'.$CustomizeSideColumn->SetPopularArticleAreaWRadius.';
            }
            .sidecolumn .PopularArticleArealinkarea > div{
                border-radius:'.$CustomizeSideColumn->SetPopularArticleAreaCRadius.';
            }
            .sidecolumn .PopularArticleArealinkarea a > img{
                object-fit:cover;
            }
            .sidecolumn .PopularArticleArealinkarea > div{
                background-color:'.$CustomizeSideColumn->SetPopularArticleAreaEachBackground.'; 
            }
            .sidecolumn .PopularArticleArealinkarea .datefont{
                color:'.$CustomizeSideColumn->SetPopularArticleAreaDateFontColor.';
            }
            .sidecolumn .PopularArticleArealinkarea .posttitle{
                color:'.$CustomizeSideColumn->SetPopularArticleAreaTitleFontColor.';
            }
            .sidecolumn .PopularArticleAreaNav .PopularArticleAreaTitleArea{
                '.Settings::ShadowFormat($CustomizeSideColumn->SetPopularArticleAreaShadow, $CustomizeSideColumn->SetPopularArticleAreaShadowLevel).';
            }
            .sidecolumn .PopularArticleArealinkarea > div{
                '.Settings::ShadowFormat($CustomizeSideColumn->SetPopularArticleAreaContentShadow, $CustomizeSideColumn->SetPopularArticleAreaContentShadowLevel).';
            }
            .sidecolumn .CategoryArticleNav,
            .sidecolumn .NewestArticleNav,
            .sidecolumn .CategoryLinkNav,
            .sidecolumn .PopularArticleAreaNav{
                margin-bottom:'.$CustomizeSideColumn->SetSidebarMargin.';
            }
            .sidecolumn .CategoryArticleTitleWrapper{
                margin-bottom:'.$CustomizeSideColumn->CategoryArticleAreaTitleMargin.';
            }
            .sidecolumn .CategoryLinkTitleWrapper{
                margin-bottom:'.$CustomizeSideColumn->CatLinkSidebarBottomTitleMargin.';
            }
            .sidecolumn .NewestArticleTitleWrapper{
                margin-bottom:'.$CustomizeSideColumn->NewestArticleAreaBottomTitleMargin.';
            }
            .sidecolumn .PopularArticleAreaTitleWrapper{
                margin-bottom:'.$CustomizeSideColumn->PopularArticleAreaBottomTitleMargin.';
            }
            .sidecolumn .CategoryArticleTitleWrapper .CategoryArticleTitleArea{
                padding:'.$CustomizeSideColumn->CategoryArticleAreaTitlePadding.';
            }
            .sidecolumn .CategoryLinkTitleWrapper .CategoryLinkTitleArea{
                padding:'.$CustomizeSideColumn->CatLinkSidebarTitlePadding.';
            }
            .sidecolumn .NewestArticleTitleWrapper .NewestArticleTitleArea{
                padding:'.$CustomizeSideColumn->NewestArticleAreaTitlePadding.';
            }
            .sidecolumn .PopularArticleAreaTitleWrapper .PopularArticleAreaTitleArea{
                padding:'.$CustomizeSideColumn->PopularArticleAreaTitlePadding.';
            }

            .sidecolumn .CategoryArticlelinkarea > div{
                padding:'.$CustomizeSideColumn->CategoryArticleAreaContentPadding.';
            }
            .sidecolumn .CategoryLinklinkarea > div{
                padding:'.$CustomizeSideColumn->CatLinkSidebarContentPadding.';
            }
            .sidecolumn .NewestArticlelinkarea > div{
                padding:'.$CustomizeSideColumn->NewestArticleAreaContentPadding.';
            }
            .sidecolumn .PopularArticleArealinkarea > div{
                padding:'.$CustomizeSideColumn->PopularArticleAreaContentPadding.';
            }
            ';

            if($CustomizeSideColumn->SetCategoryArticleAreaThumBorder == 'true'){
                $CssNolimit .= '.sidecolumn .CategoryArticlelinkarea a > img, .sidecolumn .CategoryArticlelinkarea a > .dummy{
                    border: solid '.$CustomizeSideColumn->SetCategoryArticleAreaThumbBorderColor.' 0.5px;
                }';
            }
            if($CustomizeSideColumn->SetNewestArticleAreaThumBorder == 'true'){
                $CssNolimit .= '.sidecolumn .NewestArticlelinkarea a > img, .sidecolumn .NewestArticlelinkarea a > .dummy{
                    border: solid '.$CustomizeSideColumn->SetNewestArticleAreaThumbBorderColor.' 0.5px;
                }';
            }
            if($CustomizeSideColumn->SetPopularArticleAreaThumBorder == 'true'){
                $CssNolimit .= '.sidecolumn .PopularArticleArealinkarea a > img, .sidecolumn .PopularArticleArealinkarea a > .dummy{
                    border: solid '.$CustomizeSideColumn->SetPopularArticleAreaThumbBorderColor.' 0.5px;
                }';
            }


            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/CategoryArticle/sp/css/'.$CustomizeSideColumn->CategoryArticleAreaSPSidebarTemplate.'.php';
            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/CategoryArticle/pc/css/'.$CustomizeSideColumn->CategoryArticleAreaSidebarTemplate.'.php';
            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/CategoryArticle/tag/'.$CustomizeSideColumn->SetCategoryArticleAreaSidebarTagDesign.'.php';

            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/CategoryLink/tag/'.$CustomizeSideColumn->CatLinkSidebarTemplate.'.php';

            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/NewestArticleArea/sp/css/'.$CustomizeSideColumn->NewestArticleAreaSPSidebarTemplate.'.php';
            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/NewestArticleArea/pc/css/'.$CustomizeSideColumn->NewestArticleAreaSidebarTemplate.'.php';
            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/NewestArticleArea/tag/'.$CustomizeSideColumn->SetNewestArticleAreaSidebarTagDesign.'.php';

            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/PopularArticleArea/sp/css/'.$CustomizeSideColumn->PopularArticleAreaSPSidebarTemplate.'.php';
            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/PopularArticleArea/pc/css/'.$CustomizeSideColumn->PopularArticleAreaSidebarTemplate.'.php';
            require_once get_template_directory().'/Module/StyleFunction/sidecolumn/PopularArticleArea/tag/'.$CustomizeSideColumn->SetPopularArticleAreaSidebarTagDesign.'.php';

            $CssMin1200 .= SBCategoryArticlePcCss()->CssMin1200;
            $CssMin981 .= SBCategoryArticlePcCss()->CssMin981;
            $CssMax981 .= SBCategoryArticlePcCss()->CssMax981;
            $CssMin768 .= SBCategoryArticlePcCss()->CssMin768;
            $CssMin401to980 .= SBCategoryArticlePcCss()->CssMin401to980;
            $CssMax768 .= SBCategoryArticlePcCss()->CssMax768;
            $CssMax400 .= SBCategoryArticlePcCss()->CssMax400;

            $CssNolimit .= SBCategoryArticlepCss()->CssNolimit;
            $CssMin1200 .= SBCategoryArticlepCss()->CssMin1200;
            $CssMin981 .= SBCategoryArticlepCss()->CssMin981;
            $CssMax981 .= SBCategoryArticlepCss()->CssMax981;
            $CssMin768 .= SBCategoryArticlepCss()->CssMin768;
            $CssMin401to980 .= SBCategoryArticlepCss()->CssMin401to980;
            $CssMax768 .= SBCategoryArticlepCss()->CssMax768;
            $CssMax400 .= SBCategoryArticlepCss()->CssMax400;

            $CssNolimit .= SBCategoryArticleTagCss()->CssNolimit;
            $CssMin1200 .= SBCategoryArticleTagCss()->CssMin1200;
            $CssMin981 .= SBCategoryArticleTagCss()->CssMin981;
            $CssMax981 .= SBCategoryArticleTagCss()->CssMax981;
            $CssMin768 .= SBCategoryArticleTagCss()->CssMin768;
            $CssMin401to980 .= SBCategoryArticleTagCss()->CssMin401to980;
            $CssMax768 .= SBCategoryArticleTagCss()->CssMax768;
            $CssMax400 .= SBCategoryArticleTagCss()->CssMax400;

            $CssNolimit .= SBCategoryLinkTagCss()->CssNolimit;
            $CssMin1200 .= SBCategoryLinkTagCss()->CssMin1200;
            $CssMin981 .= SBCategoryLinkTagCss()->CssMin981;
            $CssMax981 .= SBCategoryLinkTagCss()->CssMax981;
            $CssMin768 .= SBCategoryLinkTagCss()->CssMin768;
            $CssMin401to980 .= SBCategoryLinkTagCss()->CssMin401to980;
            $CssMax768 .= SBCategoryLinkTagCss()->CssMax768;
            $CssMax400 .= SBCategoryLinkTagCss()->CssMax400;

            $CssNolimit .= SBNewestArticleAreaPcCss()->CssNolimit;
            $CssMin1200 .= SBNewestArticleAreaPcCss()->CssMin1200;
            $CssMin981 .= SBNewestArticleAreaPcCss()->CssMin981;
            $CssMax981 .= SBNewestArticleAreaPcCss()->CssMax981;
            $CssMin768 .= SBNewestArticleAreaPcCss()->CssMin768;
            $CssMin401to980 .= SBNewestArticleAreaPcCss()->CssMin401to980;
            $CssMax768 .= SBNewestArticleAreaPcCss()->CssMax768;
            $CssMax400 .= SBNewestArticleAreaPcCss()->CssMax400;

            $CssNolimit .= SBNewestArticleAreaSpCss()->CssNolimit;
            $CssMin1200 .= SBNewestArticleAreaSpCss()->CssMin1200;
            $CssMin981 .= SBNewestArticleAreaSpCss()->CssMin981;
            $CssMax981 .= SBNewestArticleAreaSpCss()->CssMax981;
            $CssMin768 .= SBNewestArticleAreaSpCss()->CssMin768;
            $CssMin401to980 .= SBNewestArticleAreaSpCss()->CssMin401to980;
            $CssMax768 .= SBNewestArticleAreaSpCss()->CssMax768;
            $CssMax400 .= SBNewestArticleAreaSpCss()->CssMax400;

            $CssNolimit .= SBNewestArticleAreaTagCss()->CssNolimit;
            $CssMin1200 .= SBNewestArticleAreaTagCss()->CssMin1200;
            $CssMin981 .= SBNewestArticleAreaTagCss()->CssMin981;
            $CssMax981 .= SBNewestArticleAreaTagCss()->CssMax981;
            $CssMin768 .= SBNewestArticleAreaTagCss()->CssMin768;
            $CssMin401to980 .= SBNewestArticleAreaTagCss()->CssMin401to980;
            $CssMax768 .= SBNewestArticleAreaTagCss()->CssMax768;
            $CssMax400 .= SBNewestArticleAreaTagCss()->CssMax400;

            $CssNolimit .= SBPopularArticleAreaPcCss()->CssNolimit;
            $CssMin1200 .= SBPopularArticleAreaPcCss()->CssMin1200;
            $CssMin981 .= SBPopularArticleAreaPcCss()->CssMin981;
            $CssMax981 .= SBPopularArticleAreaPcCss()->CssMax981;
            $CssMin768 .= SBPopularArticleAreaPcCss()->CssMin768;
            $CssMin401to980 .= SBPopularArticleAreaPcCss()->CssMin401to980;
            $CssMax768 .= SBPopularArticleAreaPcCss()->CssMax768;
            $CssMax400 .= SBPopularArticleAreaPcCss()->CssMax400;

            $CssNolimit .= SBPopularArticleAreapCss()->CssNolimit;
            $CssMin1200 .= SBPopularArticleAreapCss()->CssMin1200;
            $CssMin981 .= SBPopularArticleAreapCss()->CssMin981;
            $CssMax981 .= SBPopularArticleAreapCss()->CssMax981;
            $CssMin768 .= SBPopularArticleAreapCss()->CssMin768;
            $CssMin401to980 .= SBPopularArticleAreapCss()->CssMin401to980;
            $CssMax768 .= SBPopularArticleAreapCss()->CssMax768;
            $CssMax400 .= SBPopularArticleAreapCss()->CssMax400;

            $CssNolimit .= SBPopularArticleAreaTagCss()->CssNolimit;
            $CssMin1200 .= SBPopularArticleAreaTagCss()->CssMin1200;
            $CssMin981 .= SBPopularArticleAreaTagCss()->CssMin981;
            $CssMax981 .= SBPopularArticleAreaTagCss()->CssMax981;
            $CssMin768 .= SBPopularArticleAreaTagCss()->CssMin768;
            $CssMin401to980 .= SBPopularArticleAreaTagCss()->CssMin401to980;
            $CssMax768 .= SBPopularArticleAreaTagCss()->CssMax768;
            $CssMax400 .= SBPopularArticleAreaTagCss()->CssMax400;

            if($CustomizeSideColumn->DisplaySidebar != 'false'){
                $CssNolimit .= '
                .sidecolumn{
                    background:'.$CustomizeSideColumn->SetSidebarBgColor.';
                }
                .sidecolumn > nav{
                    '.Settings::ShadowFormat($CustomizeSideColumn->SetSidebarBgShadow, $CustomizeSideColumn->SetSidebarBgShadowLevel).';
                }
                ';
        
                $CssMin768 .= '
                .sidecolumn {
                    margin: 0 1rem 0 0.5rem;
                    width: calc(33.333333% - 3rem);
                }
                ';
                $CssMax768 .= '
                .sidecolumn{
                    margin-left:calc(8.333333% / 2);
                    margin-right:calc(8.333333% / 2);
                    width: 91.666667%;
                }
                ';
            }
            return (object)[
                'CssNolimit' => $CssNolimit,
                'CssMin1200' => $CssMin1200,
                'CssMin981' => $CssMin981,
                'CssMax981' => $CssMax981,
                'CssMin768' => $CssMin768,
                'CssMin401to980' => $CssMin401to980,
                'CssMax768' => $CssMax768,
                'CssMax400' => $CssMax400
            ];
        }
    }
    new MakeSideColumnStyle();
?>