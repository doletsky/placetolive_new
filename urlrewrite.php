<?
$arUrlRewrite = array(
    array(
        "CONDITION" => "#^/specialty/(.*)#",
//        "RULE" => "CODE=$2",
//        "ID" => "bitrix:news.detail",
        "PATH" => "/specialty/index.php",
    ),
	array(
		"CONDITION" => "#^/(.*)/(.*)/(.*)#",
		"RULE" => "CODE=$2",
		"ID" => "bitrix:news.detail",
		"PATH" => "/detail.php",
	),
    array(
        "CONDITION" => "#^/(.*)/(.*)#",
        "RULE" => "CODE=$1",
        "ID" => "bitrix:news.list",
        "PATH" => "/list.php",
    ),
);

?>