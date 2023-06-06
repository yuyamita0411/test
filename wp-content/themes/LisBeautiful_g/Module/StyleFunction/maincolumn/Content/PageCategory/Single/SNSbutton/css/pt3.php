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
    .SBitem > a > i,
    .SBitem > a > i:before{
        border-radius:50%;
    }
    .SBitem > a > i:before{
        color:#fff;
        display:inline-block;
        position:relative;
        text-decoration:none;
        transition:.5s;
    }
    .SBitem > a i:before{
        position:relative;
    }
    .SBitem:hover{
        -ms-transform:translateY(-5px);
        text-decoration:none;
        transform:translateY(-5px);
        -webkit-transform:translateY(-5px);
    }
    .SBitem,
    .SBitem:hover{
        transition:all 0.5s;
    }
    .fa-twitter:before {
        content: "\f099";
    }
    .fa-facebook:before {
        content: "\f39e";
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
    ';
    $CssMin768 .= '
    .SBitem {
        margin: 0;
        max-width: 86px;
        width: 14%;
    }
    .SBitem > a > i:before{
        font-size:30px;
        height:70px;
        line-height:70px;
        width:70px;
    }
    ';
    $CssMax768 .= '
    .SBitem {
        margin: 0;
        max-width: 86px;
        width: 14%;
    }
    .SBitem > a > i:before{
        font-size:24px;
        height:40px;
        line-height:40px;
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