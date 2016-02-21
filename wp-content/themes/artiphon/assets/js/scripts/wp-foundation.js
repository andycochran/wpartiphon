/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

    // Makes sure last grid item floats left
    jQuery('.archive-grid .columns').last().addClass( 'end' );

  	// Adds Flex Video to YouTube and Vimeo Embeds
  	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video widescreen'/>");

    jQuery( '.popup-close-button' ).click(function() {
        jQuery( '.user-guide-callout' ).addClass( 'hide' );
    });

    jQuery( '.user-guide-button' ).click(function() {
        jQuery( '.user-guide-callout' ).addClass( 'hide' );
        var theCallout = jQuery( this ).data( 'popup' );
        jQuery( '#'+theCallout ).removeClass( 'hide' );
    });

});
