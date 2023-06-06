<?php
    function ContentCss(){
        $CssNolimit = '';
        $CssMin1200 = '';
        $CssMin981 = '';
        $CssMax981 = '';
        $CssMin768 = '';
        $CssMin401to980 = '';
        $CssMax768 = '';
        $CssMax400 = '';

        $CustomizeMainColumn = CustomizeMainColumn::Values();

        $CssNolimit = '
        .contentarea{ 
            background-color:'.$CustomizeMainColumn->MainColumnColor.'; 
        }
        .sns-btn{
            background:'.$CustomizeMainColumn->SetSNSAreaTitleBackgroundColor.';
        }
        .sns-btn__title:before{
            left: 0;
        }
        .sns-btn__title:after{
            right: 0;
        }
        .sns-btn__title {
            color: '.$CustomizeMainColumn->SetSNSAreaTitleColor.';
            display: inline-block;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            line-height: 1;
            position: relative;
            padding: 0 25px;
        }
        .sns-btn__title:before, .sns-btn__title:after{
            display: inline-block;
            position: absolute;
        }
        
        /**アニメーション関係 */
        .sns-btn__item i:hover{
            opacity:0.6;
        }
        .sns-btn__item i,
        .sns-btn__item i:hover{
            transition:all 0.5s;
        }
        /**アニメーション関係 */
        
        /**共通 */
        .sns-area-wrapper{
            background: '.$CustomizeMainColumn->SetSNSAreaColor.';
        }
        .sns-area-wrapper {
            padding: 0;
        }
        .sns-btn__item {
            display: inline-block;
            position: relative;
        }
        /**共通 */
        ';

        if($CustomizeMainColumn->SetSNSButton != 'none' && $CustomizeMainColumn->SetSNSAreaTitleDesign != 'none'){
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/Single/SNSTitle/css/'.$CustomizeMainColumn->SetSNSAreaTitleDesign.'.php';
        }
        if($CustomizeMainColumn->SetSNSButton != 'none'){
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/Single/SNSbutton/css/'.$CustomizeMainColumn->SetSNSButton.'.php';
        }

        if($CustomizeMainColumn->DisplayAuthor != 'none'){
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/Single/Authorinfo/'.$CustomizeMainColumn->AuthoInfoDesign.'.php';
        }

        $CssNolimit .= AuthorinfoCss()->CssNolimit;
        $CssMin1200 .= AuthorinfoCss()->CssMin1200;
        $CssMin981 .= AuthorinfoCss()->CssMin981;
        $CssMax981 .= AuthorinfoCss()->CssMax981;
        $CssMin768 .= AuthorinfoCss()->CssMin768;
        $CssMin401to980 .= AuthorinfoCss()->CssMin401to980;
        $CssMax768 .= AuthorinfoCss()->CssMax768;
        $CssMin400 .= AuthorinfoCss()->CssMin400;
        $CssMax400 .= AuthorinfoCss()->CssMax400;

        $CssNolimit .= ContentTitleCss()->CssNolimit;
        $CssMin1200 .= ContentTitleCss()->CssMin1200;
        $CssMin981 .= ContentTitleCss()->CssMin981;
        $CssMax981 .= ContentTitleCss()->CssMax981;
        $CssMin768 .= ContentTitleCss()->CssMin768;
        $CssMin401to980 .= ContentTitleCss()->CssMin401to980;
        $CssMax768 .= ContentTitleCss()->CssMax768;
        $CssMin400 .= ContentTitleCss()->CssMin400;
        $CssMax400 .= ContentTitleCss()->CssMax400;

        $CssNolimit .= ContentButtonCss()->CssNolimit;
        $CssMin1200 .= ContentButtonCss()->CssMin1200;
        $CssMin981 .= ContentButtonCss()->CssMin981;
        $CssMax981 .= ContentButtonCss()->CssMax981;
        $CssMin768 .= ContentButtonCss()->CssMin768;
        $CssMin401to980 .= ContentButtonCss()->CssMin401to980;
        $CssMax768 .= ContentButtonCss()->CssMax768;
        $CssMin400 .= ContentButtonCss()->CssMin400;
        $CssMax400 .= ContentButtonCss()->CssMax400;

        //アーカイブページの時
        if(is_archive()){
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/archivetemplates/pc/css/'.CustomizePageLayout::Values()->ArchiveArticleTemplate.'.php';
            require_once get_template_directory() . '/Module/StyleFunction/maincolumn/Content/PageCategory/archivetemplates/sp/css/'.CustomizePageLayout::Values()->ArchiveArticleSPTemplate.'.php';
            $CssNolimit .= ArchiveDesignCss()->CssNolimit;
            $CssNolimit .= ArchiveDesignCssSpCss()->CssNolimit;
            $CssMin1200 .= ArchiveDesignCss()->CssMin1200;
            $CssMin1200 .= ArchiveDesignCssSpCss()->CssMin1200;
            $CssMin981 .= ArchiveDesignCss()->CssMin981;
            $CssMin981 .= ArchiveDesignCssSpCss()->CssMin981;
            $CssMax981 .= ArchiveDesignCss()->CssMax981;
            $CssMax981 .= ArchiveDesignCssSpCss()->CssMax981;
            $CssMin768 .= ArchiveDesignCss()->CssMin768;
            $CssMin768 .= ArchiveDesignCssSpCss()->CssMin768;
            $CssMin401to980 .= ArchiveDesignCss()->CssMin401to980;
            $CssMin401to980 .= ArchiveDesignCssSpCss()->CssMin401to980;
            $CssMax768 .= ArchiveDesignCss()->CssMax768;
            $CssMax768 .= ArchiveDesignCssSpCss()->CssMax768;
            $CssMax400 .= ArchiveDesignCss()->CssMax400;
            $CssMax400 .= ArchiveDesignCssSpCss()->CssMax400;
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
?>