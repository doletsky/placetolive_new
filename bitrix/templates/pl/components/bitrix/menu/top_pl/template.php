<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


    <div class="menu-primary-menu-container">
        <ul id="menu-primary-menu" class="menu">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item current_page_item">
                <a href="/">�������</a></li>

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="/sections.php">�������</a>
                <ul class="sub-menu">
                    <?foreach($arResult as $arItem):?>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                    <?endforeach?>
                </ul>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">������</a>
                <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/chromatic_circle.php">������������� ����</a></li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/search.php">�����</a></li>
        </ul>
    </div>
