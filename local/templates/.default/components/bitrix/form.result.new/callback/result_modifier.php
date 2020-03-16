<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$formAttributes = 'class="popup__form"';
$arResult['FORM_HEADER'] = str_replace('<form', '<form ' . $formAttributes . '', $arResult['FORM_HEADER']);

global $siteSettings;
$arResult["POLICY_LINK"] = $siteSettings["policyLink"];