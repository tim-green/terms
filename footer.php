	<?php
		$protocol = array('https://');
		$domain = str_replace($protocol, '', get_bloginfo('wpurl'));
	?>


	<footer class="container">
		<div class="row">
			<div class="col-lg-12">
				<small></small>
			</div>
		</div>
	</footer>
</main>

<?php
	get_template_part('inc/integrations','load');
?>