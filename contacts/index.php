<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
	<p><b>Адрес №1:</b> г. Москва, ул. Грайвороновская, д. 4, строение 6</p>
	<p><b>Адрес №2:</b> Московская обл., г. Воскресенск, ул. Советская, д. 4, офис 307</p>
	<p><b>Тел.:</b> <a href="tel:+74952412049">+7(495) 241-20-49</a>; <a href="tel:+79629745933">+7(962) 974-59-33</a></p>
	<p><b>Email:</b> <a href="emailto:gwbuilder@mail.ru">gwbuilder@mail.ru</a></p>
	<br>
<?php
echo '</div>';
require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/template/feedbackMap.php");
echo '<div class="container">';
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>