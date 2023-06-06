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
    #hbuttonwrapper > .menustr_bottom,
    .thirdline{
        display:none;
    }
    #hbuttonwrapper > span{
        background:#fff;
        width: 20px;
        height: 1.5px;
        position: absolute;
    }
    .menustr_middle{
        left:0;
        bottom:9px;
        font-size:10px;
        color:#fff;
    }
    .hbuttonclose .menustr_middle::after{
        content:"OPEN";
        opacity: 1;
    }
    .hbuttonopen .menustr_middle::after{
        content:"OPEN";
        opacity: 0;
    }
    .hbuttonclose > .firstline{
        left: 7px;
        top: calc(29.5px / 6);
    }
    /*.hbuttonclose > span:nth-child(2){
        left: 7px;
        top: calc((29.5px / 6) * 3 + 1.5px);
    }*/
    .hbuttonclose > .secondline{
        left: 7px;
        top: calc((29.5px / 6) * 4 + 8px);
    }
    .hbuttonopen > .firstline{
        top: 17px;
        left: 8px;
    }
    /*.hbuttonopen > span:nth-child(2){
        opacity: 0;
    }*/
    .hbuttonopen > .secondline{
        top: 17px;
        left: 8px;
    }
    .hbuttonclose > span,
    .hbuttonopen > span,
    .hbuttonclose .menustr_middle::after,
    .hbuttonopen .menustr_middle::after{
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