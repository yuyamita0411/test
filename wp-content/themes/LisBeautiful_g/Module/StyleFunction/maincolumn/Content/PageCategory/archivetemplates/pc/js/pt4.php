<?php
$ArchiveDesignJs = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.contentarea .Archivelinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }

    setTimeout(() => {
        var height = document.querySelectorAll('.contentarea .Archivelinkarea a > img')[0].offsetWidth;
        if(768 < window.innerWidth){
            document.querySelectorAll('.contentarea .ArchiveArticleArea a > img, .contentarea .ArchiveArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
            document.querySelectorAll('.contentarea .Archivelinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+height+'px;');
            });
        }
    }, 100);
});
";
?>