<?php
/**
 * The template for displaying all single posts.
 *
 * @package zackgraber
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		  <?php while ( have_posts() ) : the_post(); ?>
        <!-- Titles -->
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <h2><?php the_field("subtitle"); ?></h2>
        </div>
        <div class="dark-background">
            <div class="container">
                <h3><?php the_field("first_section_header"); ?></h3>
                <p><?php the_field("first_section_content"); ?></p>
            </div>
        </div>

        <!-- Before and after images -->
        <?php $before_image = get_field("before_picture"); ?>
        <?php $after_image = get_field("after_picture"); ?>
        <div class="brands">
           <img src="<?php echo $before_image['url']; ?>">
           <img src="<?php echo $after_image['url']; ?>">
        </div>

        <!-- Infinite pictures -->
        <div class="images">
        <?php
        if(have_rows("images")) {
          while(have_rows("images")) {
            the_row();
            $image = get_sub_field("image");
          ?>
            <div class="image">
                <img src="<?php echo $image['url']; ?>">
            </div>
          <?php
          }
        }
        ?>
        </div>

        <!-- Extra content -->
        <div class="container">
            <?php the_field("last_content"); ?>
        </div>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->   

