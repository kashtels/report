( function ( $ ) {
	"use strict";

	var x = jQuery.noConflict();

	x( '#vmap' ).vectorMap( {
		map: 'world_en',
		backgroundColor: null,
		color: '#ffffff',
		hoverOpacity: 0.7,
		selectedColor: '#1de9b6',
		enableZoom: true,
		showTooltip: true,
		values: sample_data,
		scaleColors: [ '#1de9b6', '#03a9f5', '#001052', '#bdbdbd'],
		normalizeFunction: 'polynomial',
		onRegionClick: function ( element, code, region ) {
			var message = 'You clicked "' + region.toLowerCase() + '" which has the code: ' + code.toUpperCase();

			alert( message );
		}
	} );
	
} )( jQuery );