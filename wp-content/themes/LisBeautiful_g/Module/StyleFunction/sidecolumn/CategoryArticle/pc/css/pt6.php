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
    .sidecolumn .CategoryArticlelinkarea > div > div{
        width:100%;
    }
    .sidecolumn .CategoryArticlelinkarea .PcontExPc{
        display:inline-block;
    }
    .sidecolumn .CategoryArticlelinkarea .PcontExSP{
        display:none;
    }
    .sidecolumn .CategoryArticlelinkarea .ThumbArea{
        float:left;
        width:calc(100% * 1/3);
    }
    .sidecolumn .CategoryArticlelinkarea .TextArea{
        float:right;
        position:relative;
        width:calc(100% * 2/3);
    }
    .sidecolumn .CategoryArticlelinkarea .TextArea .catlink_and_date{
        position:absolute;
        bottom:0;
        right:0;
    }
    .sidecolumn .CategoryArticlelinkarea .linkarea .catlink,
    .sidecolumn .CategoryArticlelinkarea .datefont{
        float:right;
    }
    .sidecolumn .CategoryArticlelinkarea .TextArea .posttitle{
        margin-left:.5rem;
    }
    .sidecolumn .CategoryArticlelinkarea .datefont{
        line-height:1.2em;
    }
    .sidecolumn .CategoryArticlelinkarea .linkarea > a{
        margin-bottom:.2rem;
        margin-right:.2rem;
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