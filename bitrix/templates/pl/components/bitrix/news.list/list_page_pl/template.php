<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>




<header class="page-entry-header">
    <div class="grid grid-pad overflow">
        <div class="col-1-1">
            <div class="animated fadeInUp delay">
                <h1 class="entry-title"><?=$arResult['SECTION']['PATH'][0]['NAME']?></h1>
            </div>
        </div>
    </div>


    <div class="page-bg-image" data-parallax="scroll" data-image-src="<?=CFile::GetPath($arResult['SECTION']['PATH'][0]['DETAIL_PICTURE'])?>?<?=time()?>" data-z-index="1"></div>



</header><!-- .entry-header -->

<div class="home-widget home-widget-one shortcodes"><a name="anonces"></a>

    <div class="grid grid-pad">
        <div class="col-1-1">
            <div class="main-navigation breadcrump">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><?=$arResult['SECTION']['PATH'][0]['NAME']?></li>
                </ul>
            </div>

<!--<pre>--><?//print_r($arResult['SECTION']['PATH'][0]['DETAIL_PICTURE'])?><!--</pre>-->

            <section id="mt-projects">


<!--                <div class="grid grid-pad">-->
<!--                    <div class="col-1-1">-->
<!--                        <h3 class="widget-title">Новые публикации</h3>-->
<!--                    </div>-->
<!--                </div>-->



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
            <div id="fin-content" pcount="<?=$arResult["NAV_RESULT"]->NavPageCount?>" pcurent="1"></div>









        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(function($){
        $(document).ready(function(){
            var delay=false;
            var finContentTop=$('#fin-content').position().top;
            var pcount=$('#fin-content').attr('pcount');
            var pcurent=$('#fin-content').attr('pcurent');
            $(window).scroll(function(){
               if(pcount>pcurent){
                   if($(window).scrollTop()+$(window).height()>=finContentTop+100){

                       if(delay==false){
                           delay=true;
                           pcurent++;
                           $.post('/ajax.php',
                               {
                                   CODE: '<?=$arParams["PARENT_SECTION_CODE"]?>',
                                   PAGEN_1: pcurent
                               },
                               function(data){
                               $(".col-1-2.mt-column-clear:last").after(data);
                               $(".col-1-2.mt-column-clear:hidden").slideDown(1000,function(){
                                       console.log(delay);
                                       console.log(pcurent);
                                       finContentTop=$('#fin-content').position().top;
                                       $('#fin-content').attr('pcurent', pcurent);
                                       delay=false;
                                   });

                           });

                       }

                   }
               }


            });

        });
    });
</script>