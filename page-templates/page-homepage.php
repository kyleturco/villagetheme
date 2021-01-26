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
          <i>A safe and secure environment dedicated to helping children grow and flourish</i>
        </p>
        <a id="home-hero-btn" href="<?php echo home_url(); ?>/programs/" class="btn btn-primary">See Our Programs <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
  <div class="enrollment-cta">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="enrollment-cta__header">Enrollment 2020-2021</h2>
          <p class="enrollment-cta__description h3">Important dates and information</p>
        </div>
        <div class="col-sm-4">
          <a href="<?php echo home_url(); ?>/enrollment-2020-2021/" class="enrollment-cta__btn btn btn-primary" title="Village Nursery School Enrollment Info">
            View Dates <i class="fa fa-angle-double-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="home-welcome-section">
    <div class="container">
      <div id="home-icon-1" class="col-md-4 home-icon">
        <div class="icon-circle icon-1">
          <i class="fa fa-home text-center text-white"></i>
        </div>
        <h2 class="text-center">Safe & Secure</h2>
        <p class="text-center homepage-description">
          Educated, qualified staff members with background checks and CPR certifications.  Small classes with a
          minimal student to teacher ratio.
        </p>
      </div>
      <div id="home-icon-2" class="col-md-4 home-icon">
        <div class="icon-circle icon-2">
          <i class="fa fa-bell text-center text-white"></i>
        </div>
        <h2 class="text-center">Academic</h2>
        <p class="text-center homepage-description">
          Follows Indiana’s early learning development framework, the Foundations, which provides core skills
          that children are to achieve at various ages through curricula including Zoo-phonics, Handwriting Without Tears, and Minds in Motion.
        </p>
      </div>
      <div id="home-icon-3" class="col-md-4 home-icon">
        <div class="icon-circle icon-3">
          <i class="fa fa-child text-center text-white"></i>
        </div>
        <h2 class="text-center">Fun</h2>
        <p class="text-center homepage-description">
          Learn through social play, games and exciting experiments exploring the world around us!
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
              The Village Nursery School was established at First United Methodist Church, West Lafayette, IN, in 1972
              with the philosophy and educational understanding that young children learn best in an atmosphere of
              purposeful and productive play experiences.
            </p>
          </div>
        </div>
        <div id="overview-photos-right" class="col-md-6">
          <div class="photo-left image-rounded"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div id="home-classes-section">
    <div class="container">
      <h1 class="text-center">Our Classes</h1>
      <div class="class-box-section clearfix">
        <div class="row">
          <div class="col-md-6">
            <div class="class-box clearfix">
              <div class="class-box__text">
                <h2 class="class-box__text__header">Preschool 2</h2>
                <p>
                  <b>Ages:</b> 2-3
                  <br>
                  <b>Class size:</b> 10
                </p>
                <a href="<?php echo home_url(); ?>/enrollment/#preschool-2" class="btn btn-primary">Enroll Now</a>
              </div>
              <div class="class-box__image class-box-image-1"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="class-box clearfix">
              <div class="class-box__text">
                <h2 class="class-box__text__header">Preschool 3</h2>
                <p>
                  <b>Ages:</b> 3-4
                  <br>
                  <b>Class size:</b> 13
                </p>
                <a href="<?php echo home_url(); ?>/enrollment/#preschool-3" class="btn btn-primary">Enroll Now</a>
              </div>
              <div class="class-box__image class-box-image-2"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="class-box clearfix">
              <div class="class-box__text">
                <h2 class="class-box__text__header">Pre-K</h2>
                <p>
                  <b>Ages:</b> 4-5
                  <br>
                  <b>Class size:</b> 15
                </p>
                <a href="<?php echo home_url(); ?>/enrollment/#pre-k" class="btn btn-primary">Enroll Now</a>
              </div>
              <div class="class-box__image class-box-image-3"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="class-box clearfix">
              <div class="class-box__text">
                <h2 class="class-box__text__header">P.I.T.</h2>
                <p>
                  <b>Ages:</b> 12-24+ months
                  <br>
                  <b>Class size:</b> 10
                </p>
                <a href="<?php echo home_url(); ?>/enrollment/#pit-enroll" class="btn btn-primary">Enroll Now</a>
              </div>
              <div class="class-box__image class-box-image-4"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="class-box clearfix">
              <div class="class-box__text">
                <h2 class="class-box__text__header">Preschool Spanish</h2>
                <p>
                  <b>Ages:</b> 4-5
                  <br>
                  <b>Class size:</b> 13
                </p>
                <a href="<?php echo home_url(); ?>/enrollment/#preschool-spanish" class="btn btn-primary">Enroll Now</a>
              </div>
              <div class="class-box__image class-box-image-5"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="calendar-box">
              <h3 class="h2"><i class="fa fa-calendar"></i>&nbsp;Scheduling</h3>
              <p class="h3">For scheduling info visit our <a href="<?php echo home_url(); ?>/programs">Programs</a> page</p>
              <a class="btn btn-primary calendar-box__btn" href="<?php echo home_url(); ?>/programs">Click Here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="enroll-section">
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
