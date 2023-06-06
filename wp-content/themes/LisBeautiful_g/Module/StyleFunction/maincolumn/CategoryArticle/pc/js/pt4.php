<?php
$McCategoryArticlePcJS = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.contentarea .Catlinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }

    setTimeout(() => {
        var height = document.querySelectorAll('.contentarea .Catlinkarea a > img')[0].offsetWidth;
        if(768 < window.innerWidth){
            document.querySelectorAll('.contentarea .CategoryArticleArea a > img, .contentarea .CategoryArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
            document.querySelectorAll('.contentarea .Catlinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+height+'px;');
            });
        }
    }, 100);
});
";
?>