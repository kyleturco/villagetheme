<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="content">
  <div id="home-hero-section">
    <div class="container">
      <h1 class="text-white text-center">Make Your Child Awesome</h1>
      <p class="text-white text-center">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehender
      </p>
      <div class="button-cta">
        <h3 class="text-center text-white">Sign Up Now</h3>
        <button id="hero-cta-btn"class="btn btn-primary">Learn More</button>
      </div>
    </div>
  </div>
  <div id="home-overview-section">
    <div class="container">
      <div id="inner-content">
        <div id="content-left" class="col-md-5">
          <h1>Overview</h1>
          <h4>
            Our philosophy is learning through play as we offer a stimulating environment for children.
          </h4>
          <p>
            The Village Nursery School was established at First United Methodist Church, West Lafayette, Ind., in 1972
            with the philosophy and educational understanding that young children learn best in an atmosphere of
            purposeful and productive play experiences.
          </p>
        </div>
        <div id="photos-right" class="col-md-7">
          <div class="photo-left" style="width: 66%; float: left; display; block">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" alt="" width="400px">
          </div>
          <div class="photos-right" style="width: 33%; float: left; display; block">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-2.jpg" alt="" width="170px">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-3.jpg" alt="" width="170px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div id="home-classes-section">
    <div class="container">
      <h1>Our Classes</h1>
      <div class="class-box pull-left">
        <div class="class-box-text pull-left">
          <h2>Preschool 2</h2>
          <p>
            <b>Ages:</b> 2-3
            <br>
            <b>Class size:</b> 10
          </p>
          <a href="<?php echo home_url(); ?>/programs-rates/#class-1" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image pull-right">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
        </div>
      </div>
      <div class="class-box pull-right">
        <div class="class-box-text pull-left">
          <h2>Preschool 3</h2>
          <p>
            <b>Ages:</b> 3-4
            <br>
            <b>Class size:</b> 15
          </p>
          <a href="<?php echo home_url(); ?>/programs-rates/#class-2" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image pull-right">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
        </div>
      </div>
      <div class="class-box pull-left">
        <div class="class-box-text pull-left">
          <h2>Pre-Kindergarten</h2>
          <p>
            <b>Ages:</b> 4-5
            <br>
            <b>Class size:</b> 15
          </p>
          <a href="<?php echo home_url(); ?>/programs-rates/#class-3" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image pull-right">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
        </div>
      </div>
      <div class="class-box pull-right">
        <div class="class-box-text pull-left">
          <h2>P.I.T.</h2>
          <p>
            <b>Ages:</b> Under 2
            <br>
            <b>Class size:</b> Varies
          </p>
          <a href="<?php echo home_url(); ?>/programs-rates/#class-4" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image pull-right">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
        </div>
      </div>
    </div>
  </div>
  <div id="enroll-section">
    <div class="container">
      <div class="col-md-9">
        <h2 class="text-white">Enroll your child today!</h2>
      </div>
      <div class="col-md-3">
        <button class="btn btn-primary">Learn More</button>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
