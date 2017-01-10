
<?php get_header(); ?>


	<div id="news">
		<div class="title">
			جديد الموقع
		</div>
		<div class="content">
			هنا قائمة الأخبار
		</div>
	</div>

					

<div class="row">
	<div class="col-md-2">
		
		<?php get_sidebar('left'); ?>
	</div>

	<div class="col-md-8">
		<main role="main" >
			<!-- section -->
			<section>
				<article>
					<h1>الكلمة الشهرية</h1>
					<p>Lorem ipsum Nostrud commodo ut in in Excepteur amet nulla eu Ut nisi Ut aliqua amet in veniam laboris.
						Lorem ipsum Aute enim id fugiat exercitation amet cillum anim laboris consequat est dolor.
						Lorem ipsum Dolore exercitation esse amet est in est dolore consequat veniam do officia est mollit dolor id velit aliquip enim sit.
						Lorem ipsum Nostrud commodo ut in in Excepteur amet nulla eu Ut nisi Ut aliqua amet in veniam laboris.
						Lorem ipsum Aute enim id fugiat exercitation amet cillum anim laboris consequat est dolor.
						Lorem ipsum Dolore exercitation esse amet est in est dolore consequat veniam do officia est mollit dolor id velit aliquip enim sit.
						Lorem ipsum Nostrud commodo ut in in Excepteur amet nulla eu Ut nisi Ut aliqua amet in veniam laboris.
						Lorem ipsum Aute enim id fugiat exercitation amet cillum anim laboris consequat est dolor.
						Lorem ipsum Dolore exercitation esse amet est in est dolore consequat veniam do officia est mollit dolor id velit aliquip enim sit.
						Lorem ipsum Nostrud commodo ut in in Excepteur amet nulla eu Ut nisi Ut aliqua amet in veniam laboris.
						Lorem ipsum Aute enim id fugiat exercitation amet cillum anim laboris consequat est dolor.
						Lorem ipsum Dolore exercitation esse amet est in est dolore consequat veniam do officia est mollit dolor id velit aliquip enim sit.
					</p>	

				</article>
				
				<hr>

				<!--
				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				-->
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