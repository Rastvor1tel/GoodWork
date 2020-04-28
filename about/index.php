<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");

echo '<div class="about-page">';
echo '<div class="about-page__top">';

echo <<<ABOUT
	<div class="about-page__director">
		<picture class="about-page__image">
			<img src="{$siteSettings["about"]["photo"]}" alt="">
		</picture>
		<div class="about-page__top-background">Good Work</div>
	</div>
ABOUT;

echo '<div class="about-page__content content">';
echo '<h2 class="about-page__content-title">Дорогие друзья!</h2>';

$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/include/content/aboutTop.php");

$APPLICATION->IncludeComponent(
	"bitrix:catalog.sections.top",
	"serviceAbout",
	[
		"IBLOCK_TYPE"              => "services",
		"IBLOCK_ID"                => "3",
		"SECTION_FIELDS"           => [""],
		"SECTION_USER_FIELDS"      => ["UF_ICON"],
		"SECTION_SORT_FIELD"       => "sort",
		"SECTION_SORT_ORDER"       => "asc",
		"ELEMENT_SORT_FIELD"       => "sort",
		"ELEMENT_SORT_ORDER"       => "asc",
		"ELEMENT_SORT_FIELD2"      => "id",
		"ELEMENT_SORT_ORDER2"      => "asc",
		"FILTER_NAME"              => "arrFilter",
		"SECTION_URL"              => "",
		"DETAIL_URL"               => "",
		"ACTION_VARIABLE"          => "action",
		"SECTION_ID_VARIABLE"      => "SECTION_ID",
		"DISPLAY_COMPARE"          => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"SECTION_COUNT"            => "20",
		"ELEMENT_COUNT"            => "9",
		"LINE_ELEMENT_COUNT"       => "3",
		"PROPERTY_CODE"            => ["YEAR", "ISBN", "PAGES", "CML2_ARTICLE"],
		"CACHE_TYPE"               => "A",
		"CACHE_TIME"               => "36000000",
		"CACHE_GROUPS"             => "Y",
	]
);
echo '</div></div>';
echo '<section class="about-page-text">';
echo '<div class="about-page__content-text">';
?>
<p>Как мы строим. На каждый этап и вид работы у нас есть инструкция, по ним происходит обучение и аттестация бригады и
   прораба. После успешной сдачи теории бригада проходит обучение на нашей базе и отрабатывает выполнение узлов. При
   получении положительных оценок выходит на объект. На объекте инженер тех. надзора принимает работу с обязательной
   фотофиксацией. И как финал сдача объекта Заказчику.</p>
<p>Основные ценности компании – это наш опыт, наша команда и наши клиенты. Мы заботимся о своей репутации и дорожим
   своим именем, ценим и уважаем наших заказчиков и партнеров. Мы прилагаем все усилия, чтобы предоставить нашим
   клиентам сервис наивысшего качества.</p>
<p>Руководство, и сотрудники <b>GoodWork</b> всегда доступны для связи. Так если у клиента возникают вопросы, он в любой
   момент может написать мне на почту <a href="mailto:vorzhev.d@gmail.com">vorzhev.d@gmail.com</a>.</p>
<p>Надеюсь, эта информация была Вам полезна. Если Вы хотите узнать больше о нас и наших услугах, Вы можете обратиться к
   нам по телефону <a href="tel:84952412049">8 (495) 241-20-49</a>.</p>
<?php
echo '</div>';
echo <<<DIRECTOR
	<div class="about-page__director-name">
		<span>С уважением, <br>{$siteSettings["about"]["position"]}</span>
		<p>{$siteSettings["about"]["name"]}.</p>
	</div>
DIRECTOR;
echo '</section>';
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"aboutNews",
	[
		"IBLOCK_TYPE"                     => "content",
		"IBLOCK_ID"                       => "12",
		"NEWS_COUNT"                      => "20",
		"SORT_BY1"                        => "ACTIVE_FROM",
		"SORT_ORDER1"                     => "DESC",
		"SORT_BY2"                        => "SORT",
		"SORT_ORDER2"                     => "ASC",
		"FILTER_NAME"                     => "",
		"FIELD_CODE"                      => [
			0 => "",
			1 => "",
		],
		"PROPERTY_CODE"                   => [
			0 => "",
			1 => "",
		],
		"CHECK_DATES"                     => "Y",
		"DETAIL_URL"                      => "",
		"AJAX_MODE"                       => "N",
		"AJAX_OPTION_JUMP"                => "N",
		"AJAX_OPTION_STYLE"               => "Y",
		"AJAX_OPTION_HISTORY"             => "N",
		"AJAX_OPTION_ADDITIONAL"          => "",
		"CACHE_TYPE"                      => "A",
		"CACHE_TIME"                      => "36000000",
		"CACHE_FILTER"                    => "N",
		"CACHE_GROUPS"                    => "Y",
		"PREVIEW_TRUNCATE_LEN"            => "",
		"ACTIVE_DATE_FORMAT"              => "d.m.Y",
		"SET_TITLE"                       => "N",
		"SET_BROWSER_TITLE"               => "N",
		"SET_META_KEYWORDS"               => "N",
		"SET_META_DESCRIPTION"            => "N",
		"SET_LAST_MODIFIED"               => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
		"ADD_SECTIONS_CHAIN"              => "N",
		"HIDE_LINK_WHEN_NO_DETAIL"        => "N",
		"PARENT_SECTION"                  => "",
		"PARENT_SECTION_CODE"             => "",
		"INCLUDE_SUBSECTIONS"             => "Y",
		"STRICT_SECTION_CHECK"            => "N",
		"COMPOSITE_FRAME_MODE"            => "A",
		"COMPOSITE_FRAME_TYPE"            => "AUTO",
		"PAGER_TEMPLATE"                  => ".default",
		"DISPLAY_TOP_PAGER"               => "N",
		"DISPLAY_BOTTOM_PAGER"            => "Y",
		"PAGER_TITLE"                     => "Новости",
		"PAGER_SHOW_ALWAYS"               => "N",
		"PAGER_DESC_NUMBERING"            => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL"                  => "N",
		"PAGER_BASE_LINK_ENABLE"          => "N",
		"SET_STATUS_404"                  => "N",
		"SHOW_404"                        => "N",
		"MESSAGE_404"                     => "",
		"COMPONENT_TEMPLATE"              => "aboutNews"
	],
	false
);

/*$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"aboutSertificates",
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPONENT_TEMPLATE" => "aboutSertificates"
	),
	false
);

$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"indexReviews",
	[
		"IBLOCK_TYPE"  => "content",
		"IBLOCKS"      => [10],
		"NEWS_COUNT"   => 20,
		"FIELD_CODE"   => ["NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DATE_ACTIVE_FROM"],
		"SORT_BY1"     => "SORT",
		"SORT_ORDER1"  => "ASC",
		"SORT_BY2"     => "ID",
		"SORT_ORDER2"  => "ASC",
		"CACHE_TYPE"   => "A",
		"CACHE_TIME"   => "300",
		"CACHE_GROUPS" => "Y"
	]
);*/
echo "</div>";
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
