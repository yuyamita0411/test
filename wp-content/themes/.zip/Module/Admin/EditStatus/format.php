<?php
function show ($taxonomy, $term) {
    $catInfoArr = [];
    $checkarr = [];
    foreach (SubQuery::getAllCategory($taxonomy) as $eachCatObj) {
        if (!in_array($eachCatObj->slug, $checkarr)) {
            array_push($catInfoArr, $eachCatObj);
        }
        array_push($checkarr, $eachCatObj->slug);
    }
    $checkarr = array_unique($checkarr);
    ?>
    <div class="EditCatwrapper">
        <h1 class="wp-heading-inline"><?php echo $term; ?>の背景色、文字色の設定が行えます。</h1>
        <!-- setting area -->
        <div class="settingArea">
            <div class="EditCatColorSegment" style="margin-top:3rem;">
                <h2 class="">色合いの設定</h2>
                <div style="">
                    <?php foreach($catInfoArr as $Category): ?>
                    <h4 id="Cat<?php echo $Category->slug; ?>BackgroundColor" style="margin-bottom:5px;"><?php echo $term; ?><?php echo "'".$Category->name."'";?></h4>
                    <small></small>
                    <table>
                        <tr>
                            <td>背景色</td>
                            <td id="ColorLabelBackground<?php echo $Category->slug; ?>"><input type="text" name="colorText" class="SetCat<?php echo $Category->slug; ?>BackgroundPicker" ></td>
                            <td>文字色</td>
                            <td id="ColorLabelFont<?php echo $Category->slug; ?>"><input type="text" name="colorText" class="SetCat<?php echo $Category->slug; ?>FontPicker" ></td>
                        </tr>
                    </table>
                    <?php endforeach; ?>
                </div>
            </div>
            <div style="margin-top:3rem;">
                <div id="EditCatChangeButton" style="margin-top:.5rem;">change</div>
            </div>
        </div>
        <!-- setting area -->

        <!--- modal --->
        <div id="EditCatModal" class="EditCatModalClose">
            <div id="EditCatModalInner">
                <h2></h2>
                <div style="display:inline-block; width:100%; text-align: center;">
                    <div id="EditCatSendButton" style="margin-top:.5rem; cursor: pointer;">change</div>
                </div>
            </div>
        </div>
        <!--- modal --->
    </div>
    <div id="EditCatModalCover" class="EditCatModalCoverClose"></div>
    <script>
    jQuery(document).ready(($) => {
        (( $ ) => {
            var slugArrStr = "<?php foreach($checkarr as $slug) {echo $slug.',';} ?>",
            slugArr = slugArrStr.split(',').filter((s) => {return s != ''});

            slugArr.forEach((slug) => {
                $(`.SetCat${slug}BackgroundPicker`).wpColorPicker();
                $(`.SetCat${slug}FontPicker`).wpColorPicker();
            });
        })( jQuery );
    });
    var optionVal = {};
    const modalMsg = 'カテゴリー設定の変更を反映してもよろしいでしょうか？',
    modalCompleteMsg = 'カテゴリー設定の変更が完了しました！',
    validateMsg = '必須項目です',
    home_url = "<?php echo home_url();?>",
    Execute = (condition, fn1, fn2, fn3) => {
        if (condition) {
            if (fn1) { fn1(); }
            if (fn2) { fn2(); }
            if (fn3) { fn3(); }
        }
    },
    openModal = () => {
        document.getElementById('EditCatModal').classList.add('EditCatModalOpen');
        document.getElementById('EditCatModal').classList.remove('EditCatModalClose');
        document.getElementById('EditCatModalCover').classList.add('EditCatModalCoverOpen');
        document.getElementById('EditCatModalCover').classList.remove('EditCatModalCoverClose');
    },
    closeModal = () => {
        document.getElementById('EditCatModal').classList.remove('EditCatModalOpen');
        document.getElementById('EditCatModal').classList.add('EditCatModalClose');
        document.getElementById('EditCatModalCover').classList.remove('EditCatModalCoverOpen');
        document.getElementById('EditCatModalCover').classList.add('EditCatModalCoverClose');
        sendData = [];
    },
    getOption = (obj) => {
        return $. ajax(
            {
                url: home_url,
                data:{"rest_route":"/wp/custom/GetCatColor"},
                cache : false,
                async:false,
                type:'GET'
            }
        ).done((data) => {
            obj = data;
        }).responseJSON;
    }
    window.addEventListener('DOMContentLoaded', (e) => {
        optionVal = getOption(optionVal);
        optionVal.forEach((obj) => {
            var selector = '';
            var prop = '';
            if (obj.option_name.indexOf('-bg') != -1) {
                selector = `#ColorLabelBackground${obj.option_name.replace('-bg', '')} > div > button`;
                prop = `background:${obj.option_value};`;
            }
            if (obj.option_name.indexOf('-fontcolor') != -1) {
                selector = `#ColorLabelFont${obj.option_name.replace('-fontcolor', '')} > div > button`;
                prop = `background:${obj.option_value};`;
            }
            setTimeout(() => {
                document.querySelectorAll(selector)[0].setAttribute('style', prop);
            }, 10);
            
        });
        window.addEventListener('click', (obj) => {
            Execute(
                obj.target.id == 'EditCatChangeButton',
                () => {
                    openModal();
                    document.querySelectorAll('#EditCatModalInner > h2')[0].innerText = modalMsg;
                }
            );
            Execute(
                obj.target.id == 'EditCatModalCover',
                () => {
                    closeModal();
                    document.querySelectorAll('#EditCatModalInner > h2')[0].innerText = '';
                }
            );
            Execute(
                obj.target.id == 'EditCatSendButton',
                () => {
                    let senddata = {},
                    checkarr = [],
                    validationdata = {},
                    validateFlg = true;
                    senddata["rest_route"] = "/wp/custom/EditCatColor";
                    senddata["colorcodes"] = [];

                    document.querySelectorAll('td[id^="ColorLabelBackground"]').forEach((ob) => {
                        var catname = `${ob.id.replace('ColorLabelBackground', '')}-bg`;
                        var colorcode = ob.querySelectorAll('.wp-picker-container > button')[0].style.backgroundColor;
                        senddata.colorcodes.push({"catname":catname, "colorcode":colorcode});
                    });
                    document.querySelectorAll('td[id^="ColorLabelFont"]').forEach((ob) => {
                        var catname = `${ob.id.replace('ColorLabelFont', '')}-fontcolor`;
                        var colorcode = ob.querySelectorAll('.wp-picker-container > button')[0].style.backgroundColor;
                        senddata.colorcodes.push({"catname":catname, "colorcode":colorcode});
                    });
                    $. ajax(
                        {
                            url: home_url,
                            data:senddata,
                            type:'POST'
                        }
                    ).done((data) => {
                        document.querySelectorAll('#EditCatModalInner > h2')[0].innerText = modalCompleteMsg;
                        setTimeout(() => {
                            closeModal();
                            document.querySelectorAll('#EditCatModalInner > h2')[0].innerText = modalMsg;
                        }, 500);
                    });
                }
            );

        });
    });
    
    </script>
    <style>
        .EditCatwrapper{
            position:relative;
        }
        .Lpattern{
            position:relative;
            background:rgb(0, 0, 0, 0);
            color:rgb(0, 0, 0, 1);
        }
        .pattern-active{
            position:relative;
            background:rgb(252, 185, 0);
            color:#ffff;
        }
        .Lpattern,
        .pattern-active{
            transition:all .25s;
        }
        #EditCatSendButton,
        #EditCatChangeButton{
            cursor:pointer;
            clear:both;
            min-width: 5rem;
            text-align: center;
            border-radius: 3px;
            position: relative;
            display: inline-block;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            max-width: 220px;
            padding: 10px 25px;
            color: #FFFF;
            transition: 0.3s ease-in-out;
            font-weight: 600;
            border-radius: 50px;
        }
        #EditCatChangeButton{
            float:left;
        }
        #EditCatSendButton,
        #EditCatChangeButton:hover{
            box-shadow: 0 0 0;
            transform: translate(2px, 2px);
        }
        #EditCatSendButton:after,
        #EditCatChangeButton:after{
            position: absolute;
            top: 50%;
            right: 20px;
            transition: 0.2s ease-in-out;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            transform: translateY(-50%);
        }

        #EditCatSendButton{
            background: #3b8df7;
            box-shadow: 3px 3px 0 #3b8df7;
        }
        #EditCatChangeButton{
            background: #ed930b;
            box-shadow: 3px 3px 0 #ed8e00;
        }
        .settingArea{
            display:inline-block;
        }
        .settingArea{
            min-width:5rem;
        }
        .settingArea{
            float:left;
        }
        #EditCatModalCover{
            cursor:pointer;
        }
        #EditCatModal{
            top:30vh;
            left:20%;
        }
        #EditCatModalCover{
            top:0%;
        }
        #EditCatModalCover{
            left:0%;
        }
        #EditCatModalCover{
            position:fixed;
        }
        #EditCatModal{
            position:fixed;
        }
        .EditCatModalOpen,
        .EditCatModalCoverOpen{
            opacity:1;
        }
        .EditCatModalOpen{
            z-index: 2;
        }
        .EditCatModalCoverOpen{
            z-index: 1;
        }

        .EditCatModalClose,
        .EditCatModalCoverClose{
            opacity:0;
            z-index: -1;
        }
        .EditCatModalOpen,
        .EditCatModalCoverOpen,
        .EditCatModalClose,
        .EditCatModalCoverClose{
            transition: opacity .5s;
        }

        #EditCatModalCover{
            width:100vw;
            height:100vh;
        }
        #EditCatModal{
            width:80%;
            display:inline-block;
        }
        #EditCatModalInner{
            width:80%;
            margin:0 auto;
            display: inline-block;
            padding:1rem;
        }
        #EditCatModalCover{
            background:rgb(0, 0, 0, .3);
        }
        #EditCatModalInner{
            background:#ffff;
        }
        .wp-picker-holder{
            position:absolute;
            z-index: 1;
        }
    </style>
    <?php
}
?>