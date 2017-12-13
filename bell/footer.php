
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © <?php bloginfo( 'title' ); ?>
            </p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
              -->
              <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <?php 
                wp_nav_menu( array( 
                  'container' => 'ul',
                  'menu_class'=>'nav-menu', 
                  'depth' => 3,
                  'theme_location' => 'main-menu' 
                )); 
            ?>
            <!-- <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="#features">Features</a>
              </li>

              <li class="list-inline-item">
                <a href="#portfolio">Portfolio</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Team</a>
              </li>

              <li class="list-inline-item">
                <a href="#contact">Contact</a>
              </li>
            </ul> -->
          </div>

        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="<?php echo bloginfo('template_url');?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/tether/js/tether.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/stellar/stellar.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/easing/easing.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/stickyjs/sticky.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/parallax/parallax.js"></script>
  <script src="<?php echo bloginfo('template_url');?>/lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo bloginfo('template_url');?>/assets/js/custom.js"></script>

  <script src="<?php echo bloginfo('template_url');?>/assets/js/contactform.js"></script>

</body>
</html>