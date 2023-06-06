<?php
function PopularArticleAreaPcCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .linkarea{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea,
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div .ThumbArea{
        float:left;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div .TextArea{
        float:right;
        position:relative;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div .TextArea{
        padding-left:.5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .catlink_and_date{
        position:absolute;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .catlink_and_date{
        bottom:0;
        left: .5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div .ThumbArea{
        width: 16.666667%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div .TextArea{
        width: 83.333333%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .PcontExPc{
        display:inline-block;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .PcontExSP{
        display:none;
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