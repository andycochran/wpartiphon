<?php
/*
Template Name: Category Archive
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="medium-8 large-9 columns" role="main">

				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

					<?php
					$pageTitle = the_title('', '', false);
					$args = array(
						'before_widget' => '<div class="artiphon-category-archive">',
						'after_widget' => '</div>',
						'before_title' => '<header class="article-header"><h1 class="page-title">',
						'after_title' => '</h1></header>'
					);
					$instance = array(
						'title' => $pageTitle,
						'count' => 1,
						'hierarchical' => 0,
						'dropdown' => 0
					);
					the_widget( 'WP_Widget_Categories', $instance, $args );
					?>

				</article> <!-- end article -->

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
