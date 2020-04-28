<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

function sectionSort($a, $b) {
	if ($a["SORT"] == $b["SORT"]) {
		return ($a["NAME"] < $b["NAME"]) ? -1 : 1;
	}
	return ($a["SORT"] < $b["SORT"]) ? -1 : 1;
}

function getSectionData($sectionID, $curSectionID) {
	$result = [];
	$result = CIBlockSection::GetByID($sectionID)->Fetch();
	if (($result["IBLOCK_SECTION_ID"] != $curSectionID) && ($result["ID"] != $curSectionID)) {
		$result = getSectionData($result["IBLOCK_SECTION_ID"], $curSectionID);
	}
	return $result;
}

$result = [];
$cache = [];

foreach ($arResult["ITEMS"] as $arItem) {
	if (!$cache[$arItem["~IBLOCK_SECTION_ID"]]) {
		$arSection = getSectionData($arItem["~IBLOCK_SECTION_ID"], $arResult["ID"]);
		$result[$arSection["ID"]] = [
			"ID"          => $arSection["ID"],
			"NAME"        => $arSection["NAME"],
			"SORT"        => $arSection["SORT"],
			"PICTURE"     => CFile::ResizeImageGet($arSection["PICTURE"], ['width' => 350, 'height' => 250], BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"],
			"DESCRIPTION" => $arSection["DESCRIPTION"]
		];
		$cache[$arItem["~IBLOCK_SECTION_ID"]] = $arSection["ID"];
	}
	$item = $arItem;
	if ($arItem["PROPERTIES"]["CHARACT"]["VALUE"]) {
		$charact = $item["PROPERTIES"]["CHARACT"]["VALUE"];
		$arCharact = [];
		foreach ($charact as $key => $charItem) {
			$arCharact[] = [
				"NAME" => $charItem,
				"VALUE" => $item["PROPERTIES"]["CHARACT"]["DESCRIPTION"][$key]
			];
		}
		$item["CHARACT"] = $arCharact;
	}
	if ($arItem["PROPERTIES"]["BRAND"]["VALUE"]) {
		$arBrand = CIBlockElement::GetByID($item["PROPERTIES"]["BRAND"]["VALUE"])->Fetch();
		$item["BRAND"] = $arBrand["NAME"];
	}
	$result[$cache[$arItem["~IBLOCK_SECTION_ID"]]]["ITEMS"][] = $item;
}

usort($result, 'sectionSort');

$arResult["FORMATTED_ITEMS"] = $result;