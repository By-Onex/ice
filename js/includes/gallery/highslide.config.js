/**
*	Site-specific configuration settings for Highslide JS
*/

hs.graphicsDir = 'Ice/js/includes/gallery/graphics/';
hs.showCredits = false;
hs.outlineType = false;
hs.dimmingOpacity = 0.75;
hs.fadeInOut = true;
hs.align = 'center';
hs.marginBottom = 70;
hs.marginLeft = 100;
// Add the slideshow controller
hs.addSlideshow({
	slideshowGroup: ['1','2','3','4','5','6','7','8','9','10'],
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: false,
	overlayOptions: {
		className: 'text-controls',
		opacity: '1',
		position: 'top center',
		offsetX: '0',
		offsetY: '10',
		hideOnMouseOut: true
	},
	thumbstrip: {
		mode: 'horizontal',
		position: 'below',
		relativeTo: 'image'
	}
});
// Russian language strings
hs.lang = {
	cssDirection: 'ltr',
	loadingText: 'Загружается...',
	loadingTitle: 'Нажмите для отмены',
	focusTitle: 'Нажмите чтобы поместить на передний план',
	fullExpandTitle: 'Развернуть до оригинального размера',
	creditsText: 'Использует <i>Highslide JS</i>',
	creditsTitle: 'Перейти на домашнюю страницу Highslide JS',
	previousText: 'Предыдущее',
	nextText: 'Следующее',
	moveText: 'Переместить',
	closeText: 'Закрыть',
	closeTitle: 'Закрыть (esc)',
	resizeTitle: 'Изменить размер',
	playText: 'Слайдшоу',
	playTitle: 'Начать слайдшоу (пробел)',
	pauseText: 'Пауза',
	pauseTitle: 'Приостановить слайдшоу (пробел)',
	previousTitle: 'Предыдущее (стрелка влево)',
	nextTitle: 'Следующее (стрелка вправо)',
	moveTitle: 'Переместить',
	fullExpandText: 'Оригинальный размер',
	number: 'Изображение %1 из %2',
	restoreTitle: 'Нажмите чтобы закрыть изображение, нажмите и перетащите для изменения местоположения. Для просмотра изображений используйте стрелки.'
};
// gallery config object
var config1 = {
	slideshowGroup: '1',
	transitions: ['expand', 'crossfade']
};
var config2 = {
	slideshowGroup: '2',
	transitions: ['expand', 'crossfade']
};
var config3 = {
	slideshowGroup: '3',
	transitions: ['expand', 'crossfade']
};
var config4 = {
	slideshowGroup: '4',
	transitions: ['expand', 'crossfade']
};
var config5 = {
	slideshowGroup: '5',
	transitions: ['expand', 'crossfade']
};
var config6 = {
	slideshowGroup: '6',
	transitions: ['expand', 'crossfade']
};
var config7 = {
	slideshowGroup: '7',
	transitions: ['expand', 'crossfade']
};
var config8 = {
	slideshowGroup: '8',
	transitions: ['expand', 'crossfade']
};
var config9 = {
	slideshowGroup: '9',
	transitions: ['expand', 'crossfade']
};
var config10 = {
	slideshowGroup: '10',
	transitions: ['expand', 'crossfade']
};