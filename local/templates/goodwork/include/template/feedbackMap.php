<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Loader;

CJSCore::Init(["map"]);
Loader::includeModule("iblock");

$contacts = [];
$rsContacts = CIBlockElement::GetList([], ["IBLOCK_ID" => 11, "ACTIVE" => "Y"], false, false, ["NAME", "PROPERTY_ADDRESS", "PROPERTY_COORDS"]);
while ($arContact = $rsContacts->Fetch()) {
	$contacts[] = [
		"NAME" => $arContact["NAME"],
		"ADDRESS" => $arContact["PROPERTY_ADDRESS_VALUE"],
		"COORDS" => explode(",", $arContact["PROPERTY_COORDS_VALUE"])
	];
}
?>
<script>
	BX.message({
		contactMap: <?= CUtil::PhpToJSObject($contacts)?>
	});
</script>
<section class="feedback">
		<div id="map" class="feedback__map"></div>
		<div class="container feedback__container">
			<div class="feedback__wrapper">
				<?
				$APPLICATION->IncludeComponent(
					"bitrix:form.result.new",
					"question",
					[
						"WEB_FORM_ID"            => 2,
						"AJAX_MODE"              => "N",
						"AJAX_OPTION_JUMP"       => "N",
						"AJAX_OPTION_SHADOW"     => "N",
						"AJAX_OPTION_STYLE"      => "N",
						"CACHE_TIME"             => "3600",
						"CACHE_TYPE"             => "A",
						"CHAIN_ITEM_LINK"        => "",
						"CHAIN_ITEM_TEXT"        => "",
						"EDIT_URL"               => "",
						"IGNORE_CUSTOM_TEMPLATE" => "N",
						"LIST_URL"               => "",
						"SEF_MODE"               => "N",
						"SUCCESS_URL"            => "",
						"USE_EXTENDED_ERRORS"    => "N",
						"VARIABLE_ALIASES"       => [
							"WEB_FORM_ID" => "WEB_FORM_ID",
							"RESULT_ID"   => "RESULT_ID"
						],
					],
					false
				);
				?>
			</div>
		</div>
	</section>
