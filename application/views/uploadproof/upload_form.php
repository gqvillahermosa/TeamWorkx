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

	  .form-signin {
      width: 100%;
      max-width:500px;
      padding: 15px;
      margin: auto;
    }

</style>	
<div class="container mt-5">
	
	<?php echo $error;?>

	<?php echo form_open_multipart(base_url('upload/do_upload/proof'),'class="form-signin"');?>
	<fieldset>
	
			<legend>&nbsp <img src=<?=base_url("icons/upload2.svg"); ?>> Upload Proof of Payment</legend>
			<div class="form-group">
				<p>
					Select the file for your proof of payment and the click the Upload button. Make sure your photo in landscape.
				</p>
				<input type="file" name="userfile" size="20" class="form-control mb-3" />
				<input type="submit" value="Upload" class="btn btn-primary btn-block mb-3" />
			</fieldset>
			<center>
				<small class="form-text text-muted">7 of 8 Steps</small>
				<progress value="7" max="8"></progress>
				</center>
			</form>
		</div>	

</div>