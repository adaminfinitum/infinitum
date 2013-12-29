<?php
/**
 * The template used for google analytics 'Universal' analytics.js snippet
 *
 * @package infinitum
 * @since infinitum 0.9
 *
 * Using the 'async' snippet with the 'universal' snippet requires renaming the global object
 * details here https://developers.google.com/analytics/devguides/collection/analyticsjs/advanced
 * I use 'gaUni' as it's short and transparent.
 *
 * Includes customization to track 100% of page load times, rahter than default 1%.
 *
 * I have also included the 'linkid.js' plugin which lets you see which links are getting clicked
 * (in in-page analytics) when there are multiple links to the same destination on the page.
 *
 * Replace 'UA-XXXXXXX-X' with your UA id.
 *
 * Will work with or without another analytics snippet being present.
 *
 */
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','gaUni');
  gaUni('create', 'UA-XXXXXXX-X', {'siteSpeedSampleRate': 100});
  gaUni('require', 'linkid', 'linkid.js');
  gaUni('send', 'pageview');
</script>
<!-- Rename the global variable if using 2 snippets.-->
<!-- additional details at https://github.com/AdamInfinitum/infinitum ) -->
