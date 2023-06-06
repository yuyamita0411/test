<?php
    $HeaderCommonJs = "
    window.addEventListener('DOMContentLoaded', () => {
        if(!document.getElementById('glassiconpc') || !document.getElementById('glassiconpc')){
            return;
        }
        const initval = 'top:0px; opacity:0; z-index:-2; transition:all 0.25s',
        calcval = (val) => {return 'top:'+val+'px; opacity:1; z-index:0; transition:all 0.25s;';},
        searchmenupc = document.getElementById('searchmenupc'),
        gnavinner = document.getElementById('gnavinner');
        searchmenupc.setAttribute('style', initval);
    
        window.addEventListener('click', (e) => {
            if(e.target.id == 'glassiconpc'){
                var gnavheight = gnavinner.offsetHeight;
                if(searchmenupc.getAttribute('style') == initval){
                    searchmenupc.setAttribute('style', calcval(gnavheight));
                }else{
                    searchmenupc.setAttribute('style', initval);
                }
            }else{/*開いているときそれ以外の要素をクリックした時*/
                if(searchmenupc.getAttribute('style') != initval && !e.target.closest('.searchmenu_inner')){
                    searchmenupc.setAttribute('style', initval);
                }
            }
        });
    
        ['load', 'resize'].forEach((ev) => {
            window.addEventListener(ev, () => {
                document.querySelectorAll('.contentarea .CategoryArticleArea .Catlinkarea a > img, .contentarea .CategoryArticleArea .Catlinkarea a > .dummy').forEach((each) => {
                    each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
                });
                document.querySelectorAll('.contentarea .NewestArticleArea .NewestArticlelinkarea a > img, .contentarea .NewestArticleArea .NewestArticlelinkarea a > .dummy').forEach((each) => {
                    each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
                });
                document.querySelectorAll('.contentarea .PopularArticleArea a > img, .contentarea .PopularArticleArea a > .dummy').forEach((each) => {
                    each.setAttribute('style', 'height:'+each.offsetWidth+'px;');
                });
            });
        });
    });
    ";
?>