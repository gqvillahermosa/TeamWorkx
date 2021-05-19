<div class="container">
<h3>Chapters</h3>


<table class="table">
	<tr>
		<td>
		<?=anchor('chapters/addForm', '+Add', 'class="btn btn-success btn-block"'); ?>
		</td>
		<?=form_open('chapters/search')?>
		<td>
			<button type="submit" class="btn btn-info form-control">Search</button> 
		</td>	
		<td>
			<input type="text" name="chapter" class="form-control" placeholder="e.g Laguna, Pasay">	
		</td>	
		</form>
	</tr>
</table>

<?php 
	echo $_SESSION['chapter']; 
	$this->session->set_flashdata('chapter', ' ');
?>
<hr>
<h4>New Chapters</h4>

<table class="table table-striped table-hover">
<thead><tr><th>Chapter</th><th>Address</th><th>Country</th></tr></thead>
<tbody>
{row}
	<tr><td>{Name}</td><td>{Address}</td><td>{Country}</td></tr>
{/row}
</tbody>
</table>
<hr>
</div>