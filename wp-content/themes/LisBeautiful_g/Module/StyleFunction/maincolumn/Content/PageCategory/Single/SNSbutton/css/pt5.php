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
    /**文字関係 */
    .tw a:after{
        color:#ffff;
    }
    .fb a:after{
        color:#ffff;
    }
    .hatebu a:after{
        color:#ffff;
    }
    .pkt a:after{
        color:#ffff;
    }
    .line a:after{
        color:#ffff;
    }
    .sAWrapper > li{
        padding: 0.2rem;
    }
    /**文字関係 */

    /**色関係 */
    .tw{
        background:'.$CustomizeMainColumn->SetTwitterColor.';
    }
    .fb{
        background:'.$CustomizeMainColumn->SetFacebookColor.';
    }
    .hatebu{
        background:'.$CustomizeMainColumn->SetHatenaColor.';
    }
    .pkt{
        background:'.$CustomizeMainColumn->SetPocketColor.';
    }
    .line{
        background:'.$CustomizeMainColumn->SetLineColor.';
    }
    /**色関係 */
    /**デザイン・レイアウト関係 */
    .SBitem > a{
        display:inline-block;
        text-align:left;
        width:100%;
    }
    .SBitem > a > i,
    .SBitem > a > i:before{
        border-radius:50%;
    }
    .SBitem > a > i:before{
        color:#ffff;
        display:inline-block;
        position:relative;
        text-decoration:none;
        transition:.5s;
    }
    .SBitem > a i:before{
        position:relative;
    }
    .SBitem > a > i:before{
        font-size:14px;
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
    .fa-twitter:before {
        content: "\f099";
    }
    .fa-facebook:before {
        content: "\f39e";
    }
    .fa-hatebu:before {
        content: "B!";
        font-family: "Quicksand", "Arial", sans-serif;
        font-size: 1em;
        font-weight: bold;
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
    .SBitem a:after{
        font-size:14px;
        left: 1.2rem;
        line-height: 1.6rem;
        position: absolute;
    }
    .tw a:after{
        content:"Twitter";
    }
    .fb a:after{
        content:"Facebook";
    }
    .hatebu a:after{
        content:"Hatena";
    }
    .pkt a:after{
        content:"pocket";
    }
    .line a:after{
        content:"LINE";
    }
    ';
    $CssMax768 .= '
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