<?php echo $this->element('gallery_include_js');?>
<h2><?php __d('cake_gallery', 'Album');?>: <?php echo $album['Album']['title']; ?></h2>
<p><?php echo $album['Album']['description']; ?></p>
<?php echo $this->element('gallery_album'); ?>
<h3><?php __d('cake_gallery', 'View another albums'); ?></h3>
<?php echo $this->element('more_albums'); ?>