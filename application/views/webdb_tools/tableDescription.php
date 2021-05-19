<div class="container-fluid">
<fieldset>
<legend>Form / Table Creator</legend>	
	<?=form_open(base_url('webdb_tools/creator'), 'target=_blank'); ?>
	<table>
	<tr>
	<td>
	<div class="form-group mt-3">
		<button type="submit" class="btn btn-success btn-block">Create</button>
	</td>	
	<td>
		<div class="form-group">
				<div class="custom-control custom-radio">
					 <input type="radio" name="whichis" id="Form" class="custon-control-input" value="form"> <br>
					<label for="Form" >Form</label>
				</div>
		</div>
	</td>
	<td>
		<div class="form-group">
				<div class="custom-control custom-radio">
					 <input type="radio" name="whichis" id="Table" class="custon-control-input" value="table"> <br>
					<label for="Table" >Table</label>
				</div>
		</div>
	</td>
		</tr>
		</table>
<table class="table table-hover table-striped table-sm">
<thead class=”thead-dark”>
	<th>Field</th>
	<th>Data Type</th>
	<th>Action</th>
</thead>	
<?php
foreach ($table as $field => $value) {
?>	
	<tr>
		<td><?=$field ?></td>
		<td><?=$value ?></td>
		<td>
			<center>
			<div class="form-group">
				<div class="custom-control custom-checkbox">
					 <input type="checkbox" name="<?=$field?>" id="<?=$field?>" class="custon-control-input" 
					 value="<?=$value?>">
					<label for="<?=$field?>" >Include</label>
				</div>
				
			</div>
			</center>
		</div>
		</td>
	</tr>
<?php
}
 ?>
 </table>	
</form>
</fieldset>	
 </div>