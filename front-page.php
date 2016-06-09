<?php get_header();

			$buttonLeftTitle  	= get_field('button_left_title');
			$buttonLeftCopy  		= get_field('button_left_content');
			$buttonLeftLink			= get_field('button_left_link');
			$buttonCenterTitle  = get_field('button_center_title');
			$buttonCenterCopy  	= get_field('button_center_copy');
			$buttonCenterLink		= get_field('button_center_link');
			$buttonRightTitle  	= get_field('button_right_title');
			$buttonRightCopy  	= get_field('button_right_copy');
			$buttonRightLink		= get_field('button_right_link');
?>

	<main class="slide">
	<div class="panels">
		<div class="panel-left">
			<div class="home-button home-button_left passive">
				<a href="<?php print $buttonLeftLink; ?>" title="<?php print $buttonLeftTitle; ?>">
					<p class="home-button_title"><?php print $buttonLeftTitle; ?></p>
					<div class="hidden">
						<p class="home-button_copy"><?php print $buttonLeftCopy; ?></p>
						<div class="home-button_footer">Learn More</div>
					</div>
				</a>
				<div class="left-close close-button"></div>
			</div>
		</div>
		<div class="panel-center">
			<div class="home-button home-button_center passive">
				<a href="<?php print $buttonCenterLink; ?>" title="<?php print $buttonCenterTitle; ?>">
					<p class="home-button_title"><?php print $buttonCenterTitle; ?></p>
					<div class="hidden">
						<p class="home-button_copy"><?php print $buttonCenterCopy; ?></p>
						<div class="home-button_footer">Learn More</div>
					</div>
				</a>
				<div class="center-close close-button"></div>
			</div>
		</div>
		<div class="panel-right">
			<div class="home-button home-button_right passive">
				<a href="<?php print $buttonRightLink; ?>" title="<?php print $buttonRightTitle; ?>">
					<p class="home-button_title"><?php print $buttonRightTitle; ?></p>
					<div class="hidden">
						<p class="home-button_copy"><?php print $buttonRightCopy; ?></p>
						<div class="home-button_footer">Learn More</div>
					</div>
				</a>
				<div class="right-close close-button"></div>
			</div>
		</div>
	</div>
	</main>

<?php get_footer(); ?>