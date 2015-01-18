/**
 * Created by liuqing on 14-3-25.
 *
 */

fst.ui.tab = function(){

	var Tab = function(field, config){
		// 点击元素/切换内容 不传入直接放弃
		if(!field.length || !config.contentDOM) return;
		this.el = field;
		this.tabNode = field.find(config.tab);
		this.node = $(config.contentDOM);
		this.config = config;
		this.timer = null

		this.init();

	}

	Tab.prototype = {
		init: function(){

			if(this.tabNode.length != this.node.length){
				throw new Error('tab/content的数量错误!');
			}

			this.defaultTab();
			this.bind();
		},
		setStyle: function(obj, index){
			var that = this,
				config = that.config,
				tab = config.tab,
				cls = config.currClass

			if(obj.hasClass(cls)) return

			obj.addClass(cls).siblings(tab).removeClass(cls);
			that.node.eq(index).show().siblings(config.contentDOM).hide();
		},
		defaultTab: function(){
			var that = this,
				defaultIndex = that.config.defaultIndex

			that.setStyle(that.tabNode, defaultIndex);
		},
		bind: function(){
			var that = this,
				config = that.config,
				tab = config.tab,
				deferTime = config.deferTime * 1000

			that.el.on(config.eventType, tab, function(){

				clearTimeout(that.timer);

				var $this = $(this),
					n = $this.index();


				that.timer = setTimeout(function(){
					that.setStyle($this, n);
					config.onAfter && config.onAfter.call(that, n);

				}, deferTime);


			});

			if(!deferTime) return

			that.el.on('mouseout', tab, function(){
				clearTimeout(that.timer);
			})

		}
	}

	// 默认参数
	var DEFAULTCONFIG = {
		// 触发切换元素
		tab: 'li',
		// 切换元素
		contentDOM: null,
		// 切换后的class
		currClass: 'current',
		// 触发切换的事件
		eventType: 'click',
		// 默认打开的索引
		defaultIndex: 0,
		// 延迟触发 单位: 秒
		deferTime: 0,
		onAfter: null
	}

	return {
		/**
		 * 初始化tab切换
		 * @param els      切换元素的父容器
		 * @param config
		 * @returns {*|jQuery}
		 */
		init: function(els, config){
			if(!els) return;
			config = $.extend(true, {}, DEFAULTCONFIG, config);
			return $(els).each(function(){
				new Tab($(this), config)
			});
		}
	}
}();

