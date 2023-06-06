<?php
function ReturnNotificationcss(){
    $CustomizeHeader = CustomizeHeader::Values();
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssNolimit .= '
    #HeaderNotificationArea .notificationlink{
        color:'.$CustomizeHeader->SetHeaderNotifiCationFontColor.';
    }
    #HeaderNotificationArea .notificationlink:hover{
        color:'.$CustomizeHeader->SetHeaderNotifiCationFontHoverColor.';
    }
    #HeaderNotificationArea .notificationlink,
    #HeaderNotificationArea .notificationlink:hover{
        transition:all 0.5s;
    }
    #HeaderNotificationArea .notificationwrapper{
        margin:0 auto;
    }
    ';
    if($CustomizeHeader->ReturnNotifiCationBGStatus == "true"){
        $CssNolimit .= "
        #HeaderNotificationArea{
            background-color:".$CustomizeHeader->SetHeaderNotifiCationBackgroundColor.";
        }
        ";
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