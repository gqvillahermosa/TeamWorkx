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

	<?php echo form_open_multipart(base_url('uploadpic/do_upload/id'),'class="form-signin"');?>
	<fieldset>

			<legend>&nbsp <img src=<?=base_url("icons/upload2.svg"); ?>> Upload Professional ID</legend>
			<div class="form-group">
				<p>
					Select the photo file for Professional ID and the click the Upload button. Make sure your photo is in landscape.
				</p>
				<input type="file" name="userfile" size="20" class="form-control mb-3" />
				<input type="submit" value="Upload" class="btn btn-primary btn-block mb-3" />
			</fieldset>
			</form>
			<center>
				<small class="form-text text-muted">5 of 7 Steps to Go</small>
				<progress value="5" max="7" class="mb-3"></progress>
			</center>
		</div>

</div>