<div class="container">
<div class="card mb-3">
	<div class="card-header">&nbsp Chapter Contact Information</div>
	<div class="card-body">
		<h4><?=$Name ?></h4>
		<p><?=$Address ?></p>
		<p><img src=<?=base_url("icons/telephone.svg"); ?>><a href=<?='tel://'.$Landline; ?>> &nbsp <?=$Landline; ?></a></p>
		<p><img src=<?=base_url("icons/phone.svg"); ?>><a href=<?='tel://'.$Mobile; ?>> &nbsp <?=$Mobile; ?></a></p>
		<p><img src=<?=base_url("icons/mailbox.svg");?>> &nbsp <?=mailto($Email); ?></p>
		<p><img src=<?=base_url("icons/mouse2.svg");?>><a href=<?='http://'.$Website; ?>> &nbsp <?=$Website; ?></a></p>
		
	</div>
	<div class="card-footer">
		<a href="<?=base_url('hq/searchChapter'); ?>" class="btn btn-primary btn-block">Back</a>
	</div>
</div>
</div>