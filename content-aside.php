<div class="card mb-4">
	<div class="card-body">
		<div class="card-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>
		<div class="display-block">
			<time><?php the_time('F j, Y g:i a'); ?></time>	<?php the_author(); ?>
		</div>
		<div class="card-text">
			<?php the_excerpt(); ?>
		</div>
	</div>
</div>