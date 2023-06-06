<?php
function NewestArticleAreaTagCss(){
    $CustomizeMainColumn = CustomizeMainColumn::Values();
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssNolimit .= '
    .contentarea .NewestArticleArea .catlink:before {
        color:'.$CustomizeMainColumn->SetNewestArticleAreaCatLinkColor.';
        content: "\f044";
        font-family: "Font Awesome 5 Free";
        font-weight:700;
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