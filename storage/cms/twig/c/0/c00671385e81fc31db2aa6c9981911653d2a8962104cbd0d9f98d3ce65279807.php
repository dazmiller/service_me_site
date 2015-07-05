<?php

/* C:\lamp\www\serviceme/themes/serviceme/layouts/browser.htm */
class __TwigTemplate_c00671385e81fc31db2aa6c9981911653d2a8962104cbd0d9f98d3ce65279807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\" xmlns:og=\"http://opengraphprotocol.org/schema/\"
xmlns:fb=\"http://www.facebook.com/2008/fbml\" ng-app=\"onetuneApp\">

<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"apple-itunes-app\" content=\"app-id=924272509\">
\t<title>Service Me</title>
\t<link id=\"favicon\" rel=\"shortcut icon\" type=\"image/png\" href=\"\"/>
\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:600,400,300\">





    <!-- ***** Bootstrap CSS Stylesheet ***** -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.css"));
        echo "\">


<!-- ***** Addons Stylesheet ***** -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/rev-settings.css"));
        echo "\" media=\"screen\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/responsive-devices.css"));
        echo "\" />

    <!-- ***** Updates CSS Stylesheet (for future templates updates ***** -->




    <!--<script src=\"";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/browser/jquery.js");
        echo "\"></script>-->
    <script type= \"text/javascript\"SRC=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script SRC=\"assets/js/jquery.min.js\">\\x3C/script>')</script>
<!--\t<script src=\"";
        // line 31
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/browser/knockout.js");
        echo "\"></script>-->
    ";
        // line 32
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 33
        echo "  

    <meta property='og:image' content=''>
    <meta property='og:title' content='OneTune - Free music streaming'>
    <meta property='og:url' content='http://onetune.fm'>
    <meta property='og:site_name' content='OneTune'>
    <meta property='og:description' content='The free, open music platform'>


<style>




.white {
    color: #fff
}

.center {
    text-align: center
}

.left {
    text-align: left
}

.right {
    text-align: right
}

.fnone {
    float: none!important
}

.fleft {
    float: left
}

.fright {
    float: right
}

.inline-block {
    display: inline-block
}

.block {
    display: block
}

.italic {
    font-style: italic
}

.rounded {
    border-radius: 50%
}

.width100 {
    width: 100%
}

.thin-shadow {
    box-shadow: 0 1px 1px rgba(0,0,0,.15)
}

.relative {
    position: relative!important
}

.weight300 {
    font-weight: 300
}

.size17 {
    font-size: 17px!important;
    line-height: 22px!important
}

.size18 {
    font-size: 18px!important
}

.size20 {
    font-size: 20px!important
}

.l30 {
    line-height: 30px
}

.bg-white {
    background-color: #fff!important
}

.ptop5 {
    padding-top: 5px
}

.ptop10 {
    padding-top: 10px
}

.ptop50 {
    padding-top: 50px
}

.ptop70 {
    padding-top: 70px
}

.ptop100 {
    padding-top: 100px
}

.pbottom50 {
    padding-bottom: 50px
}

.pbottom70 {
    padding-bottom: 70px
}

.pbottom80 {
    padding-bottom: 80px
}

.pright0 {
    padding-right: 0
}

.pright25 {
    padding-right: 25px
}

.pright30 {
    padding-right: 30px
}

.pleft0 {
    padding-left: 0
}

.mauto {
    margin: 0 auto
}

.m0 {
    margin: 0 !important;
}

.mtop5 {
    margin-top: 5px
}

.mtop20 {
    margin-top: 20px
}

.mtop25 {
    margin-top: 25px
}

.mtop30 {
    margin-top: 30px
}

.mtop40 {
    margin-top: 40px
}

.mtop50 {
    margin-top: 50px
}

.mtop70 {
    margin-top: 70px
}

.mtop100 {
    margin-top: 100px
}

.mtop106 {
    margin-top: 106px
}

.mtop130 {
    margin-top: 130px
}

.mbottom0 {
    margin-bottom: 0
}

.mbottom5 {
    margin-bottom: 5px
}

.mbottom10 {
    margin-bottom: 10px
}

.mbottom15 {
    margin-bottom: 15px
}

.mbottom20 {
    margin-bottom: 20px
}

.mbottom25 {
    margin-bottom: 25px
}

.mbottom30 {
    margin-bottom: 30px !Important;
}

.mbottom35 {
    margin-bottom: 35px
}

.mbottom40 {
    margin-bottom: 40px !important;
}

.mbottom50 {
    margin-bottom: 50px!important
}

.mbottom60 {
    margin-bottom: 60px
}

.mbottom70 {
    margin-bottom: 70px
}

.mbottom80 {
    margin-bottom: 80px
}

.mbottom90 {
    margin-bottom: 90px
}

.mbottom100 {
    margin-bottom: 100px
}

.mleft5 {
    margin-left: 5px
}

.mleft10 {
    margin-left: 10px
}

.mleft15 {
    margin-left: 15px
}

.mleft20 {
    margin-left: 20px
}

.mleft30 {
    margin-left: 30px
}

.mleft50 {
    margin-left: 50px
}

.mleft60 {
    margin-left: 60px
}

.mleft65 {
    margin-left: 65px
}

.mleft80 {
    margin-left: 80px
}

.mleft85 {
    margin-left: 85px
}

.mleft90 {
    margin-left: 90px
}

.mleft160 {
    margin-left: 160px
}

.mleft240 {
    margin-left: 240px
}

.mright5 {
    margin-right: 5px
}

.mright10 {
    margin-right: 10px
}

.mright25 {
    margin-right: 25px
}

.mleft230 {
    margin-left: 230px
}

.mright15 {
    margin-right: 15px
}

.line {
    display: inline-block;
    width: 50px;
    border: 1px solid #ff525e;
    margin-bottom: 50px
}

.radius50 {
    border-radius: 50%
}

.animation {
    -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out
}

.spin {
    -webkit-animation: spin 2s infinite linear;
    -moz-animation: spin 2s infinite linear;
    -o-animation: spin 2s infinite linear;
    animation: spin 2s infinite linear
}

@-moz-keyframes spin {
    from {
        -moz-transform: rotate(0deg)
    }

    to {
        -moz-transform: rotate(360deg)
    }
}

@-webkit-keyframes spin {
    from {
        -webkit-transform: rotate(0deg)
    }

    to {
        -webkit-transform: rotate(360deg)
    }
}

@keyframes spin {
    from {
        transform: rotate(0deg)
    }

    to {
        transform: rotate(360deg)
    }
}

.separator {
    display: block;
    border: 1px solid #e5e4e4
}

#page-wrapper {
    background: #fff
}

#header {
    background-color: #fff;
    min-height: 100px;
    position: fixed;
    top: 0;
    transition: top .2s ease-in-out;
    width: 100%;
    z-index: 11111;
    box-shadow: 0 0 10px rgba(0,0,0,.2)
}

#slideshow {
    position: relative;
    overflow: hidden
}

.header1+#boxed-slideshow,.header1+#slideshow {
    margin-top: 106px
}

.header2+#boxed-slideshow,.header2+#slideshow {
    margin-top: 142px
}

.header3+#boxed-slideshow,.header3+#slideshow {
    margin-top: 130px
}

.header4+#boxed-slideshow,.header4+#slideshow {
    margin-top: 170px
}

.header5+#boxed-slideshow,.header5+#slideshow {
    margin-top: 0
}

.header1+#content,.header6+#boxed-slideshow,.header6+#slideshow {
    margin-top: 106px
}

.header2+#content {
    margin-top: 142px
}

.header3+#content {
    margin-top: 130px
}

.header4+#content {
    margin-top: 170px
}

.header1+.header-breadcrumb,.header5+#content,.header6+#content {
    margin-top: 106px
}

.header2+.header-breadcrumb {
    margin-top: 142px
}

.header3+.header-breadcrumb {
    margin-top: 130px
}

.header4+.header-breadcrumb {
    margin-top: 170px
}

.header1+#sub-header,.header5+.header-breadcrumb,.header6+.header-breadcrumb {
    margin-top: 106px
}

.header2+#sub-header {
    margin-top: 142px
}

.header3+#sub-header {
    margin-top: 130px
}

.header4+#sub-header {
    margin-top: 170px
}

.header1+#shop-header,.header5+#sub-header,.header6+#sub-header {
    margin-top: 106px
}

.header2+#shop-header {
    margin-top: 142px
}

.header3+#shop-header {
    margin-top: 130px
}

.header4+#shop-header {
    margin-top: 170px
}

.header5+#shop-header,.header6+#shop-header {
    margin-top: 106px
}

#header.nav-up {
    top: -200px
}

#header.nav-up.sticky {
    top: 0
}

#preloader {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    z-index: 99999;
    position: fixed
}

#status {
    width: 200px;
    height: 200px;
    position: absolute;
    left: 50%;
    top: 50%;
    background-image: url(../themes/serviceme/assets/images/preload.gif);
    background-repeat: no-repeat;
    background-position: center;
    margin: -100px 0 0 -100px
}

h1#logo {
    margin: 0
}

#logo {
    float: left;
    padding: 30px 0 31px
}

#logo .only-transparent {
    display: none
}

.logo-container {
    z-index: 1001
}

.logo-container.hasinfocard {
    position: relative
}

.logo-container.hasinfocard:before {
    content: url(../themes/serviceme/assets/images/hoverme.png);
    width: 98px;
    height: 35px;
    right: 100%;
    margin-right: 20px;
    top: 21px;
    position: absolute
}

#infocard {
    position: absolute;
    top: 98px;
    margin-top: 20px;
    width: 440px;
    padding: 30px 20px 25px;
    background: #FF525E;
    color: #fff;
    border-radius: 2px;
    font-size: 12px;
    display: block;
    visibility: hidden;
    opacity: 0;
    box-shadow: 0 2px 3px rgba(0,0,0,.4);
    -webkit-transition: all .15s ease-out;
    -moz-transition: all .15s ease-out;
    -ms-transition: all .15s ease-out;
    transition: all .15s ease-out;
    -webkit-transition-delay: .3s;
    -moz-transition-delay: .3s;
    -ms-transition-delay: .3s;
    -o-transition-delay: .3s;
    transition-delay: .3s;
    -webkit-backface-visibility: hidden
}

.logo-container.hasinfocard:hover #infocard {
    visibility: visible;
    opacity: 1;
    margin-top: 12px;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -ms-transition-delay: 0s;
    -o-transition-delay: 0s;
    -transition-delay: 0s
}

#infocard h2 {
    font-size: 12px;
    color: #fff;
    line-height: 20px
}

#infocard p {
    color: #fff;
    margin-bottom: 0
}

#infocard .info-social p {
    font-size: 15px;
    text-transform: uppercase
}

#infocard .info-social li {
    display: inline-block;
    margin-right: 20px
}

#infocard .info-social li:first-child,#infocard .info-social li:last-child {
    margin-right: 0
}

#infocard .info-social li a {
    color: #fff
}

#infocard .info-social li span {
    font-size: 18px
}

#back-top {
    position: fixed;
    bottom: 30px;
    right: 15px;
    background: #ff525e;
    border-radius: 4px;
    border-bottom: solid 2px #d84852
}

#back-top a {
    color: #fff;
    padding: 5px 13px;
    line-height: 30px
}

#back-top:active {
    border-bottom: none
}

#panel {
    background: #ff525e;
    padding: 8px 0;
    display: none
}

.slide {
    border-top: solid 4px #ff525e
}

.active-panel {
    background-position: right 12px
}

.slide span {
    background: #ff525e;
    color: #fff;
    font-size: 13px;
    padding: 6px;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
    position: absolute;
    right: 14px;
    line-height: 6px;
    z-index: 1002
}

#panel ul.info-left {
    float: left
}

#panel ul.info-left li {
    color: #fff;
    float: left;
    margin-right: 15px;
    border-right: solid 1px;
    padding-right: 10px
}

#panel ul.info-left li:last-child {
    border-right: 0
}

#panel ul.info-left li p {
    font-family: Roboto,Helvetica,Arial,sans-serif;
    display: inline-block;
    margin-bottom: 0;
    color: #fff
}

#panel ul.info-left li span {
    margin-right: 5px
}

#panel ul.info-right {
    float: right
}

#panel ul.info-right li {
    color: #fff;
    display: inline-block;
    width: 26px;
    height: 24px;
    text-align: center;
    margin-right: 7px;
    background-color: rgba(255,255,255,.5);
    border-radius: 50%
}

#panel ul.info-right li span {
    color: #fff;
    margin-left: 1px;
    line-height: 24px
}

#panel ul.info-right li a {
    display: block;
    line-height: 26px
}

.language .globe {
    float: right;
    font-size: 15px;
    color: #000;
    cursor: pointer;
    margin-top: 42px;
    margin-right: 18px
}

.language .dropdown-menu {
    min-width: 120px;
    top: 100px;
    right: 0;
    left: auto;
    border-radius: 0;
    box-shadow: none
}

.language .dropdown-menu>li>a {
    float: left
}

.language .dropdown-menu>li>a:hover {
    background: none!important
}

.language .dropdown-menu>li>a:hover+.flag-img {
    opacity: 1
}

.language .dropdown-menu>li>a:focus {
    outline: 0;
    background: none!important
}

.flag-img {
    float: right;
    opacity: .7;
    margin-top: 7px;
    margin-right: 20px
}

.header3 #main-menu {
    margin-right: 100px
}

.header3 .globe {
    margin-top: 15px !important;
}

.header3 .language .dropdown-menu {
    top: 47px
}

.header4 .language .globe {
    margin-top: 17px
}

.header4 #main-menu {
    margin-right: 100px
}

.header4 .language .dropdown-menu {
    top: 51px
}

.header5:not(.fillbg) .language .globe {
    color: #fff
}

.searchPanel {
    float: right;
    margin-top: 40px;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -ms-transition: all .3s;
    -o-transition: all .3s
}

.searchPanel span {
    cursor: pointer;
    color: #000;
    font-size: 15px
}

.searchPanel .searchForm {
    display: none;
    opacity: 0;
    position: absolute;
    right: -15px;
    top: 30px;
    width: 260px;
    z-index: 999;
    border-radius: 2px;
    border: 1px solid #ddd;
    background: #fff
}

.searchPanel .searchForm:before {
    top: -22px
}

.searchPanel .searchForm:after,.searchPanel .searchForm:before {
    bottom: 40px;
    right: 17px;
    border: solid transparent;
    content: \" \";
    height: 0;
    width: 0;
    position: absolute
}

.searchPanel .searchForm:after {
    border-color: rgba(255,255,255,0);
    border-bottom-color: #fff;
    border-width: 11px;
    margin-left: -11px
}

.searchPanel .searchForm:before {
    border-color: rgba(221,221,221,0);
    border-bottom-color: #ddd;
    border-width: 11px;
    margin-left: -12px
}

.searchPanel .searchForm.active {
    display: block;
    opacity: 1;
    top: 115px;
    right: 12px
}

.searchPanel .searchBox {
    font-size: 14px;
    padding: 10px 15px;
    width: 100%;
    height: 100%;
    border: 0;
    outline: 0
}

#cart {
    float: right;
    margin-top: 40px;
    font-size: 15px;
    color: #000;
    cursor: pointer;
    padding-bottom: 40px;
    padding-left: 20px
}

#cart .cart-container {
    position: absolute;
    z-index: 111;
    visibility: hidden;
    right: 0;
    top: 130px;
    opacity: 0;
    -webkit-transition: opacity .4s ease,top .45s ease;
    -moz-transition: opacity .4s ease,top .45s ease;
    -ms-transition: opacity .4s ease,top .45s ease;
    -o-transition: opacity .4s ease,top .45s ease;
    transition: opacity .4s ease,top .45s ease
}

#cart:hover .cart-container {
    visibility: visible;
    opacity: 1;
    top: 102px
}

#cart .cart-container ul {
    min-width: 250px;
    cursor: initial
}

#cart .cart-container .cart-item {
    display: inline-block;
    width: 100%;
    padding: 10px;
    position: relative
}

#cart .cart-container .cart-item img {
    float: left;
    margin-right: 20px
}

#cart .cart-container .cart-item h4 {
    display: inline-block;
    margin-top: 10px;
    font-size: 16px;
    margin-bottom: 0
}

#cart .cart-container .cart-item span {
    display: block;
    font-size: 13px
}

#cart .cart-container li {
    border-top: solid 1px #e6e6e6;
    background: #fff
}

#cart .cart-container .total {
    background-color: #f4f4f4;
    color: #505050;
    display: block;
    padding: 10px
}

#cart .cart-container .total p {
    margin-bottom: 0
}

#cart .cart-container .checkout {
    background: #ff525e
}

#cart .cart-container .checkout a {
    color: #fff;
    padding: 10px;
    display: block
}

#cart .cart-container .close-btn {
    content: \"\\e607\";
    font-family: icomoon;
    color: #ff525e;
    font-size: 11px
}

.remove-item {
    font-size: 9px;
    float: right;
    position: absolute;
    right: 15px;
    top: 39px
}

.header-breadcrumb {
    background: #fafafa;
    padding: 20px 0;
    border-bottom: solid 1px #F0F0F0;
}

.header-breadcrumb ul {
    float: right
}



#current-date {
    float: right;
    clear: right;
    background: rgba(255,255,255,.56);
    color: #383838;
    padding: 0 10px;
    margin-top: 10px
}

.tp-bannertimer,.tp-bullets {
    display: none
}

.tp-leftarrow.default,.tp-rightarrow.default {
    z-index: 100;
    width: 60px;
    background: 0 0;
    height: 60px;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -ms-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    border-width: 2px;
    border-style: solid;
    border-color: #fff;
    color: #fff;
    text-align: center;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px
}

.tp-leftarrow.default:before,.tp-rightarrow.default:before {
    font-family: icomoon;
    line-height: 55px;
    width: 60px;
    font-size: 28px
}

.tp-leftarrow.default:before {
    content: \"\\f104\"
}

.tp-rightarrow.default:before {
    content: \"\\f105\"
}

.tp-leftarrow.default:hover,.tp-rightarrow.default:hover {
    background: #ff525e;
    border-color: #ff525e
}

.firstslide h2 {
    font-size: 60px;
    color: #fff;
    font-weight: 300;
    line-height: 60px;
    margin-left: 70px;
    margin-top: 0
}

.firstslide h5 {
    color: #fff;
    font-size: 16px;
    line-height: 25px;
    margin-left: 15px
}

.firstslide .first-span {
    color: #ff525e;
    font-size: 60px;
    float: left;
    line-height: 60px;
    font-weight: 300
}

.firstslide .second-span {
    color: #ff525e;
    font-size: 60px;
    line-height: 60px;
    font-weight: 300
}

.secondslide h2 {
    font-size: 60px;
    color: #fff;
    font-weight: 300;
    line-height: 60px;
    margin-left: 70px;
    margin-top: 0
}

.secondslide h5 {
    color: #fff;
    font-size: 16px;
    line-height: 25px
}

.secondslide .first-span {
    color: #ff525e;
    font-size: 60px;
    float: left;
    line-height: 60px;
    font-weight: 300
}

.secondslide .second-span {
    color: #ff525e;
    font-size: 60px;
    line-height: 60px;
    font-weight: 300
}

.thirdslide h2 {
    font-size: 60px;
    color: #fff;
    font-weight: 300;
    line-height: 60px;
    margin-left: 70px;
    margin-top: 0
}

.thirdslide h5 {
    margin-bottom: 0;
    color: #fff;
    font-size: 16px;
    line-height: 25px;
    text-align: center
}

.thirdslide .first-span {
    color: #ff525e;
    font-size: 60px;
    float: left;
    line-height: 60px;
    font-weight: 300
}

.fourthslide h2 {
    font-size: 60px;
    color: #fff;
    font-weight: 300;
    line-height: 60px;
    margin-left: 80px;
    margin-top: 0
}

.fourthslide .first-span {
    color: #ff525e;
    font-size: 60px;
    float: left;
    line-height: 60px;
    font-weight: 300
}

#main-menu {
    float: right;
    margin-right: 40px
}

#main-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    line-height: 1
}

#main-menu>ul {
    display: block;
    width: 100%;
    z-index: 500
}






.portfolio-header {
    margin-bottom: 50px
}

.filters-nav ul li.filter-item.is-active:first-child {
    color: #fff!important;
    background: #ff525e!important;
    border-bottom: solid 4px #d84852!important;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px
}

.filters-nav ul li.filter-item.is-active {
    color: #fff!important;
    background: #ff525e!important;
    border-bottom: solid 4px #d84852!important
}

.filters-nav ul li.filter-item.is-active:last-child {
    color: #fff!important;
    background: #ff525e!important;
    border-bottom: solid 4px #d84852!important;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px
}

#portfolio-filters {
    text-align: center;
    margin-top: 33px
}

#portfolio-filters ul li.filter-item {
    display: inline-block;
    color: #161616;
    font-weight: 500;
    cursor: pointer;
    padding: 5px 17px;
    background: #F0F0F0;
    border-bottom: solid 4px #F0F0F0;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -ms-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s
}

#portfolio-filters ul li.filter-item:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px
}

#portfolio-filters ul li.filter-item:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px
}

.portfolio-wrapper .portfolio-item {
    position: relative;
    float: left;
    width: 25%;
    overflow: hidden;
    padding-left:10px;
    padding-right:10px;
    padding-top:4px;
    padding-bottom:10px;
}

.portfolio-wrapper .portfolio-item img {
    display: block;
    margin: 0;
    padding: 0;
    max-width: 100%;
    height: auto;
    width: 100%;
}

.portfolio-wrapper .portfolio-item .item-overlay {
    display: block;
    position: absolute;
    z-index: 20;
    background: rgba(55,186,133,.87);
    overflow: hidden;
    transition: all .5s
}

.portfolio-wrapper .portfolio-item a.close-overlay {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 100;
    width: 45px;
    height: 45px;
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    line-height: 45px;
    text-align: center;
    background-color: #000;
    cursor: pointer
}

.portfolio-wrapper .portfolio-item a.close-overlay.hidden {
    display: none
}

.portfolio-wrapper .portfolio-item .item-name {
    display: block;
    position: absolute;
    z-index: 100;
    text-align: center;
    color: #fff
}

.portfolio-wrapper .item-overlay {
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0
}

.portfolio-wrapper .item-overlay .item-name {
    left: 0;
    right: 0;
    top: 0;
    margin: 0 auto;
    opacity: 0;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.portfolio-wrapper .portfolio-item.hover .item-overlay {
    opacity: 1
}

.portfolio-wrapper .portfolio-item.hover .item-overlay .item-name {
    top: 50%;
    margin-top: -30px;
    opacity: 1
}

.overlay figure {
    margin: 0;
    position: relative;
    overflow: hidden
}

.overlay figure img {
    max-width: 100%;
    display: block;
    position: relative
}

.overlay figcaption {
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px;
    background: #ff525e;
    color: #fff
}

.overlay figcaption h3 {
    margin: 0;
    padding-bottom: 10px;
    color: #fff;
    font-size: 16px
}


.figtitle {

    color: #fff;
    font-size: 20px

}


#featured-projects {
    background-color: #fafafa
}

#featured-projects h2 {
    font-weight: 300;
    color: #161616
}

#featured-projects h4 {
    color: #a1a1a1;
    font-weight: 400;
    font-size: 14px
}

#featured-projects .overlay-effect figcaption span {
    position: absolute;
    bottom: -30px;
    right: 20px
}



#featured-projects {
    background-color: #fafafa
}

#featured-projects h2 {
    font-weight: 300;
    color: #161616
}

#featured-projects h4 {
    color: #a1a1a1;
    font-weight: 400;
    font-size: 14px
}

#featured-projects .overlay-effect figcaption span {
    position: absolute;
    top: 90%;
    right: 20px
}

@media screen and (min-width:1281px) and (max-width:1899px) {
    .overlay figcaption h3 {
        margin: 0;
        padding-bottom: 20px;
        color: #fff;
        font-size: 11px
    }
    .figtitle {

        color: #fff;
        font-size: 11px

    }

}

@media screen and (min-width:1900px) {
    .overlay figcaption h3 {
        margin: 0;
        padding-bottom: 30px;
        color: #fff;
        font-size: 16px
    }
    .figtitle {

        color: #fff;
        font-size: 20px

    }

}


/** MAX WIDTH 1280px **/

@media screen and (max-width:1280px) {
    .overlay figcaption h3 {
       display:none;
    }
    .overlay figcaption div {
        font-size: 13px;
        margin-top:-15px;

    }

    .blurb {
        display: none;
    }

    .resp_msg{
        display: block;
    }



    #featured-projects .overlay-effect figcaption span {
        position: absolute;
        top: 80%;
        right: 10px
    }

}







@media screen and (max-width:599px) {
    nav li {
        display: inline;
    }
}




.overlay-effect figure img {
    -webkit-transition: -webkit-transform .4s;
    -moz-transition: -moz-transform .4s;
    transition: transform .4s
}

.no-touch .overlay-effect figure:hover img,.overlay-effect figure.cs-hover img {
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    transform: none
}

.overlay-effect figcaption {
    min-height: 100%;
    width: 100%;
    top: auto;
    bottom: 0;
    opacity: 0;
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
    -webkit-transition: -webkit-transform .4s,opacity .1s .3s;
    -moz-transition: -moz-transform .4s,opacity .1s .3s;
    transition: transform .4s,opacity .1s .3s;
    -webkit-backface-visibility: hidden
}

.overlay-effect figure:hover img {
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    transform: none
}

.no-touch .overlay-effect figure:hover figcaption,.overlay-effect figure.cs-hover figcaption {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition: -webkit-transform .4s,opacity .1s;
    -moz-transition: -moz-transform .4s,opacity .1s;
    transition: transform .4s,opacity .1s
}











.product-slider .owl-buttons .owl-prev i {
    color: #fff;
    border-radius: 4px;
    padding: 9px 17px;
    position: absolute;
    left: 25px;
    top: 110px;
    font-size: 20px;
    background: #ff525e;
    border-bottom: solid 3px #d84852
}

.product-slider .owl-buttons .owl-prev i:hover {
    background-color: #ff525e
}

.product-slider .owl-buttons .owl-prev i:active {
    margin-top: 3px;
    border-bottom: solid 1px #d84852
}

.product-slider .owl-buttons .owl-next i {
    color: #fff;
    border-radius: 4px;
    padding: 9px 17px;
    position: absolute;
    right: 25px;
    top: 110px;
    font-size: 20px;
    background: #ff525e;
    border-bottom: solid 3px #d84852
}

.product-slider .owl-buttons .owl-next i:hover {
    background-color: #ff525e
}

.product-slider .owl-buttons .owl-next i:active {
    margin-top: 3px;
    border-bottom: solid 1px #d84852
}

.copyright {
    font-size: 11px;
    color: #575656!important;
    line-height: 17px;
    margin-bottom: 0
}

footer {
    padding: 60px 0 0;
    color: #161616
}

footer >.container {
    margin-bottom: 30px;
}

footer h3 {
    font-size: 24px;
    font-weight: 300;
    color: #3d3d3d;
    margin-bottom: 40px
}

footer ul.footer-blog {
    display: inline-block
}

footer ul.footer-blog li p {
    margin-left: 90px;
    margin-bottom: 3px
}

footer ul.footer-blog img {
    float: left
}

footer .default {
    margin-bottom: 5px
}

footer .only3 {
    display: none
}

.social ul li {
    float: left;
    background: #ececec;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    text-align: center;
    margin-right: 5px;
    margin-bottom: 10px
}

.social ul li a {
    line-height: 40px;
    color: #161616;
    display: block
}

.social ul li a span {
    line-height: 40px
}

.ico-facebook:hover {
    background: #4c81d2!important
}

.ico-facebook:hover>a {
    color: #fff
}

.ico-twitter:hover {
    background: #47daff!important
}

.ico-twitter:hover>a {
    color: #fff
}

.ico-pinterest:hover {
    background: #e43333!important
}

.ico-pinterest:hover>a {
    color: #fff
}

.ico-dribbble:hover {
    background: #ff4978!important
}

.ico-dribbble:hover>a {
    color: #fff
}

.ico-google:hover {
    background: #ff6252!important
}

.ico-google:hover>a {
    color: #fff
}

.ico-instagram:hover {
    background: #3f729b!important
}

.ico-instagram:hover>a {
    color: #fff
}

ul.menu-list li:before {
    content: \"\\f105\";
    font-family: icomoon;
    color: #ff525e;
    font-size: 11px;
    margin-right: 5px
}

#subscribe.footer-subscribe input {
    width: 224px
}

#subscribe.footer-subscribe .alert.animate {
    width: 100%
}

.bottom-footer {
    background: #EDEDED;
    padding: 30px 0
}

.social-buttons {
    text-align: right
}

.facebook-button {
    display: inline-block;
    width: 90px;
    margin-right: 20px
}

.twitter-button {
    display: inline-block;
    width: 80px;
    margin-right: 20px
}

.google-button {
    display: inline-block;
    width: 60px
}

.footer-style2 {
    border-top: solid 6px #ff525e
}

.footer-style3 {
    background: #ff525e;
    color: #fff
}

.footer-style3 p {
    color: #fff
}

.footer-style3 .only3 {
    display: block;
    margin-bottom: 10px
}

.footer-style3 .default {
    display: none
}

.footer-style3 .copyright {
    color: #fff;
    margin-top: 5px
}

.footer-style3 h3,.footer-style3 ul.menu-list li a {
    color: #fff
}

.footer-style3 ul.menu-list li a:hover {
    color: #C4C4C4
}

.footer-style3 ul.menu-list li:before {
    color: #fff
}

footer.footer-style3 ul.footer-blog li p {
    color: #fff!important
}

.footer-style4 {
    background-color: #f9f9f9
}

.highlight {
    margin-bottom: 14px;
    background-color: #f7f7f9;
    border: 1px solid #e1e1e8;
    border-radius: 4px;
    padding: 9px 14px
}

.s {
    color: #d44950
}

.na {
    color: #4f9fcf
}

.nt {
    color: #2f6f9f
}

.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.has_shadow {
    position: relative;
    padding: 0;
    border: none;
    background: #FFF;
    z-index: 1
}

.has_shadow:after,.has_shadow:before {
    content: \"\";
    position: absolute;
    z-index: -2
}

.has_shadow.lifted {
    border-radius: 4px
}

.has_shadow.lifted:after,.has_shadow.lifted:before {
    bottom: 15px;
    left: 10px;
    width: 50%;
    height: 20%;
    max-width: 300px;
    max-height: 100px;
    box-shadow: 0 15px 10px rgba(0,0,0,.7);
    -webkit-transform: rotate(-3deg);
    -ms-transform: rotate(-3deg);
    transform: rotate(-3deg)
}

.has_shadow.lifted:after {
    right: 10px;
    left: auto;
    -webkit-transform: rotate(3deg);
    -ms-transform: rotate(3deg);
    transform: rotate(3deg)
}

.has_shadow.curled {
    border: none;
    border-radius: 0 0 120px 120px/0 0 6px 6px
}

.has_shadow.curled>img {
    border-radius: 0 0 120px 120px/0 0 6px 6px
}

.has_shadow.curled:after,.has_shadow.curled:before {
    bottom: 12px;
    left: 10px;
    width: 50%;
    height: 55%;
    max-width: 200px;
    max-height: 100px;
    box-shadow: 0 8px 12px rgba(0,0,0,.5);
    -webkit-transform: skew(-8deg) rotate(-3deg);
    -ms-transform: skew(-8deg) rotate(-3deg);
    transform: skew(-8deg) rotate(-3deg)
}

.has_shadow.curled:after {
    right: 10px;
    left: auto;
    -webkit-transform: skew(8deg) rotate(3deg);
    -ms-transform: skew(8deg) rotate(3deg);
    transform: skew(8deg) rotate(3deg)
}

.has_shadow.perspective:before {
    left: 80px;
    bottom: 5px;
    width: 50%;
    height: 35%;
    max-width: 200px;
    max-height: 50px;
    box-shadow: -80px 0 8px rgba(0,0,0,.4);
    -webkit-transform: skew(50deg);
    -ms-transform: skew(50deg);
    transform: skew(50deg);
    -webkit-transform-origin: 0 100%;
    -ms-transform-origin: 0 100%;
    transform-origin: 0 100%
}

.has_shadow.perspective:after {
    display: none
}

.has_shadow.raised {
    box-shadow: 0 15px 10px -10px rgba(0,0,0,.5),0 1px 4px rgba(0,0,0,.3),0 0 40px rgba(0,0,0,.1) inset
}

.has_shadow.curved:before {
    top: 10px;
    bottom: 10px;
    left: 0;
    right: 50%;
    box-shadow: 0 0 15px rgba(0,0,0,.6);
    border-radius: 10px/100px
}

.has_shadow.curved-vt-2:before {
    right: 0
}

.has_shadow.curved-hz-1:before {
    top: 50%;
    bottom: 0;
    left: 10px;
    right: 10px;
    border-radius: 100px/10px
}

.has_shadow.curved-hz-2:before {
    top: 0;
    bottom: 0;
    left: 10px;
    right: 10px;
    border-radius: 100px/10px
}

#swappers {
    height: 0;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1111
}

.swappers-table .helper {
    position: absolute;
    background-color: rgba(255, 82, 94, 0.7);
    padding: 10px;
    color: #fff;
    margin-top: -49px;
    margin-right: 15px;
    -webkit-backface-visibility: hidden;
    top: 0;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition: all 300ms cubic-bezier(0.19,1,.22,1);
    -moz-transition: all 300ms cubic-bezier(0.19,1,.22,1);
    -o-transition: all 300ms cubic-bezier(0.19,1,.22,1);
    -ms-transition: all 300ms cubic-bezier(0.19,1,.22,1);
    transition: all 300ms cubic-bezier(0.19,1,.22,1)
}

.swappers-table .modulecontent {
    opacity: .5
}

.swappers-table:hover .helper {
    background-color: rgba(0,0,0,.8);
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
    top: 50px
}

.swappers-table:hover .swappers-content {
    opacity: 1
}

.swappers-table:hover .helper:before {
    background-position: center top
}

.swappers-table h3 {
    font-size: 22px;
    line-height: 1.4;
    border-bottom: 1px solid #5a5a5a;
    text-shadow: 1px 1px 0 #383838;
    text-transform: uppercase;
    color: #fff;
    margin-top: 0;
    padding: 1px 0 8px
}

.swappers-content p {
    color: #fff
}

.owl-carousel .owl-wrapper:after {
    content: \".\";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0
}

.owl-carousel {
    display: none;
    width: 100%;
    -ms-touch-action: pan-y
}

.owl-carousel .owl-wrapper {
    display: none;
    position: relative
}

.owl-carousel .owl-wrapper-outer {
    overflow: hidden;
    position: relative;
    width: 100%
}

.owl-carousel .owl-wrapper-outer.autoHeight {
    -webkit-transition: height 500ms ease-in-out;
    -moz-transition: height 500ms ease-in-out;
    -ms-transition: height 500ms ease-in-out;
    -o-transition: height 500ms ease-in-out;
    transition: height 500ms ease-in-out
}

.owl-carousel .owl-item {
    float: left
}

.owl-controls .owl-buttons div,.owl-controls .owl-page {
    cursor: pointer
}

.owl-controls {
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -webkit-tap-highlight-color: transparent
}

.owl-carousel .owl-item,.owl-carousel .owl-wrapper {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0)
}

.owl-theme .owl-controls {
    margin-top: 10px;
    text-align: center
}

.owl-theme .owl-controls.clickable .owl-buttons div:hover {
    opacity: 1;
    text-decoration: none
}

.owl-theme .owl-controls .owl-page {
    display: inline-block
}

.owl-theme .owl-controls .owl-page span {
    display: block;
    width: 12px;
    height: 12px;
    margin: 5px 7px;
    opacity: .5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    background: #869791
}

.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span {
    opacity: 1;
    background: #cd3a44
}

.owl-theme .owl-controls .owl-page span.owl-numbers {
    height: auto;
    width: auto;
    color: #FFF;
    padding: 2px 10px;
    font-size: 12px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px
}

.owl-fade-out {
    z-index: 10;
    -webkit-animation: fadeOut .7s both ease;
    -moz-animation: fadeOut .7s both ease;
    animation: fadeOut .7s both ease
}

.owl-fade-in {
    -webkit-animation: fadeIn .7s both ease;
    -moz-animation: fadeIn .7s both ease;
    animation: fadeIn .7s both ease
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0
    }

    100% {
        opacity: 1
    }
}

@-moz-keyframes fadeIn {
    0% {
        opacity: 0
    }

    100% {
        opacity: 1
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0
    }

    100% {
        opacity: 1
    }
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

@-moz-keyframes fadeOut {
    0% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

@font-face {
    font-family: flexslider-icon;
    src: url(../themes/serviceme/assets/fonts/flexslider/flexslider-icon.eot);
    src: url(../themes/serviceme/assets/fonts/flexslider/flexslider-icon.eot?#iefix) format('embedded-opentype'),url(../themes/serviceme/assets/fonts/flexslider/flexslider-icon.woff) format('woff'),url(../themes/serviceme/assets/fonts/flexslider/flexslider-icon.ttf) format('truetype'),url(../themes/serviceme/assets/fonts/flexslider/flexslider-icon.svg#flexslider-icon) format('svg');
    font-weight: 400;
    font-style: normal
}

.flexslider {
    padding: 0
}

.flexslider .slides>li {
    display: none;
    -webkit-backface-visibility: hidden
}

.flex-pauseplay span {
    text-transform: capitalize
}

.slides:after {
    content: \"\\0020\";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0
}

html[xmlns] .slides {
    display: block
}

* html .slides {
    height: 1%
}

.no-js .slides>li:first-child {
    display: block
}

.flexslider {
    margin: 0 0 60px;
    position: relative
}

.flex-viewport {
    max-height: 2000px;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    transition: all 1s ease
}

.loading .flex-viewport {
    max-height: 300px
}

.carousel li {
    margin-right: 5px
}

.flex-direction-nav a {
    text-decoration: none;
    display: block;
    width: 15px;
    height: 25px;
    margin: -20px 0 0;
    position: absolute;
    top: 34%;
    z-index: 10;
    overflow: hidden;
    opacity: 0;
    cursor: pointer;
    color: rgba(0,0,0,.8);
    text-shadow: 1px 1px 0 rgba(255,255,255,.3);
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    transition: all .3s ease
}

.flex-direction-nav .flex-prev {
    left: -50px
}

.flex-direction-nav .flex-next {
    right: -50px;
    text-align: right
}

.flexslider:hover .flex-prev {
    opacity: .7;
    left: 10px
}

.flexslider:hover .flex-next {
    opacity: .7;
    right: 10px
}

.flexslider:hover .flex-next:hover,.flexslider:hover .flex-prev:hover {
    opacity: 1
}

.flex-direction-nav .flex-disabled {
    opacity: 0!important;
    cursor: default
}

.flex-direction-nav a:before {
    font-family: flexslider-icon;
    font-size: 22px;
    display: inline-block;
    content: '\\f001'
}

.flex-direction-nav a.flex-next:before {
    content: '\\f002'
}

.flex-pauseplay a {
    display: block;
    width: 20px;
    height: 20px;
    position: absolute;
    bottom: 5px;
    left: 10px;
    opacity: .8;
    z-index: 10;
    overflow: hidden;
    cursor: pointer;
    color: #000
}

.flex-pauseplay a:before {
    font-family: flexslider-icon;
    font-size: 20px;
    display: inline-block;
    content: '\\f004'
}

.flex-pauseplay a:hover {
    opacity: 1
}

.flex-pauseplay a.flex-play:before {
    content: '\\f003'
}

.flex-control-nav {
    width: 100%;
    position: absolute;
    bottom: -40px;
    text-align: center
}

.flex-control-nav li {
    margin: 0 6px;
    display: inline-block
}

.flex-control-paging li a {
    width: 11px;
    height: 11px;
    display: block;
    background: #666;
    background: rgba(0,0,0,.5);
    cursor: pointer;
    text-indent: -9999px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -o-border-radius: 20px;
    border-radius: 20px;
    -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);
    -moz-box-shadow: inset 0 0 3px rgba(0,0,0,.3);
    -o-box-shadow: inset 0 0 3px rgba(0,0,0,.3);
    box-shadow: inset 0 0 3px rgba(0,0,0,.3)
}

.flex-control-paging li a:hover {
    background: #333;
    background: rgba(0,0,0,.7)
}

.flex-control-paging li a.flex-active {
    background: #000;
    background: rgba(0,0,0,.9);
    cursor: default
}

.flex-control-thumbs {
    margin: 5px 0 0;
    position: static;
    overflow: hidden
}

.flex-control-thumbs li {
    width: 25%;
    float: left;
    margin: 0
}

.flex-control-thumbs img {
    width: 100%;
    display: block;
    opacity: .7;
    cursor: pointer
}

.flex-control-thumbs img:hover {
    opacity: 1
}

.flex-control-thumbs .flex-active {
    opacity: 1;
    cursor: default
}

@media screen and (max-width: 860px) {
    .flex-direction-nav .flex-prev {
        opacity:1;
        left: 10px
    }

    .flex-direction-nav .flex-next {
        opacity: 1;
        right: 10px
    }
}

.nivo-lightbox-theme-default.nivo-lightbox-overlay {
    background: rgba(0,0,0,.6)
}

.nivo-lightbox-theme-default .nivo-lightbox-content.nivo-lightbox-loading {
    background: url(../themes/serviceme/assets/images/nivo/loading.gif) 50% 50% no-repeat
}

.nivo-lightbox-theme-default .nivo-lightbox-nav {
    top: 10%;
    width: 8%;
    height: 80%;
    text-indent: -9999px;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    opacity: .5
}

.nivo-lightbox-theme-default .nivo-lightbox-nav:hover {
    opacity: 1
}

.nivo-lightbox-theme-default .nivo-lightbox-prev {
    background-image: url(../themes/serviceme/assets/images/nivo/prev.png);
    border-radius: 0 3px 3px 0
}

.nivo-lightbox-theme-default .nivo-lightbox-next {
    background-image: url(../themes/serviceme/assets/images/nivo/next.png);
    border-radius: 3px 0 0 3px
}

.nivo-lightbox-theme-default .nivo-lightbox-close {
    display: block;
    width: 70px;
    height: 70px;
    text-indent: -9999px;
    padding: 5px;
    opacity: .5
}

.nivo-lightbox-theme-default .nivo-lightbox-close:hover {
    opacity: 1
}

.nivo-lightbox-theme-default .nivo-lightbox-title-wrap {
    bottom: -7%
}

.nivo-lightbox-theme-default .nivo-lightbox-title {
    font: 14px/20px 'Helvetica Neue',Helvetica,Arial,sans-serif;
    font-style: normal;
    font-weight: 400;
    background: #000;
    color: #fff;
    padding: 7px 15px;
    border-radius: 30px
}

.nivo-lightbox-theme-default .nivo-lightbox-image img {
    background: #fff;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4);
    box-shadow: 0 1px 1px rgba(0,0,0,.4)
}

.nivo-lightbox-theme-default .nivo-lightbox-ajax,.nivo-lightbox-theme-default .nivo-lightbox-inline {
    background: #fff;
    padding: 40px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4);
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4);
    box-shadow: 0 1px 1px rgba(0,0,0,.4)
}

@media (-webkit-min-device-pixel-ratio:1.3),(-o-min-device-pixel-ratio:2.6/2),(min--moz-device-pixel-ratio:1.3),(min-device-pixel-ratio:1.3),(min-resolution: 1.3dppx) {
    .nivo-lightbox-theme-default .nivo-lightbox-content.nivo-lightbox-loading {
        background-image:url(../themes/serviceme/assets/images/nivo/loading@2x.gif);
        background-size: 32px 32px
    }

    .nivo-lightbox-theme-default .nivo-lightbox-prev {
        background-image: url(../themes/serviceme/assets/images/nivo/prev@2x.png);
        background-size: 48px 48px
    }

    .nivo-lightbox-theme-default .nivo-lightbox-next {
        background-image: url(../themes/serviceme/assets/images/nivo/next@2x.png);
        background-size: 48px 48px
    }

    .nivo-lightbox-theme-default .nivo-lightbox-close {
        background-image: url(../themes/serviceme/assets/images/nivo/close@2x.png);
        background-size: 16px 16px
    }
}

.nivo-lightbox-overlay {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99998;
    width: 100%;
    height: 100%;
    overflow: hidden;
    visibility: hidden;
    opacity: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.nivo-lightbox-overlay.nivo-lightbox-open {
    visibility: visible;
    opacity: 1
}

.nivo-lightbox-wrap {
    position: absolute;
    top: 10%;
    bottom: 10%;
    left: 10%;
    right: 10%
}

.nivo-lightbox-content {
    width: 100%;
    height: 100%
}

.nivo-lightbox-title-wrap {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 99999;
    text-align: center
}

.nivo-lightbox-nav {
    display: none
}

.nivo-lightbox-prev {
    position: absolute;
    top: 50%;
    left: 0
}

.nivo-lightbox-next {
    position: absolute;
    top: 50%;
    right: 0
}

.nivo-lightbox-close {
    position: absolute;
    top: 2%;
    right: 2%
}

.nivo-lightbox-image {
    text-align: center
}

.nivo-lightbox-image img {
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
    vertical-align: middle
}

.nivo-lightbox-content iframe {
    width: 100%;
    height: 100%
}

.nivo-lightbox-ajax,.nivo-lightbox-inline {
    max-height: 100%;
    overflow: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.nivo-lightbox-error {
    display: table;
    text-align: center;
    width: 100%;
    height: 100%;
    color: #fff;
    text-shadow: 0 1px 1px #000
}

.nivo-lightbox-error p {
    display: table-cell;
    vertical-align: middle
}

.nivo-lightbox-notouch .nivo-lightbox-effect-fade,.nivo-lightbox-notouch .nivo-lightbox-effect-fadeScale,.nivo-lightbox-notouch .nivo-lightbox-effect-fall,.nivo-lightbox-notouch .nivo-lightbox-effect-slideDown,.nivo-lightbox-notouch .nivo-lightbox-effect-slideLeft,.nivo-lightbox-notouch .nivo-lightbox-effect-slideRight,.nivo-lightbox-notouch .nivo-lightbox-effect-slideUp {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.nivo-lightbox-effect-fadeScale .nivo-lightbox-wrap {
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -ms-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    -webkit-transform: scale(0.7);
    -moz-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7)
}

.nivo-lightbox-effect-fadeScale.nivo-lightbox-open .nivo-lightbox-wrap {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1)
}

.nivo-lightbox-effect-slideDown .nivo-lightbox-wrap,.nivo-lightbox-effect-slideLeft .nivo-lightbox-wrap,.nivo-lightbox-effect-slideRight .nivo-lightbox-wrap,.nivo-lightbox-effect-slideUp .nivo-lightbox-wrap {
    -webkit-transition: all .3s cubic-bezier(0.25,.5,.5,.9);
    -moz-transition: all .3s cubic-bezier(0.25,.5,.5,.9);
    -ms-transition: all .3s cubic-bezier(0.25,.5,.5,.9);
    -o-transition: all .3s cubic-bezier(0.25,.5,.5,.9);
    transition: all .3s cubic-bezier(0.25,.5,.5,.9)
}

.nivo-lightbox-effect-slideLeft .nivo-lightbox-wrap {
    -webkit-transform: translateX(-10%);
    -moz-transform: translateX(-10%);
    -ms-transform: translateX(-10%);
    transform: translateX(-10%)
}

.nivo-lightbox-effect-slideRight .nivo-lightbox-wrap {
    -webkit-transform: translateX(10%);
    -moz-transform: translateX(10%);
    -ms-transform: translateX(10%);
    transform: translateX(10%)
}

.nivo-lightbox-effect-slideLeft.nivo-lightbox-open .nivo-lightbox-wrap,.nivo-lightbox-effect-slideRight.nivo-lightbox-open .nivo-lightbox-wrap {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0)
}





#fp-nav {
    position: fixed;
    z-index: 100;
    margin-top: -32px;
    top: 50%;
    opacity: 1
}

#fp-nav.right {
    right: 17px
}

#fp-nav.left {
    left: 17px
}

.fp-slidesNav {
    position: absolute;
    z-index: 4;
    left: 50%;
    opacity: 1
}

.fp-slidesNav.bottom {
    bottom: 17px
}

.fp-slidesNav.top {
    top: 17px
}

#fp-nav ul,.fp-slidesNav ul {
    margin: 0;
    padding: 0
}

#fp-nav li,.fp-slidesNav li {
    display: block;
    width: 14px;
    height: 13px;
    margin: 7px;
    position: relative
}

.fp-slidesNav li {
    display: inline-block
}

#fp-nav li a,.fp-slidesNav li a {
    display: block;
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
    text-decoration: none
}

#fp-nav li .active span,.fp-slidesNav .active span {
    background: #333
}

#fp-nav span,.fp-slidesNav span {
    top: 2px;
    left: 2px;
    width: 8px;
    height: 8px;
    border: 1px solid #000;
    background: 0 0;
    border-radius: 50%;
    position: absolute;
    z-index: 1
}

.fp-tooltip {
    position: absolute;
    top: -2px;
    color: #fff;
    font-size: 14px;
    font-family: arial,helvetica,sans-serif;
    white-space: nowrap;
    max-width: 220px
}

.fp-tooltip.right {
    right: 20px
}

.fp-tooltip.left {
    left: 20px
}




.f300 {
    font-weight: 300;
}



    .form-tabless-fields  input {
        width: 100%;
        border: 1px solid #ddd;
        background-color: #FCFCFC;
        font-size: 13px;
        color: #9ea3a7;
        height: 40px;
        text-indent: 15px;
        outline: 0;
        border-radius: 3px;
        background-clip: padding-box;
        box-shadow: inset 0 1px 0 #f1f3f3;
        margin-bottom: 15px
    }

    .reg-panel-title {
        color: #161616;
        font-size: 15px;
        font-weight: 600;
        border-bottom: 1px solid #EDEDED;
        display: block;
        padding-bottom: 10px;
        margin-bottom: 20px
    }



</style>

  <link rel=\"stylesheet\" href=\"";
        // line 2806
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main870f.css");
        echo "\">



</head>

<body >
\t<!--- <iframe src=\"/api/cache\" style=\"display: none\"></iframe> -->
\t<div id=\"statusbar-container\">
\t\t<div id=\"statusbar\"></div>
\t</div>
\t<div id=\"topbar\">
\t\t<div id=\"search-container\">
\t\t\t<input type=\"text\" id=\"search-field\" placeholder=\"Search for offers and services\">
\t\t\t<img src=\"";
        // line 2820
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-search-orange search-icon\">
\t\t\t<span id=\"search-spinner\">
\t\t\t\t<svg width=\"12\" height=\"12\" viewBox=\"0 0 300 300\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">
\t\t\t\t\t<path d=\"M 150,0 a 150,150 0 0,1 106.066,256.066 l -35.355,-35.355 a -100,-100 0 0,0 -70.711,-170.711 z\" fill=\"white\">
\t\t\t\t\t    <animateTransform attributeName=\"transform\" attributeType=\"XML\" type=\"rotate\" from=\"0 150 150\" to=\"360 150 150\" begin=\"0s\" dur=\"2s\" fill=\"freeze\" repeatCount=\"indefinite\"></animateTransform>
\t\t\t\t\t  </path>
\t\t\t\t</svg>
\t\t\t</span>
\t\t\t<div id=\"clear-input\">x</div>
\t\t\t<div id=\"search-results\">
\t\t\t\t<div class=\"search-placeholder\">
\t\t\t\t\t<img src=\"";
        // line 2831
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-music-black\">
\t\t\t\t\t<img src=\"";
        // line 2832
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-album-black\">
\t\t\t\t\t<img src=\"";
        // line 2833
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-artist-black\">
\t\t\t\t\t<p class=\"search-placeholder-title\">Offers, Services.</p>
\t\t\t\t\t<p class=\"search-placeholder-description\">Start searching and discover the new world of business.</p>
\t\t\t\t</div>
\t\t\t\t<ul id=\"search-results-wrapper\">

\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"title\"><span id=\"logo2\">Service<strong>Me</strong>.com.au</span></div>
\t\t<div id=\"userarea\">

\t\t\t\t<a class=\"topbar-login\" data-navigate=\"";
        // line 2845
        echo url("login");
        echo "\" href=\"";
        echo url("login");
        echo "\">Login or register</a>
\t\t\t
\t\t</div>
\t</div>


    ";
        // line 2851
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar-left"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2852
        echo "

\t<!--<div id=\"right-sidebar\">
\t\t<div id=\"fixed_sidebar\">

\t\t</div>
\t\t&lt;!&ndash;<div id=\"sidebar-queue\"></div>&ndash;&gt;
\t</div>-->
\t<div id=\"loading-indicator\">
\t\t<img src=\"http://onetune.fm/api/svg/fading-loader\" class=\"fading-loader\">
\t</div>
\t<div id=\"view\">
\t    ";
        // line 2864
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 2865
        echo "\t</div>



\t<div id=\"notifications\"></div>
\t<script type=\"text/template\" id=\"template-home\">
\t\t
\t<div>
\t\t<div class=\"v2-home\">
\t\t\t<div data-bind=\"ifnot: isLoggedIn()\" class=\"v2-welcome-banner\">
\t\t\t\t<h1>Welcome to ServiceMe.com.au!</h1>
\t\t\t\t<div class=\"v2-welcome-text\">
\t\t\t\t\t<p>We have thousands of companies competing for your business..<br>
\t\t\t\t\t</p><br>
\t\t\t\t\t<p>Why dont you create an account and start saving money and time now.:</p><span class=\"v2-welcome-register\" data-navigate=\"/register\">Create an account</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- ko if: isLoggedIn() -->
\t\t\t<div class=\"v2-strip-wrapper\" data-bind=\"css: {'v2-welcome-banner': library().length == 0}\" style=\"position: relative; height: 200px;\" >
\t\t\t\t<h1 data-navigate=\"/library\">from your library</h1>
\t\t\t\t<div class=\"v2-song-strip-back\"></div>
\t\t\t\t<div class=\"v2-song-strip-forward\"></div>
\t\t\t\t<div class=\"v2-song-strip\" data-represents=\"/library\">
\t\t\t\t\t<!-- ko ifnot: library().length -->
\t\t\t\t\t<div class=\"v2-home-no-tracks\">
\t\t\t\t\t\t<p>You don't have any tracks in your library yet.</p> <br>
\t\t\t\t\t\t<p>Click on the heart symbol anywhere on the site to add tracks to your library!</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t<div class=\"v2-song-strip-tiles\">
\t\t\t\t\t\t<div data-bind=\"foreach: library\">
\t\t\t\t\t\t\t<!-- ko component: {
\t\t\t\t\t\t\t\tname: 'v2-song-box',
\t\t\t\t\t\t\t\tparams: {song: \$data}
\t\t\t\t\t\t\t} -->
\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /ko -->
\t\t\t<div class=\"v2-strip-wrapper\" data-bind=\"if: charts\" style=\"position: relative; height: 200px;\">
\t\t\t\t<h1 data-navigate=\"/charts\">top charts</h1>
\t\t\t\t<div class=\"v2-song-strip-back\"></div>
\t\t\t\t<div class=\"v2-song-strip-forward\"></div>
\t\t\t\t<div class=\"v2-song-strip\" data-represents=\"/charts\">
\t\t\t\t\t<div class=\"v2-song-strip-tiles\">
\t\t\t\t\t\t<div data-bind=\"foreach: charts\">
\t\t\t\t\t\t\t<!-- ko component: {
\t\t\t\t\t\t\t\tname: 'v2-song-box',
\t\t\t\t\t\t\t\tparams: {song: \$data}
\t\t\t\t\t\t\t} -->
\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"v2-strip-wrapper\" data-bind=\"if: reddit\" style=\"position: relative; height: 200px;\">
\t\t\t\t<h1 data-navigate=\"/genres\">hot on reddit</h1>
\t\t\t\t<div class=\"v2-song-strip-back\"></div>
\t\t\t\t<div class=\"v2-song-strip-forward\"></div>
\t\t\t\t<div class=\"v2-song-strip\" data-represents=\"/genres\">
\t\t\t\t\t<div data-bind=\"foreach: reddit\">
\t\t\t\t\t\t<!-- ko component: {
\t\t\t\t\t\t\tname: 'v2-song-box',
\t\t\t\t\t\t\tparams: {song: \$data.song}
\t\t\t\t\t\t} -->
\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"v2-strip-wrapper\" data-bind=\"if: isRetro()\" style=\"position: relative; height: 200px;\">
\t\t\t\t<h1 data-bind=\"attr: {'data-navigate': '/time-machine/' + retro().year}\">charts from <span data-bind=\"text: retro().year\"></span></h1>
\t\t\t\t<div class=\"v2-song-strip-back\"></div>
\t\t\t\t<div class=\"v2-song-strip-forward\"></div>
\t\t\t\t<div class=\"v2-song-strip\" data-bind=\"attr: {'data-represents': '/time-machine/' + retro().year}\">
\t\t\t\t\t<div data-bind=\"foreach: retro().charts\">
\t\t\t\t\t\t<!-- ko component: {
\t\t\t\t\t\t\tname: 'v2-song-box',
\t\t\t\t\t\t\tparams: {song: \$data}
\t\t\t\t\t\t} -->
\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t</script>
\t<script type=\"text/template\" id=\"template-v2-song-box\">
\t\t<div class=\"v2-song-box song\"
\tdata-bind=\"song: \$data.song, css: isInLibrary(\$data.song.id), attr: {'data-nowplaying': isNowPlaying(song.id), 'data-hearable': isHearable(\$data.song.id)}\">
\t<img data-bind=\"attr: {src: formatImage(\$data.song.image) }\">
\t<div class=\"v2-song-black-overlay\">
\t\t<div class=\"v2-song-box-nowplaying\" data-bind=\"click: handleClick\"></div>
\t\t<div class=\"v2-song-box-label v2-song-box-title\" data-bind=\"text: \$data.song.formattedTitle, attr: {'data-navigate': '/song/' + \$data.song.id}\"></div>
\t\t<div class=\"v2-song-box-label v2-song-box-artist\" data-bind=\"text: \$data.song.artist, attr: {'data-navigate': '/artist/' + \$data.song.artistid}\"></div>
\t</div>
</div>
\t</script>
\t<script type=\"text/template\" id=\"template-library\">
\t\t<% if (data.user) { %>
\t\t\t<div class=\"rep-wrapper\" data-represents=\"/library\">
\t\t\t\t<div class=\"coverstack nomargin\">
\t\t\t\t\t<div class=\"covers\">
\t\t\t\t\t\t<% _.each(data.coverstack, function(image) { %>
\t\t\t\t\t\t\t<img onload=\"\$(this).addClass('coverstack-cover-loaded')\" src=\"<%- image %>\" border=\"0\">
\t\t\t\t\t\t<% }); %>
\t\t\t\t\t\t<div class=\"coverstack-overlay\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"playlistdescription coverstack-description\">
\t\t\t\t\t\t<h1>Your library
\t\t\t\t\t\t<% if (data.trackcount) { %>
\t\t\t\t\t\t\t<span class=\"playlist-trackcount\"><%- data.trackcount %></span><span class=\"playlist-plural-singular-tracks\"><% if (data.trackcount == 1) { %>track<% } else { %>tracks<% } %></span><span data-duration=\"<%- data.rawduration %>\" class=\"playlist-duration\"><%- data.duration %></span>
\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t<span class=\"playlist-trackcount\">0</span> <span class=\"playlist-plural-singular-track\">tracks</span><span data-duration=\"0\" class=\"playlist-duration\">0 minutes</span>
\t\t\t\t\t\t<% } %></h1>
\t\t\t\t\t\t<div class=\"headeroptions\">
\t\t\t\t\t\t\t<button class=\"play-all-songs-in-order\">
\t\t\t\t\t\t\t\t<span>Play</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"headeroptions\">
\t\t\t\t\t\t\t<button class=\"play-all-songs\">
\t\t\t\t\t\t\t\t<span>Shuffle</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"headeroptions\">
\t\t\t\t\t\t\t<button class=\"add-tracks-quickly\" data-trigger=\"add-tracks-dropdown\">
\t\t\t\t\t\t\t\t<span>Add tracks</span>
\t\t\t\t\t\t\t</button><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"headeroptions\">
\t\t\t\t\t\t\t<button class=\"show-filter-dropdown\" data-list=\"/library\" data-trigger=\"filter-dropdown\">
\t\t\t\t\t\t\t\t<span>Filter tracks</span></img>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"headeroptions\">
\t\t\t\t\t\t\t<button data-trigger=\"playlist-import-tip\">
\t\t\t\t\t\t\t\t<span>Import</span>
\t\t\t\t\t\t\t</button><br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-panels\">
\t\t\t\t\t\t\t<div class=\"add-tracks-dropdown\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"song-picker-activator\">
\t\t\t\t\t\t\t\t\t<input autofocus data-action=\"add-track\" data-target=\"/library>\" class=\"song-picker-input\" placeholder=\"Enter song...\">
\t\t\t\t\t\t\t\t\t<div class=\"song-picker-container\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"filter-dropdown\" data-list=\"/library\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"playlist-import-tip\">
\t\t\t\t\t\t\t\tYou can import Spotify tracks by dragging them into this window!
\t\t\t\t\t\t\t\tTip: Use Ctrl+A / ⌘A to select all tracks in Spotify!
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"extendedtable\">
\t\t\t\t\t<%= data.tracklist %>
\t\t\t\t</div>
\t\t\t\t\t\t<% } else { %>
\t\t\t\t<div class=\"facebook-login-dialog transition-up\">
\t\t\t\t\t<h1>Build your library and create playlists.</h1>
\t\t\t\t\t<p>
\t\t\t\t\tWith OneTune, you can listen to millions of songs for free.<br>
\t\t\t\t\t\tWhen you login, you can save your favorite songs and organize them into playlists.<br>
\t\t\t\t\t</p>
\t\t\t\t\t<img src=\"http://i.imgur.com/24XgzfI.png\" width=\"600\" />
\t\t\t\t\t<p>
\t\t\t\t\t\t<button class='login-button' data-navigate=\"/register\" class=\"facebook\">Login or Register</button> <br>
\t\t\t\t\t\t<small>We never post to your timeline or send you emails.</small>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t<% } %>
\t</script>
\t<script type=\"text/template\" id=\"template-filter\">
\t\t<div class='filter-initialized'>
\t\t\t<% _.each(data, function (tracks, genre) { %>
\t\t\t\t<input type='checkbox' id='filter-<%= genre %>' data-genre=\"<%= genre %>\" class=\"filter filter-genre\"><label for='filter-<%= genre %>'><%= genre %> (<%= tracks.length %>)</label>
\t\t\t<% }); %>
\t\t</div>
\t</script>
\t<script type=\"text/template\" id=\"template-playlist\">
\t<div class=\"rep-wrapper <% if (chinchilla.loggedin && chinchilla.user == data.playlist.owner) { %>playlist-editable<% } %>\" data-represents=\"<%= data.playlist.url %>\">
\t\t<div class=\"playlist-header-v3\" <% if (data.playlist.style) { %> style=\"background: rgb(<%= data.playlist.style.bgColor %>)\" <% } %> >
\t\t\t<div class=\"pl-v3-filter\">
\t\t\t\t<input type=\"text\" placeholder=\"Filter\" data-url=\"<%- data.playlist.url %>\">
\t\t\t\t<img src=\"/api/i/pixel\" class=\"png-icon-search\">
\t\t\t</div>
\t\t\t<div class=\"pl-v3-details\">
\t\t\t\t<% if (data.playlist.trackcount) { %>
\t\t\t\t\t<p><span  <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"v3-icon-bg\"><img class=\"v3-icon svg-music-white\" src=\"/api/i/pixel\"></img></span>
\t\t\t\t\t\t<span  <% if (data.playlist.style) { %> style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"playlist-trackcount\"><%- data.playlist.trackcount %></span> <span <% if (data.playlist.style) { %> style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"playlist-plural-singular-tracks\"><% if (data.playlist.trackcount == 1) { %>track<% } else { %>tracks<% } %></span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span <% if (data.playlist.style) { %> style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"playlist-trackcount\">0</span><span <% if (data.playlist.style) { %> style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"playlist-plural-singular-track\">tracks</span>
\t\t\t\t<% } %>
\t\t\t\t\t<span <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"v3-icon-bg\" ><img class=\"v3-icon svg-community-white\" src=\"/api/i/pixel\"></img></span>
\t\t\t\t\t<span <% if (data.playlist.style) { %> style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"playlist-followercount\"><% if (data.playlist.followercount == 1) { %>1 follower<% } else { %> <%= data.playlist.followercount %> followers<% } %></span>
\t\t\t\t</p>
\t\t\t\t<div <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"v3-header-button v3-icon-bg play-all-songs\"><img class=\"v3-icon-big v3-color-matching  <% if (data.playlist.style && data.playlist.style.dark == 'false') { %>white<% } %> png-icon-play\" src=\"/api/i/pixel\"></img></div>
\t\t\t\t<% if (chinchilla.user == data.playlist.owner) { %>
\t\t\t\t\t<div <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"v3-header-button v3-icon-bg playlist-add-button\"><img class=\"v3-icon-big v3-color-matching  <% if (data.playlist.style && data.playlist.style.dark == 'false') { %>white<% } %> png-icon-add\" src=\"/api/i/pixel\"></img></div>
\t\t\t\t<% } else { %>
\t\t\t\t\t<% if (data.playlist.following) { %>
\t\t\t\t\t\t<div <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> data-url=\"<%= data.playlist.url %>\" class=\"unfollow-playlist v3-header-button v3-icon-bg\"><img class=\"v3-icon-big v3-color-matching  <% if (data.playlist.style && data.playlist.style.dark == 'false') { %>white<% } %> png-icon-save\" src=\"/api/i/pixel\"></img></div>
\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t<div <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> data-url=\"<%= data.playlist.url %>\" class=\"follow-playlist v3-header-button v3-icon-bg\"><img class=\"v3-icon-big v3-color-matching  <% if (data.playlist.style && data.playlist.style.dark == 'false') { %>white<% } %> png-icon-unsave\" src=\"/api/i/pixel\"></img></div>
\t\t\t\t\t<% } %>
\t\t\t\t<% } %>
\t\t\t\t<div <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"v3-header-button v3-icon-bg playlist-search-button\"><img class=\"v3-icon-big v3-color-matching  <% if (data.playlist.style && data.playlist.style.dark == 'false') { %>white<% } %> png-icon-search\" src=\"/api/i/pixel\"></img></div>
\t\t\t\t<% if (chinchilla.user == data.playlist.owner) { %>
\t\t\t\t\t<div <% if (data.playlist.style) { %> style=\"background: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> class=\"v3-header-button v3-icon-bg playlist-more-button\"><img class=\"v3-icon-big v3-color-matching  <% if (data.playlist.style && data.playlist.style.dark == 'false') { %>white<% } %> png-icon-more\" src=\"/api/i/pixel\"></img></div>
\t\t\t\t<% } %>
\t\t\t\t<div class=\"playlist-more-menu\">
\t\t\t\t\t<img class=\"v3-icon-big png-icon-more\" src=\"/api/i/pixel\"></img>
\t\t\t\t\t<% if (chinchilla.user == data.playlist.owner) { %>
\t\t\t\t\t\t\t<% if (data.playlist['public']) { %>
\t\t\t\t\t\t\t\t<div class=\"v3-more-button unpublish-playlist\" data-url=\"<%= data.playlist.url %>\">
\t\t\t\t\t\t\t\t<img src=\"/api/i/pixel\">
\t\t\t\t\t\t\t\t\t<span>Unpublish playlist</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t<div class=\"v3-more-button publish-playlist\" data-url=\"<%= data.playlist.url %>\">
\t\t\t\t\t\t\t\t\t<img src=\"/api/i/pixel\">
\t\t\t\t\t\t\t\t\t<span>Publish playlist</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<div class=\"v3-more-button v3-import\" data-navigate=\"/import\">
\t\t\t\t\t\t\t\t<img src=\"/api/i/pixel\">
\t\t\t\t\t\t\t\t<span>Import</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"v3-more-button v3-rename-playlist\">
\t\t\t\t\t\t\t\t<img src=\"/api/i/pixel\">
\t\t\t\t\t\t\t\t<span>Rename</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"v3-more-button v3-delete-playlist\" data-url=\"<%= data.playlist.url %>\">
\t\t\t\t\t\t\t\t<img src=\"/api/i/pixel\">
\t\t\t\t\t\t\t\t<span>Delete</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t<% } %>
\t\t\t\t</div>
\t\t\t\t<div class=\"playlist-add-menu\">
\t\t\t\t\t<img class=\"v3-icon-big png-icon-add\" src=\"/api/i/pixel\"></img>
\t\t\t\t\t<div class=\"add-tracks-dropdown\">
\t\t\t\t\t\t<div class=\"song-picker-activator\">
\t\t\t\t\t\t\t<input autofocus data-action=\"add-track\" data-target=\"<%= data.playlist.url %>\" class=\"song-picker-input\" placeholder=\"Enter song...\" type=\"text\">
\t\t\t\t\t\t\t<div class=\"song-picker-container\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<h2 <% if (data.playlist.style) { %> style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> >Playlist by <%- helpers.getAuthorFromPlaylistURL(data.playlist.url) %>
\t\t\t</h2>
\t\t\t<h1 <% if (data.playlist.style) { %> style=\"color: rgb(<%= data.playlist.style.primaryColor %>)\" <% } %>>
\t\t\t\t<%= data.playlist.name %>
\t\t\t</h1>
\t\t\t<div class=\"canvas-placeholder\">
\t\t\t\t<% if (data.playlist.style) { %>
\t\t\t\t\t<img src=\"<%= data.playlist.style.url %>\">
\t\t\t\t<% } %>
\t\t\t</div>
\t\t\t<div class=\"feature-placeholder\" <% if (data.playlist.style) { %>style=\"color: rgb(<%- data.playlist.style.secondaryColor %>)\" <% } %> ><% if (data.playlist.style) { %> <%= data.playlist.style.artist %> <% } %></div>

\t\t</div>
\t\t<div class=\"extendedtable\">
\t\t\t<% if (!data.playlist.trackcount) { %>
\t\t\t\t<p class=\"no-playlist-text\">Build your playlist right from this page by<br/>clicking the \"+\" button on top!</p>
\t\t\t<% } %>
\t\t\t<div class=\"album-tracks\">
\t\t\t\t<%= data.tracklist %>
\t\t\t</div>
\t\t</div>
\t</div>
\t</script>

\t<script type=\"text/template\" id=\"template-tracklist\">
\t\t<div class=\"album-tracks\">
\t\t\t<% if (album.cds) { %>
\t\t\t\t<% _.each(album.cds, function(cd, key) { %>
\t\t\t\t\t<% if (album.cds.length > 1) { %>
\t\t\t\t\t\t<h1>Disc <%- (key+1) %></h1>
\t\t\t\t\t<% } %>
\t\t\t\t\t<div class=\"table-wrapper\">
\t\t\t\t\t\t<div class='table-header'>
\t\t\t\t\t\t\t<div data-value=\"menu\"></div>
\t\t\t\t\t\t\t<div data-value=\"name\" data-order>Name</div>
\t\t\t\t\t\t\t<% if (showartistalbum) { %>
\t\t\t\t\t\t\t\t<div data-value=\"artist\" data-order>Artist</div>
\t\t\t\t\t\t\t\t<div data-value=\"album\" data-order>Album</div>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t<div data-value=\"duration\" data-order>Length</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<%= templates.buildSongsInList(cd[key], {showartistalbum: showartistalbum}) %>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t<% }); %>
\t\t\t<% } else { %>
\t\t\t<p class=\"album-loading\">No tracks available</p>
\t\t\t<% } %>
\t\t</div>
\t</script>
\t<script type=\"text/template\" id=\"template-song\">
\t<% _.each(data.cd, function(track, key) { %>
\t\t\t\t<tr class=\"song
\t\t\t\t<% if (track.ytid) { %> recognized <% } else { %> not-recognized <% } %>
\t\t\t\t<% if (track.inlib) { %> in-library <% } else { %> not-in-library<% } %>\"
\t\t\t\t<% _.each(['album', 'name', 'duration', 'albumid', 'artist', 'artistid', 'image', 'id', 'explicit', 'genre', 'numberinalbum', 'cdinalbum', 'tracks', 'cdcount', 'preview', 'release'], function (key) { %>
\t\t\t\t\tdata-<%- key %>='<%- track[key] %>'
\t\t\t\t\t<% }); %>
\t\t\t\t\t<% if (track.ytid) { %> data-ytid=\"<%- track.ytid %>\" <% } %>
\t\t\t\t\tdata-index=\"<%- key%>\"
\t\t\t\t>
\t\t\t\t<td class=\"inline-actions\">
\t\t\t\t\t<% if (chinchilla.loggedin) { %>
\t\t\t\t\t<div class=\"heart\"></div>
\t\t\t\t\t<% } %>
\t\t\t\t</td>
\t\t\t\t<td><% if (data.type == 'home') { %> <%- helpers.parsetext(track.artist) %> - <% } %> <%= helpers.parsetext(track.name) %></td>
\t\t\t\t<% if (data.showartistalbum) { %>
\t\t\t\t\t<td class=\"table-artist\"><a data-navigate=\"/artist/<%= track.artistid %>\"><%= track.artist %></a></td>
\t\t\t\t\t<td class=\"table-album\"><a data-navigate=\"/album/<%= track.albumid %>\"><%= helpers.parsetext(track.album) %></a></td>
\t\t\t\t<% } %>
\t\t\t\t<td> <%= helpers.parsetime(track.duration) %></td>
\t\t\t</tr>
\t\t<% }); %>
\t</script>
\t<script type=\"text/template\" id=\"template-contextmenu\">
\t\t<div class=\"context-tip\">
\t\t\t<img src=\"<%= helpers.getHQAlbumImage(data.song, 225) %>\" onload=\"\$(this).removeClass('image-op0')\" class=\"image-op0\">
\t\t</div>
\t\t<div class=\"contextmenu-arrow\"></div>
\t\t<div class=\"context-options\">
\t\t\t<div data-id=\"<%= data.song.id %>\" class=\"findandplay\">Play</div>
\t\t\t<div data-id=\"<%= data.song.id %>\" class=\"findandqueue\">Add to Queue</div>
\t\t\t<a data-navigate=\"/song/<%= data.song.id %>\">
\t\t\t\t<div>Song page</div>
\t\t\t</a>
\t\t\t<% if (data.loggedin) { %>
\t\t\t\t<div data-id=\"<%= data.song.id %>\" class=\"<% if (data.inlib) { %> library-remove-button <% } else { %> library-button <% } %>\"><% if (data.inlib) { %>Remove from library<% } else { %>Add to library<% } %></div>
\t\t\t\t<div data-id=\"<%= data.song.id %>\" class=\"contextmenu-add-to-playlist\">Playlists...</div>
\t\t\t<% } %>
\t\t\t<div data-navigate=\"/lyrics/<%= data.song.id %>\">Lyrics</div>
\t\t\t<% if (data.isPlaylist && data.isOwner) { %>
\t\t\t\t<div class=\"remove-song-from-playlist-button\" data-songid=\"<%= data.song.id %>\" data-url=\"<%=data.represents %>\">Remove from playlist</div>
\t\t\t<% } %>
\t\t\t<% if (data.isItunesTrack) { %>
\t\t\t\t<div data-navigate=\"/report/<%= data.song.id %>\">Report song</div>
\t\t\t<% } else { %>
\t\t\t\t<div data-navigate=\"/song/<%= data.song.id%>\">Edit metadata</div>
\t\t\t<% } %>

\t\t</div>
\t\t<% if (!data.loggedin)  { %>
\t\t\t<div class=\"footnote\">
\t\t\t\tLogin to see more options
\t\t\t</div>
\t\t<% } %>
\t</script><script type=\"text/template\" id=\"template-contextmenu-multiple\">
\t\t<div class=\"context-tip contextmenu-multiple-songs\">
\t\t\t<h1>Multiple songs</h1>
\t\t</div>
\t\t<div class=\"contextmenu-arrow\"></div>
\t\t<div class=\"context-options\">
\t\t\t<% if (data.loggedin) { %>
\t\t\t\t<% if (!data.allInLibrary) { %>
\t\t\t\t\t<div class=\"add-multiple-to-library\" data-ids=\"<%= data.ids_string %>\">Add all to library</div>
\t\t\t\t<% } %>
\t\t\t\t<% if (!data.noneInLibrary) { %>
\t\t\t\t\t<div class=\"remove-multiple-from-library\" data-ids=\"<%= data.ids_string %>\">Remove all from library</div>
\t\t\t\t<% } %>
\t\t\t<% } %>
\t\t\t<% if (data.isPlaylist) { %>
\t\t\t\t<div class=\"remove-multiple-from-playlist\" data-ids=\"<%= data.ids_string %>\" data-url=\"<%=data.represents %>\">Remove all from playlist</div>
\t\t\t<% } %>
\t\t</div>
\t\t<% if (!data.loggedin)  { %>
\t\t\t<div class=\"footnote\">
\t\t\t\tLogin to see more options
\t\t\t</div>
\t\t<% } %>
\t</script>
\t<script type=\"text/template\" id=\"import-template\">
\t\t<% if (chinchilla.loggedin) { %>
\t\t<div class='import-page'>
\t\t\t<div class=\"import-header material-box\">
\t\t\t\t<h2 class=\"h2-orange\">
\t\t\t\t\tImport <span class=\"import-trackcount\"><%= importqueue.length %> tracks</span> into
\t\t\t\t\t<select id=\"playlist-target\">
\t\t\t\t\t \t\t<option value=\"/library\">Library</option>
\t\t\t\t\t \t\t<% _.each(playlists, function(playlist) { %>
\t\t\t\t\t \t\t\t<option value=\"<%= playlist.url %>\"><%= playlist.name %></option>
\t\t\t\t\t \t\t<% }); %>
\t\t\t\t\t \t</select>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<button id=\"stop-queue\">Stop importing</button>
\t\t\t<button id=\"start-queue\">Start importing</button>
\t\t\t<div class=\"import-body material-box\">
\t\t\t\t<table id=\"importqueue\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Source</th>
\t\t\t\t\t\t<th>Track</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<% _.each(importqueue, function(track) { %>
\t\t\t\t\t\t\t<%= _.template(tracktmpl, {track: track}) %>
\t\t\t\t\t<% }) %>
\t\t\t\t</table>
\t\t\t\t<% if (importqueue.length == 0) { %>
\t\t\t\t\t<p class='import-no-tracks'>No tracks to import</p>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class='material-box'>
\t\t\t\t<h2 class=\"h2-orange\">How you can import tracks:</h2>
\t\t\t\t\t<p>Spotify: Use Ctrl+A / ⌘A to select all tracks in Spotify. Then drag them into this window. </p></br>
\t\t\t\t\t<p>Other providers: We plan on supporting YouTube and MP3 soon.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<% }  else { %>
\t\t\t<div class=\"facebook-login-dialog transition-up\">
\t\t\t\t<h1>Already have a music collection? Import it.</h1>
\t\t\t\t<p>When you create an account, you can import your playlists from Spotify directly into OneTune. <br>
\t\t\t\t\t(YouTube and iTunes import coming soon)</p>
\t\t\t\t\t<img width=\"600\" src=\"../../i.imgur.com/eqbtccr.png\"></img>
\t\t\t\t<p>

\t\t\t\t\t<button class='login-button' data-navigate=\"/register\" class=\"facebook\">Login or Register</button> <br>
\t\t\t\t\t<small>We never post to your timeline or send you emails.<br>
\t\t\t\t</p>
\t\t\t</div>
\t\t<% } %>
\t</script>
\t<script type=\"text/template\" id=\"import-track-template\">
\t\t<tr class='import-track'
\t\tdata-importid='<%= track.type.provider %>-<%= track.type.id %>'>
\t\t\t<td><%= track.type.provider %></td>
\t\t\t<td class=\"import-trackname\">Track <%= track.type.id %></td>
\t\t\t<td class='import-status'>Ready to import</td>
\t\t</tr>
\t</script>
\t<script type=\"text/template\" id=\"radio-template\">
\t\t<div id='radio'>
\t\t\t<div class='radio-header'>
\t\t\t\t<h1 class='radio-type'></h1>
\t\t\t\t<h2 class='radio-based'></h2>
\t\t\t</div>
\t\t\t<div class='album-slider'>
\t\t\t\t<div class='radio-album-covers'></div>
\t\t\t\t<div class='radio-skip'>
\t\t\t\t\t<div class='arrow-right'></div>
\t\t\t\t\t<div class='arrow-right'></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"spinner\">
\t\t\t\t  <div class=\"dot1\"></div>
\t\t\t\t  <div class=\"dot2\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class='radio-footer'>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<h2>Your last stations</h2>
\t\t\t\t\t\t<div class='radio-stations'>

\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</script>
\t<script type=\"text/template\" id=\"radio-song-template\">
\t\t<div class='radio-box song <% if (data.ytid) { %> recognized <% } else { %> not-recognized <% } %>' data-album=\"<%= data.album %>\" data-name=\"<%= data.name %>\" data-duration=\"<%= data.duration %>\" data-albumid=\"<%= data.albumid %>\" data-artist=\"<%= data.artist %>\" data-artistid=\"<%= data.artistid %>\" data-image=\"<%= data.image %>\" data-id=\"<%= data.id %>\" data-explicit=\"<%= data.explicit %>\" data-genre=\"<%= data.genre %>\" data-numberinalbum=\"<%= data.numberinalbum %>\" data-cdinalbum=\"<%= data.cdinalbum %>\" data-tracks=\"<%= data.tracks %>\" data-cdcount=\"<%= data.cdcount %>\" data-preview=\"<%= data.preview %>\" data-release=\"<%= data.release %>\">
\t\t\t<img src='<%= helpers.getHQAlbumImage(data, 225) %>'/>
\t\t\t<div class=\"visual-play-button enable-radio-mode <% if (data.ytid) { %> recognized <% } else { %> not-recognized <% } %> findandplay\" data-id=\"<%= data.id %>\">
\t\t\t\t<div class=\"play-icon\"></div>
\t\t\t</div>
\t\t</div>
\t</script>
\t<script type=\"text/template\" id=\"radio-station-template\">
\t\t<div data-id=\"<%= data.radio_id %>\" class=\"radio-station\">
\t\t\t<h3><%= radio.typeLabels[data.type] %></h3>
\t\t\t<% if (data.type == \"song-radio\") { %>
\t\t\t\t<p><%= data.from.title %> - <%= data.from.artist_name %></p>
\t\t\t<% } %>
\t\t</div>
\t</script>
\t<script type=\"text/template\" id=\"template-sidebar-queue\">
\t\t<% if (player.queues.hasPrevious()) { %>
\t\t\t<button class=\"queue-prev\"><img src=\"/api/i/arrow-left\" /></button>
\t\t<% } %>
\t\t<h4 class=\"sidebar-currently-playing-label\">Currently playing</h4>
\t\t<% if (player.queues.hasNext()) { %>
\t\t\t<button class=\"queue-next\"><img src=\"/api/i/arrow-right\" /></button>
\t\t<% } %>
\t\t<h4 class=\"sidebar-represent\" data-navigate=\"<%= player.queues.current.represents %>\"><%= player.queues.current.name %></h4>
\t\t<div class=\"sidebar-queue-tracks\">
\t\t<h5>Upcoming</h5>
\t\t<% _.each(player.queues.primaryQueue, function (song) { %>
\t\t\t<%= templates.buildSidebarQueueEntry({song: song, special: true}) %>
\t\t<% }); %>
\t\t<% _.each(player.queues.current.queue, function (song) { %>
\t\t\t<%= templates.buildSidebarQueueEntry({song: song}) %>
\t\t<% }); %>
\t\t<% _.each(player.queues.current.history, function (song) { %>
\t\t\t<%= templates.buildSidebarQueueEntry({song: song}) %>
\t\t<% }); %>
\t\t</div>
\t</script>
\t<script type=\"text/template\" id=\"template-v2-song-page\">
\t\t
\t<div data-bind=\"if: song\" class=\"v2-song\">
\t\t<div class=\"song-page-full\" data-bind=\"attr: {'data-represents': '/song/' + song().id}\">
\t\t\t<div data-bind=\"css: 'song-page-container ' + isYouTubeClass()\">
\t\t\t\t<div class=\"coverstack header-onetune\">
\t\t\t\t\t<div class=\"header-background\" data-bind=\"style: {'background-image': 'url(' + headerimage() + ')'}\"></div>
\t\t\t\t\t<h1 data-bind=\"text: song().name\"></h1>
\t\t\t\t\t<p data-bind=\"text: song().artist\"></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"v2-song-page-table\">
\t\t\t\t<div class=\"v2-song-page-strip\">
\t\t\t\t\t<div class=\"v2-song-page-strip-half v2-song-page-full-text v2-song-page-add-library\" data-bind=\"css: isInLibrary() ? 'in-library' : 'not-in-library', click: toggleLibrary\">
\t\t\t\t\t\t<p>Save it</p>
\t\t\t\t\t<!-- ko if: isInLibrary() -->
\t\t\t\t\t\t<img src=\"/api/i/pixel\" class=\"svg-heart-red\" style=\"background-size: 26px 26px; margin-right: 10px;\" height=\"26\" width=\"26\"><span>In library</span>
\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t<!-- ko ifnot: isInLibrary() -->
\t\t\t\t\t\t<img src=\"/api/i/pixel\" class=\"svg-heart-empty\" style=\"background-size: 26px 26px; margin-right: 10px;\" height=\"26\" width=\"26\"><span>Add to library</span>
\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t</div><div class=\"v2-song-page-strip-half v2-song-page-full-text v2-song-page-playlists\" style=\"background: #c0392b\" >
\t\t\t\t\t\t<span>Add to a playlist</span>
\t\t\t\t\t\t<div class=\"subtitle\" data-bind=\"text: playlistsLabel()\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"v2-playlist-adder\">
\t\t\t\t<!-- ko if: playlists().length == 0 -->
\t\t\t\t\t<div class=\"no-playlists\">You have no playlists.</div>
\t\t\t\t<!-- /ko -->
\t\t\t\t<!-- ko foreach: playlists-->
\t\t\t\t\t<!-- ko if: \$parent.isPlaylistOwner(\$data.url) -->
\t\t\t\t\t<div class=\"v2-playlist-add-fragment\"
\t\t\t\t\t\tdata-bind=\"
\t\t\t\t\t\t\tcss: {
\t\t\t\t\t\t\t\t'v2-in-playlist': \$parent.isInPlaylist(\$data.url)
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tclick: \$parent.togglePlaylist.bind(\$parent, \$data.url)
\t\t\t\t\t\t\">
\t\t\t\t\t\t<img src=\"/api/svg/playlist-white\" alt=\"\">
\t\t\t\t\t\t<span data-bind=\"text: \$data.name\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /ko -->
\t\t\t\t<!-- /ko -->
\t\t\t</div>
\t\t\t<div class=\"v2-song-page-table\">
\t\t\t\t<div class=\"v2-song-page-strip\" style=\"background: white\">
\t\t\t\t\t<div class=\"v2-song-page-strip-half v2-song-page-full-text\" style=\"background: rgba(205,32,31,0.8)\">
\t\t\t\t\t\t<p>Explore it</p>
\t\t\t\t\t\t<span>See lyrics</span>
\t\t\t\t\t</div><div class=\"v2-song-page-strip-half v2-song-page-full-text\" style=\"background: #cd201f\">
\t\t\t\t\t\t<span>Watch on YouTube</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"v2-song-page-strip\">
\t\t\t\t\t<div class=\"v2-song-page-strip-half v2-song-page-full-text\" style=\"background: #55acee\">
\t\t\t\t\t\t<p>Share it</p>
\t\t\t\t\t\t<span>Twitter</span>
\t\t\t\t\t</div><div class=\"v2-song-page-strip-half v2-song-page-full-text\" style=\"background: #3B5998\">
\t\t\t\t\t\t<span>Facebook</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t</script>
\t<script type=\"text/template\" id=\"song-page-template\">
\t\t<div class=\"song-page-full\" data-represents=\"/song/<%= song.id %>\">
\t\t\t<div class=\"song-page-container <%= yt_page %>\">
\t\t\t\t<div class=\"coverstack header-onetune\">
\t\t\t\t\t<div class=\"header-background image-op0\" style=\"background-image: url(<%= headerimage %>)\"></div>
\t\t\t\t\t<img src=\"<%= headerimage %>\" style=\"opacity: 0; width: 0; height: 0\" onload=\"\$('.header-background').removeClass('image-op0')\">
\t\t\t\t</div>
\t\t\t\t<table class=\"song-page-table-container\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"song-page-box transition-up song-page-title material-box\">
\t\t\t\t\t\t\t\t\t<div class=\"metadata-finished-container\">
\t\t\t\t\t\t\t\t\t\t<% if (user) { %>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"song<% if (song.ytid) { %> recognized<% } else { %> not-recognized<% } %><% if (inlib) { %> in-library <% } else { %> not-in-library<% } %>\" data-album=\"<%= song.album %>\" data-name=\"<%= song.name %>\" data-duration=\"<%= song.duration %>\" data-albumid=\"<%= song.albumid %>\" data-artist=\"<%= song.artist %>\" data-artistid=\"<%= song.artistid %>\" data-image=\"<%= song.image %>\" data-id=\"<%= song.id %>\" data-explicit=\"<%= song.explicit %>\" data-genre=\"<%= song.genre %>\" data-numberinalbum=\"<%= song.numberinalbum %>\" data-cdinalbum=\"<%= song.cdinalbum %>\" data-tracks=\"<%= song.tracks %>\" data-cdcount=\"<%= song.cdcount %>\" data-preview=\"<%= song.preview %>\" data-release=\"<%= song.release %>\" <% if (song.ytid) { %> data-ytid=\"<%= song.ytid %>\" <% } %>>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"song-page-heart-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"heart\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t\t<h2 class=\"song-page-track-title\"><%= song.name %></h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"song-page-subtitle\">
\t\t\t\t\t\t\t\t\t\t\t<a data-navigate=\"/artist/<%= song.artistid %>\"><%= song.artist %></a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"song-page-length\">
\t\t\t\t\t\t\t\t\t\t\t<%= parseduration(song.duration) %>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<% if (song.provider && song.provider == 'youtube') { %>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"material-bottom-action song-page-edit-metadata\">Edit metadata</div>
\t\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"edit-metadata-container\">
\t\t\t\t\t\t\t\t\t\t<p>Track<input type=\"text\" class=\"edit-metadata-input\" id=\"edit-metadata-title-input\" value=\"<%= song.name %>\"></p>
\t\t\t\t\t\t\t\t\t\t<p>Artist<input type=\"text\" class=\"edit-metadata-input\" id=\"edit-metadata-artist-input\" value=\"<%= song.artist %>\"></p>
\t\t\t\t\t\t\t\t\t\t<p>Album<input type=\"text\" class=\"edit-metadata-input\" id=\"edit-metadata-album-input\"></p>
\t\t\t\t\t\t\t\t\t\t<% if (song.provider && song.provider == 'youtube') { %>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"material-bottom-action song-page-submit-metadata\">Save</div>
\t\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<% if (song.provider && song.provider == 'youtube') { %>
\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"song-page-box transition-up song-page-album material-box\">
\t\t\t\t\t\t\t\t\t<img src=\"<%=song.image%>\" class=\"material-image-top-right transition-up\">
\t\t\t\t\t\t\t\t\t<h2>Album</h2>
\t\t\t\t\t\t\t\t\t<p><a data-navigate=\"/album/<%=song.albumid%>\"><%=song.album%></a></p>
\t\t\t\t\t\t\t\t\t<p><%=song.releaseyear%></p>
\t\t\t\t\t\t\t\t\t<div class=\"material-bottom-action\" data-navigate=\"/album/<%=song.albumid%>\">
\t\t\t\t\t\t\t\t\t\tGo to album
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"song-page-buy\">
\t\t\t\t\t\t\t\t<div class=\"song-page-box transition-up material-box\">
\t\t\t\t\t\t\t\t\t<h2>Buy Track</h2>
\t\t\t\t\t\t\t\t\t<p>Available on iTunes</p>
\t\t\t\t\t\t\t\t\t<a class=\"material-bottom-action\" href=\"https://itunes.apple.com/us/album/album/id<%=song.albumid%>?i=\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\tBuy track
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t<% } %>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<table class=\"song-page-table-container\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"song-page-cover\">
\t\t\t\t\t\t<div class=\"song-page-box transition-up song-page-cover-box\">
\t\t\t\t\t\t\t<div class=\"song-page-header-cover song<% if (song.ytid) { %> recognized<% } else { %> not-recognized<% } %><% if (inlib) { %> in-library <% } else { %> not-in-library<% } %>\" data-album=\"<%=song.album%>\" data-name=\"<%=song.name%>\" data-duration=\"<%=song.duration%>\" data-albumid=\"<%=song.albumid%>\" data-artist=\"<%=song.artist%>\" data-artistid=\"<%=song.artistid%>\" data-image=\"<%=song.image%>\" data-id=\"<%=song.id%>\" data-explicit=\"<%=song.explicit%>\" data-genre=\"<%=song.genre%>\" data-numberinalbum=\"<%=song.numberinalbum%>\" data-cdinalbum=\"<%=song.cdinalbum%>\" data-tracks=\"<%=song.tracks%>\" data-cdcount=\"<%=song.cdcount%>\" data-preview=\"<%=song.preview%>\" data-release=\"<%=song.release%>\" <% if (song.ytid) { %> data-ytid=\"<%= song.ytid %>\" <% } %>>
\t\t\t\t\t\t\t\t<img src=\"<%= hqimage %>\" onload=\"\$(this).removeClass('image-op0')\" class=\"image-op0\">
\t\t\t\t\t\t\t\t<div class=\"visual-play-button recognized findandplay\" data-id=\"<%= song.id %>\">
\t\t\t\t\t\t\t\t\t<div class=\"play-icon\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"song-page-box transition-up song-page-playlist-selection material-box\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2>Add to Playlist</h2>
\t\t\t\t\t\t\t\t<div class=\"song-page-playlist-container\">
\t\t\t\t\t\t\t\t\t<% if (playlists && playlists.length != 0) { %>
\t\t\t\t\t\t\t\t\t\t<% _.each(playlists, function (playlist) { %>
\t\t\t\t\t\t\t\t\t\t\t<div data-url=\"<%= playlist.url%>\" data-songid=\"<%= song.id%>\" class=\"song-page-playlist <% if (!playlist.containssong) { %> add-song-to-playlist-button not-in-playlist <% } else { %> remove-song-from-playlist-button in-playlist contains-song <% } %>\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"svg-music-black song-page-playlist-icon\" src=\"/api/i/pixel\" class=\"song-page-playlist-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"song-page-playlist-title\"><%= playlist.name%></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"song-page-playlist-tracks\"><span class=\"song-page-playlist-trackcount\"><%= playlist.tracks.length%></span> songs</div>
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"song-page-playlist-check svg-check-white\" src=\"/api/i/pixel\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<% }) %>
\t\t\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t\t<p class=\"no-playlists-available\">You have no playlists.</p>
\t\t\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"min-width: 220px\">
\t\t\t\t\t\t<div class=\"song-page-box transition-up song-page-actions material-box\">
\t\t\t\t\t\t\t<h2>Actions</h2>
\t\t\t\t\t\t\t<% if (song.provider && song.provider == 'youtube') { %>
\t\t\t\t\t\t\t\t<a class=\"findandqueue\" data-id=\"<%= song.id%>\"><div>Add to Queue</div></a>
\t\t\t\t\t\t\t\t<a href=\"http://youtube.com/watch?v=<%= song.ytid %>\" target=\"_blank\"><div>Watch on YouTube</div></a>
\t\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t\t<a class=\"findandqueue\" data-id=\"<%= song.id %>\"><div>Add to Queue</div></a>
\t\t\t\t\t\t\t\t<a data-navigate=\"/lyrics/<%= song.id %>\"><div>See lyrics</div></a>
\t\t\t\t\t\t\t\t<a href=\"http://youtube.com/watch?v=<%= song.ytid %>\" target=\"_blank\"><div>Watch on YouTube</div></a>
\t\t\t\t\t\t\t\t<a href=\"https://itunes.apple.com/us/album/album/id<%= song.albumid %>?i=<%= song.id %>\" target=\"_blank\"><div>Buy on iTunes</div></a>
\t\t\t\t\t\t\t\t<a data-navigate=\"/report/<%= song.id %>\"><div>Report wrong video</div></a>
\t\t\t\t\t\t\t<% } %>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</script>
\t
<!--\t<script src=\"";
        // line 3571
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/browser/app.min.js");
        echo "\"></script>-->
\t  <script src=\"";
        // line 3572
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/modernizr.custom.js", 1 => "assets/js/bootstrap.js", 2 => "assets/js/clean-js-plugins.js", 3 => "assets/js/cleanlab_script.js", 4 => "assets/js/bootstrap-select.js"));
        // line 3578
        echo "\"></script>
    ";
        // line 3579
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 3580
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 3581
        echo "\t


</html>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/themes/serviceme/layouts/browser.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3658 => 3581,  3654 => 3580,  3647 => 3579,  3644 => 3578,  3642 => 3572,  3638 => 3571,  2930 => 2865,  2928 => 2864,  2914 => 2852,  2910 => 2851,  2899 => 2845,  2884 => 2833,  2880 => 2832,  2876 => 2831,  2862 => 2820,  2845 => 2806,  70 => 33,  67 => 32,  63 => 31,  57 => 28,  47 => 21,  43 => 20,  36 => 16,  19 => 1,);
    }
}
