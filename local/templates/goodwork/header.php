<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/head.php");
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/siteSettings.php");

echo "<body>";

require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/header.php");

echo "<main>";

if ($APPLICATION->GetCurPage() != '/') {
	echo '<div class="container">';
	$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", []);
	echo '<h1 class="h1 page__header">';
	$APPLICATION->ShowTitle(false);
	echo '</h1>';
}
?>