<div class="comments">
	<h2>Comments</h2>
	<?php 
		$args = array(
			'walker'       		 => null,
			'max_depth'    		 => '',
			'style'        		 => 'ul',
			'callback'     		 => null,
			'end_callback'		 => null,
			'type'        		 => 'all',
			'reply_text'   		 => 'Reply',
			'page'               => '',
			'per_page'           => '',
			'avatar_size'        => 80,
			'reverse_top_level'  => null,
			'reverse_children'   => '',
			'format'             => 'html5',
			'short_ping'         => false,
			'echo'               => true
		);

		wp_list_comments($args,$comments);

		$comments_args = array(
			'label_submit'        => 'Submit',
			'title_reply'         => 'Write a Reply or Comment',
			'comment_notes_after' => '',
			'comments_field'      => '<p class="comment-form-comment"><label>Comment</label>'
		);
		comment_form($comments_args);
	?>
</div>