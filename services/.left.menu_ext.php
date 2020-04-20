<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent("dial:menu.section.elements", "", array(
	"IBLOCK_ID" => 3,
	"DEPTH_LEVEL" => 3,
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "/services/",
	"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
));

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>