<?php
function SBCategoryLinkTagCss(){
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
    .sidecolumn .CategoryLinklinkarea .catlink:before {
        color:'.$CustomizeSideColumn->EachSidebarCatLinkColor.';
        content: "#";
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