<?php snippet('header') ?>

<div id="button-right">
	<a href="<?= page('sunglasses')->url() ?>" data-target>
		<span><?= page('sunglasses')->title()->html() ?> ></span>
	</a>
</div>

<?php snippet('featured-exhibition', array("item" => $exhibitions->first())) ?>

<?php //snippet('archive') ?>

<?php snippet('footer') ?>