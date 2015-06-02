<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="container">
        <h1>Take a look around.</h1>
        <h2>But remember, stealing designs kills little baby kittens.</h2>
      </div>
      <div class="projects">
        <?php
        $args = array(
          'post_type' => 'project' 
        );
        $projects_array = get_posts( $args );
        foreach ($projects_array as $project) {
          var_dump($project);
        }
        ?>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->
