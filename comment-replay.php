<div class="row <?php echo ($comment->comment_parent>0) ? 'has_parent' : ''; ?> comment_area-header mx-1 my-2" ><!--  Post - Image  -->
	<div class="col-1 mr-2 user-image" style="text-align: center;">
		<picture class="post-user-img">
			<source srcset="<?php print get_avatar_url($comment->user_id ? get_userdata( $comment->user_id ) : false); ?>"/>
			<img style="border-radius: 35px;" class="user-img my-1 comment_user-img"
			src="<?php print get_avatar_url($comment->user_id ? get_userdata( $comment->user_id ) : false); ?>"/>
		</picture>
	</div>

	<div class="col mb-1 comment"><!--  Post - User Name  -->
		<div class="row mx-1 px-1 pt-1">
			<a style="color:#385898; " href="<?php echo get_author_posts_url( $comment->user_id ); ?>">
				<b><?php echo $comment->comment_author; ?></b>
			</a>
			<!-- <div class="like-btn" class="span-info" style=""> Like  </div> -->
			<span class="comment_date" class="span-info" style="" >
				<?php echo $comment->comment_date; ?>
			</span>
			
		</div>
		<div class="row mx-1 px-1 pb-1">
			<div class="">
				<?php echo $comment->comment_content /*. ' -C_Header '*/ ; 
				?>
			</div>
		</div>
							
	</div>

</div>