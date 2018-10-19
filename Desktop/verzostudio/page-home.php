<?php
/*
	Template Name: Home Page
*/
get_header();
require_once ("contact.php");
include_once("analyticstracking.php")
 ?>
<?php
$service_title = get_field('service_title');
$portfolio_title = get_field('portfolio_title');
$process_title = get_field('process_title');
 ?>

<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>We would like to take your new idea to our hands<br>and make it happen !</h1>
                <hr>
                <p>Verzo is a new studio that founded in 2017, Engaged in web design and develop.<br>By thinking out of the box, using the latest technologies and building at the finest quality<br>we managed to take every project and make it unique and different.
                  <br><br>
                  Move on to the next section by clicking one of the buttons below.
                </p>
                <a href="#portfolio" class="page-scroll"><div class="header-button"></div></a>
            </div>
            <div class="mouse col-centered">
              <a href="#services" class="page-scroll">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mouse.png" alt="Mouse icon">
                      </a>
            </div>
        </div>
    </header>

    <section id="services" class="services text-center">
        <div class="container">
            <div class="row">
                    <h1><?php echo $service_title; ?></h1>
                    <div class="">

                    <?php $loop = new WP_Query( array( 'post_type' => 'services_box', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

                    <?php while( $loop->have_posts() ) : $loop->the_post();  ?>

                    <div class="services-box col-lg-2 col-md-5 wow <?php the_field('animate'); ?>">

                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

                      <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                    </div><!-- end col -->

                    <?php endwhile; wp_reset_query();  ?>
                    </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="top-spacer"></div>
          <div class="spacer">
            <h1 class="col-centered"><?php echo $portfolio_title; ?></h1>
          </div>
            <div class="row">
                <div class="fancybox-thumb-align">
                  <?php $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                  <?php while( $portfolio->have_posts() ) : $portfolio->the_post();  ?>
                    <div class="fancybox-thumb-border col-lg-4 col-md-5">
                  <a class="fancybox-thumb" rel="fancybox-thumb" href="<?php the_field('web_image'); ?>" caption="<?php the_field('web_desc'); ?>"><img src="<?php the_field('web_thumbnail'); ?>" alt="<?php the_title(); ?>" /></a>
                </div>
                  <?php endwhile; wp_reset_query();  ?>

                  </div>
                </div>
            </div><!-- container / end -->
            </section><!-- section / end -->

    <section class="process">
            <div class="container">
            <h1 class="col-centered"><?php echo $process_title; ?></h1>
            <?php $loop = new WP_Query( array( 'post_type' => 'process', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

            <?php while( $loop->have_posts() ) : $loop->the_post();  ?>

            <div class="process-box col-md-3 text-center">

                  <h3><?php the_title(); ?></h3>

                  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

            </div><!-- end col -->

            <?php endwhile; wp_reset_query();  ?>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
          <div class="top-spacer"></div>
          <h1 class="col-centered">About Us</h1>
            <div class="people col-lg-offset-2 col-md-offset-1">
              <div class="person col-lg-4 col-md-5">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/cdavid.png" class="pbottom" ondragstart="return false" alt="">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/david.png" class="ptop" ondragstart="return false" alt="">
                <div class="pertex"><strong>David</strong><br> UX&UI Designer</div>
              </div>
              <div class="hexa-spacer">
                </div>
              <div class="col-md-2 hexatext">Hove the image<br /><strong>to see information</strong></div>
                <div class="person col-lg-4 col-md-4">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ctal.png" class="pbottom" ondragstart="return false" alt="">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/tal.png" class="ptop" ondragstart="return false" alt="">
                  <div class="pertex"><strong>Tal</strong><br> Front&Back End Developer</div>
                </div>
              </div>
        </div>
        <div class="about-spacer"></div>
    </section>

    <section id="contact" class="contact">
      <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12">
        <h1><strong>Contact</strong> Us</h1>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12 contact-form-box">
      <form class="" role="form" method="post" action="#contact">
        <div class="form-group">
          <div class="animated swing">
              <?php echo $result; ?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6">
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-6">
            <input type="email" class="form-control" id="contact-email" name="contact-email" placeholder="Email Adress" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <label for="message" class="col-sm-6 control-label"><b>Your</b> Message</label>
            <textarea class="form-control form-control-1" rows="4" name="message" placeholder="Please include your phone number" required></textarea>
          </div>
        </div>
        <div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="human" name="human" placeholder="2 + 3 = ?">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
          </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-5 col-xs-offset-5">
            <input id="submit" name="submit" type="submit" value="" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
      <div class="col-lg-2 col-md-12 col-sm-12 contact-social">
        <ul class="list-inline">
          <li><a href="http://be.net/verzostudio" target="_blank"><i class="fa fa-2x fa-behance-square" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/verzo.design" target="_blank"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://www.facebook.com/1734923660131703" target="_blank"><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a></li>
          <li class="phone"><a href="tel:+972525690480"><i class="fa fa-phone-square" aria-hidden="true"></i></a></li>
        </ul>

      </div>
  </div>
</div>
    </section>


<?php get_footer(); ?>
