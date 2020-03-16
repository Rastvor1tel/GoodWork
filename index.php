<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainSlider",
	[
		"IBLOCK_TYPE"               => "services",
		"IBLOCK_ID"                 => 2,
		"NEWS_COUNT"                => 20,
		"SORT_BY1"                  => "SORT",
		"SORT_ORDER1"               => "ASC",
		"SORT_BY2"                  => "ID",
		"SORT_ORDER2"               => "ASC",
		"FILTER_NAME"               => "",
		"FIELD_CODE"                => ["ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT", "PREVIEW_PICTURE"],
		"PROPERTY_CODE"             => ["BANNER_LINK"],
		"CACHE_TYPE"                => "A",
		"CACHE_TIME"                => "36000000",
		"CACHE_FILTER"              => "N",
		"CACHE_GROUPS"              => "Y",
		"PREVIEW_TRUNCATE_LEN"      => "",
		"ACTIVE_DATE_FORMAT"        => "d.m.Y",
		"SET_TITLE"                 => "N",
		"SET_BROWSER_TITLE"         => "N",
		"SET_META_KEYWORDS"         => "N",
		"SET_META_DESCRIPTION"      => "N",
		"SET_LAST_MODIFIED"         => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN"        => "N",
		"DISPLAY_TOP_PAGER"         => "N",
		"DISPLAY_BOTTOM_PAGER"      => "N",
		"SET_STATUS_404"            => "N",
		"SHOW_404"                  => "N",
		"MESSAGE_404"               => ""
	]
);

$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"indexSection",
	[
		"IBLOCK_TYPE"        => "catalog",
		"IBLOCK_ID"          => 1,
		"COUNT_ELEMENTS"     => "N",
		"TOP_DEPTH"          => 1,
		"FILTER_NAME"        => "sectionsFilter",
		"SHOW_PARENT_NAME"   => "Y",
		"SECTION_URL"        => "",
		"CACHE_TYPE"         => "A",
		"CACHE_TIME"         => "36000000",
		"CACHE_GROUPS"       => "Y",
		"CACHE_FILTER"       => "N",
		"ADD_SECTIONS_CHAIN" => "N"
	]
);

$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"indexServices",
	[
		"IBLOCK_TYPE"           => "services",
		"IBLOCK_ID"             => "3",
		"COUNT_ELEMENTS"        => "N",
		"TOP_DEPTH"             => "1",
		"FILTER_NAME"           => "sectionsFilter",
		"SHOW_PARENT_NAME"      => "Y",
		"SECTION_URL"           => "",
		"SECTION_USER_FIELDS"   => ["UF_ICON"],
		"CACHE_TYPE"            => "A",
		"CACHE_TIME"            => "36000000",
		"CACHE_GROUPS"          => "Y",
		"CACHE_FILTER"          => "N",
		"ADD_SECTIONS_CHAIN"    => "N",
	],
	false
);

$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"indexAbout",
	[
		"IBLOCK_TYPE"  => "content",
		"IBLOCKS"      => [4],
		"NEWS_COUNT"   => 6,
		"FIELD_CODE"   => ["CODE", "NAME"],
		"SORT_BY1"     => "SORT",
		"SORT_ORDER1"  => "ASC",
		"SORT_BY2"     => "ID",
		"SORT_ORDER2"  => "ASC",
		"CACHE_TYPE"   => "A",
		"CACHE_TIME"   => "300",
		"CACHE_GROUPS" => "Y"
	]
);

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"indexWorks",
	[
		"IBLOCK_TYPE"               => "ourworks",
		"IBLOCK_ID"                 => 7,
		"NEWS_COUNT"                => 20,
		"SORT_BY1"                  => "SORT",
		"SORT_ORDER1"               => "ASC",
		"SORT_BY2"                  => "ID",
		"SORT_ORDER2"               => "ASC",
		"FILTER_NAME"               => "",
		"FIELD_CODE"                => ["ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT", "DETAIL_PICTURE"],
		"PROPERTY_CODE"             => ["CHARACT"],
		"CACHE_TYPE"                => "A",
		"CACHE_TIME"                => "36000000",
		"CACHE_FILTER"              => "N",
		"CACHE_GROUPS"              => "Y",
		"PREVIEW_TRUNCATE_LEN"      => "",
		"ACTIVE_DATE_FORMAT"        => "d.m.Y",
		"SET_TITLE"                 => "N",
		"SET_BROWSER_TITLE"         => "N",
		"SET_META_KEYWORDS"         => "N",
		"SET_META_DESCRIPTION"      => "N",
		"SET_LAST_MODIFIED"         => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN"        => "N",
		"DISPLAY_TOP_PAGER"         => "N",
		"DISPLAY_BOTTOM_PAGER"      => "N",
		"SET_STATUS_404"            => "N",
		"SHOW_404"                  => "N",
		"MESSAGE_404"               => ""
	]
);
?>

	<section class="reviews">
		<div class="container reviews__wrapper">
			<div class="reviews__header h1">Отзывы</div>
			<div class="reviews__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="reviews__slider_item swiper-slide">
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">Александр Иванов</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда
								строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными
								частями скатов. Стропильную конструкцию собирали те же плотники, что и делали сруб.
								Проектировщик, который выезжал на замер кровли, сразу на месте подсказал мне, какие ...
							</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
					<div class="reviews__slider_item swiper-slide">
						<a href="<?= SITE_TEMPLATE_PATH ?>/assets/images/reviews-thumb.png" data-fancybox class="reviews__slider_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/reviews-thumb.png" alt=""></a>
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">ООО “Кровля”</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда
								строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными
								частями скатов. Стропильную ...
							</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
					<div class="reviews__slider_item swiper-slide">
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">Александр Иванов</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда
								строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными
								частями скатов. Стропильную конструкцию собирали те же плотники, что и делали сруб.
								Проектировщик, который выезжал на замер кровли, сразу на месте подсказал мне, какие ...
							</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
				</div>
			</div>
			<div class="reviews__controls">
				<div class="swiper-button-prev button button-control button-control-prev reviews__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next reviews__control">
					Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"indexPartners",
	[
		"IBLOCK_TYPE"  => "content",
		"IBLOCKS"      => [5],
		"NEWS_COUNT"   => 20,
		"FIELD_CODE"   => ["NAME", "PREVIEW_PICTURE"],
		"SORT_BY1"     => "SORT",
		"SORT_ORDER1"  => "ASC",
		"SORT_BY2"     => "ID",
		"SORT_ORDER2"  => "ASC",
		"CACHE_TYPE"   => "A",
		"CACHE_TIME"   => "300",
		"CACHE_GROUPS" => "Y"
	]
);
?>
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
	</section>
<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>