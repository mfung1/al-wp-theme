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
    </main>
    <script src="<?php echo htmlspecialchars($scripts)?>"></script>
    <?php wp_footer(); ?>

  </body>
</html>
