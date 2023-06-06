<?php
function AuthorinfoCss(){
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
    .profile-box_title,
    .profile-box_image,
    .author_name_area{
        width:100%;
    }
    .profile_box_inner{
        float:left;
    }
    .profile-box_image img{
        height:auto;
        width:100%;
    }
    .author_name_area,
    .profile_user_description{
        margin-bottom:0;
    }
    .profile-box_title,
    .profile-box_image img,
    .author_name_area,
    .profile_user_description{
        padding:.5em;
    }
    .author_name_area{
        border-color:'.$CustomizeMainColumn->AuthoInfoNameOutlineColor.';
    }
    .profile_user_description{
        border-top:'.$CustomizeMainColumn->AuthoInfoSegmentlineCategory.' '.$CustomizeMainColumn->AuthoInfoSegmentlineThickness.'em;
        border-color:'.$CustomizeMainColumn->AuthoInfoSegmentlineColor.';
    }
    .profile-box_title{
        border-color:'.$CustomizeMainColumn->AuthoInfoTitleOutlineColor.';
    }
    .profile-box_title{
        display: inline-block;
        padding: 13px;
        position: relative;
        text-align: left;
        word-break: break-all;
    }
    .profile_box_inner table td:nth-child(2n){
        float: right;
        width: 100%;
    }
    .profile_box_inner table td:nth-child(2n+1){
        float: left;
        width: 100%;
    }
    .profile_box_inner .author_name_area{
        text-align:center;
    }
    .profile_box_inner .profile-box_title,
    .profile_box_inner .profile-box_image{
        margin-bottom:2rem;
    }
    .profile_box_inner .profile-box_image{
        text-align:center;
    }
    .profile_box_inner .profile-box_image img{
        max-width:10rem;
    }
    .profile_box_inner .author_name_area,
    .profile_box_inner .profile-box_image{
        float:left;
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