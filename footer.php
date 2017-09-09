<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
  <div class="container">
   <div class="row">
     <div class="col-xs-12 col-sm-1 hidden-xs visible-sm">
       <img class="logo" src="" class="img-responsive" alt="" title=""/>
     </div>
     <div class="col-xs-12 col-sm-3 recent-post-feed">
       <h4>Recent Updated</h4>
       <ul>
         <?php recent_posts(3); ?>
       </ul>
     </div>
     <div class="col-xs-12 col-sm-3">
       <h4>Company</h4>
       <nav role="navigation">
         <?php wp_nav_menu(array(
           'theme_location' => 'footer-1',
           'container'      => '',
         )); ?>
       </nav>
     </div>
     <div class="col-xs-12 col-sm-3">
       <h4>Learn More</h4>
       <nav role="navigation">
         <?php wp_nav_menu(array(
           'theme_location' => 'footer-2',
           'container'      => '',
         )); ?>
       </nav>
     </div>
     <div class="col-xs-12 col-sm-2">
       <h4>Follow Us</h4>
       <nav role="navigation">
         <?php wp_nav_menu(array(
           'theme_location' => 'footer-3',
           'container'      => '',
         )); ?>
       </nav>
     </div>
     </div>
     <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
     <p class="credit"><a href="https://codyreeves.com" target="_BLANK">Created by: Cody Reeves</a></p>
   </div>
 </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
