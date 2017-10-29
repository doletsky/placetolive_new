<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/Vibrant.js");
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/preLoadImg.js");
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
    </header>
    <form id="form" action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" id="img" multiple accept="image/*" name="img"/>
        </div>
        <div style="width: 1110px;">
            <img id="img-preview" style="width: 600px;float: left" />
            <div class="pt1" style="width: 100px;height: 50px;float: left;margin-right: 1px">
                <div id="pallet1" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet2" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet3" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet4" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet5" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
            </div>
            <div class="pt2" style="width: 100px;height: 50px;float: left;margin-right: 1px">
                <div id="pallet1" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet2" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet3" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet4" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet5" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
            </div>
            <div class="pt3" style="width: 100px;height: 50px;float: left;margin-right: 1px">
                <div id="pallet1" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet2" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet3" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet4" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet5" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
            </div>
            <div class="pt4" style="width: 100px;height: 50px;float: left;margin-right: 1px">
                <div id="pallet1" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet2" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet3" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet4" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet5" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
            </div>
            <div class="pt5" style="width: 100px;height: 50px;float: left;margin-right: 1px">
                <div id="pallet1" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet2" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet3" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet4" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
                <div id="pallet5" class="colPallet" style="width: 100px;height: 10px;float: left"></div>
            </div>

            <div style="clear: both"></div>
            <br />
            <a href="#" id="reset-img-preview">удалить изображения</a>
        </div>
    </form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>