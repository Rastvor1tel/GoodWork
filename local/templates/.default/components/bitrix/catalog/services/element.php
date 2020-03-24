<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

<div class="catalog-inner">
	<div class="catalog-inner__wrapper">
		<div class="sidebar-open button button-transparent">Каталог</div>
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
		<div class="catalog-inner__container">
			<?php
			$APPLICATION->IncludeComponent(
				"bitrix:catalog.element",
				"catalog",
				[
					'IBLOCK_TYPE'               => $arParams['IBLOCK_TYPE'],
					'IBLOCK_ID'                 => $arParams['IBLOCK_ID'],
					'PROPERTY_CODE'             => $arParams['DETAIL_PROPERTY_CODE'],
					'META_KEYWORDS'             => $arParams['DETAIL_META_KEYWORDS'],
					'META_DESCRIPTION'          => $arParams['DETAIL_META_DESCRIPTION'],
					'BROWSER_TITLE'             => $arParams['DETAIL_BROWSER_TITLE'],
					'SET_CANONICAL_URL'         => $arParams['DETAIL_SET_CANONICAL_URL'],
					'BASKET_URL'                => $arParams['BASKET_URL'],
					'ACTION_VARIABLE'           => $arParams['ACTION_VARIABLE'],
					'PRODUCT_ID_VARIABLE'       => $arParams['PRODUCT_ID_VARIABLE'],
					'SECTION_ID_VARIABLE'       => $arParams['SECTION_ID_VARIABLE'],
					'CHECK_SECTION_ID_VARIABLE' => (isset($arParams['DETAIL_CHECK_SECTION_ID_VARIABLE']) ? $arParams['DETAIL_CHECK_SECTION_ID_VARIABLE'] : ''),
					'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
					'PRODUCT_PROPS_VARIABLE'    => $arParams['PRODUCT_PROPS_VARIABLE'],
					'CACHE_TYPE'                => $arParams['CACHE_TYPE'],
					'CACHE_TIME'                => $arParams['CACHE_TIME'],
					'CACHE_GROUPS'              => $arParams['CACHE_GROUPS'],
					'SET_TITLE'                 => $arParams['SET_TITLE'],
					'SET_LAST_MODIFIED'         => $arParams['SET_LAST_MODIFIED'],
					'MESSAGE_404'               => $arParams['~MESSAGE_404'],
					'SET_STATUS_404'            => $arParams['SET_STATUS_404'],
					'SHOW_404'                  => $arParams['SHOW_404'],
					'FILE_404'                  => $arParams['FILE_404'],
					'ELEMENT_ID'                => $arResult['VARIABLES']['ELEMENT_ID'],
					'ELEMENT_CODE'              => $arResult['VARIABLES']['ELEMENT_CODE'],
					'SECTION_ID'                => $arResult['VARIABLES']['SECTION_ID'],
					'SECTION_CODE'              => $arResult['VARIABLES']['SECTION_CODE'],
					'SECTION_URL'               => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['section'],
					'DETAIL_URL'                => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['element'],
					'ADD_SECTIONS_CHAIN'        => (isset($arParams['ADD_SECTIONS_CHAIN']) ? $arParams['ADD_SECTIONS_CHAIN'] : ''),
					'ADD_ELEMENT_CHAIN'         => (isset($arParams['ADD_ELEMENT_CHAIN']) ? $arParams['ADD_ELEMENT_CHAIN'] : ''),
				],
				$component
			);
			?>
		</div>
	</div>
</div>

