<?php
function SBCategoryArticlePcCss(){
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
    .sidecolumn .CategoryArticlelinkarea .linkarea,
    .sidecolumn .CategoryArticlelinkarea .datefont{
        float:left;
    }
    .sidecolumn .CategoryArticlelinkarea > div > .ThumbArea{
        width:100%;
    }
    .sidecolumn .CategoryArticlelinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
    }
    .sidecolumn .CategoryArticlelinkarea .posttitle{
        margin-top:.5rem;
    }
    .sidecolumn .CategoryArticlelinkarea .PcontExPc{
        display:inline-block;
    }
    .sidecolumn .CategoryArticlelinkarea .PcontExSP{
        display:none;
    }
    .sidecolumn .CategoryArticlelinkarea > div{
        position:relative;
    }
    .sidecolumn .CategoryArticlelinkarea .catlink_and_date{
        float:left;
        margin-bottom:.5rem;
    }
    .sidecolumn .CategoryArticlelinkarea .linkarea > a{
        margin-bottom:.2rem;
        margin-right:.2rem;
    }
    .sidecolumn .CategoryArticlelinkarea .linkarea > a,
    .sidecolumn .CategoryArticlelinkarea .datefont{
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
    .sidecolumn .CategoryArticlelinkarea .PcontExPc{
        display:none;
    }
    .sidecolumn .CategoryArticlelinkarea .PcontExSP{
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