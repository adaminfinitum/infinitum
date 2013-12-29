<?php
/**
 * The template used for google analytics async ga.js snippet
 *
 * @package infinitum
 * @since infinitum 0.9
 *
 * Includes reference to additional script for event tracking (at the bottom)
 * see that file for more detaisl
 *
 * Includes customization to track 100% of page load times, rather than default 1%.
 *
 * Also includes the 'inpage_linkid.js' plugin which lets you see which links are getting clicked
 * (in in-page analytics) when there are multiple links to the same destination on the page.
 *
 * Replace 'UA-XXXXXXXX-X' with your UA account id.
 *
 */
?>
<script>
var _gaq = _gaq || [];
var pluginUrl =
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
_gaq.push(['_setSiteSpeedSampleRate', 100]);
_gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="/wp-content/themes/infinitum/assets/js/extras-ga-js.js"></script>
