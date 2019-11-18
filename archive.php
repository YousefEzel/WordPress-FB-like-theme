<?php get_header();?>
<div class="container-fluid mt-3" style="max-width: 90% !important;">
	<div class="row">
		<!-- sidebarLeft -->
			<?php //get_template_part('content','sidebarLeft'); ?>
		<!-- /sidebarLeft -->

		<!-- Body-content -->
			<?php get_template_part('content'); ?>
		<!-- /Body-content -->

		<!-- sidebarRight -->
			<?php //get_template_part( 'content', 'sidebarRight' ) ?>
		<!-- /sidebarRight -->
	</div>
</div>
<?php get_footer();?>