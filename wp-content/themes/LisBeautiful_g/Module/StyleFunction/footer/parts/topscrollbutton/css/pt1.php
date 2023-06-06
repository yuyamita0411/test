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
    left: 0;
    top: calc((2rem - 12px) / 2);
    left:calc((2rem - 12px) / 2);
    bottom: 0;
    width: 0;
    height: 0;
    border-bottom: 8px solid #ffff;
    border-top: 0px solid transparent;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}
#topscrollbutton{
    height: 2rem;
    width: 2rem;
    text-align: center;
    line-height: 2rem;
}
#topscrollbutton{
    background-color:".$CustomizeOtherBasic->TopScrollButtonBgcolor.";
    border:solid 1px ".$CustomizeOtherBasic->TopScrollButtonBgcolor.";
    display:".$CustomizeOtherBasic->DisplayTopScrollButton."; 
}
#topscrollbutton:hover{
    background-color:#ffff;
}
#topscrollbutton:hover::before,
#topscrollbutton:hover::after{
    border-bottom: 8px solid ".$CustomizeOtherBasic->TopScrollButtonBgcolor.";
    border-top: 0px solid transparent;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}
#topscrollbutton,
#topscrollbutton:hover,
#topscrollbutton:hover::before,
#topscrollbutton:hover::after{
    transition:all 0.5s;
}
";
?>