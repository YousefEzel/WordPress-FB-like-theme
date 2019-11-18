			<!-- row of post-header -->
			<div class="row post-header mb-2" ><!--  Post - Image  -->
				<div class="col-1 mr-3 user-image" style="text-align: center;">
					<picture class="post-user-img">
						<source srcset="<?php print get_avatar_url(get_the_author_meta( 'user_email', false )); ?>"/>
						<img style="border-radius: 35px;" class="user-img" src="<?php print get_avatar_url(get_the_author_meta( 'user_email', false )); ?>"/>
					</picture>
				</div>
				<div class="col mx-2"><!--  Post - User Name  -->
					<div class="row">
						<div class="col mx-2 user-name">
							<b>
								<a style="color:#385898; " href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">
								<?php the_author(); ?></a>
							</b>
								a partagé <h6 style="color:#385898;display: inline;" class="Post-title"><a style="color:#385898;" href="<?php the_permalink() ?>">
								
								<?php echo (empty(get_the_title())) ? ' une Pulication ' : the_title();?>
								</a></h6>
							
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