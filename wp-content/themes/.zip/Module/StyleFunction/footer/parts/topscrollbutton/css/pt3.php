<?php
$CustomizeOtherBasic = CustomizeOtherBasic::Values();
$SetScrolltopCSS = "
#topscrollbutton{
    bottom:0.5rem;
    right:0.5rem;
}
#topscrollbutton{
    width:2rem;
    height:2rem;
}
#topscrollbutton{
    position: relative;
}
#topscrollbutton::before,
#topscrollbutton::after{
    content: '';
    position: absolute;
    top: 0;
    bottom: 9px;
    margin: auto;
    width: 0.7rem;
    height: 2.5px;
    -webkit-transform-origin: right;
    transform-origin: right;
}
#topscrollbutton::before{
    left:5px;
}
#topscrollbutton::after{
    left:6px;
}
#topscrollbutton::before{
    -webkit-transform: rotate(220deg);
    transform: rotate(220deg);
}
#topscrollbutton::after{
    -webkit-transform: rotate(-40deg);
    transform: rotate(-40deg);
}
#topscrollbutton::before,
#topscrollbutton::after{
    background:#ffff;
}
#topscrollbutton{
    background-color:".$CustomizeOtherBasic->TopScrollButtonBgcolor.";
    display:".$CustomizeOtherBasic->DisplayTopScrollButton.";
}
#topscrollbutton:hover{
    background-color:#ffff;
}
#topscrollbutton:hover::before,
#topscrollbutton:hover::after{
    background:".$CustomizeOtherBasic->TopScrollButtonBgcolor.";
}
#topscrollbutton,
#topscrollbutton:hover,
#topscrollbutton:hover::before,
#topscrollbutton:hover::after{
    transition:all 0.5s;
}
#topscrollbutton{
    border-radius:50%;
}
";
?>