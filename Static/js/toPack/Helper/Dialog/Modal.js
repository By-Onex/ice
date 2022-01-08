var Helper_Dialog_Modal = {

	

	_callbacks: [],

	

	_onShow: [],

	

	_counter: 0,

	

	_show: function (html, counter, options)

	{

		options.title = '';

		Helper_Dialog_Modal._callbacks [counter] = options.callback;

		CoolBox.show (jQuery.extend ({

			elem: html,

			style: "padding: 0;",

			maxWidth: false,

			maxHeight: false,

			closeBtn: false

		}, options));

	},

	

	alert: function (options)

	{

		var counter = Helper_Dialog_Modal._counter++;

		

		var dlg = 

			'<div class="dlg_window att" id="dlg_window_' + counter + '">' +

				'<span class="header red">' + (options.title ? options.title : '') + '</span>' +

				'<span class="close dlg_close">Закрыть</span>';

		

		if (options.text.indexOf ('class="btns_block"'))

		{

			dlg += options.text;

		}

		else

		{

			dlg +=

				'<p>' + options.text + '</p>' +

				'<span class="btns_block">' +

				'<a class="btn_green dlg_close true"><span>OK</span></a>' +

				'</span>';

		};

		

		dlg +=	'</div>';

		

		return Helper_Dialog_Modal._show (dlg, counter, options);

	},

	

	checkOnShow: function (counter)

	{

		if (Helper_Dialog_Modal._onShow [counter])

		{

			$dlg = $('#dlg_window_' + counter);

			if ($dlg.length > 0)

			{

				Helper_Dialog_Modal._onShow [counter]($dlg);

			}

			else

			{

				setTimeout (

					"Helper_Dialog_Modal.checkOnShow(" + counter+ ")",

					100

				);

			}

		}

	},

	

	confirm: function (options)

	{

		var counter = Helper_Dialog_Modal._counter++;

		

		var style = options.style ? 'style="' + options.style + '"' : '';

		

		var dlg = 

			'<div class="dlg_window qwe" id="dlg_window_' + counter + '" ' + style + '>' +

				'<span class="header blue">' + (options.title ? options.title : '') + '</span>' +

				'<span class="close dlg_close">Закрыть</span>';

		

		if (options.text.indexOf ('class="btns_block"'))

		{

			dlg += options.text;

		}

		else

		{

			dlg +=

				'<p>' + options.text + '</p>' +

				'<span class="btns_block">' +

					'<a class="btn_gray dlg_close"><span>НЕТ</span></a>' +

					'<a class="btn_green dlg_close true"><span>ДА</span></a>' +

				'</span>';

		};

		

		dlg +=	'</div>';

		

		if (options.onShow)

		{

			Helper_Dialog_Modal._onShow [counter] = options.onShow;

			Helper_Dialog_Modal.checkOnShow (counter);

		}

		

		return Helper_Dialog_Modal._show (dlg, counter, options);

	},

	

	hide: function ()

	{

		CoolBox.hide ();

	},



    close: function ()

    {

        CoolBox.hide ();

        $('.avatar_block').hide();

    },

	

	onCloseClick: function (btn)

	{

		$btn = $(btn);

		var $dlg = $btn.parents ('.dlg_window');

		var id = $dlg.attr ('id');

		id = id.substr ('dlg_window_'.length);

		Helper_Dialog_Modal._onShow [id] = null;

		var ctype = typeof (Helper_Dialog_Modal._callbacks [id]);

		if (ctype.toLowerCase () == 'function')

		{

			var r = Helper_Dialog_Modal._callbacks [id] ($btn, $dlg);

			if (r === false)

			{

				return;

			}

		}

		

		CoolBox.hide ();

	},

	

	success: function (extra)

	{

		CoolBox.success (extra);

	}

	

};