
<div class="container">
	<h3>Chapter </h3>
<div class="card mb-3">
	<div class="card-header"> Contact Information</div>
	<div class="card-body">
		<h4>{Name}</h4>
		<p>{$Address}</p>

		<p><img src=<?=base_url("icons/telephone.svg"); ?>><a href='tel://{Landline}'> {Landline}</a></p>


		<p><img src=<?=base_url("icons/phone.svg"); ?>><a href='tel://{Mobile}'>{Mobile}</a></p>
		<p><img src=<?=base_url("icons/mailbox.svg");?>> &nbsp <a href='mailto:{Email}'>{Email}</p>
		<p><img src=<?=base_url("icons/mouse2.svg");?>><a href='{Website}'> &nbsp{Website}</a></p>
		
	</div>
	<div class="card-footer">
		<a href="<?=base_url('chapters'); ?>" class="btn btn-primary btn-block">Back</a>
	</div>
</div>
</div>