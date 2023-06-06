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
        width:auto;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea,
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div{
        width:100%;
    }

    .contentarea .NewestArticleArea .NewestArticlelinkarea > div .ThumbArea{
        float:left;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div .TextArea{
        float:right;
        position:relative;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div .TextArea{
        padding-left:.5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .catlink_and_date{
        position:absolute;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .catlink_and_date{
        bottom:0;
        left: .5rem;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div .ThumbArea{
        width: 25%;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea > div .TextArea{
        width: 75%;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExPc{
        display:none;
    }
    .contentarea .NewestArticleArea .NewestArticlelinkarea .PcontExSP{
        display:inline-block;
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