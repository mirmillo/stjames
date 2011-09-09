<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="entry <?php sandbox_post_class() ?>">
    <div class="entrytitle_wrap">
      <div class="entrydate">
        <div class="dateMonth">
          <?php the_time('M');  ?>
        </div>
        <div class="dateDay">
          <?php the_time('j'); ?>
        </div>
      </div>
      <div class="entrytitle">
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h1>
      </div>
    </div>
    <div class="entrybody">
      <?php the_content('Read the rest of this entry &raquo;'); //the_excerpt();  ?>
      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    </div>
    <div class="entrymeta">
      <div class="postinfo">
        <?php social_bookmarks(); ?>
        <span class="postedby">Posted by
        <?php the_author() ?>
        </span><span class="filedto">
        <?php the_category(', ') ?>
        </span>
        <?php if(function_exists('wp_print')) { print_link(); } ?>
        <span class="rss">Subscribe to <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to RSS feed'); ?>" rel="nofollow">
        <?php _e('<abbr title="Subscribe to RSS Feed">RSS</abbr>'); ?>
        </a> feed</span>
        <?php edit_post_link('Edit', ' | ', ''); ?>
      </div>
    </div>
    <?php /* Related Posts Plugin */ if ( (function_exists('similar_posts')) && is_single()  ) { ?>
    <div class="relpost" >
      <?php similar_posts(); ?>
    </div>
    <?php } ?>
    <?php if ($loopcounter == 1) { include (TEMPLATEPATH . '/ad_middle.php'); } ?>
  </div>
  <div class="commentsblock">
    <?php comments_template(); ?>
  </div>
  <?php endwhile;  ?>
  <?php else : ?>
  <h2>Not Found</h2>
  <div class="entrybody">Sorry, but you are looking for something that isn't here.</div>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
