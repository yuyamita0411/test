<?php
function ReturnHumburgerButtonAnimationcss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
    #hbmenuwraapper{
        right:0;
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