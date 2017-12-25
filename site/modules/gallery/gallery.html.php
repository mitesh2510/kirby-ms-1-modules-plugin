<h1>Below text from gallery module</h1>
<div class="gallery">
	<?php foreach($module->images()->sortBy('sort', 'asc') as $image): ?>
		<!-- The alt attribute will use the page title if the image does not have one -->
		<img src="<?= $image->url() ?>" alt="<?= $image->alt()->or($page->title()) ?>"
	<?php endforeach ?>
	<?php echo $module->title() ?>
</div>
