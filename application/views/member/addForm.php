<div class="container">
<h4>+Add New Member</h4>
<hr>

<?=form_open('member/addMember');?>
<div class="form-group">
<label>ID*</label>
<?php echo form_error('id'); ?>
<input type="text" name="id" class="form-control" placeholder="PRC ID Number" value="<?php echo set_value('id'); ?>">
<small class="form-text text-muted">Please enter  the PRC ID Number</small>

<div class="row">
	<div class="col-sm">
		<div class="form-group">
		<label>Firstname*</label>
		<?php echo form_error('firstname'); ?>
		<input type="text" name="firstname" class="form-control" placeholder="e.g Juan, Mary" value="<?php echo set_value('firstname'); ?>">
		<small class="form-text text-muted">Please enter  First or Given Name</small>
		</div>
	</div>

	<div class="col-sm">
		<div class="form-group">
		<label>Middlename</label>
		<?php echo form_error('middlename'); ?>
		<input type="text" name="middlename" class="form-control" value="<?php echo set_value('firstname'); ?>">
		<small class="form-text text-muted">Please enter  Middle Name</small>
		</div>
	</div>

	<div class="col-sm">
		<div class="form-group">
		<label>Surname</label>
		<?php echo form_error('surname'); ?>
		<input type="text" name="surname" class="form-control" placeholder="del Cruz, Poppins" value="<?php echo set_value('surname'); ?>">
		<small class="form-text text-muted">Please enter  Surname</small>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-sm">
		<div class="form-group">
		<label>Gender</label>
		<div class="custom-control custom-radio">
			<input type="radio" id="customRadio1" name="gender" value="male" class="custom-control-input" checked="" >
			<label class="custom-control-label" for="customRadio1">Male</label>
		</div>
		<div class="custom-control custom-radio">	
			<input type="radio" id="customRadio2" name="gender" value="female" class="custom-control-input" checked="" >
			<label class="custom-control-label" for="customRadio1">Female</label>
		</div>
		</div>
	</div>

	<div class="col-sm">
		<div class="form-group">
		<label>Birthdate</label>
		<?php echo form_error('birthdate'); ?>
		<input type="date" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
		<small class="form-text text-muted">Please enter the date of birth</small>
		</div>
	</div>
		<div class="col-sm">
		<div class="form-group">
		<label>Civil Status</label>
		<?php echo form_error('birthdate'); ?>
		<select>
			<option value="s">Single</option>
			<option value="m">Married</option>
			<option value="w">Widow/er</option>
		</select>
		<small class="form-text text-muted">Choose civil status</small>
		</div>
	</div>
</div>

<div class="form-group">
<label>Membership Status</label>
<?php echo form_error('birthdate'); ?>
<input type="text" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
<small class="form-text text-muted">Please enter the date of birth</small>
</div>

<div class="form-group">
<label>Email</label>
<?php echo form_error('birthdate'); ?>
<input type="email" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
<small class="form-text text-muted">Please enter the date of birth</small>
</div>

<div class="form-group">
<label>Photo</label>
<?php echo form_error('birthdate'); ?>
<input type="file" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
<small class="form-text text-muted">Please enter the date of birth</small>
</div>

<div class="form-group">
<label>Photo of PRC ID Card</label>
<?php echo form_error('birthdate'); ?>
<input type="file" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
<small class="form-text text-muted">Please enter the date of birth</small>
</div>

<div class="form-group">
<label>Password</label>
<?php echo form_error('birthdate'); ?>
<input type="password" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
<small class="form-text text-muted">Please enter the date of birth</small>
</div>

<div class="form-group">
<label>Remarks</label>
<?php echo form_error('birthdate'); ?>
<input type="date" name="birthdate" class="form-control" value=" <?php echo set_value('surname'); ?>">
<small class="form-text text-muted">Please enter the date of birth</small>
</div>

<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
</div>