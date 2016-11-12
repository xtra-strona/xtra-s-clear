<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'xtra-starter' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
        <nav id="comment-nav-above" class="comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'xtra-starter' ); ?></h1>
<?php if ( get_previous_comments_link() ) { ?>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'xtra-starter' ) ); ?></div>
 <?php }
                    if ( get_next_comments_link() ) { ?>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'xtra-starter' ) ); ?></div>
 <?php } ?>
        </nav><!-- #comment-nav-above -->
        <?php endif; // check for comment navigation ?>
<?php
        if ( have_comments() ) :
        	if ( (is_page() || is_single()) && ( ! is_home() && ! is_front_page()) ) :
        ?>
<?php
        if ( ! class_exists( 'Foundationpress_Comments' ) ) :
        class Foundationpress_Comments extends Walker_Comment {

        	// Init classwide variables.
        	var $tree_type = 'comment';

        	// Comment ID
        	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

        	/** CONSTRUCTOR
        	 * You'll have to use this if you plan to get to the top of the comments list, as
        	 * start_lvl() only goes as high as 1 deep nested comments */
        	function __construct() { ?>

                <h3><?php comments_number( __( 'No Responses to', 'foundationpress' ), __( 'One Response to', 'foundationpress' ), __( '% Responses to', 'foundationpress' ) ); ?> &#8220;<?php the_title(); ?>&#8221;</h3>
                <ol class="comment-list">

            <?php }

        	/** START_LVL
        	 * Starts the list before the CHILD elements are added. */
        	function start_lvl( &$output, $depth = 0, $args = array() ) {
        		$GLOBALS['comment_depth'] = $depth + 1; ?>

                        <ul class="children">
            <?php }

        	/** END_LVL
        	 * Ends the children list of after the elements are added. */
        	function end_lvl( &$output, $depth = 0, $args = array() ) {
        		$GLOBALS['comment_depth'] = $depth + 1; ?>

        		</ul><!-- /.children -->

            <?php }

        	/** START_EL */
        	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
        		$depth++;
        		$GLOBALS['comment_depth'] = $depth;
        		$GLOBALS['comment'] = $comment;
        		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>

                <li <?php comment_class( $parent_class ); ?> id="comment-<?php comment_ID() ?>">
                    <article id="comment-body-<?php comment_ID() ?>" class="comment-body">



        		<header class="comment-author">

        			<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>

        			<div class="author-meta vcard author">

        			<?php printf( __( '<cite class="fn">%s</cite>', 'foundationpress' ), get_comment_author_link() ) ?>
        			<time datetime="<?php echo comment_date( 'c' ) ?>"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf( get_comment_date(), get_comment_time() ) ?></a></time>

        			</div><!-- /.comment-author -->

        		</header>

                        <section id="comment-content-<?php comment_ID(); ?>" class="comment">
                            <?php if ( ! $comment->comment_approved ) : ?>
                            		<div class="notice">
        					<p class="bottom"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
        				</div>
                            <?php else : comment_text(); ?>
                            <?php endif; ?>
                        </section><!-- /.comment-content -->

                        <div class="comment-meta comment-meta-data hide">
                            <a href="<?php echo htmlspecialchars( get_comment_link( get_comment_ID() ) ) ?>"><?php comment_date(); ?> at <?php comment_time(); ?></a> <?php edit_comment_link( '(Edit)' ); ?>
                        </div><!-- /.comment-meta -->

                        <div class="reply">
                            <?php $reply_args = array(
        						'depth' => $depth,
        						'max_depth' => $args['max_depth'],
        						);

        					comment_reply_link( array_merge( $args, $reply_args ) );  ?>
                        </div><!-- /.reply -->
                    </article><!-- /.comment-body -->

            <?php }

        	function end_el(& $output, $comment, $depth = 0, $args = array() ) { ?>

                </li><!-- /#comment-' . get_comment_ID() . ' -->

            <?php }

        	/** DESTRUCTOR */
        	function __destruct() { ?>

            </ol><!-- /#comment-list -->

            <?php }
        }
      endif; ?>

        	<section id="comments"><?php


        		wp_list_comments(
        			array(
        				// 'walker'            => new Your_Walkerclass(),
        				'max_depth'         => '',
        				'style'             => 'ol',
        				'callback'          => null,
        				'end-callback'      => null,
        				'type'              => 'all',
        				'reply_text'        => __( 'Reply', 'xtra-starter' ),
        				'page'              => '',
        				'per_page'          => '',
        				'avatar_size'       => 48,
        				'reverse_top_level' => null,
        				'reverse_children'  => '',
        				'format'            => 'html5',
        				'short_ping'        => false,
        				'echo'  	    => true,
        				'moderation' 	    => __( 'Your comment is awaiting moderation.', 'xtra-starter' ),
        			)
        		);

        		?>

         	</section>
  <?php
      endif;
        endif; ?>


        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
        <nav id="comment-nav-below" class="comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'xtra-starter' ); ?></h1>
<?php if ( get_previous_comments_link() ) { ?>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'xtra-starter' ) ); ?></div>
<?php }
                    if ( get_next_comments_link() ) { ?>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'xtra-starter' ) ); ?></div>
 <?php } ?>
        </nav><!-- #comment-nav-below -->
        <?php endif; // check for comment navigation ?>

    <?php endif; // have_comments() ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'xtra-starter' ); ?></p>
    <?php endif; ?>

 <?php
        /* Loads the comment-form.php template
        /* get_template_part('comment-form');
        */
    ?>

    <?php comment_form(); ?>

</div><!-- #comments -->
