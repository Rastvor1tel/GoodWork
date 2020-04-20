<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!CModule::IncludeModule("iblock")) return false;

function menuSort($a, $b) {
	if ($a['SORT'] == $b['SORT']) {
		if ($a['ID'] == $b['ID']) return 0;
		return ($a['ID'] > $b['ID']) ? -1 : 1;
	}
	return ($a['SORT'] < $b['SORT']) ? -1 : 1;
}

function menuDisplay($arMenu, $id, $level, &$aMenuLinks, $arParams) {
	if (!isset($arMenu[$id]))
		return false;
	foreach ($arMenu[$id] as $arItem) {
		if ($arParams['DEPTH_LEVEL'] <= $level)
			unset($arMenu[$arItem['ID']]);
		$aMenuLinks[] = [
			htmlspecialcharsbx($arItem['NAME']),
			$arItem['DETAIL_PAGE_URL'] ? $arItem['DETAIL_PAGE_URL'] : $arItem['SECTION_PAGE_URL'],
			[$arItem['DETAIL_PAGE_URL'] ? $arItem['DETAIL_PAGE_URL'] : $arItem['SECTION_PAGE_URL']],
			[
				'FROM_IBLOCK' => $arItem['IBLOCK_ID'],
				'IS_PARENT'   => (isset($arItem['SECTION_PAGE_URL']) && isset($arMenu[$arItem['ID']])) ? 1 : '',
				'DEPTH_LEVEL' => $level
			]
		];
		if (isset($arItem['SECTION_PAGE_URL']))
			menuDisplay($arMenu, $arItem['ID'], $level + 1, $aMenuLinks, $arParams);
	}
}

if (!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["DEPTH_LEVEL"] = intval($arParams["DEPTH_LEVEL"]);
if ($arParams["DEPTH_LEVEL"] <= 0)
	$arParams["DEPTH_LEVEL"] = 1;

if ($this->StartResultCache()) {
	$arOrder = ["SORT" => "ASC"];
	$arSelect = ["ID", "NAME", "IBLOCK_ID", "SECTION_PAGE_URL", "SORT", "IBLOCK_SECTION_ID"];
	$arFilter = ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "GLOBAL_ACTIVE" => "Y", "IBLOCK_ACTIVE" => "Y"];
	$rsSections = CIBlockSection::GetList($arOrder, $arFilter, false, $arSelect);
	$arResult['ITEMS'] = [];
	while ($arSection = $rsSections->GetNext()) {
		$IBLOCK_SECTION_ID = $arSection['IBLOCK_SECTION_ID'] ? $arSection['IBLOCK_SECTION_ID'] : 0;
		$arResult['ITEMS'][$IBLOCK_SECTION_ID][] = $arSection;
	}

	$arOrder = ["SORT" => "ASC"];
	$arSelect = ["ID", "NAME", "IBLOCK_ID", "DETAIL_PAGE_URL", "SORT", "SECTION_ID"];
	$arFilter = ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y"];
	$rsElements = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
	while ($arElement = $rsElements->GetNext()) {
		$IBLOCK_SECTION_ID = $arElement['IBLOCK_SECTION_ID'] ? $arElement['IBLOCK_SECTION_ID'] : 0;
		$arResult['ITEMS'][$IBLOCK_SECTION_ID][] = $arElement;
	}
	$this->EndResultCache();
}

if ($arParams["SORT"] == 'Y') {
	foreach ($arResult['ITEMS'] as &$arMenuItem) {
		usort($arMenuItem, 'menuSort');
	}
}



menuDisplay($arResult['ITEMS'], 0, 1, $aMenuLinks, $arParams);

return $aMenuLinks;
?>