<div class="row my-2  py-2 post-footer">
	<div class="col pf like">Like</div>
	<div class="col pf comments">
		<a href="<?php the_permalink() ?>">
			<?php echo get_comments_number(); echo (get_comments_number()>1)? ' Comments':' Comment'  ?> </a>
		<span class="span-info post-date" style="color: #606770 !important;"> · 
			Displayed(<?php echo (get_comments_number() > $GLOBALS['com_number']) ? $GLOBALS['com_number'] : get_comments_number() ; ?>)
		</span>
	</div>
</div>
<div class="row post-footer-prop">
	<div class="col pf like">1000 ❤️ </div>
	<div class="col pf comment_link">  </div>
</div>
<div class="row">
	<div class="col">
	<?php (is_single()) ? comments_template( '/comments.php' ) : '' ; ?>
	<?php if(is_home() or is_archive() or is_front_page()): $com = retreive_comments(); // My Function to retreive comments 
			get_template_part( 'comment', 'header' );	
		endif; ?>
	</div>
</div> 