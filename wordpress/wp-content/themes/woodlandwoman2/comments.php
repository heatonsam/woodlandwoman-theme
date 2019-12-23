<div class="comments" id="comments">

<?php

// Comment form

// $fields = array (
//     'author' => '<div class="comment-author"><input type="text" id="comment-author" class="comment-author" name="comment-author" placeholder="Your name*" required></div>',
//     'email' => '<div class="comment-email"><input type="email" id="comment-email" class="comment-email" placeholder="Your email*" required></div>',
//     'url' => '<div class="comment-url"><input type="url" id="comment-url" class="comment-url" name="comment-url" placeholder="Your website (optional)"></div>',
// );

$commentargs = array(
    // 'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_notes_before' => '',
    'comment_notes_after' => '',
    'title_reply' => '',
);

comment_form($commentargs);

//Get only the approved comments 
$args = array(
    'status' => 'approve'
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {
    foreach ( $comments as $comment ) {
        echo '<p>' . $comment->comment_content . '</p>';
    }
} else {
    echo '';
}
?>
</div>