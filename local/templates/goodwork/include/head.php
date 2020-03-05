<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset,
	Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
Asset::getInstance()->addString('<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha256-l85OmPOjvil/SOvVt3HnSSjzF1TUMyT9eV0c2BzEGzU=" crossorigin="anonymous"/>');

$arJsConfig = [
	"swiper"         => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/css/swiper.min.css",
		"css"       => SITE_TEMPLATE_PATH . "/assets/css/swiper.min.css",
		"skip_core" => true,
	],
	"fancybox"       => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/jquery.fancybox.min.js",
		"css"       => SITE_TEMPLATE_PATH . "/assets/css/jquery.fancybox.min.css",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"maskedinput"    => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/jquery.maskedinput.js",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"bodyScrollLock" => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/bodyScrollLock.min.js",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"app"            => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/jquery.maskedinput.js",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"script"            => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/jquery.maskedinput.js",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
];
foreach ($arJsConfig as $ext => $arExt) {
	CJSCore::RegisterExt($ext, $arExt);
}

CJSCore::Init(['ajax', 'popup', 'window', 'svg4everybody', 'script']);
?>
<head>
	<? $APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle(); ?></title>
	
	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/css/style.css">
	<script src="https://api-maps.yandex.ru/2.1/?apikey=116bd1d7-b50e-4091-85e5-729db9e3ed7f&lang=ru_RU" type="text/javascript"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/app.js"></script>
	<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/script.js"></script>
</head>