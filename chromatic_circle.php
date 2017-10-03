<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require_once($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/include/Mobile_Detect.php");
$APPLICATION->SetTitle("Хроматический круг");
?>
    <header class="page-entry-header">
        <div class="grid grid-pad overflow">
            <div class="col-1-1">
                <div class="animated fadeInUp delay">
                    <h1 class="entry-title"><?$APPLICATION->ShowTitle()?></h1>
                </div>
            </div>
        </div>
        <div class="page-bg-image" data-parallax="scroll" data-image-src="<?=SITE_TEMPLATE_PATH."/images/krug_23.jpg"?>" data-z-index="1">
        </div>
    </header><!-- .entry-header -->

<section id="page-content-container" class="animated fadeIn delay-2">
    <div class="grid grid-pad page-contain-full">
    <div class="col-1-1">

    <div id="primary" class="content-area shortcodes">
    <main id="main" class="site-main" role="main">
    <div class="main-navigation breadcrump">
        <ul>
            <li><a href="/">Главная</a></li>
        </ul>
    </div>

    <article id="post-25" class="post-25 page type-page status-publish has-post-thumbnail hentry">
    <div class="entry-content">
<?
    $detect = new Mobile_Detect;
    if( $detect->isMobile() || $detect->isTablet() ){
        echo "Страница интерактивного хроматического круга работает временно доступна только полноэранных устройствах.";
    }else{
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/include/cromcircle/circle.js");
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/include/cromcircle/circle_color.css");
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/include/cromcircle/circle_objects.css");
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/cromcircle/circle.php");
    }

?>
    </div>
        <!-- .entry-content -->

    </article>
    </main><!-- #main -->
    </div><!-- #primary -->
    </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>