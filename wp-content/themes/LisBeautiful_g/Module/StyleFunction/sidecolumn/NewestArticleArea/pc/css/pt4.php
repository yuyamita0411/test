<?php
function SBNewestArticleAreaPcCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin981 .= '
    .sidecolumn .posttitle{
        font-size:18px;
    }
    ';
    $CssMin768 .= '
    .sidecolumn .NewestArticlelinkarea .linkarea,
    .sidecolumn .NewestArticlelinkarea .datefont{
        float:left;
    }
    .sidecolumn .NewestArticlelinkarea > div > .ThumbArea{
        width:100%;
    }
    .sidecolumn .NewestArticlelinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
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
    .sidecolumn .NewestArticlelinkarea > div{
        position:relative;
    }
    .sidecolumn .NewestArticlelinkarea .catlink_and_date{
        float:left;
        margin-bottom:.5rem;
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
    $CssMin401to980 .= '
    .sidecolumn .posttitle{
        font-size:16px;
    }
    ';
    $CssMax768 .= '
    .sidecolumn .NewestArticlelinkarea .PcontExPc{
        display:none;
    }
    .sidecolumn .NewestArticlelinkarea .PcontExSP{
        display:inline-block;
    }
    ';
    $CssMax400 .= '
    .sidecolumn .posttitle{
        font-size:14px;
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