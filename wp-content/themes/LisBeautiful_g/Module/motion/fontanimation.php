<?php
    //汎用
    function SliceStr($target){
        return "
        /*SliceStr*/
        /*指定したセレクタの文字を分割する*/
        (() => {
            var parentelements = document.querySelectorAll('".$target."')[0];
            if(!parentelements) return false;

            var textobj = parentelements,
            innertext = textobj.innerText,
            textlen = textobj.innerText.length,
            eacjtarr = [];

            for(var i2 = 0; i2 <= textlen; i2++){
                var slicestart = i2,
                sliceend = i2 + 1,          
                innertextarr = innertext.slice(slicestart, sliceend);
                eacjtarr.push(innertextarr);
            }

            parentelements.innerHTML = '';

            eacjtarr.forEach((element, i) => {
                var span = document.createElement('span');
                span.classList.add('d-inline-block', 'float-left', 'position-relative', 'fontblock');         
                var text = document.createTextNode(element);
                span.appendChild(text);
                parentelements.appendChild(span);
            });
        })();
        ";

    }

    function TypewriterFormat($target, $triggerelem, $eventname, $timingratio, $initval, $addspeed, $removespeed){
        return "
        /*関数の基本部分*/
        /*変数に格納したセレクタ(id)がタイプライター風になる*/
        /*TypewriterFormat*/
        document.addEventListener('DOMContentLoaded', () => {
            ".SliceStr($target)."
            if(!document.querySelectorAll('".$target."')) return false;
            var element  = document.querySelectorAll('".$target."')[0];
            element.classList.add('overflow-hidden');

            positionTop     = 0,
            positionLeft    = 0;
            var Timer = null;

            if (navigator.userAgent.toLowerCase().match(/webkit|msie 5/)) {
                documentElement = document.body;
            } else {
                documentElement = document.documentElement;
            }

            var child_elements = element.childNodes;
            var child_elements_len = child_elements.length;
            child_elements.forEach((child_element, i) => {
                if(child_element){
                    child_element.setAttribute('style', '".$initval."');
                }
            });

            var triggerelem = window;
            if('".$triggerelem."' != 'window'){
                triggerelem = document.querySelectorAll('".$triggerelem."')[0];
            }

            triggerelem.addEventListener('".$eventname."', () => {

                positionTop  = documentElement.scrollTop;
                positionLeft = documentElement.scrollLeft;

                var targetElement = element.getBoundingClientRect();
                var targettop = targetElement.top;
                var windowheight = window.outerHeight;
                var eachsecond = ".$timingratio." / child_elements_len;

                if(targettop - (windowheight * 3/4) < 0){
                child_elements.forEach((child_element, i) => {
                    var second = eachsecond * i;
                    Timer = setTimeout(() => {
                        if(child_element){
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
        });
        ";
    }

    function FadeinFormat($target, $triggerelem, $eventname, $initval, $addspeed, $removespeed){
        return "
        /*FadeinFormat*/
        /*変数に格納したセレクタ(id)がタイプライター風になる*/
        document.addEventListener('DOMContentLoaded', () => {
            if(!document.querySelectorAll('".$target."')) return false;
            var element  = document.querySelectorAll('".$target."')[0];

            positionTop     = 0,
            positionLeft    = 0;
            var Timer = null;

            if (navigator.userAgent.toLowerCase().match(/webkit|msie 5/)) {
                documentElement = document.body;
            } else {
                documentElement = document.documentElement;
            }

            element.setAttribute('style', '".$initval."');

            var triggerelem = window;
            if('".$triggerelem."' != 'window'){
                triggerelem = document.querySelectorAll('".$triggerelem."')[0];
            }

            triggerelem.addEventListener('".$eventname."', () => {

                positionTop  = documentElement.scrollTop;
                positionLeft = documentElement.scrollLeft;

                var targetElement = element.getBoundingClientRect();
                var targettop = targetElement.top;
                var windowheight = window.outerHeight;

                if(targettop - (windowheight * 3/4) < 0){
                    element.setAttribute('style', '".$addspeed."');
                }else{
                    element.setAttribute('style', '".$removespeed."');
                }
            });
        });
        ";
    }

    //実行関数
    function Typewriter1($array){
        return TypewriterFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'opacity:0;',
            'opacity:1; transition:all 0.500s;',
            'opacity:0; transition:all 0.500s;'
        );
    }
    function Typewriter2($array){
        return TypewriterFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'top:0.5em; opacity:0;',
            'top:0em; opacity:1; transition:all 0.500s;',
            'top:0.5em; opacity:0; transition:all 0.500s;'
        );
    }
    function Typewriter3($array){
        return TypewriterFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'top:30em; left:-100%; opacity:0;',
            'top:0em; left:0; opacity:1; transition:all 0.500s;',
            'top:30em; left:-100%; opacity:0; transition:all 0.500s;'
        );
    }
    function Fadein1($array){
        return FadeinFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            'position:relative; opacity:0;',
            'position:relative; opacity:1; transition:all 0.500s;',
            'position:relative; opacity:0; transition:all 0.500s;'
        );
    }
    function Fadein2($array){
        return FadeinFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            'position:relative; top:0.5em; opacity:0;',
            'position:relative; top:0em; opacity:1; transition:all 0.500s;',
            'position:relative; top:0.5em; opacity:0; transition:all 0.500s;'
        );
    }
    function Fadein3($array){
        return FadeinFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            'position:relative; left:-10%; opacity:0;',
            'position:relative; left:0em; opacity:1; transition:all 0.500s;',
            'position:relative; left:-10%; opacity:0; transition:all 0.500s;'
        );
    }
?>