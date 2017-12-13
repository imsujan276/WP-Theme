<?php get_header();?>
    <!-- Hero -->
              
  <section id="home" class="hero" <?php if ( get_theme_mod( 'bell_background_image' ) ) : ?>
                style="background-image: url(<?php echo esc_url( get_theme_mod( 'bell_background_image' ) ); ?>);"
              <?php endif; ?>>

    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">

              <?php if ( get_theme_mod( 'bell_logo' ) ) : ?>
                  <div class='site-logo'>
                      <a class="hero-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                        <img src='<?php echo esc_url( get_theme_mod( 'bell_logo' ) ); ?>' alt="Bell Logo"></a>
                  </div>
              <?php endif; ?>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
            <?php bloginfo( 'title' ); ?>
        </h1>

        <p class="tagline">
          <?php echo "Whatever it takes."; ?>
        </p>
        <a class="btn btn-full" href="#contact">Contact Us</a>
      </div>
    </div>

  </section>
  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
              <?php if ( get_theme_mod( 'bell_nav_logo' ) ) : ?>
                  <div class='site-logo'>
                      <a class="hero-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                        <img src='<?php echo esc_url( get_theme_mod( 'bell_nav_logo' ) ); ?>' alt="Navbar Bell Logo"></a>
                  </div>
              <?php else : ?>
                  <hgroup>
                    <a href="#home" ><h3 style="color:#fff"><?php bloginfo( 'title' ); ?></h3></a>
                  </hgroup>
              <?php endif; ?>

        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <?php 
          wp_nav_menu( array( 
              'theme_location' => 'main-menu',
              'container' => 'ul',
              'menu_class'=>'nav-menu', 
              'depth' => 3,
            )); 
        ?>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
       
        <a href="#"><i class="fa fa-twitter"></i></a> 
        <a href="#"><i class="fa fa-facebook"></i></a> 
        <a href="#"><i class="fa fa-linkedin"></i></a> 
        <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header>
  <!-- #header -->

  <!-- About -->

  <section class="about" id="about">
    <div class="container text-center">
      <h2>
          About <?php bloginfo( 'title' ); ?>
        </h2>

      <p>
        <?php bloginfo( 'description' ); ?>
      </p>

      <div class="row stats-row">
      <?php
        $args = array(
          'post_type' => 'about',
          'posts_per_page' => 4,
          'order' => 'ASC',
          'orderby' => 'ID',
        );

        $abouts = new WP_Query( $args );
        if( $abouts->have_posts() ) {
          while( $abouts->have_posts() ) {
            $abouts->the_post();

            if(get_the_title() != null && get_the_content() != null){
            ?>

              <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle">
                  <span class="stats-no" data-toggle="counter-up" id="num<?php echo $i; ?>">
                    <?php the_content() ?>
                  </span> 
                  <?php the_title() ?>
                </div>
              </div>
              
            <?php
            }
          }
        }
        else {
          echo '<div class="text-center col-md-12 col-sm-12"><h2>Oh ohm no Accomplishments Yet!</h2></div>';
        }
      ?>

      </div>
    </div>
  </section>
  <!-- /About -->
  <!-- Parallax -->

  <div class="block bg-primary block-pd-lg block-bg-overlay text-center" data-bg-img="<?php echo bloginfo('template_url');?>/assets/images/parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
    <h2>
        Welcome to a perfect theme
      </h2>

    <p>
      This is the most powerful theme with thousands of options that you have never seen before.
    </p>
    <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="<?php echo bloginfo('template_url');?>/assets/images/gadgets.png">
  </div>
  <!-- /Parallax -->
  <!-- Features -->
      <?php
        $args = array(
          'post_type' => 'feature',
          'posts_per_page' => 6,
          'order' => 'ASC',
          'orderby' => 'ID',
        );

        $features = new WP_Query( $args );
        if( $features->have_posts() ) {
        ?>

          <section class="features" id="features">
            <div class="container">
              <h2 class="text-center">
                  Features
                </h2>

              <div class="row">

        <?php
          while( $features->have_posts() ) {
            $features->the_post();
            $value = trim(get_post_meta(get_the_ID(), 'font_awesome_icon' , true));//'TRUE' WILL RETURN ONLY ONE VALUE FOR EACH POST.
        
            if(get_the_title() != null && get_the_content() != null && $value != null){


        ?>

            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <span class="<?php echo $value; ?>"></span>
                  </div>
                </div>

                <div>
                  <h3>
                      
                       <?php the_title() ?>
                       
                    </h3>

                  <p>
                    <?php the_content() ?>
                  </p>
                </div>
              </div>
            </div>
              
            <?php
            }
          }
          ?>
          
        </div>
      </section>
          <?php
        }
      ?>
  <!-- /Features -->
  <!-- Call to Action -->

<!--   <section class="cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2>
              Call to Action Section
            </h2>

          <p>
            Lorem ipsum dolor sit amet, nec ad nisl mandamus imperdiet, ut corpora cotidieque cum. Et brute iracundia his, est eu idque dictas gubergren
          </p>
        </div>

        <div class="col-lg-3 col-sm-12 text-lg-right text-center">
          <a class="btn btn-ghost" href="#">Buy This Theme</a>
        </div>
      </div>
    </div>
  </section> -->
  <!-- /Call to Action -->
  <!-- Portfolio -->
        <?php
        $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => 8,
          'order' => 'ASC',
          'orderby' => 'ID',
        );

        $portfolios = new WP_Query( $args );
        if( $portfolios->have_posts() ) {
        ?>

          <section class="portfolio" id="portfolio">
            <div class="container text-center">
              <h2>
                  Portfolio
                </h2>

              <p>
                <!-- Voluptua scripserit per ad, laudem viderer sit ex. Ex alia corrumpit voluptatibus usu, sed unum convenire id. Ut cum nisl moderatius, Per nihil dicant commodo an. -->
              </p>
            </div>

            <div class="portfolio-grid">
              <div class="row">

        <?php
          while( $portfolios->have_posts() ) {
            $portfolios->the_post();
                    
            if(get_the_title() != null && get_the_content() != null && has_post_thumbnail()){


        ?>

            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="card card-block">
                <a href="#"><?php the_post_thumbnail('medium'); ?><!-- <img alt="" src="<?php echo bloginfo('template_url');?>/assets/images/porf-1.jpg"> -->
                  <div class="portfolio-over">
                    <div>
                      <h3 class="card-title">
                        <?php the_title() ?>
                      </h3>
                      <p class="card-text">
                        <?php echo get_the_content(); ?>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
              
            <?php
            }
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <?php
        }
      ?>

  <!-- /Portfolio -->
  <!-- Team -->

        <?php
        $args = array(
          'post_type' => 'team',
          'posts_per_page' => 4,
          'order' => 'ASC',
          'orderby' => 'ID',
        );

        $team = new WP_Query( $args );
        if( $team->have_posts() ) {

          ?>
          <section class="team" id="team">
            <div class="container">
              <h2 class="text-center">
                  Meet our team
                </h2>

              <div class="row">

          <?php

          while( $team->have_posts() ) {
            $team->the_post();

            $position = get_post_meta(get_the_ID(), 'team_position' , true);
            $email = get_post_meta(get_the_ID(), 'team_email' , true);
            $facebook = get_post_meta(get_the_ID(), 'team_facebook' , true);
            $linkedin = get_post_meta(get_the_ID(), 'team_linkedin' , true);
            $twitter = get_post_meta(get_the_ID(), 'team_twitter' , true);
                    
            if(get_the_title() != null && get_the_content() != null && has_post_thumbnail()){


        ?>
              <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                  <a href="#"><?php the_post_thumbnail('medium'); ?><!-- <img alt="" class="team-img" src="<?php echo bloginfo('template_url');?>/assets/images/team-1.jpg"> -->
                    <div class="card-title-wrap">
                      <span class="card-title">
                        <?php the_title() ?>
                      </span> 
                      <span class="card-text">
                        <?php echo $position ?>
                      </span>
                    </div>

                    <div class="team-over">
                      <h4 class="hidden-md-down">
                        Connect with me
                      </h4>

                      <nav class="social-nav">
                        <?php if($twitter) { ?>
                          <a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a> 
                        <?php 
                        }
                        if($facebook) {
                         ?>
                        <a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a> 
                        <?php 
                        }
                        if($linkedin) {
                         ?>
                        <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                        <?php 
                        }
                        if($email) {
                         ?> 
                        <a href="<?php echo $email; ?>"><i class="fa fa-envelope"></i></a>
                        <?php } ?>
                  </nav>

                  <p>
                    <?php the_content() ?>
                  </p>
                </div>
                </a>
              </div>
            </div>
              
            <?php
            }
          }
          ?>

      </div>
      </div>
    </section>
  <?php
        }
      ?>
  <!-- /Team -->
  <!-- @component: footer -->

  <section id="contact">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section-title">Contact Us</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4">
          <div class="info">

      <?php
        $args = array(
          'post_type' => 'contact',
          'posts_per_page' => 1,
          'order' => 'ASC',
          'orderby' => 'ID',
        );

        $contact = new WP_Query( $args );
        if( $contact->have_posts() ) {
          while( $contact->have_posts() ) {
            $contact->the_post();
                    
            $address = get_post_meta(get_the_ID(), 'contact_address' , true);
            $email = get_post_meta(get_the_ID(), 'contact_email' , true);
            $number = get_post_meta(get_the_ID(), 'contact_number' , true);

            if($address != null || $email != null || $number != null){ 

        ?>
        
        <?php if($address != null){ ?>
            <div>
              <i class="fa fa-map-marker"></i>
              <p><?php echo $address; ?></p>
            </div>
        <?php } if($email != null){ ?>
            <div>
              <i class="fa fa-envelope"></i>
              <p><?php echo $email; ?></p>
            </div>
        <?php } if($number != null){ ?>
            <div>
              <i class="fa fa-phone"></i>
              <p><?php echo $number; ?> </p>
            </div>
        <?php } ?>
            <?php
            }
            else {
              echo '<div class="text-center col-md-12 col-sm-12"><h2>Oh ohm no contact details Yet!</h2></div>';
            }
          }
        }
        else {
          echo '<div class="text-center col-md-12 col-sm-12"><h2>Oh ohm no contact details Yet!</h2></div>';
        }
      ?>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <?php
            echo do_shortcode(
              '[contact-form-7 id="146" title="Contact form"]'
            );
          ?>
        </div>

      </div>
    </div>
    
  </section>

<?php get_footer(); ?>