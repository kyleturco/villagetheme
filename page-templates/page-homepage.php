<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="content">
  <div id="home-hero-section">
    <div class="container">
      <div id="inner-content">
        <h3 class="text-white text-center">Welcome to</h3>
        <h1 class="text-white text-center">Village Nursery School</h1>
        <p class="text-white text-center">
          <i>A safe and secure enviornment dedicated to helping children grow and flourish</i>
        </p>
        <a id="home-hero-btn" href="<?php echo home_url(); ?>/programs/" class="btn btn-primary">See Our Programs <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
  <div id="home-welcome-section">
    <div class="container">
      <div id="home-icon-1" class="col-md-4">
        <div class="icon-circle icon-1">
          <i class="fa fa-home text-center text-white"></i>
        </div>
        <h2 class="text-center">Safe & Secure</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua
        </p>
      </div>
      <div id="home-icon-2" class="col-md-4">
        <div class="icon-circle icon-2">
          <i class="fa fa-bell text-center text-white"></i>
        </div>
        <h2 class="text-center">Academic</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua
        </p>
      </div>
      <div id="home-icon-3" class="col-md-4">
        <div class="icon-circle icon-3">
          <i class="fa fa-child text-center text-white"></i>
        </div>
        <h2 class="text-center">Fun</h2>
        <p class="text-center">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua
        </p>
      </div>
    </div>
  </div>
  <div id="home-overview-section">
    <div class="container">
      <div id="inner-content">
        <div id="overview-content-left" class="col-md-6">
          <h1>Overview</h1>
          <div class="about-text">
            <h4>
              Our philosophy is learning through play as we offer a stimulating environment for children.
            </h4>
            <p>
              The Village Nursery School was established at First United Methodist Church, West Lafayette, Ind., in 1972
              with the philosophy and educational understanding that young children learn best in an atmosphere of
              purposeful and productive play experiences.
            </p>
          </div>
        </div>
        <div id="overview-photos-right" class="col-md-6">
          <div class="photo-left"></div>
          <div class="photos-right">
            <div class="photo-1"></div>
            <div class="photo-2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div id="home-classes-section">
    <div class="container">
      <h1 class="text-center">Our Classes</h1>
      <div class="class-box pull-left">
        <div class="class-box-text pull-left">
          <h2>Preschool 2</h2>
          <p>
            <b>Ages:</b> 2-3
            <br>
            <b>Class size:</b> 10
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#preschool-2" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image-1 pull-right"></div>
      </div>
      <div class="class-box pull-right">
        <div class="class-box-text pull-left">
          <h2>Preschool 3</h2>
          <p>
            <b>Ages:</b> 3-4
            <br>
            <b>Class size:</b> 15
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#preschool-3" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image-2 pull-right"></div>
      </div>
      <div class="class-box pull-left">
        <div class="class-box-text pull-left">
          <h2>Pre-K</h2>
          <p>
            <b>Ages:</b> 4-5
            <br>
            <b>Class size:</b> 15
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#pre-k" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="class-box-image-3 pull-right"></div>
      </div>
      <div class="class-box pull-right">
        <div class="class-box-text pull-left">
          <h2>P.I.T.</h2>
          <p>
            <b>Ages:</b> Under 2
            <br>
            <b>Class size:</b> Varies
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#pit-enroll" class="btn btn-primary">Enroll Now</a>
        </div>
      <div class="class-box-image-4 pull-right"></div>
      </div>
    </div>
  </div>
  <div id="enroll-section">
    <div class="container">
      <div class="col-md-9">
        <h2>Enroll your child today!</h2>
      </div>
      <div class="col-md-3">
        <a href="<?php echo home_url(); ?>/programs" class="btn btn-primary">Learn More <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
