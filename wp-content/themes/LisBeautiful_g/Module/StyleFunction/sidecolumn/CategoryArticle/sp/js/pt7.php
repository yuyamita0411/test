<?php
$ScCategoryArticlepJS = "
window.addEventListener(ev, () => {
    if(768 < window.innerWidth){
        document.querySelectorAll('.sidecolumn .CategoryArticlelinkarea a > img, .sidecolumn .CategoryArticlelinkarea a > .dummy').forEach((each) => {
            each.removeAttribute('style');
        });
        document.querySelectorAll('.sidecolumn .CategoryArticlelinkarea .TextArea').forEach((each) => {
            each.removeAttribute('style');
        });
        return;
    }
    setTimeout(() => {
        if(window.innerWidth < 768){
            var theight = 0;
            document.querySelectorAll('.sidecolumn .CategoryArticlelinkarea a > img, .sidecolumn .CategoryArticlelinkarea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
                theight = each.offsetHeight;
            });

            document.querySelectorAll('.sidecolumn .CategoryArticlelinkarea .TextArea').forEach((each) => {
                each.setAttribute('style', 'height:'+theight+'px;');
            });
        }
    }, 100);
});
";
?>