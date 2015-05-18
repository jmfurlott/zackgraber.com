<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package zackgraber
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <h1>Get in touch!</h1>

      <div class="contact-form">
        <form>
          <div>
            <input type="text" name="firstName" placeholder="First Name" />
            <input type="text" name="lastName" placeholder="Last Name" />
          </div>

          <div>
            <input type="email" name="email" placeholder="Email" />
          </div>

          <div>
            <input type="text" name="business" placeholder="Business" />
            <input type="text" name="pokemon" placeholder="Favorite Pokemon" />
          </div>

          <div>
            <textarea placeholder="What are you looking for?" rows="5"></textarea>
          </div>
          <input type="submit" value="Submit" class="button">
        </form>
      </div>

      <div class="contact-direct">
        <p>Don't really like forms? I don't either.  Feel free to give me a call or shoot me a direct email.</p>
        <p><a href="mailto:zacharyjgraber@gmail.com">Email@zackgraber.com</a></p>
        <p><a href="tel:3525145340">352 514 5340</a></p>
        <p>Or just check me out on social media.</p>
        <!-- Social Media icons -->
      </div>
    </main><!-- #main -->
	</div><!-- #primary -->

  <script type="text/javascript">
   $(function() {
     $(".contact-form > form").submit(function(e) {
       e.preventDefault();
       console.log("hello world");
       
     }) 
   })
  </script>
