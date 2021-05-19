<div class="container mt-1" >
	<ul class="nav nav-pills">
		<li class="nav-items">
			<a href="#members"  <?php if($active=='member'){ echo 'class="nav-link active"';}else{echo 'class="nav-link "';} ?>  data-toggle="tab">Members</a>
		</li>
		<li class="nav-items">
			<a href="#chapters"  <?php if($active=='chapter'){ echo 'class="nav-link active"';}else{echo 'class="nav-link "';} ?> data-toggle="tab">Chapters</a>
		</li>
		<li class="nav-items">
			<a href="#fees" <?php if($active=='fee'){ echo 'class="nav-link active"';}else{echo 'class="nav-link "';} ?> data-toggle="tab">Fees</a>
		</li>
	</ul>
</div>

<hr><div class="tab-content">
		<div <?php if($active=='member'){ echo 'class="tab-pane fade active show container"';}else{echo 'class="tab-pane fade container""';} ?> id="members" >
		<div class="container">
			<div>
				<?php 
					echo $_SESSION['chapter']; 
					$this->session->set_flashdata('chapter', 'Ready');
				?>
			</div>
			<?php form_open('hq/searchChapter');?> 
				<div class="form-group">
				<table class="table">	
					<tr>
						<td>
							<a href="<?php echo base_url('hq/addChapter'); ?>" class="btn btn-primary btn-block">+Add</a>			
						</td>
						<td>	
							<button type="submit" class="btn btn-info form-control">Find</button>
						</td>
						<td>
							<input type="text" name="chapter" class="col-lg-6">	
						</td>
							
					
					</tr>
				</table>
				</div>
			</form>

			<?php echo base_url('hq/addChapter'); ?>

				<div class="container">
					<h5>New Members</h5>	
						<?php
						$template = array('table_open' => '<table class="table table-striped table-hover">' );
						$this->table->set_template($template);
						echo $this->table->generate($this->chapter->getNewChapters());
						?>
				</div>
		</div>
		</div>

	<div <?php if($active=='chapter'){ echo 'class="tab-pane fade active show container"';}else{echo 'class="tab-pane fade container""';} ?> id="chapters" >

		<div class="container">
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
							<a href="addChapter" class="btn btn-primary btn-block">+Add</a>			
						</td>
						<td>	
							<button type="submit" class="btn btn-info form-control">Find</button>
						</td>
						<td>
							<input type="text" name="chapter" class="col-lg-6">	
						</td>
							
					
					</tr>
				</table>
				</div>
			</form>

		
				<div class="container">
					<h5>New Chapters</h5>	
						<?php
						$template = array('table_open' => '<table class="table table-striped table-hover">' );
						$this->table->set_template($template);
						echo $this->table->generate($this->chapter->getNewChapters());
						?>
				</div>
		</div>
	</div>

	<div <?php if($active=='fee'){ echo 'class="tab-pane fade active show container"';}else{echo 'class="tab-pane fade container""';} ?> id="fees" >
		<h5>Fees</h5>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>


</div>