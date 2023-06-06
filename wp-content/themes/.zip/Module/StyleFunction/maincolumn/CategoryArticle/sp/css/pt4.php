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
        width:auto;
    }
    .contentarea .CategoryArticleArea .Catlinkarea,
    .contentarea .CategoryArticleArea .Catlinkarea > div{
        width:100%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div .ThumbArea{
        float:left;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div .TextArea{
        float:right;
        position:relative;
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div .TextArea{
        padding-left:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .catlink_and_date{
        position:absolute;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .catlink_and_date{
        bottom:0;
        left: .5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div .ThumbArea{
        width: 33.333333%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div .TextArea{
        width: 66.666667%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .PcontExPc{
        display:none;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .PcontExSP{
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