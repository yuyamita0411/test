<?php
$ScPopularArticleAreapJS = "
window.addEventListener(ev, () => {
    if(768 < window.innerWidth){
        document.querySelectorAll('.sidecolumn .PopularArticleArealinkarea a > img, .sidecolumn .PopularArticleArealinkarea a > .dummy').forEach((each) => {
            each.removeAttribute('style');
        });
        return;
    }
    setTimeout(() => {
        if(window.innerWidth < 768){
            document.querySelectorAll('.sidecolumn .PopularArticleArealinkarea a > img, .sidecolumn .PopularArticleArealinkarea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth * 0.6+'px;');
            });
        }
    }, 100);
});
";
?>