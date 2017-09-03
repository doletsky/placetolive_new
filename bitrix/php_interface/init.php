<?php
AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("MyClass", "translitNamePrePic"));
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("MyClass", "translitNamePrePic"));

class MyClass
{
    function translitNamePrePic(&$arFields)
    {

        if(strlen($arFields['PREVIEW_PICTURE']['name'])>0){
            if ( preg_match( '~[à-ÿÀ-ß¨¸]~',$arFields['PREVIEW_PICTURE']['name'] ) ){
                $trlit = Cutil::translit($arFields['PREVIEW_PICTURE']['name'],"ru", array('safe_chars'=>'.'));
                $arFields['PREVIEW_PICTURE']['name']=$trlit;
            }
        }
    }
}