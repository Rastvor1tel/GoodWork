<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["PROPERTIES"]["IMAGES"]["VALUE"] as $image) {
	$arResult["GALLERY"][] = [
		"THUMB" => CFile::ResizeImageGet($image, ['width' => 350, 'height' => 260], BX_RESIZE_IMAGE_EXACT, true)["src"],
		"SRC" => CFile::ResizeImageGet($image, ['width' => 1000, 'height' => 1000], BX_RESIZE_IMAGE_PROPORTIONAL, true)["src"]
	];
}

if ($arResult["PROPERTIES"]["CHARACT"]["VALUE"]) {
	$arResult["CHARACT"] = getMultipleProps($arResult["PROPERTIES"]["CHARACT"]);
}