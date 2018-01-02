<?php
/**
 * Created by IntelliJ IDEA.
 * User: muhammad.azis
 * Date: 16/12/2017
 * Time: 13.05
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<?php $this->load->view('layout/partials/head'); ?>

<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

	<?php $this->load->view('layout/header/index'); ?>

	<!-- Left side column. contains the logo and sidebar -->
	<?php $this->load->view('layout/sidebar'); ?>

	<!-- Content Wrapper. Contains page content -->
	<?php $this->load->view('content/index'); ?>
	<!-- /.content-wrapper -->

	<!-- /.footer-wrapper -->
	<?php $this->load->view('layout/partials/footer'); ?>

</div>
<!-- ./wrapper -->

<!-- File Script -->
<?php $this->load->view('layout/partials/script'); ?>
</body>
</html>

