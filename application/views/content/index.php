<?php
/**
 * Created by IntelliJ IDEA.
 * User: muhammad.azis
 * Date: 16/12/2017
 * Time: 13.06
 */
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<?php $this->load->view('content/home/index'); ?>
	</section>
	<!-- /.content -->
</div>
