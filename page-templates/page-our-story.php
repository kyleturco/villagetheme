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
          I joined Village Nursery School 5 years ago as a parent.  The following year, I joined the staff and taught here for 4 years.  Through my connections with our amazing school, my family has made life-long friends, and VNS has truly become our village!
         </p>
         <p>
           Professionally, I attended Purdue University for my undergraduate and graduate degrees.  I have a Master’s of Education in Student Services from Purdue, and I spent four years as an elementary school counselor in Crawfordsville prior to taking time off to be home with my own children and subsequently finding my love of early childhood education.
        </p>
        <p>
          Village Nursery School offers our staff, students, and families a true support network. Our staff works tirelessly in what we consider a labor of love to create a loving, playful, and safe environment in which every child can learn and grow.  Our students discover the joy of learning through play, and our families create connections that last well beyond the pre-school years.  Welcome to our Village!
        </p>
        <div class="director-signoff">
          <p class="director-name">Beth McCool</p>
          <h4>Director</h4>
          <p>Village Nursery School</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
