<div id="commentArea">
<?php if(have_comments()): ?>
<hr class="dividerUnit"/>
<h3 class="h4">この記事のコメント</h3>
<ol class="commetList">
<?php wp_list_comments('avatar_size=48'); ?>
</ol>
<?php endif; ?>
<?php $args = array(
    'title_reply' => '',
    'label_submit' => 'コメントを送信する',
    'comment_notes_before' => '',
    'comment_notes_after'  => '',
    'fields' => array(
            'author' => '<div class="control-group form-group col-sm-12 floating-label-form-group controls">' .
                        '<input class="author form-control input-lg" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="お名前またはニックネーム" /></div>',
            'email'  => '<div class="control-group form-group col-sm-12 floating-label-form-group controls">' .
                        '<input class="email form-control input-lg" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . 'placeholder="メールアドレス" /></div>',
            ),
    'comment_field' => '<div class="control-group form-group col-sm-12 floating-label-form-group controls">' . '<textarea class="comment form-control input-lg" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="あなたのコメントをください" /></textarea></div>',
    );
comment_form( $args ); ?>
</div>
