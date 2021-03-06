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

<section>



<div id="tabs">
			<div class="tabs-onglets">
				<a href="#graphisme">Graphiste</a>
				<a href="#web">Webdesigner</a>
				<a href="#enseigne">Enseigniste</a>
				<a href="#redac">Rédactrice</a>
				<a href="#video">Videaste</a>
			</div>
			<div id="contenu">
				<div id="graphisme">
          <div class="slider_deux" id="graphiste">

              <?php

              $print = get_posts( array(
                'posts_per_page' => 4, // -1 pour afficher tous les articles
                'post_type' => 'print', // Type articles
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $print as $print) {
                  echo '<article class="slider_print" style="background: url('.get_field('picture_print', $print->ID).') no-repeat; background-size: cover;">';
                    echo '<div>';?>

                <!-- echo '<img src="'.get_field('picture_print', $print->ID).'">'; -->


                    <?php  echo '</div>';

                  echo '</article>';
              }

              ?>

            </div>
				</div><br><br><br>
				<div id="web">
          <div class="slider_deux" id="Webdesigner">

              <?php

              $web = get_posts( array(
                'posts_per_page' => 4, // -1 pour afficher tous les articles
                'post_type' => 'web', // Type articles
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $web as $web) {
                  echo '<article class="slider_print" style="background: url('.get_field('image_web', $web->ID).') no-repeat; background-size: cover;">';
                    echo '<div>';?>

                <!-- echo '<img src="'.get_field('picture_print', $print->ID).'">'; -->


                    <?php  echo '</div>';

                  echo '</article>';
              }

              ?>

            </div>
				</div><br><br><br>
				<div id="enseigne">
          <div class="slider_deux" id="graphiste">

              <?php

              $print = get_posts( array(
                'posts_per_page' => 4, // -1 pour afficher tous les articles
                'post_type' => 'print', // Type articles
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $print as $print) {
                  echo '<article class="slider_print" style="background: url('.get_field('picture_print', $print->ID).') no-repeat; background-size: cover;">';
                    echo '<div>';?>

                <!-- echo '<img src="'.get_field('picture_print', $print->ID).'">'; -->


                    <?php  echo '</div>';

                  echo '</article>';
              }

              ?>

            </div>
				</div><br><br><br>
				<div id="redac">
          <div class="slider_deux" id="Webdesigner">

              <?php

              $web = get_posts( array(
                'posts_per_page' => 4, // -1 pour afficher tous les articles
                'post_type' => 'web', // Type articles
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $web as $web) {
                  echo '<article class="slider_print" style="background: url('.get_field('image_web', $web->ID).') no-repeat; background-size: cover;">';
                    echo '<div>';?>

                <!-- echo '<img src="'.get_field('picture_print', $print->ID).'">'; -->


                    <?php  echo '</div>';

                  echo '</article>';
              }

              ?>

            </div>
				</div><br><br><br>
				<div id="video">
          <div class="slider_deux" id="graphiste">

              <?php

              $print = get_posts( array(
                'posts_per_page' => 4, // -1 pour afficher tous les articles
                'post_type' => 'print', // Type articles
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $print as $print) {
                  echo '<article class="slider_print" style="background: url('.get_field('picture_print', $print->ID).') no-repeat; background-size: cover;">';
                    echo '<div>';?>

                <!-- echo '<img src="'.get_field('picture_print', $print->ID).'">'; -->


                    <?php  echo '</div>';

                  echo '</article>';
              }

              ?>

            </div>
				</div>

			</div>
		</div>


<?php get_footer(); ?>
