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
          <div data-expander class="logo1">
            <h3 class="al-logo flex-sp-btwn" aria-controls="#links">Pages <span class="expand" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><use xlink:href="#expand"/></svg></span></h3>
            <ul data-show="false" aria-expanded="false" data-links class="nav_cnt al-ftr-lnk-cnt">
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Fees</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Testimonials</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">About</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Contact</span></a></li>
            </ul>
          </div>
          <div data-expander class="logo2">
            <h3 class="al-logo flex-sp-btwn">Useful links <span class="expand" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><use xlink:href="#expand"/></svg></span></h3>
            <ul data-show="false" aria-expanded="false" data-links class="nav_cnt al-ftr-lnk-cnt">
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">Sitemap</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt ws-nw">Counselling Directory</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt ws-nw">Hypnotherapy Directory</span></a></li>
            </ul>
          </div>
          <div data-expander class="logo3">
            <h3 class="al-logo flex-sp-btwn">Contact <span class="expand" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><use xlink:href="#expand"/></svg></span></h3>
            <ul data-show="false" aria-expanded="false" data-links class="nav_cnt al-ftr-lnk-cnt">
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">07501 981 225</span></a></li>
              <li><a class="nav_lnk al-t3" href="#"><span class="nav_txt">annette.lankester@gmail.com</span></a></li>
            </ul>
          </div>
      </footer>
    </main>
    <script src="<?php echo htmlspecialchars($scripts)?>"></script>
    <?php wp_footer(); ?>

  </body>
</html>
