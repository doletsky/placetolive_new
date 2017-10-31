<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/Vibrant.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/preLoadImg.js");
require_once($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/include/Mobile_Detect.php");
$detect = new Mobile_Detect;$PC=1;
if($detect->isMobile() || $detect->isTablet()) $PC=0;
?>
<style>
    .colPallet{
        width: 100px;height: 10px;float: left;
    }
</style>
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
    </header>
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
    <div class="entry-content first-box">
    <p>
<!--        Хроматичеcкий круг — это онлайн сервис подбора цветовой гаммы для интерьера, вариантов сочетания цветов. Для общего представления--><?//if($PC==0):?><!-- в полноэкранной версии--><?//endif;?><!-- мы предложили эскизный вид, который позволит увидеть цельную картину сочетания цветов, подобрать наиболее подходящий.-->
    </p>
    <?if($PC!=1):?>
        <p class="noMobScr">Страница получения палитры из картинки временно доступна только на устройствах с большим разрешением.</p>
    <?endif?>
    <form id="form" action="" method="post" enctype="multipart/form-data" style="position: relative" class="form_cpallet">
        <div>
            <input type="file" id="img" multiple accept="image/*" name="img"/>
        </div>
        <div class="main_cpallet" style="width: 1100px;position: absolute;left: 50%">
            <img id="img-preview" style="width: 600px;float: left" />
            <div class="pt1" style="height: 50px;float: left;">
            </div>
            <div style="clear: both"></div>
            <br />
            <a href="#" id="reset-img-preview">удалить изображения</a>
        </div>
    </form>
    </div>
    <!-- .entry-content -->

</article>
        <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/rand-art.php", array("REQUIRED_ID"=>"531"));
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/detail_script.js");?>
    </main><!-- #main -->
    </div><!-- #primary -->
    </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>