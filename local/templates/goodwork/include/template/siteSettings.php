<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Config\Option;

global $siteSettings;
$siteSettings = [
	"logoSrc"  => SITE_TEMPLATE_PATH . Option::get("grain.customsettings","logo"),
	"policyLink"  => Option::get("grain.customsettings","policy"),
	"contacts" => [
		"phone" => Option::get("grain.customsettings","phone"),
		"email" => Option::get("grain.customsettings","email"),
		"address" => Option::get("grain.customsettings","address"),
		"worktime" => Option::get("grain.customsettings","worktime"),
	],
	"socials"  => [
		"whatsapp" => Option::get("grain.customsettings","whatsapp"),
		"facebook" => Option::get("grain.customsettings","facebook"),
		"instagram" => Option::get("grain.customsettings","instagram"),
	],
	"about" => [
		"photo" => Option::get("grain.customsettings","photo"),
		"position" => Option::get("grain.customsettings","position"),
		"name" => Option::get("grain.customsettings","name"),
	]

];

$APPLICATION->ShowPanel();