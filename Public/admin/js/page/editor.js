fst.editor = function(config, callback){
	var nodes = $(config.el || '[data-editor=news_cont]');
	if(!nodes.length) return;
	$.extend(xheditor.settings, {
		shortcuts:{
			'ctrl+enter': callback
		}
	});

	var editor = nodes.xheditor({
		height: config.h || 400,
		upLinkUrl: config.url,
		upLinkExt: "zip,rar,txt",
		upImgUrl: config.url,
		upImgExt: "jpg,jpeg,gif,png",
		onUpload: ''
	});

	return editor;

}