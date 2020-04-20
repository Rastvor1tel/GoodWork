<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if ($arResult["PROPERTIES"]["BRAND"]["VALUE"]) {
	$arBrand = CIBlockElement::GetByID($arResult["PROPERTIES"]["BRAND"]["VALUE"])->Fetch();
	$arResult["BRAND"] = CFile::ResizeImageGet($arBrand["PREVIEW_PICTURE"], ['width' => 220, 'height' => 80], BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"];
	$arResult["BRAND_NAME"] = $arBrand["NAME"];
}
if ($arResult["PROPERTIES"]["COVER"]["VALUE"]) {
	$covers = [];
	$arFilter = [
		"IBLOCK_ID" => 9,
		"ID" => $arResult["PROPERTIES"]["COVER"]["VALUE"]
	];
	$arSelect = [
		"ID",
		"IBLOCK_ID",
		"NAME",
		"PREVIEW_PICTURE",
		"PROPERTY_CHARACT",
		"PROPERTY_COLOR_CODES"
	];
	$rsCovers = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
	while ($ob = $rsCovers->GetNextElement()) {
		$arFields = $ob->GetFields();
		$arProps = $ob->GetProperties();
		if (!$covers[$arFields["ID"]]) {
			$props = [];
			foreach ($arProps as $key => $prop) {
				$props[$key] = getMultipleProps($prop);
			}
			$covers[$arFields["ID"]] = [
				"ID" => $arFields["ID"],
				"NAME" => $arFields["NAME"],
				"PICTURE" => CFile::GetFileArray($arFields["PREVIEW_PICTURE"]),
				"PROPS" => $props
			];
		}
	}
	$arResult["COVERS"] = $covers;
}

if ($arResult["PROPERTIES"]["CHARACT"]["VALUE"]) {
	$arResult["CHARACT"] = getMultipleProps($arResult["PROPERTIES"]["CHARACT"]);
}