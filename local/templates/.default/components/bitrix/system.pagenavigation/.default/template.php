<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

if ($arResult["NavPageCount"] > 1) {
	?>
	<div class="pagination">
		<?
		if ($arResult["NavPageNomer"] != $arResult["nStartPage"]) {
			$prevNavPage = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"]-1);
			echo <<<ITEM
				<a href="{$prevNavPage}" class="pagination__item pagination__item_prev button button-readmore"><span class="icon icon-arrow"></span></a>
			ITEM;
		}

		do {
			if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) {
				echo <<<ITEM
					<a class="pagination__item pagination__item_number pagination__item_active"><span>{$arResult["nStartPage"]}</span></a>
				ITEM;
			} elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false) {
				echo <<<ITEM
					<a href="{$arResult["sUrlPath"]}{$strNavQueryStringFull}" class="pagination__item pagination__item_number"><span>{$arResult["nStartPage"]}</span></a>
				ITEM;
			} else {
				echo <<<ITEM
					<a href="{$arResult["sUrlPath"]}?{$strNavQueryString}PAGEN_{$arResult["NavNum"]}={$arResult["nStartPage"]}" class="pagination__item pagination__item_number"><span>{$arResult["nStartPage"]}</span></a>
				ITEM;
			}
			$arResult["nStartPage"]++;
			$bFirst = false;
		} while ($arResult["nStartPage"] <= $arResult["nEndPage"]);

		if (($arResult["NavPageNomer"] < $arResult["NavPageCount"]) && ($arResult["nEndPage"] < $arResult["NavPageCount"])) {
			if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)) {
				echo <<<ITEM
					<a class="pagination__item pagination__item_number pagination__item_active"><span>...</span></a>
				ITEM;
			}
			echo <<<ITEM
				<a href="{$arResult["sUrlPath"]}?{$strNavQueryString}PAGEN_{$arResult["NavNum"]}={$arResult["NavPageCount"]}" class="pagination__item pagination__item_number"><span>{$arResult["NavPageCount"]}</span></a>
			ITEM;
		}
		if ($arResult["NavPageNomer"] != $arResult["nEndPage"]) {
			$nextNavPage = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"]+1);
			echo <<<ITEM
				<a href="{$nextNavPage}" class="pagination__item pagination__item_next button button-readmore"><span class="icon icon-arrow"></span></a>
			ITEM;
		}
		?>
	</div>
	<?php
}
?>
