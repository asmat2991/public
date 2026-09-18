<?php 
/*
@package sunsettheme
*/

if(post_password_required()){
    return;
}
?>
<style>
.comment-form-author,.comment-form-comment,.comment-form-email,.comment-form-url{display:grid;background:0 0}.comment-form-author{float:left;padding-right:.7rem;width:50%}.comment-form-email{width:50%;padding-left:.7rem}#author,#email,#submit{width:100%}#author,#comment,#email,#url{background:0 0;border-radius:5px;border:1px solid #CCCCCC;padding:12px;color:#fff;padding-top:9px;padding-bottom:9px;}#submit{border:1px solid #0a5695!important;color:#000!important;text-transform:uppercase;font-size:14px!important;display:inline-block!important;padding:10px 16px 9px!important;margin-top:2px;font-weight:500!important;background:no-repeat;border-radius:7px}#submit:hover{border:1px solid #0a5695!important;background:#0a5695!important;color:#fff!important}.comment-list{background:#191919;padding-bottom:1.2rem;border-radius:12px;font-size:12px;margin-bottom:1.9rem}.avatar{display:none}.comment-meta{width:100%;display:block;text-align:end;margin-bottom:.9rem}.comment-meta a{color:#aaa;text-decoration:none;font-size:12px}.comment-author{float:left;width:65%;margin-bottom:.9rem}.comment_ul{padding-left:0}.comment-author-signature{display:block;padding:18px;background:#191919;border-radius:9px;margin-bottom:1.9rem}cite a{color:#af922ce8;font-style:initial;text-decoration:none;font-size:16px;text-transform:capitalize}cite a:hover{color:#fff}.comment-reply-link{color:#fff;font-weight:500;text-decoration:none} p{font-weight: 300;font-family: 'Poppins', sans-serif !important;line-height: 30px !important;font-size: 13px;}.says{display:none;}label{display:none;}.comment-form-cookies-consent label{display:inline-block !important;}.comment-form-cookies-consent{line-height:unset !important;font-size:unset !important;}.comments-title{margin-bottom: 2.5rem;margin-top:0.5rem;font-weight: 300 !important;font-size: 22px;}#reply-title{margin-bottom: 0.5rem; margin-top: 2.2rem;font-weight: 300 !important;font-size: 22px;}.comment-notes span{color: #000 !important;font-weight: 400 !important;line-height: 30px !important;font-size: 15px !important;font-family: 'Poppins', sans-serif !important;}@media(max-width: 767px){#author, #comment, #email, #url {width: 100% !important;}}
</style>
<div id="comments" class="comments-area">
    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'nd_dosth' ), get_the_title() );
            } else {
                printf(
                    /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'nd_dosth'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>
        <ul class="comment_ul">
            <?php
                wp_list_comments( array(
                    'avatar_size' => 100,
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'reply_text'  => __( 'Reply', 'nd_dosth' ),
                ) );
            ?>
        </ol>
        <?php the_comments_pagination( array(
            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'nd_dosth' ) . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'nd_dosth' ) . '</span>',
        ) );
    endif; // Check for have_comments().
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'nd_dosth' ); ?></p>
    <?php
    endif;
    comment_form();
    ?>
</div>