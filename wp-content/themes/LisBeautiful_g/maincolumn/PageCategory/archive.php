<section class="d-inline-block w-100 float-left">
    <div class="ArchiveArticleaTitleArea">
        <div id="" class="ArchiveTitleFontTop w-100 mb-0">
            <h2 id="" class="ArchiveTitleFontTopInner mb-0 d-inline-block">
                <?php if (CustomizePageLayout::Values()->ArchiveArticleTitle == ''):?>
                    <?php foreach(get_the_category() as $cat){ echo $cat->name;}?>の記事
                <?php else:?>
                    <?php echo CustomizePageLayout::Values()->ArchiveArticleTitle;?>
                <?php endif; ?>
            </h2>
        </div>
    </div>
    <div id="" class="ArchiveArticleArea w-100 d-inline-block pt-2 float-left">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="Archivelinkarea float-left">
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
                    <div class="catlink_and_date d-inline-block">
                        <div class="linkarea d-inline-block mb-0">
                            <?php foreach(get_the_category() as $v): ?>
                            <a href="<?php echo get_term_link($v->slug, $v->taxonomy); ?>" class="catlink mr-2 pr-1 pl-1 d-inline-block mt-1 <?php echo $v->slug.'-bg'; ?> <?php echo $v->slug.'-fontcolor'; ?>">
                                <?php echo $v->name; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <small class="datefont d-inline-block mb-0"><?php echo get_the_modified_date('Y-m-d'); ?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>