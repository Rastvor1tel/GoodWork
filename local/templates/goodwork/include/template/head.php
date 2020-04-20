<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset,
	Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$rsSites = CSite::GetByID(SITE_ID);
$siteName = $rsSites->Fetch()['SITE_NAME'];

Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
Asset::getInstance()->addString('<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">');
Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha256-l85OmPOjvil/SOvVt3HnSSjzF1TUMyT9eV0c2BzEGzU=" crossorigin="anonymous" />');

$arJsConfig = [
	"TweenMax"      => [
		"js"        => "//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js",
		"skip_core" => true,
	],
	"addIndicators"      => [
		"js"        => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js",
		"skip_core" => true,
	],
	"animation"      => [
		"js"        => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js",
		"rel"       => ["TweenMax"],
		"skip_core" => true,
	],
	"SmoothScroll"      => [
		"js"        => "//cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js",
		"skip_core" => true,
	],
	"ScrollMagic"      => [
		"js"        => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js",
		"skip_core" => true,
	],
	"jqueryui"      => [
		"js"        => "//code.jquery.com/ui/1.12.1/jquery-ui.min.js",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"yandexmap"      => [
		"js"        => "//api-maps.yandex.ru/2.1/?apikey=116bd1d7-b50e-4091-85e5-729db9e3ed7f&lang=ru_RU",
		"skip_core" => true,
	],
	"map"      => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/map.js",
		"rel"       => ["yandexmap"],
		"skip_core" => true,
	],
	"swiper"         => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/swiper.min.js",
		"css"       => SITE_TEMPLATE_PATH . "/assets/css/swiper.min.css",
		"skip_core" => true,
	],
	"fancybox"       => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/jquery.fancybox.min.js",
		"css"       => SITE_TEMPLATE_PATH . "/assets/css/jquery.fancybox.min.css",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"inputmask"    => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/inputmask.min.js",
		"rel"       => ["jquery3"],
		"skip_core" => true,
	],
	"bodyScrollLock" => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/bodyScrollLock.min.js",
		"skip_core" => true,
	],
	"app"            => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/app.js",
		"css"       => SITE_TEMPLATE_PATH . "/assets/css/style.css",
		"rel"       => ["jquery3", "inputmask", "bodyScrollLock", "swiper", "jqueryui", "fancybox", "ScrollMagic",  "animation", "SmoothScroll", "addIndicators"],
		"skip_core" => true,
	],
	"script"         => [
		"js"        => SITE_TEMPLATE_PATH . "/assets/js/script.js",
		"css"       => SITE_TEMPLATE_PATH . "/assets/css/custom.css",
		"rel"       => ["jquery3", "app"],
		"skip_core" => false,
	],
];
foreach ($arJsConfig as $ext => $arExt) {
	CJSCore::RegisterExt($ext, $arExt);
}

CJSCore::Init(["script"]);
?>
<head>
	<title><? $APPLICATION->ShowTitle(); ?> | <?=$siteName?></title>
	<? $APPLICATION->ShowHead(); ?>
</head>