<?php 
	get_header(); 
?>

<section class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="text-center">
				<?php the_title(); ?>
			</h1>

			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php
get_footer();