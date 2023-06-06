<?php
    class GenerateHtml{
        //ロゴを制御
        public static function GenerateLogo($pattern){
            $ptarr = [
                "pt1" => "d-inline-block float-left",
                "pt2" => "d-inline-block float-left",
                "pt3" => "d-inline-block float-left",
                "pt4" => "d-inline-block float-left",
                "pt5" => "d-inline-block float-left",
                "pt6" => "d-inline-block float-left",
                "pt7" => "d-inline-block float-left",
                "pt8" => "d-inline-block float-left",
                "pt9" => "d-inline-block float-left",
            ];
            $starr = [
                "pt1" => "logomenufont",
                "pt2" => "logomenufont",
                "pt3" => "logomenufont",
                "pt4" => "logomenufont",
                "pt5" => "logomenufont",
                "pt6" => "logomenufont",
                "pt7" => "logomenufont",
                "pt8" => "logomenufont",
                "pt9" => "logomenufont",
            ];

            if( has_custom_logo() ){ 
                $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                $mylogo = $image[0]; 
                $mylogo = '<img src="'. $mylogo .'" class="customlogo '.CustomizeHeader::Values()->LogoImgVisib.' float-left" alt="'. get_bloginfo( 'name' ) .'" />'; 
            } else {
                $mylogo = '<img src="'.get_theme_file_uri('img/defaultlogo.png').'" class="customlogo '.CustomizeHeader::Values()->LogoImgVisib.' float-left" />'; 
            }

            $logostr = '';
            if(CustomizeHeader::Values()->STtlSetting == ''){
                $logostr = get_bloginfo( 'name' );
            }
            if(CustomizeHeader::Values()->STtlSetting != ''){
                $logostr = CustomizeHeader::Values()->STtlSetting;
            }

            if( is_front_page() && is_home()){
                if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true )){
                    echo '<div class="'.$ptarr[$pattern].'">'.
                            $mylogo .
                            '<span id="LogoStr" class="'.$starr[$pattern].' '.CustomizeHeader::Values()->LogoTTlVisib.' pt-1 pb-1">'.
                                $logostr . '
                            </span>
                          </div>';
                }else{
                    echo '<div class="'.$ptarr[$pattern].'">'.
                            $mylogo .
                          '</div>';
                }
            } else { 
                if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true )){
                    echo '<div class="'.$ptarr[$pattern].'">
                            <a href="'. home_url() .'" rel="home">'. 
                                $mylogo . 
                                '<span id="LogoStr" class="'.$starr[$pattern].' '.CustomizeHeader::Values()->LogoTTlVisib.' pt-1 pb-1">'.
                                    $logostr . '
                                </span>
                            </a>
                          </div>'; 
                }else{
                    echo '<div class="'.$ptarr[$pattern].'">
                            <a href="'. home_url() .'" rel="home">'. 
                                '<span class="'.$starr[$pattern].'">'.
                                    $mylogo .'
                                </span>
                            </a>
                          </div>'; 
                }
            }
        }

        public static function GenerateGnavribbon(){
            $html = '';
            for($i=1; $i <= 12; $i++){
                $html .= '<div class="gnavribbon'.$i.' col-1 float-left h-100 position-absolute d-md-none"></div>';
            }
            echo $html;
        }

        public static function GenerateBeadcrumb(
            $setobj = array(
                'ulclass' => 'breadcrumb',
                'liclass' => 'breadstr',
                'liarrowclass' => 'breadarrowstr',
                'liarrowelem' => '>',
                'aclass' => "cursor",
                'toppagestr' => 'home',
                'notfoundstr' => 'ページが見つかりません',
                'resultstr' => 'の検索結果'
            )
        ){
            $brstr = '';
        
            // トップページの場合
            if ( is_front_page() ) {
                $brstr .= '<li class="topli '.$setobj['liclass'].'">'.$setobj['toppagestr'].'</li>';
            }else{
                $brstr .= '<li class="topli '.$setobj['liclass'].'"><a href="'.get_bloginfo('url').'" class="'.$setobj['aclass'].'">'.$setobj['toppagestr'].'</a></li>';
            }
            // カテゴリーページの場合
            if ( is_category() ) {
                $cat = get_queried_object();
                $cat_id = $cat->parent;
                $cat_list = array();
                while($cat_id != 0) {
                    $cat = get_category( $cat_id );
                    $cat_link = get_category_link( $cat_id );
                    array_unshift( $cat_list, '<li class="'.$setobj['liclass'].'"><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
                    $cat_id = $cat->parent;
                }
                foreach ($cat_list as $value) {
                    $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.$value;
                }
                $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.'<li class="'.$setobj['liclass'].'">'.get_the_archive_title().'</li>';
          
            // アーカイブページの場合
            } else if ( is_archive() ) {
                $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.'<li class="'.$setobj['liclass'].'">'.get_the_archive_title().'</li>';
          
            // 投稿ページの場合
            } else if ( is_single() ) {
                $cat = get_the_category();
                if( isset( $cat[0]->cat_ID ) ) $cat_id = $cat[0]->cat_ID;
                    $cat_list = array();
                while( $cat_id != 0 ) {
                    $cat = get_category( $cat_id );
                    $cat_link = get_category_link( $cat_id );
                    array_unshift( $cat_list, '<li class="'.$setobj['liclass'].'"><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
                    $cat_id = $cat->parent;
                }
                foreach($cat_list as $value) {
                    $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.$value;
                }
                $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.'<li class="singleli '.$setobj['liclass'].'">'.get_the_title().'</li>';
          
            // 固定ページの場合
            } else if ( is_page() ) {
                $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.get_the_title();
          
            // 検索結果の場合
            } else if ( is_search() ) {
                $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.'<li class="'.$setobj['liclass'].'">「'.get_search_query().'」'.$setobj['resultstr'].'</li>';
            
            // 404ページの場合
            } else if ( is_404() ) {
                $brstr .= '<li class="'.$setobj['liarrowclass'].'"></li>'.'<li class="'.$setobj['liclass'].'">'.$setobj['notfoundstr'].'</li>';
            }
            $breadcrumb = '<ul id="breadcrumb" class="'.$setobj['ulclass'].'">'.$brstr.'</ul>';
            return $breadcrumb;
        }

        public static function GenerateNewestArticle(){
            //表示数　デザインを調整できるようにする。
            ?>
            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 4,//＊＊＊ここ
                'paged' => $paged,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <!--＊＊＊ここ-->
                <a href="<?php the_permalink();?>">
                    <div class="post">
                        <h5 class="title"><?php the_title(); ?></h5>
                    </div>
                </a>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
            <?php
        }
    }
    new GenerateHtml();
?>