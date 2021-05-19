<div class="container">
	<form id="updateChapter" action="<?php echo base_url('chapters/update'); ?>" method="post" >
		<h3>Update Chapter Information</h3>
		<small class="form-text text-muted">Instructions: Edit the entries in this form and then click Update to save. </small>
		<hr>

		<input type="hidden" name="seqid" value="<?php echo $SeqID; ?>">
		<div class="form-group">
			<label>Name</label>
			<?php echo form_error('name'); ?>
			<input type="text" name="name" class="form-control" value="<?php echo $Name; ?>">

		</div>
		<div>
			<label>Address</label>
			<br>
			<textarea name="address" rows="5" class="form-control"><?php echo $Address; ?></textarea>
	
		</div>
		<div class="form-group">
			<label>Country</label>
			<select class="form-control" name="country">
				<option value="PHL" selected>Philippines</option>
				<option value="Others">Others</option>
			</select>

		</div>
		<div class="form-group">
			<label>Landline</label>
			<input type="text" name="landline" class="form-control" value="<?php echo $Landline; ?>" >
		</div>
		<div class="form-group">
			<label>Mobile/Cellphone</label>
			<input type="text" name="mobile" class="form-control" value="<?php echo $Mobile; ?>">
		</div>

		<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $Email; ?>" >
		</div>

		<div class="form-group">
		<label>Website</label>
		<input type="text" name="website" class="form-control"  value="<?php echo $Website; ?>"  >
		</div>

		<div class="form-group">
			<label>Head</label>
			<input type="text" name="head" class="form-control"  value="<?php echo $Head; ?>"  >
		</div>
		<div class="form-group">
		<label>Remark</label>
		<input type="text" name="remark" class="form-control" value="<?php echo $Remarks; ?>" >
		</div class="form-group">

		<label>Status</label>
		<div class="btn-group btn-group-toggle mb-5" data-toggle="button">
			<label class="btn btn-info">
				<input type="radio" name="Status" value="active" checked>
				Active
			</label>
			<label class="btn btn-secondary">
				<input type="radio" name="Status" value="inactive">
				Inactive
			</label>
			<label class="btn btn-danger">
				<input type="radio" name="Status" value="disband">
				Disband
			</label>
		
		</div>
		<hr>

		<div class="form-group">
		<button type="submit" name="submit" class="form-control btn btn-warning ">Update</button>
		</div>

	</form>
</div>
			
			