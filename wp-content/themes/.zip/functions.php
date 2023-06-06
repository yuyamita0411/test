<?php
require get_template_directory() . '/Module/language/wplang.php';//言語関係
require get_template_directory() . '/Module/widgets.php';//ウィジェット関係
require get_template_directory() . '/Module/Settings.php';//設定関係
require get_template_directory() . '/Module/Values.php';//タイトル・サブクエリ関係
require get_template_directory() . '/Module/StyleScript.php';//デザイン関係

require get_template_directory() . '/Module/GenerateHtml.php';//htmlを生成するクラス
require get_template_directory() . '/Module/motion/fontanimation.php';//フォントのアニメーションのファイル
require get_template_directory() . '/Module/motion/elementanimation.php';//要素のアニメーションのファイル
require get_template_directory() . '/Module/motion/fontanimation2.php';//複数フォントのアニメーションのファイル
require get_template_directory() . '/Module/motion/FontTouchAnimation.php';//複数フォントのアニメーションのファイル

//外観カスタマイズの項目関係
require get_template_directory() . '/Module/widgetsmenu.php'; //タイトル関係
require get_template_directory() . '/Module/Customizer/CustomizeFont.php'; //フォント関係
require get_template_directory() . '/Module/Customizer/CustomizeHeader.php';//ヘッダー関係
require get_template_directory() . '/Module/Customizer/CustomizeHumburger.php';//ハンバーガーメニュー関係
require get_template_directory() . '/Module/Customizer/CustomizeBreadCrumb.php';//ぱんくずリスト関係

require get_template_directory() . '/Module/Customizer/CustomizeMainColumn.php'; //メインカラム関係
require get_template_directory() . '/Module/Customizer/maincolumn/CategoryArticle.php';
require get_template_directory() . '/Module/Customizer/maincolumn/CategoryLink.php';
require get_template_directory() . '/Module/Customizer/maincolumn/NewestArticleArea.php';
require get_template_directory() . '/Module/Customizer/maincolumn/PopularArticleArea.php';
require get_template_directory() . '/Module/Customizer/maincolumn/Authoinfo.php';

require get_template_directory() . '/Module/Customizer/CustomizeSidebar.php';//サイドバー関係

require get_template_directory() . '/Module/Customizer/CustomizeSideColumn.php';//サイドカラム関係
require get_template_directory() . '/Module/Customizer/sidecolumn/CategoryArticle.php';
require get_template_directory() . '/Module/Customizer/sidecolumn/CategoryLink.php';
require get_template_directory() . '/Module/Customizer/sidecolumn/NewestArticleArea.php';
require get_template_directory() . '/Module/Customizer/sidecolumn/PopularArticleArea.php';

require get_template_directory() . '/Module/Customizer/CustomizeFooter.php';//フッター関係
require get_template_directory() . '/Module/Customizer/CustomizePageLayout.php'; //テンプレート関係
require get_template_directory() . '/Module/Customizer/CustomizeAnalyticsTag.php';//計測タグ関連
require get_template_directory() . '/Module/Customizer/CustomizeOtherBasic.php';//その他基本事項
require get_template_directory() . '/Module/SEOSetting.php';//SEO関連
require get_template_directory() . '/Module/StyleFunction/IntegrateCss.php';//CSS関係
require get_template_directory() . '/Module/API/RestApi.php';//API関係

if (is_user_logged_in()) {
    require get_template_directory() . '/Module/Admin/AdminMenue.php';//投稿画面のメニューやブロックなど
    require get_template_directory() . '/Module/Admin/EasyDesign/EasyDesign.php';//管理画面の左サイドバー
    require get_template_directory() . '/Module/Admin/EditStatus/category.php';//管理画面の左サイドバー
    require get_template_directory() . '/Module/Admin/UserList/UserList.php';//ユーザー一覧
}
/*
↓を参考にwordpressでコンポーネントを使えるようにする。
https://devsakaso.com/wordpress-gutenberg-customize-block-tool-bar
https://xov.jp/e/343/
https://shimotsuki.wwwxyz.jp/20200327-539
https://elearn.jp/wpman/column/c20211119_01.html

有望
https://technote.space/posts/wpxml-add-dropdown-to-richtext-toolbar
*/

/*
管理画面の左サイドバーに関して
https://qiita.com/konweb/items/5483efbe87087eff5cc8
*/
//security

/*
セキュリティに関して
https://robertmarshall.dev/blog/wordpress-rest-api-cors-issues/
*/

/*
https://zenn.dev/ianchen0419/articles/5ecc0006db7f4a
*/
/*
https://zooan.net/wordpress-gutenberg-customblock-link/

管理画面のコンポーネントの操作
https://digipress.info/wordpress/tips/add-extra-classes-styles-to-existing-blocks/

吹き出しスタイル
https://celtislab.net/archives/20200121/wp-media-text-fukidashi-style/

https://epiph.yt/blog/2022/verlinkbare-spalten-cover-und-gruppen-bloecke/

https://www.liip.ch/en/blog/how-to-extend-existing-gutenberg-blocks-in-wordpress

richtext のenterキーを押した時など　プロパティについて解説している。
https://nishy-software.com/ja/dev-sw/wpf-textbox-enter-behavior-1/

ブロックリストについて
https://show-web.jp/?p=1173

アーカイブページのデザイン
https://webrent.xsrv.jp/swell-archive-page-design
*/
?>