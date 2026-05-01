<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
    <!--===============================================-->
    <!--    Footer (green variant)-->
    <!--===============================================-->
    <footer class="footer bg-razzaq-green text-body-secondary py-4 font-secondary text-center overflow-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2 position-relative"><a class="indicator indicator-up" href="#top"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.9}'></span><span class="indicator-arrow indicator-arrow-two" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":1.05}'></span></a></div>
          <div class="col-lg-4 text-lg-start mt-4 mt-lg-0">
            <p class="fs-10 text-uppercase ls fw-bold mb-0">Copyright &copy; <?php echo esc_html(date('Y')); ?> Razzaq &amp; Co.</p>
          </div>
          <div class="col-lg-4 text-lg-end order-lg-2 mt-2 mt-lg-0">
            <p class="fs-10 text-uppercase ls fw-bold mb-0">Chartered Certified Accountants &mdash; United Kingdom</p>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>

</html>
