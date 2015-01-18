fst.Login = function(){
	var verify = function(el){
		el = $(el);
		var id = el.attr('data-id');
		el.attr('src', id + '?' + Math.random());
	}

	var dataSubmit = function(el, vf){
		el = $(el);
		if(!el.length) return false;

		el.on('submit', function(){
			fst.json({
				el: el,
				success: function(data){
					window.location.href = data.url;
				},
				error: function(msg){
					$('.error').text(msg);
					verify(vf);
				}
			});
			return false;
		})
	}

	return {
		verify: function(el){
			el = $(el);
			el.on('click', function(){
				verify(el);
			});
		},
		index: dataSubmit
	}

}();