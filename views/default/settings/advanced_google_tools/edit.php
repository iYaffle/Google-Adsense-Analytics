<?php

/* ***********************************************************************
 * @author : Purusothaman Ramanujam
 * @link http://www.iYaffle.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

	$analytics = $vars['entity']->analytics;
	$publisherid = $vars['entity']->publisherid;
	$banner728x90 = $vars['entity']->banner728x90;
	$banner160x600 = $vars['entity']->banner160x600;
?>

<br/>

<table border="0">

<tr>
    <td height=60> 
        <b><?php echo elgg_echo('advanced-google-tools:lblPublisherID'); ?></b><br/>
        <?php echo elgg_echo('advanced-google-tools:lblPubExample'); ?>
     </td>

     <td>:</td>

     <td height=50 width=300>
         <?php echo elgg_view('input/text', array(
		              'internalname' => 'params[publisherid]',
			      'value' => $publisherid));
         ?>
     </td>
</tr>

<tr>
     <td height=60> 
         <b><?php echo elgg_echo('advanced-google-tools:lblBanner728x90'); ?></b>
     </td>

     <td>:</td>

     <td height=50> 
         <?php echo elgg_view('input/text', array(
	                      'internalname' => 'params[banner728x90]',
		              'value' => $banner728x90));
         ?>
     </td>
</tr>

<tr>
     <td height=60> 
         <b><?php echo elgg_echo('advanced-google-tools:lblBanner160x600'); ?></b>
     </td>

     <td>:</td>

     <td height=60> 
         <?php echo elgg_view('input/text', array(
	                      'internalname' => 'params[banner160x600]',
		              'value' => $banner160x600));
         ?>
     </td>
</tr>
  
    
<tr>
<td align="center" height=50>    <b><?php echo elgg_echo('advanced-google-tools:lblAnalyticsID'); ?></b><br/> 
<?php echo elgg_echo('advanced-google-tools:lblExample'); ?></td>
<td align="center" height=50>:</td>
<td align="center" height=50>	<?php
		echo elgg_view('input/text', array(
			'internalname' => 'params[analytics]',
			'value' => $analytics
		));
	?></td>
</tr>
</table>
<br/>

For ads to be displayed both Publisher Id and Adslot ID should be provided. <br/> <br/>
<i><?php echo elgg_echo('advanced-google-tools:lblAdsenseHelp'); ?> <a href="http://adsense.google.com/">Google Adsense</a></i>.<br/>
<i><?php echo elgg_echo('advanced-google-tools:lblAnalyticsHelp'); ?> <a href="http://www.google.com/analytics/">Google Analytics</a></i>.