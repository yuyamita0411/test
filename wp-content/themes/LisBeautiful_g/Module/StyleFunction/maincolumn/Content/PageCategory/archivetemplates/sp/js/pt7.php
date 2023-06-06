<?php
$ArchiveDesignSpJs = "
window.addEventListener(ev, () => {
    if(768 < window.innerWidth){
        document.querySelectorAll('.contentarea .Archivelinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
    }
    setTimeout(() => {
        if(window.innerWidth < 768){
            document.querySelectorAll('.contentarea .ArchiveArticleArea a > img, .contentarea .ArchiveArticleArea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
        }
    }, 100);
});
";
?>