/**
 * Created by liuqing on 14-8-2.
 */
(function(){
	var wraper = $('.m-help-ct');
	var dtNode = wraper.find('dt');
	var ddNode = wraper.find('dd');
	dtNode.on('click', function(){
		var n = dtNode.index($(this));
		var node = ddNode.eq(n);
		if(!node.is(':hidden')){
			node.hide();
			return;
		}
		ddNode.hide();
		node.show();;
	});
})();