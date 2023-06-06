<?php
if(CustomizeMainColumn::Values()->CatLinkDisplay == 'false'){
    return;
}
?>
<section class="d-inline-block w-100 float-left">
    <div class="EachCatLinkTitleArea float-left w-100 d-inline-block">
        <div id="" class="EachCatLinkTitleFontTop w-100 mb-0">
            <p id="" class="mb-0 d-inline-block">
                <?php echo CustomizeMainColumn::Values()->CatLinkTitle;?>
            </p>
        </div>
        <div id="EachCatLinkTitleFontBottom" class="EachCatLinkTitleFontBottom w-100 font-weight-bold mb-0">
            <h5 id="EachCatLinkTitleFontBottomInner" class="EachCatLinkTitleFontBottomInner mb-0 d-inline-block"><?php echo CustomizeMainColumn::Values()->CatLinkBottomTitle;?></h5>
        </div>
    </div>
    <div id="EachCatLinkArea" class="EachCatLinkArea w-100 d-inline-block p-2 float-left">
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
</section>