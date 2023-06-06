<?php
if(CustomizeMainColumn::Values()->NewestArticleAreaDisplay == 'false'){
    return;
}
$query = SubQuery::NewestArticleArea(CustomizeMainColumn::Values()->NewestArticleAreaNumber);
?>
<section class="d-inline-block w-100 float-left">
    <div class="NewestArticleTitleArea float-left w-100 d-inline-block">
        <div id="" class="NewestArticleAreaFontTop w-100 mb-0">
            <p id="" class="NewestArticleAreaFontTopInner mb-0 d-inline-block">
                <?php echo CustomizeMainColumn::Values()->NewestArticleAreaTitle;?>
            </p>
        </div>
        <div id="" class="NewestArticleAreaFontBottom w-100 mb-0">
            <h5 id="" class="NewestArticleAreaFontBottomInner mb-0 d-inline-block"><?php echo CustomizeMainColumn::Values()->NewestArticleAreaBottomTitle;?></h5>
        </div>
    </div>
    <div id="" class="NewestArticleArea w-100 d-inline-block pt-2 float-left">
        <?php foreach ( $query as $post ) : setup_postdata( $post ); ?>
        <div class="NewestArticlelinkarea float-left">
            <div class="d-inline-block w-100 d-inline-block">
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
                    <?php
                    $textLimits = get_the_content();
                    //pc
                    $TpNow = CustomizeMainColumn::Values()->NewestArticleAreaTemplate;
                    $title = mb_strimwidth($textLimits,0,Settings::$PCMainCLimit[$TpNow]);
                    //sp
                    $TpSPNow = CustomizeMainColumn::Values()->NewestArticleAreaSPTemplate;
                    $titlesp = mb_strimwidth($textLimits,0,Settings::$SPMainCLimit[$TpSPNow]);
                    ?>
                    <div class="PcontEx PcontExPc mb-0"><?php echo $title; ?></div>
                    <div class="PcontEx PcontExSP mb-0"><?php echo $titlesp; ?></div>
                    <div class="catlink_and_date d-inline-block">
                        <?php if(CustomizeMainColumn::Values()->SetNewestArticleAreaTagDesign != 'none'): ?>
                        <div class="linkarea d-inline-block mb-0">
                            <?php foreach(get_the_category() as $v): ?>
                            <a href="<?php echo get_term_link($v->slug, $v->taxonomy); ?>" class="catlink mr-2 pr-1 pl-1 d-inline-block mt-1 <?php echo $v->slug.'-bg'; ?> <?php echo $v->slug.'-fontcolor'; ?>">
                                <?php echo $v->name; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <small class="datefont d-inline-block mb-0"><?php echo get_the_modified_date('Y-m-d'); ?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; wp_reset_postdata();?>
    </div>
</section>