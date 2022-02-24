<?php
/*
Template Name: Contact Page
*/

$fumc_address = get_field('fumc_address');
$fumc_email = get_field('fumc_email');
$fumc_phone = get_field('fumc_phone');

$vns_contact_name = get_field('vns_contact_name');
$vns_email = get_field('vns_email');
$vns_phone = get_field('vns_phone');
?>

<?php get_header(); ?>

<div id="content" class="contact-page-content">
  <div id="contact-hero-section">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </div>
  <div id="contact-top">
    <div class="container">
      <div class="col-md-6 no-left-pad">
        <div id="contact-church-section">
          <h2>Location:</h2>
          <h3>We are proudly located in First United Methodist Church</h3>
            <?php if ($fumc_address): ?>
              <p><i class="fa fa-home"></i> <?php echo $fumc_address; ?></p>
            <?php endif; ?>
            <?php if ($fumc_email): ?>
              <p><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $fumc_email; ?>"><?php echo $fumc_email; ?></a></p>
            <?php endif; ?>
            <?php if ($fumc_phone): ?>
              <p><i class="fa fa-phone"></i><?php echo $fumc_phone; ?></p>
            <?php endif; ?>
          </p>
        </div>
        <div id="contact-director-section">
          <?php if ($fumc_contact_name): ?>
            <h2><?php echo $fumc_contact_name; ?></h2>
          <?php endif; ?>
          <p>For more information, please contact:</p>
          <?php if ($vns_email): ?>
            <p><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $vns_email; ?>"><?php echo $vns_email; ?></a></p>
          <?php endif; ?>
          <?php if ($fumc_phone): ?>
            <p><i class="fa fa-phone"></i><?php echo $vns_phone; ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div id="contact-photo-right" class="col-md-6 no-left-pad">
        <img class="image-rounded" src="<?php echo get_template_directory_uri(); ?>/library/images/first-united-methodist.JPG" alt="First United Methodist Church">
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div id="contact-bottom">
    <div id="google-map"></div>
    <script>
      function initMap() {
        var myLatlng = new google.maps.LatLng(40.425806,-86.936935);
        var mapDiv = document.getElementById('google-map');
        var map = new google.maps.Map(mapDiv, {
          center: myLatlng,
          zoom: 16,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: myLatlng,
          title:"First United Methodist Church - VNS"
        });
        marker.setMap(map);
      }
    </script>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

<?php get_footer(); ?>
