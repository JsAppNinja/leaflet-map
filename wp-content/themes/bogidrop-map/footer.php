<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bogidope
 */

?>
<!-- Footer -->
<footer class="py-5 bg-header-blue footer-space">
    <div class="container">
        <div class="footer-content">
            <div class="copyright">
                Copyright &copy;<?php echo date("Y"); ?> BogiDope | All Rights Reserved | <a style="color: white" href="/privacy-policy/">Privacy Policy</a>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <!-- /.container -->
</footer>

<?php wp_footer(); ?>
<!-- <a href="https://bogidope.com/we-are-hiring/" class="hiring-snipe">
    <div class="hiring-snipe__message">
        <div class="hiring-snipe__title">We're Hiring Consultants!</div>
        Click here to find out more
    </div>
</a> -->
<script type="text/javascript">
  function resizeIframe(iframe) {
    iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
    window.requestAnimationFrame(() => resizeIframe(iframe));
  }
</script>
<script type='text/javascript' src='/wp-content/themes/bogidope/js/ck.js'></script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '461891611291671',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.3'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
