<?php
/**
 * Created by IntelliJ IDEA.
 * User: muhammad.azis
 * Date: 16/12/2017
 * Time: 18.51
 */
?>
<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">

			<!-- Messages: style can be found in dropdown.less-->
			<?php $this->load->view('layout/header/menu/messages'); ?>

			<!-- Notifications: style can be found in dropdown.less -->
			<?php $this->load->view('layout/header/menu/notifications'); ?>

			<!-- Tasks: style can be found in dropdown.less -->
			<?php $this->load->view('layout/header/menu/tasks'); ?>

			<!-- User Account: style can be found in dropdown.less -->
			<?php $this->load->view('layout/header/menu/user'); ?>

		</ul>
	</div>
</nav>
