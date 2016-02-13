<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div id="home-hero-section">
      <h1>Make Your Child Awesome</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehender
      </p>
      <h3>Sign Up Now</h3>
      <button class="btn btn-primary">Learn More</button>
    </div>
    <div id="home-overview-section">
      <div id="content-left" class="col-md-5">
        <h2>Overview</h2>
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
  <div class="clearfix"></div>
  <div id="classes-section">
    <h1>Our Classes</h1>
    <div class="class-box col-md-6">
      <h2>Preschool 2</h2>
      <p>
        These classes are for children ages 2-3 who are age 2 by August 1 of the school year.
        There is a maximum of 10 children with 2 teachers per class.
      </p>
      <button class="btn btn-primary">Enroll Now</button>
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
    </div>
    <div class="class-box col-md-6">
      <h2>Preschool 3</h2>
      <p>
        These classes are for children ages 2-3 who are age 2 by August 1 of the school year.
        There is a maximum of 10 children with 2 teachers per class.
      </p>
      <button class="btn btn-primary">Enroll Now</button>
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
    </div>
    <div class="class-box col-md-6">
      <h2>Pre-Kindergarten</h2>
      <p>
        These classes are for children ages 2-3 who are age 2 by August 1 of the school year.
        There is a maximum of 10 children with 2 teachers per class.
      </p>
      <button class="btn btn-primary">Enroll Now</button>
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
    </div>
    <div class="class-box col-md-6">
      <h2>Parent Infant Toddler</h2>
      <p>
        These classes are for children ages 2-3 who are age 2 by August 1 of the school year.
        There is a maximum of 10 children with 2 teachers per class.
      </p>
      <button class="btn btn-primary">Enroll Now</button>
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/home-photo-1.jpg" width="130px">
    </div>
  </div>
  <div id="enroll-section">
    <h1>Enroll your child today!</h1>
    <button class="btn btn-primary">Learn More</button>
  </div>
</div>

<?php get_footer(); ?>
