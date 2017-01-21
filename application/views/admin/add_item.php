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

	<h2>ნაწარმის დამატება</h2>

	<form method="post" action="<?php echo base_url().'admin/add_item'; ?>">
		<div class="form-group">
			<label for="ge_name">სახელი ქართულად</label>
			<input class="form-control" name="ge_name" id="ge_name" type="text" required>
		</div>
		<div class="form-group">
			<label for="en_name">სახელი ინგლისურად</label>
			<input class="form-control" name="en_name" id="en_name" type="text" required>
		</div>
		<div class="form-group">
			<label for="ru_name">სახელი რუსულად</label>
			<input class="form-control" name="ru_name" id="ru_name" type="text" required>
		</div>
		<div class="form-group">
			<label for="category">კატეგორია</label>
			<select class="form-control" id="category" name="category" required>
				<option selected disabled></option>
				<?php foreach($categories as $c): ?>
					<option value="<?php echo $c->id; ?>"><?php echo $c->ge_name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="ge_label_1">ფასის ტიპი 1 ქართულად</label>
			<input class="form-control" name="ge_label_1" id="ge_label_1" type="text">
		</div>
		<div class="form-group">
			<label for="en_label_1">ფასის ტიპი 1 ინგლისურად</label>
			<input class="form-control" name="en_label_1" id="en_label_1" type="text">
		</div>
		<div class="form-group">
			<label for="ru_label_1">ფასის ტიპი 1 რუსულად</label>
			<input class="form-control" name="ru_label_1" id="ru_label_1" type="text">
		</div>
		<div class="form-group">
			<label for="price_1">ფასი 1</label>
			<input class="form-control" name="price_1" id="price_1" type="text" required>
		</div>
		<div class="form-group">
			<label for="ge_label_2">ფასის ტიპი 2 ქართულად</label>
			<input class="form-control" name="ge_label_2" id="ge_label_2" type="text">
		</div>
		<div class="form-group">
			<label for="en_label_2">ფასის ტიპი 2 ინგლისურად</label>
			<input class="form-control" name="en_label_2" id="en_label_2" type="text">
		</div>
		<div class="form-group">
			<label for="ru_label_2">ფასის ტიპი 2 რუსულად</label>
			<input class="form-control" name="ru_label_2" id="ru_label_2" type="text">
		</div>
		<div class="form-group">
			<label for="price_2">ფასი 2</label>
			<input class="form-control" name="price_2" id="price_2" type="text">
		</div>
		<div class="form-group">
			<label for="priority">პრიორიტეტი</label>
			<input class="form-control" name="priority" id="priority" type="text">
		</div>
		<div class="form-group">
			<input id="add-category" type="submit" value="დამატება" class="btn btn-success">
			<a class="btn btn-default" href="<?php echo base_url().'admin/categories'; ?>">უკან</a>
		</div>
	</form>

</div>

</body>
</html>