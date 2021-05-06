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

	<?php echo form_open_multipart(base_url('upload/do_upload/id'));?>
	<fieldset>
	
			<legend>&nbsp <img src=<?=base_url("icons/upload2.svg"); ?>> Upload ID Photo</legend>
			<div class="form-group">
				<p>
					Select the file for your ID photo and the click the Upload button. Make sure your photo in landscape.
				</p>
				<input type="file" name="userfile" size="20" class="form-control mb-3" />
				<input type="submit" value="Upload" class="btn btn-primary btn-block mb-3" />
			</fieldset>
			<center>
				<small class="form-text text-muted">3 of 7 Steps</small>
				<progress value="3" max="7"></progress>
				</center>
			</form>
		</div>	

</div>