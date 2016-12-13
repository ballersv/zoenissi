<?php get_header(); ?>
<div class="container-fluid">
<div class="row">

  <div class="col-sm-8 blog-main">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div><!-- /.blog-post -->
      <?php endwhile; ?>
    <?php else : ?>
      <?php __('Sorry, Page not found!') ?>
    <?php endif; ?>
    <nav>
      <ul class="pager">
        <li><a href="#">Previous</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </nav>

  </div><!-- /.blog-main -->

  <?php get_sidebar(); ?><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>