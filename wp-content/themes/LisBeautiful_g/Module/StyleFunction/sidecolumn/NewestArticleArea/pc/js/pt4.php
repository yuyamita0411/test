<?php
$ScNewestArticleAreaPcJS = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.sidecolumn .NewestArticlelinkarea a > img, .sidecolumn .NewestArticlelinkarea a > .dummy').forEach((each) => {
            each.removeAttribute('style');
        });
        return;
    }
    setTimeout(() => {
        if(768 < window.innerWidth){
            document.querySelectorAll('.sidecolumn .NewestArticlelinkarea a > img, .sidecolumn .NewestArticlelinkarea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth * 0.6+'px;');
            });
        }
    }, 100);
});
";
?>