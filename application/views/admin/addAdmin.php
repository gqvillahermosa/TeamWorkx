<?php $this->load->helper('form');?>
<div class="container-fluid">
	<?=form_fieldset('Add Administrator');?>
	<?=form_open('chapter_officer/manageAdmin/'.$this->session->userdata('chapter'), 'id="addAdmin"') ?>
		<?=form_hidden('task', 'add'); ?>
		<?=form_dropdown('member', $data, 'id=member'); ?><small class="form-text text-muted">Click on the list and choose an administrator. Then click Add to submit</small><br>

		<button class="btn btn-warning btn-block" >Add</button>
		
	<?=form_fieldset_close();?>
	</form>
</div>