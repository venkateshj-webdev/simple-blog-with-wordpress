<div class="card mb-4">
    <div class="card-body">
        <div class="card-title">
            <?php if(is_single()) : ?>
                    <?php the_title(); ?>
                <?php else : ?>
                    <a href="<?php the_permalink();?>" class="card-link"><?php the_title(); ?></a>
            <?php endif; ?>
            <div class="display-block" style="font-size: 11px;">
                <span><?php the_time('F j, Y g:i a'); ?></span> By  <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author() ?></a></span> <span class="float-right comments">0 Comments</span>
            </div>
        </div>
        <div class="card-text">
            <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">  
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
    
            <?php if(is_single()) : ?>
                    <p><?php the_content(); ?></p>
                <?php else :?>
                    <p><?php the_excerpt(); ?></p>
            <?php endif; ?>    
        </div>
    </div>
</div>
<?php if(is_single()) :
    comments_template();  
 endif; ?>