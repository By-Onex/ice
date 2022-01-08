/**
 * Скроллит к нужному элементу
 * 
 * @author markov
 */
var Helper_Scroll = {
	scrollTo : function (element, duration, offsetTop)
	{
        offsetTop = offsetTop === undefined ? 0 : offsetTop; 
		if ($(element).length > 0)
		{
			var destination = $(element).offset().top - offsetTop;
			duration = typeof(duration) != 'undefined' ? duration : 0;
            $('body').animate({scrollTop: destination}, duration );
			$('html').animate({scrollTop: destination}, duration );
		}
	}
};