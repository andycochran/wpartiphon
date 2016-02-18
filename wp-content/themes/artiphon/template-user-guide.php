<?php
/*
Template Name: User Guide
*/
?>

 <?php get_header(); ?>

	<div id="content">

    <div class="user-guide-diagram">
      <div class="user-guide-image" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/instrument-1-on-wood.jpg');">
        <ul class="user-guide-buttons">
          <li class="volume"><button class="user-guide-button">&nbsp;</button></li>
          <li class="bridge"><button class="user-guide-button">&nbsp;</button></li>
          <li class="capo"><button class="user-guide-button">&nbsp;</button></li>
          <li class="fingerboard"><button class="user-guide-button">&nbsp;</button></li>
          <li class="speaker"><button class="user-guide-button">&nbsp;</button></li>
          <li class="speaker-2"><button class="user-guide-button">&nbsp;</button></li>
        </ul>
      </div>
      <ul class="user-guide-callouts">
        <li class="user-guide-callout volume">
          <div class="callout">
            <h6>Volume &amp; Preset Knob</h6>
            <small>The knob  is turned to control volume, and presses to cycle between playing presets.</small>
            <a href="#" class="button small expanded">LEARN MORE</a>
          </div>
        </li>
        <li class="user-guide-callout speakers">
          <div class="callout">
            <h6>Speakers</h6>
            <small>The INSTRUMENT 1 has on-board stereo speakers, 3-Watt amplifier, and ⅛-inch stereo output for headphones or external speakers.</small>
            <a href="#" class="button small expanded">LEARN MORE</a>
          </div>
        </li>
        <li class="user-guide-callout fingerboard">
          <div class="callout">
            <h6>Fingerboard</h6>
            <small>The pressure-sensitive fingerboard can be played in fretted, fretless, grid, and pad modes.</small>
            <a href="#" class="button small expanded">LEARN MORE</a>
          </div>
        </li>
        <li class="user-guide-callout capo">
          <div class="callout">
            <h6>Capo Buttons</h6>
            <small>Digital capo buttons transpose the tuning of the INSTRUMENT 1 twelve half-steps either up or down.</small>
            <a href="#" class="button small expanded">LEARN MORE</a>
          </div>
        </li>
        <li class="user-guide-callout bridge">
          <div class="callout">
            <h6>Bridge</h6>
            <small>The bridge can be strummed, tapped, plucked, and bowed.</small>
            <a href="#" class="button small expanded">LEARN MORE</a>
          </div>
        </li>
      </ul>
    </div>

		<div id="inner-content" class="row">

		    <main id="main" class="medium-8 large-9 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
