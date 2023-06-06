<?php
$SetScrolltopMotion = "
window.addEventListener('DOMContentLoaded', () => {
    const pagetopBtn = document.getElementById('topscrollbutton');
    pagetopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
";
?>