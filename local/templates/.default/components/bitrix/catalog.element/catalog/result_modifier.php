<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if ($arResult["PROPERTIES"]["BRAND"]["VALUE"]) {
	$arBrand = CIBlockElement::GetByID($arResult["PROPERTIES"]["BRAND"]["VALUE"])->Fetch();
	$arResult["BRAND"] = CFile::ResizeImageGet($arBrand["PREVIEW_PICTURE"], ['width' => 220, 'height' => 80], BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"];
}

if ($arResult["PROPERTIES"]["CHARACT"]["VALUE"]) {
	$charact = $arResult["PROPERTIES"]["CHARACT"]["VALUE"];
	$arCharact = [];
	foreach ($charact as $key => $charItem) {
		$arCharact[] = [
			"NAME" => $charItem,
			"VALUE" => $arResult["PROPERTIES"]["CHARACT"]["DESCRIPTION"][$key]
		];
	}
	$arResult["CHARACT"] = $arCharact;
}