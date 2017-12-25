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

  <div class="photoswipe" itemscope itemtype="http://schema.org/ImageGallery">

      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
          <a href="https://static.pexels.com/photos/116675/pexels-photo-116675.jpeg" itemprop="contentUrl" data-size="600x400">
              <img style="height:150px;width:150px" src="https://static.pexels.com/photos/116675/pexels-photo-116675.jpeg" itemprop="thumbnail" alt="Image description" />
          </a>
          <figcaption itemprop="caption description">Image caption</figcaption>
      </figure>

      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
          <a href="https://i.ytimg.com/vi/sEoVofaRTNE/hqdefault.jpg" itemprop="contentUrl" data-size="600x400">
              <img src="https://i.ytimg.com/vi/sEoVofaRTNE/hqdefault.jpg" style="height:150px;width:150px" itemprop="thumbnail" alt="Image description" />
          </a>
          <figcaption itemprop="caption description">Image caption</figcaption>
      </figure>


  </div>

<?php snippet('footer') ?>
