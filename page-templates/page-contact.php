<?php
/*
Template Name: Contact Page
*/
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
          <p>
            <i class="fa fa-home"></i> 1700 W. State St., West Lafayette, IN 47906
            <br>
            <i class="fa fa-envelope-o"></i><a href="mailto:rtodd@fumcwl.org">rtodd@fumcwl.org</a>
            <br>
            <i class="fa fa-phone"></i>(765)743-1285
          </p>
        </div>
        <div id="contact-director-section">
          <h2>Beth McCool, Director</h2>
          <p>For more information, please contact:</p>
          <p>
           <i class="fa fa-envelope-o"></i><a href="mailto:bmccool@fumcwl.org">bmccool@fumcwl.org</a>
           <br>
           <i class="fa fa-phone"></i>765-743-4039
          </p>
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
