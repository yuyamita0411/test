<?php
$SetScrolltopCSS = "
#topscrollbutton{
    bottom:0.5rem;
    right:0.5rem;
}
#topscrollbutton{
    width:2rem;
    height:3rem;
}
#topscrollbutton{
    display:<?php echo CustomizeOtherBasic::Values()->DisplayTopScrollButton; ?>;
    position: relative;
}
#topscrollbutton::before{
    content: '';
    background:url('".get_theme_file_uri('img/scrolltoparrow3.png')."');
    background-size: 2rem;
    width: 2rem;
    height: 2rem;
    display: inline-block;
}
";
?>