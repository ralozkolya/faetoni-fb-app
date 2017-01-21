window.app = {};

app.listUrl = baseUrl+'get_list/';

app.init = function(){

	app.showLoading();

	app.categories = $('.category');

	app.categories.click(app.selectCategory);

	$('.categories').mCustomScrollbar();

	$('.sidebar').hover(function(){
		TweenMax.to(this, .5, {x: '0'});
	}, function(){
		TweenMax.to(this, .5, {x: '-385px'});
	});

	$('.category').get(0).click();
};

app.selectCategory = function(e){

	app.showLoading();

	var cat = $(e.target);

	app.categories.not(e.target).removeClass('active')
	cat.addClass('active');

	var id = cat.attr('data-id');

	$('.category-name > div').html(cat.html());

	$('.list').mCustomScrollbar('destroy');

	if(id && $.isNumeric(id)) {
		$.get(app.listUrl + id, function(r){
			$('.main-container').html(r);
			$('.list').mCustomScrollbar();
		});
	}

	return false;
};

app.showLoading = function(){

	if(!app.loadingIndicator) {
		var loadingImage = new Image();
		loadingImage.src = baseUrl+'res/img/loading.gif';

		app.loadingIndicator = '<div class="text-center"></div>';
		app.loadingIndicator = $(app.loadingIndicator).append(loadingImage).get(0);
	}

	$('.main-container').html(app.loadingIndicator);
};

$(app.init);