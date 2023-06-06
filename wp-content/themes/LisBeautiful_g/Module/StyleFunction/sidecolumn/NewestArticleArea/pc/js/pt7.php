<?php
$ScNewestArticleAreaPcJS = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.sidecolumn .NewestArticlelinkarea a > img, .sidecolumn .NewestArticlelinkarea a > .dummy').forEach((each) => {
            each.removeAttribute('style');
        });
        document.querySelectorAll('.sidecolumn .NewestArticlelinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
        return;
    }
    setTimeout(() => {
        if(768 < window.innerWidth){
            var theight = 0;
            document.querySelectorAll('.sidecolumn .NewestArticlelinkarea a > img, .sidecolumn .NewestArticlelinkarea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
                theight = each.offsetHeight;
            });

            document.querySelectorAll('.sidecolumn .NewestArticlelinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+theight+'px;');
            });
        }
    }, 100);
});
";
?>