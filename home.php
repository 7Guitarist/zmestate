<?php get_header(); ?>

	<!-- your home html -->

	<!-- Slideshow -->
	<section class="hp-slideshow">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?><?php endif ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow Content") ) : ?><?php endif ?>
	</section>

	<!-- Featured Properties -->
	<section class="hp-featured-properties block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Featured Properties") ) : ?><?php endif ?>
	</section>

	<!-- Welcome -->
	<section class="hp-welcome block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Welcome") ) : ?><?php endif ?>
	</section>

	<!-- Featured Video -->
	<section class="hp-featured-video block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Featured Video") ) : ?><?php endif ?>
	</section>

	<!-- NEIGHBORHOOD Guides -->
	<section class="hp-neighborhood-guides block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Neighborhood Guide") ) : ?><?php endif ?>
	</section>

	<!-- Buy With Us | List With Us -->
	<section class="hp-buy-list block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Buy List") ) : ?><?php endif ?>
	</section>

	<!-- Testimonials -->
	<section class="hp-testimonials block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Testimonials") ) : ?><?php endif ?>
	</section>
	
	<!-- Contact -->
	<section class="hp-contact block">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Contact") ) : ?><?php endif ?>
	</section>

	<!-- your home html -->

<?php get_footer(); ?>
