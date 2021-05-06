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
</style>
<div class="container">
<!--
<form action="http://localhost/dj/administrator/verify" method="post">
-->
<?=form_open(base_url('administrator/verify')); ?>
<fieldset>
<legend class="mt-5">&nbsp<img src=<?=base_url("icons/login.svg"); ?>>&nbsp Welcome to Dojosys</legend>
<section class="m-5">
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