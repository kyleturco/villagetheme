<?php
/*
Template Name: Programs
*/
?>

<?php get_header(); ?>

<div id="content">
  <div id="programs-page-header">
    <div class="container">
      <h1 id="program-header" class="text-center text-white">Our Classes & Programs</h1>
      <p id="program-subheader" class="text-center text-white">We offer classes for ages 10 months through Pre-K</p>
    </div>
  </div>
  <div id="programs-subnav">
    <div class="container">
      <ul class="list-inline text-center">
        <li><a class="subnav-link" href="#village-nursery-school">Village Nursery School</a></li>
        <li><a class="subnav-link" href="#pit">Parent-Infant-Toddler</a></li>
        <li><a class="subnav-link" href="#stay-and-play">Stay & Play</a></li>
      </ul>
    </div>
  </div>
  <div id="programs-program-content">
    <div id="village-nursery-school" class="class-section class-1">
      <div class="container">
        <div class="class-description col-md-7">
          <h2>Village Nursery School</h2>
          <p>
            Our mission is to provide every student with a quality early childhood experience. We
            strive to create a safe, nurturing and developmentally appropriate environment which fosters
            individual needs. We believe in empowering children by offering them opportunities to make
            decisions and solve problems. It is our goal that children will possess confidence in their abilities
            and establish lasting relationships with teachers and peers. By offering an engaging curriculum
            it is our aspiration that each child will develop a positive outlook towards school, an appreciation
            of the world around them and acquire a lifelong love of learning.
          </p>
          <p>
            Through guided discovery and hands-on activities, students are exposed to a fully
            integrated thematic curriculum. The broad range of age appropriate activities will easily engage
            toddlers and preschoolers. Activities will be based on weekly academic themes of study and
            social skills (i.e. Ocean Life, Friendship). In addition, our prekindergarten program also
            incorporates a weekly letter and number focus (i.e. the letter A, the number 10), as well as
            literature theme days (i.e. Dr. Seuss Day). The children will be introduced to experiences
            including: children's literature, dramatic play, arts & crafts, science discovery & nature, cooking,
            sensory activities, social skills development, music & singing, fine & large motor activities, and
            early math skills. In addition, the curriculum will be enriched by field trips and special guests.
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#class-1" class="btn btn-primary">Enroll Now</a>
        </div>
        <div class="program-photo-right col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/kids-in-playroom.jpg" alt="" width="400px">
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div id="pit" class="class-section class-2">
      <div class="container">
        <div class="program-photo-right col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/playbox-1.JPG" alt="" width="400px">
        </div>
        <div class="class-description col-md-7">
          <h2>Parent Infant Toddler</h2>
          <p>
            The Parent-Infant-Toddler Program offers classes that parent/caregiver and child attend together one morning
             each week. This program has a long history at Village Nursery School and First United Methodist; it is one
             of the few such programs in the city. Each class is led by a teacher and includes an activity time, a
             snack, circle time and large motor time.
          </p>
          <p>
            During activity time a variety of toys and materials are provided for parent and child to explore together.
            Examples may be building and transportation toys, shape and color sorters, puzzles, play dough, paint, and
            a sensory table for sand and water play. There is plenty of time for socializing for parents and children
            during this time as well.
          </p>
          <p>
            Parents take turns providing a light, healthy snack, and then everyone participates (as they are able) in
             a short circle time. During circle time, the teacher shares songs and fingerplays then reads a story. Class
             ends with large motor play in a separate classroom.
          </p>
          <p>
            P-I-T classes meet for 28 weeks during the school year from September through April.  The age-appropriate
            classes meet from 9:30-11:00AM in Room 214 and 216 at First United Methodist Church.
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#pit-enroll" class="btn btn-primary">Enroll Now</a>
        </div>
      </div>
    </div>
    <div id="stay-and-play" class="class-section class-3">
      <div class="container">
        <div class="class-description col-md-7">
          <h2>Stay & Play</h2>
          <p>
            Stay & Play is a perfect way to introduce a Preschool atmosphere to the younger children and build on what
             the older children get in the classroom. Activities are safe and appropriate for all ages. For example,
             finger painting, dot painting, homemade playdough, and other fun activities.
          </p>
          <h3>Before-School and After -School Care</h3>
          <p>
            Before-school and After-school care is a service available for our VNS families who need a little extra
            time in the morning or a little extra time after school. Space is limited and must be reserved ahead of
            time, so that we can maintain our leader to child ratio.
          </p>
          <h3>S & P Enrichment</h3>
          <p>
            Stay and Play Enrichment is available for VNS and PIT siblings and students and will incorporate similar
            elements as a classroom. There will be large motor time, snack time, activity time, and then end the
            day reading a book and singing songs.
          </p>
          <a href="<?php echo home_url(); ?>/enrollment/#stay-and-play-enroll" class="btn btn-primary">Sign Up Now</a>
        </div>
        <div class="program-photo-right col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/book-rack.jpg" alt="" width="400px">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
