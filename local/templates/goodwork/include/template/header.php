<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

$headerContactsHtml = <<<headerContacts
	<div class="header__contacts">
		<div class="header__contacts_time">{$siteSettings["contacts"]["worktime"]}</div>
		<div class="header__contacts_address">{$siteSettings["contacts"]["address"]}</div>
		<a href="tel:{$siteSettings["contacts"]["phone"]}" class="header__contacts_phone">{$siteSettings["contacts"]["phone"]}</a>
		<a href="mailto:{$siteSettings["contacts"]["email"]}" class="header__contacts_email">{$siteSettings["contacts"]["email"]}</a>
	</div>
headerContacts;

$headerSocialsHtml = <<<headerSocials
	<div class="header__socials">
		<a href="{$siteSettings["socials"]["whatsapp"]}" target="_blank" class="header__socials_link icon icon-whatsapp"></a>
		<a href="{$siteSettings["socials"]["facebook"]}" target="_blank" class="header__socials_link icon icon-facebook"></a>
		<a href="{$siteSettings["socials"]["instagram"]}" target="_blank" class="header__socials_link icon icon-instagram"></a>
	</div>
headerSocials;


if ($APPLICATION->GetCurPage() == '/') {
	$logoHtml = <<<LOGO
		<span class="header__logo">
			<img src="{$siteSettings["logoSrc"]}" alt="">
		</span>
	LOGO;
} else {
	$logoHtml = <<<LOGO
		<a href="/" class="header__logo">
			<img src="{$siteSettings["logoSrc"]}" alt="">
		</a>
	LOGO;
}
?>

<header class="header">
	<div class="container header__wrapper">
		<?= $logoHtml ?>
		<div class="header__main">
			<div class="header__top">
				<form class="header__search">
					<input type="search" class="header__search_input input input-search" placeholder="Поиск...">
					<button type="submit" class="header__search_button icon icon-search js-search"></button>
				</form>
				<?= $headerContactsHtml ?>
				<?= $headerSocialsHtml ?>
				<button type="button" class="button button-transparent header__callback js-callback"><?=Loc::getMessage("CALLBACK_TITLE")?></button>
			</div>
			<?php
			$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"top",
				[
					"ROOT_MENU_TYPE"        => "main",
					"MENU_CACHE_TYPE"       => "A",
					"MENU_CACHE_TIME"       => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS"   => [
					],
					"MAX_LEVEL"             => "1",
					"USE_EXT"               => "N",
					"DELAY"                 => "N",
					"ALLOW_MULTI_SELECT"    => "N"
				],
				false
			);
			?>
		</div>
	</div>
</header>
