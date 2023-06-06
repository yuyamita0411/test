<?php
class EasyDesign{
    public function __construct() {
        add_action('admin_menu', array( $this,'add_my_submenu_page'));
    }

    // カスタムフィールドの値を保存
    public function add_my_submenu_page() {
        $slug = 'easyDesign';
        add_menu_page( '簡単デザイン設定' , '簡単デザイン設定' , 'manage_options' , $slug, array($this, 'easyDesign'), get_theme_file_uri('/img/design_icon.png'), 30 );
    }

    public function easyDesign(){
        //set_theme_mod('HWrpBG_setting', 'pink'); みたいな感じで値を変える
        $HTMLstr = file_get_contents(get_template_directory().'/Module/Admin/EasyDesign/htmlfile/admin.html');
        echo $HTMLstr;
        ?>
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
        <script>
            var layoutPattern = 0;
            var optionVal = {};
            const modalMsg = 'デザインの変更を反映してもよろしいでしょうか？',
            modalCompleteMsg = 'デザインの設定が完了しました！',
            validateMsg = '必須項目です',
            home_url = "<?php echo home_url();?>",
           getOption = (obj) => {
                return $. ajax(
                    {
                        url: home_url,
                        data:{"rest_route":"/wp/custom/getEasyDesignProp"},
                        cache : false,
                        async:false,
                        type:'GET'
                    }
                ).done((data) => {
                    obj = data;
                }).responseJSON;
            },
            Execute = (condition, fn1, fn2, fn3) => {
                if (condition) {
                    if (fn1) { fn1(); }
                    if (fn2) { fn2(); }
                    if (fn3) { fn3(); }
                }
            },
            removeClassByPreg = (selector, compare, remove) => {
                if (!document.querySelectorAll(selector)) {
                    return;
                }
                document.querySelectorAll(selector).forEach((obj) => {
                    if (obj.className != compare) {
                        obj.classList.remove(remove);
                    }
                });
            },
            openModal = () => {
                document.getElementById('easyDesigModal').classList.add('easyDesigModalOpen');
                document.getElementById('easyDesigModal').classList.remove('easyDesigModalClose');
                document.getElementById('easyDesigModalCover').classList.add('easyDesigModalCoverOpen');
                document.getElementById('easyDesigModalCover').classList.remove('easyDesigModalCoverClose');
            },
            closeModal = () => {
                document.getElementById('easyDesigModal').classList.remove('easyDesigModalOpen');
                document.getElementById('easyDesigModal').classList.add('easyDesigModalClose');
                document.getElementById('easyDesigModalCover').classList.remove('easyDesigModalCoverOpen');
                document.getElementById('easyDesigModalCover').classList.add('easyDesigModalCoverClose');
            }

            window.addEventListener('DOMContentLoaded', (e) => {
                //wp_option value when you open the browser
                optionVal = getOption(optionVal);
                setTimeout(() => {
                    $(`#BaseColorWrapper > div > button`)[0].style.backgroundColor = optionVal.SetBaseColor;
                    $(`#MainColorWrapper > div > button`)[0].style.backgroundColor = optionVal.SetMainColor;
                    $(`#AccentColorWrapper > div > button`)[0].style.backgroundColor = optionVal.SetAccentColor;
                    document.querySelectorAll("[class^='Lpattern']").forEach((obj) => {
                        if (obj.dataset.pattern == optionVal.Format) {
                            obj.classList.add('pattern-active');
                        }
                    });
                }, 10);

                e.target.addEventListener('click', (E)=>{
                    Execute(
                        E.target.className.indexOf('Lpattern') != -1,
                        () => {E.target.classList.add('pattern-active')},
                        () => {removeClassByPreg("[class^='Lpattern']", E.target.className, 'pattern-active')},
                        () => {layoutPattern = E.target.dataset.pattern}
                    );

                    Execute(
                        E.target.id == 'easyDesignChangeButton',
                        () => {
                            openModal();
                            document.querySelectorAll('#easyDesigModalInner > h2')[0].innerText = modalMsg;
                        }
                    );
                    Execute(
                        E.target.id == 'easyDesigModalCover',
                        () => {
                            closeModal();
                        }
                    );
                    Execute(
                        E.target.id == 'easyDesignSendButton',
                        () => {
                            $('.easyDesignLayoutSegment > h2')[0].nextElementSibling.innerText = '';
                            $('.easyDesignLayoutSegment > h2')[0].nextElementSibling.removeAttribute('style');
                            if (layoutPattern == 0) {
                                $('.easyDesignLayoutSegment > h2')[0].nextElementSibling.innerText = validateMsg;
                                $('.easyDesignLayoutSegment > h2')[0].nextElementSibling.setAttribute('style', 'color:red;');
                            }
                            let senddata = {},
                            checkarr = [],
                            validationdata = {},
                            validateFlg = true;
                            senddata["rest_route"] = "/wp/custom/setEasyDesignPattern";
                            senddata["Format"] = layoutPattern;
                            ["BaseColor",
                            "MainColor",
                            "AccentColor"].forEach((selector) => {
                                var bgcolor = $(`#${selector}Wrapper > div > button`)[0].style.backgroundColor;
                                senddata[`Set${selector}`] = bgcolor;
                                validationdata[`#Set${selector}`] = bgcolor;
                                checkarr.push(bgcolor);
                            });

                            if (
                                checkarr.indexOf("") != -1 ||
                                checkarr.indexOf(undefined) != -1 ||
                                checkarr.indexOf(null) != -1) {
                                for( key in validationdata ) {
                                    $(key)[0].nextElementSibling.innerText = '';
                                    $(key)[0].nextElementSibling.removeAttribute('style');
                                    if (validationdata[key] == '' || validationdata[key] == undefined) {
                                        validateFlg = false;
                                        $(key)[0].nextElementSibling.innerText = validateMsg;
                                        $(key)[0].nextElementSibling.setAttribute('style', 'color:red;');
                                    }
                                }
                            }
                            if (validateFlg != true) {
                                return;
                            }
                            $. ajax(
                                {
                                    url: home_url,
                                    data:senddata,
                                    type:'GET'
                                }
                            ).done((data) => {
                                document.querySelectorAll('#easyDesigModalInner > h2')[0].innerText = modalCompleteMsg;
                                setTimeout(() => {
                                    closeModal();
                                    document.querySelectorAll('#easyDesigModalInner > h2')[0].innerText = modalMsg;
                                }, 500);
                            });
                        }
                    );
                });
            });
        </script>
        <?php
    }
}
new EasyDesign();
?>