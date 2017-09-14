<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
        <div class="page-bg-image" data-parallax="scroll" data-image-src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" data-z-index="1">
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
<?if(in_array("1", $USER->GetUserGroupArray())){
    $APPLICATION->AddHeadScript("http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/include/cromcircle/circle.js");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/include/cromcircle/circle_color.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/include/cromcircle/circle_objects.css");
    $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/cromcircle/circle.php");
}?>
    </div>
        <!-- .entry-content -->

        <div class="social">
            <span>Поделиться статьей: </span>
            <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://<?=$_SERVER['SERVER_NAME']?><?=$APPLICATION->GetCurPage()?>">
                <i class="fa fa-facebook"></i> </a>
            <a target="_blank" href="https://vk.com/share.php?url=http://<?=$_SERVER['SERVER_NAME']?>/<?=$APPLICATION->GetCurPage()?>" >
                <i class="fa fa-vk"></i> </a>
        </div>
    </article>
    </main><!-- #main -->
    </div><!-- #primary -->
    </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>