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
    "ADMIN_NOTES"       => ConvertTimeStamp()." �������� ��������� �� �������� ".$_REQUEST['page'],
    "PASSWORD"          => $tmpPass,
    "CONFIRM_PASSWORD"  => $tmpPass
);

$ID = $user->Add($arFields);
if (intval($ID) > 0)
    echo "������������ ������� ��������.";
else{
    $errStr=$user->LAST_ERROR;
    if(substr_count($errStr, "��� ����������")==1){
        $rsUser = CUser::GetByLogin($arFields["LOGIN"]);
        $arUser = $rsUser->Fetch();
        if($arUser["ACTIVE"]=="N"){
            $fields = Array(
                "ACTIVE"            => "Y",
                "ADMIN_NOTES"       => $arUser["ADMIN_NOTES"]."\n".ConvertTimeStamp()." �������� ������������ �� �������� ".$_REQUEST['page']
            );
            $user->Update($arUser["ID"], $fields);
            echo $user->LAST_ERROR;
            //TODO ������������
        }
        echo "<pre>"; print_r($arUser); echo "</pre>";
        echo "�� ��� ����� ����� ���� ��� ������������! ���� �� �� ��������� ���� ������, �� �������� ��� �� mail@placetolive.ru!";
    }
    //TODO ��������� ��������� �� ������
}

?>