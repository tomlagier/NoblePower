<div class="clear"></div>
</div>
<footer>
<div id="footer-menu">
    <?php 
        $args = array( 'menu' => 'footer-menu');
        wp_nav_menu($args); 
    ?>
</div>
<div id="copyright">
Site designed, hosted, and powered by <a href="http://prpco.com" target="_blank"><img class="powered-by-prp-img" src="<?php echo home_url(); ?>/wp-content/uploads/2013/06/PRPCO_red_WEB1.png" /></a>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>