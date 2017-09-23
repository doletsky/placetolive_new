<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


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
                            <li><a href="<?=$arResult['SECTION_URL']?>"><?=$arResult['SECTION']['PATH'][0]['NAME']?></a></li>
                        </ul>
                    </div>

                    <article id="post-25" class="post-25 page type-page status-publish has-post-thumbnail hentry">
                        <div class="entry-content"><?if($arResult['DISPLAY_PROPERTIES']['NEW_TMP']['VALUE']==1):?><!--new_tmp--><?endif?>
                            <?=$arResult['DETAIL_TEXT']?>
                            <?if(strlen($arResult['DISPLAY_PROPERTIES']['RESOURSE']['VALUE'])):?>
                                <p>Источник: <?=$arResult['DISPLAY_PROPERTIES']['RESOURSE']['VALUE']?></p>
                            <?endif?>
                        </div>
                        <!-- .entry-content -->

                            <div class="social">
                                <span>Поделиться статьей: </span>
                                <a target="_blank" href="http://www.facebook.com/sharer.php?u=http://<?=$_SERVER['SERVER_NAME']?><?=$APPLICATION->GetCurPage()?>">
                                    <i class="fa fa-facebook"></i> </a>
                                <a target="_blank" href="https://vk.com/share.php?url=http://<?=$_SERVER['SERVER_NAME']?>/<?=$APPLICATION->GetCurPage()?>" >
                                    <i class="fa fa-vk"></i> </a>
                            </div>
                    </article><!-- #post-## -->


                    <article id="post-249" class="post-249 page type-page status-publish has-post-thumbnail hentry">
                        <div class="entry-content">
                            <h4 style="text-align: center">Вам будет интересно:</h4>
                            <section id="mt-projects">

                                <div class="grid grid-pad">

                                    <?foreach($arResult['RAND_ELEMENT'] as $k=>$el):?>
                                    <div class="col-1-3 mt-column-clear" style="padding: 5px">
                                        <div class="project-box">
                                            <a href="<?=$el["DETAIL_PAGE_URL"]?>">
                                                <div class="project-content">
                                                    <div>
                                                <span>
                                                    <h3><?=$el["NAME"]?></h3>
                                                    <div id="recom" class="project-bg">
                                                        <img src="<?=$el["PREVIEW_PICTURE"]?>" alt="<?=$el["NAME"]?>">
                                                    </div>
                                                </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?endforeach?>

                                </div>
                            </section>
                        </div><!-- .entry-content -->

                    </article>



                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>
</section>