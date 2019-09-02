<?php
/**
 * Template name: Local Groups
 */

$data = file_get_contents(__DIR__ .'/local-groups.json');
$groups = json_decode($data, true);

get_header(); ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-12">
      <?php the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <div class="row mb-5">
        <?php foreach($groups as $group) { ?>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title text-uppercase font-xr">
                  <?php echo $group['name']; ?>
                </h5>
                <?php if ($group['email'] != '') { ?>
                  <a class="btn btn-link" target="_blank" href="mailto:<?php echo $group['email'] ?>">
                    <i class="fas fa-envelope"></i>
                  </a>
                  &nbsp;
                <?php } ?>
                <?php if ($group['facebook'] != '') { ?>
                  <a class="btn btn-link" target="_blank" href="<?php echo $group['facebook'] ?>">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  &nbsp;
                <?php } ?>
                <?php if ($group['twitter'] != '') { ?>
                  <a class="btn btn-link" target="_blank" href="<?php echo $group['twitter'] ?>">
                    <i class="fab fa-twitter"></i>
                  </a>
                  &nbsp;
                <?php } ?>
                <?php if ($group['website'] != '') { ?>
                  <a class="btn btn-link" target="_blank" href="<?php echo $group['website'] ?>">
                    <i class="fas fa-globe"></i>
                  </a>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
