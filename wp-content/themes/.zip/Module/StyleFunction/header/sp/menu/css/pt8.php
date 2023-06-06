<?php
function ReturnHumburgerButtonMenucss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMax768 .= '
    #hbuttonwrapper{
        background-color:'.CustomizeHumburger::Values()->SetHbuttonWrapperBg.'; 
    }
    .hbopen + #hbmenuwraappercover{
        background-color:'.CustomizeHumburger::Values()->SetHbMenuWrapperBg.';
        opacity:0.5;
    }
    #hbmenuwraapper{
        background-color:'.CustomizeHumburger::Values()->SetHbMenuWrapperBg.';
    }
    #hbmenuwraapper .menufont{
        color:'.CustomizeHumburger::Values()->SetHbMenuWrapperFontColor.';
    } 
    #hbmenuwraapper .menufont:hover{
        color:'.CustomizeHumburger::Values()->SetHbMenuWrapperFontColorHover.';
    }
    #hbmenuwraappercover{
        right:0;
    }
    #gnavbutton{
        z-index: 4;
    }
    .gnavbutton{
        position: fixed;
    }
    .gnavbutton{
        right: 0;
    }
    .gnavbutton{
        width: 100%;
        height: 34px;
    }
    .gnavbutton > span{
        position: absolute;
        right: 6px;
        height: 2px;
        width: 30px;
        -webkit-animation-name: navOpenBar;
        animation-name: navOpenBar;
        -webkit-animation-duration: 1.5s;
        animation-duration: 1.5s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }
    /*background*/
    .gnavbutton{
        background: #fff;
    }
    /*background*/
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