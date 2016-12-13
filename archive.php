<?php get_header(); ?>               
 <div class="container">
 <div class="row">

  <div class="col-sm-12 blog-main">
	<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?><!-- /.blog-post -->
    <?php endwhile; ?>
    <?php else : ?>
    <?php __('Sorry, Posts not found!') ?>
    <?php endif; ?>
  <!--<nav>
  <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
  </ul>
  </nav>-->
  <?php get_template_part('bottom-nav'); ?>
  
  </div><!-- /.blog-main -->

     

    </div><!-- /.row -->

  </div><!-- /.container -->
 

<?php get_footer(); ?>