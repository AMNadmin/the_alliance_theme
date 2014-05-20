<?
/**
 * Sets up theme defaults and registers the various WordPress features that
 * USVI Alliance Theme supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since USVI Alliance Theme 1.0
 *
 * @return void
 */
function usvialliance_setup() {
// register sidebars
if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Home Page Sidebar 1',
			'id' => 'homepage1',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Home Page Sidebar 2',
			'id' => 'homepage2',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Home Page Sidebar 3',
			'id' => 'homepage3',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Blog Index Sidebar',
			'id' => 'blog',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 1',
			'id' => 'sbar1',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 2',
			'id' => 'sbar2',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 3',
			'id' => 'sbar3',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 4',
			'id' => 'sbar4',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 5',
			'id' => 'sbar5',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 6',
			'id' => 'sbar6',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 7',
			'id' => 'sbar7',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Sidebar 8',
			'id' => 'sbar8',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Lower Widget 1',
			'id' => 'lower1',
			'name' => 'Footer Widget 1',
			'id' => 'footer1',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Lower Widget 2',
			'id' => 'lower2',
			'name' => 'Footer Widget 2',
			'id' => 'footer2',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Lower Widget 3',
			'id' => 'lower3',
			'name' => 'Footer Widget 3',
			'id' => 'footer3',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'before_widget' => '',
			'name' => 'Lower Widget 4',
			'id' => 'lower4',
			'name' => 'Footer Widget 4',
			'id' => 'footer4',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
	}
// add post-formats to post_type 'page'
add_post_type_support( 'page', 'post-formats' );


// Adds RSS feed links to <head> for posts and comments.
add_theme_support( 'automatic-feed-links' );

// Switches default core markup for search form, comment form, and comments
// to output valid HTML5.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

/*
 * This theme supports all available post formats by default.
 * See http://codex.wordpress.org/Post_Formats
 */

add_theme_support( 'post-formats', array(
	'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
) );

/*
 * This theme uses a custom image size for featured images, displayed on
 * "standard" posts and pages.
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 604, 270, true );

}

add_action( 'after_setup_theme', 'usvialliance_setup' );

if ( ! function_exists( 'usvialliance_paging_nav' ) ) :
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @since USVI Alliance Theme 1.0
 *
 * @return void
 */
function usvialliance_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'usvialliance' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'usvialliance' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'usvialliance' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'usvialliance_post_nav' ) ) :
/**
 * Displays navigation to next/previous post when applicable.
*
* @since USVI Alliance Theme 1.0
*
* @return void
*/
function usvialliance_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'usvialliance' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'usvialliance' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'usvialliance' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'usvialliance_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own usvialliance_entry_meta() to override in a child theme.
 *
* @since USVI Alliance Theme 1.0
 *
 * @return void
 */
function usvialliance_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . __( 'Sticky', 'usvialliance' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		//usvialliance_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'usvialliance' ) );
	if ( $categories_list ) {
		echo '<div>Archived under: <span class="categories-links">' . $categories_list . '</span></div>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'usvialliance' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<div class="author vcard">Post made by: <a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></div>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'usvialliance' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;



if ( ! function_exists( 'usvialliance_entry_date' ) ) :
/**
 * Prints HTML with date information for current post.
 *
 * Create your own usvialliance_entry_date() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param boolean $echo Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function usvialliance_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'usvialliance' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'usvialliance' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

if ( ! function_exists( 'usvialliance_entry_justdate' ) ) :
/**
 * Prints HTML with date information for current post.
 *
 * Create your own usvialliance_entry_date() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param boolean $echo Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function usvialliance_entry_justdate( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'usvialliance' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><time class="entry-date" datetime="%3$s">%4$s</time></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'usvialliance' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;


/*add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
				'custom-fields', 
				'excerpt',
				'thumbnail',
				'editor',
				'title',
				'revisions',
				'post-formats'),
		 'exclude_from_search' => false
		)
	);
}
*/	
	// Function to get truncated string
	function tokenTruncate($string, $your_desired_width) {
	  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
	  $parts_count = count($parts);
	
	  $length = 0;
	  $last_part = 0;
	  for (; $last_part < $parts_count; ++$last_part) {
		$length += strlen($parts[$last_part]);
		if ($length > $your_desired_width) { break; }
	  }
	
	  return implode(array_slice($parts, 0, $last_part));
	}
	
	
	// Function to get excerpt string
	function the_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;
	
		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				echo mb_substr( $subex, 0, $excut );
			} else {
				echo $subex;
			}
			echo '[...]';
		} else {
			echo $excerpt;
		}
	}
	// Disable Admin Bar for everyone but administrators
if (!function_exists('df_disable_admin_bar')) {
 
    function df_disable_admin_bar() {
         
        if (!current_user_can('manage_options')) {
         
            // for the admin page
            remove_action('admin_footer', 'wp_admin_bar_render', 1000);
            // for the front-end
            remove_action('wp_footer', 'wp_admin_bar_render', 1000);
             
            // css override for the admin page
            function remove_admin_bar_style_backend() { 
                echo '<style>body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top: 0px !important; }</style>';
            }     
            add_filter('admin_head','remove_admin_bar_style_backend');
            // css override for the frontend
            function remove_admin_bar_style_frontend() {
                echo '<style type="text/css" media="screen">
                html { margin-top: 0px !important; }
                * html body { margin-top: 0px !important; }
                </style>';
            }
            add_filter('wp_head','remove_admin_bar_style_frontend', 99);
             
        }
    }
}
add_action('init','df_disable_admin_bar');

				
				
?>