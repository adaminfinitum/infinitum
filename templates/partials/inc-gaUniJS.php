<?php
/**
 * The template used for google analytics 'Universal' analytics.js snippet
 *
 * @package infinitum
 * @since infinitum 0.9
 */
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  gaUni('create', 'UA-XXXXXXXX-X', {'siteSpeedSampleRate': 100});
  gaUni('send', 'pageview');
</script>
<!-- Rename the global variable if using 2 snippets. Since I was using ga.js first, and have more custom configurations for it,
     I renamed the analytics.js global oject to 'gaUni.' -->
