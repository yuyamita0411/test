<?php
$HeaderNavCommonJs = "
window.addEventListener('DOMContentLoaded', () => {
    ['load', 'resize'].forEach((ev) => {
        window.addEventListener(ev, () => {
            var logoobj = document.getElementById('gnavlogoarea'),
            contentmargin = 0,
            topmargin = 0;

            contentmargin += document.getElementById('gnavlogoarea') ? document.getElementById('gnavlogoarea').offsetHeight : 0;
            contentmargin += document.getElementById('HeaderNotificationArea') ? document.getElementById('HeaderNotificationArea').offsetHeight : 0;

            topmargin += document.getElementById('gnavlogoarea') ? document.getElementById('gnavlogoarea').offsetHeight : 0;

            if(document.getElementById('HeaderNotificationArea')){
                document.getElementById('HeaderNotificationArea').removeAttribute('style');
            }
            if(document.getElementById('site-content')){
                document.getElementById('site-content').removeAttribute('style');
            }

            if(768 < window.innerWidth){
                if(document.getElementById('HeaderNotificationArea')){
                    document.getElementById('HeaderNotificationArea').setAttribute('style', 'margin-top:'+topmargin+'px;');
                }
                if(document.getElementById('site-content')){
                    document.getElementById('site-content').setAttribute('style', 'margin-top:'+contentmargin+'px;');
                }
            }

        });
    });
});
";
?>