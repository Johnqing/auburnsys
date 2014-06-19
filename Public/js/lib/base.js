var fst = {
	config: {},
	ui: {},
	util: {},
	json: function(config){
		var el = config.el;
		var data = el.serialize();
		$.ajax({
			type: el.attr('method'),
			url: el.attr('action'),
			data: data,
			success: function(res){
				if(typeof res == 'string'){
					res = eval('('+res+')');
				}
				if(!res.state){
					config.success && config.success(res.data);
					return;
				}
				config.error && config.error(res.message);
			}
		});
	}
}