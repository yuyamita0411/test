<?php
function ArchiveDesignCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    .contentarea .ArchiveArticleArea .Archivelinkarea .linkarea{
        width:100%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea,
    .contentarea .ArchiveArticleArea .Archivelinkarea > div{
        width:100%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div .ThumbArea{
        float:left;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div .TextArea{
        float:right;
        position:relative;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div .TextArea{
        padding-left:.5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .catlink_and_date{
        position:absolute;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .catlink_and_date{
        bottom:0;
        left: .5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div .ThumbArea{
        width: 16.666667%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div .TextArea{
        width: 83.333333%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .PcontExPc{
        display:inline-block;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .PcontExSP{
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