<?php get_header(); ?>

	<main>
	<?php if( have_rows('buttons') ) { ?>
		<div class="container">
		<?php while ( have_rows('buttons') ) : the_row(); ?>
		<?php
			$count 					= count(get_field('buttons'));
			$buttonText 		= get_sub_field('button_text');
			$buttonLink			= get_sub_field('button_link');
		?>
			<?php if($count === 3) { ?>
				<div class="one-of-three button-container">
					<a class="button primary" href="<?php print $buttonLink; ?>" title="<?php print $buttonText; ?>"><?php print $buttonText; ?></a>
				</div>
			<?php } else if($count === 2) { ?>
				<div class="one-of-two button-container">
					<a class="button primary" href="<?php print $buttonLink; ?>" title="<?php print $buttonText; ?>"><?php print $buttonText; ?></a>
				</div>
			<?php } else { ?>
				<div class="one-of-one button-container">
					<a class="button primary" href="<?php print $buttonLink; ?>" title="<?php print $buttonText; ?>"><?php print $buttonText; ?></a>
				</div>
			<?php } ?>
		<?php endwhile; wp_reset_postdata();?>
		</div>
	<?php } ?>
	</main>

<?php get_footer();