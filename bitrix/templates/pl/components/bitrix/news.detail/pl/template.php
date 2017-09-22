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
<script>
    $(document).ready(function(){
        var fImgH=0;
        var pFlag=0;
        var hFlag=0;
        var cSoc=0;
        $(".project-bg img").each(function(){
            if($(this).parent().height()-$(this).height()>1){
                $(this).css('max-width','none');
                $(this).css('max-height',$(this).parents('.project-content').height()+'px');
            }
        });
        setTimeout(function(){
            $('.full-width-image').each(function(){
                var imgHeight=$(this).children('img').height();
                fImgH=fImgH+imgHeight;
                $(this).css('min-height',imgHeight+'px');
                $(this).children('.subtitle-img').css('margin-top',imgHeight+'px');
                $(this).children('.subtitle-img').css('text-align','center');
            });
            }, 300);
        setTimeout(function(){
            fImgH=0;
            $('.full-width-image').each(function(){
                var imgHeight=$(this).children('img').height();
                fImgH=fImgH+imgHeight;
                $(this).css('min-height',imgHeight+'px');
                $(this).children('.subtitle-img').css('margin-top',imgHeight+'px');
                $(this).children('.subtitle-img').css('text-align','center');
            });
        }, 1000);
        setTimeout(function(){
            fImgH=0;
            $('.full-width-image').each(function(){
                var imgHeight=$(this).children('img').height();
                fImgH=fImgH+imgHeight;
                $(this).css('min-height',imgHeight+'px');
                $(this).children('.subtitle-img').css('margin-top',imgHeight+'px');
                $(this).children('.subtitle-img').css('text-align','center');
            });
            cSoc=$('.social').offset().top;
        }, 5000);
        setTimeout(function(){
            fImgH=0;
            $('.full-width-image').each(function(){
                var imgHeight=$(this).children('img').height();
                fImgH=fImgH+imgHeight;
                $(this).css('min-height',imgHeight+'px');
                $(this).children('.subtitle-img').css('margin-top',imgHeight+'px');
                $(this).children('.subtitle-img').css('text-align','center');
            });
        }, 15000);


        $(window).scroll(function(){
            if($('#page-content-container').offset().top-$(window).scrollTop()<0){
                if(pFlag==0){
                    $('.classic-navigation').css('position','fixed');
                    $('.classic-navigation').css('background','rgba(64, 64, 64, 0.2');
                    $('.classic-navigation').css('top',0);
                    pFlag=1;
                }
            }else{
                if(pFlag==1){
                    $('.classic-navigation').css('position','absolute');
                    $('.classic-navigation').css('background','inherit');
                    $('.classic-navigation').css('top','20px');
                    pFlag=0;
                }
            }
            if((cSoc-$(window).height()-$(window).scrollTop())>0){
                if(hFlag==0&&pFlag==1){
                    $('.social').addClass('social-fx');
                    hFlag=1;
                }
            }else{
                if(hFlag==1||pFlag==0){
                    $('.social').removeClass('social-fx');
                    hFlag=0;
                }
            }
            console.log(hFlag+', '+pFlag);//$(window).height());
        });
    });

</script>