<hr>
<div class="container-fluid">
<h5>Current Administrator/s</h5>
Total: <?=count($admin['data']);?>
<table class="table table-striped table-hover">
<head>
	<thead>
		<th>
			ID
		</th>
		<th>
			Name
		</th>
		<th>
			Action
		</th>
	</thead>
</head>
<?php foreach ($admin['data'] as $key => $value): ?> 
	
	<tr>
	<td><?=$key ?></td>
	<td><?=$value ?></td>
	<td> <button class="btn btn-info">View</button> <button class="btn btn-danger">Remove</button> </td>
	</td>
<?php endforeach; ?>
</table>
</div>