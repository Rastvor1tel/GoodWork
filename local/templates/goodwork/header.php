<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/head.php");
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/siteSettings.php");

echo "<body>";

require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/header.php");

echo "<main>";

preg_match('/\/our_works\/(.+)/', $APPLICATION->GetCurPage(), $matches, PREG_OFFSET_CAPTURE);

if ($APPLICATION->GetCurPage() != '/') {
	echo '<div class="container">';
	if ($matches) echo '<div class="works-detail"><div class="works-detail__top"><div class="works-detail__info">';
	$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", []);
	echo '<h1 class="h1 page__header">';
	$APPLICATION->ShowTitle(false);
	echo '</h1>';
}
?>