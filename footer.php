	</div> <!-- /#container -->
		<footer class="clearfix">
		    <div class="row clearfix">
			    <?php dynamic_sidebar( 'Footer' ); ?>
			</div>
			<div class="row clearfix">
			    <p>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
			</div>
		</footer>
  <script gumby-touch="assets/js/gumby/libs"></script>
  <?php wp_footer(); ?>
  <?php get_template_part( 'templates/partials/inc', 'gaJSAsync' ); ?>
  <script src="assets/js/extra-ga-js.js"></script>
</body>
</html>
