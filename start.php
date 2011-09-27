<?php

/* ***********************************************************************
 * @author : Purusothaman Ramanujam
 * @link http://www.iYaffle.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/
 
    function advanced_google_tools_init()
    {
	// Extend the footer view to have the Adsense Ads along with Analytics code.
	elgg_extend_view('page/elements/footer', 'advanced_google_tools/FooterBanner728x90');

	// Extend the sidebar view to have the Adsense Ads.
	elgg_extend_view('page/elements/sidebar', 'advanced_google_tools/SidebarBanner160x600');

	// Extend the content header view to have the Adsense Ads in all pages.
	elgg_extend_view('page/layouts/content/header','advanced_google_tools/Banner728x90');
    }
 
    register_elgg_event_handler('init','system','advanced_google_tools_init');
 
?>