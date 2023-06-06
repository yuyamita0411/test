<?php

use SANGO\App;
use SangoBlocks\App as SangoBlocksApp;

App::get('builder')->addSection('🗂️ データ管理', 'export', ['priority' => 9]);

App::get('builder')->addConfig('export', [
  'name' => 'export_title0',
  'value' => '',
  'title' => 'マイグレーション',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('export', [
  'name' => 'sng_export',
  'title' => 'データのマイグレーション',
  'type' => 'migrate'
]);

App::get('builder')->addConfig('export', [
  'name' => 'export_title1',
  'value' => '',
  'title' => 'データのエクスポート',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('export', [
  'name' => 'sng_export',
  'title' => 'データのエクスポート',
  'type' => 'export'
]);

App::get('builder')->addConfig('export', [
  'name' => 'export_title2',
  'value' => '',
  'title' => 'データのインポート',
  'type' => 'title',
  'description' => ''
]);

App::get('builder')->addConfig('export', [
  'name' => 'sng_import',
  'title' => 'データのインポート',
  'type' => 'import',
]);
