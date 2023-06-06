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
    .sidecolumn .NewestArticlelinkarea .linkarea,
    .sidecolumn .NewestArticlelinkarea .datefont{
        float:left;
    }
    .sidecolumn .NewestArticlelinkarea > div > div{
        width:100%;
    }
    .sidecolumn .NewestArticlelinkarea .posttitle{
        margin-top:.5rem;
    }
    .sidecolumn .NewestArticlelinkarea .PcontExPc{
        display:inline-block;
    }
    .sidecolumn .NewestArticlelinkarea .PcontExSP{
        display:none;
    }
    .sidecolumn .NewestArticlelinkarea .catlink_and_date{
        float:left;
    }
    .sidecolumn .NewestArticlelinkarea .linkarea > a{
        margin-bottom:.2rem;
        margin-right:.2rem;
    }
    .sidecolumn .NewestArticlelinkarea .linkarea > a,
    .sidecolumn .NewestArticlelinkarea .datefont{
        float: left;
        height: 1rem;
        line-height: 1rem;
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