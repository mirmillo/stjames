<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
			
<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>
<?php if ($comments) : ?>
<h3 id="comments" class="comment_headings"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3> 

<ol class="commentlist">


	<?php foreach ($comments as $comment) : ?>
    	
        <?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type == 'comment') { ?>

<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
<span class="gravatar">
	<?php
	$size=40;
	$default=get_bloginfo('template_directory').'/images/gravatar.jpg';
	$email=strtolower(trim($comment->comment_author_email));
	$rating = "G"; // [G | PG | R | X]
	   if (function_exists('get_avatar')) {
      echo get_avatar($email, $size, $default);
   } else {
      
      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
         " . md5($emaill) . "&default=" . urlencode($default) . "&size=" . $size."&rating=".$rating;
      echo "<img src='$grav_url'/>";
   }
	?>
</span>
<div class="commentmeta"><cite><?php comment_author_link() ?></cite><br />
<small><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?></small>
</div>

<?php if ($comment->comment_approved == '0') : ?>
<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>

			<?php comment_text() ?>

</li>

	<?php /* Changes every other comment to a different class */	
		if ($oddcomment == 'alt') $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php } /* End of is_comment statement */ ?>
    
	<?php endforeach; /* end for each comment */ ?>


</ol>



<?php 
  $tracks=0;
  foreach ($comments as $comment) : 
    $comment_type = get_comment_type(); 
    if($comment_type != 'comment')  {
      $tracks=1;
      break;
    }
  endforeach; 
?>
<?php if ($tracks) : ?>

<h3 class="comment_headings">Trackbacks/Pingbacks</h3>
	<ol>
	<?php foreach ($comments as $comment) : ?>
		<?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type != 'comment') { ?>
		<li><?php comment_author_link() ?></li>
		<?php } ?>
	<?php endforeach; ?>
	</ol>
<?php endif; ?>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?> 		
		
	 <?php else : // comments are closed ?>		

		<p class="nocomments"></p>
		
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond" class="comment_headings">Leave a Reply</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name<?php if ($req) echo " (required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Email <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>
	



<?php 
/****** Math Comment Spam Protection Plugin ******/
if ( function_exists('math_comment_spam_protection') ) { 
	$mcsp_info = math_comment_spam_protection();
?> 	<p><input type="text" name="mcspvalue" id="mcspvalue" value="" size="22" tabindex="4" />
	<label for="mcspvalue"><small>Spam protection: Sum of <?php echo $mcsp_info['operand1'] . ' + ' . $mcsp_info['operand2'] . ' ?' ?></small></label>
	<input type="hidden" name="mcspinfo" value="<?php echo $mcsp_info['result']; ?>" />
</p>
<?php } // if function_exists... ?>

<?php endif; ?>



<p><small>You can use these tags: <?php echo allowed_tags(); ?></small></p>
<p><textarea name="comment" id="comment" cols="100%" rows="15" tabindex="5"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="6" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

 
<?php do_action('comment_form', $post->ID); ?>


</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
