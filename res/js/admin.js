$(function(){

	$(document).on('click', '.delete', function(){
		return confirm('დარწმუნებული ხართ? ამ ქმედების გაუქმება შეუძლებელია!');
	});

	$('.fb-integration').click(function(){

		FB.ui({
			method: 'pagetab',
		})

		return false;
	});

});