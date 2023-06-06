<section class="d-inline-block w-100 float-left">
    <article id="contentArticle">
    <?php if(have_posts()): ?>
        <h1 class="large_midashi mb-3 font-weight-bold"><?php the_title(); ?></h1>
        <div class="articleinner w-100 d-inline-block">
            <div class="article_content w-100 d-inline-block" id="oomidashi1">
                <?php the_content(); ?>
            </div>
        </div>

        <?php if(CustomizeMainColumn::Values()->SetSNSButton != 'none' && CustomizeMainColumn::Values()->SetSNSAreaTitleDesign != 'none'): ?>
        <div class="sns-btn sns-dif text-center pt-3 pb-3">
            <span class="sns-btn__title dfont"><?php echo CustomizeMainColumn::Values()->SetSNSAreaTitle;?></span>
        </div>
        <?php endif; ?>

        <?php if(CustomizeMainColumn::Values()->SetSNSButton != 'none'): ?>
        <?php $share_url=get_permalink(); $share_title=get_the_title(); ?>
        <ul class="sns-area-wrapper text-center pt-3 pb-3">
            <li class="tw sns-btn__item">
                <a class="nolightbox"
                href="https://twitter.com/share?url=<?php $share_url;?>&text=<?php $share_title;?>" rel="nofollow noopener" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="fb sns-btn__item">
                <a class="nolightbox"
                href="https://www.facebook.com/share.php?u=<?=$share_url?>" rel="nofollow noopener" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="hatebu sns-btn__item">
                <a href="http://b.hatena.ne.jp/entry/<?php $share_url; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" rel="nofollow noopener" target="_blank">
                    <i class="fa fa-hatebu"></i>
                </a>
            </li>
            <li class="pkt sns-btn__item">
                <a href="http://getpocket.com/edit?url=<?php $share_url;?>&title=<?php $share_title;?>" rel="nofollow noopener" target="_blank">
                    <i class="fa fa-get-pocket"></i>
                </a>
            </li>
            <li class="line sns-btn__item">
                <a href="https://social-plugins.line.me/lineit/share?url=<?php $share_url;?>" rel="nofollow noopener" target="_blank">
                    <i class="fab fa-line"></i>
                </a>
            </li>
        </ul>
        <?php endif; ?>
        <?php if(CustomizeMainColumn::Values()->DisplayAuthor != 'none'):?>
        <div class="profile_box w-100">
            <div class="profile_box_inner d-inline-block w-100">
                <table>
                    <tr>
                        <td class="profile_user_info">
                            <div class="profile-box_title">この記事を書いた人<span class="elbefore"></span><span class="elafter"></span></div>
                            <div class="profile-box_image">
                                <img src="<?php echo get_the_author_meta("profurl"); ?>">
                            </div>
                            <p class="author_name_area">
                                <?php the_author(); ?>
                            </p>
                        </td>
                        <td class="profile_user_description">
                            <?php the_author_meta('user_description'); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php endif; ?>
        <!--ここから記事　ループ-->
    <?php endif; ?>
    </article>
</section>