<?php $this->load->helper('form');?>
<div class="container">
	<?=form_fieldset('Add Administrator');?>
	<?=form_open('admin/addAdmin', 'id="addAdmin"') ?>
		<?=form_dropdown('member', $data, 'id=member'); ?><button class="btn btn-warning">Add</button>
	<?=form_fieldset_close();?>
	</form>
	

</div>