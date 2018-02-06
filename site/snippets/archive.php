<?php foreach ($exhibitions as $key => $exhibition): ?>

	<?php if($exhibition->featured()->isNotEmpty() && $featured = $exhibition->featured()->toFile()): ?>
	<?php endif ?>

		<div class="exhibition-item">

			<?= $exhibition->title()->html() ?>
			
		</div>


<?php endforeach ?>