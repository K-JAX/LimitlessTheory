<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<?php if( have_rows('hero_section_1') ): while( have_rows('hero_section_1') ): the_row(); ?>
<!-- //  Hero Section 1 -->
<header class="front-hero hero">
  <div id="bg-graphic"></div>

  <div class="container">

      <div class="jumbotron pt-5 text-white">
        <div class="col-md-7 col-12 text-md-left text-center">
          <!-- // Title -->
          <h1 data-aos="fade" data-aos-duration="1500" class="display-1 text-uppercase font-weight-lighter"><?php echo get_sub_field('title'); ?></h1>
          <!-- // Description -->
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><?php echo get_sub_field('description'); ?></div>

          <!-- // CTA Link -->
          <?php if (!empty( get_sub_field('cta_link'))): ?>
              <a href="<?php echo get_sub_field('cta_link')['url']; ?>" alt="Link to <?php echo get_sub_field('cta_link')['title']; ?>"><?php echo get_sub_field('cta_link')['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
</header>
<?php endwhile; endif; ?>

<?php if( have_rows('intro_feature_section_2') ): while( have_rows('intro_feature_section_2') ): the_row(); ?>
<section class="container my-5">
<!-- //  Intro feature Section 2  -->
    <!-- // Alignment -->
    <div class="row flex-<?php echo get_sub_field('alignment') == 'left' ? 'row' : 'row-reverse'; ?>">

      <div data-aos="fade-left" data-aos-duration="700" class="col-md-5" style="z-index: 2;">
        <!-- // Title -->
        <h2 class="about-title-offset display-1 text-uppercase font-weight-lighter" style="" ><?php echo get_sub_field('title'); ?></h2>
        <style>
          @media all and (min-width: 768px){.about-title-offset{   margin-left: -50px; } }
        </style>
        <!-- // Description -->
        <?php echo get_sub_field('description'); ?>
      </div>
      <div data-aos="fade-right" data-aos-duration="700" class="col-md-6">
        <!-- // Image -->
        <?php if( !empty(get_sub_field('image')) ): ?>
            <img src="<?php echo get_sub_field('image')['url'] ?>" />
        <?php endif; ?>
      </div>
    
    </div>
</section>
<?php endwhile; endif; ?>


<?php if( have_rows('origin_story_section_3') ): while( have_rows('origin_story_section_3') ): the_row(); ?>
<!-- //  Origin Story Section 3 -->
<section data-aos="fade" data-aos-duration="900" class="container-fluid text-white" style="background-image: url(<?php echo get_sub_field('background_image')['url']; ?>);">
    <div class="container">
      <!-- // Alignment -->
      <div class="row flex-<?php echo get_sub_field('alignment') == 'left' ? 'row' : 'row-reverse'; ?>">

          <div class="col-lg-6 col-12 mt-5 py-5">
            <!-- // Title -->
            <h2 data-aos="fade" data-aos-duration="1200" class="display-4 text-uppercase font-weight-lighter"><?php echo get_sub_field('title'); ?></h2>
            
            <!-- // Description -->
            <div data-aos="fade" data-aos-duration="900" data-aos-delay="500"><?php echo get_sub_field('description'); ?></div>

            <!-- // Background Image -->
          </div>
      
      </div>
    </div>
</section>
<?php endwhile; endif; ?>

<?php if( have_rows('stats_section_4') ): while( have_rows('stats_section_4') ): the_row(); ?>
<!-- // Stats Section 4 -->
<section class="container-fluid my-5 pt-1 pb-5">

    <div data-aos="fade-up" data-aos-duration="700" class="row text-center my-5"><h2 class="h1 w-100 text-center text-uppercase font-weight-light spaced"><?php echo get_sub_field('title'); ?></h2></div>

    <div data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400" class="row flex-row-reverse">
      <figure class="col-12 col-md-11 distant-shadow row pl-0 row">

        <!-- // Image -->
        <?php if( !empty(get_sub_field('image')) ): ?>
            <img class="col-lg-3 pl-0" src="<?php echo get_sub_field('image')['url'] ?>" />
        <?php endif; ?>

        <figcaption class="row px-4 col-lg-9">
          <?php if (have_rows('education')): ?>

          <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" class="col-lg-4 my-5">
            <h3 class="font-weight-light">Education</h3>
            <ul class="text-secondary">
              <?php while(have_rows('education')): the_row(); ?>
                  <li><?php echo get_sub_field('stat_text'); ?></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php if (have_rows('experience')): ?>
          <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="700" class="col-lg-4 my-5">
            <h3 class="font-weight-light">Experience</h3>
            <ul class="text-secondary">
              <?php while(have_rows('experience')): the_row(); ?>
                  <li><?php echo get_sub_field('stat_text'); ?></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php if (have_rows('certification')): ?>
          <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000" class="col-lg-4 my-5">
            <h3 class="font-weight-light">Certs</h3>
            <ul class="text-secondary">
              <?php while(have_rows('certification')): the_row(); ?>
              <li><?php echo get_sub_field('stat_text'); ?></li>            
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
        </figcaption>
      </figure>
    </div>
</section>
<?php endwhile; endif; ?>

<?php if( have_rows('unique_value_section_5') ): while( have_rows('unique_value_section_5') ): the_row(); ?>
<!-- // Unique Value Section 5 -->
<section class="container-fluid bg-black text-white py-5">

    <div class="w-100 text-center">
      <!-- // Title -->
      <h2  data-aos="fade-up" data-aos-duration="1000" class="h1 text-uppercase font-weight-light spaced"><?php echo get_sub_field('title'); ?></h2>

      <!-- // Description -->
      <div  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" ><?php echo get_sub_field('description'); ?></div>
    </div>

    <!-- // Service Repeater -->
    <?php if( have_rows('service_repeater') ): ?>
      <div class="container">
        <ul class="row list-unstyled mb-5" style="justify-content: space-around;">
        <?php while( have_rows('service_repeater') ): the_row(); $count++ ?>

          <?php if(!empty(get_sub_field('service_link'))): ?>
          <a alt="Link to <?php echo get_sub_field('service_link')['title']; ?>" href="<?php echo get_sub_field('service_link')['url']; ?>" >
          <?php endif; ?>
              <li  data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?php echo round($count * 2) + 3; ?>00" class="d-flex flex-column text-center">

                <?php if(!empty(get_sub_field('service_icon'))): ?>
                  <img src="<?php echo get_sub_field('service_icon')['url']; ?>" alt="<?php echo get_sub_field('service_icon')['alt']; ?>" />
                <?php endif; ?>

                <?php if(!empty(get_sub_field('service_link'))): ?>
                <h3 style="color: <?php echo get_sub_field('link_color'); ?>;" ><?php echo get_sub_field('service_link')['title']; ?></h3>
                <?php endif; ?>
              </li>
            <?php if(!empty(get_sub_field('service_link'))): ?>
            </a>
            <?php endif; ?>

        <?php endwhile; $count=0; ?>
        </ul>
      </div>
    <?php endif; ?>

</section>
<?php endwhile; endif; ?>

<?php if( have_rows('final_cta_section_6') ): while( have_rows('final_cta_section_6') ): the_row(); ?>
<!-- // Final CTA Section 6 -->
<section data-aos="fade" data-aos-duration="700" class="container-fluid section-overlay overlay-fade-right" style="background-image: url(<?php echo get_sub_field('background_image')['url']; ?>); background-position: center center;">

      <div class="row flex-row-reverse">
        <div class="col-12 col-md-6">
          <!-- Title -->
          <div class="col-12 row flex-row-reverse">
            <h2 data-aos="fade-left" data-aos-duration="700" class="h1 col-9 text-center text-md-left text-uppercase font-weight-lighter spaced-tf-out my-3"><?php echo get_sub_field('title'); ?></h2>
          </div>
          <hr>

          <!-- Reach out repeater -->
          <?php if(have_rows('reach_out_items')): ?>
              <ul class="list-unstyled">
              <?php while(have_rows('reach_out_items')): the_row(); $count++ ?>
                  <li data-aos="fade-left" data-aos-duration="700" data-aos-delay="<?php echo round($count * 1.5); ?>00" class="row py-5 list-overlay overlay-fade-right" style="justify-content: end;">
                  <!-- Icon -->
                      <?php if(!empty(get_sub_field('icon'))): ?>
                        <div class="col-12 col-md-2 text-center text-md-left">
                          <img  src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" />
                        </div>
                      <?php endif; ?>
                  <!-- Description -->
                      <div class="col-12 col-md-7 text-center text-md-left"><?php echo get_sub_field('description'); ?></div>
                  </li>
              <?php endwhile; ?>
              </ul>
          <?php endif; ?>
        </div>
      </div>
      
      
</section>
<?php endwhile; endif; ?>

<style>
canvas{
    background: #031927;
}
</style>

<script>
/**/ /* ---- CORE ---- */
/**/ const canvas = document.createElement('canvas');
/**/ const context = canvas.getContext('2d');
/**/ let windowWidth = canvas.width = window.innerWidth;
/**/ let windowHeight = canvas.height = window.innerHeight;
/**/ canvas.id = 'canvas';
document.getElementById('bg-graphic').appendChild(canvas);
/**/ /* ---- CORE END ---- */
/* ---- CREATING ZONE ---- */

/* ---- SETTINGS ---- */
const numberParticlesStart = 900;
const particleSpeed = 0.2;
const velocity = 0.9;
const circleWidth = 50;

/* ---- INIT ---- */
let particles = [];

const getRandomFloat = (min, max) => (Math.random() * (max - min) + min);


/* ---- Particle ---- */
function Particle (x, y) {
  this.x = x;
  this.y = y;

  this.vel = {
    x : getRandomFloat(-20, 20)/100,
    y : getRandomFloat(-20, 20)/100,
    min : getRandomFloat(2, 10),
    max : getRandomFloat(10, 100)/10
  }

  this.color = 'rgba(192,255,255,0.04)';
}
Particle.prototype.render = function() {
  context.beginPath();
  context.fillStyle = this.color;
  context.arc(this.x, this.y, 1, 0, Math.PI * 2);
  context.fill();
};
Particle.prototype.update = function() {

  const forceDirection = {
    x: getRandomFloat(-1, 1),
    y: getRandomFloat(-1, 1),
  };

  if (Math.abs(this.vel.x + forceDirection.x) < this.vel.max) {
    this.vel.x += forceDirection.x;
  }
  if (Math.abs(this.vel.y + forceDirection.y) < this.vel.max) {
    this.vel.y += forceDirection.y;
  }

  this.x += this.vel.x * particleSpeed;
  this.y += this.vel.y * particleSpeed;

  if (Math.abs(this.vel.x) > this.vel.min) {
    this.vel.x *= velocity;
  }
  if (Math.abs(this.vel.y) > this.vel.min) {
    this.vel.y *= velocity;
  }

  this.testBorder();
};
Particle.prototype.testBorder = function() {
  if (this.x > windowWidth) {
    this.setPosition(this.x, 'x');
  } else if (this.x < 0) {
    this.setPosition(windowWidth, 'x');
  }
  if (this.y > windowHeight) {
    this.setPosition(this.y, 'y');
  } else if (this.y < 0) {
    this.setPosition(windowHeight, 'y');
  }
};
Particle.prototype.setPosition = function(pos, coor) {
  if (coor === 'x') {
    this.x = pos;
  } else if (coor === 'y') {
    this.y = pos;
  }
};

/* ---- Functions ----*/
function loop() {
  let i;
  const length = particles.length;
  for (i = 0; i < length; i++) {
    particles[i].update();
    particles[i].render();
  }
  requestAnimationFrame(loop);
}

/* ---- START ---- */
function init() {
  let i;
  for (i = 0; i < numberParticlesStart; i++) {
    const angle = Math.random() * 360;
    particles.push(new Particle(
      windowWidth * 0.75 + (Math.cos(angle) * circleWidth),
      windowHeight * 0.55 - (Math.sin(angle) * circleWidth),
  ));
  }
}
init();
// window.onresize = () => {
  //  windowWidth = canvas.width = window.innerWidth;
  //  windowHeight = canvas.height = window.innerHeight;
  //  particles = [];
  //  context.clearRect(0,0, windowWidth, windowHeight);
  //  init();
// }

// window.addEventListener('click', () => {
//   particles = [];
//   context.clearRect(0,0, windowWidth, windowHeight);
//   init();
// });

loop();

</script>

<?php get_footer(); ?>