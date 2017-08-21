<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<!--    <meta name="yandex-verification" content="6183942b3fb1d3f5" />-->
<!--    <meta property="og:url" content="http://placetolive.ru--><?//=$APPLICATION->GetCurDir();?><!--" />-->
<!--    <meta property="og:type" content="article" />-->
<!--    <meta property="og:title" content="--><?//$APPLICATION->ShowTitle()?><!--" />-->

    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="pingback" href="/xmlrpc.php">-->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="stylesheet" id="wpa-css-group-css" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="proper-lite-style-group-css" href="<?=SITE_TEMPLATE_PATH?>/css/styles1.css" type="text/css" media="all">
    <link rel="stylesheet" id="proper-lite-open-headings-css" href="<?=SITE_TEMPLATE_PATH?>/css/css.css" type="text/css" media="all">
    <link rel="stylesheet" id="proper-lite-open-body-css" href="<?=SITE_TEMPLATE_PATH?>/css/css.css" type="text/css" media="all">
    <link rel="stylesheet" id="sccss_style-css" href="<?=SITE_TEMPLATE_PATH?>/css/styles2.css?<?echo time();?>" type="text/css" media="all">
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-migrate-3.0.0.js"></script>
    <!--[if lt IE 9]>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.js"></script>
    <![endif]-->
    <style>
        #secondary > #mt-testimonials .testimonial p, .shortcodes .testimonial p  { font-style: italic; }
        .news-info > div { text-align: left; }
        /*.bwWrapper { position:relative; display:block; }*/
    </style>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jscripts.js"></script>
    <script type="text/javascript" async="" src="<?=SITE_TEMPLATE_PATH?>/css/styles3.css"></script></head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-352">
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header animated fadeIn delay-2">
        <div class="site-branding">


            <hgroup>
                <h1 class="site-title">

                    <a href="/" title="Place to Live" rel="home">
                        PL<div class="sub-title">design</div>
                    </a>

                </h1>
            </hgroup>



        </div><!-- .site-branding -->




        <div class="classic-navigation">
            <nav id="site-navigation" class="main-navigation" role="navigation">
            <?$APPLICATION->IncludeComponent("bitrix:menu","top_pl",Array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => ""
                )
            );?>
            </nav><!-- #site-navigation -->
        </div><!-- navigation-container -->

        <div class="navigation-container classic-menu">
            <a id="sidr-menu" href="#sidr">

                <i class="fa fa-bars"></i>
            </a>
        </div>


    </header><!-- #masthead -->

    <div id="sidr" class="sidr right">
        <?$APPLICATION->IncludeComponent("bitrix:menu","top_pl",Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "top",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            )
        );?>
    </div>

    <div id="content" class="site-content">

<?if($APPLICATION->GetCurPage()=='/'):?>
<!--     begin for main page-->


        <section id="home-hero">

            <div class="hero-content-container">
                <div class="hero-content animated fadeInUp delay">
                    <h2 style="text-shadow: 0.1em 0.1em 0.2em black;/* text-transform: uppercase; */padding-bottom: 15px;"><em style="
    /* font-size: 90px; */
    line-height: 150px;
">Place to Live</em><br>�����������. �������. ����������������.</h2>
<!--                    <h2 style="text-shadow: 0.1em 0.1em 0.2em black">������������ ��� <em>�����</em></h2>-->
                    <a href="anonces" class="featured-link" id="scroll_to_anonces">
                        <button>��������</button>
                    </a>


                </div><!-- .hero-content -->
            </div><!-- .hero-content-container -->

            <div id="hero-background" data-parallax="scroll" data-image-src="<?=SITE_TEMPLATE_PATH?>/images/mpl2-3.jpg" data-z-index="1" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/mpl2-3.jpg'); background-size: cover; background-position: center center;">
            </div>

        </section>


<?endif?>


