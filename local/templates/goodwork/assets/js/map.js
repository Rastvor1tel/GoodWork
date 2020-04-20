if ($("#map").length > 0) {
	ymaps.ready(init);
}

function init() {
	var contactMap = BX.message('contactMap'),
		icon = [],
		center = [];

	icon['href'] = '/local/templates/goodwork/assets/images/pin.svg';
	icon['size'] = [37, 37];
	icon['offset'] = [0, 0];

	if ($(window).width() <= 768) {
		center = [
			contactMap[0].COORDS[0],
			contactMap[0].COORDS[1]
		];
	} else {
		center = [
			contactMap[0].COORDS[0] - 0.2,
			contactMap[0].COORDS[1] - 0.5
		];
	}
	var indexMap = new ymaps.Map("map", {
		center: center,
		zoom: 9,
		controls: []
	});
	indexMap.behaviors.disable('scrollZoom');
	indexMap.geoObjects.options.set({
		preset: 'islands#Icon',
		iconColor: '#42c1c7'
	});
	for (var index in contactMap) {
		var contactItem = contactMap[index];
		indexMap.geoObjects.add(
			new ymaps.Placemark(
				[
					contactItem.COORDS[0],
					contactItem.COORDS[1]
				],
				{
					balloonContent: contactItem.ADDRESS
				},
				{
					iconLayout: 'default#image',
					iconImageHref: icon['href'],
					iconImageSize: icon['size'],
					iconImageOffset: icon['offset']
				}
			)
		);
	}
}