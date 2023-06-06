<?php
function SBPopularArticleAreapCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    .sidecolumn .PopularArticleArealinkarea .PcontExPc{
        display:none;
    }
    .sidecolumn .PopularArticleArealinkarea .PcontExSP{
        display:inline-block;
    }
    ';
    $CssMax768 .= '
    .sidecolumn .PopularArticleArealinkarea > div > div{
        width:100%;
    }
    .sidecolumn .PopularArticleArealinkarea .PcontExPc{
        display:inline-block;
    }
    .sidecolumn .PopularArticleArealinkarea .PcontExSP{
        display:none;
    }
    .sidecolumn .PopularArticleArealinkarea .ThumbArea{
        float:left;
        width:calc(100% * 1/3);
    }
    .sidecolumn .PopularArticleArealinkarea .TextArea{
        float:right;
        position:relative;
        width:calc(100% * 2/3);
    }
    .sidecolumn .PopularArticleArealinkarea .TextArea .catlink_and_date{
        position:absolute;
        bottom:0;
        right:0;
    }
    .sidecolumn .PopularArticleArealinkarea .linkarea .catlink,
    .sidecolumn .PopularArticleArealinkarea .datefont{
        float:right;
    }
    .sidecolumn .PopularArticleArealinkarea .TextArea .posttitle{
        margin-left:.5rem;
    }
    .sidecolumn .PopularArticleArealinkarea .datefont{
        line-height:1.2em;
    }
    .sidecolumn .PopularArticleArealinkarea .linkarea > a{
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