<?php
$allSelect=1;
foreach($arResult as $arItem){
    if($arItem["SELECTED"]==1)$allSelect=0;
}
$arAddMenu=array(
            "TEXT" => "��� ������",
            "LINK" => "/list.php",
            "SELECTED" => $allSelect
);
$arResult = array_merge(array('0'=>$arAddMenu), $arResult);