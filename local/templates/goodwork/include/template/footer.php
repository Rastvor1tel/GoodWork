<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

$footerContactsHtml = <<<footerContacts
	<div class="footer__contacts">
		<div class="footer__contacts_time">{$siteSettings["contacts"]["worktime"]}</div>
		<div class="footer__contacts_address">{$siteSettings["contacts"]["address"]}</div>
		<a href="tel:{$siteSettings["contacts"]["phone"]}" class="footer__contacts_phone">{$siteSettings["contacts"]["phone"]}</a>
		<a href="mailto:{$siteSettings["contacts"]["email"]}" class="footer__contacts_email">{$siteSettings["contacts"]["email"]}</a>
	</div>
footerContacts;

$footerSocialsHtml = <<<footerSocials
	<div class="footer__socials">
		<a href="{$siteSettings["socials"]["whatsapp"]}" target="_blank" class="footer__socials_link icon icon-whatsapp"></a>
		<a href="{$siteSettings["socials"]["facebook"]}" target="_blank" class="footer__socials_link icon icon-facebook"></a>
		<a href="{$siteSettings["socials"]["instagram"]}" target="_blank" class="footer__socials_link icon icon-instagram"></a>
	</div>
footerSocials;
?>

<footer class="footer">
	<div class="footer__info">
		<div class="container footer__info_wrapper">
			<div class="footer__logo">
				<img src="<?= $siteSettings["logoSrc"] ?>" alt="">
			</div>
			<div class="footer__main">
				<?php
				$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom",
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
				<?= $footerSocialsHtml ?>
				<?= $footerContactsHtml ?>
				<button type="button" class="button button-transparent js-callback"><?= Loc::getMessage("CALLBACK_TITLE") ?></button>
			</div>
		</div>
	</div>
	<div class="footer__copyrights">
		<div class="container footer__copyrights_wrapper">
			<div class="footer__copyrights_about">© GOOD WORK. <?= date("Y") ?></div>
			<a href="<?=$siteSettings["policyLink"]?>" class="footer__copyrights_policy"><?= Loc::getMessage("POLICY_TITLE") ?></a>
		</div>
	</div>
</footer>
