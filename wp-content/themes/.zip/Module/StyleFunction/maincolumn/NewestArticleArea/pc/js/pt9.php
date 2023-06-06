<?php
$NewestArticleAreaPcJS = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.contentarea .NewestArticlelinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }

    setTimeout(() => {
        if(768 < window.innerWidth){
            document.querySelectorAll('.contentarea .NewestArticleArea a > img, .contentarea .NewestArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });

            document.querySelectorAll('.contentarea .NewestArticlelinkarea .TextArea').forEach((each) => {
                each.removeAttribute('style');
            });
        }
    }, 100);
});
";
?>