<style type="text/css">
	fieldset {
		display: block;
		background-color: #eeeeee;
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

			.form-signin {
		  width: 100%;
		  max-width:500px;
		  padding: 15px;
		  margin: auto;
		}
		
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
</style>
<div class="container mt-3">
<!--
<form action="http://localhost/dj/administrator/verify" method="post">
-->
<?=form_open(base_url('administrator/verify'),'class="form-signin"'); ?>
<fieldset>

<legend class="mt-5 mb-2">

	&nbsp<img src=<?=base_url("icons/login.svg"); ?>>&nbsp Welcome to PAA System</legend>

<center>
	<!-- <em class="mb-2">Philippine Association of Agriculturists, Inc.</em> -->

	<?php 

	$image_properties = array(
        'src'   => base_url('image/5F8B.tmp.jpg'),
        'alt'   => 'PAA Logo',
       // 'class' => 'post_images',
        'width' => '190',
        'height'=> '152',
        'border' => '2',
        'title' => 'PAA Logo'
       
);

	echo img($image_properties);

//	echo img(base_url('image/5F8B.tmp.jpg'),'alt="PAA Logo" width="190" height="152" border="2"' )


	?>
</center>
<section class="m-1">
<h2 class="text-center"></h2>
<label>Username</label>
<input type="text" name="username" class="form-control" placeholder="Enter PIC">
<small class="form-text text-muted">Please your valid PIC as Username</small>
<br>
<label>Password</label>
<input type="password" name="password" class="form-control" value="">
<small class="form-text text-muted">Enter your password here</small>
<br>
<div class="form-group">
<button type="submit" name="upload" class="form-control btn btn-primary ">Login</button>
</div>
</div>
</section>
</fieldset>
</form>
</div>