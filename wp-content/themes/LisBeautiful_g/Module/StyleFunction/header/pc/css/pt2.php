<?php
function ReturnHeaderPCcss(){
    $CustomizeHeader = CustomizeHeader::Values();
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssMin768 .= '
    #gnavinner{
        display:flex;
        flex-direction: column-reverse;
    }
    #gnavlinkarea,
    #gnavlogoarea{
        float:left;
        width:100%;
    }
    #gnavlinkarea > .gmenueinner{
        float:left;
        padding-inline-start: 0;
    }
    #gnavlogoarea > div > div{
        width:100%;
    }
    #gnavlinkarea > ul > li{
        display: inline-block;
        float: left;
    }
    #gnavlinkarea,
    #gnavlogoarea{
        padding:.5rem;
    }
    #gnavlinkarea .gmenueinner{
        padding:.25rem 0 .25rem 0;
    }
    ';

    if($CustomizeHeader->HeaderPositionSetting != 'none'){
        $CssMin768 .= '
        #HeaderNotificationArea{
            float: left;
            position: fixed;
            z-index: 1;
        }
        ';
    }else{
        $CssMin768 .= '
        .gnavwrapper,
        #HeaderNotificationArea{
            float:left;
        }
        ';
    }

    return (object)[
        'CssNolimit' => $CssNolimit,
        'CssMin1200' => $CssMin1200,
        'CssMin981' => $CssMin981,
        'CssMin768' => $CssMin768,
        'CssMin401to980' => $CssMin401to980,
        'CssMax768' => $CssMax768,
        'CssMax400' => $CssMax400
    ];
}
?>