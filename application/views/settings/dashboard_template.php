
<div class="container">
<h3>Control Panel</h3>
<hr>

<h4>Login</h4>

<div class="row" id="x">
	<div class="col-sm bg-light">
		<label id="UpdateTitle">Title</label><div id=></div>
			<div id="name-comp">
			<input type="text" id="title" name="title" class="form-control mb-2"  value='<?=$Title ?>' disabled='true'><button onclick="changeTitle()"  id="submit" class="btn btn-warning" >Change</button>
			<small  class="form-text text-muted">The Text at the active tab of browser
			</small>
		</div>
	</div>

	<div class="col-sm bg-light">
		<label id="UpdateSlogan">Slogan</label>
		<input type="text" id="slogan" name="slogon" class="form-control mb-2" placeholder="" value='<?=$Slogan ?>' disabled='true'><button onclick="changeSlogan()" class="btn btn-warning ">Change</button>
		<small class="form-text text-muted">The Text at the active tab of browser
		</small>
	</div>

	<div class="col-sm bg-light">
		<Label>Logo</Label><br>
		<center>
		<img src=<?=base_url('/logo/logo.png')?> >
		</center>
		<?php echo form_open_multipart('upload/do_upload');?>

		<input type="file" name="userfile" size="20" class="form-control mb-2" />

		<input type="submit" value="upload" class="btn btn-info btn-block" />

		</form>

	</div>







</div>
<script type="text/javascript">
	function changeTitle(){
		//const input_text = document.getElementById('title');
		var $org_name = prompt('Enter New Name');
		$('#title').val($org_name);
		$newName = $('#title').val();
		$("#UpdateTitle").load("control/changeTitle", {title: $newName});
	}
	function changeSlogan(){
		//const input_text = document.getElementById('title');
		var $slogon = prompt('Enter New Slogan');
		$('#slogan').val($slogon);
		$newSlogan = $('#slogan').val();
		$("#UpdateSlogan").load("control/changeSlogan", {slogan: $newSlogan});
	}
</script>


