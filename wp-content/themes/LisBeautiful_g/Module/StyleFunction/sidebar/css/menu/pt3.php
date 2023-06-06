<?php
function SidebarMenuCss(){
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
    #sidebar{
        width: 50%;
    }
    #sidebar{ 
        background-color:'.$CustomizeSidebar->SidebarColor.'; 
    }
    .sidebarfont{
        color:'.$CustomizeSidebar->SidebarFontColor.'; 
    }
    .sidebarfont:hover{
        color:'.$CustomizeSidebar->SidebarFontHoverColor.'; 
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