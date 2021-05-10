<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	//print_r($verifiedApplicants);



	
?>


<table class="table table-striped table-hover mt-5">
		<thead><tr><th>Name</th><th>Action</th><th> </th></tr></thead>
		<tbody>
<?php
		
		foreach ($verifiedApplicants as $key => $row)
		{
?>			
	     <tr>
	     	<td><?=anchor(base_url('registration/viewApplicant/'.$row->SeqNo), $row->Firstname.' '.$row->Surname, 'class="btn btn-info" target="mainview" ') ?>  </td>
	       <td><?=anchor(base_url('registration/approveApplicant/'.$row->SeqNo),'Aprove', 'class="btn btn-warning" 
	       		data-target="#rejectApplicant" ') ?></td>
	      <td><?=anchor(base_url('registration/rejectApplicant/'.$row->SeqNo),'Reject', 'class="btn btn-danger"') ?></td>
	       </tr>
<?php		}

		echo '</tbody></table>';
		echo 'Applicants found: '.count($verifiedApplicants);
?>

			
