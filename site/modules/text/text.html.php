<h1>Below text from text module</h1>
<div class="text text--width-<?= $module->width() ?> text--fontsize-<?= $module->fontsize() ?>">
	<p><?php echo $module->title() ?></p>
	<?= kirbytext($module->text()) ?>
</div>
