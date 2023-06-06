<?php
function ReturnHumburgerButtonAnimationcss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    .hbclose{
        opacity:0;
        z-index: -2;
    }
    .hbopen{
        opacity:0;
        z-index: -2;
    }
    ';
    $CssMax768 .= '
    #hbmenuwraapper{
        height:100vh;
    }
    .hbclose{
        opacity:0;
        top:-100%;
        right:0;
    }
    .hbopen{
        opacity:1;
        top:0rem;
        right:0;
    }
    .hbclose,
    .hbopen{
        transition:all 0.5s;
    }
    ';

    return (object)[
        'CssNolimit' => $CssNolimit,
        'CssMin1200' => $CssMin1200,
        'CssMin981' => $CssMin981,
        'CssMin768' => $CssMin768,
        'CssMin401to980' => $CssMin401to980,
        'CssMax768' => $CssMax768,
        'CssMax400' => $CssMax400
    ];
}
?>