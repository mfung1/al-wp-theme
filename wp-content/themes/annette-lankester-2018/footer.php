<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage annette-lankester-2018
 * @since Annette Lankest 2018 0.0.1
 */
 $scripts = get_template_directory_uri() . '/dist/js/scripts.min.js';
?>
      </div>
      <footer class="al-ftr bg-black">
        <div class="al-ftr-cnt mw-1200">
          <div class="logo">
            <h2 class="al-logo">Annette Lankester</h2>
            <p>Copyright @2018. All rights reserved.</p>
          </div>
          <div class="logo1">
            <h3 class="al-logo flex-sp-btwn">Pages <span class="expand" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><use xlink:href="#expand"/></svg></span></h3>
            <ul class="nav_cnt al-ftr-lnk-cnt">
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Fees</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Testimonials</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">About</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Contact</span></a></li>
            </ul>
          </div>
          <div class="logo2">
            <h3 class="al-logo">Useful links</h3>
          </div>
          <div class="logo3">
            <h3 class="al-logo">Contact</h3>
          </div>
        </div>
      </footer>
    </main>
    <script src="<?php echo htmlspecialchars($scripts)?>"></script>
    <?php wp_footer(); ?>

  </body>
</html>
