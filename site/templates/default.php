<?php snippet('header') ?>

<div id="button-right">
	<a href="<?= $site->url() ?>" data-target>
		<span>BACK</span>
	</a>
</div>

<div id="button-left">
	<p>Credits:<br>Lights by <a href="//wigglesworth-weider.ch" target="_blank" rel="nofollow noopener">wigglesworth-weider.ch</a></p>
</div>

<?php if ($page->text()->isNotEmpty()): ?>
	<div id="page-text">
		<h1 class="tac"><?= $page->title()->html() ?></h1>
		<?= $page->text()->kt() ?>
	</div>
<?php endif ?>

<?php snippet('footer') ?>