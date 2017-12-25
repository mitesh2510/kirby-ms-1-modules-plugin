# PhotoSwipe plugin

A plugin for [Kirby 2 CMS](http://getkirby.com) that adds [photoswipe](http://photoswipe.com/).

## Installation

Copy or link the `photoswipe` directory to `site/plugins/` **or** use the [Kirby CLI](https://github.com/getkirby/cli):

```
kirby plugin:install schnti/kirby-photoswipe
```

### Install PhotoSwipe

```
bower install photoswipe --save
```
or
```
npm install photoswipe --save
```

Add sources

```
<!-- Core CSS file -->
<link rel="stylesheet" href="path/to/photoswipe.css"> 

<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="path/to/default-skin/default-skin.css"> 

<!-- Core JS file -->
<script src="path/to/photoswipe.min.js"></script> 

<!-- UI JS file -->
<script src="path/to/photoswipe-ui-default.min.js"></script> 
```

use this right before closing `</body>` tag

```
<?= \ka\kirby\PhotoSwipe::init(); ?>
```

The `init()` function will add the PhotoSwipe (.pswp) element to DOM and the pure Vanilla JS implementation to build an array of slides from a list of links.

### Add static gallery
```
<div class="photoswipe" itemscope itemtype="http://schema.org/ImageGallery">

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="large-image.jpg" itemprop="contentUrl" data-size="600x400">
            <img src="small-image.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">Image caption</figcaption>
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="large-image.jpg" itemprop="contentUrl" data-size="600x400">
            <img src="small-image.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">Image caption</figcaption>
    </figure>


</div>
```

### or add dynamic gallery with kirby markup (and [Bootstrap 3.3](https://getbootstrap.com/docs/3.3/) Grid)

```
<div class="photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
    <div class="row">
        <?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
            <?php $pic = $image->resize(1000, null, 90); ?>
            <figure class="col-xs-6 col-sm-6 col-md-4 col-lg-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?= $pic->url(); ?>" itemprop="contentUrl" data-size="<?= $pic->width(); ?>x<?= $pic->height(); ?>"
                   title="<?= $image->text()->value(); ?>">
                    <img src="<?= $image->crop(400, 300)->url(); ?>" itemprop="thumbnail"
                         alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>"
                         class="img-responsive"/>
                </a>
                
                <figcaption itemprop="caption description"><?= $image->text()->kirbytext() ?></figcaption>
            </figure>

        <?php endforeach; ?>
    </div>
</div>
```


## Build
[minifier](https://kangax.github.io/html-minifier/)