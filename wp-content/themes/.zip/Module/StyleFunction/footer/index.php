<?php
    class MakeFooterStyle{
        public static function Value(){
            $CustomizeFooter = CustomizeFooter::Values();
            $CustomizeOtherBasic = CustomizeOtherBasic::Values();
            $CssNolimit = '';
            $CssMin1200 = '';
            $CssMin981 = '';
            $CssMax981 = '';
            $CssMin768 = '';
            $CssMin401to980 = '';
            $CssMax768 = '';
            $CssMax400 = '';
        
            if($CustomizeFooter->FooterTemplate != 'none'){
                $CssNolimit .= '
                .footer{
                    background-color:'.$CustomizeFooter->FooterColor.';
                }
                .footer .menufont{
                    color:'.$CustomizeFooter->FooterFontColor.';
                }
                .footer .menufont:hover{
                    color:'.$CustomizeFooter->FooterFontHoverColor.';
                }
                #footer ul li a{
                    font-size:'.$CustomizeFooter->FooterlinkFontSize.';
                }
                #footer #copyrightarea{
                    font-size:'.$CustomizeFooter->FooterCopyrightFontSize.';
                }
                ';
        
                if($CustomizeFooter->FooterTemplate == 'pt3' || $CustomizeFooter->FooterTemplate == 'pt4'){
                    $CssNolimit .= "
                    #footer ul > li > a{
                        padding-left:0.8rem;
                    }
                    #footer ul > li > a::before{
                        content: '';
                        position: absolute;
                        left: 0;
                        top: 5px;
                        width: 0;
                        height: 0;
                        border-left: 5px solid ".$CustomizeFooter->FooterFontColor.";
                        border-top: 3px solid transparent;
                        border-right: 0px solid transparent;
                        border-bottom: 3px solid transparent;
                    }
                    ";
                }
                if($CustomizeFooter->FooterTemplate == 'pt5' || $CustomizeFooter->FooterTemplate == 'pt6'){
                    $CssNolimit .= "
                    #footer ul > li > a{
                        padding-left:0.8rem;
                    }
                    #footer ul > li > a::before{
                        content: '';
                        position: absolute;
                        left: 0;
                        top: 8px;
                        width: 30px;
                        height: 1.5px;
                        border-left: 5px solid ".$CustomizeFooter->FooterFontColor.";
                    }
                    ";
                }
            }

            if($CustomizeOtherBasic->TopScrollButtonDesign != 'none'){
                require get_template_directory() . '/Module/StyleFunction/footer/parts/topscrollbutton/css/'.$CustomizeOtherBasic->TopScrollButtonDesign.'.php';
                $CssNolimit .= $SetScrolltopCSS;
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

    new MakeFooterStyle();
?>