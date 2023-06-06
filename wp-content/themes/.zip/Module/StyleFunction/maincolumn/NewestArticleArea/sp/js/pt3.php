<?php
$NewestArticleAreaSpJS = "
window.addEventListener(ev, () => {
    if(768 < window.innerWidth){
        document.querySelectorAll('.contentarea .NewestArticlelinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }

    setTimeout(() => {
        var height = document.querySelectorAll('.contentarea .NewestArticlelinkarea a > img')[0].offsetWidth;
        if(window.innerWidth < 768){
            document.querySelectorAll('.contentarea .NewestArticleArea a > img, .contentarea .NewestArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
            document.querySelectorAll('.contentarea .NewestArticlelinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+height+'px;');
            });
        }
    }, 100);
});
";
?>