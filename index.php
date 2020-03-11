<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"mainSlider",
	[
		"IBLOCK_TYPE"        => "content",
		"IBLOCKS"            => [2],
		"NEWS_COUNT"         => 20,
		"FIELD_CODE"         => ["ID", "CODE", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT", "PREVIEW_PICTURE"],
		"SORT_BY1"           => "SORT",
		"SORT_ORDER1"        => "ASC",
		"SORT_BY2"           => "ID",
		"SORT_ORDER2"        => "ASC",
		"DETAIL_URL"         => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_TYPE"         => "A",
		"CACHE_TIME"         => "300",
		"CACHE_GROUPS"       => "Y"
	]
);

$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"indexSection",
	[
		"IBLOCK_TYPE"        => "catalog",
		"IBLOCK_ID"          => 1,
		"COUNT_ELEMENTS"     => "N",
		"TOP_DEPTH"          => 1,
		"FILTER_NAME"        => "sectionsFilter",
		"SHOW_PARENT_NAME"   => "Y",
		"SECTION_URL"        => "",
		"CACHE_TYPE"         => "A",
		"CACHE_TIME"         => "36000000",
		"CACHE_GROUPS"       => "Y",
		"CACHE_FILTER"       => "N",
		"ADD_SECTIONS_CHAIN" => "N"
	]
);

$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"indexServices",
	[
		"COMPONENT_TEMPLATE"              => "indexServices",
		"IBLOCK_TYPE"                     => "services",
		"IBLOCK_ID"                       => 3,
		"NEWS_COUNT"                      => 4,
		"SORT_BY1"                        => "SORT",
		"SORT_ORDER1"                     => "ASC",
		"SORT_BY2"                        => "ID",
		"SORT_ORDER2"                     => "ASC",
		"FILTER_NAME"                     => "",
		"FIELD_CODE"                      => [
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		],
		"PROPERTY_CODE"                   => [
			0 => "ICON_CLASS",
			1 => "",
		],
		"CACHE_TYPE"                      => "A",
		"CACHE_TIME"                      => "36000000",
		"CACHE_FILTER"                    => "N",
		"CACHE_GROUPS"                    => "Y",
		"PREVIEW_TRUNCATE_LEN"            => "",
		"ACTIVE_DATE_FORMAT"              => "d.m.Y",
		"SET_TITLE"                       => "N",
		"SET_BROWSER_TITLE"               => "N",
		"SET_META_KEYWORDS"               => "N",
		"SET_META_DESCRIPTION"            => "N",
		"SET_LAST_MODIFIED"               => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
		"ADD_SECTIONS_CHAIN"              => "N",
		"DISPLAY_TOP_PAGER"               => "N",
		"DISPLAY_BOTTOM_PAGER"            => "N",
		"SET_STATUS_404"                  => "N",
		"SHOW_404"                        => "N",
		"MESSAGE_404"                     => ""
	]
);
?>


	<section class="services">
		<div class="container">
			<div class="h1 services__header">услуги good work</div>
			<div class="services__text">Мы команда профессионалов, эксперт в области строительства, проектирования и реконструкции кровли</div>
			<div class="services__wrapper">
				<div class="services__item">
					<img class="services__item_image" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/service-index1.png" alt="">
					<a href="#" class="services__item_info">
						<span class="services__item_icon icon icon-roof"></span>
						<span class="h3 services__item_name">кровельные работы</span>
					</a>
				</div>
				<div class="services__item">
					<img class="services__item_image" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/service-index2.png" alt="">
					<a href="#" class="services__item_info">
						<span class="services__item_icon icon icon-project"></span>
						<span class="h3 services__item_name">проектирование</span>
					</a>
				</div>
				<div class="services__item">
					<img class="services__item_image" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/service-index3.png" alt="">
					<a href="#" class="services__item_info">
						<span class="services__item_icon icon icon-facade"></span>
						<span class="h3 services__item_name">фасадные работы</span>
					</a>
				</div>
				<div class="services__item">
					<img class="services__item_image" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/service-index4.png" alt="">
					<a href="#" class="services__item_info">
						<span class="services__item_icon icon icon-examination"></span>
						<span class="h3 services__item_name">обследование кровли</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container about__wrapper">
			<div class="about__info">
				<div class="h1 about__info_header">О компании</div>
				<div class="about__info_text">
					<p>
						<b>GOODWORK</b> - успешная компания в области проектирования, строительства и реконструкции кровли и фасадов на объектах капитального строительства с использованием самых эффективных строительных технологий.
					</p>
					<p>
						<b>GOODWORK</b> стала первой компанией, которая всерьез поставила задачу познакомить своих Заказчиков, их друзей и знакомых с культурой и качеством строительства. Мы подошли к этому вопросу профессионально.
					</p>
					<p>
						<b>В GOODWORK</b> знают о кровельных и фасадных материалах всё: исходное сырье, технические характеристики, где и на каком оборудовании были произведены; как хранятся и доставляются на объект.
					</p>
					<p>
						<b>GOODWORK</b> считает, что строительство кровли — это самая ХОРОШАЯ РАБОТА, которую нужно развивать. Наши специалисты и технологи объездили всю Россию и Европу в поисках лучших технических решений и технологий.
					</p>
				</div>
			</div>
			<div class="about__image">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/goodwork-bg.png" alt="">
			</div>
			<div class="about__advantages">
				<div class="about__advantages_item">
					<span class="about__advantages_icon icon icon-experience"></span>
					<span class="h4 about__advantages_name">Опыт работы более 8 лет</span>
				</div>
				<div class="about__advantages_item">
					<span class="about__advantages_icon icon icon-teaching"></span>
					<span class="h4 about__advantages_name">Обучение и тестирование сотрудников до начала работы</span>
				</div>
				<div class="about__advantages_item">
					<span class="about__advantages_icon icon icon-warranty"></span>
					<span class="h4 about__advantages_name">Гарантия 3-5 лет</span>
				</div>
				<div class="about__advantages_item">
					<span class="about__advantages_icon icon icon-plan"></span>
					<span class="h4 about__advantages_name">Собственный проектный отдел</span>
				</div>
				<div class="about__advantages_item">
					<span class="about__advantages_icon icon icon-houses"></span>
					<span class="h4 about__advantages_name">Более 300 реализованных проектов</span>
				</div>
				<div class="about__advantages_item">
					<span class="about__advantages_icon icon icon-checklists"></span>
					<span class="h4 about__advantages_name">Проверка всех операций по чек-листам качества</span>
				</div>
			</div>
		</div>
	</section>
	<section class="works">
		<div class="container works__wrapper">
			<div class="h1 works__header">наши работы</div>
			<div class="works__text">В GOODWORK знают о кровельных и фасадных материалах всё</div>
			<div class="works__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide works__slider_item">
						<div class="works__slider_image">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/works-index.png" alt="">
						</div>
						<div class="works__slider_info">
							<div class="works__slider_name h2">Кровля из керамической черепицы Jacobi</div>
							<div class="works__slider_params">
								<div class="works__slider_param">
									<div class="works__slider_param-name">Площадь:</div>
									<div class="works__slider_param-value">400 м²</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Материал:</div>
									<div class="works__slider_param-value">Jacobi J11</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Цвет:</div>
									<div class="works__slider_param-value">темно-коричневый</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Срок выполнения:</div>
									<div class="works__slider_param-value">3,5 месяца</div>
								</div>
							</div>
							<div class="works__slider_text">
								При изготовлении черепиц Jacobi используются только материалы высочайшего качества, что позволяет получить более качественную и прочную продукцию. Весь предоставляемый ассортимент обладает такими свойствами как долговечность (до 150 лет), шумопоглощение и морозостойкость - те качества, которые отлично подходят российскому климату.
							</div>
							<a href="#" class="works__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
						</div>
					</div>
					<div class="swiper-slide works__slider_item">
						<div class="works__slider_image">
							<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/works-index.png" alt="">
						</div>
						<div class="works__slider_info">
							<div class="works__slider_name h2">Кровля из керамической черепицы Jacobi</div>
							<div class="works__slider_params">
								<div class="works__slider_param">
									<div class="works__slider_param-name">Площадь:</div>
									<div class="works__slider_param-value">400 м²</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Материал:</div>
									<div class="works__slider_param-value">Jacobi J11</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Цвет:</div>
									<div class="works__slider_param-value">темно-коричневый</div>
								</div>
								<div class="works__slider_param">
									<div class="works__slider_param-name">Срок выполнения:</div>
									<div class="works__slider_param-value">3,5 месяца</div>
								</div>
							</div>
							<div class="works__slider_text">
								При изготовлении черепиц Jacobi используются только материалы высочайшего качества, что позволяет получить более качественную и прочную продукцию. Весь предоставляемый ассортимент обладает такими свойствами как долговечность (до 150 лет), шумопоглощение и морозостойкость - те качества, которые отлично подходят российскому климату.
							</div>
							<a href="#" class="works__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="works__controls">
				<div class="swiper-button-prev button button-control button-control-prev works__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next works__control">Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
	<section class="reviews">
		<div class="container reviews__wrapper">
			<div class="reviews__header h1">Отзывы</div>
			<div class="reviews__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="reviews__slider_item swiper-slide">
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">Александр Иванов</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными частями скатов. Стропильную конструкцию собирали те же плотники, что и делали сруб. Проектировщик, который выезжал на замер кровли, сразу на месте подсказал мне, какие ...</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
					<div class="reviews__slider_item swiper-slide">
						<a href="<?= SITE_TEMPLATE_PATH ?>/assets/images/reviews-thumb.png" data-fancybox class="reviews__slider_image"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/reviews-thumb.png" alt=""></a>
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">ООО “Кровля”</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными частями скатов. Стропильную ...</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
					<div class="reviews__slider_item swiper-slide">
						<div class="reviews__slider_info">
							<div class="reviews__slider_header">
								<div class="reviews__slider_name h4">Александр Иванов</div>
								<div class="reviews__slider_date">20.09.2019</div>
							</div>
							<div class="reviews__slider_text">Строительство дома ответственная задача, особенно когда строишь сруб. Кровля имеет сложную форму и ряд особенностей, связанных со скошенными частями скатов. Стропильную конструкцию собирали те же плотники, что и делали сруб. Проектировщик, который выезжал на замер кровли, сразу на месте подсказал мне, какие ...</div>
						</div>
						<a href="#" class="reviews__slider_link button button-readmore">подробнее<span class="icon icon-arrow"></span></a>
					</div>
				</div>
			</div>
			<div class="reviews__controls">
				<div class="swiper-button-prev button button-control button-control-prev reviews__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next reviews__control">Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="container partners__wrapper">
			<div class="h1 partners__header">сотрудничаем с крупными компаниями</div>
			<div class="partners__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo1.png" alt="BMI Braas">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo2.png" alt="Grand Line">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo3.png" alt="Металл Профиль">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo4.png" alt="Rockwool">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo5.png" alt="Dorken">
					</div>
					<div class="swiper-slide partners__slider_item">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo6.png" alt="Tegola Moldova">
					</div>
				</div>
			</div>
			<div class="partners__controls">
				<div class="swiper-button-prev button button-control button-control-prev partners__control">
					<span class="icon icon-arrow"></span>Назад
				</div>
				<div class="swiper-button-next button button-control button-control-next partners__control">Вперед<span class=" icon icon-arrow"></span>
				</div>
			</div>
		</div>
	</section>
	<section class="feedback">
		<div id="map" class="feedback__map"></div>
		<div class="container feedback__wrapper">
			<form action="" class="feedback__form">
				<div class="feedback__form_header h1">Остались вопросы?</div>
				<div class="feedback__form_text">
					Заполните форму и наш менеджер Вам перезвонит в течение 15 минут
				</div>
				<div class="feedback__form_fields">
					<input name="name" type="text" class="input input-text feedback__form_input" placeholder="Имя">
					<input name="phone" type="text" class="input input-text feedback__form_input js-phone-mask" placeholder="Телефон*" required>
				</div>
				<div class="feedback__form_policy">
					Нажимая кнопку “Отправить”, Вы соглашаетесь на обработку персональных данных, указанных в
					<a href="#">политике конфиденциальности</a>
				</div>
				<button type="submit" class="button button-black feedback__form_button">Узнать подробнее</button>
			</form>
		</div>
	</section>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>