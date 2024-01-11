/*
My Custom JS
=============
Author: Shaifulla Sohag
Project: 
*/

jQuery(document).ready(function ($) {

	// Chache DOM
	var $scrollTop = $('#scroll_to_top');

	$scrollTop.tooltip({

		'title' : 'Scroll Top',
		'placement' : 'top'

	});
    
    $scrollTop.click(function () {
        
        $('html,body').animate({
            
            'scroll-top' : '0'
            
        }, 100);
        
    });

    $( '.video_container' ).fitVids();



});