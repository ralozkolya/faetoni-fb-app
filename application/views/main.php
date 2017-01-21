<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Faetoni</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url().'res/css/jquery.mCustomScrollbar.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'res/css/fonts.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'res/css/general.css'; ?>">

	<script>var baseUrl = '<?php echo base_url(); ?>';</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="<?php echo base_url().'res/js/jquery.mCustomScrollbar.concat.min.js'; ?>"></script>
	<script src="<?php echo base_url().'res/js/main.js'; ?>"></script>

</head>
<body>
	<div class="wrapper bpg-mrgvlovani-caps">
		<div class="logo-container">
			<img id="logo" alt="logo" src="<?php echo base_url().'res/img/logo.png?v=1'; ?>">
		</div>
		<div class="content">
			<div class="category-name text-center">
				<div></div>
			</div>
			<div class="list">
				<div class="container-fluid main-container"></div>
			</div>
		</div>
		<div class="sidebar">
			<div class="text-center">
				<img src="<?php echo base_url().'res/img/logo.png?v=1'; ?>" alt="logo">
			</div>
			<div class="langs text-center">
				<a href="<?php echo base_url().'app/lang/ge'; ?>">ქა</a>
				<a href="<?php echo base_url().'app/lang/en'; ?>">en</a>
				<a href="<?php echo base_url().'app/lang/ru'; ?>">ру</a>
			</div>
			<div class="categories">
				<?php foreach($categories as $category): ?>
					<a class="category" href="#" data-id="<?php echo $category->id; ?>">
						<?php echo $category->name; ?>
					</a>
				<?php endforeach; ?>
			</div>
			<div class="arrow"></div>
		</div>
	</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1688291474771281',
      xfbml      : true,
      version    : 'v2.6'
    });

    FB.Canvas.setSize({height: 700});

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>