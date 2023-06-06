<?php
    //汎用
    function MultiClickSliceStr($target){
        return "
        /*MultiClickSliceStr*/
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
                    span.classList.add('d-inline-block', 'float-left', 'position-relative', 'fontblock');            
                    var text = document.createTextNode(element);
                    span.appendChild(text);
                    parentelement.appendChild(span);
                });
            });

        })();
        ";
    }

    //関数の基本部分
    function MultiTypeClickFormat($target, $triggerelem, $eventname, $timingratio, $initval, $addspeed, $removespeed, $timing){
        return "
        /*MultiClickSliceStr*/
        /*変数に格納したセレクタ(id)がタイプライター風になる*/
        document.addEventListener('DOMContentLoaded', () => {
            ".MultiClickSliceStr($target)."
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
            });

            var triggerelem = window;
            if('".$triggerelem."' != 'window'){
                triggerelem = document.querySelectorAll('".$triggerelem."')[0];
            }

            triggerelem.addEventListener('".$eventname."', () => {
                setTimeout(() => {
                    elements.forEach((element, i) => {
                        var child_elements = element.childNodes;
                        var child_elements_len = child_elements.length;

                        child_elements.forEach((child_element, i) => {
                            var eachsecond = '".$timingratio."' / child_elements_len;
                            var second = eachsecond * i;
                            Timer = setTimeout(() => {
                                var attnow = child_element.getAttribute('style');
                                if(child_element && attnow == '".$initval."'){
                                    child_element.setAttribute('style', '".$addspeed."');
                                }
                                if(child_element && attnow == '".$addspeed."'){
                                    child_element.setAttribute('style', '".$removespeed."');
                                }
                                if(child_element && attnow == '".$removespeed."'){
                                    child_element.setAttribute('style', '".$addspeed."');
                                }
                            }, second);
                        });
                    });

                }, ".$timing.");
            });

            window.addEventListener('".$eventname."', (e) => {
                elements.forEach((element, i) => {
                    var child_elements = element.childNodes;
                    var child_elements_len = child_elements.length;
                    child_elements.forEach((child_element, i) => {
                        if(child_element){
                            child_element.setAttribute('style', '".$initval."');
                        }
                    });
                });
            });
        });
        ";
    }

    function MultiFadeinClickFormat($target, $triggerelem, $eventname, $timingratio, $initval, $addspeed, $removespeed, $timing){
        return "
        /*MultiFadeinClickFormat*/
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

                /*トリガーをクリックした時*/
                triggerelem.addEventListener('".$eventname."', () => {
                    let attnow = element.getAttribute('style');
                    console.log(attnow);
                    setTimeout(() => {
                        if(attnow == '".$initval."'){
                            element.setAttribute('style', '".$addspeed."');
                            console.log(attnow);
                        }
                        if(attnow == '".$addspeed."'){
                            element.setAttribute('style', '".$removespeed."');
                            console.log(attnow);
                        }
                        if(attnow == '".$removespeed."'){
                            element.setAttribute('style', '".$addspeed."');
                            console.log(attnow);
                        }
                    }, ".$timing.");
                });
                /*トリガー以外をクリックした時*/
                window.addEventListener('".$eventname."', (e) => {
                    const attnow = element.getAttribute('style');
                    setTimeout(() => {
                        if(e.target.id != '".$triggerelem."' && attnow == '".$addspeed."'){
                            element.setAttribute('style', '".$removespeed."');
                        }
                    }, ".$timing.");
                });
            });
        });
        ";
    }

    //実行関数
    function MultiClickTypewriter1($array){
        return MultiTypeClickFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'opacity:0;',
            'opacity:1; transition:all .5s;',
            'opacity:0; transition:all .5s;',
            $array['timing']
        );
    }
    function MultiClickTypewriter2($array){
        return MultiTypeClickFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'top:0.5em; opacity:0;',
            'top:0em; opacity:1; transition:all .5s;',
            'top:0.5em; opacity:0; transition:all .5s;',
            $array['timing']
        );
    }
    function MultiClickTypewriter3($array){
        return MultiTypeClickFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'top:30em; left:-100%; opacity:0;',
            'top:0em; left:0; opacity:1; transition:all .5s;',
            'top:30em; left:-100%; opacity:0; transition:all .5s;',
            $array['timing']
        );
    }
    function MultiClickFadein1($array){
        return MultiFadeinClickFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'position:relative; top:em; opacity:0;',
            'position:relative; top:0em; opacity:1; transition:all 0.500s;',
            'position:relative; top:0em; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiClickFadein2($array){
        return MultiFadeinClickFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'position:relative; top:0.5em; opacity:0;',
            'position:relative; top:0em; opacity:1; transition:all 0.500s;',
            'position:relative; top:0.5em; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
    function MultiClickFadein3($array){
        return MultiFadeinClickFormat(
            $array['target'],
            $array['triggerelem'],
            $array['eventname'],
            500,
            'position:relative; left:-10%; opacity:0;',
            'position:relative; left:0em; opacity:1; transition:all 0.500s;',
            'position:relative; left:-10%; opacity:0; transition:all 0.500s;',
            $array['timing']
        );
    }
?>