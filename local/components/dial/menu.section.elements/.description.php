<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = [
	"NAME"        => GetMessage("MILLCOM_MENU_NAME"),
	"DESCRIPTION" => GetMessage("MILLCOM_MENU_DESC"),
	"ICON"        => "",
	"PATH"        => [
		"ID"    => "utility",
		"CHILD" => [
			"ID"   => "navigation",
			"NAME" => GetMessage("MAIN_NAVIGATION_SERVICE"),
		]
	]
];
?>