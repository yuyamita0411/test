<?php
function ReturnHumburgerButtonPCcss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CustomizeHumburger = CustomizeHumburger::Values();
    $CssMax768 .= '
    #hbuttonwrapper > .menustr_middle{
        display:none;
    }
    .menustr_bottom{
        left:0;
        bottom:0px;
        font-size:10px;
        color:'.$CustomizeHumburger->SetHbuttonInnerLineColor.';
    }
    .hbuttonclose .menustr_bottom::after{
        content:"OPEN";
    }
    .hbuttonopen .menustr_bottom::after{
        content:"CLOSE";
    }

    #hbuttonwrapper > span{
        background:'.$CustomizeHumburger->SetHbuttonInnerLineColor.';
        width: 20px;
        height: 1.5px;
        position: absolute;
    }
    .hbuttonclose > .firstline{
        left: 7px;
        top: calc(29.5px / 6);
    }
    .hbuttonclose > .secondline{
        left: 7px;
        top: calc((29.5px / 6) * 2 + 1.5px);
    }
    .hbuttonclose > .thirdline{
        left: 7px;
        top: calc((29.5px / 6) * 3 + 3px);
    }
    .hbuttonopen > .firstline{
        top: 11px;
        left: 8px;
    }
    .hbuttonopen > .secondline{
        opacity: 0;
        top: calc((29.5px / 6) * 2 + 1.5px);
        left:-29.5px;
    }
    .hbuttonopen > .thirdline{
        top: 11px;
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