<?php
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

$goodsCount = count(Shopcart::goods());
?>
<style type="text/css" data-reactid=".0.0.$theme_colors">.color_0 {color: #ffffff;}
    .backcolor_0 {background-color: #ffffff;}
    .color_1 {color: #FFFFFF;}
    .backcolor_1 {background-color: #FFFFFF;}
    .color_2 {color: #000000;}
    .backcolor_2 {background-color: #000000;}
    .color_3 {color: rgba(237,28,36,1);}
    .backcolor_3 {background-color: rgba(237,28,36,1);}
    .color_4 {color: rgba(0,136,203,1);}
    .backcolor_4 {background-color: rgba(0,136,203,1);}
    .color_5 {color: rgba(255,203,5,1);}
    .backcolor_5 {background-color: rgba(255,203,5,1);}
    .color_6 {color: rgba(114,114,114,1);}
    .backcolor_6 {background-color: rgba(114,114,114,1);}
    .color_7 {color: rgba(176,176,176,1);}
    .backcolor_7 {background-color: rgba(176,176,176,1);}
    .color_8 {color: rgba(255,255,255,1);}
    .backcolor_8 {background-color: rgba(255,255,255,1);}
    .color_9 {color: rgba(114,114,114,1);}
    .backcolor_9 {background-color: rgba(114,114,114,1);}
    .color_10 {color: rgba(176,176,176,1);}
    .backcolor_10 {background-color: rgba(176,176,176,1);}
    .color_11 {color: #FFFFFF;}
    .backcolor_11 {background-color: #FFFFFF;}
    .color_12 {color: #EEEEEE;}
    .backcolor_12 {background-color: #EEEEEE;}
    .color_13 {color: rgba(165,165,165,1);}
    .backcolor_13 {background-color: rgba(165,165,165,1);}
    .color_14 {color: #5A5A5A;}
    .backcolor_14 {background-color: #5A5A5A;}
    .color_15 {color: #1F1F1F;}
    .backcolor_15 {background-color: #1F1F1F;}
    .color_16 {color: #FFF3D3;}
    .backcolor_16 {background-color: #FFF3D3;}
    .color_17 {color: #FFE296;}
    .backcolor_17 {background-color: #FFE296;}
    .color_18 {color: rgba(255,210,90,1);}
    .backcolor_18 {background-color: rgba(255,210,90,1);}
    .color_19 {color: #F0AE00;}
    .backcolor_19 {background-color: #F0AE00;}
    .color_20 {color: #AC7C00;}
    .backcolor_20 {background-color: #AC7C00;}
    .color_21 {color: #FFDAD5;}
    .backcolor_21 {background-color: #FFDAD5;}
    .color_22 {color: #FDA69A;}
    .backcolor_22 {background-color: #FDA69A;}
    .color_23 {color: rgba(255,116,97,1);}
    .backcolor_23 {background-color: rgba(255,116,97,1);}
    .color_24 {color: #EE2D13;}
    .backcolor_24 {background-color: #EE2D13;}
    .color_25 {color: #C91800;}
    .backcolor_25 {background-color: #C91800;}
    .color_26 {color: #FFD092;}
    .backcolor_26 {background-color: #FFD092;}
    .color_27 {color: #FFA838;}
    .backcolor_27 {background-color: #FFA838;}
    .color_28 {color: rgba(223,126,0,1);}
    .backcolor_28 {background-color: rgba(223,126,0,1);}
    .color_29 {color: #AA6000;}
    .backcolor_29 {background-color: #AA6000;}
    .color_30 {color: #724000;}
    .backcolor_30 {background-color: #724000;}
    .color_31 {color: #9BDDFF;}
    .backcolor_31 {background-color: #9BDDFF;}
    .color_32 {color: #50C3FF;}
    .backcolor_32 {background-color: #50C3FF;}
    .color_33 {color: rgba(0,154,235,1);}
    .backcolor_33 {background-color: rgba(0,154,235,1);}
    .color_34 {color: #006CA5;}
    .backcolor_34 {background-color: #006CA5;}
    .color_35 {color: #003B5A;}
    .backcolor_35 {background-color: #003B5A;}
</style><style type="text/css" data-reactid=".0.0.$s0">.s0screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s0[data-state~="mobileView"] {position:absolute !important;}
    .s0[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
    .s0[data-state~="fixedPosition"].s0_footer {top:auto;bottom:0;}
    .s0bg {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s0inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s0centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s1">.s1 {word-wrap:break-word;}
    .s1_override-left * {text-align:left !important;}
    .s1_override-right * {text-align:right !important;}
    .s1_override-center * {text-align:center !important;}
    .s1_override-justify * {text-align:justify !important;}
    .s1 li {font-style:inherit;font-weight:inherit;line-height:inherit;letter-spacing:normal;}
    .s1 ol,.s1 ul {padding-left:1.3em;padding-right:0;margin-left:0.5em;margin-right:0;line-height:normal;letter-spacing:normal;}
    .s1 ul {list-style-type:disc;}
    .s1 ol {list-style-type:decimal;}
    .s1 ul ul,.s1 ol ul {list-style-type:circle;}
    .s1 ul ul ul,.s1 ol ul ul {list-style-type:square;}
    .s1 ul ol ul,.s1 ol ol ul {list-style-type:square;}
    .s1 ul[dir="rtl"],.s1 ol[dir="rtl"] {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
    .s1 ul[dir="rtl"] ul,.s1 ul[dir="rtl"] ol,.s1 ol[dir="rtl"] ul,.s1 ol[dir="rtl"] ol {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
    .s1 p {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 h1 {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 h2 {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 h3 {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 h4 {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 h5 {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 h6 {margin:0;line-height:normal;letter-spacing:normal;}
    .s1 a {color:inherit;}</style><style type="text/css" data-reactid=".0.0.$s2">.s2bg {overflow:hidden;position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(31, 31, 31, 1);}
    .s2inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s3">.s3itemsContainer {width:calc(100% - 0px);white-space:nowrap;position:relative;overflow:hidden;}
    .s3moreContainer {overflow:visible;display:inherit;white-space:nowrap;width:auto;background-color:rgba(31, 31, 31, 1);border-radius:0;  }
    .s3dropWrapper {z-index:99999;display:block;opacity:1;visibility:hidden;position:absolute;margin-top:7px;}
    .s3dropWrapper[data-dropMode="dropUp"] {margin-top:0;margin-bottom:7px;}
    .s3repeaterButton {height:100%;position:relative;box-sizing:border-box;display:inline-block;cursor:pointer;font:normal normal normal 16px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;}
    .s3repeaterButton[data-state~="header"] a,.s3repeaterButton[data-state~="header"] div {cursor:default !important;}
    .s3repeaterButton_gapper {padding:0 5px;}
    .s3repeaterButtonlabel {display:inline-block;padding:0 10px;color:#EEEEEE;transition: color 0.4s ease 0s;}
    .s3repeaterButton[data-state~="drop"] {width:100%;display:block;}
    .s3repeaterButton[data-state~="drop"] .s3repeaterButtonlabel {padding:0 .5em;}
    .s3repeaterButton[data-state~="over"] .s3repeaterButtonlabel {color:#A5A5A5;transition: color 0.4s ease 0s;}
    .s3repeaterButton[data-state~="selected"] .s3repeaterButtonlabel {color:#A5A5A5;transition: color 0.4s ease 0s;}</style><style type="text/css" data-reactid=".0.0.$s4">.s4_zoomedin {cursor:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
    .s4_zoomedout {cursor:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
    .s4link {display:block;overflow:hidden;}
    .s4img {overflow:hidden;}
    .s4imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-reactid=".0.0.$s5">.s5 {overflow:hidden;}
    .s5 iframe {position:absolute;width:100%;height:100%;overflow:hidden;}
    .s5preloaderOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
    .s5preloaderOverlaycontent {width:100%;height:100%;}
    .s5unavailableMessageOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
    .s5unavailableMessageOverlaycontent {width:100%;height:100%;background:rgba(255, 255, 255, 0.9);font-size:0;margin-top:5px;}
    .s5unavailableMessageOverlaytextContainer {color:#373737;font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;font-size:14px;display:inline-block;vertical-align:middle;width:100%;margin-top:10px;text-align:center;}
    .s5unavailableMessageOverlay a {color:#0099FF;text-decoration:underline;cursor:pointer;}
    .s5unavailableMessageOverlayiconContainer {display:none;}
    .s5unavailableMessageOverlaydismissButton {display:none;}
    .s5unavailableMessageOverlaytextTitle {font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;display:none;}
    .s5unavailableMessageOverlay[data-state~="hideIframe"] .s5unavailableMessageOverlay_buttons {opacity:1;}
    .s5unavailableMessageOverlay[data-state~="hideOverlay"] {display:none;}</style><style type="text/css" data-reactid=".0.0.$s6">.s6screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s6[data-state~="mobileView"] {position:absolute !important;}
    .s6[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
    .s6[data-state~="fixedPosition"].s6_footer {top:auto;bottom:0;}
    .s6bg {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s6inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s6centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s7">.s7itemsContainer {position:absolute;width:100%;height:100%;white-space:nowrap;}
    .s7itemsContainer > div:last-child {margin:0 !important;}
    .s7[data-state~="mobileView"] .s7itemsContainer {position:absolute;width:100%;height:100%;white-space:normal;}
    .s7imageItemlink {cursor:pointer;}
    .s7imageItemimageimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-reactid=".0.0.$s8">.s8_zoomedin {cursor:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
    .s8_zoomedout {cursor:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
    .s8link {display:block;overflow:hidden;}
    .s8img {overflow:hidden;}
    .s8imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-reactid=".0.0.$s9">.s9screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s9[data-state~="mobileView"] {position:absolute !important;}
    .s9[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
    .s9[data-state~="fixedPosition"].s9_footer {top:auto;bottom:0;}
    .s9bg {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s9inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s9centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s10">.s10 {height:100px;width:100px;}
    .s10overlay {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(0, 0, 0, 0.664);}
    .s10inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s11">.s11bg {overflow:hidden;position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(255, 255, 255, 1);}
    .s11[data-state~="mobileView"] .s11bg {left:10px;right:10px;}
    .s11inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;bottom:20px;}</style><style type="text/css" data-reactid=".0.0.$s12">.s12bg {overflow:hidden;position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(255, 255, 255, 0.7);}
    .s12inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s13">.s13_pos {height:2.3em;position:absolute;right:0;bottom:0;left:0;text-align:center;}
    .s13showMore {cursor:pointer;display:inline-block;line-height:2.3em !important;padding:0 10px;text-decoration:underline !important;color:#1F1F1F;font:normal normal normal 13px/1.4em helvetica-w01-light,helvetica-w02-light,sans-serif ;}
    .s13[data-state~="fullView"] .s13showMore {display:none;}
    .s13itemsContainer {position:absolute;top:0;right:0;bottom:2.3em;left:0;}
    .s13imageItemtitle,.s13imageItemdescription {overflow:hidden;text-overflow:ellipsis;white-space:pre-line;overflow:hidden;text-overflow:ellipsis;}
    .s13imageItemimage,.s13imageItem_imgBorder,.s13imageItemimageWrapper,.s13imageItemzoom {border-radius:0;}
    .s13imageItemimageWrapper,.s13imageItem_imgBorder,.s13imageItemzoom {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s13imageItemimageWrapper {}
    .s13imageItem_imgBorder {border:solid 0px transparent;background:transparent;}
    .s13imageItemzoom {background:rgba(255, 255, 255, 0.7);padding:10px;opacity:0;transition: opacity 0.4s ease 0s;  overflow:hidden;}
    .s13imageItemtitle {font:normal normal normal 15px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;  color:#1F1F1F;white-space:nowrap;}
    .s13imageItemdescription {color:#1F1F1F;font:normal normal normal 13px/1.4em helvetica-w01-light,helvetica-w02-light,sans-serif ;}
    .s13imageItemlink {color:#1F1F1F;font:normal normal normal 13px/1.4em helvetica-w01-light,helvetica-w02-light,sans-serif ;  position:absolute;left:10px;right:10px;bottom:10px;text-decoration:underline !important;white-space:nowrap;}
    .s13imageItem[data-state~="noLink"] .s13imageItemlink {display:none;}
    .s13imageItem:hover .s13imageItemzoom {opacity:1;transition: opacity 0.4s ease 0s;}
    .s13imageItemimageimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-reactid=".0.0.$s14">.s14bg {border:2px solid rgba(255, 255, 255, 1);background-color:transparent;border-radius:0;  }
    .s14inlineContent,.s14bg {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s15">.s15 {border-bottom:2px solid rgba(240, 174, 0, 1);height:0 !important;min-height:0 !important;}</style><style type="text/css" data-reactid=".0.0.$s16">.s16[data-state~="shouldUseFlex"] .s16link,.s16[data-state~="shouldUseFlex"] .s16labelwrapper {text-align:initial;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-webkit-align-items:center;align-items:center;}
    .s16[data-state~="shouldUseFlex"][data-state~="center"] .s16link,.s16[data-state~="shouldUseFlex"][data-state~="center"] .s16labelwrapper {-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;}
    .s16[data-state~="shouldUseFlex"][data-state~="left"] .s16link,.s16[data-state~="shouldUseFlex"][data-state~="left"] .s16labelwrapper {-webkit-box-pack:start;-webkit-justify-content:flex-start;justify-content:flex-start;}
    .s16[data-state~="shouldUseFlex"][data-state~="right"] .s16link,.s16[data-state~="shouldUseFlex"][data-state~="right"] .s16labelwrapper {-webkit-box-pack:end;-webkit-justify-content:flex-end;justify-content:flex-end;}
    .s16link {border-radius:0;  position:absolute;top:0;right:0;bottom:0;left:0;transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
    .s16label {font:normal normal normal 19px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;  transition: color 0.4s ease 0s;  color:#FFFFFF;display:inline-block;margin:calc(-1 * 0px) 0px 0;position:relative;white-space:nowrap;}
    .s16[data-state~="shouldUseFlex"] .s16label {margin:0;}
    .s16[data-disabled="false"] .s16link {background-color:rgba(240, 174, 0, 1);border:solid rgba(31, 31, 31, 1) 0px;cursor:pointer !important;}
    .s16[data-disabled="false"]:active[data-state~="mobile"] .s16link,.s16[data-disabled="false"]:hover[data-state~="desktop"] .s16link {background-color:rgba(255, 255, 255, 1);border-color:rgba(255, 255, 255, 1);}
    .s16[data-disabled="false"]:active[data-state~="mobile"] .s16label,.s16[data-disabled="false"]:hover[data-state~="desktop"] .s16label {color:#1F1F1F;}
    .s16[data-disabled="true"] .s16link {background-color:rgba(204, 204, 204, 1);border-color:rgba(204, 204, 204, 1);}
    .s16[data-disabled="true"] .s16label {color:#FFFFFF;}</style><style type="text/css" data-reactid=".0.0.$s17">.s17bg {position:absolute;top:0;right:0;bottom:0;left:0;}
    .s17[data-state~="mobileView"] .s17bg {left:10px;right:10px;}
    .s17inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-reactid=".0.0.$s18">.s18iframe {overflow:hidden;position:absolute;width:100%;height:100%;display:block;}
    .s18[data-state~="iframeNotShown"] .s18iframe {display:none;}
    .s18[data-state~="iframeRenderedInvisible"] .s18iframe {visibility:hidden;}
    .s18preloaderOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
    .s18preloaderOverlaycontent {width:100%;height:100%;}
    .s18unavailableMessageOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
    .s18unavailableMessageOverlaycontent {width:100%;height:100%;background:rgba(255, 255, 255, 0.9);font-size:0;margin-top:5px;}
    .s18unavailableMessageOverlaytextContainer {color:#373737;font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;font-size:14px;display:inline-block;vertical-align:middle;width:100%;margin-top:10px;text-align:center;}
    .s18unavailableMessageOverlay a {color:#0099FF;text-decoration:underline;cursor:pointer;}
    .s18unavailableMessageOverlayiconContainer {display:none;}
    .s18unavailableMessageOverlaydismissButton {display:none;}
    .s18unavailableMessageOverlaytextTitle {font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;display:none;}
    .s18unavailableMessageOverlay[data-state~="hideIframe"] .s18unavailableMessageOverlay_buttons {opacity:1;}
    .s18unavailableMessageOverlay[data-state~="hideOverlay"] {display:none;}</style><style type="text/css" data-reactid=".0.0.$s19">.s19 {background:#fff;overflow:hidden;z-index:100000;box-shadow:4px 4px 15px rgba(0, 0, 0, 0.4);  border-radius:3px;}
    .s19iframe {position:absolute;width:100%;height:100%;z-index:1000;}
    .s19closeButton {position:absolute;z-index:1001;top:10px;right:10px;cursor:pointer;background:transparent url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/popup_close_x.png) no-repeat right top;height:24px;width:24px;}</style><style type="text/css" data-reactid=".0.0.$wixAds">.wixAdsmobileAd {width:100%;height:30px;position:relative;display:block;text-align:center;background-image:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/wixads/BG91x1.jpg);background-repeat:repeat;background-size:100% 30px;z-index:999;}
    .wixAdsdesktopWADBottom {position:fixed;z-index:999;width:100%;bottom:0;max-height:10vh;}
    .wixAdsdesktopWADBottomContent {width:100%;height:40px;text-align:center;background-color:#404040;border-radius:6px 6px 0 0;pointer-events:all;cursor:pointer;}
    .wixAdsdesktopWADBottomContent:hover {background-color:#222;}
    .wixAds[data-state~="facebook"] .wixAdsdesktopWADBottomContent {width:500px;margin:0 auto;}
    .wixAdsdesktopWADTop {position:fixed;z-index:999;height:26px;top:0;right:50px;overflow:hidden;background-color:#404040;border-radius:0 0 6px 6px;pointer-events:all;cursor:pointer;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out;}
    .wixAdsdesktopWADTop:hover {height:97px;background-color:rgba(50, 50, 50, 0.8);}
    .wixAdsdesktopWADTop:hover .wixAdsdesktopWADTopLabel {background-color:#222;}
    .wixAdsdesktopWADTopLabel {padding:6px;font-size:13px;line-height:1.3em;color:#FFF;width:100%;font-size:13px;color:#FFF;font-weight:bold;line-height:18px;text-align:justify;padding:5px 10px;}
    .wixAds[data-state~="desktop"] .wixAdsmobileAd {display:none;}
    .wixAds[data-state~="mobile"] .wixAdsdesktopWADTop {display:none;}
    .wixAds[data-state~="mobile"] .wixAdsdesktopWADBottom {display:none;}
    .wixAdsdesktopWADTopLabel .wixAds_smallMusa {display:inline-block;text-indent:-9999px;width:16px;height:16px;margin-right:5px;background-image:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/wixads/wf_label_static.png);background-repeat:no-repeat;background-position:0% 0%;}
    .wixAdsdesktopWADTopLabel .wixAds_smallLogo {display:inline-block;text-indent:-9999px;width:29px;height:16px;background-image:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/wixads/wf_label_static.png);background-repeat:no-repeat;background-position:-16px top;}
    .wixAdsdesktopWADTopContent {font-size:13px;line-height:1.3em;color:#ffffff;font-weight:bold;line-height:18px;text-align:justify;padding:5px 10px;width:100%;}
    .wixAdsdesktopWADBottomContent .wixAds_faceBanner {background-color:rgba(64, 64, 64, 1);width:500px;height:100%;margin:0 auto;border-radius:6px 6px 0 0;  padding:5px 0 0 0;}
    .wixAdsdesktopWADBottomContent .wixAds_faceBanner div {display:inline-block;height:30px;}
    .wixAdsdesktopWADBottomContent .wixAds_faceBanner .wixAds_txt {color:#fff;font-weight:bold;font-size:15px;text-align:justify;margin:-2px 10px 0 19px;}
    .wixAdsdesktopWADBottomContent .wixAds_faceBanner .wixAds_logoDot {position:static;margin:0 3px;}
    .wixAdsdesktopWADBottomContent .wixAds_faceBanner .wixAds_emphasis {font-weight:bold;position:relative;top:-6px;}
    .wixAdsdesktopWADTopContent .wixAds_spacer {line-height:26px;}
    .wixAdsdesktopWADTopContent .wixAds_emphasis {color:#ffcc00;}
    .wixAdsdesktopWADTopContent .wixAds_cap {font-size:16px;line-height:1.3em;text-transform:uppercase;}
    .wixAdsdesktopWADTopContent .wixAds_face {display:block;line-height:18px;text-align:justify;padding:0 20px;width:120px;}
    .wixAdsdesktopWADBottomContent .wixAds_adFootBox {height:40px;width:100%;text-align:center;}
    .wixAdsdesktopWADBottomContent .wixAds_siteBanner {background-color:rgba(64, 64, 64, 1);border-radius:6px 6px 0 0;  width:100%;height:100%;text-align:center;}
    .wixAdsdesktopWADBottomContent:hover .wixAds_siteBanner {background-color:#222;}
    .wixAdsdesktopWADBottomContent .wixAds_siteBanner .wixAds_wrapper {padding:5px 0;}
    .wixAdsdesktopWADBottomContent .wixAds_siteBanner .wixAds_wrapper div {display:inline-block;height:30px;}
    .wixAdsdesktopWADBottomContent .wixAds_bigMusa {text-indent:-9999px;width:36px;background-image:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/wixads/wf_label_static.png);background-repeat:no-repeat;background-position:left bottom;position:relative;top:-19px;}
    .wixAdsdesktopWADBottomContent.wixAds_nativeAndroid .wixAds_bigMusa {overflow:hidden;}
    .wixAdsdesktopWADBottomContent .wixAds_logoDot {text-indent:-9999px;width:39px;height:15px;position:relative;top:-4px;margin:0 5px;background-image:url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/wixads/wf_label_static.png);background-repeat:no-repeat;background-position:right -17px;}
    .wixAdsdesktopWADBottomContent .wixAds_emphasis {color:#ffcc00;font-size:16px;text-transform:uppercase;}
    .wixAdsdesktopWADBottomContent .wixAds_txt {color:#fff;font-weight:bold;font-size:15px;}
    .wixAdsdesktopWADBottomContent .wixAds_siteBanner .wixAds_txt {line-height:47px;}@media (orientation: landscape){.wixAdsmobileAd {display:none;}}
    @media (orientation: landscape){.wixAds_wixAds[data-state~="mobile"] {display:none;}}</style><style type="text/css" data-reactid=".0.0.$deadComp">.deadComp {background:transparent;}</style><style type="text/css" data-reactid=".0.0.$siteBackground">.siteBackground {width:100%;position:absolute;}
    .siteBackgroundbgBeforeTransition {position:absolute;top:0;}
    .siteBackgroundbgAfterTransition {position:absolute;top:0;}</style><style type="text/css" data-reactid=".0.0.$loginDialog">.loginDialog {position:fixed;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;}
    .loginDialogblockingLayer {background-color:rgba(85, 85, 85, 0.75);position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;}
    .loginDialogdialog {background-color:rgba(170, 170, 170, 0.7);width:455px;position:fixed;padding:20px;}
    .loginDialog_wrapper {background-color:rgba(255, 255, 255, 1);padding:45px 40px 0 40px;}
    .loginDialogxButton {position:absolute;top:-14px;right:-14px;cursor:pointer;background:transparent url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/viewer_login_sprite.png) no-repeat right top;height:30px;width:30px;}
    .loginDialogxButton:hover {background-position:right -80px;}
    .loginDialogheader {padding-bottom:25px;line-height:30px;}
    .loginDialogfavIcon {float:left;margin:7px 7px 0 0;width:16px;height:16px;}
    .loginDialogtitle {font-size:20px;font-weight:bold;color:#555555;}
    .loginDialog[data-state~="mobile"] {position:absolute;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;top:0;}
    .loginDialog[data-state~="mobile"] .loginDialogheader {padding-bottom:10px;line-height:30px;}
    .loginDialog[data-state~="mobile"] .loginDialogfavIcon {display:none;}
    .loginDialog[data-state~="mobile"] .loginDialogtitle {font-size:14px;}
    .loginDialog[data-state~="mobile"] .loginDialogdialog {width:260px;padding:10px;position:absolute;}
    .loginDialog[data-state~="mobile"] .loginDialog_footer {margin-top:0;padding-bottom:10px;}
    .loginDialog[data-state~="mobile"] .loginDialogcancel {font-size:14px;line-height:30px;}
    .loginDialog[data-state~="mobile"] .loginDialog_wrapper {padding:14px 12px 0 12px;}
    .loginDialog[data-state~="mobile"] .loginDialogsubmitButton {height:30px;width:100px;font-size:14px;}
    .loginDialog_forgot {text-align:left;font-size:12px;}
    .loginDialog_forgot a {color:#0198ff;border-bottom:1px solid #0198ff;}
    .loginDialog_forgot a:hover {color:#0044ff;border-bottom:1px solid #0044ff;}
    .loginDialog_error {font-size:12px;color:#d74401;text-align:right;}
    .loginDialog_footer {width:100%;margin-top:27px;padding-bottom:40px;}
    .loginDialogcancel {color:#9C9C9C;font-size:18px;text-decoration:underline;line-height:36px;}
    .loginDialogcancel:hover {color:#9c3c3c;}
    .loginDialogpasswordInput label {font-size:14px;}
    .loginDialogpasswordInput label[data-type="password"] {font-size:14px;line-height:30px;height:30px;}
    .loginDialogsubmitButton {float:right;cursor:pointer;border:solid 2px #0064a8;height:36px;width:143px;background:transparent url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -252px;color:#ffffff;font-size:24px;font-weight:bold;box-shadow:0 1px 3px rgba(0, 0, 0, 0.5);}
    .loginDialogsubmitButton:hover {background-position:right -352px;border-color:#004286;}
    .loginDialog[data-state="normal"] .loginDialogerror {display:none;}
    .loginDialog[data-state="error"] .loginDialogerror {display:block;font-size:12px;color:#d74401;text-align:right;}
    .loginDialog[data-state="error"] .loginDialogpasswordInput {border-color:#d74401;}
    .loginDialogpasswordInput {font-size:1em;}
    .loginDialogpasswordInput label {float:none;font-size:17px;line-height:25px;color:#585858;}
    .loginDialogpasswordInput[data-state~="mobile"] label {float:none;font-size:14px;line-height:20px;color:#585858;}
    .loginDialogpasswordInputinput {padding:0 15px;width:100%;height:42px;font-size:19px;line-height:42px;color:#0198ff;margin:0 -3px;background:transparent url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
    .loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput {padding:0 15px;width:100%;height:30px;font-size:14px;line-height:30px;color:#0198ff;margin:0 -3px;background:transparent url(http://static.parastorage.com/services/skins/2.1229.63/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
    .loginDialogpasswordInputinput[data-type="password"] {font-size:38px;}
    .loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput[data-type="password"] {font-size:14px;}
    .loginDialogpasswordInputerrorMessage {display:block;font-size:12px;color:#d74401;text-align:right;height:15px;}
    .loginDialogpasswordInput:not([data-state~="invalid"]) .loginDialogpasswordInputerrorMessage {visibility:hidden;}
    .loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputerrorMessage {visibility:visible;}
    .loginDialogpasswordInput[data-state~="invalid"] input {border-color:#d74401;}
    .loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputinput {border-color:red;}
</style>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div id="wrapper" class="container">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= Url::home() ?>">Akssesuari.uz</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <?= Menu::widget([
                        'options' => ['class' => 'nav navbar-nav'],
                        'items' => [
                            //['label' => Yii::t('app', 'Home'), 'url' => ['site/index']],
                            ['label' => Yii::t('app', 'Shop'), 'url' => ['shop/index']],
                            ['label' => Yii::t('app', 'News'), 'url' => ['news/index']],
                            //['label' => Yii::t('app', 'Articles'), 'url' => ['articles/index']],
                            //['label' => Yii::t('app', 'Gallery'), 'url' => ['gallery/index']],
                            ['label' => Yii::t('app', 'Guestbook'), 'url' => ['guestbook/index']],
                            ['label' => Yii::t('app', 'FAQ'), 'url' => ['faq/index']],
                            ['label' => Yii::t('app', 'Contact'), 'url' => ['/contact/index']],
                        ],
                    ]); ?>
                    <!--<a href="<?/*= Url::to(['/shopcart']) */?>" class="btn btn-default navbar-btn navbar-right" title="Complete order">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <?php /*if($goodsCount > 0) : */?>
                            <?/*= $goodsCount */?> <?/*= $goodsCount > 1 ? 'items' : 'item' */?> - <?/*= Shopcart::cost() */?>$
                        <?php /*else : */?>
                            <span class="text-muted"><?/*=Yii::t('app', 'empty')*/?></span>
                        <?php /*endif; */?>
                    </a>-->

                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php if($this->context->id != 'site') : ?>
            <br/>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        <?php endif; ?>
        <?= $content ?>
        <div class="push"></div>
    </main>

    <footer>
        <div
             style="position: absolute; width: auto; left: auto; height: 287px;bottom: auto; /*top: 1949px;*/"
             class="s6_footer s6" data-state=" "
             id="SITE_FOOTER" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER">
            <div id="SITE_FOOTERscreenWidthBackground" class="s6screenWidthBackground"
                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.0"
                 style="width: 1337px; left: -179px;">
            </div>
            <div id="SITE_FOOTERcenteredContent" class="s6centeredContent"
                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1">
                <div id="SITE_FOOTERbg" class="s6bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.0"></div>
                <div id="SITE_FOOTERinlineContent" class="s6inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1">
                    <div style="left: 0px; width: 981px; position: absolute; top: 49px; height: 237px;" class="s2"
                         id="idu6k5ji" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji">
                        <div id="idu6k5jibg" class="s2bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.0"></div>
                        <div id="idu6k5jiinlineContent" class="s2inlineContent"
                             data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1">
                            <div style="left: 33px; width: 334px; position: absolute; top: 30px;" class="s1" id="i234gtml"
                                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i234gtml">
                                <p style="line-height:2.25em;" class="font_7"><span class="color_12"><span style="line-height:2.25em;">Свяжитесь с нами</span></span></p>

                                <p style="line-height:1.5em;" class="font_8"><span class="color_12">ул. Арбат, 1а, Москва,</span></p>

                                <p style="line-height:1.5em;" class="font_8">
                                    <span class="color_12"><span style="line-height:1.5em;">119019, Россия.</span></span>
                                    <span class="color_11"><span style="line-height:1.5em;">&nbsp;</span>Тел. +7 (495) 000-00-00</span>
                                </p>

                                <p style="line-height:1.5em;" class="font_8"><span class="color_12"><span style="line-height:1.5em;">info@mysite.ru&nbsp;</span></span></p>
                            </div>
                            <div style="width: 137px; left: 24px; position: absolute; top: 144px; height: 33px;" class="s7"
                                 id="i0fa8euo" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo">
                                <div id="i0fa8euoitemsContainer" class="s7itemsContainer" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0">
                                    <div style="width:32px;height:32px;margin-bottom:0;margin-right:3px;display:inline-block;"
                                         class="s7imageItem" id="i0fa8euo0image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.0">
                                        <a href="http://www.twitter.com/wix" target="_blank" data-content="http://www.twitter.com/wix"
                                           data-type="external" id="i0fa8euo0imagelink" class="s7imageItemlink"
                                           data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.0.0">
                                            <div style="position: absolute; width: 32px; height: 32px;" id="i0fa8euo0imageimage"
                                                 class="s7imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.0.0.0">
                                                <div class="s7imageItemimagepreloader" id="i0fa8euo0imageimagepreloader"
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.0.0.0.0"></div>
                                                <img id="i0fa8euo0imageimageimage" alt=""
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.0.0.0.$image"
                                                     src="https://static.wixstatic.com/media/01ab6619093f45388d66736ec22e5885.png/v1/fill/w_32,h_32,al_c,usm_0.66_1.00_0.01/01ab6619093f45388d66736ec22e5885.png"
                                                     style="width: 32px; height: 32px; object-fit: cover;"></div>
                                        </a>
                                    </div>
                                    <div style="width:32px;height:32px;margin-bottom:0;margin-right:3px;display:inline-block;"
                                         class="s7imageItem" id="i0fa8euo1image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.1">
                                        <a href="http://www.facebook.com/wix" target="_blank" data-content="http://www.facebook.com/wix"
                                           data-type="external" id="i0fa8euo1imagelink" class="s7imageItemlink"
                                           data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.1.0">
                                            <div style="position: absolute; width: 32px; height: 32px;" id="i0fa8euo1imageimage"
                                                 class="s7imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.1.0.0">
                                                <div class="s7imageItemimagepreloader" id="i0fa8euo1imageimagepreloader"
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.1.0.0.0">
                                                </div><img id="i0fa8euo1imageimageimage" alt=""
                                                           data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.1.0.0.$image"
                                                           src="https://static.wixstatic.com/media/23fd2a2be53141ed810f4d3dcdcd01fa.png/v1/fill/w_32,h_32,al_c,usm_0.66_1.00_0.01/23fd2a2be53141ed810f4d3dcdcd01fa.png"
                                                           style="width: 32px; height: 32px; object-fit: cover;">
                                            </div>
                                        </a>
                                    </div>
                                    <div style="width:32px;height:32px;margin-bottom:0;margin-right:3px;display:inline-block;"
                                         class="s7imageItem" id="i0fa8euo2image"
                                         data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.2">
                                        <a href="http://plus.google.com/+Wix/posts" target="_blank"
                                           data-content="http://plus.google.com/+Wix/posts" data-type="external" id="i0fa8euo2imagelink"
                                           class="s7imageItemlink" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.2.0">
                                            <div style="position: absolute; width: 32px; height: 32px;" id="i0fa8euo2imageimage"
                                                 class="s7imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.2.0.0">
                                                <div class="s7imageItemimagepreloader" id="i0fa8euo2imageimagepreloader"
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.2.0.0.0">

                                                </div>
                                                <img id="i0fa8euo2imageimageimage" alt=""
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.2.0.0.$image"
                                                     src="https://static.wixstatic.com/media/eb9767422f0e4c41a507d3e67c4ebac8.png/v1/fill/w_32,h_32,al_c,usm_0.66_1.00_0.01/eb9767422f0e4c41a507d3e67c4ebac8.png"
                                                     style="width: 32px; height: 32px; object-fit: cover;">
                                            </div>
                                        </a>
                                    </div>
                                    <div style="width:32px;height:32px;margin-bottom:0;margin-right:3px;display:inline-block;"
                                         class="s7imageItem" id="i0fa8euo3image" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.3">
                                        <a href="http://instagram.com/wix" target="_blank" data-content="http://instagram.com/wix"
                                           data-type="external" id="i0fa8euo3imagelink" class="s7imageItemlink"
                                           data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.3.0">
                                            <div style="position: absolute; width: 32px; height: 32px;" id="i0fa8euo3imageimage"
                                                 class="s7imageItemimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.3.0.0">
                                                <div class="s7imageItemimagepreloader" id="i0fa8euo3imageimagepreloader"
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.3.0.0.0"></div>
                                                <img id="i0fa8euo3imageimageimage" alt=""
                                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fa8euo.0.3.0.0.$image"
                                                     src="https://static.wixstatic.com/media/6cc776af25744f77ab9c420b98d1abe6.png/v1/fill/w_32,h_32,al_c,usm_0.66_1.00_0.01/6cc776af25744f77ab9c420b98d1abe6.png"
                                                     style="width: 32px; height: 32px; object-fit: cover;">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div style="left: 405px; width: 346px; position: absolute; top: 32px;" class="s1" id="i234gtml_0"
                                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i234gtml_0">
                                <p style="line-height:2em;" class="font_7"><span class="color_12"><span style="line-height:2em;">Обслуживание клиентов</span></span></p>

                                <p style="line-height:1.5em;" class="font_7">
                                    <a href="#" target="_self">
                                        <span style="line-height:1.5em;">
                                            <span class="color_19">Контакты &gt; &nbsp;</span>
                                            <span class="color_12">/</span>
                                            <span class="color_19">&nbsp;&nbsp;</span>
                                        </span>
                                    </a>
                                    <a href="#" target="_self" data-anchor="c1iot"
                                       style="color:rgb(0, 0, 0); line-height:normal;">
                                        <span class="color_19"><span style="line-height:1.5em;">Доставка &gt;</span></span>
                                    </a>
                                </p>

                                <p style="line-height:1.5em;" class="font_7">
                                    <a href="#" target="_self" data-anchor="c1i0r" style="line-height:normal;">
                                        <span style="line-height:1.5em;">
                                            <span class="color_19">Возврат&nbsp;</span><span class="color_19">&gt; &nbsp;</span>
                                            <span class="color_12">/</span><span class="color_11"> &nbsp;</span>
                                            <span style="color:rgb(7, 176, 196);">&nbsp;</span>
                                        </span>
                                    </a>
                                    <a href="#" target="_self" data-anchor="cl0b" style="color:rgb(0, 0, 0); line-height:normal;">
                                        <span class="color_19"><span style="line-height:1.5em;">Оплата и гарантия &gt;</span></span>
                                    </a>
                                </p>
                            </div>
                            <div style="left: 891px; position: absolute; top: 76px; width: 42px; height: 27px;"
                                 data-exact-height="27" data-content-padding-horizontal="0"
                                 data-content-padding-vertical="0" title="" class="s8" id="i0fb3pwq"
                                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwq">
                                <div style="width: 42px; height: 27px;" id="i0fb3pwqlink" class="s8link"
                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwq.0">
                                    <div style="position: relative; width: 42px; height: 27px;" id="i0fb3pwqimg"
                                         class="s8img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwq.0.0">
                                        <div class="s8imgpreloader" id="i0fb3pwqimgpreloader"
                                             data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwq.0.0.0">
                                        </div>
                                        <img id="i0fb3pwqimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwq.0.0.$image"
                                             src="https://static.wixstatic.com/media/1f3c0f_4a36fc6977c9425c85a56116aad7c61c.png/v1/fill/w_42,h_27,al_c,usm_0.66_1.00_0.01/1f3c0f_4a36fc6977c9425c85a56116aad7c61c.png"
                                             style="width: 42px; height: 27px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div style="left: 834px; position: absolute; top: 76px; width: 42px; height: 27px;"
                                 data-exact-height="27" data-content-padding-horizontal="0"
                                 data-content-padding-vertical="0" title="" class="s8" id="i0fb3pwj"
                                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwj">
                                <div style="width: 42px; height: 27px;" id="i0fb3pwjlink" class="s8link"
                                     data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwj.0">
                                    <div style="position: relative; width: 42px; height: 27px;" id="i0fb3pwjimg"
                                         class="s8img"
                                         data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwj.0.0">
                                        <div class="s8imgpreloader" id="i0fb3pwjimgpreloader"
                                             data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwj.0.0.0">
                                        </div>
                                        <img id="i0fb3pwjimgimage" alt=""
                                             data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i0fb3pwj.0.0.$image"
                                             src="https://static.wixstatic.com/media/1f3c0f_4a4bd94be1dd4d599d59b8aa9ba936d6.png/v1/fill/w_42,h_27,al_c,usm_0.66_1.00_0.01/1f3c0f_4a4bd94be1dd4d599d59b8aa9ba936d6.png"
                                             style="width: 42px; height: 27px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div style="left: 816px; width: 148px; position: absolute; top: 32px;" class="s1"
                                 id="i24d6yx9" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$i24d6yx9">
                                <p class="font_7"><span class="color_12">Мы принимаем</span></p>
                            </div>
                            <div style="left: 498px; width: 435px; position: absolute; top: 208px;" class="s1"
                                 id="WRchTxt0-16wb"
                                 data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_FOOTER.1.1.$idu6k5ji.1.$WRchTxt0-16wb">
                                <p style="text-align:right;" class="font_9">
                                    <span class="color_12">© 2017 Aksesuari.uz</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="container footer-content">
        <div class="row">
            <div class="col-md-2">
                Subscribe to newsletters
            </div>
            <div class="col-md-6">
                <?php /*if(Yii::$app->request->get(Subscribe::SENT_VAR)) : */?>
                    You have successfully subscribed
                <?php /*else : */?>
                    <?/*= Subscribe::form() */?>
                <?php /*endif; */?>
            </div>
            <div class="col-md-4 text-right">
                ©2017 noumo
            </div>
        </div>
    </div>-->
    </footer>
</div>

<?php $this->endContent(); ?>
