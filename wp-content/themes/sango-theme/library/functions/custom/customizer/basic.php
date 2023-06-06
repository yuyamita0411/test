<?php
use SANGO\App;

/*********************
 * サイトの基本設定
 *********************/
App::get('customizer_builder')->addSection('🛠 サイトの基本設定', 'panel_basic_setting', [
  'priority' => 1
]);
App::get('customizer_builder')->addSection('基本情報とロゴ画像', 'title_tagline', [
  'priority' => 1,
  'parent' => 'panel_basic_setting'
]);
App::get('customizer_builder')->addConfig('title_tagline', [
  'name' => 'logo_image_upload',
  'title' => 'ロゴ画像を登録',
  'type' => 'image',
  'updateMethod' => 'option',
  'description' => 'WordPressではSVG画像の登録がセキュリティの理由から標準では許可されていません。SVG画像を登録したい場合「<a href="https://ja.wordpress.org/plugins/safe-svg/" target="_blank">Safe SVG</a>」等のプラグインを一時的に使用してアップロードすることをおすすめします。'
]);
App::get('customizer_builder')->addConfig('title_tagline', [
  'name' => 'logo_image_media_upload',
  'title' => 'ロゴ画像を登録',
  'type' => 'media',
  'updateMethod' => 'option',
  'description' => '<small>メディアを利用してロゴ画像を表示します。上記の設定でもロゴ画像を設定できますが、メディアでは画像のサイズを表示できるためCLS対策としてこちらにロゴを設定することをお勧めします。</small>'
]);

App::get('customizer_builder')->addConfig('title_tagline', [
  'name' => 'onlylogo_checkbox',
  'updateMethod' => 'option',
  'title' => 'ロゴ画像だけを表示（文字を非表示に）',
  'type' => 'checkbox'
]);

App::get('customizer_builder')->addConfig('title_tagline', [
  'name' => 'center_logo_checkbox',
  'updateMethod' => 'option',
  'title' => '大画面表示時にもロゴを中央寄せ',
  'type' => 'checkbox'
]);

App::get('customizer_builder')->addConfig('title_tagline', [
  'name' => 'header_height',
  'title' => 'ヘッダーの高さ',
  'updateMethod' => 'option',
  'transport' => 'postMessage',
  'description' => 'ヘッダーの高さに比例してロゴ画像の大きさも変化します（ロゴを中央寄せしていない場合のみ有効）',
  'type' => 'text',
  'default' => 62
]);

/*********************
 * サムネイル画像
*********************/
App::get('customizer_builder')->addSection('デフォルトのサムネイル画像', 'default_thumbnail', [
  'priority' => 2,
  'parent' => 'panel_basic_setting',
  'transport' => 'postMessage',
]);
App::get('customizer_builder')->addConfig('default_thumbnail', [
  'name' => 'thumb_upload',
  'updateMethod' => 'option',
  'title' => '記事のアイキャッチ画像',
  'description' => '記事にアイキャッチ画像が登録されていないとき等に使用される画像です。必ず幅600px以上、高さ310px以上の画像を選びましょう（これ以下のサイズにすると上手く表示されない場合があります）。<br/><small>正方形（150x150px）や、横長（520x300px）にトリミングされて使用されることがあります。</small>',
  'type' => 'image'
]);
App::get('customizer_builder')->addConfig('default_thumbnail', [
  'name' => 'show_default_thumb_on_widget_posts',
  'updateMethod' => 'option',
  'title' => 'ウィジェットでデフォルトのサムネイル画像を使用する',
  'description' => '<small>チェックを入れると「最新の投稿」「人気記事」のウィジェットで、アイキャッチ画像が登録されていない記事に対してデフォルトのサムネイル画像が表示されるようになります。</small>',
  'type' => 'checkbox',
  'transport' => 'postMessage',
]);

App::get('customizer_builder')->addSection('背景画像', 'background_image', [
  'priority' => 3,
  'parent' => 'panel_basic_setting',
  'description' => 'こちらはSANGO独自の機能ではなく、WordPressの標準機能です。背景に画像を利用したい場合にのみ利用してください。',
]);
