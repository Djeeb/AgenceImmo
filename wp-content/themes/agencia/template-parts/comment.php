<div id="comment-<?php comment_ID(); ?>" <?php comment_class('comment ' . ($this->has_children ? 'parent' : ''), $comment); ?>
<?= get_avatar($comment, 120, '', '', ['class' => 'comment__avatar']); ?>
<img alt="" src="https://secure.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=120&amp;r=g" class="comment__avatar" height="120" width="120">
    <div class="comment__body">
        <footer>
            <div class="comment__username">A WordPress Commenter</div>
            <div class="comment__date">October 23, 2019 at 11:51 am</div>
        </footer>
        <div class="comment__content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus necessitatibus officiis.
                Accusantium autem dolorem est id inventore laudantium molestias, nulla pariatur perspiciatis provident, quia
                reiciendis rem sapiente tempore, veniam.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque culpa deleniti dicta dolores esse,
                incidunt magnam molestiae nam natus non pariatur placeat quas quasi quisquam quo sapiente suscipit
                voluptatum!
            </p>
        </div>
    </div>
</div>

<<?php echo $tag; ?> >
                <?php
                ?>
                <?php
                $comment_author = get_comment_author_link($comment);

                if ('0' == $comment->comment_approved && !$show_pending_links) {
                    $comment_author = get_comment_author($comment);
                }

                printf(
                    /* translators: %s: Comment author link. */
                    __('%s <span class="says">says:</span>'),
                    sprintf('<b class="fn">%s</b>', $comment_author)
                );
                ?>
            </div><!-- .comment-author -->

            <div class="comment-metadata">
                <a href="<?php echo esc_url(get_comment_link($comment, $args)); ?>">
                    <time datetime="<?php comment_time('c'); ?>">
                        <?php
                        /* translators: 1: Comment date, 2: Comment time. */
                        printf(__('%1$s at %2$s'), get_comment_date('', $comment), get_comment_time());
                        ?>
                    </time>
                </a>
                <?php edit_comment_link(__('Edit'), '<span class="edit-link">', '</span>'); ?>
            </div><!-- .comment-metadata -->

            <?php if ('0' == $comment->comment_approved) : ?>
                <em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
            <?php endif; ?>
        </footer><!-- .comment-meta -->

        <div class="comment-content">
            <?php comment_text(); ?>
        </div><!-- .comment-content -->

        <?php
        if ('1' == $comment->comment_approved || $show_pending_links) {
            comment_reply_link(
                array_merge(
                    $args,
                    array(
                        'add_below' => 'div-comment',
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'before'    => '<div class="reply">',
                        'after'     => '</div>',
                    )
                )
            );
        }
        ?>
