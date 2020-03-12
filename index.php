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
	"bitrix:news.list",
	"indexServices",
	[
		"IBLOCK_TYPE"               => "services",
		"IBLOCK_ID"                 => 3,
		"NEWS_COUNT"                => 4,
		"SORT_BY1"                  => "SORT",
		"SORT_ORDER1"               => "ASC",
		"SORT_BY2"                  => "ID",
		"SORT_ORDER2"               => "ASC",
		"FILTER_NAME"               => "",
		"FIELD_CODE"                => ["NAME", "PREVIEW_PICTURE"],
		"PROPERTY_CODE"             => ["ICON_CLASS"],
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
	"bitrix:news.line",
	"indexAbout",
	[
		"IBLOCK_TYPE"        => "content",
		"IBLOCKS"            => [4],
		"NEWS_COUNT"         => 6,
		"FIELD_CODE"         => ["CODE", "NAME"],
		"SORT_BY1"           => "SORT",
		"SORT_ORDER1"        => "ASC",
		"SORT_BY2"           => "ID",
		"SORT_ORDER2"        => "ASC",
		"CACHE_TYPE"         => "A",
		"CACHE_TIME"         => "300",
		"CACHE_GROUPS"       => "Y"
	]
);
?>
	
	<section class="works">
		<div class="container works__wrapper">
			<div class="h1 works__header">наши работы</div>
			<div class="works__text">В GOODWORK знают о кровельных и фасадных материалах всё</div>
			<div class="works__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide works__slider_item">
						<div class="works__slider_image">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/works-index.png" alt="">
						</div>
						<div class="works__slider_info">
							<div class="works__slider_name h2">Кровля из керамической черепицы Jacobi</div>
							<div class="works__slider_params">
								<div class="works__slider_param">
									<div class="works__slider_param-name">Площадь:</div>
									<div class="works__slider_param-value">400 м²</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Материал:</div>
									<div class="works__slider_param-value">Jacobi J11</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Цвет:</div>
									<div class="works__slider_param-value">темно-коричневый</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Срок выполнения:</div>
									<div class="works__slider_param-value">3,5 месяца</div>
								</div>
							</div>
							<div class="works__slider_text">
								При изготовлении черепиц Jacobi используются только материалы высочайшего качества, что позволяет получить более качественную и прочную продукцию. Весь предоставляемый ассортимент обладает такими свойствами как долговечность (до 150 лет), шумопоглощение и морозостойкость - те качества, которые отлично подходят российскому климату.
							</div>
							<a href="#" class="works__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
						</div>
					</div>
					<div class="swiper-slide works__slider_item">
						<div class="works__slider_image">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/works-index.png" alt="">
						</div>
						<div class="works__slider_info">
							<div class="works__slider_name h2">Кровля из керамической черепицы Jacobi</div>
							<div class="works__slider_params">
								<div class="works__slider_param">
									<div class="works__slider_param-name">Площадь:</div>
									<div class="works__slider_param-value">400 м²</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Материал:</div>
									<div class="works__slider_param-value">Jacobi J11</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Цвет:</div>
									<div class="works__slider_param-value">темно-коричневый</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Срок выполнения:</div>
									<div class="works__slider_param-value">3,5 месяца</div>
								</div>
							</div>
							<div class="works__slider_text">
								При изготовлении черепиц Jacobi используются только материалы высочайшего качества, что позволяет получить более качественную и прочную продукцию. Весь предоставляемый ассортимент обладает такими свойствами как долговечность (до 150 лет), шумопоглощение и морозостойкость - те качества, которые отлично подходят российскому климату.
							</div>
							<a href="#" class="works__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="works__controls">
				<div class="swiper-button-prev button button-control button-control-prev works__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next works__control">Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
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
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными частями скатов. Стропильную конструкцию собирали те же плотники, что и делали сруб. Проектировщик, который выезжал на замер кровли, сразу на месте подсказал мне, какие ...</div>
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
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными частями скатов. Стропильную ...</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
					<div class="reviews__slider_item swiper-slide">
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">Александр Иванов</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными частями скатов. Стропильную конструкцию собирали те же плотники, что и делали сруб. Проектировщик, который выезжал на замер кровли, сразу на месте подсказал мне, какие ...</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
				</div>
			</div>
			<div class="reviews__controls">
				<div class="swiper-button-prev button button-control button-control-prev reviews__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next reviews__control">Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="container partners__wrapper">
			<div class="h1 partners__header">сотрудничаем с крупными компаниями</div>
			<div class="partners__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo1.png" alt="BMI Braas">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo2.png" alt="Grand Line">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo3.png" alt="Металл Профиль">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo4.png" alt="Rockwool">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo5.png" alt="Dorken">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo6.png" alt="Tegola Moldova">
					</div>
				</div>
			</div>
			<div class="partners__controls">
				<div class="swiper-button-prev button button-control button-control-prev partners__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next partners__control">Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
	<section class="feedback">
		<div id="map" class="feedback__map"></div>
		<div class="container feedback__container">
			<div class="feedback__wrapper">
				<?
				$APPLICATION->IncludeComponent(
					"bitrix:form.result.new",
					"question",
					[
						"WEB_FORM_ID" => 2,
						"AJAX_MODE" => "Y",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_SHADOW" => "N",
						"AJAX_OPTION_STYLE" => "N",
						"CACHE_TIME" => "3600",
						"CACHE_TYPE" => "A",
						"CHAIN_ITEM_LINK" => "",
						"CHAIN_ITEM_TEXT" => "",
						"EDIT_URL" => "",
						"IGNORE_CUSTOM_TEMPLATE" => "N",
						"LIST_URL" => "",
						"SEF_MODE" => "N",
						"SUCCESS_URL" => "",
						"USE_EXTENDED_ERRORS" => "N",
						"VARIABLE_ALIASES" => [
							"WEB_FORM_ID" => "WEB_FORM_ID",
							"RESULT_ID" => "RESULT_ID"
						],
					],
					false
				);
				?>
			</div>
		</div>
	</section>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>