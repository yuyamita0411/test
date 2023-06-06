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
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div{
        position:relative;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div > .ThumbArea{
        width:100%;
    }
    .contentarea .PopularArticleArea .PopularArticleArealinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
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
    .contentarea .PopularArticleArea .PopularArticleArealinkarea .catlink_and_date{
        padding-right: 1rem;
        overflow: hidden;
        width:100%;
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