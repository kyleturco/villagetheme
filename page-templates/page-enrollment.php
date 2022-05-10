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
    
        <div class="class-download class-download-mobile">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
      </div>
    </div>
    <div id="preschool-3" class="class-section class-2">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $preschool_3_title; ?></h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
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
    
        <div class="class-download class-download-mobile">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
      </div>
    </div>
    <div id="pre-k" class="class-section class-3">
      <div class="container">
        <div class="class-1-header text-center">
          <h1><?php echo $pre_k_title; ?></h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
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

        <div class="class-download class-download-mobile">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
      </div>
    </div>
    <div id="preschool-spanish" class="class-section class-4">
      <div class="container">
        <div class="class-1-header text-center">
          <h1>Preschool Spanish</h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div>
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
        <div class="mb-5 class-info">
          <div class="class-info-item">
            <p>4-5 years old (must be 4 by August 1 of the school year)</p>
          </div>
        </div>
        <div class="class-info-header">
          <h3><i class="fa fa-usd"></i> Tuition</h3>
        </div>
        <div class="mb-5 class-info">
          <div class="tuition-info">
            <div class="class-info-item">
              <p>$100 month for 2 classes/week</p>
            </div>
          </div>
        </div>
        <div class="class-info-header">
          <h3><i class="fa fa-calendar"></i> Scheduling</h3>
        </div>
        <div class="mb-5 class-info">
          <div class="schedule-info">
            <div class="class-info-item">
              <p>Tuesday/Thursday 9:20-11:50 AM</p>
            </div>
          </div>
          <div class="class-download class-download-mobile">
            <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
            <p class="mt-1">Download the registration form below.</p>
            <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
          </div>
        </div>
       </div>
      </div>
    </div>
    <div id="pit-enroll" class="class-section class-5">
      <div class="container">
        <div class="class-1-header text-center">
          <h1>P.I.T.</h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $pit_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
    
        <div class="class-info-header">
          <h3><i class="fa fa-child"></i> Ages</h3>
        </div>
        <div class="class-info">
          <div class="class-info-item">
            <p>Classes for toddlers 12-24+ months</p>
          </div>
        </div>
    
        <div class="class-info-header">
          <h3><i class="fa fa-usd"></i> Tuition</h3>
        </div>
        <div class="class-info tuition-info">
          <div class="class-info-item">
            <p>$125/semester – paid in full at registration</p>
          </div>
        </div>
    
        <div class="class-info-header">
          <h3><i class="fa fa-calendar"></i> Scheduling</h3>
        </div>
        <div class="class-info schedule-info">
          <div class="class-info-item">
            <p>Classes for students 12-24+ months are held Tuesday-Friday, from 9:30-11:00.</p>
          </div>
        </div>

        <div class="class-download class-download-mobile">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $pit_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
      </div>
    </div>
    <div id="stay-and-play-enroll" class="class-section class-6">
      <div class="container">
        <div class="class-1-header text-center">
          <h1>Stay & Play</h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $stay_and_play_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div>
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
          <div class="mb-5 class-info">
            <div class="class-info-item">
              <p>Must be 12 months old (and walking)</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="mb-5 class-info">
            <div class="tuition-info">
              <div class="class-info-item">
                <p>$25 flat rate (Please inquire about before-school care if needed)</p>
              </div>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="mb-5 class-info">
            <div class="schedule-info">
              <div class="class-info-item">
                <p>8:45am - 12:00pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
