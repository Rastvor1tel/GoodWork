<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IBLOCK_ID" => 1,
	"DEPTH_LEVEL" => 3,
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "/catalog/",
	"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
));

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>