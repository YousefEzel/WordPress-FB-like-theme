<!-- row of post-header -->
	<div class="row comment_area-header mx-1 my-2" ><!--  Post - Image  -->
		<div class="col-1 mr-3 user-image" style="text-align: center;">
			<picture class="post-user-img">
				<source srcset="<?php $user = wp_get_current_user();  print get_avatar_url( $user->ID); ?>"/>
				<img style="border-radius: 35px;" class="user-img my-1 comment_user-img" src="<?php print get_avatar_url($user->ID); ?>"/>
			</picture>
		</div>
		<div class="col my-1 mx-2"><!--  Post - User Name  -->
			<div class="row">
				<input type="text" name="comment" id="comment" class="comment_area" placeholder="Write something" tabindex="4"/>
			</div>
		</div>
	</div>
	<?php  
	$args = ['number'=>'3'];
	$comment_array = get_approved_comments(get_the_ID(), $args);

	foreach($comment_array as $comment):

		$GLOBALS['com_number'] = $args['number'];
		$replies = get_comments( array( 'parent' => $comment->comment_ID, 'status' => 'approve', 'order' => 'ASC' ) );
		if( ! $comment->comment_parent > 0):
		
			get_template_part('comment', 'replay');

			if( $replies ): 		
				foreach ($replies as $reply):?>

					<div class="row <?php echo ($comment->comment_parent>0 or $reply->comment_content) ? 'has_parent' : ''; ?> comment_area-header mx-1 my-2" >
						<div class="col-1 mr-2 user-image" style="text-align: center;"><!--  Post - Image  -->
							<picture class="post-user-img">
								<source srcset="<?php print get_avatar_url($comment->user_id ? get_userdata( $comment->user_id ) : false); ?>"/>
								<img style="border-radius: 35px;" class="user-img my-1 comment_user-img" 
								src="<?php print get_avatar_url($comment->user_id ? get_userdata( $comment->user_id ) : false); ?>"/>
							</picture>
						</div>
						<div class="col mb-1 comment"><!--  Post - User Name  -->
							<div class="row mx-1 px-1 pt-1">
								<a style="color:#385898; " href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>">
									<b><?php echo $comment->comment_author; ?></b>
								</a>
								<!-- <div class="like-btn" class="span-info" style=""> Like  </div> -->
								<span class="comment_date" class="span-info" style="" >
									<?php echo $comment->comment_date; ?>
								</span>
								
							</div>
							<div class="row mx-1 px-1 pb-1">
								
								<div class="">
									<?php echo $reply->comment_content /*. ' -C_Header '*/ ; 
									//print_r($replies);
									 
									//echo ' -reply- '.$reply->comment_content ;
									
									
									?>
								</div>
							</div>
							
						</div>
					</div>
	<?php 		endforeach;
			endif; 
		endif;
	endforeach; 
?>