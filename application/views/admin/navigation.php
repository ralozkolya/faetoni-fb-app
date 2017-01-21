<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 text-center">
				<a href="<?php echo base_url().'admin/categories'; ?>">კატეგორიები</a>
			</div>
      <div class="col-sm-2 text-center fb-integration">
        <a href="#">Facebook ინტეგრაცია</a>
      </div>
			<div class="col-sm-2 text-center">
				<a href="<?php echo base_url().'admin/users'; ?>">მომხმარებლები</a>
			</div>
			<div class="col-sm-2 text-center">
				<a href="<?php echo base_url().'admin/logout'; ?>">გასვლა</a>
			</div>
		</div>
	</div>
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1688291474771281',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>