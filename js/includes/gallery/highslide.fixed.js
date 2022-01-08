	hs.align = 'center';


    hs.graphicsDir = '/Ice/js/includes/gallery/graphics/';





	if (!hs.ie || hs.uaVersion > 6) hs.extend ( hs.Expander.prototype, {


		fix: function(on) {


			var sign = on ? -1 : 1,


				stl = this.wrapper.style;





			if (!on) hs.getPageSize();





			hs.setStyles (this.wrapper, {


				position: on ? 'fixed' : 'absolute',


				zoom: 1,


				left: (parseInt(stl.left) + sign * hs.page.scrollLeft) +'px',


				top: (parseInt(stl.top) + sign * hs.page.scrollTop) +'px'


			});





			if (this.outline) {


				stl = this.outline.table.style;


				hs.setStyles (this.outline.table, {


					position: on ? 'fixed' : 'absolute',


					zoom: 1,


					left: (parseInt(stl.left) + sign * hs.page.scrollLeft) +'px',


					top: (parseInt(stl.top) + sign * hs.page.scrollTop) +'px'


				});





			}


			this.fixed = on;


		},


		onAfterExpand: function() {


			this.fix(true);


		},





		onBeforeClose: function() {


			this.fix(false);


		},





		onDrop: function() {


			this.fix(true);


		},





		onDrag: function(sender, args) {


			if (this.fixed) {


				this.fix(false);


			}


		}





	});