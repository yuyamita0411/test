<?php
    /*汎用*/
    function EachFadeinAnimate($target, $triggerelem, $event, $timingratio, $initval, $addspeed, $removespeed){
        return "/*それぞれにアニメーションがかかるパターン
        EachFadeinAnimate*/
        document.addEventListener('DOMContentLoaded', () => {
            if(!document.querySelectorAll('".$target."')) return false;
            var element  = document.querySelectorAll('".$target."')[0];

            if(!element){
                return;
            }

            element.setAttribute('style', 'opacity:0;');

            positionTop     = 0,
            positionLeft    = 0;
            var Timer = null;

            if (navigator.userAgent.toLowerCase().match(/webkit|msie 5/)) {
                documentElement = document.body;
            } else {
                documentElement = document.documentElement;
            }

            var i = 0;
            while(i <= element.childNodes.length) {
                if(element.childNodes[i] != undefined && element.childNodes[i].nodeName == '#text') {
                    element.removeChild(element.childNodes[i]); /*textノードを削除*/
                }
                i++;
            }

            var child_elements = element.childNodes;
            var child_elements_len = child_elements.length;
            for(var i=0; i <= child_elements.length; i++){
                if(child_elements[i] && child_elements[i] instanceof HTMLElement){
                    child_elements[i].setAttribute('style', '".$initval."');
                }
            }

            var triggerelem = window;
            if('".$triggerelem."' != 'window'){
                triggerelem = document.querySelectorAll('".$triggerelem."')[0];
            }

            window.addEventListener('".$event."', () => {
                positionTop  = documentElement.scrollTop;
                positionLeft = documentElement.scrollLeft;

                var targetElement = element.getBoundingClientRect();
                var targettop = targetElement.top;
                var windowheight = window.outerHeight;
                var eachsecond = ".$timingratio." / child_elements_len;

                if(targettop - (windowheight * 3/4) < 0){
                    element.setAttribute('style', 'opacity:1; transition:all 0.25s;');
                    child_elements.forEach((child_element, i) => {
                        var second = eachsecond * i;
                        Timer = setTimeout(() => {
                            if(child_element && child_element instanceof HTMLElement){
                                child_element.setAttribute('style', '".$addspeed."');
                            }
                        }, second);
                    });

                }else{
                    child_elements.forEach((child_element, i) => {
                        if(child_element){
                            child_element.setAttribute('style', '".$removespeed."');
                        }
                    });
                }
            });
        });";
    }

    //実行関数
    function ElemFadein1($target){
        return EachFadeinAnimate(
            $target['target'],
            $target['triggerelem'],
            $target['eventname'],
            500,
            'top:0.5em; opacity:0;',
            'top:0em; opacity:1; transition:all 0.500s;',
            'top:0.5em; opacity:0; transition:all 0.500s;'
        );
    }
    function ElemFadein2($target){
        return EachFadeinAnimate(
            $target['target'],
            $target['triggerelem'],
            $target['eventname'],
            500,
            'top:10em; opacity:0;',
            'top:0em; opacity:1; transition:all 0.500s;',
            'top:10em; opacity:0; transition:all 0.500s;'
        );
    }
    function ElemFadein3($target){
        return EachFadeinAnimate(
            $target['target'],
            $target['triggerelem'],
            $target['eventname'],
            500,
            'top:10em; transform:rotate(360deg); opacity:0;',
            'top:0em; transform:rotate(0deg); opacity:1; transition:all 0.500s;',
            'top:10em; transform:rotate(360deg); opacity:0; transition:all 0.500s;'
        );
    }
    function ElemFadein4($target){
        return EachFadeinAnimate(
            $target['target'],
            $target['triggerelem'],
            $target['eventname'],
            500,
            'left:-20%; opacity:0;',
            'left:0%; opacity:1; transition:all 0.500s;',
            'left:-20%; opacity:0; transition:all 0.500s;'
        );
    }
    function ElemFadein5($target){
        return EachFadeinAnimate(
            $target['target'],
            $target['triggerelem'],
            $target['eventname'],
            500,
            'top:50em; left:-20%; transform:rotate(180deg); opacity:0;',
            'top:0em; left:0%; transform:rotate(0deg); opacity:1; transition:all 0.500s;',
            'top:50em; left:-20%; transform:rotate(180deg); opacity:0; transition:all 0.500s;'
        );
    }
?>