<?php
    class MakeMainColumnStyle{

        public static function Value(){
            $CustomizeMainColumn = CustomizeMainColumn::Values();
            $CustomizePageLayout = CustomizePageLayout::Values();

            $CssNolimit = '';
            $CssMin1200 = '';
            $CssMin981 = '';
            $CssMax981 = '';
            $CssMin768 = '';
            $CssMin401to980 = '';
            $CssMax768 = '';
            $CssMin400 = '';
            $CssMax400 = '';

            $CssNolimit = '
            .linkarea{
                white-space: nowrap;
            }
            .contentarea{ 
                background-color:'.$CustomizeMainColumn->MainColumnColor.'; 
            }
            .contentarea > section:last-child{
                padding-bottom:.5rem;
            }
            .contentarea > section:not(last-child){
                padding-bottom:1.5rem;
            }
            #site-content nav + .contentarea{
                padding:'.$CustomizeMainColumn->MainColumnPadding.';
            }
            ';
            $CssNolimit .= '
            .contentarea .CategoryArticleArea > div{
                position:relative;
            }
            .contentarea .CategoryArticleaTitleArea{
                background-color:'.$CustomizeMainColumn->CategoryArticleTitleBackground.'; 
            }
            .contentarea .CategoryArticleaTitleArea{
                margin-bottom:'.$CustomizeMainColumn->CategoryArticleAreaTitleMargin.';
            }
            .contentarea .CategoryArticleaTitleArea{
                padding:'.$CustomizeMainColumn->CategoryArticleAreaTitlePadding.';
            }
            .contentarea .Catlinkarea > div{
                padding:'.$CustomizeMainColumn->CategoryArticleAreaContentPadding.';
            }
            .contentarea .CategoryTitleFontTopInner, .contentarea .CategoryTitleFontTopInner > span{
                font-size:'.$CustomizeMainColumn->CategoryArticleTitleFontSize.'; 
            }
            .contentarea .CategoryTitleFontTopInner{
                font-weight:'.$CustomizeMainColumn->CategoryArticleTitleFontWeight.';
            }
            .contentarea .CategoryTitleFontBottomInner, .contentarea .CategoryTitleFontBottomInner > span{
                font-size:'.$CustomizeMainColumn->CategoryArticleBottomTitleFontSize.'; 
            }
            .contentarea .CategoryTitleFontBottomInner{
                font-weight:'.$CustomizeMainColumn->CategoryArticleBottomTitleFontWeight.';
            }
            .contentarea .CategoryTitleFontTop,.contentarea .CategoryTitleFontBottom{
                color:'.$CustomizeMainColumn->CategoryArticleFontColor.'; 
            }
            .contentarea .CategoryTitleFontTop, .contentarea .CategoryTitleFontBottom{
                line-height:1;
            }
            .contentarea .CategoryTitleFontTop{
                text-align:'.$CustomizeMainColumn->CategoryArticleTitleDir.';
            }
            .contentarea .CategoryTitleFontBottom{
                text-align:'.$CustomizeMainColumn->CategoryArticleBottomTitleDir.';
            }
            .contentarea .CategoryArticleArea{
                background-color:'.$CustomizeMainColumn->CategoryArticleBackground.'; 
            }
            .contentarea .CategoryArticleArea{
                border-radius:'.$CustomizeMainColumn->SetCategoryArticleWRadius.';
            }
            .contentarea .Catlinkarea > div{
                border-radius:'.$CustomizeMainColumn->SetCategoryArticleCRadius.';
            }
            .contentarea .Catlinkarea > div{
                overflow:hidden;
            }
            .contentarea .Catlinkarea a > img{
                object-fit:cover;
            }
            .contentarea .Catlinkarea > div{
                background-color:'.$CustomizeMainColumn->SetCategoryArticleEachBackground.'; 
            }
            .Catlinkarea .datefont{
                color:'.$CustomizeMainColumn->SetCategoryArticleDateFontColor.';
            }
            .Catlinkarea .posttitle{
                color:'.$CustomizeMainColumn->SetCategoryArticleTitleFontColor.';
            }
            .contentarea .CategoryArticleArea{
                '.Settings::ShadowFormat($CustomizeMainColumn->SetCategoryArticleAreaShadow, $CustomizeMainColumn->SetCategoryArticleAreaShadowLevel).';
            }
            .contentarea .Catlinkarea > div{
                '.Settings::ShadowFormat($CustomizeMainColumn->SetCategoryArticleAreaContentShadow, $CustomizeMainColumn->SetCategoryArticleAreaContentShadowLevel).';
            }
            .contentarea .Catlinkarea > div{
                overflow:hidden;
            }
            .contentarea .CategoryArticleArea{
                background-image:url("'.$CustomizeMainColumn->SetCatABgImg.'");
                '.$CustomizeMainColumn->SetCatABgImgStatus.'
            }';
            
            $CssNolimit .= '
            .contentarea .EachCatLinkTitleArea{
                background-color:'.$CustomizeMainColumn->CatLinkTitleBackground.';
            }
            .contentarea .EachCatLinkTitleArea{
                padding:'.$CustomizeMainColumn->CatLinkSidebarTitlePadding.';
            }
            .contentarea .EachCatLinkTitleArea{
                margin-bottom:'.$CustomizeMainColumn->CatLinkSidebarBottomTitleMargin.';
            }
            .contentarea .EachCatLinkArea > div{
                padding:'.$CustomizeMainColumn->CatLinkSidebarContentPadding.';
            }
            .contentarea .EachCatLinkTitleFontTopInner, .EachCatLinkTitleFontTopInner > span{
                font-size:'.$CustomizeMainColumn->CatLinkTitleFontSize.'; 
            }
            .contentarea .EachCatLinkTitleFontBottomInner, .EachCatLinkTitleFontBottomInner > span{
                font-size:'.$CustomizeMainColumn->CatLinkBottomTitleFontSize.'; 
            }
            .contentarea .EachCatLinkTitleFontTop,.EachCatLinkTitleFontBottom{
                color:'.$CustomizeMainColumn->CatLinkFontColor.'; 
            }
            .contentarea .EachCatLinkTitleFontTop, .contentarea .EachCatLinkTitleFontBottom{
                line-height:1;
            }
            .contentarea .EachCatLinkTitleFontTop{
                text-align:'.$CustomizeMainColumn->CatLinkTitleDir.';
            }
            .contentarea .EachCatLinkTitleFontBottom{
                text-align:'.$CustomizeMainColumn->CatLinkBottomTitleDir.';
            }
            .contentarea .EachCatLinkArea{
                background-color:'.$CustomizeMainColumn->CatLinkBackground.'; 
            }
            .contentarea .EachCatLinkArea{
                background-image:url("'.$CustomizeMainColumn->SetCatLBgImg.'");
                '.$CustomizeMainColumn->SetCatLBgImgStatus.'
            }';

            $CssNolimit .= '
            .contentarea .NewestArticleArea > div{
                position:relative;
            }
            .contentarea .NewestArticleTitleArea{
                background-color:'.$CustomizeMainColumn->NewestArticleAreaTitleBackground.'; 
            }
            .contentarea .NewestArticleTitleArea{
                padding:'.$CustomizeMainColumn->NewestArticleAreaTitlePadding.';
            }
            .contentarea .NewestArticleTitleArea{
                margin-bottom:'.$CustomizeMainColumn->NewestArticleAreaBottomTitleMargin.';
            }
            .contentarea .NewestArticlelinkarea > div{
                padding:'.$CustomizeMainColumn->NewestArticleAreaContentPadding.';
            }
            .contentarea .NewestArticleAreaFontTopInner, .contentarea .NewestArticleAreaFontTopInner > span{
                font-size:'.$CustomizeMainColumn->NewestArticleAreaTitleFontSize.';
            }
            .contentarea .NewestArticleAreaFontBottomInner, .contentarea .NewestArticleAreaFontBottomInner > span{
                font-size:'.$CustomizeMainColumn->NewestArticleAreaBottomTitleFontSize.';
            }
            .contentarea .NewestArticleAreaFontTop,.contentarea .NewestArticleAreaFontBottom{
                color:"'.$CustomizeMainColumn->NewestArticleAreaFontColor.'"; 
            }
            .contentarea .NewestArticleAreaFontTop, .contentarea .NewestArticleAreaFontBottom{
                line-height:1;
            }
            .contentarea .NewestArticleAreaFontTop{
                text-align:'.$CustomizeMainColumn->NewestArticleAreaTitleDir.';
            }
            .contentarea .NewestArticleAreaFontTop{
                font-weight:'.$CustomizeMainColumn->NewestArticleAreaTitleFontWeight.';
            }
            .contentarea .NewestArticleAreaFontBottom{
                text-align:'.$CustomizeMainColumn->NewestArticleAreaBottomTitleDir.';
            }
            .contentarea .NewestArticleAreaFontBottomInner{
                font-weight:'.$CustomizeMainColumn->NewestArticleAreaBottomTitleFontWeight.';
            }
            .contentarea .NewestArticleArea{
                background-color:'.$CustomizeMainColumn->NewestArticleAreaBackground.'; 
            }
            .contentarea .NewestArticleArea{
                border-radius:'.$CustomizeMainColumn->SetNewestArticleAreaWRadius.';
            }
            .contentarea .NewestArticlelinkarea > div{
                border-radius:'.$CustomizeMainColumn->SetNewestArticleAreaCRadius.';
            }
            .contentarea .NewestArticlelinkarea > div{
                overflow:hidden;
            }
            .contentarea .NewestArticlelinkarea a > img{
                object-fit:cover;
            }
            .contentarea .NewestArticlelinkarea > div{
                background-color:'.$CustomizeMainColumn->SetNewestArticleAreaEachBackground.'; 
            }
            .contentarea .NewestArticlelinkarea > div{
                '.Settings::ShadowFormat($CustomizeMainColumn->SetNewestArticleAreaContentShadow, $CustomizeMainColumn->SetNewestArticleAreaContentShadowLevel).';
            }
            .contentarea .NewestArticlelinkarea .datefont{
                color:'.$CustomizeMainColumn->SetNewestArticleAreaDateFontColor.';
            }
            .contentarea .NewestArticlelinkarea .posttitle{
                color:'.$CustomizeMainColumn->SetNewestArticleAreaTitleFontColor.';
            }
            .contentarea .NewestArticleArea{
                '.Settings::ShadowFormat($CustomizeMainColumn->SetNewestArticleAreaShadow, $CustomizeMainColumn->SetNewestArticleAreaShadowLevel).';
            }
            .contentarea .NewestArticleArea{
                background-image:url("'.$CustomizeMainColumn->SetNArABgImg.'");
                '.$CustomizeMainColumn->SetNArABgImgStatus.'
            }
            ';

            $CssNolimit .= '
            .contentarea .PopularArticleArea > div{
                position:relative;
            }
            .contentarea .PopularArticleAreaTitleArea{
                background-color:'.$CustomizeMainColumn->PopularArticleAreaTitleBackground.'; 
            }
            .contentarea .PopularArticleAreaTitleArea{
                padding:'.$CustomizeMainColumn->PopularArticleAreaTitlePadding.'; 
            }
            .contentarea .PopularArticleAreaTitleArea{
                margin-bottom:'.$CustomizeMainColumn->PopularArticleAreaBottomTitleMargin.'; 
            }
            .contentarea .PopularArticleArealinkarea > div{
                padding:'.$CustomizeMainColumn->PopularArticleAreaContentPadding.';
            }
            .contentarea .PopularArticleAreaFontTopInner, .contentarea .PopularArticleAreaFontTopInner > span{
                font-size:'.$CustomizeMainColumn->PopularArticleAreaTitleFontSize.';
            }
            .contentarea .PopularArticleAreaFontTopInner{
                font-weight:'.$CustomizeMainColumn->PopularArticleAreaTitleFontWeight.';
            }
            .contentarea .PopularArticleAreaFontBottomInner, .contentarea .PopularArticleAreaFontBottomInner > span{
                font-size:'.$CustomizeMainColumn->PopularArticleAreaBottomTitleFontSize.';
            }
            .contentarea .PopularArticleAreaFontBottomInner{
                font-weight:'.$CustomizeMainColumn->PopularArticleAreaBottomTitleFontWeight.';
            }
            .contentarea .PopularArticleAreaFontTop, .contentarea .PopularArticleAreaFontBottom{
                color:'.$CustomizeMainColumn->PopularArticleAreaFontColor.'; 
            }
            .contentarea .PopularArticleAreaFontTop, .contentarea .PopularArticleAreaFontBottom{
                line-height:1;
            }
            .contentarea .PopularArticleAreaFontTop{
                text-align:'.$CustomizeMainColumn->PopularArticleAreaTitleDir.';
            }
            .contentarea .PopularArticleAreaFontBottom{
                text-align:'.$CustomizeMainColumn->PopularArticleAreaBottomTitleDir.';
            }
            .contentarea .PopularArticleArea{
                background-color:'.$CustomizeMainColumn->PopularArticleAreaBackground.'; 
            }
            .contentarea .PopularArticleArea{
                border-radius:'.$CustomizeMainColumn->SetPopularArticleAreaWRadius.';
            }
            .contentarea .PopularArticleArealinkarea > div{
                border-radius:'.$CustomizeMainColumn->SetPopularArticleAreaCRadius.';
            }
            .contentarea .PopularArticleArealinkarea > div{
                overflow:hidden;
            }
            .contentarea .PopularArticleArealinkarea a > img{
                object-fit:cover;
            }
            .contentarea .PopularArticleArealinkarea > div{
                background-color:'.$CustomizeMainColumn->SetPopularArticleAreaEachBackground.'; 
            }
            .contentarea .PopularArticleArealinkarea .datefont{
                color:'.$CustomizeMainColumn->SetPopularArticleAreaDateFontColor.';
            }
            .contentarea .PopularArticleArealinkarea .posttitle{
                color:'.$CustomizeMainColumn->SetPopularArticleAreaTitleFontColor.';
            }
            .contentarea .PopularArticleArea{
                '.Settings::ShadowFormat($CustomizeMainColumn->SetPopularArticleAreaShadow, $CustomizeMainColumn->SetPopularArticleAreaShadowLevel).';
            }
            .contentarea .PopularArticleArea{
                background-image:url("'.$CustomizeMainColumn->SetPArBgImg.'");
                '.$CustomizeMainColumn->SetPArBgImgStatus.'
            }
            .contentarea .PopularArticleArealinkarea > div{
                '.Settings::ShadowFormat($CustomizeMainColumn->SetPopularArticleAreaContentShadow, $CustomizeMainColumn->SetPopularArticleAreaContentShadowLevel).';
            }
            .contentarea .PopularArticleArealinkarea > div{
                overflow:hidden;
            }
            ';
            $CssNolimit .= '
            .contentarea .ArchiveArticleArea > div{
                position:relative;
            }
            .contentarea .ArchiveArticleaTitleArea{
                background-color:'.$CustomizePageLayout->ArchiveArticleTitleBackground.'; 
            }
            .contentarea .ArchiveArticleaTitleArea{
                margin-bottom:'.$CustomizePageLayout->ArchiveArticleAreaTitleMargin.';
            }
            .contentarea .ArchiveArticleaTitleArea{
                padding:'.$CustomizePageLayout->ArchiveArticleAreaTitlePadding.';
            }
            .contentarea .Archivelinkarea > div{
                padding:'.$CustomizePageLayout->ArchiveArticleAreaContentPadding.';
            }
            .contentarea .ArchiveTitleFontTopInner, .contentarea .ArchiveTitleFontTopInner > span{
                font-size:'.$CustomizePageLayout->ArchiveArticleTitleFontSize.'; 
            }
            .contentarea .ArchiveTitleFontTopInner{
                font-weight:'.$CustomizePageLayout->ArchiveArticleTitleFontWeight.';
            }
            .contentarea .ArchiveTitleFontBottomInner, .contentarea .ArchiveTitleFontBottomInner > span{
                font-size:'.$CustomizePageLayout->ArchiveArticleBottomTitleFontSize.'; 
            }
            .contentarea .ArchiveTitleFontBottomInner{
                font-weight:'.$CustomizePageLayout->ArchiveArticleBottomTitleFontWeight.';
            }
            .contentarea .ArchiveTitleFontTop,.contentarea .ArchiveTitleFontBottom{
                color:'.$CustomizePageLayout->ArchiveArticleFontColor.'; 
            }
            .contentarea .ArchiveTitleFontTop, .contentarea .ArchiveTitleFontBottom{
                line-height:1;
            }
            .contentarea .ArchiveTitleFontTop{
                text-align:'.$CustomizePageLayout->ArchiveArticleTitleDir.';
            }
            .contentarea .ArchiveTitleFontBottom{
                text-align:'.$CustomizePageLayout->ArchiveArticleBottomTitleDir.';
            }
            .contentarea .ArchiveArticleArea{
                background-color:'.$CustomizePageLayout->ArchiveArticleBackground.'; 
            }
            .contentarea .ArchiveArticleArea{
                border-radius:'.$CustomizePageLayout->SetArchiveArticleWRadius.';
            }
            .contentarea .Archivelinkarea > div{
                border-radius:'.$CustomizePageLayout->SetArchiveArticleCRadius.';
            }
            .contentarea .Archivelinkarea > div{
                overflow:hidden;
            }
            .contentarea .Archivelinkarea a > img{
                object-fit:cover;
            }
            .contentarea .Archivelinkarea > div{
                background-color:'.$CustomizePageLayout->SetArchiveArticleEachBackground.'; 
            }
            .Archivelinkarea .datefont{
                color:'.$CustomizePageLayout->SetArchiveArticleDateFontColor.';
            }
            .Archivelinkarea .posttitle{
                color:'.$CustomizePageLayout->SetArchiveArticleTitleFontColor.';
            }
            .contentarea .ArchiveArticleArea{
                '.Settings::ShadowFormat($CustomizePageLayout->SetArchiveArticleAreaShadow, $CustomizePageLayout->SetArchiveArticleAreaShadowLevel).';
            }
            .contentarea .Archivelinkarea > div{
                '.Settings::ShadowFormat($CustomizePageLayout->SetArchiveArticleAreaContentShadow, $CustomizePageLayout->SetArchiveArticleAreaContentShadowLevel).';
            }
            .contentarea .Archivelinkarea > div{
                overflow:hidden;
            }
            .contentarea .ArchiveArticleArea{
                background-image:url("'.$CustomizePageLayout->SetArchABgImg.'");
                '.$CustomizePageLayout->SetArchABgImgStatus.'
            }';

            $CssNolimit .= '
            .profile_box {
                display:'.$CustomizeMainColumn->AuthoInfoDisplay.';
            }
            .profile_box {
                border:'.$CustomizeMainColumn->AuthoInfoOutLineCat.';
            }
            .profile_box{
                border-width:'.$CustomizeMainColumn->AuthoInfoOutLineThickness.'em;
            }
            .profile_box{
                border-color:'.$CustomizeMainColumn->AuthoInfoOutLineColor.';
            }
            .profile-box_title{
                color:'.$CustomizeMainColumn->AuthoInfoTitleColor.';
            }
            .profile-box_title {
                background-color:'.$CustomizeMainColumn->AuthoInfoTitleBackgroundColor.';
            }
            .author_name_area {
                border:solid 1px;
                background-color:'.$CustomizeMainColumn->AuthoInfoNameBackgroundColor.';
                border-radius:'.$CustomizeMainColumn->AuthoInfoNameBorderRadius.';
                color:'.$CustomizeMainColumn->AuthoInfoNameColor.';
                font-size:'.$CustomizeMainColumn->AuthoInfoNameFontsize.';
            }
            .profile_user_info{
                border-color:'.$CustomizeMainColumn->AuthoInfoSegmentlineColor.';
            }
            .profile_user_description{
                background-color:'.$CustomizeMainColumn->AuthoInfoProfAreaBackgroundColor.';
                color:'.$CustomizeMainColumn->AuthoInfoProfAreaFontColor.';
            }
            .profile-box_title{
                background-color:'.$CustomizeMainColumn->AuthoInfoTitleBackgroundColor.';
            }
            .profile-box_title{
                border: 1px solid;
                border-radius:'.$CustomizeMainColumn->AuthoInfoTitleBorderRadius.';
                color: '.$CustomizeMainColumn->AuthoInfoTitleColor.';
                font-size:'.$CustomizeMainColumn->AuthoInfoTitleFontsize.';
            }
            ';
            if ($CustomizeMainColumn->AuthoInfoImageOutlineDisplay == 'true') {
                $CssNolimit .= '
                .profile-box_image img{
                    border: '.$CustomizeMainColumn->AuthoInfoImageOutlineCategory.' '.$CustomizeMainColumn->AuthoInfoImageOutlineThickness.'em '.$CustomizeMainColumn->AuthoInfoImageOutlineColor.';
                }
                ';
            }
            if($CustomizeMainColumn->SetNewestArticleAreaThumBorder == "true"){
                $CssNolimit .= '
                .contentarea .Catlinkarea a > img, .contentarea .Catlinkarea a > .dummy{
                    border: solid '.$CustomizeMainColumn->SetNewestArticleAreaThumBorderColor.' 0.5px;
                }';
            }
            if($CustomizeMainColumn->SetNewestArticleAreaThumBorder == "true"){
                $CssNolimit .= '
                .contentarea .Catlinkarea a > img, .contentarea .Catlinkarea a > .dummy{
                    border: solid '.$CustomizeMainColumn->SetCategoryArticleThumbBorderColor.' 0.5px;
                }';
            }
            if($CustomizeMainColumn->SetPopularArticleAreaThumBorder == "true"){
                $CssNolimit .= '
                .contentarea .PopularArticleArealinkarea a > img, .contentarea .PopularArticleArealinkarea a > .dummy{
                    border: solid '.$CustomizeMainColumn->SetPopularArticleAreaThumbBorderColor.' 0.5px;
                }';
            }
        
            //@media screen and (min-width: 1200px)
            $CssMin1200 = '
            #site-content{
                max-width: 1200px;
                margin-left: calc((100% - 1200px) / 2);
                margin-right: calc((100% - 1200px) / 2);
            }
            ';
        
            //@media screen and (min-width: 981px)
            $CssMin981 = '
            .contentarea .posttitle{
                font-size:18px;
            }
            .contentarea .PcontEx,
            .contentarea .catlink_and_date,
            .contentarea .catlink:before,
            .contentarea .catlink{
                font-size:16px;
            }';
        
            //@media screen and (min-width: 768px)

            //@media (min-width: 401px) and (max-width: 980px)
            $CssMin401to980 = '
            .contentarea .posttitle{
                font-size:16px;
            }
            .contentarea .PcontEx,
            .contentarea .catlink_and_date,
            .contentarea .catlink:before,
            .contentarea .catlink{
                font-size:14px;
            }
            ';
        
            //@media screen and (max-width: 768px)
            $CssMax768 = '
            #site-content nav + .contentarea{
                padding-top:.5rem;
            }
            ';
        
            //@media screen and (max-width: 400px)
            $CssMax400 = '
            .contentarea .posttitle{
                font-size:14px;
            }
            .contentarea .PcontEx,
            .contentarea .catlink_and_date,
            .contentarea .catlink:before,
            .contentarea .catlink{
                font-size:12px;
            }
            ';
        
            if(CustomizeSideColumn::Values()->DisplaySidebar != 'false'){
                $CssMin768 .= '
                .contentarea{
                    width: 66.666667%;
                    margin-left:1rem;
                }
                ';
                $CssMax768 .= '
                .contentarea{
                    width: 91.666667%;
                    margin-left:calc(8.333333% / 2);
                    margin-right:calc(8.333333% / 2);
                }
                ';
            }else{
                $CssMin768 .= '
                .contentarea{
                    margin-left:calc(33.333333% / 2);
                    margin-right:calc(33.333333% / 2);
                    width: 66.666667%;
                }
                ';
                $CssMax768 .= '
                .contentarea{
                    margin-left:calc(8.333333% / 2);
                    margin-right:calc(8.333333% / 2);
                    width: 91.666667%;
                }
                ';
            }
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/CategoryArticle/pc/css/'.$CustomizeMainColumn->CategoryArticleTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/CategoryArticle/sp/css/'.$CustomizeMainColumn->CategoryArticleSPTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/CategoryArticle/tag/'.$CustomizeMainColumn->SetCategoryArticleTagDesign.'.php';

            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/CategoryLink/tag/'.$CustomizeMainColumn->CatLinkTemplate.'.php';

            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/NewestArticleArea/pc/css/'.$CustomizeMainColumn->NewestArticleAreaTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/NewestArticleArea/sp/css/'.$CustomizeMainColumn->NewestArticleAreaSPTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/NewestArticleArea/tag/'.$CustomizeMainColumn->SetNewestArticleAreaTagDesign.'.php';
            
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/PopularArticleArea/pc/css/'.$CustomizeMainColumn->PopularArticleAreaTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/PopularArticleArea/sp/css/'.$CustomizeMainColumn->PopularArticleAreaSPTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/PopularArticleArea/tag/'.$CustomizeMainColumn->SetPopularArticleAreaTagDesign.'.php';

            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/Content/index.php';

            $CssNolimit .= ContentCss()->CssNolimit;
            $CssMin1200 .= ContentCss()->CssMin1200;
            $CssMin981 .= ContentCss()->CssMin981;
            $CssMax981 .= ContentCss()->CssMax981;
            $CssMin768 .= ContentCss()->CssMin768;
            $CssMin401to980 .= ContentCss()->CssMin401to980;
            $CssMax768 .= ContentCss()->CssMax768;
            $CssMax400 .= ContentCss()->CssMax400;

            $CssNolimit .= CategoryArticlePcCss()->CssNolimit;
            $CssMin1200 .= CategoryArticlePcCss()->CssMin1200;
            $CssMin981 .= CategoryArticlePcCss()->CssMin981;
            $CssMax981 .= CategoryArticlePcCss()->CssMax981;
            $CssMin768 .= CategoryArticlePcCss()->CssMin768;
            $CssMin401to980 .= CategoryArticlePcCss()->CssMin401to980;
            $CssMax768 .= CategoryArticlePcCss()->CssMax768;
            $CssMax400 .= CategoryArticlePcCss()->CssMax400;

            $CssNolimit .= CategoryArticlepCss()->CssNolimit;
            $CssMin1200 .= CategoryArticlepCss()->CssMin1200;
            $CssMin981 .= CategoryArticlepCss()->CssMin981;
            $CssMax981 .= CategoryArticlepCss()->CssMax981;
            $CssMin768 .= CategoryArticlepCss()->CssMin768;
            $CssMin401to980 .= CategoryArticlepCss()->CssMin401to980;
            $CssMax768 .= CategoryArticlepCss()->CssMax768;
            $CssMax400 .= CategoryArticlepCss()->CssMax400;

            $CssNolimit .= CategoryArticleTagCss()->CssNolimit;
            $CssMin1200 .= CategoryArticleTagCss()->CssMin1200;
            $CssMin981 .= CategoryArticleTagCss()->CssMin981;
            $CssMax981 .= CategoryArticleTagCss()->CssMax981;
            $CssMin768 .= CategoryArticleTagCss()->CssMin768;
            $CssMin401to980 .= CategoryArticleTagCss()->CssMin401to980;
            $CssMax768 .= CategoryArticleTagCss()->CssMax768;
            $CssMax400 .= CategoryArticleTagCss()->CssMax400;

            $CssNolimit .= CategoryLinkTagCss()->CssNolimit;
            $CssMin1200 .= CategoryLinkTagCss()->CssMin1200;
            $CssMin981 .= CategoryLinkTagCss()->CssMin981;
            $CssMax981 .= CategoryLinkTagCss()->CssMax981;
            $CssMin768 .= CategoryLinkTagCss()->CssMin768;
            $CssMin401to980 .= CategoryLinkTagCss()->CssMin401to980;
            $CssMax768 .= CategoryLinkTagCss()->CssMax768;
            $CssMax400 .= CategoryLinkTagCss()->CssMax400;

            $CssNolimit .= NewestArticleAreaPcCss()->CssNolimit;
            $CssMin1200 .= NewestArticleAreaPcCss()->CssMin1200;
            $CssMin981 .= NewestArticleAreaPcCss()->CssMin981;
            $CssMax981 .= NewestArticleAreaPcCss()->CssMax981;
            $CssMin768 .= NewestArticleAreaPcCss()->CssMin768;
            $CssMin401to980 .= NewestArticleAreaPcCss()->CssMin401to980;
            $CssMax768 .= NewestArticleAreaPcCss()->CssMax768;
            $CssMax400 .= NewestArticleAreaPcCss()->CssMax400;

            $CssNolimit .= NewestArticleAreaSpCss()->CssNolimit;
            $CssMin1200 .= NewestArticleAreaSpCss()->CssMin1200;
            $CssMin981 .= NewestArticleAreaSpCss()->CssMin981;
            $CssMax981 .= NewestArticleAreaSpCss()->CssMax981;
            $CssMin768 .= NewestArticleAreaSpCss()->CssMin768;
            $CssMin401to980 .= NewestArticleAreaSpCss()->CssMin401to980;
            $CssMax768 .= NewestArticleAreaSpCss()->CssMax768;
            $CssMax400 .= NewestArticleAreaSpCss()->CssMax400;

            $CssNolimit .= NewestArticleAreaTagCss()->CssNolimit;
            $CssMin1200 .= NewestArticleAreaTagCss()->CssMin1200;
            $CssMin981 .= NewestArticleAreaTagCss()->CssMin981;
            $CssMax981 .= NewestArticleAreaTagCss()->CssMax981;
            $CssMin768 .= NewestArticleAreaTagCss()->CssMin768;
            $CssMin401to980 .= NewestArticleAreaTagCss()->CssMin401to980;
            $CssMax768 .= NewestArticleAreaTagCss()->CssMax768;
            $CssMax400 .= NewestArticleAreaTagCss()->CssMax400;

            $CssNolimit .= PopularArticleAreaPcCss()->CssNolimit;
            $CssMin1200 .= PopularArticleAreaPcCss()->CssMin1200;
            $CssMin981 .= PopularArticleAreaPcCss()->CssMin981;
            $CssMax981 .= PopularArticleAreaPcCss()->CssMax981;
            $CssMin768 .= PopularArticleAreaPcCss()->CssMin768;
            $CssMin401to980 .= PopularArticleAreaPcCss()->CssMin401to980;
            $CssMax768 .= PopularArticleAreaPcCss()->CssMax768;
            $CssMax400 .= PopularArticleAreaPcCss()->CssMax400;

            $CssNolimit .= PopularArticleAreapCss()->CssNolimit;
            $CssMin1200 .= PopularArticleAreapCss()->CssMin1200;
            $CssMin981 .= PopularArticleAreapCss()->CssMin981;
            $CssMax981 .= PopularArticleAreapCss()->CssMax981;
            $CssMin768 .= PopularArticleAreapCss()->CssMin768;
            $CssMin401to980 .= PopularArticleAreapCss()->CssMin401to980;
            $CssMax768 .= PopularArticleAreapCss()->CssMax768;
            $CssMax400 .= PopularArticleAreapCss()->CssMax400;

            $CssNolimit .= PopularArticleAreaTagCss()->CssNolimit;
            $CssMin1200 .= PopularArticleAreaTagCss()->CssMin1200;
            $CssMin981 .= PopularArticleAreaTagCss()->CssMin981;
            $CssMax981 .= PopularArticleAreaTagCss()->CssMax981;
            $CssMin768 .= PopularArticleAreaTagCss()->CssMin768;
            $CssMin401to980 .= PopularArticleAreaTagCss()->CssMin401to980;
            $CssMax768 .= PopularArticleAreaTagCss()->CssMax768;
            $CssMax400 .= PopularArticleAreaTagCss()->CssMax400;

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
    new MakeMainColumnStyle();
?>