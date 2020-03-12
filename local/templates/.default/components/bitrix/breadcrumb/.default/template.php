<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$result = "";
$result .= "<div class=\"breadcrumbs\" itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\">";
foreach($arResult as $key => $arItem) {
	$curIndex = $key+1;
	if ($curIndex != count($arResult)) {
		$result .= <<<ITEM
			<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="{$arItem['LINK']}" class="breadcrumbs__item" itemprop="item" class="breadcrumbs__item">
					<span itemprop="name">{$arItem['TITLE']}</span>
				</a>
				<meta itemprop="position" content="{$curIndex}">
			</span>
		ITEM;
	} else {
		$result .= <<<ITEM
			<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				 <span class="breadcrumbs__item _active" itemprop="name">{$arItem['TITLE']}</span>
				<meta itemprop="position" content="{$curIndex}">
			</span>
		ITEM;
	}
}
$result .= "</div>";

return $result;
