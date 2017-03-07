<?php
/*
Template Name: Enrollment
*/

// Sets variables for WP custom fields
$vns_enrollment_form = get_field('vns_enrollment_form');
$pit_enrollment_form = get_field('pit_enrollment_form');

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
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div class="class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
            <div class="class-info-item info-1">
              <p>2-3 years old (must be 2 by August 1 of the school year)</p>
            </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item info-1">
              <p>$50/month for 1 class/week</p>
            </div>
            <div class="class-info-item info-2">
              <p>$90/month for 2 classes/week</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="schedule-info">
            <div class="class-info-item info-1">
              <p>Monday/Wednesday 9:00-11:20 AM</p>
            </div>
            <div class="class-info-item info-2">
              <p>Tuesday/Thursday 9:00-11:20 AM</p>
            </div>
            <div class="class-info-item info-3">
              <p>Tuesday/Thursday 12:30-2:50 PM</p>
            </div>
            <div class="class-info-item info-4">
              <p>Friday 9:00-11:20 AM</p>
            </div>
          </div>
        </div>
        <div class="class-info-notes">
          <p>
            *There is a maximum of 10 children with 2 teachers per class.
          </p>
        </div>
        <div class="class-download class-download-mobile">
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
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
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div class="class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
            <div class="class-info-item info-1">
              <p>3-4 years old (Must be 3 by August 1)</p>
            </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item info-1">
              <p>$90/month for 2 class/week</p>
            </div>
            <div class="class-info-item info-2">
              <p>$125/month for 3 classes/week</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="schedule-info">
            <div class="class-info-item info-1">
              <p>Monday/Wednesday/Friday 9:00-11:25 AM</p>
            </div>
            <div class="class-info-item info-2">
              <p>Tuesday/Thursday 9:00-11:25 AM</p>
            </div>
            <div class="class-info-item info-3">
              <p>*Tuesday/Wednesday/Thursday 12:30-3:00 PM*</p>
            </div>
          </div>
        </div>
        <div class="class-info-notes">
          <p>
            *This class is for 3-5yr olds with a Pre-K curriculum modified to Preschool 2 for individuals who'd benefit
            from it.  It’s ideal for older 3’s, 4’s & 5 year olds.
          </p>
        </div>
        <div class="class-download class-download-mobile">
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
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
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div class="class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
            <div class="class-info-item info-1">
              <p>4-5 years old (must be 4 by August 1 of the school year)</p>
            </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item info-1">
              <p>$125/month for 3 classes/week</p>
            </div>
            <div class="class-info-item info-2">
              <p>$200/month for 5 classes/week</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="schedule-info">
            <div class="class-info-item info-1">
              <p>Monday/Wednesday/Friday 9:00-11:30 AM</p>
            </div>
            <div class="class-info-item info-2">
              <p>Monday-Friday 9:00-11:30 AM</p>
            </div>
            <div class="class-info-item info-3">
              <p>*Tuesday/Wednesday/Thursday 12:30-3:00 PM</p>
            </div>
          </div>
        </div>
        <div class="class-info-notes">
          <p>
            *This class is for 3-5yr olds with a Pre-K curriculum modified to Preschool 2 for individuals who'd benefit
             from it.  It’s ideal for older 3’s, 4’s & 5 year olds.
          </p>
        </div>
        <div class="class-download class-download-mobile">
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
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
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
          <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div class="class-info">
         <div class="class-info-header">
           <h3><i class="fa fa-child"></i> Ages</h3>
         </div>
           <div class="class-info-item info-1">
             <p>3-5 years old (must be 3 by August 1 of the school year)</p>
           </div>
         <div class="class-info-header">
           <h3><i class="fa fa-usd"></i> Tuition</h3>
         </div>
         <div class="tuition-info">
           <div class="class-info-item info-1">
             <p>$100 month for 2 classes/week</p>
           </div>
         </div>
         <div class="class-info-header">
           <h3><i class="fa fa-calendar"></i> Scheduling</h3>
         </div>
         <div class="schedule-info">
           <div class="class-info-item info-1">
             <p>Tuesday/Thursday 9:00-11:30 AM</p>
           </div>
         </div>
         <div class="class-download class-download-mobile">
           <h2>Interested in enrolling?</h2>
           <p>Download the registration form below.</p>
           <a href="<?php echo $vns_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
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
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
          <a href="<?php echo $pit_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
        <div class="class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
            <div class="class-info-item info-1">
              <p>Classes for toddlers 10-24+ months</p>
            </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item info-1">
              <p>$25 registration fee</p>
            </div>
            <div class="class-info-item info-2">
              <p>$100 per semester ($200 per year)</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="schedule-info">
            <div class="class-info-item info-1">
              <p>Tuesday: Older Infants (10-17 mo.)</p>
            </div>
            <div class="class-info-item info-2">
              <p>Wednesday: Young Toddlers (15-22 mo.)</p>
            </div>
            <div class="class-info-item info-3">
              <p>Thursday: Toddlers (20-28 mo.)</p>
            </div>
            <div class="class-info-item info-4">
              <p>Friday: Older Toddlers (24+ mo.)</p>
            </div>
          </div>
        </div>
        <div class="class-download class-download-mobile">
          <h2>Interested in enrolling?</h2>
          <p>Download the registration form below.</p>
          <a href="<?php echo $pit_enrollment_form; ?>" class="btn btn-primary form-download-btn" target="_blank">Get My Form</a>
        </div>
      </div>
    </div>
    <div id="stay-and-play-enroll" class="class-section class-6">
      <div class="container">
        <div class="class-1-header text-center">
          <h1>Stay & Play</h1>
        </div>
        <div class="class-info-notes">
          <p>
            Sign-up for Before-School (8:30 AM - 9:00 AM) and After-School care (11:30 AM - 12:00 PM). Limited spots
            are available. You must call ahead or sign-up in advance. We do have a ratio of adults to children for better
            care and may not be able to accommodate your drop-in needs if you do not call ahead.
          </p>
        </div>
        <div class="class-info">
          <div class="class-info-header">
            <h3><i class="fa fa-child"></i> Ages</h3>
          </div>
            <div class="class-info-item info-1">
              <p>Must be 12 months old (and walking)</p>
            </div>
          <div class="class-info-header">
            <h3><i class="fa fa-usd"></i> Tuition</h3>
          </div>
          <div class="tuition-info">
            <div class="class-info-item info-1">
              <p>$5/half hour</p>
            </div>
            <div class="class-info-item info-2">
              <p>$15/Enrichment Time(9AM - 11:30AM)</p>
            </div>
            <div class="class-info-item info-3">
              <p>$25/Full morning (8:30AM - Noon)</p>
            </div>
          </div>
          <div class="class-info-header">
            <h3><i class="fa fa-calendar"></i> Scheduling</h3>
          </div>
          <div class="schedule-info">
            <div class="class-info-item info-1">
              <p>
                “Varies Daily” Program is offered M-F mornings from 8:30AM-Noon but is scheduled on a “first come
                 first serve” basis.  Please contact the VNS Director to inquire about availability.
               </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
