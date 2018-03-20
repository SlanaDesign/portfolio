<?php

/* Template Name: Template home */

?>
<?php get_header(); ?>

<div class="slider">

<div class="slider_un">
  <?php
  $features = get_posts( array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'category' => 3,
    'post_status' => 'publish',
    'orderby' => 'post_date',
    'order' => 'ASC'
  ));

  foreach ($features as $feature) {
    echo '<div class="slider_project" style="background-image: url('.get_the_post_thumbnail_url($feature->ID).')">';?>
      <span class="projet">Projet :</span>
    <?php echo '<h2><span>'.get_the_title($feature->ID).'</span></h2>';?>
    <a class="lien" href="lien">More info</a>
  <?php   echo '</div>';
  }

  ?>
</div>


</div>

<?php get_footer(); ?>
