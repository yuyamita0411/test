<?php

namespace SANGO;

class Status {
  private $status = array();
  public function init() {
    add_action('template_redirect', [$this, 'set_status']);
    add_action('admin_init', [$this, 'set_status']);
  }

  public function set_status() {
    $this->status = array(
      'is_mobile' => wp_is_mobile(),
      'is_category_top' => is_category() && !is_paged(),
      'is_top' => (is_home() || is_front_page()),
      'is_admin' => is_admin(),
      'is_login' => is_user_logged_in(),
      'is_paged' => is_paged(),
    );
  }

  public function get_status() {
    return $this->status;
  }
}
