<?php
/*
Template Name: Enrollment Info
*/
?>

<?php get_header(); ?>

<div id="enrollment-page-header">
  <div class="container">
    <h1 id="enrollment-header" class="text-center text-white">Enrollment 2020-2021</h1>
    <p id="enrollment-subheader" class="text-center text-white">Important Dates &amp; Info</p>
  </div>
</div>
<div class="enrollment__page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-4 pull-right">
        <div class="enrollment__alert alert alert-info">
          <h3 class="enrollment__alert--header">
            <i class="fa fa-exclamation-triangle icon" aria-hidden="true"></i>
            Notice:
          </h3>
          <p>Enrollment must be completed in person by theparent/guardian of the student.</p>
          <p>We apologize but no exceptions will be made.</p>
        </div>
      </div>
      <div class="col-md-8 pull-left">
        <h1 class="enrollment__content-header">Dates to Know</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
