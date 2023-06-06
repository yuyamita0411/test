<?php
$McCategoryArticlePcJS = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.contentarea .Catlinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }
    setTimeout(() => {
        if(768 < window.innerWidth){
            document.querySelectorAll('.contentarea .CategoryArticleArea a > img, .contentarea .CategoryArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
        }
    }, 100);
});
";
?>