<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["PROPERTIES"]["IMAGES"]["VALUE"] as $image) {
	$arResult["GALLERY"][] = CFile::GetFileArray($image);
}

if ($arResult["PROPERTIES"]["CHARACT"]["VALUE"]) {
	$arResult["CHARACT"] = getMultipleProps($arResult["PROPERTIES"]["CHARACT"]);
}