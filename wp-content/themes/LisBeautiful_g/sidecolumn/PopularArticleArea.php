<?php
$ext = CountView::DisplayPArticle(CustomizeSideColumn::Values()->PopularArticleAreaNumber)->existquery;
$noext = CountView::DisplayPArticle(CustomizeSideColumn::Values()->PopularArticleAreaNumber)->noexistquery;
$objs = array($ext, $noext);
$query = "SELECT * FROM $wpdb->options WHERE option_name LIKE '%ViewNumArticle%'";
$results = $wpdb->get_results( $wpdb->prepare( $query, 1, $type ) );
if(count($results) == 0){
    return;
}
$ext = CountView::DisplayPArticle(CustomizeSideColumn::Values()->PopularArticleAreaNumber)->existquery;
$noext = CountView::DisplayPArticle(CustomizeSideColumn::Values()->PopularArticleAreaNumber)->noexistquery;
$objs = array($ext, $noext);
?>
<nav class="PopularArticleAreaNav d-inline-block w-100 float-left">
    <div id="" class="w-100 d-inline-block float-left">
        <div class="PopularArticleAreaTitleWrapper w-100 d-inline-block float-left">
            <div class="PopularArticleAreaTitleArea float-left w-100 d-inline-block">
                <div id="" class="PopularArticleAreaFontTop w-100 mb-0">
                    <p id="" class="PopularArticleAreaFontTopInner mb-0 d-inline-block">
                        <?php echo CustomizeSideColumn::Values()->PopularArticleAreaTitle;?>
                    </p>
                </div>
                <div id="" class="PopularArticleAreaFontBottom w-100 font-weight-bold mb-0">
                    <h5 id="" class="PopularArticleAreaFontBottomInner mb-0 d-inline-block"><?php echo CustomizeSideColumn::Values()->PopularArticleAreaBottomTitle;?></h5>
                </div>
            </div>
        </div>
        <?php foreach($objs as $obj): ?>
            <?php foreach(CountView::DisplayPArticle(CustomizeSideColumn::Values()->PopularArticleAreaNumber)->IdCountRArr as $ID => $ViewNum): ?>
                <?php if($obj->have_posts()):?>
                    <?php while($obj->have_posts()): $obj->the_post();?>
                        <?php if($ID == get_the_ID()):?>
                        <div class="PopularArticleArealinkarea float-left w-100">
                            <div class="d-inline-block w-100 float-left">
                                <div class="ThumbArea d-inline-block">
                                    <a href="<?php the_permalink(); ?>" class="w-100 d-inline-block">
                                        <?php if(get_the_post_thumbnail_url()):?>
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" class="w-100 d-inline-block">
                                        <?php else:?>
                                        <img src="<?php echo CustomizeOtherBasic::Values()->GetNothumbnailImg;?>" class="dummy w-100 d-inline-block">
                                        <?php endif;?>
                                    </a>
                                </div>
                                <div class="TextArea d-inline-block">
                                    <h5 class="posttitle mb-0">
                                        <a href="<?php the_permalink(); ?>" class="posttitle"><?php the_title(); ?></a>
                                    </h5>
                                    <div class="catlink_and_date d-inline-block">
                                        <div class="linkarea d-inline-block">
                                            <?php foreach(get_the_category() as $v): ?>
                                            <a href="<?php echo get_term_link($v->slug, $v->taxonomy); ?>" class="catlink pr-1 pl-1 d-inline-block <?php echo $v->slug.'-bg'; ?> <?php echo $v->slug.'-fontcolor'; ?>">
                                                <?php echo $v->name; ?>
                                            </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <small class="datefont d-inline-block mb-0"><?php echo get_the_modified_date('Y-m-d'); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    <?php endwhile; ?>
                <?php endif;?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</nav>