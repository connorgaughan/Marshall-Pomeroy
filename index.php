<?php get_header(); ?>

<?php
// Global variables for single pages
$pageType 			= get_field('page');
$intro 					= get_field('page_intro');
?>

	<?php while( have_posts() ): the_post(); ?>

	<div class="page">
		<?php if($pageType == 'single') { ?>
			<div class="container">
				<?php msw_breadcrumbs(); ?>
				<h1><?php the_title(); ?></h1>
				<?php if( have_rows('content') ) { ?>
					<?php while ( have_rows('content') ) : the_row();
						$singleContent 	= get_sub_field('content_section');
					?>
					<div class="page-content">
						<?php print $singleContent; ?>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php } ?>
			</div>

		<?php } else if($pageType == 'row') { ?>
			<div class="intro container">
				<?php msw_breadcrumbs(); ?>
				<h1><?php the_title(); ?></h1>
				<?php print $intro; ?>
			</div>
			<?php if( have_rows('rows') ) { ?>
				<?php while ( have_rows('rows') ) : the_row();
					$rowImage 			= get_sub_field('row_image');
					$rowContent 		= get_sub_field('row_content');
				?>
				<div class="row">
					<div class="container">
						<div class="row-image">
							<img src="<?php print $rowImage; ?>" />
						</div>
						<div class="row-content">
							<?php print $rowContent; ?>
						</div>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			<?php } ?>
		<?php } else { ?>
			<div class="intro container">
				<?php msw_breadcrumbs(); ?>
				<?php the_content(); ?>
			</div>
		<?php } ?>
	</div>

	<?php endwhile; ?>

<?php get_footer();