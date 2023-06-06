<?php
    //汎用
    function MultiSliceStr($target){
        return "
        /*MultiSliceStr*/
        (() => {
            var parentelements = document.querySelectorAll('".$target."');
            if(!parentelements) return false;
            var length = document.querySelectorAll('".$target."').length;

            parentelements.forEach((parentelement, i) => {
                var textobj = parentelement;
                var innertext = textobj.textContent;
                var textlen = textobj.textContent.length;
                var eacjtarr = [];

                for(var i2 = 0; i2 <= textlen; i2++){
                    var slicestart = i2;
                    var sliceend = i2 + 1;            
                    var innertextarr = innertext.slice(slicestart, sliceend);
                    eacjtarr.push(innertextarr);
                }

                parentelement.innerHTML = '';

                eacjtarr.forEach((element, i) => {
                    var span = document.createElement('span');
                    span.classList.add('d-inline-block', 'float-left', 'fontblock');            
                    var text = document.createTextNode(element);
                    span.appendChild(text);
                    parentelement.appendChild(span);
                });
            });
        })();
        ";
    }

    //関数の基本部分
    function MultiTypewriterFormat($target, $triggerelem, $eventname, $timingratio, $initval, $addspeed, $removespeed, $timing){
        return "
        /*MultiSliceStr*/
        /*変数に格納したセレクタ(id)がタイプライター風になる*/
        document.addEventListener('DOMContentLoaded', () => {
            ".MultiSliceStr($target)."
            if(!document.querySelectorAll('".$target."')) return false;
            var elements = document.querySelectorAll('".$target."');

            elements.forEach((element, i) => {
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
                    setTimeout(() => {
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
                    }, ".$timing.");
                });
            });
        });
        ";
    }

    function MultiFadeinFormat($target, $triggerelem, $eventname, $initval, $addspeed, $removespeed, $timing){
        return "
        /*MultiFadeinFormat*/
        /*変数に格納したセレクタ(id)がタイプライター風になる*/
        document.addEventListener('DOMContentLoaded', () => {
            if(!document.querySelectorAll('".$target."')) return false;
            var elements = document.querySelectorAll('".$target."');

            elements.forEach((element, i) => {
                element.setAttribute('style', '".$initval."');

                var triggerelem = window;
                if('".$triggerelem."' != 'window'){
                    triggerelem = document.querySelectorAll('".$triggerelem."')[0];
                }

                triggerelem.addEventListener('".$eventname."', () => {
                    setTimeout(() => {
                        var targetElement = element.getBoundingClientRect();
                        var targettop = targetElement.top;
                        var windowheight = window.outerHeight;

                        if(targettop - (windowheight * 3/4) < 0){
                            element.setAttribute('style', '".$addspeed."');
                        }else{
                            element.setAttribute('style', '".$removespeed."');
                        }
                    }, ".$timing.");
                });
            });
        });
        ";
    }

    //実行関数
    function MultiTypewriter1($array){
        return MultiTypewriterFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'opacity:0;',
            'opacity:1; transition:all 0.500s;',
            'opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiTypewriter2($array){
        return MultiTypewriterFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'top:0.5em; opacity:0;',
            'top:0em; opacity:1; transition:all 0.500s;',
            'top:0.5em; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiTypewriter3($array){
        return MultiTypewriterFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'top:30em; left:-100%; opacity:0;',
            'top:0em; left:0; opacity:1; transition:all 0.500s;',
            'top:30em; left:-100%; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiFadein1($array){
        return MultiFadeinFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            'position:relative; opacity:0; transition:all 0.500s',
            'position:relative; opacity:1; transition:all 0.500s;',
            'position:relative; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiFadein2($array){
        return MultiFadeinFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            'position:relative; top:0.5em; opacity:0; transition:all 0.500s',
            'position:relative; top:0em; opacity:1; transition:all 0.500s;',
            'position:relative; top:0.5em; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiFadein3($array){
        return MultiFadeinFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            'position:relative; left:-10%; opacity:0;',
            'position:relative; left:0em; opacity:1; transition:all 0.500s;',
            'position:relative; left:-10%; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
?>