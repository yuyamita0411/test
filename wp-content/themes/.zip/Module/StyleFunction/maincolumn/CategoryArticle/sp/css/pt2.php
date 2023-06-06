<?php
function CategoryArticlepCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
    .contentarea .CategoryArticleArea .Catlinkarea .linkarea{
        width:100%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div > div{
        width:100%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .posttitle{
        margin-top:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        width: calc((100% - 1.5rem) / 2);
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        margin-right:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea:nth-child(2n+1){
        margin-left:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .PcontExPc{
        display:none;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .PcontExSP{
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