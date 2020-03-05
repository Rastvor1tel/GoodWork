<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<? include_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/head.php"); ?>
<body>
<header class="header">
	<div class="container header__wrapper">
		<a href="/" class="header__logo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.svg" alt="">
		</a>
		<div class="header__main">
			<div class="header__top">
				<form class="header__search">
					<input type="search" class="header__search_input input input-search" placeholder="Поиск...">
					<button type="submit" class="header__search_button icon icon-search js-search"></button>
				</form>
				<div class="header__contacts">
					<div class="header__contacts_time">Пн - Вс: 9:00 - 17:00</div>
					<div class="header__contacts_address">г. Москва, Рязанский пр-т 24, к. 1</div>
					<a href="tel:+79629745933" class="header__contacts_phone">+7 962 974-59-33</a>
					<a href="mailto:89629745933@yandex.ru" class="header__contacts_email">89629745933@yandex.ru</a>
				</div>
				<div class="header__socials">
					<a href="#" class="header__socials_link icon icon-whatsapp"></a>
					<a href="#" class="header__socials_link icon icon-facebook"></a>
					<a href="#" class="header__socials_link icon icon-instagram"></a>
				</div>
				<button type="button" class="button button-transparent header__callback">Заказать звонок</button>
			</div>
			<button class="header__burger js-burger"><span></span></button>
			<div class="header__nav">
				<nav class="header__nav_wrap">
					<a href="#" class="header__nav_link">О компании</a>
					<a href="#" class="header__nav_link">каталог</a>
					<a href="#" class="header__nav_link">услуги</a>
					<a href="#" class="header__nav_link">наши работы</a>
					<a href="#" class="header__nav_link">контакты</a>
				</nav>
			</div>
		</div>
	</div>
</header>
<main>