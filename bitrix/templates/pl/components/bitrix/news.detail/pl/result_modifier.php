<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$cp = $this->__component; // ������ ����������

if (is_object($cp))
{
    // ������� � arResult ���������� ��� ���� - MY_TITLE � IS_OBJECT
    $cp->arResult['og_image'] = 'http://placetolive.ru'.$arResult['PREVIEW_PICTURE']['SRC'];
    $cp->arResult['og_description'] = str_replace(array("\r", "\n"), "",TruncateText(strip_tags($arResult['DETAIL_TEXT']),300));
    $cp->SetResultCacheKeys(array('og_image','og_description'));
    // �������� �� � ����� arResult, � ������� �������� ������
    $arResult['og_image'] = $cp->arResult['og_image'];
    $arResult['og_description'] = $cp->arResult['og_description'];

}
//string tags in array
$arTags=explode(",",$arResult["TAGS"]);
$arResult["arTAGS"]=$arTags;

CModule::IncludeModule("iblock");
$arSec=end($arResult['SECTION']);
$arFilter = Array(
    "IBLOCK_ID"=>$arSec[0]["IBLOCK_ID"],
    "!ID" => $arResult['ID']
);
//$arResult['RAND_ELEMENT']["FILTER"]=$arFilter;
$res = CIBlockElement::GetList(Array("RAND"=>"ASC"), $arFilter, false, Array ("nTopCount" => 3));
while($ar_fields = $res->GetNext())
{
    $arResult['RAND_ELEMENT'][] = array("NAME" => $ar_fields["NAME"], "PREVIEW_PICTURE" => CFile::GetPath($ar_fields["PREVIEW_PICTURE"]), "DETAIL_PAGE_URL" => $ar_fields["DETAIL_PAGE_URL"]) ;
}
$arParams['TEST']="data in cash";

//formating text
$arResult["nDETAIL_TEXT"]=explode("\n", $arResult["DETAIL_TEXT"]);
$arSearch=array('[h]','[/h]','[cc]','[/cc]','[cl]','[/cl]','[cr]','[/cr]');
$arReplace=array('<h3>','</h3>','<blockquote class="fa fa-quote-left"><p>','</p></blockquote>','<blockquote class="fa fa-quote-left alignleft"><p>','</p></blockquote>','<blockquote class="fa fa-quote-left alignright"><p>','</p></blockquote>');
$arTmp=array();
foreach($arResult["nDETAIL_TEXT"] as $str){
    if(strlen($str)>2){
        $arTmp[]=array('str'=>str_replace($arSearch,$arReplace,$str),'len'=>strlen(trim($str,'\r')));

    }
}
$arResult["nDETAIL_TEXT"]=$arTmp;