<?php get_header();?>
<div class="container mt-3">
	<div class="row side-row ml-3 mr-3" style="float: left;">
		<div class="col-lg col-xl col-md ">
			<?php dynamic_sidebar('sidebar-right-1'); ?>
		</div>
	</div>
	<div class="row">
		<?php
		if (is_user_logged_in()):
			if(have_posts()):
		while (have_posts()): the_post();?>
		<div class="row Post-full">
			<!-- start of Post -->
			<div class="col mx-3 p-3 ">
				<!-- row of post-header -->
				<div class="row post-header mb-2" ><!--  Post - Image  -->
					<div class="col-1 mr-3 user-image" style="text-align: center;">
						<picture class="post-user-img">
							<source srcset="<?php print get_avatar_url(get_the_author_meta( 'user_email', false )); ?>"/>
							<img style="border-radius: 35px;" class="user-img" src="<?php print get_avatar_url(get_the_author_meta( 'user_email', false )); ?>"/>
						</picture>
					</div>
					<div class="col-7 mx-2"><!--  Post - User Name  -->
						<div class="row">
							<div class="col mx-2 user-name">
								<b>
								<a style="color:#385898;" href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">
								<?php the_author(); ?></a>
								</b>
							</div>
						</div>
						<div class="row"><!--  Post - Date  -->
							<div class="col mx-2 post-date" style="color: #606770 !important;">
								<?php echo get_the_date( 'j, F Y' ) .' at '. get_the_date( ' H:i' );  ?>
								<?php echo ' · '.get_post_status( get_the_ID() ); ?>
							</div>
						</div>
					</div>
				</div>
				<!-- row of post-body --  Body_Title  -->
				<div class="row ">
					<div class="col"><?php the_title('<h4 class="Post-title">—', '</h4>'); ?></div>
				</div>
				<!-- body -->
				<div class="row post-content">
					<?php the_content(); ?>
				</div>
				<div class="row post"></div>
				<!-- End of Post -->
			</div>
		</div>
	<?php		endwhile;
	endif;
	else:
	echo "<h1> PLEASE login! </h1>";


	endif;?>
	
</div>
</div>
<?php get_footer();?>