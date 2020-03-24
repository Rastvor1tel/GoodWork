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

$depth = count(explode("/", $arResult["VARIABLES"]["SECTION_CODE_PATH"]));
?>
<div class="catalog-inner">
	<div class="catalog-inner__wrapper">
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
				"TITLE"                 => "Каталог"
			],
			false
		);
		?>
		<div class="catalog-inner__container">
			<?php
			if ($depth == 1) {
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"catalogInner",
					[
						"IBLOCK_TYPE"        => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID"          => $arParams["IBLOCK_ID"],
						"SECTION_ID"         => $arResult["VARIABLES"]["SECTION_ID"],
						"SECTION_CODE"       => $arResult["VARIABLES"]["SECTION_CODE"],
						"CACHE_TYPE"         => $arParams["CACHE_TYPE"],
						"CACHE_TIME"         => $arParams["CACHE_TIME"],
						"CACHE_GROUPS"       => $arParams["CACHE_GROUPS"],
						"COUNT_ELEMENTS"     => $arParams["SECTION_COUNT_ELEMENTS"],
						"TOP_DEPTH"          => 1,
						"SECTION_URL"        => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
						"VIEW_MODE"          => $arParams["SECTIONS_VIEW_MODE"],
						"SHOW_PARENT_NAME"   => $arParams["SECTIONS_SHOW_PARENT_NAME"],
						"HIDE_SECTION_NAME"  => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
						"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
					],
					$component,
					);
			} else {
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.section",
					"catalog",
					[
						"IBLOCK_TYPE"                  => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID"                    => $arParams["IBLOCK_ID"],
						"ELEMENT_SORT_FIELD"           => $arParams["ELEMENT_SORT_FIELD"],
						"ELEMENT_SORT_ORDER"           => $arParams["ELEMENT_SORT_ORDER"],
						"ELEMENT_SORT_FIELD2"          => $arParams["ELEMENT_SORT_FIELD2"],
						"ELEMENT_SORT_ORDER2"          => $arParams["ELEMENT_SORT_ORDER2"],
						"META_KEYWORDS"                => $arParams["LIST_META_KEYWORDS"],
						"META_DESCRIPTION"             => $arParams["LIST_META_DESCRIPTION"],
						"BROWSER_TITLE"                => $arParams["LIST_BROWSER_TITLE"],
						"SET_LAST_MODIFIED"            => $arParams["SET_LAST_MODIFIED"],
						"INCLUDE_SUBSECTIONS"          => $arParams["INCLUDE_SUBSECTIONS"],
						"ACTION_VARIABLE"              => $arParams["ACTION_VARIABLE"],
						"PRODUCT_ID_VARIABLE"          => $arParams["PRODUCT_ID_VARIABLE"],
						"SECTION_ID_VARIABLE"          => $arParams["SECTION_ID_VARIABLE"],
						"FILTER_NAME"                  => $arParams["FILTER_NAME"],
						"CACHE_TYPE"                   => $arParams["CACHE_TYPE"],
						"CACHE_TIME"                   => $arParams["CACHE_TIME"],
						"CACHE_FILTER"                 => $arParams["CACHE_FILTER"],
						"CACHE_GROUPS"                 => $arParams["CACHE_GROUPS"],
						"SET_TITLE"                    => $arParams["SET_TITLE"],
						"MESSAGE_404"                  => $arParams["~MESSAGE_404"],
						"SET_STATUS_404"               => $arParams["SET_STATUS_404"],
						"SHOW_404"                     => $arParams["SHOW_404"],
						"FILE_404"                     => $arParams["FILE_404"],
						"DISPLAY_COMPARE"              => $arParams["USE_COMPARE"],
						"PAGE_ELEMENT_COUNT"           => $arParams["PAGE_ELEMENT_COUNT"],
						"LINE_ELEMENT_COUNT"           => $arParams["LINE_ELEMENT_COUNT"],
						"USE_PRICE_COUNT"              => $arParams["USE_PRICE_COUNT"],
						"SHOW_PRICE_COUNT"             => $arParams["SHOW_PRICE_COUNT"],
						"DISPLAY_TOP_PAGER"            => $arParams["DISPLAY_TOP_PAGER"],
						"DISPLAY_BOTTOM_PAGER"         => $arParams["DISPLAY_BOTTOM_PAGER"],
						"LAZY_LOAD"                    => $arParams["LAZY_LOAD"],
						"MESS_BTN_LAZY_LOAD"           => $arParams["~MESS_BTN_LAZY_LOAD"],
						"LOAD_ON_SCROLL"               => $arParams["LOAD_ON_SCROLL"],
						"SECTION_ID"                   => $arResult["VARIABLES"]["SECTION_ID"],
						"SECTION_CODE"                 => $arResult["VARIABLES"]["SECTION_CODE"],
						"SECTION_URL"                  => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
						"DETAIL_URL"                   => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["element"],
						"USE_MAIN_ELEMENT_SECTION"     => $arParams["USE_MAIN_ELEMENT_SECTION"],
						'SLIDER_INTERVAL'              => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
						'SLIDER_PROGRESS'              => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',
						'DISCOUNT_PERCENT_POSITION'    => $arParams['DISCOUNT_PERCENT_POSITION'],
						'MESS_SHOW_MAX_QUANTITY'       => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
						'RELATIVE_QUANTITY_FACTOR'     => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
						'USE_ENHANCED_ECOMMERCE'       => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
						'DATA_LAYER_NAME'              => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
						'BRAND_PROPERTY'               => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),
						'TEMPLATE_THEME'               => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
						"ADD_SECTIONS_CHAIN"           => "Y",
						'SHOW_CLOSE_POPUP'             => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
						'COMPARE_PATH'                 => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['compare'],
						'COMPARE_NAME'                 => $arParams['COMPARE_NAME'],
						'USE_COMPARE_LIST'             => 'Y',
						'BACKGROUND_IMAGE'             => (isset($arParams['SECTION_BACKGROUND_IMAGE']) ? $arParams['SECTION_BACKGROUND_IMAGE'] : ''),
						'COMPATIBLE_MODE'              => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
						'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : '')
					],
					$component
				);
			}
			?>
		</div>
	</div>
</div>