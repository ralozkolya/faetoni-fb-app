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

	<h2><?php echo $category->ge_name; ?></h2>

	<form method="post" action="<?php echo base_url().'admin/edit_category/'.$category->id; ?>">
		<div class="form-group">
			<label for="ge_name">სახელი ქართულად</label>
			<input class="form-control" name="ge_name" id="ge_name" type="text"
				value="<?php echo $category->ge_name; ?>" required>
		</div>
		<div class="form-group">
			<label for="en_name">სახელი ინგლისურად</label>
			<input class="form-control" name="en_name" id="en_name" type="text"
				value="<?php echo $category->en_name; ?>" required>
		</div>
		<div class="form-group">
			<label for="ru_name">სახელი რუსულად</label>
			<input class="form-control" name="ru_name" id="ru_name" type="text"
				value="<?php echo $category->ru_name; ?>" required>
		</div>
		<div class="form-group">
			<label for="priority">პრიორიტეტი</label>
			<input class="form-control" name="priority" id="priority" type="text"
				value="<?php echo $category->priority; ?>">
		</div>
		<div class="form-group">
			<input id="add-category" type="submit" value="შენახვა" class="btn btn-success">
			<a class="btn btn-default" href="<?php echo base_url().'admin/categories'; ?>">უკან</a>
		</div>
	</form>

</div>

</body>
</html>