<div id="sidebar">


<div id="sidebar-left">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
    
    
    
    <h4>Recent Posts</h4>
		<ul>
		<?php get_archives('postbypost', 10); ?>
		</ul>
		        
  
    <h4><?php _e('Categories'); ?></h4>
    <ul>
		<?php wp_list_cats('sort_column=name'); ?>
    </ul>
    
    
    <h4><?php _e('Archive'); ?></h4>
  	<ul>
	   <?php wp_get_archives('type=monthly'); ?>
	  </ul>

  
    
   <h4><?php _e('Blogroll'); ?></h4>
    <ul>
    	<?php wp_list_bookmarks('categorize=0&title_li=0&title_after=&title_before='); ?>		
    </ul>
      
   


<?php endif; ?>

   
    
</div>


<div id="sidebar-right">
 	         

	<div class="search-form">
    
		<?php $search_text = "Search..."; ?> 
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 
        <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '')  
        {this.value = '<?php echo $search_text; ?>';}"  
        onfocus="if (this.value == '<?php echo $search_text; ?>')  
        {this.value = '';}" /> 
        <input type="hidden" id="searchsubmit" /> 
        </form>
    
    </div>


	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
            
    <?php get_calendar(1); ?>    
    
    <h4><?php _e('Tags'); ?></h4>
    <ul>
		<?php wp_tag_cloud(''); ?>
    </ul>
     
   <h4><?php _e('Meta'); ?></h4>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<?php wp_meta(); ?>
	</ul>  
 

<?php endif; ?>

</div>

</div>