
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
</style>	<div class="container">
	<fieldset>
	<legend class="mt-5">&nbsp<img src=<?=base_url("icons/submit.svg"); ?>><img src=<?=base_url("icons/phone-fill.svg"); ?>> Registration Completed!</legend>
		<p><strong>Congrats!</strong><br> Your application has been submitted and will be reviewed.</p> PAA will contact you shortly for further update.</p><p> For more information <a href="http://wwww.your.org"> click here to visit our web page.</a></p> <p>Thank you and have an nice day! </p>

	</fieldset>
	<?php 
		if($this->session->userdata('admin')== TRUE){// if the admnn add the applicant
			echo "Admn in";
			redirect(base_url('Chapter_officer/member'));
		}else{
			$this->session->sess_destroy(); 
			//echo "session destroyed";
			}

	?>
</div>
<center>
			<small class="form-text text-muted">7 of 7 Steps</small>
			<progress value="7" max="7"></progress>
</center>