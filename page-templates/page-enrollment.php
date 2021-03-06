<?php
/*
Template Name: Enrollment
*/

// Sets variables for WP custom fields
$vns_enrollment_form = get_field('vns_enrollment_form');
$pit_enrollment_form = get_field('pit_enrollment_form');
$stay_and_play_enrollment_form = get_field('stay_and_play_enrollment_form');

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
        <li><a class="subnav-link" href="#preschool-2">Preschool 2</a></li>
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
          <h1>Preschool 2</h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="class-info-item">
              <p>2-3 years old (must be 2 by August 1 of the school year)</p>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="tuition-info">
              <div class="class-info-item">
                <p>$95/month for 2 classes/week</p>
              </div>
              <div class="class-info-item">
                <p>$130/month for 3 classes/week</p>
              </div>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="schedule-info">
              <div class="class-info-item">
                <p>Monday/Wednesday/Friday 9:20-11:50 AM</p>
              </div>
              <div class="class-info-item">
                <p>Tuesday/Thursday 9:20-11:50 AM</p>
              </div>
              <div class="class-info-item info-3">
                <p>Tuesday/Thursday 12:30-3:00 PM</p>
              </div>
            </div>
          </div>
        </div>
        <div class="class-info-notes">
          <p>
            *There is a maximum of 10 children with 2 teachers per class.
          </p>
        </div>
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
          <h1>Preschool 3</h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="class-info-item">
              <p>3-4 years old (Must be 3 by August 1)</p>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="tuition-info">
              <div class="class-info-item">
                <p>$95/month for 2 class/week</p>
              </div>
              <div class="class-info-item">
                <p>$130/month for 3 classes/week</p>
              </div>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="schedule-info">
              <div class="class-info-item">
                <p>Monday/Wednesday/Friday 9:20-11:50 AM</p>
              </div>
              <div class="class-info-item">
                <p>Tuesday/Thursday 9:20-11:50 AM</p>
              </div>
              <div class="class-info-item info-3">
                <p>*Tuesday/Wednesday/Thursday 12:30-3:00 PM*</p>
              </div>
            </div>
          </div>
        </div>
        <div class="class-info-notes">
          <p>
            *This class is for 3-5yr olds with a Pre-K curriculum modified to Preschool 3 for individuals who'd benefit
            from it.  It’s ideal for older 3’s, 4’s & 5 year olds.
          </p>
        </div>
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
          <h1>Pre-Kindergarten</h1>
        </div>
        <div class="class-download">
          <h2 class="mb-4 mt-0">Interested in enrolling?</h2>
          <p class="mt-1">Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="class-info-item">
              <p>4-5 years old (must be 4 by August 1 of the school year)</p>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="tuition-info">
              <div class="class-info-item">
                <p>$130/month for 3 classes/week</p>
              </div>
              <div class="class-info-item">
                <p>$210/month for 5 classes/week</p>
              </div>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
            <div class="schedule-info">
              <div class="class-info-item">
                <p>Monday/Wednesday/Friday 9:20-11:50 AM</p>
              </div>
              <div class="class-info-item">
                <p>Monday-Friday 9:20-11:50 AM</p>
              </div>
              <div class="class-info-item info-3">
                <p>*Tuesday/Wednesday/Thursday 12:30-3:00 PM</p>
              </div>
            </div>
          </div>
        </div>
        <div class="class-info-notes">
          <p>
            *This class is for 3-5yr olds with a Pre-K curriculum modified to Preschool 3 for individuals who'd benefit
             from it.  It’s ideal for older 3’s, 4’s & 5 year olds.
          </p>
        </div>
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
        <div class="mb-4 class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
          <div class="class-info-item">
            <p>4-5 years old (must be 4 by August 1 of the school year)</p>
          </div>
        </div>
        <div class="mb-4 class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item">
              <p>$100 month for 2 classes/week</p>
            </div>
          </div>
        </div>
        <div class="mb-4 class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
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
        <div class="class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
            <div class="class-info-item">
              <p>Classes for toddlers 12-24+ months</p>
            </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item">
              <p>$125/semester – paid in full at registration</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="schedule-info">
            <div class="class-info-item">
              <p>Classes for students 12-24+ months are held Tuesday-Friday, from 9:30-11:00.</p>
            </div>
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
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-child"></i> Ages</h3>
            </div>
            <div class="class-info-item">
              <p>Must be 12 months old (and walking)</p>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-usd"></i> Tuition</h3>
            </div>
            <div class="tuition-info">
              <div class="class-info-item">
                <p>$25 flat rate (Please inquire about before-school care if needed)</p>
              </div>
            </div>
          </div>
          <div class="mb-4 class-info">
            <div class="class-info-header">
              <h3><i class="fa fa-calendar"></i> Scheduling</h3>
            </div>
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
