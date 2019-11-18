<div class="col-5 <?php echo is_single() ? 'Postfull' : '' ?>">
	<?php
	if (is_user_logged_in()):
		if(have_posts()):
			while (have_posts()): the_post();?>
				<div class="row <?php echo is_single() ? 'Post-full' : 'Post-full' ?>">
					<!-- start of Post -->
					<div class="col mx-3 p-3 ">
						<?php get_template_part( 'post', 'header' ) ?>
						<!-- body -->
						<div class="row post-content">
							<?php the_content(); ?>
						</div>
						<?php get_template_part( 'post','footer' ); ?>
					</div>
				</div>
	<?php	endwhile;
		endif;
	else:
	echo "<h1> PLEASE login! </h1>";

	endif;?>
</div>