<?php
$ScCategoryArticlePcJS = "
window.addEventListener(ev, () => {
    if(window.innerWidth < 768){
        document.querySelectorAll('.sidecolumn .CategoryArticlelinkarea a > img, .sidecolumn .CategoryArticlelinkarea a > .dummy').forEach((each) => {
            each.removeAttribute('style');
        });
        return;
    }
    setTimeout(() => {
        if(768 < window.innerWidth){
            document.querySelectorAll('.sidecolumn .CategoryArticlelinkarea a > img, .sidecolumn .CategoryArticlelinkarea a > .dummy').forEach((each) => {
                each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
            });
        }
    }, 100);
});
";
/*
    add_action('wp_footer', function(){
        ?>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
//
                });
            });
        </script>
        <?php
    });
*/
?>