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
    "ADMIN_NOTES"       => ConvertTimeStamp(false, "FULL")." �������� ��������� �� �������� ".$_REQUEST['page'],
    "PASSWORD"          => $tmpPass,
    "CONFIRM_PASSWORD"  => $tmpPass
);

$ID = $user->Add($arFields);
if (intval($ID) > 0){
    echo "�� ������� �����������. �� ��������� ����� ���������� �������������.";
    /* ���������� */
    $to= $_REQUEST['email'];

    /* ����/subject */
    $subject = "�������� �� ����� ����";

    /* ��������� */
    $message = '
<html>
<head>
 <title>�������� �� ����� ����"</title>
</head>
<body>
<p>������������!<br>
�� ������� ����������� �� ����� ����!<br>
�� ���������� ��� �� ��, ��� �� � ����!<br>
� ��������� ������� <a href="http://placetolive.ru">Place to Live!</a></p>
<p><small>��� �� ���������� �� �������� ������� <a href="http://'.$_SERVER['HTTP_HOST'].'/unsubscribe.php?email='.$_REQUEST['email'].'">����������</a> </small></p>
</body>
</html>
';

    /* ��� �������� HTML-����� �� ������ ���������� ����� Content-type. */
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=windows-1251\r\n";

    /* �������������� ����� */
    $headers .= "From: info@placetolive.ru\r\n";
    /* � ������ �������� �� */
    mail($to, $subject, $message, $headers);
}

else{
    $errStr=$user->LAST_ERROR;
    if(substr_count($errStr, "��� ����������")==1){
        $rsUser = CUser::GetByLogin($arFields["LOGIN"]);
        $arUser = $rsUser->Fetch();
        if($arUser["ACTIVE"]=="N"){
            $fields = Array(
                "ACTIVE"            => "Y",
                "ADMIN_NOTES"       => $arUser["ADMIN_NOTES"]."\n".ConvertTimeStamp(false, "FULL")." �������� ������������ �� �������� ".$_REQUEST['page']
            );
            $user->Update($arUser["ID"], $fields);
            echo $user->LAST_ERROR;
        }
        echo "�� ��� ����� ����� ���� ��� ������������! ���� �� �� ��������� ���� ������, �� �������� ��� �� mail@placetolive.ru!";
    }
    //TODO ��������� ��������� �� ������
}

?>