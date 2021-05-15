<!-- Review all the applicant profile, at the end option to accept, reject or go back to mainview -->
<!-- resuse personalprofice page wth input disable -->
<head>
  <title>Personal Profile of Applicant</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href=<?=base_url('css/bootstrap.min.css') ?>>
  <script src=<?=base_url('js/jquery-3.6.0.min.js') ?>></script>
  <script src=<?=base_url('js/bootstrap.min.js') ?>></script>
  <script src=<?=base_url('js/popper.min.js') ?>></script>
</head>
<style type="text/css">
	fieldset {
		display: block;
		background-color: white;
		margin-left: 2px;
		margin-right: 2px;
		padding-left: 1em;
		padding-right: 1em;
		border: 2px groove;	 
		}
	legend{
		background-color:black;
		color:white;
		padding: 5px,10px 
	}
</style>	

<?php  
 $this->load->model('applicants');
$profile = $this->applicants->getSingle($id);
//print_r($profile);
?>


<div class="container-fluid">
<fieldset>
<legend>&nbsp <img src=<?=base_url("icons/profile.svg"); ?>> Applicant Profile</legend>
	

<div class="row bg-light">
	
		<div class="col-sm-8">	
			
			<img src=<?=base_url("icons/person-badge-fill.svg"); ?>> 
			<p>
			Name: <strong> <?=$profile->Salutation.' '.$profile->Firstname.' '.$profile->Salutation.' '.$profile->Surname ?></strong>
			<br>
				Gender: <strong> <?php if($profile->Gender == 'M'){ echo "Male";} else {echo "Female";}  ?> </strong>
			<br>
				Birthdate: <strong> <?=$profile->Birthdate ?> </strong>
			<br>
				Civil Status: 
				<strong> 
				<?php 
					switch ($profile->Civil_Status) {
						case 'S':
							echo 'Single';
							break;
						case 'M':
							echo 'Married';
							break;
						case 'W':
							echo 'Widow/er';
							break;	
						case 'D':
							echo 'Divorse';
							break;
						default:
							echo 'Unknown';
							break;
					}
				?> 
				</strong>	

			</p>	
		</div>

	<center>
	<div class="col-sm">	
		<div class=”card”>
			<img class=”card-img-top” 
				src= <?=base_url('id_photo/'.$profile->Photo) ?> 
				alt=”Card image cap”
				height="720"
				width="1080"
				> <!--Adjust image size -->
		<div class=”card-body”>ID Photo</div>
		</div>
	</div>
	</center>
</div>	

<h5>Addresses</h5>
<hr>

<div class="row bg-light">
	<div class="col-sm">	
		<label><img src=<?=base_url("icons/envelope-open.svg"); ?>> Office</label><br>
		 <strong><?=$profile->Office ?></strong><br>
		 <img src=<?=base_url("icons/telephone-fill.svg"); ?>> 
		 <?php 
						if($profile->Office_landline){// if no number, value is null
							echo '<a href=tel://'.$profile->Office_landline.'>'.$profile->Office_landline.'</a>'; 
							} 
							else
								{
							echo "n/a";
						} 
					?>
	</div>


	<div class="col-sm">
		<label><img src=<?=base_url("icons/house-fill.svg"); ?>> Home</label><br>
		 <strong><?=$profile->Home ?></strong><br>
		 <img src=<?=base_url("icons/telephone.svg"); ?>> 
		 <?php 
						if($profile->Home_landline){// if no number, value is null
							echo '<a href=tel://'.$profile->Home_landline.'>'.$profile->Home_landline.'</a>'; 
							} 
							else
								{
							echo 'n/a';
						} 
					?>
	</div>
</div>
<h5>Contact Information</h5>
<hr>
<div class="row bg-light">
	<div class="col-sm">
		<strong> <img src=<?=base_url("icons/phone-fill.svg"); ?>> Mobile</strong><br>
		<?php 
						if($profile->Mobile){// if no mobile, value is null
							echo '<a href=tel://'.$profile->Mobile.'>'.$profile->Mobile.'</a>'; 
							} 
							else
								{
							echo "n/a";
						} 
					?>
	</div>
	<div class="col-sm">
		<strong>@ Email</strong><br>
		<?php 
						if($profile->Email){// if no email, value is null
							echo '<a href=mailto://'.$profile->Email.'>'.$profile->Email.'</a>'; 
							} 
							else
								{
							echo "n/a";
						} 
					?>
	</div>
	<div class="col-sm">
		
	</div>
</div>

	<div class="row bg-light">
		<div class="col-sm">
			<strong><img src=<?=base_url("icons/mouse2.svg"); ?>> Website</strong><br>
			<?php 
						if($profile->Website){// if no website, value is null
							echo '<a href=http://'.$profile->Website.' target="_blank">'.$profile->Website.'</a>'; 
							} 
							else
								{
							echo "n/a";
						} 
					?>
		</div>
		<div class="col-sm">
			<strong><img src=<?=base_url("icons/whatsapp.svg"); ?>> Social Media</strong><br>
			<?php 
						if($profile->Socialmedia1){// if no website, value is null
							echo '<a href=http://'.$profile->Socialmedia1.' target="_blank">'.$profile->Socialmedia1.'</a>'; 
							} 
							else
								{
							echo "n/a";
						} 
					?>
		</div>
		<div class="col-sm">
			<strong><img src=<?=base_url("icons/twitter.svg"); ?>> Social Media</strong><br>
			<?php 
						if($profile->Socialmedia2){// if no website, value is null
							echo '<a href=http://'.$profile->Socialmedia2.' target="_blank">'.$profile->Socialmedia2.'</a>'; 
							} 
							else
								{
							echo "n/a";
						} 
					?>
			
		</div>
		
	</div>



<h5>Registration Information</h5>
<hr>
	<div class="row mb-3">
		<div class="col-sm">
			Registration Number: <strong><?=$profile->Registration_no ?></strong>
		</div>	
		<div class="col-sm">
			Registration Date: <strong><?=$profile->Registration_date ?></strong>
		</div>	
		<div class="col-sm">
			Valid Until: <strong><?=$profile->Valid_until ?></strong>
		</div>	
	</div>
	<center>
	<div class=”card”>
			<img class=”card-img-top” 
			src= <?=base_url('pic_photo/'.$profile->PIC_photo) ?> 
			alt=”Card image cap”
			height="720"
			width="1080"
			><!--Adjust image size -->
		<div class=”card-body”>Professional ID</div>
		</div>
	</center>

	<div>
		Sponsor: <?=anchor(base_url("member/viewMember/$profile->Sponsor_id"),$profile->Sponsor_id) ?>
		<!--Link to view sponsor profile -->
		&nbsp Verified by:<?php 
					if($profile->Verified){
						echo(anchor(base_url("member/viewMember/$profile->Verified"),$profile->Verified));
					}else{
						echo "n/a";
					}
					
				  ?>
	</div>

<hr>
<!-- <div class="container mb-3 mt-2 bg-light ">
	<center>
		<emp class="mb-2">Action</emp><br>
		<?=anchor(base_url('chapter_officer/member'), 'Back', 'class="btn btn-primary"') ?>
		<?=anchor(base_url('registration/verifyApplicant/'.$profile->SeqNo), 'Verify', 'class="btn btn-warning"') ?>
		<?=anchor(base_url('registration/rejectApplicant/'.$profile->SeqNo), 'Reject', 'class="btn btn-danger"') ?>
		<br>
		<a href="#top" class="btn btn-outline-primary mt-5">Back to Top</a>
	</center>
</div>	 -->


</fieldset>
</div>
