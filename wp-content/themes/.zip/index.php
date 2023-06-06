<!DOCTYPE html>
<html class="no-js">
	<head>
        <?php
        $CustomizeAnalyticsTag = CustomizeAnalyticsTag::Values();
        $CustomizeHeader = CustomizeHeader::Values();
        $CustomizeHumburger = CustomizeHumburger::Values();
        $CustomizeSideColumn = CustomizeSideColumn::Values();
        $CustomizeBreadCrumb = CustomizeBreadCrumb::Values();
        $CustomizeMainColumn = CustomizeMainColumn::Values();
        $CustomizeSidebar = CustomizeSidebar::Values();
        $CustomizeOtherBasic = CustomizeOtherBasic::Values();
        $CustomizeFooter = CustomizeFooter::Values();
        ?>
		<?php wp_head(); ?>
        <?php echo $CustomizeAnalyticsTag->AnalyticsHeadTag; ?>
        <link rel="icon" href="<?php echo CustomizeOtherBasic::Values()->GetFaviconImg;?>" sizes="32x32">
	</head>
	<body <?php body_class();?>>
        <?php if($CustomizeHeader->HeaderTemplate != 'none'): ?>
        <header class="gnavwrapper w-100 d-none d-md-inline-block z1">
            <div id="gnavinnerwrapper" class="w-100 d-inline-block float-md-left">
                <div id="gnavinner" class="gnavinner float-md-right">
                    <div id="gnavlogoarea" class="d-inline-block">
                        <div class="">
                            <?php GenerateHtml::GenerateLogo('pt1'); ?>
                        </div>
                    </div>
                    <div id="gnavlinkarea" class="d-inline-block">
                        <?php
                            if ( has_nav_menu( 'header' )){
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'header',
                                        'menu'  => 'mainMenu',
                                        'container' => '',
                                        'container_id' => '',
                                        'container_class' => 'w-100 col-md-2 float-right float-md-left text-right text-md-center mb-md-0',
                                        'menu_id' => '',
                                        'menu_class' => 'gmenueinner mb-0 col-8',
                                        'add_li_class' => 'mb-md-0',
                                        'add_a_class' => 'menufont font-weight-bold position-relative d-inline-block mr-1'
                                    )
                                );
                            }else{
                                ?>
                                <ul id="menu" class="gmenueinner mb-0 d-inline-block w-100">
                                    <li id="menu-item-8" class="mb-md-0">
                                        <a href="<?php echo get_bloginfo('url'); ?>" class="menufont font-weight-bold position-relative d-inline-block mr-1">Home</a>
                                    </li>
                                </ul>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </header>
        <?php endif; ?>
        <?php if($CustomizeHeader->SetHeaderNotifiCationDesign != 'none'): ?>
        <section id="HeaderNotificationArea" class="w-100 d-inline-block">
            <div class="notificationwrapper">
                <a href="<?php echo $CustomizeHeader->SetHeaderNotifiCationTitleURL; ?>" class="notificationlink">
                    <p class="mb-0"><?php echo $CustomizeHeader->SetHeaderNotifiCationTitle; ?></p>
                </a>
            </div>
        </section>
        <?php endif; ?>
        <?php if($CustomizeHumburger->HumburgerTemplate != 'none'): ?>
        <nav id="gnavbutton" class="gnavbutton d-inline-block d-md-none">
            <div class="logo col-4 d-block d-md-none float-left position-absolute text-white text-center h-100">
                <?php GenerateHtml::GenerateLogo('pt1');?>
            </div>
            <?php if($CustomizeHumburger->HumburgerButtonTemplate != 'none'): ?>
                <div id="hbuttoncover" class="cursor position-absolute"></div>
                <div id="hbuttonwrapper" class="cursor position-absolute hbuttonclose">
                    <span class="firstline"></span>
                    <small class="menustr_middle position-absolute w-100 text-center"></small>
                    <span class="secondline"></span>
                    <span class="thirdline"></span>
                    <small class="menustr_bottom position-absolute w-100 text-center"></small>
                </div>
            <?php endif; ?>
        </nav>
        <div id="hbmenuwraapper" class="<?php echo Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['hbmenuwraapper']; ?>">
            <?php
            if ( has_nav_menu( 'header' )){
                wp_nav_menu(
                    array(
                        'theme_location' => 'header',
                        'menu'  => 'mainMenu',
                        'container' => '',
                        'container_id' => '',
                        'container_class' => 'w-100 col-md-2 float-right float-md-left text-right text-md-center mb-md-0',
                        'menu_id' => '',
                        'menu_class' => Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['menu_class'],
                        'add_li_class' => Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['add_li_class'],
                        'add_a_class' => Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['add_a_class']
                    )
                );
            }else{
                ?>
                    <ul id="menu" class="<?php echo Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['menu_class']; ?>">
                        <li id="menu-item-8" class="<?php echo Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['add_li_class']; ?>">
                            <a href="<?php echo get_bloginfo('url');?>" class="<?php echo Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['add_a_class']; ?>">Home</a>
                        </li>
                    </ul>
                <?php
            }
            ?>
        </div>
        <div id="hbmenuwraappercover" class="<?php echo Settings::$HDMenu[$CustomizeHumburger->HumburgerTemplate]['hbmenuwraappercover']; ?>"></div>
        <?php endif; ?>

        <main id="site-content" class="w-100 d-inline-block pt-4 float-left">
            <?php if($CustomizeBreadCrumb->BreadcrumbTemplate != 'none'): ?>
            <nav class="breadwrapper pt-2 pb-4 <?php echo $CustomizeSideColumn->DisplaySidebar != 'false' ? 'col-11 col-md-12 float-md-left m-auto' : 'col-11 col-md-8 pr-0 pl-0 m-auto'; ?>">
            <?php
            echo GenerateHtml::GenerateBeadcrumb(
                array(
                'ulclass' => 'breadcrumb',
                'liclass' => 'breadstr',
                'liarrowclass' => 'breadarrowstr pl-1 pr-1',
                'liarrowelem' => '',
                'aclass' => "cursor",
                'toppagestr' => 'Home',
                'notfoundstr' => 'ページが見つかりません',
                'resultstr' => 'の検索結果'
                )
            );
            ?>
            </nav>
            <?php endif; ?>

            <div class="contentarea d-inline-block">
            <?php
                //順番の入れ替えを可能とする ↓↓↓↓↓ contentarea
                if($CustomizeMainColumn->DisplayFirstOrder != 'none'){
                    get_template_part('maincolumn/'.$CustomizeMainColumn->DisplayFirstOrder);
                }
                if($CustomizeMainColumn->DisplaySecondOrder != 'none'){
                    get_template_part('maincolumn/'.$CustomizeMainColumn->DisplaySecondOrder);
                }
                if($CustomizeMainColumn->DisplayThirdOrder != 'none'){
                    get_template_part('maincolumn/'.$CustomizeMainColumn->DisplayThirdOrder);
                }
                if($CustomizeMainColumn->DisplayForthOrder != 'none'){
                    get_template_part('maincolumn/'.$CustomizeMainColumn->DisplayForthOrder);
                }
                if($CustomizeMainColumn->DisplayFifthOrder != 'none'){
                    get_template_part('maincolumn/'.$CustomizeMainColumn->DisplayFifthOrder);
                }
                //順番の入れ替えを可能とする ↑↑↑↑↑
            ?>
            </div>
            <?php if($CustomizeSideColumn->DisplaySidebar != 'false'): ?>
            <div class="sidecolumn float-md-right d-inline-block">
            <?php
                //順番の入れ替えを可能とする ↓↓↓↓↓ contentarea
                if($CustomizeSideColumn->DisplayFirstOrder != 'none'){
                    get_template_part('sidecolumn/'.$CustomizeSideColumn->DisplayFirstOrder);
                }
                if($CustomizeSideColumn->DisplaySecondOrder != 'none'){
                    get_template_part('sidecolumn/'.$CustomizeSideColumn->DisplaySecondOrder);
                }
                if($CustomizeSideColumn->DisplayThirdOrder != 'none'){
                    get_template_part('sidecolumn/'.$CustomizeSideColumn->DisplayThirdOrder);
                }
                if($CustomizeSideColumn->DisplayForthOrder != 'none'){
                    get_template_part('sidecolumn/'.$CustomizeSideColumn->DisplayForthOrder);
                }
                //順番の入れ替えを可能とする ↑↑↑↑↑
            ?>
            </div>
            <?php endif; ?>
            <?php if($CustomizeSidebar->SidebarButtonTemplate != 'none' || $CustomizeSidebar->SidebarTemplate != 'none'): ?>
            <div id="sidebarbutton" class="position-fixed cursor sbuttonclose position-relative"></div>
            <div id="sidebar" class="menufont position-fixed sidebarclose zm2">
                <!-- カテゴリーがループ -->
                <?php
                    if ( has_nav_menu( 'side' )){
                        wp_nav_menu(
                            array(
                                'theme_location' => 'side',
                                'menu'  => 'sideMenu',
                                'container' => '',
                                'container_id' => '',
                                'container_class' => 'w-100',
                                'menu_id' => '',
                                'menu_class' => 'w-100 d-inline-block float-left position-relative mb-0 padding-inline-0 pr-1 pb-1 pl-5',
                                'add_li_class' => 'sidebarfont w-100 mb-3 d-inline-block',
                                'add_a_class' => 'sidebarfont font-weight-bold position-relative d-inline-block w-100'
                            )
                        );
                    }else{
                        //サイドバーが設置されていない時
                        ?>
                            <ul id="menu-2" class="w-100 d-inline-block float-left position-relative mb-0 padding-inline-0 pr-1 pb-1 pl-5">
                                <li id="menu-item-5" class="w-100 mb-3 d-inline-block">
                                    <a href="<?php echo get_bloginfo('url'); ?>" class="sidebarfont font-weight-bold position-relative d-inline-block w-100">Home</a>
                                </li>
                            </ul>
                        <?php
                    };
                ?>
                <!-- カテゴリーがループ -->
            </div>
            <div id="sidebarcover" class="menufont position-fixed sidebarclose zm2 h-100"></div>
            <?php endif; ?>
            <?php if($CustomizeOtherBasic->TopScrollButtonDesign != 'none'): ?>
                <div id="topscrollbutton" class="position-fixed cursor position-relative"></div>
            <?php endif; ?>
        </main>
        <?php if($CustomizeFooter->FooterTemplate != 'none'): ?>
        <?php
        $classarr = [
            'pt1' => 'w-100 col-md-6 pl-0 pr-0 float-md-right',
            'pt2' => 'w-100 pl-0 pr-0 float-md-right',
            'pt3' => 'w-100 col-md-6 pl-0 pr-0 float-md-right',
            'pt4' => 'w-100 pl-0 pr-0 float-md-right',
            'pt5' => 'w-100 col-md-6 pl-0 pr-0 float-md-right',
            'pt6' => 'w-100 pl-0 pr-0 float-md-right'
        ];
        ?>
        <footer id="footer" class="footer w-100 d-inline-block mt-4 pt-3 pb-3 float-left">
            <div class="float-right pt-3 pb-3 col-12">
                <div class="<?php echo $classarr[$CustomizeFooter->FooterTemplate]; ?>">
                <?php
                    if ( has_nav_menu( 'footer' )){
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu'  => 'Project Nav',
                                'container' => '',
                                'container_id' => '',
                                'container_class' => '',
                                'menu_id' => '',
                                'menu_class' => 'w-100 float-right pr-0 pl-0 text-left mb-0',
                                'add_li_class' => 'd-inline-block float-left mb-1',
                                'add_a_class' => 'menufont fadefrombottom position-relative fadebottomshow'
                            )
                        );
                    }else{
                        //フッターが設置されていない時
                        ?>
                            <ul id="menu-2c" class="w-100 float-right pr-0 pl-0 text-left mb-0">
                                <li id="menu-item-7" class="d-inline-block float-left mb-1">
                                    <a href="<?php echo get_bloginfo('url');?>" class="menufont fadefrombottom position-relative fadebottomshow">Home</a>
                                </li>
                            </ul>
                        <?php
                    };
                ?>
                </div>
            </div>
            <div id="copyrightarea" class="w-100 d-inline-block">
                <small class="menufont w-100 text-center d-inline-block">
                    <?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
                        <?php if($CustomizeFooter->STCprSetting == ''): ?>
                            © <?php echo date('Y');?> <?php bloginfo( 'name' ); ?>. all rights reserved
                        <?php endif; ?>
                        <?php if($CustomizeFooter->STCprSetting != ''): ?>
                            © <?php echo date('Y');?> <?php echo $CustomizeFooter->STCprSetting; ?>. all rights reserved
                        <?php endif; ?>
                    <?php endif; ?>
                </small>
            </div>
        </footer>
        <?php endif; ?>
        <?php wp_footer(); ?>
        <?php echo $CustomizeAnalyticsTag->AnalyticsFootTag; ?>
        <!-- 子テーマでcssを上書きする際はここに読み込む -->
    </body>
</html>