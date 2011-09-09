<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="entry <?php sandbox_post_class() ?>">
    <div class="entrytitle_wrap">
      <?php /* if (!(is_page('about') || is_page('contact') || is_page('Sitemap') || is_page('tags')) ) :?>
      <div class="entrydate">
        <div class="dateMonth">
          <?php the_time('M'); ?>
        </div>
        <div class="dateDay">
          <?php the_time('j'); ?>
        </div>
      </div>
      <?php endif; */ ?>
      <div class="entrytitle">
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h1>
      </div>
    </div>
    <div class="entrybody">
      <?php the_content('Read the rest of this entry &raquo;');  ?>
      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
      <?php $category = get_category_by_slug($post->post_name);
	  if($category)  { ?>
      <h3 class="moreinfo">
		<a href="/category/<?php echo $post->post_name; ?>/">&raquo; See what's happening at the <?php the_title(); ?>.</a>
	 </h3>
     <?php } ?>
    </div>
    <div class="pagelink">
      <?php wp_link_pages(); ?>
    </div>
    <?php if (!(is_page('Sitemap')  || is_page('tags')) ) :?>
    <div class="entrymeta">
      <div class="postinfo">
        <?php social_bookmarks(); ?>
        <span class="postedby">Posted by
        <?php the_author() ?>
        </span>
        <?php if(function_exists('wp_print')) { print_link(); } ?>
        <span class="rss">Subscribe to <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to RSS feed'); ?>" rel="nofollow">
        <?php _e('<abbr title="Subscribe to RSS Feed">RSS</abbr>'); ?>
        </a></span>
        <?php edit_post_link('Edit', ' | ', ''); ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <div class="commentsblock">
    <?php comments_template(); ?>
  </div>
  <?php endwhile; ?>
  <?php else : ?>
  <h2>Not Found</h2>
  <div class="entrybody">Sorry, but you are looking for something that isn't here.</div>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
