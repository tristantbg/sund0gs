<?php snippet('header') ?>

<?php if ($page->text()->isNotEmpty()): ?>
	<div id="page-text">
		<h1 class="tac"><?= $page->title()->html() ?></h1>
		<?= $page->text()->kt() ?>
	</div>
<?php endif ?>

<?php snippet('footer') ?>