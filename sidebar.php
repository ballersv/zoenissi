<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <?php if(is_active_sidebar('sidebar')): ?>
    <?php dynamic_sidebar('sidebar'); ?>
  <?php endif; ?>
  
      
<?php if(is_active_sidebar('box1')) : ?>
  <?php dynamic_sidebar('box1'); ?>
<?php endif; ?>

<?php if(is_active_sidebar('box2')) : ?>
  <?php dynamic_sidebar('box2'); ?>
<?php endif; ?>

<?php if(is_active_sidebar('box3')) : ?>
  <?php dynamic_sidebar('box3'); ?>
<?php endif; ?>

</div><!-- /.blog-sidebar -->