<div class="container">
<form id="addChapter" action="<?=base_url('chapters/addForm'); ?>" method="post" enctype="multipart/form-data">
<h3>+ Add Chapter</h3>
<hr>
<div class="form-group">
<label>Name*</label>
<?php echo form_error('name'); ?>
<input type="text" name="name" class="form-control" placeholder="Name of Chapter" value="<?php echo set_value('name'); ?>">
<small class="form-text text-muted">Please enter  the name of the chapter, only letters, number and spaces allowed</small>
<br>
</div>
<div class="form-group">
<label>Address*</label></br>
<?php echo form_error('address'); ?>
<textarea name="address" rows="5" class="form-control" placeholder="Building , Street, Barangay, Municipality/City, Province "><?php echo set_value('address'); ?></textarea></br>
<small class="form-text text-muted">Please enter  the address of the chapter</small>
<br>
</div>
<div class="form-group">
<label>Country*</label>
<select class="form-control" name="country">
	<option value="PHL" selected>Philippines</option>
	<option value="Others">Others</option>
</select>
<small class="form-text text-muted">Please select country of your address</small>
<br>
</div>
<div class="form-group">
<label>Landline</label>
<?php echo form_error('landline'); ?>
<input type="text" name="landline" class="form-control" placeholder="Telephone number" value="<?php echo set_value('landline'); ?>" >
<small class="form-text text-muted">Please enter  the  contact landline telephone number. Numbers only</small>
<br>
</div>
<div class="form-group">
<label>Mobile*</label>
<?php echo form_error('mobile'); ?>
<input type="text" name="mobile" class="form-control" placeholder="Cellphone number" value="<?php echo set_value('mobile'); ?>">
<small class="form-text text-muted">Please enter contact cellphone. Numbers only</small>
<br>
</div>
<div class="form-group">
<label>Email*</label>
<?php echo form_error('email'); ?>
<input type="email" name="email" class="form-control" placeholder="Your@Email.com>" value="<?php echo set_value('email'); ?>" >
<small class="form-text text-muted">Please enter the contact email</small>
<br>
</div>
<div class="form-group">
<label>Website</label>
<?php echo form_error('website'); ?>
<input type="text" name="website" class="form-control" placeholder="http://www.example.com" value="<?php echo set_value('website'); ?>"  >
<small class="form-text text-muted">Please enter  the URL of website</small>
<br>
</div>
<div class="form-group">
<label>Head*</label>
<?php echo form_error('head'); ?>
<input type="text" name="head" class="form-control" placeholder="PRC Number" value="<?php echo set_value('head'); ?>" >
<small class="form-text text-muted">Please enter the PRC Number of the chapter head</small>
<br>
</div>
<div class="form-group">
<label>Remark</label>
<?php echo form_error('remark'); ?>
<input type="text" name="remark" class="form-control" placeholder="Comments,etc" value="<?php echo set_value('remark'); ?>" >
<small class="form-text text-muted">Please enter  any additional information. Letter, numbers and spaces only</small>
<br>
</div>
<div class="form-group">
<button type="submit" name="submit" class="form-control btn btn-primary ">+ Add</button>
<small class="form-control form-text text-muted text-right">*required</small>
</div>
</div>
</form>
</div>
<br>
</div>
</form>
</div