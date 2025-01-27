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
	<?php
	$APPLICATION->IncludeComponent(
			"bitrix:catalog.sections.top",
			"serviceMain",
			[
			"IBLOCK_TYPE"               => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID"                 => $arParams["IBLOCK_ID"],
			"SECTION_FIELDS"            => [""],
			"SECTION_USER_FIELDS" => ["UF_ICON"],
			"SECTION_SORT_FIELD"        => "sort",
			"SECTION_SORT_ORDER"        => "asc",
			"ELEMENT_SORT_FIELD"              => $arParams["ELEMENT_SORT_FIELD"],
			"ELEMENT_SORT_ORDER"              => $arParams["ELEMENT_SORT_ORDER"],
			"ELEMENT_SORT_FIELD2"             => $arParams["ELEMENT_SORT_FIELD2"],
			"ELEMENT_SORT_ORDER2"             => $arParams["ELEMENT_SORT_ORDER2"],
			"FILTER_NAME"               => "arrFilter",
			"SECTION_URL"               => "",
			"DETAIL_URL"                => "",
			"ACTION_VARIABLE"           => "action",
			"SECTION_ID_VARIABLE"       => "SECTION_ID",
			"DISPLAY_COMPARE"           => "Y",
			"USE_MAIN_ELEMENT_SECTION"  => "Y",
			"SECTION_COUNT"             => "20",
			"ELEMENT_COUNT"             => "9",
			"LINE_ELEMENT_COUNT"        => "3",
			"PROPERTY_CODE"             => ["YEAR", "ISBN", "PAGES", "CML2_ARTICLE"],
			"CACHE_TYPE"          => $arParams["CACHE_TYPE"],
			"CACHE_TIME"          => $arParams["CACHE_TIME"],
			"CACHE_GROUPS"        => $arParams["CACHE_GROUPS"],
		]
	);
	?>
	<div class="content">
		<?php
		$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/content/serviceText.php");
		?>
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
