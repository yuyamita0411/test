<nav class="CategoryLinkNav d-inline-block w-100 float-left">
    <div id="" class="w-100 d-inline-block float-left">
        <div class="CategoryLinkTitleWrapper w-100 d-inline-block float-left">
            <div class="CategoryLinkTitleArea float-left w-100 d-inline-block">
                <div id="" class="CategoryLinkAreaFontTop w-100 mb-0">
                    <p id="" class="CategoryLinkAreaFontTopInner mb-0 d-inline-block">
                        <?php echo CustomizeSideColumn::Values()->CatLinkSidebarTitle;?>
                    </p>
                </div>
                <div id="" class="CategoryLinkAreaFontBottom w-100 font-weight-bold mb-0">
                    <h5 id="" class="CategoryLinkAreaFontBottomInner mb-0 d-inline-block"><?php echo CustomizeSideColumn::Values()->CatLinkSidebarBottomTitle;?></h5>
                </div>
            </div>
        </div>
        <div class="CategoryLinklinkarea float-left w-100">
            <div id="ECatLinkArea" class="w-100 d-inline-block bg-white overflow-hidden">
                <?php foreach(get_terms() as $v): ?>
                    <?php if($v->taxonomy != 'wp_theme'): ?>
                        <a href="<?php echo get_term_link($v->slug, $v->taxonomy);?>" class="catlink mr-2 pr-1 pl-1 d-inline-block position-relative <?php echo $v->slug.'-bg'; ?> <?php echo $v->slug.'-fontcolor'; ?>">
                            <?php echo $v->name; ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>