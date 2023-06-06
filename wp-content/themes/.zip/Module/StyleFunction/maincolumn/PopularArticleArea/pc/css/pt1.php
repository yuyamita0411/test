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
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div > div{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .posttitle{
        margin-top:.5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        width: calc((100% - 2rem) / 3);
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea{
        margin-right:.5rem;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea:nth-child(3n+1){
        margin-left:.5rem;
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