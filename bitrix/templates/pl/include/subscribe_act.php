<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<!--<pre>--><?//print_r($_REQUEST)?><!--</pre>-->
<!--<pre>--><?//print_r($_SESSION)?><!--</pre>-->
<?
$rsGroups = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => 'subscribers'));
$arGroup=$rsGroups->GetNext();
?>
<?
$tmpPass=time();
$user = new CUser;
$arFields = Array(
    "NAME"              => $_REQUEST['name'],
    "EMAIL"             => $_REQUEST['email'],
    "LOGIN"             => $_REQUEST['email'],
    "ACTIVE"            => "Y",
    "GROUP_ID"          => array($arGroup['ID']),
    "ADMIN_NOTES"       => ConvertTimeStamp()." Подписка оформлена на странице ".$_REQUEST['page'],
    "PASSWORD"          => $tmpPass,
    "CONFIRM_PASSWORD"  => $tmpPass
);

$ID = $user->Add($arFields);
if (intval($ID) > 0)
    echo "Пользователь успешно добавлен.";
else{
    $errStr=$user->LAST_ERROR;
    if(substr_count($errStr, "уже существует")==1){
        $rsUser = CUser::GetByLogin($arFields["LOGIN"]);
        $arUser = $rsUser->Fetch();
        if($arUser["ACTIVE"]=="N"){
            $fields = Array(
                "ACTIVE"            => "Y",
                "ADMIN_NOTES"       => $arUser["ADMIN_NOTES"]."\n".ConvertTimeStamp()." Подписка активирована на странице ".$_REQUEST['page']
            );
            $user->Update($arUser["ID"], $fields);
            echo $user->LAST_ERROR;
            //TODO активировать
        }
        echo "<pre>"; print_r($arUser); echo "</pre>";
        echo "На эту почту новые идеи уже отправляются! Если Вы не получаете наши письма, то напишите нам на mail@placetolive.ru!";
    }
    //TODO отправить сообщение об ошибке
}

?>