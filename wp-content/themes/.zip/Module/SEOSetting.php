<?php
class SEO{
    public function __construct() {
        add_filter( 'document_title_separator', array($this,'SetSeperator'));
        add_filter( 'pre_get_document_title', array( $this,'DisplayTitle'));
        add_action( 'wp_head', array( $this,'DisplayMetaDescription'));
        add_action( 'wp_head', array( $this,'DisplayMetaKeyword'));
        add_action( 'wp_head', array( $this,'GenerateOgpTag'));
        add_action( 'save_post', array( $this,'GenerateSitemap' ) );
    }
    public function SetSeperator( $separator ) {
        $separator = '|';
        return $separator;
    }
    //タイトルの設定
    public function DisplayTitle( $title ) {
        //投稿ページの時
        if (is_single()) {
            $title = get_the_title();
            //個別タイトルがある場合は個別タイトルを優先する。
            if(get_post_meta(get_the_ID(), 'PostTitle-'.get_the_ID(), true)){
                $title = get_post_meta(get_the_ID(), 'PostTitle-'.get_the_ID(), true);
            }
        }
        return $title;
    }

    //ディスクリプションの設定
    public function DisplayMetaDescription() {
        $description = "";
        if ( is_home() ) {
            $description = get_bloginfo( 'description' );
            if(get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true)){
                $description = get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true);
            }
        } elseif ( is_category() ) {
            $description =strip_tags(category_description());
        } elseif ( is_tag() ) {
            $description = tag_description()?strip_tags(tag_description()):"タグ「".single_tag_title('',false)."」のついている記事一覧ページです";
        } elseif ( is_single() ) {
            while ( have_posts() ) : the_post();
                $description = strip_tags(get_the_excerpt());
                if(get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true)){
                    $description = get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true);
                }
            endwhile;
        }
        if ( !empty($description) ) {
            printf( '<meta name="description" content="%s" />' . "\n", str_replace(array("\r","\n"), '', $description) );
        }
    }

    public function DisplayMetaKeyword() {
        if(get_post_meta(get_the_ID(), 'MetaKeyword-'.get_the_ID(), true)){
            $MetaKeyword = get_post_meta(get_the_ID(), 'MetaKeyword-'.get_the_ID(), true);
        }
        if ( !empty($MetaKeyword) ) {
            printf( '<meta name="keywords" content="%s" />' . "\n", str_replace(array("\r","\n"), '', $MetaKeyword) );
        }
    }

    public function GenerateOgpTag(){
        $UrlNow = (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $title = get_the_title();
        if(get_post_meta(get_the_ID(), 'PostTitle-'.get_the_ID(), true)){
            $title = get_post_meta(get_the_ID(), 'PostTitle-'.get_the_ID(), true);
        }

        $description = '';
        if ( is_home() ) {
            $description = get_bloginfo( 'description' );
            if(get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true)){
                $description = get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true);
            }
        } elseif ( is_category() ) {
            $description = strip_tags(category_description());
        } elseif ( is_tag() ) {
            $description = tag_description()?strip_tags(tag_description()):"タグ「".single_tag_title('',false)."」のついている記事一覧ページです";
        } elseif ( is_single() ) {
            while ( have_posts() ) : the_post();
                $description = strip_tags(get_the_excerpt());
                if(get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true)){
                    $description = get_post_meta(get_the_ID(), 'PostDescription-'.get_the_ID(), true);
                }
            endwhile;
        }
        $PageType = (is_front_page() || is_category() || is_archive()) ? 'website' : 'article';
        $ThumbnailUrl = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '';
        ?>
        <meta property="og:url" content="<?php echo $UrlNow; ?>">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $description; ?>">
        <meta property="og:type" content="<?php echo $PageType; ?>">
        <meta property="og:image" content="<?php echo $ThumbnailUrl; ?>">
        <?php
    }
    public function GenerateSitemap(){
        //プラグインを使っている場合はプラグインを優先できるように、中断処理を追加する予定
        $xmlurl = ABSPATH.'/sitemap.xml';
        $htmlur = ABSPATH.'/sitemap.html';

        chmod($xmlurl, 0777);
        chmod($htmlur, 0777);

        $xmlstr = '<?xml version="1.0" encoding="UTF-8"?>';
        $xmlstr .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        //TOPページのデータを取得
        $xmlstr .= '<url>';
        $xmlstr .= '<loc>'.get_bloginfo('url').'</loc>';
        $xmlstr .= '<changefreq>daily</changefreq>';
        $xmlstr .= '<priority>1.0</priority>';
        $xmlstr .= '</url>';

        require_once ( ABSPATH . "wp-load.php");
        global $wpdb;

        //投稿ページ、固定ページ
        $postquery = "SELECT * FROM $wpdb->posts";
        $postresults = $wpdb->get_results( $wpdb->prepare( $postquery, 1, $type ) );

        $SitemapArticleLinks = '';
        foreach($postresults as $postresult){
            if($postresult->post_type == 'post' && $postresult->post_status == 'publish'){
                $xmlstr .= '<url>';
                $xmlstr .= '<loc>'.$postresult->guid.'</loc>';
                $xmlstr .= '<lastmod>'.$postresult->post_modified.'</lastmod>';
                $xmlstr .= '<changefreq>daily</changefreq>';
                $xmlstr .= '<priority>0.6</priority>';
                $xmlstr .= '</url>';
            }
            if($postresult->post_type == 'page' && $postresult->post_status == 'publish'){
                $xmlstr .= '<url>';
                $xmlstr .= '<loc>'.$postresult->guid.'</loc>';
                $xmlstr .= '<lastmod>'.$postresult->post_modified.'</lastmod>';
                $xmlstr .= '<changefreq>daily</changefreq>';
                $xmlstr .= '<priority>0.6</priority>';
                $xmlstr .= '</url>';
            }
            if($postresult->post_status == 'publish' && $postresult->post_title != 'Custom Styles'){
                $SitemapArticleLinks .= '<a href="'.$postresult->guid.'" class="catlink position-relative mr-2 pr-1  d-inline-block">'.$postresult->post_title.'</a>';
            }
        }

        //アーカイブページ関連
        $archivequery = "SELECT * FROM $wpdb->terms";
        $archiveresults = $wpdb->get_results( $wpdb->prepare( $archivequery, 1, $type ) );

        $SitemapArchiveLinks = '';
        foreach($archiveresults as $archiveresult){
            $link = str_replace("&", "&amp;", get_term_link(intval($archiveresult->term_id)));
            $xmlstr .= '<url>';
            $xmlstr .= '<loc>'.$link.';</loc>';
            $xmlstr .= '<changefreq>daily</changefreq>';
            $xmlstr .= '<priority>0.3</priority>';
            $xmlstr .= '</url>';

            $SitemapArchiveLinks .= '<a href="'.$link.'" class="catlink position-relative mr-2 pr-1  d-inline-block">'.$archiveresult->name.'</a>';
        }

        $xmlstr .= '</urlset>';

        //サイトマップのテンプレートとなるファイルを読み込んで置換するために定義しておく。　
        $HTMLstr = file_get_contents(get_template_directory().'/Module/htmlfile/SEO/sitemap.html');
        $SitemapStyles = '<link rel="stylesheet" href="'.get_theme_file_uri('/css/bootstrap.min.css').'" type="text/css">';
        $SitemapStyles .= '<link rel="stylesheet" href="'.get_theme_file_uri('/css/common.css').'" type="text/css">';
        $BreadCrumbTopLink = '<a class="cursor" href="'.get_bloginfo('url').'">Top</a>';
        $SitemapTopLink = '<a href="'.get_bloginfo('url').'" class=""><h3 class="sitemaptop mb-0">TOP</h3></a>';

        $HTMLstr = str_replace("{{SitemapStyles}}", $SitemapStyles, $HTMLstr);
        $HTMLstr = str_replace("{{BreadCrumbTopLink}}", $BreadCrumbTopLink, $HTMLstr);
        $HTMLstr = str_replace("{{SitemapTopLink}}", $SitemapTopLink, $HTMLstr);
        $HTMLstr = str_replace("{{SitemapArticleLinks}}", $SitemapArticleLinks, $HTMLstr);
        $HTMLstr = str_replace("{{SitemapArchiveLinks}}", $SitemapArchiveLinks, $HTMLstr);

        if(CustomizeOtherBasic::Values()->SitemapHTMLStatus == 'on'){
            $HTMLfile = fopen($htmlur, "w");
            fwrite($HTMLfile, $HTMLstr);
            fclose($HTMLfile);
        }
        if(CustomizeOtherBasic::Values()->SitemapXMLStatus == 'on'){
            $XMLfile = fopen($xmlurl, "w");
            fwrite($XMLfile, $xmlstr);
            fclose($XMLfile);
        }

        ob_end_clean();
    }
}
new SEO();
?>