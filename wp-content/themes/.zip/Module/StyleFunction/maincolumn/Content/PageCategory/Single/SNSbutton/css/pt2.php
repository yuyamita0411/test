<?php
function ContentButtonCss(){
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMin400 = '';
    $CssMax400 = '';

    $CustomizeMainColumn = CustomizeMainColumn::Values();

    $CssNolimit .= '
    /**色関係 */
    .tw > a > i, .tw .scc {
        background: '.$CustomizeMainColumn->SetTwitterColor.';
    }
    .fb > a > i, .fb .scc {
        background: '.$CustomizeMainColumn->SetFacebookColor.';
    }
    .hatebu > a > i, .hatebu .scc {
        background: '.$CustomizeMainColumn->SetHatenaColor.';
    }
    .pkt > a > i, .pkt .scc {
        background: '.$CustomizeMainColumn->SetPocketColor.';
    }
    .line > a > i {
        background: '.$CustomizeMainColumn->SetLineColor.';
    }
    /**色関係 */
    /**デザイン・レイアウト関係 */
    .sns-btn__item > a > i,
    .sns-btn__item > a > i:before{
        border-radius:4px;
    }
    .sns-btn__item > a > i:before{
        box-shadow:0 1px 2px #999;
        color:#ffff;
        display:inline-block;
        position:relative;
        text-decoration:none;
        top: 0;
    }
    .sns-btn__item > a i:before{
        position:relative;
    }
    .sns-btn__item:hover{
        text-decoration:none;
        transform:translateY(-5px);
        -ms-transform:translateY(-5px);
        -webkit-transform:translateY(-5px);
    }
    .sns-btn__item,
    .sns-btn__item:hover{
        transition:all 0.5s;
    }
    .fa-twitter:before {
        content: "\f099";
    }
    .fa-facebook:before {
        content: "\f09a";
    }
    .fa-hatebu:before {
        content: "B!";
        font-family: "Quicksand", "Arial", sans-serif;
        font-size: 1.11em;
        font-weight: bold;
        line-height: 32px;
        position: relative;
        white-space: nowrap;
    }
    .fa-line:before {
        content: "\f3c0";
    }
    .fa-get-pocket:before {
        content: "\f265";
    }
    .fab {
        font-family: "Font Awesome 5 Brands";
    }
    ';
    $CssMin768 .= '
    .sns-btn__item {
        margin: 0;
        max-width: 86px;
        width: 14%;
    }
    .sns-btn__item > a > i:before{
        font-size:30px;
        height:58px;
        line-height:58px;
        width:66px;
    }
    ';
    $CssMax768 .= '
    .sns-btn__item {
        margin: 0;
        max-width: 86px;
        width: 14%;
    }
    .sns-btn__item > a > i:before{
        font-size:24px;
        height:44px;
        line-height:44px;
        width:40px;
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
        'CssMin400' => $CssMin400,
        'CssMax400' => $CssMax400
    ];
}
?>