<?php
$ScPopularArticleAreapJS = "
window.addEventListener(ev, () => {
    if(768 < window.innerWidth){
        document.querySelectorAll('.sidecolumn .PopularArticleArealinkarea a > img, .sidecolumn .PopularArticleArealinkarea a > .dummy').forEach((each) => {
            each.removeAttribute('style');
        });
        document.querySelectorAll('.sidecolumn .PopularArticleArealinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
        return;
    }
    setTimeout(() => {
        if(window.innerWidth < 768){
            var theight = 0;
            document.querySelectorAll('.sidecolumn .PopularArticleArealinkarea a > img, .sidecolumn .PopularArticleArealinkarea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
                theight = each.offsetHeight;
            });

            document.querySelectorAll('.sidecolumn .PopularArticleArealinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+theight+'px;');
            });
        }
    }, 100);
});
";
?>