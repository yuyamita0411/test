<?php
$HumburgerButtonCommonJs = "
window.addEventListener('DOMContentLoaded', () => {
    if(!document.getElementById('hbmenuwraapper') || !document.getElementById('hbuttoncover')){
        return;
    }
    window.addEventListener('click', (e) => {
/**ハンバーガーメニューの動き */
        /*開く時*/
        if(e.target.id == 'hbuttoncover'){
            const hbuttonwrapper = document.getElementById('hbuttonwrapper'),
            hbmenuwraapper = document.getElementById('hbmenuwraapper');

            hbuttonwrapper.classList.toggle('hbuttonclose');
            hbuttonwrapper.classList.toggle('hbuttonopen');

            if(hbmenuwraapper.classList.contains('zm2')){
                hbmenuwraapper.classList.toggle('zm2');
                hbmenuwraapper.classList.toggle('z2');
                setTimeout(() => {
                    hbmenuwraapper.classList.toggle('hbclose');
                    hbmenuwraapper.classList.toggle('hbopen');
                }, 200);
            }else{
                hbmenuwraapper.classList.toggle('hbclose');
                hbmenuwraapper.classList.toggle('hbopen');
                setTimeout(() => {

                    hbmenuwraapper.classList.toggle('zm2');
                    hbmenuwraapper.classList.toggle('z2');
                }, 500);
            }

        }
        /*開いているときそれ以外の要素をクリックした時*/
        if(hbmenuwraapper.classList.contains('hbopen') && !e.target.closest('#searchareasp')){
            hbmenuwraapper.classList.add('hbclose');
            hbmenuwraapper.classList.remove('hbopen');

            hbuttonwrapper.classList.remove('hbuttonopen');
            hbuttonwrapper.classList.add('hbuttonclose');
            setTimeout(() => {
                hbmenuwraapper.classList.add('zm2');
                hbmenuwraapper.classList.remove('z2');
            }, 500);
        }
    });

    ['load', 'resize'].forEach((ev) => {
        window.addEventListener(ev, (e) => {
            if(!document.getElementById('gnavbutton') || !document.getElementById('HeaderNotificationArea')){
                return;
            }
            var topmargin = document.getElementById('gnavbutton') ? document.getElementById('gnavbutton').offsetHeight : 0;
            if(window.innerWidth < 768){
                document.getElementById('HeaderNotificationArea').setAttribute('style', 'margin-top:'+topmargin+'px;');
            }
        });
    });
});
";
?>