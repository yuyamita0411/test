<?php
/**
 * REST API
 */

use SANGO\App;
use SangoBlocks\App as SangoBlocksApp;

App::get('rest')->register([
  'path' => 'migrate',
  'methods' => 'POST',
  'only_login' => true,
  'callback' => function($req) {
    SangoBlocksApp::get('preset')->migrate();
    SangoBlocksApp::get('preset')->migrate2();
    return [
      'ok' => true
    ];
  }
]);
