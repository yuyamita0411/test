<?php
function SidebarButtonCss(){
    $CustomizeSidebar = CustomizeSidebar::Values();
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssNolimit .= '
    #sidebarbutton{
        border-radius:50%;
    }
    .sbuttonopen{
        transform:rotate(180deg); 
    }
    .sbuttonclose{
        transform:rotate(0deg); 
    }
    .sbuttonopen,
    .sbuttonclose{
        transition:all 0.5s;
    }
    #sidebarbutton{
        top:calc((100vh - 2rem) / 2);
        left:0.2rem;
    }
    #sidebarbutton{
        position: relative;
        width: 2rem;
        height: 2rem;
    }
    #sidebarbutton::before,
    #sidebarbutton::after{
        content: "";
        position: absolute;
        left:calc(1.1rem / 2);
        bottom: 0;
        margin: auto;
        width: 0.7rem;
        height: 2.5px;
        -webkit-transform-origin: right;
        transform-origin: right;
    }
    #sidebarbutton::before{
        top: 1px;
    }
    #sidebarbutton::after{
        top: -1px;
    }
    #sidebarbutton::before{
        -webkit-transform: rotate(40deg);
        transform: rotate(40deg);
    }
    #sidebarbutton::after{
        -webkit-transform: rotate(-40deg);
        transform: rotate(-40deg);
    }
    #sidebarbutton::before,
    #sidebarbutton::after{
        background:#ffff;
    }
    #sidebarbutton{
        background-color:'.$CustomizeSidebar->SidebarButtonColor.';
        border:solid 1px '.$CustomizeSidebar->SidebarButtonColor.';
    }
    #sidebarbutton:hover{
        background-color:#ffff;
    }
    #sidebarbutton:hover::before,
    #sidebarbutton:hover::after{
        background:'.$CustomizeSidebar->SidebarButtonColor.';
    }
    #sidebarbutton,
    #sidebarbutton:hover,
    #sidebarbutton:hover::before,
    #sidebarbutton:hover::after{
        transition:all 0.5s;
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