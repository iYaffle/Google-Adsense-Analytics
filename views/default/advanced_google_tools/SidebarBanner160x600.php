<!-- Get the Publisher and Slot ID for the Banner Size 160 x 600 -->

<?php

/* ***********************************************************************
 * @author : Purusothaman Ramanujam
 * @link http://www.iYaffle.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $publisherid   = elgg_get_plugin_setting('publisherid',   'advanced_google_tools');
    $banner160x600 = elgg_get_plugin_setting('banner160x600', 'advanced_google_tools');
?>

<br/>

<?php if (strlen(trim($banner160x600)) >0 && strlen(trim($publisherid)) >0 ) { ?>

<center>
<script type="text/javascript">
   <!--
       google_ad_client = "<?php echo $publisherid; ?>";
       /* Banner160x600 */
       google_ad_slot = "<?php echo $banner160x600; ?>";
       google_ad_width = 160;
       google_ad_height = 600;
   //-->
</script>

<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>

<?php } ?>

