<?php
function SidebarButtonCss(){
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
    #sidebarbutton::before{
        content: "";
        background:url("'.get_theme_file_uri("img/sidearrow2.png").'");
        background-size: 2rem;
        width: 2rem;
        height: 2rem;
        display: inline-block;
    }
    .sbuttonopen::before{
        transform:rotate(180deg); 
    }
    .sbuttonclose::before{
        transform:rotate(0deg); 
    }
    .sbuttonopen,
    .sbuttonclose,
    .sbuttonopen::before,
    .sbuttonopen::after,
    .sbuttonclose::before{
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