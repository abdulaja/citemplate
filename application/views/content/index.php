<?php

?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php
			if(!isset($primary_title)){
				echo "Judul Utama";
			}else{
				echo $primary_title;
			}
			?>
			<small>
				<?php
				if(!isset($sub_primary_title)){
					echo "Sub judul utama";
				}else{
					echo $sub_primary_title;
				}
				?>
			</small>
		</h1>
		<ol class="breadcrumb">
			<!-- <i class="ion-ios7-home"></i> -->
			<?php echo $this->breadcrumb->output()?>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<?php echo $content_for_layout; ?>
	</section>
	<!-- /.content -->
</div>
