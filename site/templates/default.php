<?php snippet('header') ?>
<ul>
  <li><a href="<?= url() ?>">Home</a></li>
  <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
  <?php endforeach ?>
</ul>
<h1><?php echo $page->title()->html() ?></h1>
<?php modules($page) ?>
<?php foreach($page->moduleList() as $p): ?>

<?php endforeach ?>

<?php snippet('footer') ?>
