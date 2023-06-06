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
        top:calc((100vh - 2rem) / 2);
        left:0.2rem;
    }
    #sidebarbutton{
        width:2rem;
        height:3rem;
    }
    #sidebarbutton{
        position: relative;
    }
    #sidebarbutton::before,
    #sidebarbutton::after{
        content: "";
        position: absolute;
        left: 0;
        top: calc((3rem - 9px) / 2);
        left:calc((2rem - 9px) / 2);
        bottom: 0;
        width: 0;
        height: 0;
        border-left: 8px solid #ffff;
        border-top: 5px solid transparent;
        border-right: 0px solid transparent;
        border-bottom: 5px solid transparent;
    }
    .sbuttonopen::before,
    .sbuttonopen::after{
        transform:rotate(180deg); 
    }
    .sbuttonclose::before,
    .sbuttonclose::after{
        transform:rotate(0deg); 
    }
    .sbuttonopen,
    .sbuttonclose,
    .sbuttonopen::before,
    .sbuttonopen::after,
    .sbuttonclose::before,
    .sbuttonclose::after{
        transition:all 0.5s;
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
        border-left: 8px solid '.$CustomizeSidebar->SidebarButtonColor.';
        border-top: 5px solid transparent;
        border-right: 0px solid transparent;
        border-bottom: 5px solid transparent;
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