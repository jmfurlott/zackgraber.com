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

	<div id="primary" class="content-area contact">
		<main id="main" class="site-main" role="main">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>Get in touch!</h1>

            <div class="contact-form">
              <form>
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="input-group">
                    <input type="text" class="form-control" name="firstName" placeholder="First Name" />
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="input-group">
                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" />
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" />
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="business" placeholder="Business" />
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="input-group">
                      <input type="text" class="form-control" name="pokemon" placeholder="Favorite Pokemon" />
                    </div>
                  </div>
                </div>
   
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <textarea class="form-control" placeholder="What are you looking for?" rows="4"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <input type="submit" value="Submit" class="button">
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="contact-direct">
                  <p>Don't really like forms? I don't either.  Feel free to give me a call or shoot me a direct email.</p>
                  <p><a href="mailto:zacharyjgraber@gmail.com">Email@zackgraber.com</a></p>
                  <p><a href="tel:3525145340">352 514 5340</a></p>
                  <p>Or just check me out on social media.</p>
                  <!-- Social Media icons -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- #main -->
	</div><!-- #primary -->

  <script type="text/javascript">
   $(function() {
     $(".contact-form > form").submit(function(e) {
       e.preventDefault();
       
       var data = {
         pokemon: $(this).find("input[name='pokemon']").val(),
         firstName: $(this).find("input[name='firstName']").val(),
         lastName: $(this).find("input[name='lastName']").val(),
         email: $(this).find("input[name='email']").val(),
         business: $(this).find("input[name='business']").val(),
         description: $(this).find("textarea").val()
       };

       console.log(data);
       var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
       $.post(
           ajaxurl, 
           { 
            'action': 'send_email',
            'data': data
           },
           function(response) {
             console.log(response);
           }
        );
     }) 
   })
  </script>
