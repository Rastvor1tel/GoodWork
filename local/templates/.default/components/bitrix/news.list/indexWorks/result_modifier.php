<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach($arResult["ITEMS"] as &$arItem) {
	if ($arItem["PROPERTIES"]["CHARACT"]["VALUE"]) {
		$arItem["CHARACT"] = getMultipleProps($arItem["PROPERTIES"]["CHARACT"]);
	}
}