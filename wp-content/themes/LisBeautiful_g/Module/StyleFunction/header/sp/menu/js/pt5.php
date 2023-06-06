<?php
$HumburgerButtonCommonJs = "
window.addEventListener('DOMContentLoaded', () => {
    if(!document.getElementById('hbmenuwraapper') || 
    !document.getElementById('hbuttoncover') ||
    !document.getElementById('hbmenuwraappercover')
    ){
        return;
    }
    window.addEventListener('click', (e) => {
/**ハンバーガーメニューの動き */
    
        /*開く時*/
        if(e.target.id == 'hbuttoncover'){
            const hbuttonwrapper = document.getElementById('hbuttonwrapper'),
            hbmenuwraappercover = document.getElementById('hbmenuwraappercover'),
            hbmenuwraapper = document.getElementById('hbmenuwraapper');

            hbuttonwrapper.classList.toggle('hbuttonclose');
            hbuttonwrapper.classList.toggle('hbuttonopen');
            hbmenuwraappercover.classList.toggle('hbuttonclose');
            hbmenuwraappercover.classList.toggle('hbuttonopen');

            if(hbmenuwraapper.classList.contains('zm2')){
                hbmenuwraapper.classList.toggle('zm2');
                hbmenuwraapper.classList.toggle('z3');
                setTimeout(() => {
                    hbmenuwraapper.classList.toggle('hbclose');
                    hbmenuwraapper.classList.toggle('hbopen');
                }, 200);
            }else{
                hbmenuwraapper.classList.toggle('hbclose');
                hbmenuwraapper.classList.toggle('hbopen');
                setTimeout(() => {

                    hbmenuwraapper.classList.toggle('zm2');
                    hbmenuwraapper.classList.toggle('z3');
                }, 500);
            }
            if(hbmenuwraappercover.classList.contains('zm2')){
                hbmenuwraappercover.classList.toggle('zm2');
                hbmenuwraappercover.classList.toggle('z2');
                setTimeout(() => {
                    hbmenuwraappercover.classList.toggle('hbclose');
                    hbmenuwraappercover.classList.toggle('hbopen');
                }, 200);
            }else{
                hbmenuwraappercover.classList.toggle('hbclose');
                hbmenuwraappercover.classList.toggle('hbopen');
                setTimeout(() => {

                    hbmenuwraappercover.classList.toggle('zm2');
                    hbmenuwraappercover.classList.toggle('z2');
                }, 500);
            }

        }
        /*開いているときそれ以外の要素をクリックした時*/
        if(hbmenuwraapper.classList.contains('hbopen') && !e.target.closest('#searchareasp')){
            hbmenuwraapper.classList.add('hbclose');
            hbmenuwraapper.classList.remove('hbopen');

            hbuttonwrapper.classList.remove('hbuttonopen');
            hbuttonwrapper.classList.add('hbuttonclose');
            setTimeout(() => {
                hbmenuwraapper.classList.add('zm2');
                hbmenuwraapper.classList.remove('z3');
            }, 500);
        }

        if(hbmenuwraappercover.classList.contains('hbopen') && !e.target.closest('#searchareasp')){
            hbmenuwraappercover.classList.add('hbclose');
            hbmenuwraappercover.classList.remove('hbopen');

            hbuttonwrapper.classList.remove('hbuttonopen');
            hbuttonwrapper.classList.add('hbuttonclose');
            setTimeout(() => {
                hbmenuwraappercover.classList.add('zm2');
                hbmenuwraappercover.classList.remove('z2');
            }, 500);
        }
    });
});
";
?>