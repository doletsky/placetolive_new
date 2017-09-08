<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- FOOTER -->
<footer id="colophon" class="site-footer">

    <div class="grid grid-pad">
        <div class="col-2-3">
            <?$APPLICATION->IncludeComponent("bitrix:menu","bottom_pl",Array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => ""
                )
            );?>
            <div class="col-1-2">
                <div style="margin-top: -9px">
                    �������� �� ����� ����
                </div>
                <form id="subscribe" action="/subscribe.php" method="post" target="_blank">
                    <input type="text" placeholder="���� ���" name="name"><br>
                    <input type="email" required="required" placeholder="your@email.ru" name="email"><br>
                    <input type="submit" value="���������" style="padding: 5px">
                    <div class="private">
                        <input type="checkbox" required="required" name="agree" value="y"><p>� �������� ������� <a href="/polytic.pdf" target="_blank">����������������� ���������� </a> � ��� �������� �� ��������� ������������ ������</p>
                    </div>
                    <input type="hidden" name="page" value="<?=$APPLICATION->GetCurPage()?>">
                    <input type="hidden" name="ssid" value="<?=$_SESSION['fixed_session_id']?>">
                </form>
            </div>
        </div>
        <div class="col-1-3">
            <hgroup>
                <h1 class="site-title">

                    <a href="/" title="Place to Live" rel="home" style="text-transform: none">

                        Place to Live
                    </a>

                </h1><!-- .site-title -->
            </hgroup>

            <ul class="social-media-icons">

                <li>
                    <a href="https://www.facebook.com/PlacetoLive.Design/" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/placetolive.design" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
<!--                <li>-->
<!--                    <a href="http://instagram.com/placetolive.design" target="_blank">-->
<!--                        <i class="fa fa-instagram"></i>-->
<!--                    </a>-->
<!--                </li>-->
                <!--<li>-->
                <!--<a href="http://twitter.com/" target="_blank">-->
                <!--<i class="fa fa-twitter"></i>-->
                <!--</a>-->
                <!--</li>-->

<!--                <li>-->
                <!--<a href="http://snapchat.com/" target="_blank">-->
                <!--<i class="fa fa-snapchat-ghost"></i> -->
                <!--</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="http://youtube.com/" target="_blank">-->
                <!--<i class="fa fa-youtube"></i>-->
                <!--</a>-->
                <!--</li>-->




                <li>
                    <a href="mailto:mail@placetolive.ru" target="_blank">
                        <i class="fa fa-envelope"></i>
                    </a>
                </li>




            </ul>


        </div>




    </div><!-- grid -->

</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jscript4.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $("a#scroll_to_anonces").click(function(){
            var _href = $(this).attr("href");
            console.log("a[name='"+_href+"']");
            $("html, body").animate({scrollTop: $("a[name='"+_href+"']").offset().top+"px"},1000);
            return false;
        });
    });

</script>


</body></html>