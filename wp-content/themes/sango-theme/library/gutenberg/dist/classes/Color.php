<?php

namespace SangoBlocks;

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

class Color
{
  private $table_name = 'sgb_color';

  public function init() {}

  public function createDb() {
    global $wpdb;
    $table_name = $wpdb->prefix . $this->table_name;
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name(
      color_id BIGINT(20) NOT NULL AUTO_INCREMENT,
      color_name VARCHAR(255) NOT NULL,
      color_code VARCHAR(255),
      PRIMARY KEY (color_id)
    ) $charset_collate";
    dbDelta($sql);
  }

  public function get() {
    global $wpdb;
    $table_name = $wpdb->prefix . $this->table_name;
    $results = $wpdb->get_results("SELECT *
      FROM $table_name
    ");
    if ($results) {
      return $results;
    }
    return array();
  }

  public function remove($id) {
    global $wpdb;
    $table_name = $wpdb->prefix . $this->table_name;
    $wpdb->query(
    "DELETE FROM $table_name
      WHERE color_id = \"$id\"
    ");
  }

  public function create($data) {
    global $wpdb;
    $table_name = $wpdb->prefix . $this->table_name;

    $wpdb->insert($table_name, array(
      "color_name" => $data['name'],
      "color_code" => $data["code"],
    ));
  }

  public function update($data) {
    global $wpdb;
    $table_name = $wpdb->prefix . $this->table_name;
    $wpdb->update($table_name,
      array(
        "color_name" => $data['name'],
        "color_code" => $data["code"],
      ),
      array(
        "color_id" => $data['id']
      )
    );
  }

  public function import($data, $updateIfExist) {
    $items = $this->get();
    foreach ($data as $item) {
      $name = $item["color_name"];
      $found_key = array_search($name, array_column($items, 'color_name'));
      if ($found_key === false) {
        $this->create([
          "name" => $item["color_name"],
          "code" => $item["color_code"],
        ]);
      } else if ($updateIfExist) {
        $id = $items[$found_key]->color_id;
        $this->update([
          "id"   => $id,
          "name" => $item["color_name"],
          "code" => $item["color_code"],
        ]);
      }
    }
  }

  public function get_default_editor_color()
  {
    $custom_colors = array(
      array(
        'name' => 'メインカラー',
        'slug' => sanitize_title('sango_main'),
        'color' => 'var(--sgb-main-color)',
      ),
      array(
        'name' => 'パステルカラー',
        'slug' => sanitize_title('sango_pastel'),
        'color' => 'var(--sgb-pastel-color)',
      ),
      array(
        'name' => 'アクセントカラー',
        'slug' => sanitize_title('sango_accent'),
        'color' => 'var(--sgb-accent-color)',
      ),
      array(
        'name' => '青',
        'slug' => sanitize_title('sango_blue'),
        'color' => '#009EF3',
      ),
      array(
        'name' => 'オレンジ',
        'slug' => sanitize_title('sango_orange'),
        'color' => '#ffb36b',
      ),
      array(
        'name' => '赤',
        'slug' => sanitize_title('sango_red'),
        'color' => '#f88080',
      ),
      array(
        'name' => '緑',
        'slug' => sanitize_title('sango_green'),
        'color' => '#90d581',
      ),
      array(
        'name'  => '黒',
        'slug' => sanitize_title('sango_black'),
        'color' => '#333',
      ),
      array(
        'name'  => 'グレイ',
        'slug' => sanitize_title('sango_gray'),
        'color' => 'gray',
      ),
      array(
        'name'  => 'シルバー',
        'slug' => sanitize_title('sango_silver'),
        'color' => 'whitesmoke',
      ),
      array(
        'name' => '薄い青',
        'slug' => sanitize_title('sango_light_blue'),
        'color' => '#b4e0fa',
      ),
      array(
        'name' => '薄い赤',
        'slug' => sanitize_title('sango_light_red'),
        'color' => '#ffebeb',
      ),
      array(
        'name' => '薄いオレンジ',
        'slug' => sanitize_title('sango_light_orange'),
        'color' => '#fff9e6',
      ),
    );

    return $custom_colors;
  }

  public function get_editor_color() {
    $palette = $this->get_default_editor_color();
    if (!empty( $palette )) {
      $colors = $this->get();
      $custom_palette = array_map(function($item) {
        return array(
          'name' => '【カスタム】'. $item->color_name,
          'color' => $item->color_code,
          'slug' => 'custom-'. $item->color_id
        );
      }, $colors);
      $palette = array_merge( $palette, $custom_palette );
      return $palette;
    }
  }

  public function get_editor_front_global_vars() {
    $custom_css = App::get('css');
    $main_color = get_theme_mod('main_color', '#009EF3');
    $pastel_color = get_theme_mod('pastel_color', '#b4e0fa');
    $accent_color = get_theme_mod('accent_color', '#ffb36b');
    $css = "
      :root {
        --sgb-main-color: {$main_color};
        --sgb-pastel-color: {$pastel_color};
        --sgb-accent-color: {$accent_color};
        --wp--preset--color--sango-main: var(--sgb-main-color);
        --wp--preset--color--sango-pastel: var(--sgb-pastel-color);
        --wp--preset--color--sango-accent: var(--sgb-accent-color);
      }
    ";
    return $custom_css->minify_css($css);
  }
}
