<?php
    class MakeHeaderStyle{
        public static function Value(){
            $CustomizeHeader = CustomizeHeader::Values();
            $CustomizeBreadCrumb = CustomizeBreadCrumb::Values();
            $CustomizeSideColumn = CustomizeSideColumn::Values();
            $CustomizeHumburger = CustomizeHumburger::Values();
            $CssNolimit = '';
            $CssMin1200 = '';
            $CssMin981 = '';
            $CssMax981 = '';
            $CssMin768 = '';
            $CssMin401to980 = '';
            $CssMax768 = '';
            $CssMax400 = '';
        
            if($CustomizeHeader->HeaderTemplate != 'none'){
                if($CustomizeHeader->HeaderPositionSetting != 'none'){
                    $CssNolimit .= '
                    .gnavwrapper{
                        position:fixed;
                    }
                    ';
                }
                if($CustomizeSideColumn->DisplaySidebar == 'true'){
                    $CssMin768 .= '
                    #gnavinner{
                        width: 100%;
                        padding-left:1rem;
                        padding-right:1rem;
                    }
                    ';
                    $CssMax768 .= '
                    #gnavinner{
                        width: 91.666667%;
                        margin-left:calc(8.333333% / 2);
                        margin-right:calc(8.333333% / 2);
                    }
                    ';
                }else{
                    $CssMin768 .= '
                    #gnavinner{
                        margin-left:calc(33.333333% / 2);
                        margin-right:calc(33.333333% / 2);
                        width: 66.666667%;
                    }
                    ';
                    $CssMax768 .= '
                    #gnavinner{
                        margin-left:calc(8.333333% / 2);
                        margin-right:calc(8.333333% / 2);
                        width: 91.666667%;
                    }
                    ';
                }
        
                $CssNolimit .= '
                #gnavinner,
                #gnavbutton{
                    '.$CustomizeHeader->SetShadowUnderHeader.';
                }
                #LogoStr{
                    font-size:'.$CustomizeHeader->LogoFontSize.';
                }
                #HeaderNotificationArea .notificationwrapper a p{
                    font-size:'.$CustomizeHeader->HeaderNotificationFontSize.';
                }
                #gnavinner > div > ul > li > a{
                    font-size:'.$CustomizeHeader->LinkFontSize.';
                }
                #hbmenuwraapper > ul > li > a{
                    font-size:'.$CustomizeHumburger->HumburgerFontSize.';
                }
                #breadcrumb > li,
                #breadcrumb > li > a{
                    height:calc('.$CustomizeBreadCrumb->BreadCrumbFontSize.' * 1.25);
                    font-size:'.$CustomizeBreadCrumb->BreadCrumbFontSize.';
                }
                #gnavlinkarea{
                    background-image:url("'.$CustomizeHeader->SetHdBgImg.'");
                    '.$CustomizeHeader->SetHdBgImgStatus.'
                }
                #gnavlogoarea{
                    background-image:url("'.$CustomizeHeader->SetHdLoBgImg.'");
                    '.$CustomizeHeader->SetHdLoBgImgStatus.'
                }
                .menufont{
                    color:'.$CustomizeHeader->ReturnHeaderFCColor.'; 
                }
                .logomenufont{
                    color:'.$CustomizeHeader->ReturnHeaderFLoCColor.';
                }
                .menufont:hover{
                    color:'.$CustomizeHeader->ReturnHeaderHVFCColor.'; 
                }
                .menufont,
                .menufont:hover{
                    transition:all 0.5s;
                }
                ';
        
                if($CustomizeHeader->ReturnHeaderWrpBGStatus == "true"){
                    $CssNolimit .= '
                    .gnavwrapper{
                        background-color:'.$CustomizeHeader->ReturnHeaderWrpBGColor.';
                    }';
                }
                if($CustomizeHeader->ReturnHeaderLogoBGStatus == "true"){
                    $CssNolimit .= '
                    #gnavinner #gnavlogoarea{
                        background-color:'.$CustomizeHeader->ReturnHeaderLogoBGColor.'; 
                    }';
                }
                if($CustomizeHeader->ReturnHeaderBGStatus == "true"){
                    $CssNolimit .= '
                    .logo,
                    #gnavinner #gnavlinkarea{
                        background-color:'.$CustomizeHeader->ReturnHeaderBGColor.';
                    }';
                }
        
                $CssMin1200 .= '
                #gnavinnerwrapper{
                    max-width: 1200px;
                    margin-left: calc((100% - 1200px) / 2);
                    margin-right: calc((100% - 1200px) / 2);
                }
                ';
        
                $CssMin768 .= '
                .gnavwrapper{
                    z-index: 2;
                }
                ';
        
                $CssMax768 .= '
                .gnavwrapper{
                    position: fixed;
                }
                .gnavwrapper{
                    overflow: hidden;
                }
                ';
            }
            if($CustomizeHeader->SetHeaderNotifiCationDesign != 'none'){
                $CssNolimit .= '
                #HeaderNotificationArea .notificationwrapper .notificationlink{
                    display:inline-block;
                    padding-top:1rem;
                    padding-bottom:1rem;
                    width:100%;
                }
                #HeaderNotificationArea .notificationwrapper .notificationlink > p{
                    padding-left:1rem;
                    padding-right:1rem;
                }
                ';
                if($CustomizeSideColumn->DisplaySidebar != 'false'){
                    $CssMin1200 .= '
                    #HeaderNotificationArea .notificationwrapper{
                        max-width: 1200px;
                        margin-left: calc((100% - 1200px) / 2);
                        margin-right: calc((100% - 1200px) / 2);
                        padding-left: 1rem;
                        padding-right: 1rem;
                    }
                    ';
                    $CssMin768 .= '
                    #HeaderNotificationArea .notificationwrapper{
                        width: 100%;
                        padding-left: 1rem;
                        padding-right: 1rem;
                    }
                    ';
                }else{
                    $CssMin768 .= '
                    #HeaderNotificationArea .notificationwrapper{
                        margin-left: calc(33.333333% / 2);
                        margin-right: calc(33.333333% / 2);
                        width: 66.666667%;
                    }
                    ';
                }
            }

            if($CustomizeHeader->SetHeaderNotifiCationDesign != 'none'){
                require_once get_template_directory() . '/Module/StyleFunction/header/Notification/css/'.$CustomizeHeader->SetHeaderNotifiCationDesign.'.php';
                $CssNolimit .= ReturnNotificationcss()->CssNolimit;
                $CssMin1200 .= ReturnNotificationcss()->CssMin1200;
                $CssMin981 .= ReturnNotificationcss()->CssMin981;
                $CssMin768 .= ReturnNotificationcss()->CssMin768;
                $CssMin401to980 .= ReturnNotificationcss()->CssMin401to980;
                $CssMax768 .= ReturnNotificationcss()->CssMax768;
                $CssMax400 .= ReturnNotificationcss()->CssMax400;
            }

            if($CustomizeBreadCrumb->BreadcrumbTemplate != 'none'){
                require_once get_template_directory() . '/Module/StyleFunction/header/breadcrumb/'.$CustomizeBreadCrumb->BreadcrumbTemplate.'.php';
                $CssNolimit .= ReturnBreadCrumbcss()->CssNolimit;
                $CssMin1200 .= ReturnBreadCrumbcss()->CssMin1200;
                $CssMin981 .= ReturnBreadCrumbcss()->CssMin981;
                $CssMin768 .= ReturnBreadCrumbcss()->CssMin768;
                $CssMin401to980 .= ReturnBreadCrumbcss()->CssMin401to980;
                $CssMax768 .= ReturnBreadCrumbcss()->CssMax768;
                $CssMax400 .= ReturnBreadCrumbcss()->CssMax400;
            }

            if($CustomizeHeader->HeaderTemplate != 'none'){
                require_once get_template_directory() . '/Module/StyleFunction/header/pc/css/'.$CustomizeHeader->HeaderTemplate.'.php';
                $CssNolimit .= ReturnHeaderPCcss()->CssNolimit;
                $CssMin1200 .= ReturnHeaderPCcss()->CssMin1200;
                $CssMin981 .= ReturnHeaderPCcss()->CssMin981;
                $CssMin768 .= ReturnHeaderPCcss()->CssMin768;
                $CssMin401to980 .= ReturnHeaderPCcss()->CssMin401to980;
                $CssMax768 .= ReturnHeaderPCcss()->CssMax768;
                $CssMax400 .= ReturnHeaderPCcss()->CssMax400;
            }

            if($CustomizeHumburger->HumburgerButtonTemplate != 'none'){
                require_once get_template_directory() . '/Module/StyleFunction/header/sp/button/'.$CustomizeHumburger->HumburgerButtonTemplate.'.php';
                require_once get_template_directory() . '/Module/StyleFunction/header/sp/menu/animation/'.$CustomizeHumburger->HumburgerMenueAnimation.'.php';
                require_once get_template_directory() . '/Module/StyleFunction/header/sp/menu/css/'.$CustomizeHumburger->HumburgerTemplate.'.php';

                $CssNolimit .= ReturnHumburgerButtonPCcss()->CssNolimit;
                $CssMin1200 .= ReturnHumburgerButtonPCcss()->CssMin1200;
                $CssMin981 .= ReturnHumburgerButtonPCcss()->CssMin981;
                $CssMin768 .= ReturnHumburgerButtonPCcss()->CssMin768;
                $CssMin401to980 .= ReturnHumburgerButtonPCcss()->CssMin401to980;
                $CssMax768 .= ReturnHumburgerButtonPCcss()->CssMax768;
                $CssMax400 .= ReturnHumburgerButtonPCcss()->CssMax400;

                $CssNolimit .= ReturnHumburgerButtonAnimationcss()->CssNolimit;
                $CssMin1200 .= ReturnHumburgerButtonAnimationcss()->CssMin1200;
                $CssMin981 .= ReturnHumburgerButtonAnimationcss()->CssMin981;
                $CssMin768 .= ReturnHumburgerButtonAnimationcss()->CssMin768;
                $CssMin401to980 .= ReturnHumburgerButtonAnimationcss()->CssMin401to980;
                $CssMax768 .= ReturnHumburgerButtonAnimationcss()->CssMax768;
                $CssMax400 .= ReturnHumburgerButtonAnimationcss()->CssMax400;

                $CssNolimit .= ReturnHumburgerButtonMenucss()->CssNolimit;
                $CssMin1200 .= ReturnHumburgerButtonMenucss()->CssMin1200;
                $CssMin981 .= ReturnHumburgerButtonMenucss()->CssMin981;
                $CssMin768 .= ReturnHumburgerButtonMenucss()->CssMin768;
                $CssMin401to980 .= ReturnHumburgerButtonMenucss()->CssMin401to980;
                $CssMax768 .= ReturnHumburgerButtonMenucss()->CssMax768;
                $CssMax400 .= ReturnHumburgerButtonMenucss()->CssMax400;
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
    new MakeHeaderStyle();
?>