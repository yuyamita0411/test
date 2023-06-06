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
    .contentarea .CategoryArticleArea .Catlinkarea{
        flex: 0 0 100%;
        -ms-flex: 0 0 100%;
        max-width: 100%;
        position:relative;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div,
    .contentarea .CategoryArticleArea .Catlinkarea > div > .ThumbArea{
        width:100%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        width:100%;
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        margin-right:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea{
        margin-left:.5rem;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .PcontExPc{
        display:none;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .PcontExSP{
        display:none;
    }
    .contentarea .CategoryArticleArea .Catlinkarea .catlink_and_date{
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