<div class="container-fluid">
	<div class="row">
		<center><h3>Web Database Tools</h3></center>
		<hr>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<h4>Tables Available</h4>
	


<?php
foreach ($tables as $row) {
	echo anchor(base_url("/webdb_tools/showTable/$row"), $row, 'target="mainview"');
	echo '<br>';
}
?>
		</div>

	<div class="col-sm">
		
		<iframe name="mainview" src="<?=base_url('/webdb_tools/showTable/none') ?>" width="100%" height="100%" border="0" ></iframe>
	</div>
	</div>
</div>