<div id="featured-exhibition">
	<?php if($item->flyer()->isNotEmpty() && $flyer = $item->flyer()->toFile()): ?>
		<img src="<?= $flyer->width(1500)->url() ?>" alt="<?= $item->copyright() ?>">
	<?php endif ?>
	<div id="featured-exhibition--description" class="exhibition-title">
		<div class="item-date"><?= $item->displayDates() ?></div>
		<div class="item-artist"><?= $item->artist()->html() ?></div>
		<div class="item-title"><?= $item->title()->html() ?></div>
		<div class="item-fulltitle mobile mobile-only">
			<?= $item->artist()->html() ?> : <?= $item->title()->html() ?>
			<?php if ($item->pressRelease()->isNotEmpty() && $press = $item->pressRelease()->toFile()): ?>
				<br><a href="<?= $press->url() ?>" download>[ dowload press pdf here ]</a>
			<?php endif ?>
		</div>
		<div class="item-subtitle mobile"><?= $item->subtitle()->html() ?></div>
		<div class="item-press">
			<?php if ($item->pressRelease()->isNotEmpty() && $press = $item->pressRelease()->toFile()): ?>
				<a href="<?= $press->url() ?>" download>press release</a>
			<?php endif ?>
		</div>
	</div>
</div>