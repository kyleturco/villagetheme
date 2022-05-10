<?php
/*
Template Name: Enrollment
*/

// Sets variables for WP custom fields
$vns_enrollment_form = get_field('vns_enrollment_form');
$pit_enrollment_form = get_field('pit_enrollment_form');
$stay_and_play_enrollment_form = get_field('stay_and_play_enrollment_form');

// Preschool 2 Variables
$preschool_2_title = get_field('preschool_2_title');
$preschool_2_age = get_field('preschool_2_age');
$preschool_2_tuition = get_field('preschool_2_tuition');
$preschool_2_scheduling = get_field('preschool_2_scheduling');
$preschool_2_additional = get_field('preschool_2_additional');

// Preschool 3 Variables
$preschool_3_title = get_field('preschool_3_title');
$preschool_3_age = get_field('preschool_3_age');
$preschool_3_tuition = get_field('preschool_3_tuition');
$preschool_3_scheduling = get_field('preschool_3_scheduling');
$preschool_3_additional = get_field('preschool_3_additional');

// PreK Variables
$pre_k_title = get_field('pre_k_title');
$pre_k_age = get_field('pre_k_age');
$pre_k_tuition = get_field('pre_k_tuition');
$pre_k_scheduling = get_field('pre_k_scheduling');
$pre_k_additional = get_field('pre_k_additional');

// PreK Variables
$preschool_spanish_title = get_field('preschool_spanish_title');
$preschool_spanish_age = get_field('preschool_spanish_age');
$preschool_spanish_tuition = get_field('preschool_spanish_tuition');
$preschool_spanish_scheduling = get_field('preschool_spanish_scheduling');
$preschool_spanish_additional = get_field('preschool_spanish_additional');

// PIT Variables
$pit_title = get_field('pit_title');
$pit_age = get_field('pit_age');
$pit_tuition = get_field('pit_tuition');
$pit_scheduling = get_field('pit_scheduling');
$pit_additional = get_field('pit_additional');

// Stay and Play Variables
$stay_and_play_title = get_field('stay_and_play_title');
$stay_and_play_age = get_field('stay_and_play_age');
$stay_and_play_tuition = get_field('stay_and_play_tuition');
$stay_and_play_scheduling = get_field('stay_and_play_scheduling');
$stay_and_play_additional = get_field('stay_and_play_additional');

?>

<?php get_header(); ?>

<div id="content">
  <div id="enrollment-page-header">
    <div class="container">
      <h1 id="enrollment-header" class="text-center text-white">Enrollment</h1>
      <p id="enrollment-subheader" class="text-center text-white">The info you need to get started today</p>
    </div>
  </div>
  <div id="enrollment-subnav">
    <div class="container">
      <ul class="list-inline text-center">
        <li><a class="subnav-link" href="#preschool-2"><?php echo $preschool_2_title; ?></a></li>
        <li><a class="subnav-link" href="#preschool-3">Preschool 3</a></li>
        <li><a class="subnav-link" href="#pre-k">Pre-Kindergarten</a></li>
        <li><a class="subnav-link" href="#preschool-spanish">Preschool Spanish</a></li>
        <li><a class="subnav-link" href="#pit-enroll">Parent-Infant-Toddler</a></li>
        <li><a class="subnav-link" href="#stay-and-play-enroll">Stay &amp; Play</a></li>
      </ul>
    </div>
  </div>
  <div id="enrollment-program-content">
    <div id="preschool-2" class="class-section class-1">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $preschool_2_title; ?></h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div>

          <?php if ($preschool_2_age): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <p><?php echo $preschool_2_age; ?></p>
            </div>
          <?php endif; ?>
            
          <?php if ($preschool_2_tuition): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $preschool_2_tuition; ?>
            </div>
          <?php endif; ?>
            
          <?php if ($preschool_2_scheduling): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $preschool_2_scheduling; ?>
            </div>
          <?php endif; ?>

        </div>
        <?php if ($preschool_2_additional): ?>
          <div class="class-info-notes">
            <p>
              <?php echo $preschool_2_additional; ?>
            </p>
          </div>
        <?php endif; ?>

        <?php if ($vns_enrollment_form): ?>
          <div class="class-download class-download-mobile">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <? endif; ?>
      </div>
    </div>
    <div id="preschool-3" class="class-section class-2">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $preschool_3_title; ?></h1>
        </div>

        <?php if ($vns_enrollment_form): ?>
          <div class="class-download">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <? endif; ?>

        <div>
          <?php if ($preschool_3_age): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <p><?php echo $preschool_3_age; ?></p>
            </div>
          <?php endif; ?>

          <?php if ($preschool_3_tuition): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $preschool_3_tuition; ?>
            </div>
          <?php endif; ?>
  
          <?php if ($preschool_3_scheduling): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $preschool_3_scheduling; ?>
            </div>
          <?php endif; ?>

        </div>

        <?php if ($preschool_3_additional): ?>
          <div class="class-info-notes">
            <p>
              <?php echo $preschool_3_additional; ?>
            </p>
          </div>
        <?php endif; ?>
        
        <?php if ($vns_enrollment_form): ?>
          <div class="class-download class-download-mobile">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <? endif; ?>

      </div>
    </div>
    <div id="pre-k" class="class-section class-3">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $pre_k_title; ?></h1>
        </div>

        <?php if ($vns_enrollment_form): ?>
          <div class="class-download">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>

        <div>
          <?php if ($pre_k_age): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <p><?php echo $pre_k_age; ?></p>
            </div>
          <?php endif; ?>

          <?php if ($pre_k_tuition): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $pre_k_tuition; ?>
            </div>
          <?php endif; ?>

          <?php if ($pre_k_scheduling): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $pre_k_scheduling; ?>
            </div>
          <?php endif; ?>
        </div>

        <?php if ($pre_k_additional): ?>
          <div class="class-info-notes">
            <p>
              <?php echo $pre_k_additional; ?>
            </p>
          </div>
        <?php endif; ?>

        <?php if ($vns_enrollment_form): ?>
          <div class="class-download class-download-mobile">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div id="preschool-spanish" class="class-section class-4">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $preschool_spanish_title; ?></h1>
        </div>

        <?php if ($vns_enrollment_form): ?>
          <div class="class-download">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>

        <div>
          <?php if ($preschool_spanish_age): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <p><?php echo $preschool_spanish_age; ?></p>
            </div>
          <?php endif; ?>

          <?php if ($preschool_spanish_tuition): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $preschool_spanish_tuition; ?>
            </div>
          <?php endif; ?>

          <?php if ($preschool_spanish_scheduling): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $preschool_spanish_scheduling; ?>
            </div>
          <?php endif; ?>
        </div>

        <?php if ($preschool_spanish_additional): ?>
          <div class="class-info-notes">
            <p>
              <?php echo $preschool_spanish_additional; ?>
            </p>
          </div>
        <?php endif; ?>

        <?php if ($vns_enrollment_form): ?>
          <div class="class-download class-download-mobile">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>
       </div>
      </div>
    </div>
    <div id="pit-enroll" class="class-section class-5">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $pit_title; ?></h1>
        </div>

        <?php if ($pit_enrollment_form): ?>
          <div class="class-download">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $pit_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>
    
        <div>
          <?php if ($pit_age): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <p><?php echo $pit_age; ?></p>
            </div>
          <?php endif; ?>

          <?php if ($pit_tuition): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $pit_tuition; ?>
            </div>
          <?php endif; ?>

          <?php if ($pit_scheduling): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $pit_scheduling; ?>
            </div>
          <?php endif; ?>
        </div>

        <?php if ($pit_additional): ?>
          <div class="class-info-notes">
            <p>
              <?php echo $pit_additional; ?>
            </p>
          </div>
        <?php endif; ?>

        <?php if ($pit_enrollment_form): ?>
          <div class="class-download class-download-mobile">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $pit_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div id="stay-and-play-enroll" class="class-section class-6">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $stay_and_play_title; ?></h1>
        </div>

        <?php if ($stay_and_play_enrollment_form): ?>
          <div class="class-download">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $stay_and_play_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        <?php endif; ?>

        <div>
          <?php if ($stay_and_play_age): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <p><?php echo $stay_and_play_age; ?></p>
            </div>
          <?php endif; ?>

          <?php if ($stay_and_play_tuition): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $stay_and_play_tuition; ?>
            </div>
          <?php endif; ?>

          <?php if ($stay_and_play_scheduling): ?>
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="mb-5 class-info class-info-item">
              <?php echo $stay_and_play_scheduling; ?>
            </div>
          <?php endif; ?>
        </div>

        <?php if ($stay_and_play_additional): ?>
          <div class="class-info-notes">
            <p>
              <?php echo $stay_and_play_additional; ?>
            </p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
