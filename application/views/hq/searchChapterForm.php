<div class="container">
	<h3>Manage Chapter</h3>
	<div>
	<?php 
	echo $_SESSION['chapter']; 
	$this->session->set_flashdata('chapter', 'Ready');
	?>
	</div>
	<form id="searchChapter" action="searchChapter" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<table class="table">	
				<tr>
					<td>
						<?=anchor('hq/addChapter','+Add', 'title="A New Chapter" class="btn btn-primary btn-block"' ) ?>
						
					</td>
					<td>	
						<button type="submit" class="btn btn-info form-control">Find</button>
					</td>
					<td>
						<input type="text" name="chapter" class="col-lg-6">	
					</td>
						
		</div>
				</tr>
			</table>

	</form>
<button type=”button” class='btn btn-white'>Light</button>
<button type=”button” class='btn btn-primary'>primary</button>
<button type=”button” class='btn btn-secondary'>secondary</button>
<button type=”button” class='btn btn-success'>success</button>
<button type=”button” class='btn btn-info'>info</button>
<button type=”button” class='btn btn-dark'>dark</button>
<button type=”button” class='btn btn-warning'>warning</button>
<button type=”button” class='btn btn-danger'>danger</button>
<img src=<?=base_url("icons/eye.svg") ?> >
<img src="icons/pen.svg">
<img src="icons/eraser.svg">

</div>
<section id="mainview">


	</section>
</section>
