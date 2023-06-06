<?php

use SANGO\App;

App::get('builder')->addSection('🛠 基本設定', 'basic', ['priority' => 0]);

App::get('builder')->addConfig('basic', [
  'name' => 'basic_title0',
  'value' => '',
  'title' => 'WordPress基本設定',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('basic', [
  'name' => 'sng_use_legacy_widget',
  'value' => get_option('sng_use_legacy_widget', ''),
  'title' => 'レガシーウィジェットを利用',
  'type' => 'checkbox',
  'description' => 'ブロックウィジェットではなく従来のレガシーウィジェットを使いたい場合はチェックを入れてください。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'sng_disable_comments',
  'value' => get_theme_mod('sng_disable_comments', ''),
  'title' => 'コメントを表示しない',
  'type' => 'checkbox',
  'updateMethod' => 'theme_mod',
  'description' => '記事ページや固定ページでコメントを表示しない場合はチェックを入れてください。パフォーマンス改善にもつながります。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'basic_title1',
  'value' => '',
  'title' => 'Google Analytics',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('basic', [
  'name' => 'ga_code',
  'value' => get_option('ga_code', ''),
  'title' => 'トラッキングID',
  'type' => 'text',
  'description' => 'トラッキングID（G- もしくは UA- から始まるコード）を貼り付けてください。プラグインで設定済の場合は空欄のままにしましょう。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'gtagjs',
  'value' => get_option('gtagjs', ''),
  'title' => 'gtag.jsを使う',
  'type' => 'checkbox',
  'description' => 'アクセス解析にgtag.jsを使う場合はチェックしてください。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'basic_title1',
  'value' => '',
  'title' => 'Googleサーチコンソール',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('basic', [
  'name' => 'google_search_verification_code',
  'value' => get_theme_mod('google_search_verification_code', ''),
  'title' => '認証コード',
  'type' => 'text',
  'updateMethod' => 'theme_mod',
  'description' => 'Googleサーチコンソールで取得した認証コードを入力してください。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'basic_title2',
  'value' => '',
  'title' => 'SEO設定',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('basic', [
  'name' => 'home_description',
  'value' => get_option('home_description', ''),
  'title' => 'トップページの説明',
  'type' => 'textarea',
  'description' => 'トップページのメタデスクリプションとして検索エンジンに伝わります。ただし、トップページを固定ページで作成している場合は固定ページの設定が反映されるのでご注意ください。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'set_home_ogp_image',
  'value' => get_option('set_home_ogp_image', ''),
  'title' => 'トップページのOGP画像',
  'type' => 'image',
  'preview' => get_option('set_home_ogp_image', ''),
  'description' => 'SNSでトップページやアーカイブページをシェアされた際にOGP画像として使用されます。選択されていない場合、デフォルトのサムネイル画像がOGP画像にあてられます。ただし、トップページを固定ページで作成している場合は固定ページの設定が反映されるのでご注意ください。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'basic_title3',
  'value' => '',
  'title' => 'パブリッシャー設定',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('basic', [
  'name' => 'publisher_type',
  'value' => get_option('publisher_type', 'Organization'),
  'title' => '発行組織タイプ',
  'type' => 'select',
  'choices' => [
    'Person' => '個人',
    'Organization' => '組織',
  ],
  'description' => 'このサイトの運営者が個人か組織かを選択してください。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'publisher_name',
  'value' => get_option('publisher_name', ''),
  'title' => '発行組織名',
  'type' => 'text',
  'description' => 'パブリッシャー情報は構造化データで使用されます。個人の場合は、サイト名をそのまま発行組織名にしても良いでしょう。'
]);

App::get('builder')->addConfig('basic', [
  'name' => 'publisher_img',
  'value' => get_option('publisher_img', ''),
  'title' => '発行組織を表す画像（ロゴなど）',
  'type' => 'image',
  'description' => 'サイトのロゴ画像と同じものを使っても構いません。',
  'preview' => get_option('publisher_img', '')
]);

App::get('builder')->addConfig('basic', [
  'name' => 'rights_reserved',
  'value' => get_option('rights_reserved', ''),
  'title' => '著作権者名',
  'type' => 'text',
  'description' => 'ページ最下部に「◯◯ All rights reserved」という形で表示されます。'
]);
