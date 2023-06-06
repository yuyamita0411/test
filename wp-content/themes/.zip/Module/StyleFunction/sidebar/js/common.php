<?php
$SidebarCommonJs = "
window.addEventListener('DOMContentLoaded', () => {
    if(!document.getElementById('hbmenuwraapper') || !document.getElementById('hbuttoncover')){
        return;
    }
    window.addEventListener('click', (e) => {
        const sidebar = document.getElementById('sidebar');
        if (!sidebar) {
            return;
        }
        /*開く時*/
        if(e.target.id == 'sidebarbutton'){

            e.target.classList.toggle('sbuttonclose');
            e.target.classList.toggle('sbuttonopen');
            const sidebarcover = document.getElementById('sidebarcover'),
            sidebarbutton = document.getElementById('sidebarbutton');

            if(sidebar.classList.contains('zm2')){
                sidebar.classList.toggle('zm2');
                sidebar.classList.toggle('z3');
                setTimeout(() => {
                    sidebar.classList.toggle('sidebarclose');
                    sidebar.classList.toggle('sidebaropen');
                }, 200);
            }else{
                sidebar.classList.toggle('sidebarclose');
                sidebar.classList.toggle('sidebaropen');
                setTimeout(() => {
                    sidebar.classList.toggle('zm2');
                    sidebar.classList.toggle('z3');
                }, 500);
            }

            if(sidebarcover.classList.contains('zm2')){
                sidebarcover.classList.toggle('zm2');
                sidebarcover.classList.toggle('z2');
                setTimeout(() => {
                    sidebarcover.classList.toggle('sidebarclose');
                    sidebarcover.classList.toggle('sidebaropen');
                }, 200);
            }else{
                sidebarcover.classList.toggle('sidebarclose');
                sidebarcover.classList.toggle('sidebaropen');
                setTimeout(() => {
                    sidebarcover.classList.toggle('zm2');
                    sidebarcover.classList.toggle('z2');
                }, 500);
            }

        }
        /*開いているときそれ以外の要素をクリックした時*/
        if(sidebar.classList.contains('sidebaropen')){
            sidebar.classList.add('sidebarclose');
            sidebar.classList.remove('sidebaropen');
            sidebarcover.classList.add('sidebarclose');
            sidebarcover.classList.remove('sidebaropen');
            sidebarbutton.classList.remove('sbuttonopen');
            sidebarbutton.classList.add('sbuttonclose');
            setTimeout(() => {
                sidebar.classList.add('zm2');
                sidebar.classList.remove('z3');
            }, 500);
            setTimeout(() => {
                sidebarcover.classList.add('zm2');
                sidebarcover.classList.remove('z3');
            }, 500);
        }
    });
});
";
?>