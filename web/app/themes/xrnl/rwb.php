<?php
/**
 * Template name: Rebel Without Borders
 */

get_header(); ?>


<div class="bg-blue px-3 py-5 text-center text-white rwb-cover-image" style="background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.25)), url('<?php the_field('rwb_cover_image_url'); ?>') no-repeat;">
  <div class="py-5">
    <h1 class="display-2"><?php the_title(); ?></h1>
    <h1 class="font-xr text-uppercase"><?php the_field('rwb_caption'); ?></h1>
  </div>

	<br>
  <h1 class="font-xr text-uppercase"><?php the_field('rwb_date'); ?></h1>
  <div class="rwb-location">
    <?php the_field('rwb_location'); ?>
  </div>

  <div class="my-3">
    <a class="btn btn-lg btn-blue" href="#details"><?php _e('JOIN'); ?></a>
  </div>

  <a href="<?php the_field('rwb_facebook_event_url'); ?>" target="_blank" class="text-white text-reset text-underline">
    Facebook
  </a> or <a class="text-white text-reset text-underline" href="<?php the_field('rwb_meetup_event_url'); ?>" target="_blank">
    Meetup
  </a>
</div>

<div class="container text-center">
  <a name="details"></a>
  <div class="row py-5">
    <div class="col-12 col-lg-8 mx-auto">
      <a name="details"></a>
      <?php the_content(); ?>
    </div>
  </div>
</div>

<div class="bg-pink">
  <div class="container">
    <div class="row py-5 text-center">
      <div class="col-12 col-lg-8 mx-auto">
        <h2><?php _e('JOIN REBEL WITHOUT BORDERS', 'theme-xrnl'); ?></h2>
        <?php the_field('rwb_join_description'); ?>
        <?php the_field('rwb_signup_code'); ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row py-5 text-center">
    <div class="col-12 col-lg-8 mx-auto">
      <h2>
        <?php _e('WHY ARE WE PROTESTING', 'theme-xrnl'); ?>?
      </h2>
      <p><?php the_field('rwb_why_protest'); ?></p>
      <h3><?php _e('OUR DEMANDS', 'theme-xrnl'); ?></h3>
      <?php the_field('rwb_demands'); ?>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row py-5 text-center">
    <div class="col-12 col-lg-8 mx-auto">
      <h2>
        <?php _e('WHO IS EXTINCTION REBELLION', 'theme-xrnl'); ?>?
      </h2>
      <?php the_field('rwb_who_is_xr'); ?>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row py-5 text-center">
    <div class="col-12">
      <h2><?php _e('FAQ AND PRACTICAL INFO', 'theme-xrnl'); ?></h2>
      <?php the_sub_field('rwb_faq_description') ?>
      <div class="container my-3">
        <div class="row">
          <ul class="list-unstyled">
            <?php while ( have_rows('faq') ){ the_row(); ?>
              <li>
                <strong><?php the_sub_field('faq_question'); ?></strong>
                <p><?php the_sub_field('faq_answer'); ?></p>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
