<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?//if($USER->GetID()==1):?>
<!--<pre>--><?//print_r($arResult['DISPLAY_PROPERTIES']['PHOTOS'])?><!--</pre>-->
<?//endif?>

<header class="page-entry-header">
    <div class="grid grid-pad overflow">
        <div class="col-1-1">
            <div class="animated fadeInUp delay">
                <h1 class="entry-title"><?$APPLICATION->ShowTitle()?></h1>                </div>
        </div>
    </div>


    <div class="page-bg-image" data-parallax="scroll" data-image-src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" data-z-index="1">
        <img class="page-bg-image" data-parallax="scroll"  src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" data-z-index="1">
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
                        <div class="entry-content">
                            <?=$arResult['DETAIL_TEXT']?>
                            <?if(strlen($arResult['DISPLAY_PROPERTIES']['RESOURSE']['VALUE'])):?>
                                <p>Источник: <?=$arResult['DISPLAY_PROPERTIES']['RESOURSE']['VALUE']?></p>
                            <?endif?>
                        </div>
                        <!-- .entry-content -->

                        <footer class="entry-footer">
                        </footer><!-- .entry-footer -->
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

                    <div id="comments" class="comments-area" style="display: none">




                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="15360" aria-required="true" required="required" minlength="15"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required"></p>
                                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>
                                <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="25" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                                <noscript>&lt;input type="hidden" name="JS04X7" value="NS1"/&gt;</noscript>
                                <noscript>&lt;p&gt;&lt;strong&gt;Currently you have JavaScript disabled. In order to post comments, please make sure JavaScript and Cookies are enabled, and reload the page.&lt;/strong&gt; &lt;a href="http://enable-javascript.com/" rel="nofollow external" &gt;Click here for instructions on how to enable JavaScript in your browser.&lt;/a&gt;&lt;/p&gt;</noscript>
                            </form>
                        </div><!-- #respond -->


                    </div><!-- #comments -->


                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){

        $(".project-bg img").each(function(){
            console.log($(this).height());
            console.log($(this).parent().height());
            if($(this).parent().height()-$(this).height()>1){
                console.log('chaging');
                $(this).css('max-width','none');
                $(this).css('max-height',$(this).parents('.project-content').height()+'px');
            }
        });
        setTimeout(function(){
            $('.full-width-image').each(function(){
                $(this).css('min-height',$(this).children('img').height()+'px');
            });
            }, 300);
        setTimeout(function(){
            $('.full-width-image').each(function(){
                $(this).css('min-height',$(this).children('img').height()+'px');
            });
        }, 15000);

    });

</script>