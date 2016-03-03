<?php
/*
Template Name: Our Story
*/
?>

<?php get_header(); ?>

<div id="content" class="our-story-content">
  <div class="our-story-container">
    <div id="story-photo-bar">
      <div class="story-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/vns-blocks.jpg" alt="village nursery school - child playing">
      </div>
    </div>
    <div id="story-text-section">
      <div class="our-story-header">
        <h1>Our Story</h1>
      </div>
      <div>
      <!-- gets page content from WP -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="our-story-text">
            <?php the_content(); ?>
          </div>
        <?php endwhile; else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div id="story-director-section">
    <div class="our-story-container">
      <div class="letter-text">
        <h1>A Note from Our Director</h1>
        <p>
          I have been one of the "Village" people for the last 6 years. Here at VNS I have played many roles
          including parent, teacher, and substitute. I'm fortunate to say VNS has been my family's "home away
          from home" for the entire time we have lived in the Lafayette area.
         </p>
         <p>
          On a professional level I have a
          Bachelor’s Degree in Elementary Education; I am also a licensed teacher in Indiana. I have taught
          many of our classes at VNS, kindergarten in Indiana and fifth grade in Virginia. I took time off of
          teaching to stay at home while my children were young.
        </p>
        <p>
          To me, every person associated with Village
          Nursery School, whether they are an employee, student, parent/guardian or FUMC church member, provides
          a unique contribution to our special school.  As Director, I hope we all find our fit in our "home away
          from home" as we work together here at Village Nursery School and FUMC.
        </p>
        <div class="director-signoff">
          <div class="left-side">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/deanna-bibler-headshot.jpg" alt="village nursery school director deanna bibler">
          </div>
          <div class="right-side">
            <p class="letter-signoff">
              Looking forward,
            </p>
            <p class="director-name">Deanna Bibler</p>
            <h4>Director</h4>
            <p>Village Nursery School</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
