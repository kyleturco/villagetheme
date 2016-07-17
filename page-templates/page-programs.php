<?php
/*
Template Name: Programs
*/

// Sets variables for WP custom fields
$vns_description = get_field('vns_description');
$pit_description = get_field('pit_description');
$sp_description = get_field('sp_description');
?>

<?php get_header(); ?>

<div id="content">
  <div id="programs-page-header">
    <div class="container">
      <h1 id="program-header" class="text-center text-white">Our Classes & Programs</h1>
      <p id="program-subheader" class="text-center text-white">We offer classes for ages 10 months through Pre-K</p>
    </div>
  </div>
  <div id="programs-subnav">
    <div class="container">
      <ul class="list-inline text-center">
        <li><a class="subnav-link" href="#village-nursery-school">Village Nursery School</a></li>
        <li><a class="subnav-link" href="#pit">Parent-Infant-Toddler</a></li>
        <li><a class="subnav-link" href="#stay-and-play">Stay & Play</a></li>
      </ul>
    </div>
  </div>
  <div id="programs-program-content">
    <div id="village-nursery-school" class="class-section class-1">
      <div class="container">
        <div class="class-description col-md-7">
          <h2>Village Nursery School</h2>
          <p class="narrow-content">
            <?php echo $vns_description; ?>
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#class-1" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="program-photo-right col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/kids-in-playroom.jpg" alt="village nursery school playroom" width="400px">
          <div class="class-download">
            <h3 class="h2"><i class="fa fa-calendar"></i>&nbsp;Schedule 2016-2017 </h3>
            <a href="/" class="btn btn-primary">Download Now</a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div id="pit" class="class-section class-2">
      <div class="container">
        <div class="program-photo-right col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/playbox-1.JPG" alt="village nursery school sandtable" width="400px">
          <div class="class-download">
            <h3 class="h2"><i class="fa fa-calendar"></i>&nbsp;Schedule 2016-2017 </h3>
            <a href="/" class="btn btn-primary">Download Now</a>
          </div>
        </div>
        <div class="class-description col-md-7">
          <h2>Parent Infant Toddler</h2>
          <p>
            <?php echo $pit_description; ?>
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#pit-enroll" class="btn btn-primary">Enroll Now</a>
        </div>
      </div>
    </div>
    <div id="stay-and-play" class="class-section class-3">
      <div class="container">
        <div class="class-description col-md-7">
          <h2>Stay & Play</h2>
          <p class="narrow-content">
            <?php echo $sp_description; ?>
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#stay-and-play-enroll" class="btn btn-primary">Sign Up Now</a>
        </div>
        <div class="program-photo-right col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/book-rack.jpg" alt="village nursery school bookrack" width="400px">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
