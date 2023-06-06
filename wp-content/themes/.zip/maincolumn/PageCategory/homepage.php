<section class="d-inline-block w-100 float-left">
    <?php if(have_posts()): ?>
        <h1 class="large_midashi mb-3 font-weight-bold"><?php the_title(); ?></h1>
        <!--ここから記事　ループ-->
        <div class="articleinner w-100 d-inline-block">
            <div class="article_content w-100 d-inline-block" id="oomidashi1">
                <?php the_content(); ?>
            </div>
        </div>
        <!--ここから記事　ループ-->
    <?php endif; ?>
</section>