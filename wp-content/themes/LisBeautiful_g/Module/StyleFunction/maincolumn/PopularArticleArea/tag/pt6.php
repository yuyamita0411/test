<?php
function PopularArticleAreaTagCss(){
    $CustomizeMainColumn = CustomizeMainColumn::Values();
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssNolimit .= '
    .contentarea .PopularArticleArea .catlink:before {
        color:'.$CustomizeMainColumn->SetPopularArticleAreaCatLinkColor.';
        content: "\f192";
        font-family: "Font Awesome 5 Free";
        font-weight:700;
    }
    ';

    return (object)[
        'CssNolimit' => $CssNolimit,
        'CssMin1200' => $CssMin1200,
        'CssMin981' => $CssMin981,
        'CssMin768' => $CssMin768,
        'CssMin401to980' => $CssMin401to980,
        'CssMax768' => $CssMax768,
        'CssMax400' => $CssMax400
    ];
}
?>