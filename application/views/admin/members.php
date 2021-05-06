<!--view/chapter_officer/members.php-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo "inside Member";
?>
<h5>New Verified Applicants</h3>

<table class="table">
	<tr>
		<td>
		<?=anchor(base_url('registration/invite/12345'), '+Add', 'class="btn btn-success btn-block"'); ?>
		</td>
		<?=form_open('chapters/search')?>
		<td>
			<button type="submit" class="btn btn-secondary form-control">Search</button> 
		</td>	
		<td>
			<input type="text" name="chapter" class="form-control" placeholder="e.g Laguna, Pasay">	
		</td>	
		</form>
	</tr>
</table>





<div class="container-fluid">


	<div id="newApps"></div>
</div>	
	<script type="text/javascript">
		$('#newApps').load('http://localhost/dj/registration/showVerifiedApplicants');
		/*use php to create javascript, move to registration controller */
	</script>	