<?php snippet('header') ?>

<div id="sunglasses">
	<a href="<?= page('sunglasses')->url() ?>" data-target>
		<span><?= page('sunglasses')->title()->upper() ?><br>Series I</span>
	</a>
</div>

<?php snippet('featured-exhibition', array("item" => $exhibitions->first())) ?>

<?php //snippet('archive') ?>

<?php snippet('footer') ?>