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
	
	<h2>მომხმარებლები</h2>
	<br>
	<br>

	<form action="<?php echo base_url().'admin/change_user'; ?>" method="post">
		<div class="form-group">
			<label for="username">მომხმარებლის სახელი</label>
			<input type="text" class="form-control" name="username" id="username"
				value="<?php echo $user['username']; ?>" required>
		</div>
		<div class="form-group">
			<label for="password">ახალი პაროლი</label>
			<input type="password" class="form-control" name="password" id="password" required>
		</div>
		<div class="form-group">
			<label for="repeat_password">გაიმეორეთ პაროლი</label>
			<input type="password" class="form-control" name="repeat_password" id="repeat_password" required>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="შეცვლა">
		</div>
	</form>
</div>

</body>
</html>