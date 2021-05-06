<div class="container-fluid mt-2 bg-dark ">
<table class=" table bg-dark">
<tbody>
	<tr>
		<td align='left' nowrap="true">
			<?php 
			$icon = '<img src="'.base_url("/icons/home.svg").'"';
			$link = base_url('home');
			echo anchor($link,$icon);
			?>&nbsp &nbsp
			<?=anchor('member', 'Members', 'class="btn btn-outline-light btn-sm"') ?>&nbsp
			<?=anchor('chapters', 'Chapters', 'class="btn btn-outline-light btn-sm"') ?>&nbsp
			<?=anchor('fees', ' Fees ', 'class="btn btn-outline-light btn-sm"') ?>
		</td>

	<td align='right' nowrap="true">
			<a name="top"></a>
			<?php 
			$icon = '<img src="'.base_url("/icons/announce.svg").'"';
			$link = base_url('announce');
			echo anchor($link,$icon);
			?>
			&nbsp
			<?php 
			$icon = '<img src="'.base_url("/icons/help.svg").'"';
			$link = base_url('help');
			echo anchor($link,$icon);
			?>
			&nbsp
			<?php 
			$icon = '<img src="'.base_url("/icons/settings.svg").'"';
			$link = base_url('control');
			echo anchor($link,$icon);
			?>&nbsp
			 <?=anchor('administrator/logout', 'Logout', 'class="btn btn-outline-warning btn-sm"') ?>
			 
		</td>
	</tr>
</tbody>		
</table>
</div>
