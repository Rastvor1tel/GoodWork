<?php

\Bitrix\Main\Loader::includeModule("htc.twigintegrationmodule");

function getMultipleProps($charact) {
	$result = [];
	foreach ($charact["VALUE"] as $key => $charItem) {
		switch ($charact["PROPERTY_TYPE"]) {
			case "S":
				$result[] = [
					"NAME" => $charItem,
					"VALUE" => $charact["DESCRIPTION"][$key]
				];
				break;
			case "F":
				$fileSrc = CFile::ResizeImageGet($charItem, ['width'=> 180, 'height'=> 75], BX_RESIZE_IMAGE_EXACT)['src'];
				$result[] = [
					"NAME" => $charact["DESCRIPTION"][$key],
					"VALUE" => $fileSrc
				];
				break;
		}

	}
	return $result;
}