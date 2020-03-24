<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */

/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>

<div class="services-inner">
	<p class="page-description">Техника, этапы, сроки и стоимость</p>
	<div class="services-detail">
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"catalog",
			[
				"ROOT_MENU_TYPE"        => "left",
				"MENU_CACHE_TYPE"       => "A",
				"MENU_CACHE_TIME"       => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS"   => [],
				"MAX_LEVEL"             => "1",
				"USE_EXT"               => "Y",
				"DELAY"                 => "N",
				"ALLOW_MULTI_SELECT"    => "N",
				"TITLE"                 => "Услуги"
			],
			false
		);
		?>
		<div class="services-detail__container">
			<?php
			$APPLICATION->IncludeComponent(
				"dial:section.detail",
				"service",
				[
					"IBLOCK_ID"    => $arParams["IBLOCK_ID"],
					"SECTION_ID"   => $arResult["VARIABLES"]["SECTION_ID"],
					"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
					"FIELDS"       => [
						"NAME",
						"DETAIL_PICTURE",
						"UF_UPPER_TEXT",
						"DESCRIPTION",
						"UF_STEPS",
						"UF_BOTTOM_TEXT",
					]
				]
			);
			?>
		</div>
	</div>
	<div class="form-advice">
		<div class="form-advice__wrapper">
			<?
			$APPLICATION->IncludeComponent(
				"bitrix:form.result.new",
				"consult",
				[
					"WEB_FORM_ID"            => 3,
					"AJAX_MODE"              => "Y",
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
</div>