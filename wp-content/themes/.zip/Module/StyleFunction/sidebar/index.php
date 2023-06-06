<?php
    class MakeSidebarStyle{
        public static function Value(){
            $CustomizeSidebar = CustomizeSidebar::Values();
            $CssNolimit = '';
            $CssMin1200 = '';
            $CssMin981 = '';
            $CssMax981 = '';
            $CssMin768 = '';
            $CssMin401to980 = '';
            $CssMax768 = '';
            $CssMax400 = '';
        
            if($CustomizeSidebar->SidebarButtonTemplate != 'none' || $CustomizeSidebar->SidebarTemplate != 'none'){
                $CssNolimit .= '
                #sidebar > ul > li > a{
                    font-size:'.$CustomizeSidebar->SidebarLinkFontsize.';
                }
                ';
            }

            if($CustomizeSidebar->SidebarButtonTemplate != 'none'){
                require_once get_template_directory().'/Module/StyleFunction/sidebar/css/button/'.$CustomizeSidebar->SidebarButtonTemplate.'.php';
                $CssNolimit .= SidebarButtonCss()->CssNolimit;
                $CssMin1200 .= SidebarButtonCss()->CssMin1200;
                $CssMin981 .= SidebarButtonCss()->CssMin981;
                $CssMax981 .= SidebarButtonCss()->CssMax981;
                $CssMin768 .= SidebarButtonCss()->CssMin768;
                $CssMin401to980 .= SidebarButtonCss()->CssMin401to980;
                $CssMax768 .= SidebarButtonCss()->CssMax768;
                $CssMax400 .= SidebarButtonCss()->CssMax400;
            }
            if($CustomizeSidebar->SidebarTemplate != 'none'){
                require_once get_template_directory().'/Module/StyleFunction/sidebar/css/menu/'.$CustomizeSidebar->SidebarTemplate.'.php';
                $CssNolimit .= SidebarMenuCss()->CssNolimit;
                $CssMin1200 .= SidebarMenuCss()->CssMin1200;
                $CssMin981 .= SidebarMenuCss()->CssMin981;
                $CssMax981 .= SidebarMenuCss()->CssMax981;
                $CssMin768 .= SidebarMenuCss()->CssMin768;
                $CssMin401to980 .= SidebarMenuCss()->CssMin401to980;
                $CssMax768 .= SidebarMenuCss()->CssMax768;
                $CssMax400 .= SidebarMenuCss()->CssMax400;
            }

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
    }
    new MakeSidebarStyle();
?>