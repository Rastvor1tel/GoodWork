<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>
<?	 $APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"innerReviews",
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
);?>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>