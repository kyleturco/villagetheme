<?php
/*
Template Name: Our Story
*/

$director_note_title = get_field('director_note_title');
$director_note_text = get_field('director_note_text');

?>

<?php get_header(); ?>

<div id="content" class="our-story-content">
  <div class="our-story-container">
    <div id="story-photo-bar">
      <div class="story-photo">
        <img class="image-rounded" src="<?php echo get_template_directory_uri(); ?>/library/images/vns-blocks.jpg" alt="village nursery school - child playing">
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
      <h1><?php echo $director_note_title; ?></h1>
      <p><?php echo $director_note_text; ?></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
