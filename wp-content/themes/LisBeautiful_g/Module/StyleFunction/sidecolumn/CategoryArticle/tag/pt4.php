<?php
function SBCategoryArticleTagCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CustomizeSideColumn = CustomizeSideColumn::Values();

    $CssNolimit .= '
    .sidecolumn .CategoryArticlelinkarea .catlink{
        font-size:10px;
    }
    .sidecolumn .CategoryArticlelinkarea .catlink:before {
        color:'.$CustomizeSideColumn->SetCategoryArticleAreaCatLinkColor.';
        content: "\f124";
        font-family: "Font Awesome 5 Free";
        font-weight:700;
        font-size:10px;
    }
    .sidecolumn .CategoryArticlelinkarea .catlink_and_date .linkarea{
        float:left;
    }
    ';

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