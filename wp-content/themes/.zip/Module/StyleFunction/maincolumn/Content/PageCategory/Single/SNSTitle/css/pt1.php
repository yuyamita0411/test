<?php
function ContentTitleCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CustomizeMainColumn = CustomizeMainColumn::Values();

    $CssNolimit .= '
    .sns-btn__title:before {
        transform: rotate(50deg);
        -webkit-transform: rotate(50deg);
    }
    .sns-btn__title:after {
        transform: rotate(-50deg);
        -webkit-transform: rotate(-50deg);
    }
    .sns-btn__title:before, .sns-btn__title:after {
        background-color: '.$CustomizeMainColumn->SetSNSAreaTitleColor.';
        border-radius: 3px;
        content: "";
        height: 3px;
        top: 50%;
        width: 20px;
    }
    ';

    return (object)[
        'CssNolimit' => $CssNolimit,
        'CssMin1200' => $CssMin1200,
        'CssMin981' => $CssMin981,
        'CssMax981' => $CssMax981,
        'CssMin768' => $CssMin768,
        'CssMin401to980' => $CssMin401to980,
        'CssMax768' => $CssMax768,
        'CssMax400' => $CssMax400
    ];
}
?>