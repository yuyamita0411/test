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
    .tw a, .tw .scc {
        color: '.$CustomizeMainColumn->SetTwitterColor.';
    }
    .fb a, .fb .scc {
        color: '.$CustomizeMainColumn->SetFacebookColor.';
    }
    .hatebu a, .hatebu .scc {
        color: '.$CustomizeMainColumn->SetHatenaColor.';
    }
    .pkt a, .pkt .scc {
        color: '.$CustomizeMainColumn->SetPocketColor.';
    }
    .line a {
        color: '.$CustomizeMainColumn->SetLineColor.';
    }
    /**色関係 */
    /**デザイン・レイアウト関係 */
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
    .SBitem i {
        display: block;
        font-size: 32px;
        height: 32px;
        line-height: 32px;
        width: auto;
    }
    .fab {
        font-family: "Font Awesome 5 Brands";
    }
    .SBitem:hover{
        text-decoration:none;
        transform:translateY(-5px);
        -ms-transform:translateY(-5px);
        -webkit-transform:translateY(-5px);
    }
    .SBitem,
    .SBitem:hover{
        transition:all 0.5s;
    }
    ';

    $CssMin400 = '
    .SBitem {
        margin: 0;
        max-width: 86px;
        width: 14%;
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