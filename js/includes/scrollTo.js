function scrollTo(element, duration)

{

    if ($(element).length > 0)

    {

		var destination = $(element).offset().top;

		duration = typeof(duration) != 'undefined' ? duration : 0;

		

		if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1)

		{

			$('body').animate({scrollTop: destination}, duration );

			return;

		}

		

		$('html').animate({scrollTop: destination}, duration );

    }

}