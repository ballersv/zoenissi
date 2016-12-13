<?php get_header(); ?>               
 <div class="container">
 <div class="row">

  <div class="col-sm-8 blog-main">
	<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?><!-- /.blog-post -->
    <?php endwhile; ?>
    <?php else : ?>
    <?php __('Sorry, Posts not found!') ?>
    <?php endif; ?>
  <nav>
  <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
  </ul>
  </nav>
  
  </div><!-- /.blog-main -->

     <?php get_sidebar(); ?>

    </div><!-- /.row -->

  </div><!-- /.container -->
    
<!-- first section - Home -->
<!--<div id="home" class="home">
	
    <div id="intro">
    <div class=" container-fluid fill no-gutter">
    <div id="myCarousel" class="carousel slide">
     <ol class="carousel-indicators hidden-xs hidden-md hidden-sm hidden-lg">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
      <div class="active item">
        <div class="fill" style="background-image:url('http://www.zoenissi.sg/sites/default/files/styles/flexslider_full/public/flexslider_example/homepage2.jpg?itok=_1yt7GpR;">
          
          <div class="carousel-caption">
            <h3>Ready For Holiday?</h3>
            <p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <button class="btn btn-raised btn-primary text-left">Know More</button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image:url('http://www.zoenissi.sg/sites/default/files/styles/flexslider_full/public/flexslider_example/homepage2.jpg?itok=_1yt7GpR;">
          
            <div class="carousel-caption">
            <h3>Our Products</h3>
            <p class="hidden-xs">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            <button class="btn btn-raised btn-primary text-left">Know More</button>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="fill" style="background-image:url('http://www.zoenissi.sg/sites/default/files/styles/flexslider_full/public/flexslider_example/homepage2.jpg?itok=_1yt7GpR;">
           <div class="carousel-caption">
            <h3>Look Young with <br/>Zoe Nissi</h3>
            <p class="hidden-xs">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
            <button class="btn btn-raised btn-primary text-left">Know More</button>
          </div>
        </div>
      </div>
    </div>
    <div class="pull-center">
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
    </div>
    </div>
    </div>
    </div>
        <div class="icon-scroll"></div>
</div>-->
<!-- /first section -->

<!-- second section - About -->
<!--<div id="about" class="pad-section hidden-xs">

</div>-->
<!-- /second section -->

<!-- third section - Services -->
<!--<div id="about-content" class="pad-section">
    <div class="container">
    <h4 class="text-center">About Us</h4>
    
    <p>Zoë Nissi Pte Ltd is a Singapore based company that is dedicated to distributing quality and innovative physicians dispensed skin health products. Our pride is  “Product Quality” and “Effective Products” which give lasting results. Since its incorporation in 2002, Zoë Nissi Pte Ltd showed a double digit growth yearly. <br/> <br/>With its headquarter in Singapore, Zoë Nissi Pte Ltd covers its business activity in three other major ASEAN countries namely, Indonesia, Malaysia and  Thailand.</p>
    
    
    </div>
</div>-->
<!-- /third section -->


<!-- fourth section - Information -->
   <!-- <div id="img-slide-two" class="pad-section"><?php get_template_part('content', get_post_format()); ?>
    
    </div>-->
<!-- /fourth section -->


<!-- fifth section -->
<!--<div id="featured-product" class="pad-section">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<h4>Featured Products</h4>

<div class="row text-center">
<div class="col-sm-3 col-xs-6">
	<img src="assets/img/featured-product/REJUVENATING.jpg" height="500" width="500" class="img-responsive">
</div>
<div class="col-sm-3 col-xs-6">
<img src="assets/img/featured-product/concealer.jpg" height="500" width="500" class="img-responsive">
</div>
<div class="col-sm-3 col-xs-6">
<img src="assets/img/featured-product/bright.jpg" height="500" width="500" class="img-responsive">
</div>
<div class="col-sm-3 col-xs-6">
<img src="assets/img/featured-product/2.jpg" height="500" width="500" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
</div>-->
<!-- /fifth section -->


<!--six section - doctor -->
<!--<div id="doctor-img" class="pad-section">

</div>-->
<!-- /six section  doctor-->


<!-- seven section -->
<!--<div id="doctor-content" class="padd-top-bot">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
            <h4>Ask Now</h4>
            <img src="assets/img/doctor-picture.jpg" height="144" width="144" class=" img-circle ">
            <h5>DR. POR YONG CHEN</h5> <small>PLASTIC SURGEON</small>
            <br/><br/>
            <p>
            Concerned about your pigmentation? How about your wrinkles?<br/> Worried about your skin? Ask away… The skin health doctor is on duty. <br/>Simply type in your question and we will have Dr. Por Yong Chen to answer you.
            </p>
            <br/>
            <br/>
            <button class="btn btn-raised btn-primary text-left">Ask Now</button>
            
            </div>
        </div>
    </div>
</div>-->
<!-- /seven section -->

<?php get_footer(); ?>