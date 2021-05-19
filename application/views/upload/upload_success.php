<body>
<div class="container">
<div class="card">
	<div class="card-body bg-light">
		<h3>ID Photo Uploaded</h3>
			<img class="card-img-top mb-5" align="center" border="2" height="400" width="640" border="2" src=<?=base_url('id_photo/').$this->upload->data('file_name') ?> />
			<p>Click <strong>Next</strong> to upload Photo of Professional ID</p>
			<?= anchor('upload/showPIC', 'Next', 'class="btn btn-primary btn-block"')?>
	</div>
	
</div>	
</div>

<center>
<small class="form-text text-muted">4 of 7 Steps</small>
<progress value="4" max="7" class="mb-3"></progress>
</center>

</body>
</html>