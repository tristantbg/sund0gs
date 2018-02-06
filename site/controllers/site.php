<?php

return function ($site, $pages, $page) {
	$exhibitions = $site->homePage()->children()->visible();

	return array(
	'exhibitions' => $exhibitions
	);
}

?>
