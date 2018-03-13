<?php

?>
<!DOCTYPE html>
<html>
<?php $this->load->view('layout/partials/head'); ?>

<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo base_url('login');?>"><b>Admin</b>LTE</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>

		<?php echo form_open("auth/login_process");?>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="username" placeholder="Username" />
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Password" />
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox"> Remember Me
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		<?php echo form_close();?>

		<a href="#">I forgot my password</a><br>
		<!--<a href="register.html" class="text-center">Register a new membership</a>-->

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- File Script -->
<?php $this->load->view('layout/partials/script'); ?>

<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
</body>
</html>

