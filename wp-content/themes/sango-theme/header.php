<?php

use SANGO\App;

$html = "";
$contentBlockId = get_theme_mod('sng_header_content_block', false);
$postId = get_the_ID();
$status = \SANGO\App::get('status')->get_status();
if ($status['is_category_top']) {
  $cat_fields = sng_get_cat_fields();
  $postId = isset($cat_fields['category_page']) ? $cat_fields['category_page'] : '';
}
$no_header = get_post_meta($postId, 'sng_content_no_header', true);

if ($contentBlockId) {
    $contentBlock = App::get('content-block');
    $html = $contentBlock->get_content_block($contentBlockId, '', false);
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta name="msapplication-TileColor" content="<?php echo get_theme_mod( 'main_color', '#1C81E6');?>">
  <meta name="theme-color" content="<?php echo get_theme_mod( 'main_color', '#1C81E6');?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); // 削除禁止 ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="container">
    <?php if ($no_header) {

    } else if ($html) {
      echo $html;
    } else { 
    ?>
      <header class="header<?php if(get_option('center_logo_checkbox')) echo ' header--center'; ?>">
        <?php get_template_part('parts/header/nav-drawer'); // headerナビドロワー（モバイル） ?>
        <?php get_template_part('parts/header/inner'); // headerタグの中身 ?>
      </header>
      <?php get_template_part('parts/header/info-bar'); ?>
    <?php } ?>
