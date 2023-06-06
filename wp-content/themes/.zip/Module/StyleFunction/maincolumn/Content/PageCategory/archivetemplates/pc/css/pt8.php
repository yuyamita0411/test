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
    .contentarea .ArchiveArticleArea .Archivelinkarea > div{
        position:relative;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div > .ThumbArea{
        width:100%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div .TextArea{
        bottom: .5rem;
        left: .5rem;
        padding:0 .5rem 0 .5rem;
        position: absolute;
        width:calc(100% - 1rem);
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        width: calc((100% - 1.5rem) / 2);
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        margin-right:.5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea:nth-child(2n+1){
        margin-left:.5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .PcontExPc{
        display:none;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .PcontExSP{
        display:none;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .catlink_and_date{
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