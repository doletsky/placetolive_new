<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('������� �����������');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/html2canvas.js");
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
    .input_box input[type="button"]{
        border: 0px;
    }
    input[type="file"]::-webkit-file-upload-button {
        font-family: 'Montserrat',Helvetica Neue,Helvetica,arial,sans-serif;
        border: 1px solid;
        border-color: #111;
        border-radius: 3px;
        background: #111;
        box-shadow: none;
        color: #FFF !important;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.1em;
        line-height: 1;
        text-transform: uppercase;
        padding: 1.25em 2.5em;
        text-shadow: none;
        cursor: pointer;
    }
    .screenshot{
        cursor: pointer;
        display: none;
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
            <li><a href="/">�������</a></li>
        </ul>
    </div>
<article id="post-25" class="post-25 page type-page status-publish has-post-thumbnail hentry">
    <div class="entry-content first-box">
    <p>
        ������� ����������� � ��� ������ ������ ��� ��������� �������� ������ �����������.
    </p>
    <?if($PC!=1):?>
        <p class="noMobScr">�������� ��������� ������� �� ����������� �������� �� �������� �� ��������� �����������.</p>
    <?else:?>
    <form id="form" action="" method="post" enctype="multipart/form-data" class="form_cpallet">
        <div class="input_box" style="margin-bottom: 10px">
            <input type="file" id="img" multiple accept="image/*" name="img"/>
        </div>
        <div class="main_cpallet" style="width: 1100px;position: absolute;left: 50%">
            <img id="img-preview" style="width: 600px;float: left" />
            <div class="pt1" style="height: 50px;float: left;">
            </div>
            <div style="clear: both"></div>
            <div class="screenshot">��������� � ��������</div>
        </div>
    </form>
        <div id="debug" style="display: none">

        </div>
        <?endif?>
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