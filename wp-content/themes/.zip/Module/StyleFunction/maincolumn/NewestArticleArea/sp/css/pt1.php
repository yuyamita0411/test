<?php
function NewestArticleAreaSpCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
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
        width:100%;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        margin-bottom:.5rem;
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