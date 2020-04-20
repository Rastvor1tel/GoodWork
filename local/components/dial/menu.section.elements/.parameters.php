<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(["all" => " "]);

$arIBlocks = [];
$db_iblock = CIBlock::GetList(["SORT" => "ASC"], ["SITE_ID" => $_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"] != "all" ? $arCurrentValues["IBLOCK_TYPE"] : "")]);
while ($arRes = $db_iblock->Fetch()) {
	$arIBlocks[$arRes["ID"]] = $arRes["NAME"];
}

$arComponentParameters = [
	"PARAMETERS" => [
		"IBLOCK_TYPE" => [
			"PARENT"            => "BASE",
			"NAME"              => GetMessage("MILLCOM_MENU_IBLOCK_TYPE"),
			"TYPE"              => "LIST",
			"VALUES"            => $arTypesEx,
			"DEFAULT"           => "catalog",
			"ADDITIONAL_VALUES" => "N",
			"REFRESH"           => "Y",
		],
		"IBLOCK_ID"   => [
			"PARENT"            => "BASE",
			"NAME"              => GetMessage("MILLCOM_MENU_IBLOCK_ID"),
			"TYPE"              => "LIST",
			"VALUES"            => $arIBlocks,
			"DEFAULT"           => '1',
			"MULTIPLE"          => "N",
			"ADDITIONAL_VALUES" => "N",
			"REFRESH"           => "Y",
		],
		"SORT"        => [
			"PARENT"   => "BASE",
			"NAME"     => GetMessage("MILLCOM_MENU_SORT"),
			"TYPE"     => "CHECKBOX",
			"MULTIPLE" => "N",
			"VALUE"    => "Y",
			"DEFAULT"  => "Y",
		],
		"DEPTH_LEVEL" => [
			"PARENT"  => "DATA_SOURCE",
			"NAME"    => GetMessage("MILLCOM_MENU_DEPTH_LEVEL"),
			"TYPE"    => "STRING",
			"DEFAULT" => "1",
		],
		"CACHE_TIME"  => ["DEFAULT" => 36000000],
	]
];
?>
