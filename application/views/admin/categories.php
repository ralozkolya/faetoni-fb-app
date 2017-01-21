<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Admin</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url().'res/css/admin.css'; ?>">

	<script>var baseUrl = '<?php echo base_url(); ?>';</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url().'res/js/admin.js'; ?>"></script>
</head>

<body>

<?php $this->load->view('admin/navigation'); ?>

<div class="container">

	<?php $this->load->view('admin/messages'); ?>
	
	<h2>კატეგორიები</h2>
	<br>
	<a href="<?php echo base_url().'admin/add_category'; ?>" class="btn btn-success">დამატება</a>
	<br>
	<br>

	<?php if(!count($categories)): ?>
		<h3>არცერთი კატეგორია არაა დამატებული</h3>
	<?php else: ?>
		<?php $this->load->view('admin/category_list'); ?>
	<?php endif; ?>
</div>

</body>
</html>