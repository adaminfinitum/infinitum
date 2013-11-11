	</div> <!-- /#container -->
		<footer class="clearfix">
		    <div class="row clearfix">
			    <?php dynamic_sidebar( 'Footer' ); ?>
			</div>
			<div class="row clearfix">
			    <p>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
			</div>
		</footer>
  <script gumby-touch="/wp-content/themes/Wordpress-Starter-Theme/assets/js/gumby/libs"></script>
  <?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-44745278-1', {'siteSpeedSampleRate': 100});
  ga('send', 'pageview');
</script>
<script>
var _gaq = _gaq || [];
var pluginUrl =
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
_gaq.push(['_setAccount', 'UA-27155590-1']);
_gaq.push(['_setSiteSpeedSampleRate', 100]);
_gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
