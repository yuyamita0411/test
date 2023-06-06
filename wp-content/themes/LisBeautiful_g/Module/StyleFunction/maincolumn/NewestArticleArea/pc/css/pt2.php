<?php
function NewestArticleAreaPcCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    .contentarea .NewestArticleArea .NewestArticlelinkarea .linkarea{
        width:100%;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div > div{
        width:100%;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .posttitle{
        margin-top:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        width: calc((100% - 1.5rem) / 2);
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        margin-right:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea:nth-child(2n+1){
        margin-left:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExPc{
        display:none;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExSP{
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