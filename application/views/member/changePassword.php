
<!-- saved from url=(0039)http://localhost/dj/webdb_tools/creator -->

  <title>Phlippines Association of Agriculturaist, Inc.</title>
</head>
<body>
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
    .image{
      border-style: inset;
      border-width: thin;
    }
</style> 
<!-- Create Form call from Webdb_tools/creator -->
<div class="container">
	<fieldset class="form-signin">	
		<legend>&nbsp Change Password</legend>
		<?=form_open(base_url('member/changePassword')); ?>
			<p>Password must not less than 8 characters and must contain letter, numbers and symbols.</p>
					
				<div class="form-group">
					<p>
					<label for="password"> password </label>
					<input type="password" name="password" id="password" class="form-control" placeholder="New Password" minlength="8">
					<small class="form-text text-muted">Enter new password here</small>
					</p>
				</div>

				<div class="form-group">
					<p>
					<label for="password"> confirm password </label>
					<input type="password" name="passconf" id="passconf" class="form-control" placeholder="Confirm New Password" minlength="8">
					<small class="form-text text-muted">Enter new password here to confirm</small>
					</p>
				</div>

			<button type="submit" name="submit" id="submit" class="form-control btn btn-primary mt-3 mb-3">Submit</button>
		</div>
	</form>		
	</fieldset>	
</div>
		
</body></html>