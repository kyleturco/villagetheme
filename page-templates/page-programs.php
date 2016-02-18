<?php
/*
Template Name: Programs
*/
?>

<?php get_header(); ?>

<div id="content">
  <div id="programs-page-header">
    <div class="container">
      <h1 id="program-header" class="text-center text-white">Programs & Rates</h1>
      <p id="program-subheader" class="text-center text-white">We offer classes for four main age groups</p>
    </div>
  </div>
  <div id="programs-subnav">
    <div class="container">
      <ul class="list-inline text-center">
        <li><a href="#village-nursery-school">Village Nursery School</a></li>
        <li><a href="#pit">Parent-Infant-Toddler</a></li>
        <li><a href="#stay-and-play">Stay & Play</a></li>
      </ul>
    </div>
  </div>
  <div id="programs-program-content">
    <div id="village-nursery-school" class="class-section class-1">
      <div class="container">
        <div class="class-description">
          <h2>Village Nursery School</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <a href="<?php echo home_url(); ?>/enrollment/#class-1" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
    <div id="pit" class="class-section class-2">
      <div class="container">
        <div class="class-description">
          <h2>Parent Infant Toddler</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <a href="<?php echo home_url(); ?>/enrollment/#class-1" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
    <div id="stay-and-play" class="class-section class-3">
      <div class="container">
        <div class="class-description">
          <h2>Stay & Play</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <a href="<?php echo home_url(); ?>/enrollment/#class-1" class="btn btn-primary">Enroll Now</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
