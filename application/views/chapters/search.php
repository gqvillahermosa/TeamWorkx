<div class="container">
<h3>Chapters Found</h3> 
<table class="table table-striped table-hover">
<thead><tr><th>Chapter</th><th>Action</th></tr></thead>
<tbody>
<?php
 $chapter = 	$this->input->post('chapter'); 
 //clearn
 $chapter = $this->security->xss_clean($chapter);
 $chapter = htmlspecialchars($chapter);
 
$chapter_result = $this->chapter->search($chapter);
//print_r($chapter_result->result());
if($chapter_result->num_rows() > 0 )
{

	foreach ($chapter_result->result() as $row)
	{
        ?>
        <tr>
                <td><?=anchor('/chapters/view/'.$row->SeqID, $row->Name); ?></td>
        	<td><?=anchor('/chapters/updateForm/'.$row->SeqID,'Update', 'class="btn btn-warning"'); ?></td>
        	<td><?=anchor('/chapters/delete/'.$row->SeqID,'Delete', 'class="btn btn-danger"'); ?></td>
        </tr>
        
        <?php 
	}	
} else 
{
	echo('<div class="alert alert-warning"> No Records found </div>');
}//else

?>
</tbody>
</table>
</div>
<div class="container"><a href="<?=base_url('chapters'); ?>" class="btn btn-primary btn-block">Back</a></div>