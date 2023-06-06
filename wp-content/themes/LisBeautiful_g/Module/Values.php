<?php
    //ページビューなどを計測するクラス
    class CountView{
        public function __construct() {
            add_action( 'wp_head', array( $this,'CountArticleVnum'));
        }
        public function CountArticleVnum(){
            $referer = $_SERVER['HTTP_REFERER'];
            $pagenow = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            //投稿ページの時だけカウントする ただし、流入元が別のページの場合 リロードなどは除く。
            $OpKey = '';
            if(is_single() && $referer != $pagenow && $referer != NULL){
                $OpKey = 'ViewNumArticle'.get_the_ID();
                if(get_option($OpKey)){
                    update_option($OpKey, get_option($OpKey) + 1);
                }
                if(!get_option($OpKey)){
                    update_option($OpKey, 1);
                }
            }
        }
        public static function DisplayPArticle($number){
            //ここから下はwp_optionのデータを取得する処理など
            require_once ( ABSPATH . "wp-load.php");
            global $wpdb;

            //ViewNumArticleをキーに持つデータを正規表現で取得
            $query = "SELECT * FROM $wpdb->options WHERE option_name LIKE '%ViewNumArticle%'";
            $results = $wpdb->get_results( $wpdb->prepare( $query, 1, $type ) );

            //[articleID => option_value, articleID => option_value, ...] の配列を作成する
            $IdCountRArr = [];
            $IdArr = [];//idのみの配列
            foreach($results as $result){
                $id = str_replace("ViewNumArticle", "", $result->option_name);
                $IdCountRArr[$id] = $result->option_value;
                array_push($IdArr, $id);
            }
            arsort($IdCountRArr);

            $total = $number;//表示する人気記事の数
            $exist = count($IdArr);//閲覧数が登録されてるもの
            if($total < $exist){
                $exist = $total;
            }
            $notexist = $total - $exist;//閲覧数が登録されていないもの WP_Queryで新しいものから順に表示

            $existargs = array(
                'posts_per_page' => $exist,
                'post__in' => $IdArr,
                'post_status' => array('publish')
            );
            $existquery = new WP_Query($existargs);

            $noexistargs = array(
                'posts_per_page' => $notexist,
                'post__not_in' => $IdArr,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_status' => array('publish')
            );
            $noexistquery = new WP_Query($noexistargs);

            return (object)[
                'IdCountRArr' => $IdCountRArr,
                'existquery' => $existquery,
                'noexistquery' => $noexistquery,
            ];
        }
    }
    new CountView();

    class SubQuery{
        public function __construct() {
            add_action( 'pre_get_posts', array( $this,'change_posts_per_page'));
        }
        public static function ColumCategoryArticle($number){
            $categories = get_the_category($post->ID);
            $category_ID = array();

            foreach($categories as $category):
                array_push( $category_ID, $category -> cat_ID);
            endforeach ;
            
            $args = array(
                'post__not_in' => array($post->ID),
                'posts_per_page'=> $number,
                'category__in' => $category_ID,
                'orderby' => 'rand',
            );
            $query = new WP_Query($args);
            if( !$query->have_posts() ){
                return;
            }
            return $query;
        }
        public static function NewestArticleArea($num){
            $args = array(
                'posts_per_page' => $num,
                'order'          => 'DESC',
                'orderby'        => 'date'
            );
            $postslist = get_posts( $args );
            if(!$postslist){
                return;
            }
            return $postslist;
        }

        public function change_posts_per_page($query) {
            if ( is_admin() || ! $query->is_main_query() )
                return;

                if ( $query->is_archive() ) {
                $query->set( 'posts_per_page', CustomizePageLayout::Values()->ArchiveArticleNumber );
            }
        }

        public static function getAllCategory($cat){
            global $wpdb;

            $query = "SELECT * FROM wp_terms
                        LEFT JOIN wp_term_relationships
                            ON wp_terms.term_id = wp_term_relationships.term_taxonomy_id 
                        LEFT JOIN wp_term_taxonomy 
                            ON wp_terms.term_id = wp_term_taxonomy.term_id
                        WHERE wp_term_taxonomy.taxonomy = '".$cat."';";

            $results = $wpdb->get_results( $wpdb->prepare( $query ) );
            return $results;
        }

        public static function GetAllTerms () {
            global $wpdb;
            $query = "SELECT * FROM wp_terms;";
            $results = $wpdb->get_results( $wpdb->prepare( $query, 1, $type ) );
            $slugArr = [];
            foreach ($results as $res) {
                array_push($slugArr, $res->slug);
            }
            return $slugArr;
        }
        public static function GetColorCode() {
            global $wpdb;
            $query = "SELECT * FROM wp_options WHERE option_name LIKE '%%-bg%%' OR option_name LIKE '%%-fontcolor%%';";
            $results = $wpdb->get_results( $wpdb->prepare( $query, 1, $type ) );
            return $results;
        }
    }
    new SubQuery();
?>