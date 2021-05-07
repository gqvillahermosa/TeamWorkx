<!--Gets the name of the the chapter,
queries the db for names and id,
renders the table with actions view, verified and reject -->
<?php
	//echo $chapter." is inside  showNewApplicants";

	//echo $chapter;
	//echo $status;
    
          
	$query = $this->applicants->getHeaders($chapter, $status);
	//print_r($query);
	//print_r($query->result());

/*	foreach ($query->result() as $row)
{
        echo $row->title;
        echo $row->name;
        echo $row->body;
}*/

?>
		<table class="table table-striped table-hover mt-5">
		<thead><tr><th>Name</th><th>Action</th><th> </th></tr></thead>
		<tbody>
<?php
		foreach ($query->result() as $row)
		{
?>			
	     <tr>
	     	<td><?=anchor(base_url('registration/viewApplicant/'.$row->SeqNo), $row->Firstname.' '.$row->Surname, 'class="btn btn-info" title="See Profile"' ) ?>  </td>
	       <td><?=anchor(base_url('registration/verifyApplicant/'.$row->SeqNo),'Verified', 'class="btn btn-warning" 
	       		data-target="#rejectApplicant" ') ?></td>
	      <td><?=anchor(base_url('registration/rejectApplicant/'.$row->SeqNo),'Reject', 'class="btn btn-danger"') ?></td>
	       </tr>
<?php		}
		echo '</tbody></table>';
?>