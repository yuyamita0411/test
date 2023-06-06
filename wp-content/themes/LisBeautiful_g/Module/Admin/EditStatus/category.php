<?php
class EditCategory {
    public function __construct() {
        add_action('admin_menu', array( $this,'addCategoryMenu'));
        add_action('admin_menu', array( $this,'addTagMenu'));
    }
    public function addCategoryMenu() {
        add_submenu_page('post-new.php', 'カテゴリーのイメージカラーなどを設定頂けます', 'カテゴリ設定', 'manage_options', 'setCategory', array($this, 'addCategorySetting'), 3);
    }
    public function addCategorySetting() {
        require get_template_directory() . '/Module/Admin/EditStatus/format.php';
        ?>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
        <?php
        show('category', 'カテゴリー');
    }

    public function addTagMenu() {
        add_submenu_page('post-new.php', 'タグのイメージカラーなどを設定頂けます', 'タグ設定', 'manage_options', 'setTag', array($this, 'addTagSetting'), 6);
    }
    public function addTagSetting() {
        require get_template_directory() . '/Module/Admin/EditStatus/format.php';
        ?>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
        <?php
        show('post_tag', 'タグ');
    }
}
new EditCategory();
?>