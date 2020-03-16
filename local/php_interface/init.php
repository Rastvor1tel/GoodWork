<?php

\Bitrix\Main\Loader::includeModule("htc.twigintegrationmodule");

function getMultipleProps($charact) {
	$result = [];
	foreach ($charact["VALUE"] as $key => $charItem) {
		$result[] = [
			"NAME" => $charItem,
			"VALUE" => $charact["DESCRIPTION"][$key]
		];
	}
	return $result;
}