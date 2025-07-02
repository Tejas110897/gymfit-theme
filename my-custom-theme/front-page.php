<?php get_header(); ?>

<section class="hero">
  <h1>Welcome to GymFit</h1>
  <p>Transform Your Body. Transform Your Life.</p>
</section>

<section class="section trainers-section">
  <h2>Our Trainers</h2>
  <div class="trainers">
    <?php
    $trainers = new WP_Query(['post_type' => 'trainer', 'posts_per_page' => 3]);
    while ($trainers->have_posts()) : $trainers->the_post(); ?>
      <div class="trainer">
        <?php the_post_thumbnail('medium', ['loading' => 'lazy']); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>

<section class="section">
  <h2>Place:Indirangar</h2>
  <div class="testimonials">
    <?php
    $testimonials = new WP_Query(['post_type' => 'testimonial', 'posts_per_page' => 3]);
    while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
      <div class="testimonial">
        <p>"<?php the_excerpt(); ?>"</p>
        <strong><?php the_title(); ?></strong>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>

<?php get_footer(); ?>
