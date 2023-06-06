<?php
function ReturnHumburgerButtonPCcss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
    #hbuttonwrapper > .menustr_middle,
    #hbuttonwrapper > .menustr_bottom{
        display:none;
    }
    #hbuttonwrapper > span{
        background:#fff;
        width: 20px;
        height: 1.5px;
        position: absolute;
    }
    .hbuttonclose > .firstline{
        left: 7px;
        top: calc(29.5px / 6 + 5px);
    }
    .hbuttonclose > .secondline{
        left: 7px;
        top: calc((29.5px / 6) * 3 + 1.5px);
    }
    .hbuttonclose > .thirdline{
        left: 7px;
        top: calc((29.5px / 6) * 4 + 3px);
    }
    .hbuttonopen > .firstline{
        transform: rotate(225deg);
        top: 17px;
        left: 8px;
    }
    .hbuttonopen > .secondline{
        opacity: 0;
    }
    .hbuttonopen > .thirdline{
        transform: rotate(135deg);
        top: 17px;
        left: 8px;
    }
    .hbuttonclose > span,
    .hbuttonopen > span{
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