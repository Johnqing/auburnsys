;(function(html){
	var defaultConf = {
		box: null,
		// 动画切换的时间
		time: 3,
		// 延迟触发menu
		defter: 0,
		slides: '.u-slt',
		cls: 'active',
		eventType: 'click',
		autoPlay: true,
		animate: true
	}
	var slider = {
		init: function(el, config){
			this.config = $.extend({}, defaultConf, config);
			this.wrap = el;

			this.box = el.find(this.config.slides);
			this.total = this.box.length-1;
			this.creatNav();

			this.currIndex = 0;
			this.time = this.config.time * 1000;
			this.defer = this.config.defter * 1000;

			this.setStyle(true);

			if(this.config.autoPlay){
				var self = this;
				self.timer = setInterval(function(){
					self.setTime();
				}, self.time);
			}

			this.bindEvent();

		},
		creatNav: function(){
			var self = this;
			html = fst.tpl(html, {
				navClass: 'u-slt-nav'
			});
			var template = $(html);
			var btn = '<ul>';
			for(var i=0; i<=self.total; i++){
				btn += '<li><a href="javascript:;" class="'+(!i ? 'u-slt-nav-'+self.config.cls : '')+'">'+(i+1)+'</a></li>'
			}
			btn += '</ul>'
			template.html(btn);
			self.el = template;
			self.menu = template.find('a');
			self.wrap.after(template);
		},
		bindEvent: function(){
			var self = this,
				config = self.config,
				menu = config.menu,
				defer = config.defer

			self.el.on(config.eventType, menu, function(){
				var $this = $(this),
					n = self.menu.index($this);

				clearInterval(self.defterTimer);
				self.defterTimer = setTimeout(function(){
					self.toASpecificPage.call(self, n);
					if(!config.autoPlay) return;
					// 动画切换
					clearInterval(self.timer);
					self.timer = setInterval(function(){
						self.setTime()
					}, self.time)

				}, defer);

			});

			// 只有moseout的时候 清除延迟
			if(!defer) return
			self.el.on('mouseout', menu, function(){
				clearTimeout(self.defterTimer);
			})

		},
		toASpecificPage: function(index){
			var self = this;
			self.currIndex = index;
			self.changePage();
			self.setStyle(true);
		},
		/**
		 * 设置样式
		 */
		setStyle: function(){
			var self = this;
			var config = self.config;
			self.menu.eq(self.currIndex).addClass('u-slt-nav-'+config.cls);
			if(!self.box) return;
			self.box.addClass('ui-tabs-cont');
		},
		changePage: function(){
			var self = this;
			var config = self.config;
			var n = self.currIndex;

			self.menu.removeClass('u-slt-nav-'+config.cls).eq(n).addClass('u-slt-nav-'+config.cls);

			if(!self.box) return;
			var box = self.box.eq(n);
			box.addClass(config.cls).siblings(config.box).removeClass(config.cls);
			if(!config.animate){
				box.show().siblings(config.box).hide();
				return;
			}
			box.stop(true, true).fadeIn(500).siblings(config.box).fadeOut(500);

		},
		setTime: function(){
			var self = this;
			self.toNextPage();
			self.setStyle();
		},
		toNextPage: function(){
			var self = this;
			self.currIndex == self.total ? self.currIndex = 0 : self.currIndex++;
			self.changePage();
		}
	}


	$.fn.Slider = function(options){
		slider.init($(this), options);
	}
})('<div class="{{navClass}}"></div>');