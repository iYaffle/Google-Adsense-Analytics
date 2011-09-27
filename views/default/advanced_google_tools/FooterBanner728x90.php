<!-- Get the Publisher and Slot ID for the Banner Size 728 x 90 along with Adsense for Footer -->

<?php

/* ***********************************************************************
 * @author : Purusothaman Ramanujam
 * @link http://www.iYaffle.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $publisherid  = elgg_get_plugin_setting('publisherid',  'advanced_google_tools');
    $banner728x90 = elgg_get_plugin_setting('banner728x90', 'advanced_google_tools');
    $analyticsID  = elgg_get_plugin_setting('analytics',  'advanced_google_tools');
?>

<br/>

<?php if (strlen(trim($banner728x90)) >0 && strlen(trim($publisherid)) >0 ) { ?>

<center>
<script type="text/javascript">
   <!--
       google_ad_client = "<?php echo $publisherid; ?>";
       /* Banner728x90 */
       google_ad_slot = "<?php echo $banner728x90; ?>";
       google_ad_width = 728;
       google_ad_height = 90;
   //-->
</script>

<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>

<?php } ?>

<!-------- Analytics Script ---------------->
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try {
	var pageTracker = _gat._getTracker("<?php echo $analyticsID; ?>");
	pageTracker._trackPageview();
} catch(err) {}
</script>
