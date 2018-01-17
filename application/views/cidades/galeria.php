





<div style="background-color:  #FFFFFF;">
<br><br>

<br>
<div class="master-container">
	<div class="container">

	<?php foreach ($eventos as $row) {

	?>

	<div class="col-md-3 col-sm-2">

	<a href="<?= base_url() ?>uploads/galeria/<?php echo $row->arquivo ?>" data-fancybox="group" >
	<img src="<?= base_url() ?>uploads/galeria/<?php echo $row->arquivo ?>" alt="" />
	</a>
	<br>
	<br>
	
	</div>

	<?php } ?>
	
	<div class="spacer"></div>

												
	</div>
	</div>
	
												
</div>
											