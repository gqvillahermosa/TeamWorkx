<!-- Create Form call from Webdb_tools/creator -->
<div class='container'>
	<fieldset>	
		<legend>Name of Form</legend>
		<?=form_open('#')?>

		<?php 
			//print_r($_POST);
			foreach ($_POST as $key => $value) {
		?>
			<?php 
				if( fnmatch("int*", $value)){
			?>
				<div class="form-group">
					<p>
					<label for="<?=$key?>"> <?=$key?> </label>
					<input type="number" name="<?=$key?>" id="<?=$key?>" 
					class="form-control" placeholder="1234567890">
					<small class="form-text text-muted">Enter instructions here</small>
					</p>
				</div>
			<?php
				}//if int
			?>

			<?php 
				if( fnmatch("*char*", $value)){
			?>
				<div class="form-group">
					<p>
					<label for="<?=$key?>"> <?=$key?> </label>
					<input type="text" name="<?=$key?>" id="<?=$key?>"
					class="form-control" placeholder="abcde">
					<small class="form-text text-muted">Enter instructions here</small>
					</p>
				</div>
			<?php
				}//if var/char
			?>


			<?php 
				if( fnmatch("*date*", $value)){
			?>
				<div class="form-group">
					<p>
					<label for="<?=$key?>"> <?=$key?> </label>
					<input type="date" name="<?=$key?>" id="<?=$key?>"class="form-control">
					<small class="form-text text-muted">Enter instructions here</small>
					</p>
				</div>
			<?php
				}//if var/char
			?>


			<?php 
				if(fnmatch("*text*", $value)){
			?>
				<div class="form-group0">
					<label for="<?=$key?>"> <?=$key?> </label>
					<textarea id="<?=$key?>" class="form-control">TEXT HERE</textarea>
					<small class="form-text text-muted">Enter instructions here</small>
				</div>
			<?php
				}//if text
			?>

		<?php		
		}//foreach
		?>
		<div class="form-group">
			<button type="submit" name="submit" id="submit" class="form-control btn btn-primary mt-3" >Submit</button>
		</div>
	</form>		
	</fieldset>	
</div>
		
