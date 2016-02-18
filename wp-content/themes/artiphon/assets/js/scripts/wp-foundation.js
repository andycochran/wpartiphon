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

  jQuery('.user-guide-callout').hide();
  jQuery('.volume > .user-guide-button').click(function(e) {
    e.preventDefault();
    jQuery('.user-guide-callout').hide();
    jQuery('.user-guide-callout.volume').show();
  });
  jQuery('.bridge > .user-guide-button').click(function(e) {
    e.preventDefault();
    jQuery('.user-guide-callout').hide();
    jQuery('.user-guide-callout.bridge').show();
  });
  jQuery('.capo > .user-guide-button').click(function(e) {
    e.preventDefault();
    jQuery('.user-guide-callout').hide();
    jQuery('.user-guide-callout.capo').show();
  });
  jQuery('.fingerboard > .user-guide-button').click(function(e) {
    e.preventDefault();
    jQuery('.user-guide-callout').hide();
    jQuery('.user-guide-callout.fingerboard').show();
  });
  jQuery('.speaker > .user-guide-button,.speaker-2 > .user-guide-button').click(function(e) {
    e.preventDefault();
    jQuery('.user-guide-callout').hide();
    jQuery('.user-guide-callout.speakers').show();
  });

});
