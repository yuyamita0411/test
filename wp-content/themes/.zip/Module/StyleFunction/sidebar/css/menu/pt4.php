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
        width: 100%;
    }
    #sidebarcover{
        width: 100%;
    }
    #sidebarcover{
        top:0;
    }
    #sidebarcover{ 
        background-color:'.$CustomizeSidebar->SidebarColor.'; 
    }
    .sidebaropen + #sidebarcover{
        opacity:0.5;
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