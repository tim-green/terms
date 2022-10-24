<?php get_header(); ?>
<section class="container">
	<div class="row">
		<div class="col-lg-12">

		<h1 class="text-center">
			<?php the_title(); ?>
		</h1>

		<p>
			Created on <span><?php the_time('F j, Y'); ?></span> at <span><?php the_time('g:i a');?></span></p>
		<p>
			Category: <span><?php the_category(', '); ?></span>
		</p>

		<?php the_content(); ?>

		</div>
	</div>
</section>
<?php get_footer();