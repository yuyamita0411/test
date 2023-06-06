<?php
function PopularArticleAreapCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .linkarea{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div > div{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .posttitle{
        margin-top:.5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .PcontExPc{
        display:none;
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