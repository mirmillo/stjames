<?php

  function social_bookmarks(){ 

       return;

      _e('<span class="socbook">');        

      _e('<a href="'.str_replace(

			array(				

				'%title%',

				'%permalink%',				

				),

			array(				

				urlencode($GLOBALS['post']->post_title),

				urlencode(apply_filters('the_permalink', get_permalink())),                                

				),

			'http://reddit.com/submit?title=%title%&amp;url=%permalink%' ).'"  target="_blank" rel="nofollow"><img src="http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/reddit_be.gif" alt="Reddit" title="Reddit"/></a>'); 

      _e('<a href="'.str_replace(

			array(				

				'%title%',

				'%permalink%',				

				),

			array(				

				urlencode($GLOBALS['post']->post_title),

				urlencode(apply_filters('the_permalink', get_permalink())),                                

				),

			'http://www.facebook.com/share.php?title=%title%&amp;u=%permalink%' ).'"  target="_blank" rel="nofollow"><img src="http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/facebook_be.gif" alt="Facebook" title="Facebook"/></a>'); 

      _e('<a href="'.str_replace(

			array(				

				'%title%',

				'%permalink%',				

				),

			array(				

				urlencode($GLOBALS['post']->post_title),

				urlencode(apply_filters('the_permalink', get_permalink())),                                

				),

			'http://www.stumbleupon.com/submit?title=%title%&amp;url=%permalink%' ).'"  target="_blank" rel="nofollow"><img src="http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/stumbleupon_be.gif" alt="Stumbleupon" title="Stumbleupon"/></a>'); 

      

      _e('<a href="'.str_replace(

			array(				

				'%title%',

				'%permalink%',				

				),

			array(				

				urlencode($GLOBALS['post']->post_title),

				urlencode(apply_filters('the_permalink', get_permalink())),                                

				),

			'http://digg.com/submit?phase=2&amp;title=%title%&amp;url=%permalink%').'"  target="_blank" rel="nofollow"><img src="http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/digg_be.gif" alt="Digg" title="Digg"/></a>'); 

	

      _e('<a href="'.str_replace(

			array(				

				'%title%',

				'%permalink%',				

				),

			array(				

				urlencode($GLOBALS['post']->post_title),

				urlencode(apply_filters('the_permalink', get_permalink())),                                

				),

			//'http://del.icio.us/post?title=%title%&amp;url=%permalink%' ).'"  target="_blank" rel="nofollow" ><img src="http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/del_be.gif" id="del_be" alt="Del.icio.us" title="Del.icio.us" onmouseover="document.images[\'del_be\'].src=\'http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/del_be.gif\';" /></a>'); 

			'http://del.icio.us/post?title=%title%&amp;url=%permalink%' ).'"  target="_blank" rel="nofollow" ><img src="http://www.prelovac.com/vladimir/wp-content/themes/AmazingGrace/images/del_be.gif" id="del_be" alt="Del.icio.us" title="Del.icio.us"  /></a>'); 

      

      _e('</span>');

			}    

/*

<a href="http://reddit.com/submit?url=http://www.cracked.com/video_16339_4-reasons-youre-going-hate-new-mike-myers-movie.html&title=4+Reasons+You're+Going+To+Hate+The+New+Mike+Myers+Movie" target="_blank" rel="nofollow"><img src="http://cdn-www.cracked.com/sites/cracked/images/Jinkies/Reddit.gif" alt="Reddit"/></a>

<a href="http://www.facebook.com/share.php?u=http://www.cracked.com/video_16339_4-reasons-youre-going-hate-new-mike-myers-movie.html&title=4+Reasons+You're+Going+To+Hate+The+New+Mike+Myers+Movie" target="_blank" rel="nofollow"><img src="http://cdn-www.cracked.com/sites/cracked/images/Jinkies/Facebook.gif" alt="Facebook"/></a>

<a href="http://www.stumbleupon.com/submit?url=http://www.cracked.com/video_16339_4-reasons-youre-going-hate-new-mike-myers-movie.html&title=4+Reasons+You're+Going+To+Hate+The+New+Mike+Myers+Movie" target="_blank" rel="nofollow"><img src="http://cdn-www.cracked.com/sites/cracked/images/Jinkies/S.gif" alt="StumbleUpon"/></a>

<a href="http://digg.com/submit?phase=2&url=http://www.cracked.com/video_16339_4-reasons-youre-going-hate-new-mike-myers-movie.html&title=4+Reasons+You're+Going+To+Hate+The+New+Mike+Myers+Movie" target="_blank" rel="nofollow"><img src="http://cdn-www.cracked.com/sites/cracked/images/Jinkies/Digg.gif" alt="Digg"/></a>

<a href="http://del.icio.us/post?url=http://www.cracked.com/video_16339_4-reasons-youre-going-hate-new-mike-myers-movie.html&title=4+Reasons+You're+Going+To+Hate+The+New+Mike+Myers+Movie" target="_blank" rel="nofollow"><img src="http://cdn-www.cracked.com/sites/cracked/images/Jinkies/Delicious.gif" alt="Del.icio.us"/></a>

*/

if ( function_exists('register_sidebar') )

register_sidebar(array('name'=>'Left Sidebar',

'before_widget' => '',

'after_widget' => '',

'before_title' => '<h4>',

'after_title' => '</h4>',

));

register_sidebar(array('name'=>'Right Sidebar',

'before_widget' => '',

'after_widget' => '',

'before_title' => '<h4>',

'after_title' => '</h4>',

));





	



	function wp_widget_multi_pages($args, $number = 1) {

		extract($args);

		$options = get_option('widget_multi_pages');





		$sortby = empty( $options[$number]['sortby'] ) ? 'menu_order' : $options[$number]['sortby'];

		$exclude = empty( $options[$number]['exclude'] ) ? '' : '&exclude=' . $options[$number]['exclude'];

		$headpage = empty( $options[$number]['headpage'] ) ? '' : '&child_of=' . $options[$number]['headpage'];;

		$posts = empty( $options[$number]['posts'] ) ? '' : $options[$number]['posts'];



		if ( $sortby == 'menu_order' ) {

			$sortby = 'menu_order, post_title';

		}

		$title = $options[$number]['title'];

		

		if ($posts!='')

		{

			

			$out='';

			echo  $before_widget . $before_title . $title . $after_title . "<ul>";

 			global $post;

 			$myposts = get_posts('include='.$posts);

 			foreach($myposts as $post) {

 				setup_postdata($post);	 			 			    		

    			echo '<li><a href="';

    			the_permalink();

    			echo '">';

    			the_title();

    			echo '</a></li>';

    		} 			

    		echo  "</ul>". $after_widget;

		}

		else {

			$out = wp_list_pages( 'title_li=&echo=0&sort_column=' . $sortby . $exclude . $headpage);

			

			if ( !empty( $title ) && !empty ( $out ) )

				{

				$out =  $before_widget . $before_title . $title . $after_title . "<ul>". $out . "</ul>". $after_widget;

				}

			

	

			if ( !empty( $out ) ) {

				?>
<?php echo $out; ?>
<?php

			}

		}



	}



	function wp_widget_multi_pages_control($number) {

		$options = $newoptions = get_option('widget_multi_pages');

		if ( !is_array($options) )

			$options = $newoptions = array();



		if ( $_POST["multi-pages-submit-$number"] ) {

			$sortby = stripslashes( $_POST["multi-pages-sortby-$number"] );

			if ( in_array( $sortby, array( 'post_title', 'menu_order', 'ID' ) ) )

				{

				$newoptions[$number]['sortby'] = $sortby;

				}

			else

				{

				$newoptions[$number]['sortby'] = 'menu_order';

				}

			$newoptions[$number]['exclude'] = strip_tags( stripslashes( $_POST["multi-pages-exclude-$number"] ) );

			$newoptions[$number]['headpage'] = strip_tags( stripslashes( $_POST["multi-pages-headpage-$number"] ) );

			$newoptions[$number]['title'] = strip_tags( stripslashes( $_POST["multi-pages-title-$number"] ) );

			$newoptions[$number]['posts'] = strip_tags( stripslashes( $_POST["multi-pages-posts-$number"] ) );



			}



		if ( $options != $newoptions ) {

			$options = $newoptions;

			update_option('widget_multi_pages', $options);

			}



		$exclude = attribute_escape( $options[$number]['exclude'] );

		$headpage = attribute_escape( $options[$number]['headpage'] );

		$title = attribute_escape( $options[$number]['title'] );

		$posts = attribute_escape( $options[$number]['posts'] );



		?>

<p>
  <?php _e( 'Title :' ); ?>
  <input type="text" value="<?php echo $title; ?>" name="multi-pages-title-<?php echo $number; ?>" id="multi-pages-title-<?php echo $number; ?>" style="width: 180px;" />
  <br />
  <small>
  <?php _e( 'Optional.' ); ?>
  </small></p>
<p>
  <?php _e( 'Headpage:' ); ?>
  <input type="text" value="<?php echo $headpage; ?>" name="multi-pages-headpage-<?php echo $number; ?>" id="multi-pages-headpage-<?php echo $number; ?>" style="width: 180px;" />
  <br />
  <small>
  <?php _e( 'Page IDs, separated by commas.' ); ?>
  </small></p>
<p>
  <?php _e( 'Exclude:' ); ?>
  <input type="text" value="<?php echo $exclude; ?>" name="multi-pages-exclude-<?php echo $number; ?>" id="multi-pages-exclude-<?php echo $number; ?>" style="width: 180px;" />
  <br />
  <small>
  <?php _e( 'Page IDs, separated by commas.' ); ?>
  </small></p>
<p>
  <?php _e( 'or<br>Post IDs:' ); ?>
  <input type="text" value="<?php echo $posts; ?>" name="multi-pages-posts-<?php echo $number; ?>" id="multi-pages-posts-<?php echo $number; ?>" style="width: 180px;" />
  <br />
  <small>
  <?php _e( 'Posts IDs, separated by commas.' ); ?>
  </small></p>
<p>
  <?php _e( 'Sort by:' ); ?>
  <select name="multi-pages-sortby-<?php echo $number; ?>" id="multi-pages-sortby-<?php echo $number; ?>">
    <option value="post_title"<?php selected( $options[$number]['sortby'], 'post_title' ); ?>>
    <?php _e('Page title'); ?>
    </option>
    <option value="menu_order"<?php selected( $options[$number]['sortby'], 'menu_order' ); ?>>
    <?php _e('Page order'); ?>
    </option>
    <option value="ID"<?php selected( $options[$number]['sortby'], 'ID' ); ?>>
    <?php _e( 'Page ID' ); ?>
    </option>
  </select>
</p>
<input type="hidden" id="multi-pages-submit-<?php echo $number; ?>" name="multi-pages-submit-<?php echo $number; ?>" value="1" />
<?php

		}



	function wp_widget_multi_pages_setup() {

		$options = $newoptions = get_option('widget_multi_pages');

		if ( isset($_POST['multi-pages-number-submit']) ) {

			$number = (int) $_POST['multi-pages-number'];

			if ( $number > 9 ) $number = 9;

			if ( $number < 1 ) $number = 1;

			$newoptions['number'] = $number;

		}

		if ( $options != $newoptions ) {

			$options = $newoptions;

			update_option('widget_multi_pages', $options);

			wp_widget_multi_pages_register($options['number']);

		}

	}



	function wp_widget_multi_pages_page() {

		$options = $newoptions = get_option('widget_multi_pages');

	?>
<div class="wrap">
  <form method="POST">
    <h2>
      <?php _e('Multi-pages Widgets'); ?>
    </h2>
    <p style="line-height: 30px;">
      <?php _e('How many multi-pages widgets would you like?'); ?>
      <select id="multi-pages-number" name="multi-pages-number" value="<?php echo $options['number']; ?>">
        <?php for ( $i = 1; $i < 10; ++$i ) echo "<option value='$i' ".($options['number']==$i ? "selected='selected'" : '').">$i</option>"; ?>
      </select>
      <span class="submit">
      <input type="submit" name="multi-pages-number-submit" id="multi-pages-number-submit" value="<?php echo attribute_escape(__('Save')); ?>" />
      </span></p>
  </form>
</div>
<?php

	}



	function wp_widget_multi_pages_register() {

		$options = get_option('widget_multi_pages');

		$number = $options['number'];

		if ( $number < 1 ) $number = 1;

		if ( $number > 9 ) $number = 9;

		$dims = array('width' => 460, 'height' => 350);

		$class = array('classname' => 'widget_multi_pages');

		for ($i = 1; $i <= 9; $i++) {

			$name = sprintf(__('Multi-pages %d'), $i);

			$id = "multi-pages-$i"; // Never never never translate an id

			wp_register_sidebar_widget($id, $name, $i <= $number ? 'wp_widget_multi_pages' : /* unregister */ '', $class, $i);

			wp_register_widget_control($id, $name, $i <= $number ? 'wp_widget_multi_pages_control' : /* unregister */ '', $dims, $i);

		}

		add_action('sidebar_admin_setup', 'wp_widget_multi_pages_setup');

		add_action('sidebar_admin_page', 'wp_widget_multi_pages_page');

		}





if ( function_exists('register_sidebar_widget') ) {

    if ( function_exists('wp_register_sidebar_widget')) {

		global $wp_register_widget_defaults;

		$wp_register_widget_defaults = false;



		wp_widget_multi_pages_register();

		register_sidebar_widget('SEO Archives', 'wp_seo_get_archives');



	}

}





function make_chunky($ret)

{

	

	// pad it with a space

	$ret = ' ' . $ret;

	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "$1<a href='$2' rel='nofollow'>$2</a>", $ret);

	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "$1<a href='http://$2' rel='nofollow'>$2</a>", $ret);

	//chunk those long urls

	chunk_url($ret);

	$ret = preg_replace("#(\s)([a-z0-9\-_.]+)@([^,< \n\r]+)#i", "$1<a href=\"mailto:$2@$3\">$2@$3</a>", $ret);	

	// Remove our padding..

	$ret = substr($ret, 1);

	return($ret);

}





function chunk_url(&$ret)

{

   

   $links = explode('<a', $ret);

   $countlinks = count($links);

   for ($i = 0; $i < $countlinks; $i++)

   {

      $link = $links[$i];

      

      

      $link = (preg_match('#(.*)(href=")#is', $link)) ? '<a' . $link : $link;



      $begin = strpos($link, '>') + 1;

      $end = strpos($link, '<', $begin);

      $length = $end - $begin;

      $urlname = substr($link, $begin, $length);

      

      /**

       * We chunk urls that are longer than 50 characters. Just change

       * '50' to a value that suits your taste. We are not chunking the link

       * text unless if begins with 'http://', 'ftp://', or 'www.'

       */

$chunked = (strlen($urlname) > 50 && preg_match('#^(http://|ftp://|www\.)#is', $urlname)) ? substr_replace($urlname, '.....', 30, -10) : $urlname;

$ret = str_replace('>' . $urlname . '<', '>' . $chunked . '<', $ret); 



   }

} 

remove_filter('comment_text', 'make_clickable');

add_filter('comment_text', 'make_chunky');



















function callback_links($match) {	

		$arguments = $match[1] . ' ' . $match[5];

		$nofollow_text = ' rel="nofollow"';

		$output = '<a href="' . $match[2] . '//' . $match[3] . '/' . $match[4] . '"';

		

		$output .= $arguments;

		

			$output .= $nofollow_text;

		

		

		$output .= ">" . $match[6] . "</a>";



		return $output;

	}





function add_nofollow_links($content, $category = null) {

		$output = $content;

		$output = preg_replace_callback('/<a (.*?)href=[\"\'](.*?)\/\/(.*?)\/(.*?)[\"\'](.*?)>(.*?)<\/a>/i','callback_links', $content);



		return $output;

	}



add_filter('wp_list_categories','add_nofollow_links');





/* link navigation hack by Orien http://icecode.com/ */

function wp_seo_get_archives_link($url, $text, $format = 'html', $before = '', $after = '', $do_nofollow = false) {

	$text = wptexturize($text);

	$title_text = attribute_escape($text);

	$nofollow_text = 'nofollow';

	

	if ('link' == $format)

		return "\t<link rel='archives" . ($do_nofollow?$nofollow_text:'') . "' title='$title_text' href='$url' />\n";

	elseif ('option' == $format)

		return "\t<option value='$url'>$before $text $after</option>\n";

	elseif ('html' == $format)

		return "\t<li>$before<a href='$url' title='$title_text'" . ($do_nofollow?' rel="' . $nofollow_text . '"':'') . ">$text</a>$after</li>\n";

	else // custom

		return "\t$before<a href='$url' title='$title_text'" . ($do_nofollow?' rel=\"' . $nofollow_text . '\"':'') . ">$text</a>$after\n";

}







function wp_seo_get_archives($args) {

	global $wp_locale, $wpdb;



	extract($args);

	

	$do_nofollow = true;

	

	echo $before_widget.$before_title.'Archives'.$after_title.'<ul>';

	

	/*if ( is_array($args) )

		$r = &$args;

	else

		parse_str($args, $r);

*/

	$defaults = array('type' => 'monthly', 'limit' => '', 'format' => 'html', 'before' => '', 'after' => '', 'show_post_count' => true);

	//$r = array_merge($defaults, $r);

	//extract($r);

	extract($defaults);



	if ( '' == $type )

		$type = 'monthly';



	if ( '' != $limit ) {

		$limit = (int) $limit;

		$limit = ' LIMIT '.$limit;

	}



	// this is what will separate dates on weekly archive links

	$archive_week_separator = '&#8211;';



	// over-ride general date format ? 0 = no: use the date format set in Options, 1 = yes: over-ride

	$archive_date_format_over_ride = 0;



	// options for daily archive (only if you over-ride the general date format)

	$archive_day_date_format = 'Y/m/d';



	// options for weekly archive (only if you over-ride the general date format)

	$archive_week_start_date_format = 'Y/m/d';

	$archive_week_end_date_format	= 'Y/m/d';



	if ( !$archive_date_format_over_ride ) {

		$archive_day_date_format = get_option('date_format');

		$archive_week_start_date_format = get_option('date_format');

		$archive_week_end_date_format = get_option('date_format');

	}



	$add_hours = intval(get_option('gmt_offset'));

	$add_minutes = intval(60 * (get_option('gmt_offset') - $add_hours));



	if ( 'monthly' == $type ) {

		$arcresults = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC" . $limit);

		if ( $arcresults ) {

			$afterafter = $after;

			foreach ( $arcresults as $arcresult ) {

				$url	= get_month_link($arcresult->year,	$arcresult->month);

				$text = sprintf(__('%1$s %2$d'), $wp_locale->get_month($arcresult->month), $arcresult->year);

				if ( $show_post_count ) 

					$after = '&nbsp;('.$arcresult->posts.')' . $afterafter;

				echo wp_seo_get_archives_link($url, $text, $format, $before, $after, $do_nofollow);

			}

		}

	} elseif ('yearly' == $type) {

         $arcresults = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS `year`, count(ID) as posts FROM $wpdb->posts WHERE post_type ='post' AND post_status = 'publish' GROUP BY YEAR(post_date) ORDER BY post_date DESC" . $limit);

		if ($arcresults) {

            $afterafter = $after;

            foreach ($arcresults as $arcresult) {

			    $url = get_year_link($arcresult->year);

                $text = sprintf('%d', $arcresult->year);

				if ($show_post_count)

                    $after = '&nbsp;('.$arcresult->posts.')' . $afterafter;

                echo wp_seo_get_archives_link($url, $text, $format, $before, $after, $do_nofollow);

            }

		}		  	

	} elseif ( 'daily' == $type ) {

		$arcresults = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, DAYOFMONTH(post_date) AS `dayofmonth`, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY YEAR(post_date), MONTH(post_date), DAYOFMONTH(post_date) ORDER BY post_date DESC" . $limit);

		if ( $arcresults ) {

			$afterafter = $after;

			foreach ( $arcresults as $arcresult ) {

				$url	= get_day_link($arcresult->year, $arcresult->month, $arcresult->dayofmonth);

				$date = sprintf('%1$d-%2$02d-%3$02d 00:00:00', $arcresult->year, $arcresult->month, $arcresult->dayofmonth);

				$text = mysql2date($archive_day_date_format, $date);

				if ($show_post_count)

					$after = '&nbsp;('.$arcresult->posts.')'.$afterafter;

				echo wp_seo_get_archives_link($url, $text, $format, $before, $after, $do_nofollow);

			}

		}

	} elseif ( 'weekly' == $type ) {

		$start_of_week = get_option('start_of_week');

		$arcresults = $wpdb->get_results("SELECT DISTINCT WEEK(post_date, $start_of_week) AS `week`, YEAR(post_date) AS yr, DATE_FORMAT(post_date, '%Y-%m-%d') AS yyyymmdd, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY WEEK(post_date, $start_of_week), YEAR(post_date) ORDER BY post_date DESC" . $limit);

		$arc_w_last = '';

		$afterafter = $after;

		if ( $arcresults ) {

				foreach ( $arcresults as $arcresult ) {

					if ( $arcresult->week != $arc_w_last ) {

						$arc_year = $arcresult->yr;

						$arc_w_last = $arcresult->week;

						$arc_week = get_weekstartend($arcresult->yyyymmdd, get_option('start_of_week'));

						$arc_week_start = date_i18n($archive_week_start_date_format, $arc_week['start']);

						$arc_week_end = date_i18n($archive_week_end_date_format, $arc_week['end']);

						$url  = sprintf('%1$s/%2$s%3$sm%4$s%5$s%6$sw%7$s%8$d', get_option('home'), '', '?', '=', $arc_year, '&amp;', '=', $arcresult->week);

						$text = $arc_week_start . $archive_week_separator . $arc_week_end;

						if ($show_post_count)

							$after = '&nbsp;('.$arcresult->posts.')'.$afterafter;

						echo wp_seo_get_archives_link($url, $text, $format, $before, $after, $do_nofollow);

					}

				}

		}

	} elseif ( ( 'postbypost' == $type ) || ('alpha' == $type) ) {

		('alpha' == $type) ? $orderby = "post_title ASC " : $orderby = "post_date DESC ";

		$arcresults = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY $orderby $limit");

		if ( $arcresults ) {

			$do_nofollow = false;

			foreach ( $arcresults as $arcresult ) {

				if ( $arcresult->post_date != '0000-00-00 00:00:00' ) {

					$url  = get_permalink($arcresult);

					

					if("nofollow" == get_post_meta($arcresult->ID, 'nofollow_page', true) || ("nofollow_only_homepage" == get_post_meta($arcresult->ID, 'nofollow_page', true) && (is_frontpage() || is_home())) || ("not_homepage" == get_post_meta($arcresult->ID, 'nofollow_page', true) && !(is_frontpage() || is_home()))) {

						$do_nofollow = true;

					} else {

						$do_nofollow = false;

					}

					

					$arc_title = $arcresult->post_title;

					

					if(get_option('mt_meta_enabled_global') && (get_post_meta($arcresult->ID, 'mt_meta_page_enabled', true) || get_option('mt_meta_enabled_all_posts_default_global')) && get_post_meta($arcresult->ID, 'mt_meta_title_page', true)) {	// If meta plugin with options are enabled and the title is altered in the plugin, we need that title.

							$arc_title = trim(stripslashes(get_post_meta($arcresult->ID, 'mt_meta_title_page', true)));

					}

					

					if ($arc_title)

						$text = strip_tags($arc_title);

					else

						$text = $arcresult->ID;

					echo wp_seo_get_archives_link($url, $text, $format, $before, $after, $do_nofollow);

				}

			}

		}

	}

	echo '</ul>'.$after_widget;



}


/*
This file is part of SANDBOX.

SANDBOX is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

SANDBOX is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with SANDBOX. If not, see http://www.gnu.org/licenses/.
*/

// Produces a list of pages in the header without whitespace
function sandbox_globalnav() {
	if ( $menu = str_replace( array( "\r", "\n", "\t" ), '', wp_list_pages('title_li=&sort_column=menu_order&echo=0') ) )
		$menu = '<ul>' . $menu . '</ul>';
	$menu = '<div id="menu">' . $menu . "</div>\n";
	echo apply_filters( 'globalnav_menu', $menu ); // Filter to override default globalnav: globalnav_menu
}

// Generates semantic classes for BODY element
function sandbox_body_class( $print = true ) {
	global $wp_query, $current_user;

	// It's surely a WordPress blog, right?
	$c = array('wordpress');

	// Applies the time- and date-based classes (below) to BODY element
	sandbox_date_classes( time(), $c );

	// Generic semantic classes for what type of content is displayed
	is_front_page()  ? $c[] = 'home'       : null; // For the front page, if set
	is_home()        ? $c[] = 'blog'       : null; // For the blog posts page, if set
	is_archive()     ? $c[] = 'archive'    : null;
	is_date()        ? $c[] = 'date'       : null;
	is_search()      ? $c[] = 'search'     : null;
	is_paged()       ? $c[] = 'paged'      : null;
	is_attachment()  ? $c[] = 'attachment' : null;
	is_404()         ? $c[] = 'four04'     : null; // CSS does not allow a digit as first character

	// Special classes for BODY element when a single post
	if ( is_single() ) {
		$postID = $wp_query->post->ID;
		the_post();

		// Adds 'single' class and class with the post ID
		$c[] = 'single postid-' . $postID;

		// Adds classes for the month, day, and hour when the post was published
		if ( isset( $wp_query->post->post_date ) )
			sandbox_date_classes( mysql2date( 'U', $wp_query->post->post_date ), $c, 's-' );

		// Adds category classes for each category on single posts
		if ( $cats = get_the_category() )
			foreach ( $cats as $cat )
				$c[] = 's-category-' . $cat->slug;

		// Adds tag classes for each tags on single posts
		if ( $tags = get_the_tags() )
			foreach ( $tags as $tag )
				$c[] = 's-tag-' . $tag->slug;

		// Adds MIME-specific classes for attachments
		if ( is_attachment() ) {
			$mime_type = get_post_mime_type();
			$mime_prefix = array( 'application/', 'image/', 'text/', 'audio/', 'video/', 'music/' );
				$c[] = 'attachmentid-' . $postID . ' attachment-' . str_replace( $mime_prefix, "", "$mime_type" );
		}

		// Adds author class for the post author
		$c[] = 's-author-' . sanitize_title_with_dashes(strtolower(get_the_author_login()));
		rewind_posts();
	}

	// Author name classes for BODY on author archives
	elseif ( is_author() ) {
		$author = $wp_query->get_queried_object();
		$c[] = 'author';
		$c[] = 'author-' . $author->user_nicename;
	}

	// Category name classes for BODY on category archvies
	elseif ( is_category() ) {
		$cat = $wp_query->get_queried_object();
		$c[] = 'category';
		$c[] = 'category-' . $cat->slug;
	}

	// Tag name classes for BODY on tag archives
	elseif ( is_tag() ) {
		$tags = $wp_query->get_queried_object();
		$c[] = 'tag';
		$c[] = 'tag-' . $tags->slug;
	}

	// Page author for BODY on 'pages'
	elseif ( is_page() ) {
		$pageID = $wp_query->post->ID;
		$page_children = wp_list_pages("child_of=$pageID&echo=0");
		the_post();
		$c[] = 'page pageid-' . $pageID;
		$c[] = 'page-author-' . sanitize_title_with_dashes(strtolower(get_the_author('login')));
		// Checks to see if the page has children and/or is a child page; props to Adam
		if ( $page_children )
			$c[] = 'page-parent';
		if ( $wp_query->post->post_parent )
			$c[] = 'page-child parent-pageid-' . $wp_query->post->post_parent;
		if ( is_page_template() ) // Hat tip to Ian, themeshaper.com
			$c[] = 'page-template page-template-' . str_replace( '.php', '-php', get_post_meta( $pageID, '_wp_page_template', true ) );
		rewind_posts();
	}

	// Search classes for results or no results
	elseif ( is_search() ) {
		the_post();
		if ( have_posts() ) {
			$c[] = 'search-results';
		} else {
			$c[] = 'search-no-results';
		}
		rewind_posts();
	}

	// For when a visitor is logged in while browsing
	if ( $current_user->ID )
		$c[] = 'loggedin';

	// Paged classes; for 'page X' classes of index, single, etc.
	if ( ( ( $page = $wp_query->get('paged') ) || ( $page = $wp_query->get('page') ) ) && $page > 1 ) {
		$c[] = 'paged-' . $page;
		if ( is_single() ) {
			$c[] = 'single-paged-' . $page;
		} elseif ( is_page() ) {
			$c[] = 'page-paged-' . $page;
		} elseif ( is_category() ) {
			$c[] = 'category-paged-' . $page;
		} elseif ( is_tag() ) {
			$c[] = 'tag-paged-' . $page;
		} elseif ( is_date() ) {
			$c[] = 'date-paged-' . $page;
		} elseif ( is_author() ) {
			$c[] = 'author-paged-' . $page;
		} elseif ( is_search() ) {
			$c[] = 'search-paged-' . $page;
		}
	}

	// Separates classes with a single space, collates classes for BODY
	$c = join( ' ', apply_filters( 'body_class',  $c ) ); // Available filter: body_class

	// And tada!
	return $print ? print($c) : $c;
}

// Generates semantic classes for each post DIV element
function sandbox_post_class( $print = true ) {
	global $post, $sandbox_post_alt;

	// hentry for hAtom compliace, gets 'alt' for every other post DIV, describes the post type and p[n]
	$c = array( 'hentry', "p$sandbox_post_alt", $post->post_type, $post->post_status );

	// Author for the post queried
	$c[] = 'author-' . sanitize_title_with_dashes(strtolower(get_the_author('login')));

	// Category for the post queried
	foreach ( (array) get_the_category() as $cat )
		$c[] = 'category-' . $cat->slug;

	// Tags for the post queried; if not tagged, use .untagged
	if ( get_the_tags() == null ) {
		$c[] = 'untagged';
	} else {
		foreach ( (array) get_the_tags() as $tag )
			$c[] = 'tag-' . $tag->slug;
	}

	// For password-protected posts
	if ( $post->post_password )
		$c[] = 'protected';

	// Applies the time- and date-based classes (below) to post DIV
	sandbox_date_classes( mysql2date( 'U', $post->post_date ), $c );

	// If it's the other to the every, then add 'alt' class
	if ( ++$sandbox_post_alt % 2 )
		$c[] = 'alt';

	// Separates classes with a single space, collates classes for post DIV
	$c = join( ' ', apply_filters( 'post_class', $c ) ); // Available filter: post_class

	// And tada!
	return $print ? print($c) : $c;
}

// Define the num val for 'alt' classes (in post DIV and comment LI)
$sandbox_post_alt = 1;

// Generates semantic classes for each comment LI element
function sandbox_comment_class( $print = true ) {
	global $comment, $post, $sandbox_comment_alt;

	// Collects the comment type (comment, trackback),
	$c = array( $comment->comment_type );

	// Counts trackbacks (t[n]) or comments (c[n])
	if ( $comment->comment_type == 'comment' ) {
		$c[] = "c$sandbox_comment_alt";
	} else {
		$c[] = "t$sandbox_comment_alt";
	}

	// If the comment author has an id (registered), then print the log in name
	if ( $comment->user_id > 0 ) {
		$user = get_userdata($comment->user_id);
		// For all registered users, 'byuser'; to specificy the registered user, 'commentauthor+[log in name]'
		$c[] = 'byuser comment-author-' . sanitize_title_with_dashes(strtolower( $user->user_login ));
		// For comment authors who are the author of the post
		if ( $comment->user_id === $post->post_author )
			$c[] = 'bypostauthor';
	}

	// If it's the other to the every, then add 'alt' class; collects time- and date-based classes
	sandbox_date_classes( mysql2date( 'U', $comment->comment_date ), $c, 'c-' );
	if ( ++$sandbox_comment_alt % 2 )
		$c[] = 'alt';

	// Separates classes with a single space, collates classes for comment LI
	$c = join( ' ', apply_filters( 'comment_class', $c ) ); // Available filter: comment_class

	// Tada again!
	return $print ? print($c) : $c;
}

// Generates time- and date-based classes for BODY, post DIVs, and comment LIs; relative to GMT (UTC)
function sandbox_date_classes( $t, &$c, $p = '' ) {
	$t = $t + ( get_option('gmt_offset') * 3600 );
	$c[] = $p . 'y' . gmdate( 'Y', $t ); // Year
	$c[] = $p . 'm' . gmdate( 'm', $t ); // Month
	$c[] = $p . 'd' . gmdate( 'd', $t ); // Day
	$c[] = $p . 'h' . gmdate( 'H', $t ); // Hour
}

// For category lists on category archives: Returns other categories except the current one (redundant)
function sandbox_cats_meow($glue) {
	$current_cat = single_cat_title( '', false );
	$separator = "\n";
	$cats = explode( $separator, get_the_category_list($separator) );
	foreach ( $cats as $i => $str ) {
		if ( strstr( $str, ">$current_cat<" ) ) {
			unset($cats[$i]);
			break;
		}
	}
	if ( empty($cats) )
		return false;

	return trim(join( $glue, $cats ));
}

// For tag lists on tag archives: Returns other tags except the current one (redundant)
function sandbox_tag_ur_it($glue) {
	$current_tag = single_tag_title( '', '',  false );
	$separator = "\n";
	$tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
	foreach ( $tags as $i => $str ) {
		if ( strstr( $str, ">$current_tag<" ) ) {
			unset($tags[$i]);
			break;
		}
	}
	if ( empty($tags) )
		return false;

	return trim(join( $glue, $tags ));
}

// Produces an avatar image with the hCard-compliant photo class
function sandbox_commenter_link() {
	$commenter = get_comment_author_link();
	if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
		$commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
	} else {
		$commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
	}
	$avatar_email = get_comment_author_email();
	$avatar_size = apply_filters( 'avatar_size', '32' ); // Available filter: avatar_size
	$avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, $avatar_size ) );
	echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
}

// Function to filter the default gallery shortcode
function sandbox_gallery($attr) {
	global $post;
	if ( isset($attr['orderby']) ) {
		$attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
		if ( !$attr['orderby'] )
			unset($attr['orderby']);
	}

	extract(shortcode_atts( array(
		'orderby'    => 'menu_order ASC, ID ASC',
		'id'         => $post->ID,
		'itemtag'    => 'dl',
		'icontag'    => 'dt',
		'captiontag' => 'dd',
		'columns'    => 3,
		'size'       => 'thumbnail',
	), $attr ));

	$id           =  intval($id);
	$orderby      =  addslashes($orderby);
	$attachments  =  get_children("post_parent=$id&post_type=attachment&post_mime_type=image&orderby={$orderby}");

	if ( empty($attachments) )
		return null;

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $id => $attachment )
			$output .= wp_get_attachment_link( $id, $size, true ) . "\n";
		return $output;
	}

	$listtag     =  tag_escape($listtag);
	$itemtag     =  tag_escape($itemtag);
	$captiontag  =  tag_escape($captiontag);
	$columns     =  intval($columns);
	$itemwidth   =  $columns > 0 ? floor(100/$columns) : 100;

	$output = apply_filters( 'gallery_style', "\n" . '<div class="gallery">', 9 ); // Available filter: gallery_style

	foreach ( $attachments as $id => $attachment ) {
		$img_lnk = get_attachment_link($id);
		$img_src = wp_get_attachment_image_src( $id, $size );
		$img_src = $img_src[0];
		$img_alt = $attachment->post_excerpt;
		if ( $img_alt == null )
			$img_alt = $attachment->post_title;
		$img_rel = apply_filters( 'gallery_img_rel', 'attachment' ); // Available filter: gallery_img_rel
		$img_class = apply_filters( 'gallery_img_class', 'gallery-image' ); // Available filter: gallery_img_class

		$output  .=  "\n\t" . '<' . $itemtag . ' class="gallery-item gallery-columns-' . $columns .'">';
		$output  .=  "\n\t\t" . '<' . $icontag . ' class="gallery-icon"><a href="' . $img_lnk . '" title="' . $img_alt . '" rel="' . $img_rel . '"><img src="' . $img_src . '" alt="' . $img_alt . '" class="' . $img_class . ' attachment-' . $size . '" /></a></' . $icontag . '>';

		if ( $captiontag && trim($attachment->post_excerpt) ) {
			$output .= "\n\t\t" . '<' . $captiontag . ' class="gallery-caption">' . $attachment->post_excerpt . '</' . $captiontag . '>';
		}

		$output .= "\n\t" . '</' . $itemtag . '>';
		if ( $columns > 0 && ++$i % $columns == 0 )
			$output .= "\n</div>\n" . '<div class="gallery">';
	}
	$output .= "\n</div>\n";

	return $output;
}

// Widget: Search; to match the Sandbox style and replace Widget plugin default
function widget_sandbox_search($args) {
	extract($args);
	$options = get_option('widget_sandbox_search');
	$title = empty($options['title']) ? __( 'Search', 'sandbox' ) : attribute_escape($options['title']);
	$button = empty($options['button']) ? __( 'Find', 'sandbox' ) : attribute_escape($options['button']);
?>
<?php echo $before_widget ?><?php echo $before_title ?>
<label for="s"><?php echo $title ?></label>
<?php echo $after_title ?>
<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
  <div>
    <input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
    <input type="submit" class="button" value="<?php echo $button ?>" tabindex="2" />
  </div>
</form>
<?php echo $after_widget ?>
<?php
}

// Widget: Search; element controls for customizing text within Widget plugin
function widget_sandbox_search_control() {
	$options = $newoptions = get_option('widget_sandbox_search');
	if ( $_POST['search-submit'] ) {
		$newoptions['title'] = strip_tags(stripslashes( $_POST['search-title']));
		$newoptions['button'] = strip_tags(stripslashes( $_POST['search-button']));
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option( 'widget_sandbox_search', $options );
	}
	$title = attribute_escape($options['title']);
	$button = attribute_escape($options['button']);
?>
<p>
  <label for="search-title">
    <?php _e( 'Title:', 'sandbox' ) ?>
    <input class="widefat" id="search-title" name="search-title" type="text" value="<?php echo $title; ?>" />
  </label>
</p>
<p>
  <label for="search-button">
    <?php _e( 'Button Text:', 'sandbox' ) ?>
    <input class="widefat" id="search-button" name="search-button" type="text" value="<?php echo $button; ?>" />
  </label>
</p>
<input type="hidden" id="search-submit" name="search-submit" value="1" />
<?php
}

// Widget: Meta; to match the Sandbox style and replace Widget plugin default
function widget_sandbox_meta($args) {
	extract($args);
	$options = get_option('widget_meta');
	$title = empty($options['title']) ? __( 'Meta', 'sandbox' ) : attribute_escape($options['title']);
?>
<?php echo $before_widget; ?><?php echo $before_title . $title . $after_title; ?>
<ul>
  <?php wp_register() ?>
  <li>
    <?php wp_loginout() ?>
  </li>
  <?php wp_meta() ?>
</ul>
<?php echo $after_widget; ?>
<?php
}

// Widget: RSS links; to match the Sandbox style
function widget_sandbox_rsslinks($args) {
	extract($args);
	$options = get_option('widget_sandbox_rsslinks');
	$title = empty($options['title']) ? __( 'RSS Links', 'sandbox' ) : attribute_escape($options['title']);
?>
<?php echo $before_widget; ?><?php echo $before_title . $title . $after_title; ?>
<ul>
  <li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?> <?php _e( 'Posts RSS feed', 'sandbox' ); ?>" rel="alternate" type="application/rss+xml">
    <?php _e( 'All posts', 'sandbox' ) ?>
    </a></li>
  <li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(bloginfo('name'), 1) ?> <?php _e( 'Comments RSS feed', 'sandbox' ); ?>" rel="alternate" type="application/rss+xml">
    <?php _e( 'All comments', 'sandbox' ) ?>
    </a></li>
</ul>
<?php echo $after_widget; ?>
<?php
}

// Widget: RSS links; element controls for customizing text within Widget plugin
function widget_sandbox_rsslinks_control() {
	$options = $newoptions = get_option('widget_sandbox_rsslinks');
	if ( $_POST['rsslinks-submit'] ) {
		$newoptions['title'] = strip_tags( stripslashes( $_POST['rsslinks-title'] ) );
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option( 'widget_sandbox_rsslinks', $options );
	}
	$title = attribute_escape($options['title']);
?>
<p>
  <label for="rsslinks-title">
    <?php _e( 'Title:', 'sandbox' ) ?>
    <input class="widefat" id="rsslinks-title" name="rsslinks-title" type="text" value="<?php echo $title; ?>" />
  </label>
</p>
<input type="hidden" id="rsslinks-submit" name="rsslinks-submit" value="1" />
<?php
}

// Widgets plugin: intializes the plugin after the widgets above have passed snuff
function sandbox_widgets_init() {
	if ( !function_exists('register_sidebars') )
		return;

	// Formats the Sandbox widgets, adding readability-improving whitespace
	$p = array(
		'before_widget'  =>   "\n\t\t\t" . '<li id="%1$s" class="widget %2$s">',
		'after_widget'   =>   "\n\t\t\t</li>\n",
		'before_title'   =>   "\n\t\t\t\t". '<h3 class="widgettitle">',
		'after_title'    =>   "</h3>\n"
	);

	// Table for how many? Two? This way, please.
	register_sidebars( 2, $p );

	// Finished intializing Widgets plugin, now let's load the Sandbox default widgets; first, Sandbox search widget
	$widget_ops = array(
		'classname'    =>  'widget_search',
		'description'  =>  __( "A search form for your blog (Sandbox)", "sandbox" )
	);
	wp_register_sidebar_widget( 'search', __( 'Search', 'sandbox' ), 'widget_sandbox_search', $widget_ops );
	unregister_widget_control('search'); // We're being Sandbox-specific; remove WP default
	wp_register_widget_control( 'search', __( 'Search', 'sandbox' ), 'widget_sandbox_search_control' );

	// Sandbox Meta widget
	$widget_ops = array(
		'classname'    =>  'widget_meta',
		'description'  =>  __( "Log in/out and administration links (Sandbox)", "sandbox" )
	);
	wp_register_sidebar_widget( 'meta', __( 'Meta', 'sandbox' ), 'widget_sandbox_meta', $widget_ops );
	unregister_widget_control('meta'); // We're being Sandbox-specific; remove WP default
	wp_register_widget_control( 'meta', __( 'Meta', 'sandbox' ), 'wp_widget_meta_control' );

	//Sandbox RSS Links widget
	$widget_ops = array(
		'classname'    =>  'widget_rss_links',
		'description'  =>  __( "RSS links for both posts and comments (Sandbox)", "sandbox" )
	);
	wp_register_sidebar_widget( 'rss_links', __( 'RSS Links', 'sandbox' ), 'widget_sandbox_rsslinks', $widget_ops );
	wp_register_widget_control( 'rss_links', __( 'RSS Links', 'sandbox' ), 'widget_sandbox_rsslinks_control' );
}

// Translate, if applicable
load_theme_textdomain('sandbox');

// Runs our code at the end to check that everything needed has loaded
//add_action( 'init', 'sandbox_widgets_init' );

// Registers our function to filter default gallery shortcode
add_filter( 'post_gallery', 'sandbox_gallery', $attr );

// Adds filters for the description/meta content in archives.php
add_filter( 'archive_meta', 'wptexturize' );
add_filter( 'archive_meta', 'convert_smilies' );
add_filter( 'archive_meta', 'convert_chars' );
add_filter( 'archive_meta', 'wpautop' );

// Remember: the Sandbox is for play.

remove_action('wp_head', 'wp_generator');


?>
