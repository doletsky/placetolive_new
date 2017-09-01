<?php
AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("MyClass", "translitNamePrePic"));
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("MyClass", "translitNamePrePic"));

class MyClass
{
    // создаем обработчик событи€ "OnAfterIBlockElementAdd"
    function translitNamePrePic(&$arFields)
    {

        if(strlen($arFields['PREVIEW_PICTURE']['name'])>0){
            if ( preg_match( '~[а-€ј-я®Є]~',$arFields['PREVIEW_PICTURE']['name'] ) ){
                file_put_contents($_SERVER['DOCUMENT_ROOT'].'/upload/log_translit.txt', print_r($arFields['PREVIEW_PICTURE'], true));
            }else{
                file_put_contents($_SERVER['DOCUMENT_ROOT'].'/upload/log_translit.txt', "jet latin");
            }
        }else{
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/upload/log_translit.txt', print_r(CFile::GetFileArray($arFields['PREVIEW_PICTURE']['old_file']), true));
        }
//            $data=array(
//                'FLAG'=> strlen($arFields['PREVIEW_PICTURE_ID']),
//                'PREVIEW_PICTURE_ID'=>$arFields['PREVIEW_PICTURE_ID'],
//                'PREVIEW_PICTURE'=>print_r($arFields['PREVIEW_PICTURE'], true)
//            );
//            if(strlen($arFields['PREVIEW_PICTURE_ID'])){
//                $fid=$arFields['PREVIEW_PICTURE_ID'];
//            }else{
//                $fid=$arFields['PREVIEW_PICTURE']['old_file'];
//            }
//            $arFile = CFile::GetFileArray($fid);
//            if ( preg_match( '~[а-€ј-я®Є]~',$arFile['FILE_NAME'] ) ){
//                $data['img']=$arFile;
//                $data['imgNameTrl'] = Cutil::translit($arFile['FILE_NAME'],"ru", array('safe_chars'=>'.'));
//                $arNFile=Array(
//                    "name" => $data['imgNameTrl'],
//                    "size" => $arFile["FILE_SIZE"],
//                    "tmp_name" => "upload/iblock",
//                    "old_file" => $arFile["ID"],
//                    "del" => "Y",
//                    "MODULE_ID" => $arFile["MODULE_ID"],
//                    "content" => $APPLICATION->GetFileContent($_SERVER["DOCUMENT_ROOT"].$arFile["SRC"]));
////            $nFid=CFile::SaveFile($arNFile);
//                CModule::IncludeModule("iblock");
//                $el = new CIBlockElement;
//
//                $arLoadProductArray = Array(
//                    "PREVIEW_PICTURE" => $nFid,
//                    "NAME"           => $arFields["NAME"],
//                    "ACTIVE"         => "Y"
//                );
//
//                $PRODUCT_ID = $arFields["ID"];
////                $res = $el->Update($PRODUCT_ID, $arLoadProductArray);
//                file_put_contents($_SERVER['DOCUMENT_ROOT'].'/upload/log_translit.txt', print_r($arFields, true));
//            }

    }
}