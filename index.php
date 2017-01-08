
<?php get_header(); ?>

<div class="row" style="border:solid 1px #000">
	<div class="col-md-2">
		
		<?php get_sidebar('left'); ?>
	</div>

	<div class="col-md-8">
		<main role="main">
			<!-- section -->
			<section>

				<h1 class="article">just to know</h1>
				<h2>we are on the next approche</h2>

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php //get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>

	</div>

	<div class="col-md-2">
		
		<?php get_sidebar(); ?>
	</div>

</div>

	

<?php //get_sidebar(); ?>

<?php get_footer(); ?>