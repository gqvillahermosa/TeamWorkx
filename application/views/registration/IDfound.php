<style type="text/css">
	fieldset {
		display: block;
		background-color: #eeeeee;
		margin-left: 2px;
		margin-right: 2px;
		padding-left: 1em;
		padding-right: 1em;
		border: 2px groove;	 
		}
	legend{
		background-color:black;
		color:white;
		padding: 5px,10px 
	}
</style>
<div class="container mt-5">
	<div>

<div class="row">
	<div class="col"></span></div>
</div>
<div class="row">
	<div class="col-sm">
		
	</div>
	<div class="col-lg bg-light">
		<fieldset>
		<legend>&nbsp<img src=<?=base_url("icons/warning.svg"); ?>>&nbsp Warning</legend>
		<p class="text-center"> We founded that Professional ID Card <?=$this->session->pic_id?> is already <i> registred </i>. 
		If you think this is a mistake, 
		please contact your sponsor<b> <?=$this->session->sponsor_name ?> </b>
		 or the <?=anchor(base_url('chapter/list'), 'chapter ') ?>nearest you. </p>
		<button class="btn btn-primary btn-block mb-2">Close</button>
		</fieldset>
	</div>
	<div class="col-sm">
		
	</div>
</div>
<div class="row">
	<div class="col"></div>
</div>
<?php $this->session->sess_destroy();  ?>





		
	</div>
</div>