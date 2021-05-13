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
		
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
</style>	
<div class="container">
<?=form_open('registration/check', 'class="form-signin"') ?>
<fieldset>
	<legend class="mt-5"> &nbsp <img src=<?=base_url("icons/regs.svg"); ?>>&nbsp Registration</legend>
	<section class="m-5">
		<small class="form-text text-muted"> <strong> <?=$this->session->sponsor_name?> </strong>invites to join {name of org}. Please enter your PIC
		<h2 class="text-center"></h2>
		<label>Professional ID</label>
		<input type="text" id="id" name="id" class="form-control" placeholder="PIC">
		<small class="form-text text-muted">Check your Professional ID</small>
		<br>
		<div class="form-group">
			<button type="submit" name="check" class="form-control btn btn-primary ">Check</button>
		</div>
		</div>
	</section>
	<center>
			<small class="form-text text-muted">1 of 7 Steps</small>
			<progress value="1" max="7"></progress>
</center>
</fieldset>
</form>
</div>




