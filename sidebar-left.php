<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<h1>This is left sidebar</h1>

	<?php //get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->