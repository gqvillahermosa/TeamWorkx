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
<h4 class="mt-5"></h4>	


<?=form_open( base_url('registration/personalProfile'));?>
<?=form_hidden('pic_id', $this->session->pic_id); ?>
<?=form_hidden('sponsor_id', $this->session->sponsor_id);?>
<fieldset>

	

<legend>&nbsp <img src=<?=base_url("icons/profile.svg"); ?>> PIC<strong>: <?=$this->session->pic_id ?></strong> Personal Profile</legend>
<em>* required</em> 
<div class="form-group">


		<h5><img src=<?=base_url("icons/person-badge-fill.svg"); ?>> Name </h5>
		<hr>

		
		
		
		<label>Salutation</label>
		<select name="salutation" class="form-control">
			<option  <?php echo  set_select('salutation', 'Mr.', TRUE); ?>>Mr.</option>
			<option <?php echo  set_select('salutation', 'Miss.'); ?>>Miss</option>
			<option <?php echo  set_select('salutation', 'Mrs.'); ?>>Mrs.</option>
			<option <?php echo  set_select('salutation', 'Dr.'); ?>>Dr.</option>
		</select>

<div class="row">
<div class="col-sm">

		<div class="form-group mt-3">
			
		<label>Firstname*</label>
		
		<input type="text" name="firstname" class="form-control" placeholder="e.g Juan, Mary" value="<?php echo set_value('firstname'); ?>">
		<small class="form-text text-muted">Please enter  First or Given Name</small>
		<?php echo form_error('firstname'); ?>
		</div>
</div>	

<div class="col-sm">
		<div class="form-group mt-3">
		
		<label>Middlename</label>
		
		<input type="text" name="middlename" class="form-control" value="<?php echo set_value('middlename'); ?>">
		<small class="form-text text-muted">Please enter  Middle Name</small>
		<?php echo form_error('middlename'); ?>
		</div>
</div>
<div class="col-sm">
	
		<div class="form-group mt-3">
		<label>Surname*</label>
		
		<input type="text" name="surname" class="form-control" placeholder="del Cruz, Poppins" value="<?php echo set_value('surname'); ?>">
		<small class="form-text text-muted">Please enter  Surname</small>
		<?php echo form_error('surname'); ?>
		</div>
</div>		
</div>



		<h5><img src=<?=base_url("icons/person-check.svg"); ?>> Demographics</h5>
		<hr>

<div class="row">
<div class="col-sm">
		<div class="form-group">
		<label>Gender*</label>
			<div class="custom-control custom-radio">
				<input type="radio" id="radio1" name="gender" class="custom-control-input" value="M" <?php echo  set_radio('gender', 'M', TRUE); ?> />
				<label class="custom-control-label" for="radio1">Male</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="radio2" name="gender" class="custom-control-input" value="F" <?php echo  set_radio('gender', 'F');?>  />
 				<label class="custom-control-label" for="radio2">Female</label>
			</div>
			<small class="form-text text-muted">Choose gender</small>
		</div>
</div>

<div class="col-sm">
		<div class="form-group">
			<label>Civil Status*</label>
			<div class="custom-control custom-radio">
				<input type="radio" id="radioA" name="civil_status" class="custom-control-input" value="S" <?php echo  set_radio('civil_status', 'S', TRUE);?>  />
				<label class="custom-control-label" for="radioA">Single</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="radioB" name="civil_status" class="custom-control-input" value="M" <?php echo  set_radio('civil_status', 'M');?>  />
				<label class="custom-control-label" for="radioB">Married</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="radioC" name="civil_status" class="custom-control-input" value="W" <?php echo  set_radio('civil_status', 'W');?>  />
				<label class="custom-control-label" for="radioC">Widow/er</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="radioD" name="civil_status" class="custom-control-input" value="D" <?php echo  set_radio('civil_status', 'D');?>  />
				<label class="custom-control-label" for="radioD">Divorce</label>
			</div>
			<small class="form-text text-muted">Choose civil status</small>
		</div>
</div>		

<div class="col-sm">	

		<div class="form-group">
			<label>Birthdate*</label>
			
			<input type="date" name="birthdate" class="form-control" value='<?=set_value("birthdate"); ?>'>
			<small class="form-text text-muted">Please enter the date of birth</small>
			<?php echo form_error('birthdate'); ?>
		</div>


</div>		
</div>
<hr>	
			<div class="form-group">	
				<label>Chapter</label><p>	
				
				<input list="chaps" name="chapter" value="<?php echo set_value('chapter'); ?>">
				<datalist id="chaps"></datalist>
				<small class="form-text text-muted">Please enter the chapter you would join</small>
				<?php echo form_error('chapter'); ?>
			</div>	
		
	
<h5>Work / Contact Information</h5>
<hr>	

<div class="row">
<div class="col-sm">

		<div class="form-group">
					<p>
					<label for="Organization"> Organization </label>
					
					<input type="text" name="organization" id="Organization" class="form-control" placeholder=" e.g. East-West, World Bank" value="<?php echo set_value('organization'); ?>" >
					<small class="form-text text-muted">Please enter the name of your organizaton</small>
					<?php echo form_error('organization'); ?>
					</p>
		</div>
</div>
<div class="col-sm">
		<div class="form-group">
					<p>
					<label for="Position"> Position </label>
					
					<input type="text" name="position" id="Position" class="form-control" placeholder=" e.g. Specialist, Manager" value="<?php echo set_value('position'); ?>"  >
					<small class="form-text text-muted">Please enter the your positon in your organization</small>
					<?php echo form_error('position'); ?>
					</p>
		</div>
</div>		
</div>		

<div class="row">
<div class="col-sm">

		<div class="form-group">
			<label><img src=<?=base_url("icons/envelope-open.svg"); ?>> Office Address*</label>			
			
			<textarea name="office" class="form-control"><?=set_value("office"); ?></textarea>
			<small class="form-text text-muted">Please enter Office Address. Only letters, numbers and spaces allowed</small>
			<?php echo form_error('office'); ?>
		</div>
</div>
<div class="col-sm">
		<div class="form-group">
			<label><img src=<?=base_url("icons/telephone-fill.svg"); ?>> Office Landline</label>
			
			<input type="text" name="office_landline" class="form-control" placeholder="e.g 63022982794" value="<?php echo set_value('office_landline'); ?>">
			<small class="form-text text-muted">Please enter Office Landline Phone Number</small>
			<?php echo form_error('office_landline'); ?>
		</div>
</div>

<div class="col-sm">		

		<div class="form-group">
					<p>
					<label for="Office_fax"> Office_fax </label>
					
					<input type="text" name="office_fax" id="Office_fax" class="form-control" placeholder="abcde" value="<?php echo set_value('office_fax'); ?>">
					<small class="form-text text-muted">Enter Office Fax number here</small>
					<?php echo form_error('office_fax'); ?>
					</p>
		</div>
</div>
</div>

<div class="row">
<div class="col-sm">

		<div class="form-group">
			<label><img src=<?=base_url("icons/house-fill.svg"); ?>> Home Address*</label>
			
			<textarea name="home" class="form-control"><?=set_value("home"); ?></textarea>
			<small class="form-text text-muted">Please enter Home Address</small>
			<?php echo form_error('home'); ?>
		</div>
</div>
<div class="col-sm">		

		<div class="form-group">
			<label><img src=<?=base_url("icons/telephone.svg"); ?>> Home Landline</label>
			<?php echo form_error('home_landline'); ?>
			<input type="text" name="home_landline" class="form-control" placeholder="e.g 63022982794" value="<?php echo set_value('home_landline'); ?>" >
			<small class="form-text text-muted">Please enter Home Landline Phone Number</small>
		</div>
</div>
<div class="col-sm">		

<div class="form-group">
					<p>
					<label for="Home_fax"> Home_fax </label>
					
					<input type="text" name="home_fax" id="Home_fax" class="form-control" placeholder="abcde" value="<?php echo set_value('home_fax'); ?>">
					<small class="form-text text-muted">Please enter the your Home fax</small>
					<?php echo form_error('home_fax'); ?>
					</p>
				</div>
</div>
</div>				

<div class="row">
<div class="col-sm">
		<div class="form-group">
			<label><img src=<?=base_url("icons/phone-fill.svg"); ?>> Cellphone/Mobile*</label>
			
			<input type="text" name="mobile" class="form-control"  value="<?php echo set_value('mobile'); ?>">
			<small class="form-text text-muted">Please enter Cellphone/Mobile Phone Number</small>
			<?php echo form_error('mobile'); ?>
		</div>
</div>
<div class="col-sm">	
		<div class="form-group">
			<label>@ Email*</label>
			
			<input type="email" name="email" class="form-control" placeholder="e.g name@example.com" value="<?php echo set_value('email'); ?>">
			<small class="form-text text-muted">Please enter your valid Email Address</small>
			<?php echo form_error('email'); ?>
		</div>		
</div>
</div>		


			<div class="form-group">
				<label>&nbsp <img src=<?=base_url("icons/mouse2.svg"); ?>>&nbsp Website</label>
				
				<input type="url" name="website" class="form-control" placeholder="e.g http://wwww.example.com" value="<?php echo set_value('website'); ?>">
				<small class="form-text text-muted">Please enter the valid URL of your website</small>
				<?php echo form_error('website'); ?>
			</div>


			<div class="form-group">
				<label>&nbsp <img src=<?=base_url("icons/whatsapp.svg"); ?>> &nbsp Social Media 1</label>
				
				<input type="url" name="socialmedia1" class="form-control" placeholder="e.g http://wwww.facebook.com/janfel" value="<?php echo set_value('socialmedia1'); ?>">
				<small class="form-text text-muted">Please enter the valid URL of your social media</small>
				<?php echo form_error('socialmedia1'); ?>
			</div>

	
			<div class="form-group">
				<label>&nbsp <img src=<?=base_url("icons/twitter.svg"); ?>>&nbsp Social Media 2</label>
				
				<input type="url" name="socialmedia2"  class="form-control" placeholder="e.g http://wwww.twitter.com" value="<?php echo set_value('socialmedia2'); ?>">
				<small class="form-text text-muted">Please enter the valid URL of your social media<</small>
				<?php echo form_error('socialmedia2'); ?>
			</div>
	<h5>Highest Educatonal Attainment</h5>

<div class="row">
<div class="col-sm">

	<div class="form-group">
					<p>
					<label for="Degree"> Degree </label>
					
					<input type="text" name="degree" id="Degree" class="form-control" placeholder="e.g. BSA, MS Biology, PhD " value="<?php echo set_value('degree'); ?>">
					<small class="form-text text-muted">Please enter your highest degree earned</small>
					<?php echo form_error('degree'); ?>
					</p>
				</div>
	</div>
	<div class="col-sm">			
	<div class="form-group">
					<p>
					<label for="Specialization:"> Specialization: </label>
					
					<input type="text" name="specialization" id="Specialization:" class="form-control" placeholder="e.g.Horticulure, Genetics, Divinity" value="<?php echo set_value('specialization'); ?>">
					<small class="form-text text-muted">Please enter here your specialization</small>
					<?php echo form_error('specialization'); ?>
					</p>
				</div>
	</div>
	</div>	

<div class="row">
<div class="col-sm">			
		
<div class="form-group">
					<p>
					<label for="University"> Educational Institution </label>
					
					<input type="text" name="university" id="University" class="form-control" placeholder="e.g. UPLB, ADMU, DSLU, AUP" value="<?php echo set_value('university'); ?>">
					<small class="form-text text-muted">Please enter the name of school/college/unversity where your earned your degree</small>
					<?php echo form_error('university'); ?>
					</p>
				</div>
</div>
<div class="col-sm">				
<div class="form-group">
					<p>
					<label for="Year_graduated"> Year Graduated </label>
					
					<input type="date" name="year_graduated" id="Year_graduated" class="form-control" placeholder="e.g. 1984, 2001	" value="<?php echo set_value('year_graduated'); ?>" >
					<small class="form-text text-muted">Please the graduaton date of your degree</small>
					<?php echo form_error('year_graduated'); ?>
					</p>
</div>
</div>
</div>

	<h5 class="mt-2">Professional Identity Card Details</h5>
	<hr>
<div class="row">
<div class="col-sm">

	<div class="form-group">
		<label>Registration Number*</label>
		<input type="text" name="registration_no" class="form-control" placeholder="1234567" required="true" value="<?php echo set_value('registration_no'); ?>">
		<small class="form-text text-muted">Please enter  Registration Number of you Professional Idenfication Card </small>
		<?php echo form_error('registration_no'); ?>
	</div>
</div>
<div class="col-sm">
		
			<div class="form-group">
			<label>Registration Date*</label>
			<input type="date" name="registration_date" class="form-control" value="<?php echo set_value('registration_date'); ?>" required="true">
			<small class="form-text text-muted">Please enter the date of registration</small>
		</div>
</div>
<div class="col-sm">

			<div class="form-group">
			<label>Valid until*</label>
			<input type="date" name="valid_until" class="form-control" value="<?php echo set_value('valid_until'); ?>" required="true">
			<small class="form-text text-muted">Please enter the date of expiration</small>
		</div>
</div>		


<hr>

<button type="submit" class="btn btn-primary btn-block mt-2 mb-3">Next -> </button>



</fieldset>
</form>
<center>
<small class="form-text text-muted">2 of 8  Steps</small>
<progress value="2" max="8" class="mb-3"></progress>
</center>
</div>





<script type="text/javascript">
	$(document).ready(function(){
		$('#chaps').load('http://localhost/dj/chapters/getChapterNames');
	});
</script>