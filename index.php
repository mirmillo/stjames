<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) :?>
  <?php $postCount=0; ?>
  <?php while (have_posts()) : the_post(); $loopcounter++;?>
  <?php $postCount++;?>
  <div class="entry entry-<?php echo $postCount ;?> <?php sandbox_post_class() ?>">
    <div class="entrytitle_wrap">
      <div class="entrydate">
        <div class="dateMonth">
          <?php the_time('M');?>
        </div>
        <div class="dateDay">
          <?php the_time('j'); ?>
        </div>
      </div>
      <div class="entrytitle">
        <?php if ($postCount==1):?>
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h1>
        <?php else : ?>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h2>
        <?php endif; ?>
      </div>
      <div class="endate">
        Posted by <?php the_author(); ?>
        on
        <?php the_time('F jS, Y'); ?>
      </div>
    </div>
    <div class="entrybody">
      <?php the_content('Read the rest of this entry &raquo;');   ?>
      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    </div>
    <div class="entrymeta">
      <div class="postinfo">
        <?php if ($postCount==1) social_bookmarks(); ?>
        <span class="filedto">
        <?php the_category(', ') ?>
        </span><span class="commentslink">
        <?php comments_popup_link('No comments yet, be the first &#187;', '1 Comment, join up &#187;', '% Comments, read on &#187;');?>
        </span>
        <?php if ($postCount==1) { if(function_exists('wp_print')) { print_link(); }} ?>
        <?php edit_post_link('Edit', ' | ', ''); ?>
      </div>
    </div>
    <?php if ($loopcounter == 1) { include (TEMPLATEPATH . '/ad_middle.php'); } ?>
  </div>
  <?php endwhile; ?>
  <div id="nav-global" class="navigation">
    <div class="nav-previous">
      <?php 

if(function_exists('wp_page_numbers')) 

{ 

wp_page_numbers(); 

}

else

{

next_posts_link('&laquo; Previous entries');

echo '&nbsp;';

previous_posts_link('Next entries &raquo;');

}

?>
    </div>
  </div>
  <?php else : ?>
  <h2>Not Found</h2>
  <div class="entrybody">Sorry, but you are looking for something that isn't here.</div>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
