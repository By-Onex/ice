minWidth = (180 - 8 * 2);//ширина боковых картинок картинки
minHeight = (120 - 8 * 2);//высота боковых картинок картинки
maxWidth = (310 - 8 * 2);//ширина центральной картинки
maxHeight = (210 - 8 * 2);//высота центральной картинки
dur = 100;//продолжительность анимации
var allHeight, allWidth,//ширина и высота блока содержащащего картинки
    first_Top, second_Top,
    third_Top, first_Left,
    second_Left, third_left,
    pre = 0,//отступ крайних картинок от центр
    padding = 0, //паддинг дива содержащего картинку, для
    anitime = '20s';//задержка перед показом следующего слайда
$.fn.nextItem = function () {
    var slider = $(this),
        first = slider.find('div:eq(0)'),
        second = slider.find('div:eq(1)'),
        last = slider.find('div:eq(2)');
    first.animate({
        width: minWidth,
        height: minHeight,
        top: third_Top,
        left: first_Left,
        opacity: 0.5
    }, dur, function () {
        last.animate({
            width: maxWidth,
            height: maxHeight,
            top: second_Top,
            left: second_Left,
            opacity: 1
        }, dur).css({zIndex: 2});
        slider.find('div:eq(3)').show().css({
            width: 0,
            height: 0,
            top: third_Top,
            left: third_Left,
            opacity: 0.5,
            zIndex: 1
        }).animate({
            width: minWidth,
            height: minHeight,
            top: first_Top,
            left: first_Left,
            opacity: 0.5
        }, dur);
        second.css({zIndex: 1}).animate({
            left: third_Left,
            top: third_Top,
            width: minWidth,
            height: minHeight,
            opacity: 0.5
        }, dur);
        slider.append(first);
    });
}
$.fn.prevItem = function () {
    var slider = $(this),
        first = slider.find('div:eq(0)'),
        second = slider.find('div:eq(1)'),
        last = slider.find('div:eq(2)');
    last.animate({
        width: minWidth,
        height: minHeight,
        top: first_Top,
        left: second_Left,
        opacity: 0.5
    }, dur, function () {
        first.animate({
            width: maxWidth,
            height: maxHeight,
            top: second_Top,
            left: second_Left,
            opacity: 1
        }, dur).css({zIndex: 2});
        slider.find('div:last').show().css({
            width: 0,
            height: 0,
            top: third_Top,
            left: second_Left,
            opacity: 0.5,
            zIndex: 1
        }).animate({
            width: minWidth,
            height: minHeight,
            top: first_Top,
            left: third_Left,
            opacity: 0.5
        }, dur);
        second.css({zIndex: 1}).animate({
            left: first_Left,
            top: third_Top,
            width: minWidth,
            height: minHeight,
            opacity: 0.5
        }, dur);
        slider.prepend(slider.find('div:last').css({opacity: 0.5}));
    });
}
$(document).ready(function () {
    slider_body = $('#clinic-slider');
    allHeight = slider_body.height();
    allWidth = slider_body.width();
    padding = 8;
    pre = minWidth / 3;
    //заадаем размеры переменным исходя из размера блока слайдера
    first_Top = (allHeight - minHeight) / 2 - padding;
    first_Left = (allWidth / 2 - minWidth) - pre - padding;
    second_Top = (allHeight - maxHeight) / 2 - padding;
    second_Left = (allWidth - maxWidth) / 2 - padding;
    third_Top = first_Top - padding;
    third_Left = (allWidth / 2) + pre - padding;
    slider_body.everyTime(anitime, function () {
        $(this).nextItem();
    });
    slider_body.find('div:eq(0)').css({
        left: third_Left,
        top: first_Top,
        zIndex: 1,
        width: minWidth,
        height: minHeight,
        opacity: 0.5
    });
    slider_body.find('div:eq(1)').css({
        left: second_Left,
        top: second_Top,
        zIndex: 2,
        width: maxWidth,
        height: maxHeight,
        opacity: 1
    });
    slider_body.find('div:eq(2)').css({
        left: first_Left,
        top: third_Top,
        zIndex: 1,
        width: minWidth,
        height: minHeight,
        opacity: 0.5
    });
    slider_body.find('div:gt(2)').hide();
    $('#clinic-next').click(function () {
        slider_body.prevItem();
    });
    $('#clinic-prev').click(function () {
        slider_body.nextItem();
    });
});