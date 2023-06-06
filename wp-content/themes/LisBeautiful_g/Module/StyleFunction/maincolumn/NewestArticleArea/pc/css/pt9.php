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
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div{
        position:relative;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div > .ThumbArea{
        width:100%;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        width: calc((100% - 2.5rem) / 4);
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        margin-right:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea:nth-child(4n+1){
        margin-left:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExPc{
        display:none;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExSP{
        display:none;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .catlink_and_date{
        padding-right: 1rem;
        overflow: hidden;
        width:100%;
    }
    ';

    $CssMax768 .= '
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExPc{
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