<div class="container">
<h3>Home</h3>
<hr>

<div class="row bg-light">
	<div class="col-sm">	
		<?php 
			$icon = '<img src='.base_url("icons/person.svg").'>';
			$link = base_url('member');
			//$class = 'class="btn btn-success"';
			echo anchor($link,$icon);
	?> <strong>Members</strong>
	</div>
	<div class="col-sm">
	
	<?php 
		$icon = '<img src='.base_url("icons/people.svg").'>';
		$link = base_url('chapters');
		//$class = 'class="btn btn-success"';
		echo anchor($link,$icon);
	?><strong> Chapters</strong>
		<p class="lead">Total:<?=$this->chapter->count();?></p>
	</div>
	<div class="col-sm">
		<img src=<?=base_url("icons/cash.svg"); ?>>
		<strong>Fees</strong>
	</div>
	
</div>
<div class="row">
	<div class="col-sm">
		<h4>Announcement</h4>
	</div>
	<div class="col-sm">
		<?=$this->calendar->generate(); ?>
	</div>
</div>

</div>