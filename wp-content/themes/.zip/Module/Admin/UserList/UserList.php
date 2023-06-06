<?php
    class UserList {
        public function __construct() {
            add_action( 'user_contactmethods', array( $this,'add_column_headers' ) , 10, 1 );

            add_action( 'admin_print_scripts', array( $this,'my_admin_scripts' ) );
            add_action( 'show_user_profile', array( $this,'add_avatar_background_img' ) );
            add_action( 'edit_user_profile', array( $this,'add_avatar_background_img' ) );
        }

        public function add_column_headers( $wb ) {
            $wb['instagram'] = 'Instagram';
            $wb['line'] = 'LINE';
            $wb['facebook'] = 'Facebook';
            $wb['twitter'] = 'Twitter';
            $wb['feedly'] = 'Feedly';
            $wb['youtube'] = 'YouTube';
            $wb['profurl'] = 'profurl';
            $wb['backgroundurl'] = 'backgroundurl';
            return $wb;
        }

        public function my_admin_scripts() {
            //メディアアップローダの javascript API
            wp_enqueue_media();
        } 
        public function add_avatar_background_img() {
            self::generate_upload_image_tag('profurl', get_the_author_meta("profurl", wp_get_current_user()->ID), 'プロフィール画像');
            self::generate_upload_image_tag('backgroundurl', get_the_author_meta("backgroundurl", wp_get_current_user()->ID), '背景画像');
        }

        public function generate_upload_image_tag($name, $value, $menuName){
            ?>
            <h2><?php echo $menuName; ?>アップロード</h2>
            <table class="form-table">
                <tr>
                    <th><?php echo $menuName; ?>を<br>アップロード</th>
                    <td>
                        <div id="<?php echo $name; ?>_thumbnail" class="uploded-thumbnail"
                        style='
                        padding:.5em;
                        width:200px;
                        height:200px;
                        '
                        >
                            <?php if ($value): ?>
                            <img src="<?php echo $value; ?>" alt="選択中の画像"
                            style="
                            display:inline-block;
                            width:100%;
                            ">
                            <?php endif ?>
                        </div>
                        <input type="button" name="<?php echo $name; ?>_slect" value="画像をアップロード"
                        style="
                        color: #2271b1;
                        border-color: #2271b1;
                        background: #f6f7f7;
                        vertical-align: top;
                        display: inline-block;
                        text-decoration: none;
                        font-size: 13px;
                        line-height: 2.15384615;
                        min-height: 30px;
                        margin: 0;
                        padding: 0 10px;
                        cursor: pointer;
                        border-width: 1px;
                        border-style: solid;
                        -webkit-appearance: none;
                        border-radius: 3px;
                        white-space: nowrap;
                        box-sizing: border-box;
                        "
                        />
                        <input type="button" name="<?php echo $name; ?>_clear" value="画像を削除"
                        style="
                        color: #2271b1;
                        border-color: #2271b1;
                        background: #f6f7f7;
                        vertical-align: top;
                        display: inline-block;
                        text-decoration: none;
                        font-size: 13px;
                        line-height: 2.15384615;
                        min-height: 30px;
                        margin: 0;
                        padding: 0 10px;
                        cursor: pointer;
                        border-width: 1px;
                        border-style: solid;
                        -webkit-appearance: none;
                        border-radius: 3px;
                        white-space: nowrap;
                        box-sizing: border-box;
                        "
                        />
                    </td>
                </tr>
            </table>
            <style>
                .user-profurl-wrap {
                    display:none;
                }
                .user-backgroundurl-wrap {
                    display:none;
                }
            </style>
            <script type="text/javascript">
            (function ($) {
                var custom_uploader;
                $("input:button[name=<?php echo $name; ?>_slect]").click(function(e) {
                    e.preventDefault();
                    if (custom_uploader) {
                        custom_uploader.open();
                        return;
                    }
                    custom_uploader = wp.media({
                        title: "画像を選択してください",
                        library: {
                            type: "image"
                        },
                        button: {
                            text: "画像の選択"
                        },
                        multiple: false
                    });
                    custom_uploader.on("select", function() {
                        var images = custom_uploader.state().get("selection");
                        images.each(function(file){
                            $("input:text[name=<?php echo $name; ?>]").val("");
                            $("#<?php echo $name; ?>_thumbnail").empty();
                            $("input:text[name=<?php echo $name; ?>]").val(file.attributes.sizes.full.url);
                            $("#<?php echo $name; ?>_thumbnail").append('<img src="'+file.attributes.sizes.full.url+'" style="display:inline-block; width:100%;"/>');
                        });
                    });
                    custom_uploader.open();
                });

                $("input:button[name=<?php echo $name; ?>_clear]").click(function() {
                    $("input:text[name=<?php echo $name; ?>]").val("");
                    $("#<?php echo $name; ?>_thumbnail").empty();
                });
            })(jQuery);
            </script>
            <?php
          }
    }
    new UserList();
?>