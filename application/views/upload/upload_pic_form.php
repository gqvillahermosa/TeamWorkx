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
	
	<?php echo $error;?>

	<?php echo form_open_multipart(base_url('upload/do_upload/pic'));?>
	<fieldset>
	
			<legend>&nbsp <img src=<?=base_url("icons/upload2.svg"); ?>> Upload Photo or Scan of Professional ID </legend>
			<div class="form-group">
				<p>
					Select the photo file for your Professional IDand the click the Upload button.
				</p>
				<input type="file" name="userfile" size="20" class="form-control mb-3" />
				<input type="submit" value="Upload" class="btn btn-primary btn-block mb-3" />
			</fieldset>
			</form>
		</div>	

</div>