<?php
/*
  Author: Primer Co
  URL: htp://byprimer.co
*/


/************* INCLUDE NEEDED FILES ***************/


/*
1. library/primer.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/primer.php'); // if you remove this, primer will break
require_once('library/acf_blocks.php'); // ACF Gutenberg Blocks
require_once('wp_bootstrap_navwalker.php'); // Bootstrap Nav Walker

/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default

/*
4. library/translation/translation.php
    - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default


/************* THUMBNAIL SIZE OPTIONS *************/


// Thumbnail sizes
add_image_size( 'primer-1400', 1400, 0, true );



/************* ACTIVE SIDEBARS ********************/


// Sidebars & Widgetizes Areas
function primer_register_sidebars() {
  
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => __('Sidebar 1', 'primertheme'),
    	'description' => __('The first (primary) sidebar.', 'primertheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

}




/************* COMMENT LAYOUT *********************/

		
// Comment Layout
function primer_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php 
			    /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */ 
			    ?>
			    <!-- custom gravatar call -->
			    <?php
			    	// create variable
			    	$bgauthemail = get_comment_author_email();
			    ?>
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'primertheme'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'primertheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'primertheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Your comment is awaiting moderation.', 'primertheme') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!


/************* SEARCH FORM LAYOUT *****************/


// Search Form
function primer_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search', 'primertheme') . '</label>
    <div class="form-group">
      <input type="text" class="form-control" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search...','primertheme').'" />
    </div>
    <input type="submit" class="btn btn-primary" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!


/************* IMAGE FORMATTING *****************/


// Allow SVG Upload to WP
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


/************* ACF *****************/


// Add ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

global $g_report_card_500_per_page;
global $g_report_card_500_page_id;
$g_report_card_500_per_page = 30;

function loadReportCard() {
	global $g_report_card_500_per_page;
	$rank = 0;
	$count = 0;
	$pagination_index = (int)$_POST['pagination_index'];
	$start_index = $pagination_index * $g_report_card_500_per_page;

	$table_data = array();
	$rank = 1;
	if( have_rows('companies', $_POST['post_id']) ): while ( have_rows('companies', $_POST['post_id']) ) : the_row();
		$company_id = get_sub_field('company');
		$table_data[] = array(
			'rank' => $rank,
			'company_name' => get_the_title($company_id),
			'agreement_grade' => get_field('agreement_grade', $company_id),
			'forced_arbitration' => get_field('forced_arbitration', $company_id),
			'ceo' => get_field('ceo', $company_id),
			'glassdoor_rating' => get_field('glassdoor_rating', $company_id),
			'link' => get_permalink($company_id)
		);
		$rank++;
	endwhile; endif;

	// sorting
	function cmp($a, $b) {
		if($_POST['sort_direction'] == 'desc') {
			if($_POST['sort_field'] == 'rank') {
				return $b[$_POST['sort_field']] > $a[$_POST['sort_field']];		
			}
			return strcmp($b[$_POST['sort_field']], $a[$_POST['sort_field']]);	
		}
		else {
			if($_POST['sort_field'] == 'rank') {
				return $a[$_POST['sort_field']] > $b[$_POST['sort_field']];		
			}
			return strcmp($a[$_POST['sort_field']], $b[$_POST['sort_field']]);
		}
		
	}
	
	usort($table_data, "cmp");	

	$index = 0;
	foreach($table_data as $table) {
		if(isset($_POST['filter_grade']) && $_POST['filter_grade'] != '') {
			if($table['agreement_grade'] != $_POST['filter_grade']) {
				continue;
			}
		}

		$index++;
		if($index <= $start_index) {
			continue;
		}
		?>
		<div class="report-card-accordian-table-row">
		
			<div class="report-card-accordian-table-col">
				<div class="report-card-accordian-table-col-content"><?php echo $table['rank'];?></div>
			</div>
			<div class="report-card-accordian-table-col">
				<div class="report-card-accordian-table-col-content"><a href="<?php echo $table['link']?>"><?php echo $table['company_name']?></a></div>
			</div>
			<div class="report-card-accordian-table-col col-agreement_grade">
				<div class="report-card-accordian-table-col-content"><?php echo $table['agreement_grade']?></div>
			</div>
			<div class="report-card-accordian-table-col col-forced_arbitration">
				<div class="report-card-accordian-table-col-content"><?php echo $table['forced_arbitration']?></div>
			</div>
			<div class="report-card-accordian-table-col">
				<div class="report-card-accordian-table-col-content"><?php echo $table['ceo']?></div>
			</div>
			<div class="report-card-accordian-table-col">
				<div class="report-card-accordian-table-col-content"><?php echo $table['glassdoor_rating']?></div>
			</div>
		</div>
		<?php
		$count++;
		if($count >= $g_report_card_500_per_page) {
			break;
		}
	}
	
	exit;
}

add_action('wp_ajax_load_report_card', 'loadReportCard');
add_action('wp_ajax_nopriv_load_report_card', 'loadReportCard');

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
	 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

function custom_primer_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<div class="comment-row">
		<div class="comment-row__text"><?php comment_text()?></div>
		<div class="comment-row-info">
			<span class="comment-row__user"><?php echo get_comment_author_link()?></span> • <span class="comment-row__date"><?php comment_time(__('F jS, Y', 'primertheme')); ?></span>
		</div>
	</div>
 <?php
}

function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        if(isset($_GET['post_type'])) {
            $type = $_GET['post_type'];
                if($type == 'company') {
                    $query->set('post_type',array('company'));
                }
        }       
    }
return $query;
}
add_filter('pre_get_posts','searchfilter');
?>
