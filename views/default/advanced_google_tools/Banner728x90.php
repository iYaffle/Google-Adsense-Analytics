<!-- Get the Publisher and Slot ID for the Banner Size 728 x 90 -->

<?php
/* ***********************************************************************
 * @author : Purusothaman Ramanujam
 * @link http://www.iYaffle.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $publisherid  = elgg_get_plugin_setting('publisherid',  'advanced_google_tools');
    $banner728x90 = elgg_get_plugin_setting('banner728x90', 'advanced_google_tools');
?>

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

<br/>

<?php } ?>
