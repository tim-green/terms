<?php
/**
 * 
 * Template Name: Categories
 * 
 */
?>
<?php get_header(); ?>

<section class="container">
    <div class="row">
		<?php
		$args = array(
			'orderby' => 'slug',
			'parent' => 0
		);
		$categories = get_categories( $args );
		$array = array();
		foreach ( $categories as $category ) {
			$array[] = [
				'tag'   => $category->name,
				'count' => $category->count,
			];
		}
		?>

        <div class="col-lg-12">
        </div>
    </div>
</section>

<?php get_footer() ?>

