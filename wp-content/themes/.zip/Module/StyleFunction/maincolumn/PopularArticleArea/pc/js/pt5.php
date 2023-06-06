<?php
$PopularArticleAreaPcCss = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.contentarea .PopularArticleArealinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }

    setTimeout(() => {
        var height = document.querySelectorAll('.contentarea .PopularArticleArealinkarea a > img')[0].offsetWidth;
        if(768 < window.innerWidth){
            document.querySelectorAll('.contentarea .PopularArticleArea a > img, .contentarea .PopularArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
            document.querySelectorAll('.contentarea .PopularArticleArealinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+height+'px;');
            });
        }
    }, 100);
});
";
?>