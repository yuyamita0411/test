<?php
function ArchiveDesignCssSpCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
    .contentarea .ArchiveArticleArea .Archivelinkarea .linkarea{
        width:100%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea > div > div{
        width:100%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .posttitle{
        margin-top:.5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        width:100%;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        padding:0 .5rem 0 .5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea{
        margin-bottom:.5rem;
    }
    .contentarea .ArchiveArticleArea .Archivelinkarea .PcontExPc{
        display:none;
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