<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section id="mt-projects">


    <div class="grid grid-pad">
        <div class="col-1-1">
            <h3 class="widget-title">Новые публикации</h3>
        </div>
    </div>

    <div class="grid grid-pad overflow">
<?foreach($arResult["ITEMS"] as $cnt=>$arItem): if($arParams['NEWS_COUNT']==$cnt) break;?>
    <div class="col-1-2 mt-column-clear">
        <div class="project-box">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <div class="project-content"><div>

                        <span>

							<h3><?=$arItem["NAME"]?></h3>

                        	<div class="project-bg" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>

                        </span>

                    </div></div>
            </a>
        </div>
    </div>
<?endforeach?>

    </div>



</section>