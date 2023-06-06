<?php
class AdminMenue{
    public function __construct() {
        add_action('save_post', array( $this,'save_title_description_fields'));
        add_action('admin_menu', array( $this,'add_title_description_fields'));
        add_action( 'admin_enqueue_scripts', array( $this,'SetAdminPageStyle' ));
    }

    public $cssDir = '/Module/Admin/Editor/customblock/src/css/editor.css';
    public $FontAwesomeDir = "/Module/Admin/Editor/customblock/src/fontawesome.json";

    // 固定カスタムフィールドボックス
    public function add_title_description_fields() {
        add_meta_box(
            'title_description_setting',
            'タイトル・ディスクリプションの設定',
            [ 'AdminMenue', 'insert_title_description_fields' ],
            'post',
            'normal'
        );
    }
    
    // カスタムフィールドの入力エリア
    public function insert_title_description_fields() {
        global $post;

        //テンプレートを読み込む
        $HTMLstr = file_get_contents(get_template_directory().'/Module/htmlfile/AdminMenue/titelmenu.html');
        $SetTitleArea = '<input type="text" class="w-100" name="PostTitle-'.$post->ID.'" value="'.get_post_meta($post->ID, 'PostTitle-'.$post->ID, true).'">';
        $SetDescriptionArea = '<textarea name="PostDescription-'.$post->ID.'" class="w-100" value="'.get_post_meta($post->ID, 'PostDescription-'.$post->ID, true).'" size="100">'.get_post_meta($post->ID, "PostDescription-".$post->ID, true).'</textarea>';
        $SetMetaKeywordArea = '<input type="text" class="w-100" name="MetaKeyword-'.$post->ID.'" value="'.get_post_meta($post->ID, 'MetaKeyword-'.$post->ID, true).'">';

        $HTMLstr = str_replace("{{SetTitleArea}}", $SetTitleArea, $HTMLstr);
        $HTMLstr = str_replace("{{SetDescriptionArea}}", $SetDescriptionArea, $HTMLstr);
        $HTMLstr = str_replace("{{SetMetaKeywordArea}}", $SetMetaKeywordArea, $HTMLstr);
        echo $HTMLstr;
    }
 
    // カスタムフィールドの値を保存
    public function save_title_description_fields( $post_id ) {
        if(!empty($_POST['PostTitle-'.$post_id])){
            update_post_meta($post_id, 'PostTitle-'.$post_id, $_POST['PostTitle-'.$post_id] );
        }else{
            delete_post_meta($post_id, 'PostTitle-'.$post_id);
        }
        
        if(!empty($_POST['PostDescription-'.$post_id])){
            update_post_meta($post_id, 'PostDescription-'.$post_id, $_POST['PostDescription-'.$post_id] );
        }else{
            delete_post_meta($post_id, 'PostDescription-'.$post_id);
        }

        if(!empty($_POST['MetaKeyword-'.$post_id])){
            update_post_meta($post_id, 'MetaKeyword-'.$post_id, $_POST['MetaKeyword-'.$post_id] );
        }else{
            delete_post_meta($post_id, 'MetaKeyword-'.$post_id);
        }
    }

    //jsonファイルからデータを受け取って返す
    public function ReturnJsonData($path){
        $fdir = get_template_directory();
        //get json path
        $wparr = file_get_contents($fdir.$path);
        $MCjson = mb_convert_encoding($wparr, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $decodedJson = json_decode($MCjson,true);
        return $decodedJson;
    }

    //管理画面でしか使わないcssを定義する
    public function makeOriginalStyleOnlyForAdmin () {
        $CssStr = '
        .editorIconArea .components-button{
            width:2rem;
            height:2rem;
            text-align:center;
        }
        .editorIconArea{
            height:10rem;
            overflow:scroll;
        }
        .editorIconArea button{
            position:relative;
        }
        .editorIconArea button:before{
            position:absolute;
            left:.25rem;
            font-size: 1.5rem;
        }/*
        .StyleMenuWrapper {
            width: calc((100% - 1rem) / 2);
            padding: .25rem;
            float: left;
            margin: 0 0 .5rem .5rem;
            border: solid 1px;
            min-height: 3rem;
        }
        .StyleMenuWrapper > .components-button{
            width: 100%;
            float: left;
            height: 100%;
            display: inline-block;
            min-height:2rem;
        }*/
        .edit-post-visual-editor {
            display:table !important;
        }
        .editor-format-toolbar {
            background:blue;/*ここはメインカラーが来る想定*/
            color:white;
        }
        .editor-format-toolbar > .components-toolbar > div > button > span::before {
            color:white;
        }
        div[aria-label="FontStyle"] button {
            margin-bottom:.5rem;
        }
        .editorIconArea .components-button:hover {
            background:rgb(0, 0, 0, 0.1);
        }
        .editor-styles-wrapper p{
            line-height:1 !important;
        }
        .buttonselected{
            background:red !important;
        }
        .buttonWrapper{
            position:relative;
            display:inline-block;
            float:left;
            width:calc((100% - .6rem) / 2);
            margin-bottom:.3rem;
            padding:.5rem;
            border:solid 1px;
        }
        .buttonWrapper:nth-child(2n){
            margin-right:.3rem;
        }
        .buttonWrapper:nth-child(2n+1){
            margin-left:.3rem;
        }
        /*リボンだけ特別*/
        .buttonWrapper > .headline-ribbon-bg{
            margin-left:0;
        }
        .buttonWrapper > .headline-ribbon-bg:before{
            border-width: 1.4em 0px 1.4em 0.9em;
            left: -.8em;
        }
        .buttonWrapper > .headline-ribbon-bg:after{
            border-width: 1.4em .9em 1.4em 0px;
            right: -.8em;
        }
        .buttonTitleLabel{
            position:absolute;
            top:1rem;
            left:2rem;
        }
        .buttonWrapper .buttonTitleLabel {
            pointer-events: none;
        }
        .cancelEditStyle{
            width: 100%;
            background: orange;
            font-size: 1rem;
            font-weight: bold;
            margin-top: 1rem;
        }
        .cancelEditStyle:hover{
            color:#ffff;
        }
        .cancelEditStyle,
        .cancelEditStyle:hover{
            transition:color .5s;
        }
        #toplevel_page_EditCat a img {
            width: 2rem;
            padding-top: 0px !important;
        }
        .toplevel_page_easyDesign > div > img{
            opacity: 1 !important;
            width: 1.5rem;
            height: 1.5rem !important;
            padding-top: 6px !important;
        }
        .toplevel_page_easyDesign > div,
        .wp-submenu > li > a[href$=setCategory],
        .wp-submenu > li > a[href$=setTag]{
            color:#00FFFF !important;
        }
        ';

        $editorCssStr = file_get_contents(get_template_directory().'/Module/Admin/Editor/css/editor.css');
        $CssStr .= $editorCssStr;

        return $CssStr;
    }

    public function defineIconStyle(){
        //管理画面・実際のページ共通で使う
        $FontAwesomeJson = self::ReturnJsonData("/Module/Admin/Editor/customblock/src/fontawesome.json");
        $CssStr = '';
        foreach ($FontAwesomeJson["editIcon"] as $eachJsonData) {
            $CssStr .= '
            .has-background {
                padding:.5em !important;
            }
            button[value="'.$eachJsonData['iconclass'].'"]{
                margin-left:.5em !important;
                margin-bottom:.5em !important;
                width: 1.5rem;
                height: 1.5rem;
                text-align: center;
            }
            button[value="'.$eachJsonData['iconclass'].'"]:before{
                content:"\f'.$eachJsonData['iconval'].'";
                font-family: "Font Awesome 5 Free";
                margin-right:2px;
            }
            .'.$eachJsonData['iconclass'].':before {
                content:"\f'.$eachJsonData['iconval'].'";
                font-family: "Font Awesome 5 Free";
                margin-right:2px;
            }
            .listWrapper-'.$eachJsonData['iconclass'].' li:before {
                content:"\f'.$eachJsonData['iconval'].'";
                font-family: "Font Awesome 5 Free";
                margin-right:2px;
            }
            ';
        }
        return $CssStr;
    }

    public function DefineMarkerStyle(){
        //管理画面・実際のページ共通で使う
        //下線部マーカーのスタイル　prop.json
        $PropJson = self::ReturnJsonData("/Module/Admin/Editor/customblock/src/prop.json");
        $CssStr = '';
        foreach ($PropJson["toolbarprop"] as $eachJsonData) {
            $CssStr .=
            '
            div[aria-label="dropdown"] > .is-active {
                background:rgb(0, 0, 0, .3);
            }
            .'.$eachJsonData["class"].'{
                '.$eachJsonData["prop"].'
            }
            .dashicons-'.$eachJsonData["class"].' {
                color:red;
            }
            .dashicons-'.$eachJsonData["class"].'::before {
                content:"'.$eachJsonData["icon"].'";
                color:'.$eachJsonData["color"].';
            }
            ';
        }
        return $CssStr;
    }

    public function DefineTitleDesign() {
        //管理画面・実際のページ共通で使う
        $PropJson = self::ReturnJsonData("/Module/Admin/Editor/customblock/src/prop.json");
        $CssStr = '';
        foreach ($PropJson["blockmenuprop"] as $obj) {
            $CssStr .= '
            .block-editor-block-styles button[aria-label="'.$obj["className"].'"] > span,
            .'.$obj["className"].' {
                '.$obj["prop"].'
            }
            ';
            if ($obj["beforeprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].':before {
                    '.$obj["beforeprop"].'
                }
                ';
            }
            if ($obj["afterprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].':after {
                    '.$obj["afterprop"].'
                }
                ';
            }
            if ($obj["beforeafterprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].':before,
                .'.$obj["className"].':after {
                    '.$obj["beforeafterprop"].'
                }
                ';
            }
            if ($obj["childprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].' > span{
                    '.$obj["childprop"].'
                }
                ';
            }
            if ($obj["childbeforeprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].' > span:before{
                    '.$obj["childbeforeprop"].'
                }
                ';
            }
            if ($obj["childafterprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].' > span:after{
                    '.$obj["childafterprop"].'
                }
                ';
            }
            if ($obj["childbeforeafterprop"] != '') {
                $CssStr .= '
                .'.$obj["className"].' > span:before,
                .'.$obj["className"].' > span:after{
                    '.$obj["childbeforeafterprop"].'
                }
                ';
            }
        }
        return $CssStr;
    }

    //管理画面用にまとめる
    public function SetAdminPageStyle(){
        if(!is_user_logged_in()) {
            return;
        }
        $CssStr = '';
        $CssStr .= self::makeOriginalStyleOnlyForAdmin ();
        $CssStr .= self::defineIconStyle();
        $CssStr .= self::DefineMarkerStyle();
        $CssStr .= self::DefineTitleDesign();

        $CssStr = str_replace("0.", ".", $CssStr);
        $CssStr = str_replace("  ", "", $CssStr);
        $CssStr = str_replace("\n", "", $CssStr);

        $cssurl = get_template_directory().$this->cssDir;
        exec('chmod 777 '.$cssurl);
        $CSSfile = fopen($cssurl, "w");
        fwrite($CSSfile, $CssStr);
        fclose($CSSfile);

        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <?php
    }
}
new AdminMenue();
?>