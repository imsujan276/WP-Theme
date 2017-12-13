(function($){
	wp.customize("num4", function(value) {
		value.bind(function(newval) {
			$("#num4").html(newval);
		} );
	});
})(jQuery);