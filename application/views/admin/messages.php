<?php if($this->session->flashdata(SUCCESS_MESSAGE)): ?>
	<div class="success-message text-success bg-success text-center"><?php echo $this->session->flashdata(SUCCESS_MESSAGE); ?></div>
<?php endif; if($this->session->flashdata(ERROR_MESSAGE)): ?>
	<div class="error-message text-danger bg-danger text-center"><?php echo $this->session->flashdata(ERROR_MESSAGE); ?></div>
<?php endif; ?>

<?php if($success_message): ?>
	<div class="success-message text-success bg-success text-center"><?php echo $success_message; ?></div>
<?php endif; if($error_message): ?>
	<div class="error-message text-danger bg-danger text-center"><?php echo $error_message; ?></div>
<?php endif; ?>