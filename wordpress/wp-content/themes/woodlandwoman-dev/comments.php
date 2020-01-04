<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Woodland_Woman
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$woodlandwoman_comment_count = get_comments_number();
			if ( '1' === $woodlandwoman_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One comment on &ldquo;%1$s&rdquo;', 'woodlandwoman' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $woodlandwoman_comment_count, 'comments title', 'woodlandwoman' ) ),
					number_format_i18n( $woodlandwoman_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'woodlandwoman' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

$fields =  array(

  'author' =>
    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) .
    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . 'required /></p>',

  'email' =>
    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) .
    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . ' required /></p>',

  'url' =>
    '<p class="comment-form-url"><label for="url">' . __( 'URL', 'domainreference' ) . '</label>' .
    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></p>',
);

$comments_args = array(
        // change the title of send button
        'label_submit'=>'Submit',
        // change the title of the reply section
        'title_reply'=>'Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true" required></textarea></p>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);


comment_form($comments_args);
?>

</div><!-- #comments -->
