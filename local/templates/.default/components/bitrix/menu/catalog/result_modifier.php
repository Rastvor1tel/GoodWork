<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

function recursiveMenuBuild($arMenu, $depth = 1) {
	$level = 0;
	$result = [];
	foreach ($arMenu as $key => $arItem) {
		if($arItem['DEPTH_LEVEL'] == $depth) {
			$result[$key] = $arItem;
			if ($arItem['IS_PARENT']) {
				$level = $key;
			}
		} else {
			$result[$level]['ITEMS'][$key] = $arItem;
		}
	}
	foreach ($result as &$item) {
		if ($item['IS_PARENT']) {
			$item['ITEMS'] = recursiveMenuBuild($item['ITEMS'], $depth+1);
		}
	}
	return $result;
}

$arResult = recursiveMenuBuild($arResult);