<?php
function SBPopularArticleAreaPcCss(){
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
    .sidecolumn .PopularArticleArealinkarea .linkarea,
    .sidecolumn .PopularArticleArealinkarea .datefont{
        float:left;
    }
    .sidecolumn .PopularArticleArealinkarea > div > .ThumbArea{
        width:100%;
    }
    .sidecolumn .PopularArticleArealinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
    }
    .sidecolumn .PopularArticleArealinkarea .posttitle{
        margin-top:.5rem;
    }
    .sidecolumn .PopularArticleArealinkarea .PcontExPc{
        display:inline-block;
    }
    .sidecolumn .PopularArticleArealinkarea .PcontExSP{
        display:none;
    }
    .sidecolumn .PopularArticleArealinkarea > div{
        position:relative;
    }
    .sidecolumn .PopularArticleArealinkarea .catlink_and_date{
        float:left;
        margin-bottom:.5rem;
    }
    .sidecolumn .PopularArticleArealinkarea .linkarea > a{
        margin-bottom:.2rem;
        margin-right:.2rem;
    }
    .sidecolumn .PopularArticleArealinkarea .linkarea > a,
    .sidecolumn .PopularArticleArealinkarea .datefont{
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
    .sidecolumn .PopularArticleArealinkarea .PcontExPc{
        display:none;
    }
    .sidecolumn .PopularArticleArealinkarea .PcontExSP{
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