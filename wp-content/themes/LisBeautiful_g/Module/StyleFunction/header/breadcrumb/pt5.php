<?php
function ReturnBreadCrumbcss(){
    $CustomizeBreadCrumb = CustomizeBreadCrumb::Values();
    $CustomizeSideColumn = CustomizeSideColumn::Values();
    $CssNolimit = '';
    $CssMin1200 = '';
    $CssMin981 = '';
    $CssMax981 = '';
    $CssMin768 = '';
    $CssMin401to980 = '';
    $CssMax768 = '';
    $CssMax400 = '';

    $CssNolimit .= '
    #breadcrumb > li{
      position:relative;
    }
    #breadcrumb > .breadarrowstr:before{
      content: "\f0da";
      font-family: "Font Awesome 5 Free";
      margin-right: 2px;
    }
    #breadcrumb .topli:before{
      content: "\f015";
      font-family: "Font Awesome 5 Free";
      margin-right: 2px;
    }
    .singleli:before{
      content: "\f0c5";
      font-family: "Font Awesome 5 Free";
      margin-right: 2px;
    }
    #breadcrumb li:not(.topli):not(.breadarrowstr):not(.singleli):before{
      content: "\f07b";
      font-family: "Font Awesome 5 Free";
      margin-right: 2px;
    }
    #breadcrumb{
      background-color:'.$CustomizeBreadCrumb->BCSetting.'; 
    }
    .breadcrumb .breadstr, .breadcrumb .breadstr a{
      color:'.$CustomizeBreadCrumb->BFCSetting.'; 
    }
    .breadcrumb .breadstr:hover, .breadcrumb .breadstr a:hover{
      color:'.$CustomizeBreadCrumb->BHVFCSetting.'; 
    }
    .breadarrowstr{
      color:'.$CustomizeBreadCrumb->BARRSetting.';
    }
    ';

    if($CustomizeSideColumn->DisplaySidebar != 'false'){
      $CssMin768 .= '
      .breadwrapper{
        padding-left:1rem;
        padding-right:1rem;
        width:100%;
      }
      ';

      $CssMax768 .= '
      .breadwrapper{
        padding-right:0rem;
        padding-left:0rem;
      }
      ';
    }

    return (object)[
        'CssNolimit' => $CssNolimit,
        'CssMin1200' => $CssMin1200,
        'CssMin981' => $CssMin981,
        'CssMin768' => $CssMin768,
        'CssMin401to980' => $CssMin401to980,
        'CssMax768' => $CssMax768,
        'CssMax400' => $CssMax400
    ];
}
?>