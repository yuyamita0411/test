<?php
$PopularArticleAreapCss = "
window.addEventListener(ev, () => {
    if(768 < window.innerWidth){
        document.querySelectorAll('.contentarea .PopularArticleArealinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }
    setTimeout(() => {
        if(window.innerWidth < 768){
            document.querySelectorAll('.contentarea .PopularArticleArea a > img, .contentarea .PopularArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
        }
    }, 100);
});
";
?>