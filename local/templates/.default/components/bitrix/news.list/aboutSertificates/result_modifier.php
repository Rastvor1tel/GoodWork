<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult["ITEMS"] as &$arItem) {
	$arItem["PICTURE"] = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], ['width' => 700, 'height' => 930], BX_RESIZE_IMAGE_EXACT, true)["src"];
}