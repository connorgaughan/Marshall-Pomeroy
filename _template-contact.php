<?php
/**
 * Template Name: Contact
 * Selectable from the dropdown menu on the edit page screen.
 */
?>

<?php get_header(); ?>
<?php
// global contact variables here
$phone  = get_field('phone_number');
$email 	= get_field('email_address');
$form 	= get_field('contact_form_shortcode');
?>
<?php while( have_posts() ): the_post(); ?>
	<div class="page">
		<div class="intro container">
			<?php msw_breadcrumbs(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<div class="row row-contact">
			<div class="container">
				<ul class="contact-us-row">
					<li class="phone-icon"><?php print $phone; ?></li>
					<li class="email-icon"><?php print $email; ?></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<?php echo do_shortcode(''.$form.''); ?>
			<div id="gmap"></div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>