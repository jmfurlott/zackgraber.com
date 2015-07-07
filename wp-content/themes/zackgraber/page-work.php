<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="container">
        <h1>Take a look around.</h1>
        <h2>But remember, stealing designs kills kittens.</h2>
      </div>
      <div class="container">
        <div class="projects">
        <div class="row">
          <?php
          $args = array(
            'post_type' => 'project',
            'posts_per_page' => -1
          );
          $projects_array = get_posts( $args );
          foreach ($projects_array as $project) {
              $image = get_field("cover_picture", $project->ID);
              ?>
              <div class="project col-sm-6 col-md-4">
                <a class=" project-link" href="<?php echo get_permalink($project->ID); ?>"> 
                  <div class="project-link-image" style="background-image: url(<?php echo $image['url'];?>);"></div>
                </a>
              </div>
              <?php
          }
          ?>
          </div>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->
