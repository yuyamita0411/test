<?php
function SBNewestArticleAreaSpCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    .sidecolumn .NewestArticlelinkarea .PcontExPc{
        display:none;
    }
    .sidecolumn .NewestArticlelinkarea .PcontExSP{
        display:inline-block;
    }
    ';
    $CssMax768 .= '
    .sidecolumn .NewestArticlelinkarea > div > div{
        width:100%;
    }
    .sidecolumn .NewestArticlelinkarea .PcontExPc{
        display:inline-block;
    }
    .sidecolumn .NewestArticlelinkarea .PcontExSP{
        display:none;
    }
    .sidecolumn .NewestArticlelinkarea .ThumbArea{
        float:left;
        width:25%;
    }
    .sidecolumn .NewestArticlelinkarea .TextArea{
        float:right;
        position:relative;
        width:75%;
    }
    .sidecolumn .NewestArticlelinkarea .TextArea .catlink_and_date{
        position:absolute;
        bottom:0;
        right:0;
    }
    .sidecolumn .NewestArticlelinkarea .linkarea .catlink,
    .sidecolumn .NewestArticlelinkarea .datefont{
        float:right;
    }
    .sidecolumn .NewestArticlelinkarea .TextArea .posttitle{
        margin-left:.5rem;
    }
    .sidecolumn .NewestArticlelinkarea .datefont{
        line-height:1.2em;
    }
    .sidecolumn .NewestArticlelinkarea .linkarea > a{
        margin-bottom:.2rem;
        margin-right:.2rem;
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