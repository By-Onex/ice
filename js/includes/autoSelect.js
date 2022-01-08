var AutoSelect = {

	init : function(elem, options)
	{
		var options = jQuery.extend({
			height: 150,
			onChange : function(val, text, select, holder){},
			onSelect : function(val, text, select, holder){}
		},options);

		var $elem = $(elem);
		var index = $elem.length > 1 ? true : false;

		$elem.each(function(i){
			index = index ? '_'+i : '';
			var $select = $(this);
			var name = $select.attr('name');

			$('#holder_wrapper_'+name+index).remove();
			if (!$elem.length || !$elem.find('option').length)
			{
				return;
			}

			var width = $select.width();
			var height = $select.height() - 4;
			var $defaultElem = $select.find('option:selected');
			var $defaultText = $defaultElem.text();
			var $defaultVal = $defaultElem.val();

			var $holder = $('<input type="text" name="holder_'+name+index+'" id="holder_'+name+index+'" attr_val="'+$defaultVal+'" value="'+$defaultText+'" />');

			var $listHolder = '<ul id="list_holder_'+name+index+'">';
			var $list = $select.find('option');
			$list.each(function(){
				$listHolder += '<li style="display:none;" attr_val="'+$(this).val()+'">'+$(this).text()+'</li>';
			});

			$listHolder += '</ul>';
			$listHolder = $($listHolder);

			var $button = $('<input type="button" id="holder_button_'+name+index+'" />');

			$select.hide();
			var showHolder = false;
			var holderIsVisible = false;
			var $selected = null;

			$holder
				.width(width)
				.height(height)
				.css({
					fontWeight: 'normal',
					margin: 0,
					border: '1px solid #D0D0D0',
					padding: '0 2px'
				})
				.insertAfter($select)
				.wrap('<tt id="holder_wrapper_'+name+index+'" style="position:relative;"></tt>')
				.keyup(function(e){
					if (e.keyCode == 40 || e.keyCode == 38)
					{
						if ($listHolder.is(':visible'))
						{
							if (!$listHolder.find('li.selected:visible').length)
							{
								if (e.keyCode == 40)
								{
									$selected = $listHolder.find('li:visible:first');
								}
								else
								{
									$selected = $listHolder.find('li:visible:last');
								}
							}
							else
							{
								if (e.keyCode == 40)
								{
									$selected = $listHolder.find('li.selected').next(':visible');
									if (!$selected.length)
									{
										$selected = $listHolder.find('li:visible:first');
									}
								}
								else
								{
									$selected = $listHolder.find('li.selected').prev(':visible');
									if (!$selected.length)
									{
										$selected = $listHolder.find('li:visible:last');
									}
								}
							}

							selectOne($selected);

							options.onChange.call($(this), $holder.attr('attr_val'), $holder.val(), $select, $selected);
						}
						return;
					}

					$select
						.val('')
						.find('options:selected')
						.removeAttr('selected');

					$listHolder
						.find('li.selected')
						.removeClass('selected')
						.css({
							backgroundColor: 'transparent',
							color: '#000'
						});
						
					showHolder = false;
					nowVal = $(this).val();
					if (nowVal.length > 0)
					{
						reg = new RegExp('^'+nowVal,'i');
						$listHolder
							.find('li')
							.hide()
							.each(function(){
								if (reg.test($(this).text()))
								{
									$(this).show();
									showHolder = true;
									if (nowVal == $(this).text())
									{
										selectOne($(this));
									}

								}
							});
					}

					if (e.keyCode == 13)
					{
						showHolder = false;
						options.onSelect.call($(this), $holder.attr('attr_val'), $holder.val(), $select, $selected);
					}
					
					if (showHolder)
					{
						$listHolder.show();
						holderIsVisible = true;
						listHolderHeight();
					}
					else
					{
						holderIsVisible = false;
						$listHolder.hide();
					}
				});

			$listHolder
				.css({
					position: 'absolute',
					top: $holder.position().top + $holder.outerHeight(),
					left: $holder.position().left,
					backgroundColor: '#fff',
					zIndex: 99999999,
					display: 'none',
					padding: 0,
					border: '1px solid #d0d0d0',
					borderTop: 'none',
					width: $listHolder.width() < $holder.outerWidth(true) + 15 ? $holder.outerWidth(true) + 15 : 'auto',
					overflowY: 'auto'
				})
				.insertAfter($holder)
				.find('li')
				.css({
					padding: '2px',
					cursor: 'pointer'
				})
				.mouseover(function(){
					selectOne($(this));
				})
				.click(function(){
					$listHolder.hide();
					holderIsVisible = false;
					options.onSelect.call($(this), $holder.attr('attr_val'), $holder.val(), $select, $(this));
				});

			$button
				.width(20)
				.css({
					marginLeft: '-2px',
					position: 'relative',
					height: $holder.outerHeight(),
					border: '1px solid #D0D0D0',
					cursor: 'pointer'
				})
				.insertAfter($holder)
				.hover(function(){
					$(this).css('background-color','#D0D0D0');
				}, function(){
					$(this).css('background-color','#F0F0F0');
				})
				.click(function(){
					if ($listHolder.find('li:hidden').length)
					{
						$listHolder
							.show()
							.find('li')
							.show();
						listHolderHeight();
						holderIsVisible = true;
					}
					else
					{
						$listHolder
							.hide()
							.find('li')
							.hide();

						holderIsVisible = false;
					}
				});

			if ($holder.position().top !== $button.position().top)
			{
				$button
					.css({
						top: $holder.position().top - $button.position().top
					})
			}

			$(document).bind('click', function(e){
				if (holderIsVisible && !jQuery(e.target).parents().andSelf().filter($button).length)
				{
					$listHolder
						.hide()
						.find('li')
						.hide();
					holderIsVisible = false;
				}
			});

			var listHolderHeight = (function(){
				$listHolder.height('auto');
				if ($listHolder.height() > options.height)
				{
					$listHolder.height(options.height);
				}
			});

			var selectOne = (function($selected){

				$listHolder
					.find('li.selected')
					.removeClass('selected')
					.css({
						backgroundColor: 'transparent',
						color: '#000'
					});

				$selected
					.addClass('selected')
					.css({
						backgroundColor: '#f0f0f0',
						color: '#BE403F'
					});

				$holder
					.val($selected.text())
					.attr('attr_val', $selected.attr('attr_val'));

				$select.val($selected.attr('attr_val'));
				$select.find('option[value='+$selected.attr('attr_val')+']').attr('selected','selected');
			});
		});
	}
};