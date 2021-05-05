
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
<div class="container">
	
	<?php echo $error;?>

	<?php echo form_open_multipart('upload/do_upload');?>
	<fieldset>
	<legend>Upload ID Phto</legend>
		<input type="file" name="userfile" size="20" />
		<input type="submit" value="upload" class="btn btn-primary" />
	</fieldset>
	</form>

</div>