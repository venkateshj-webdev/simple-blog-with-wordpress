<?php get_header(); ?>
    <?php get_template_part('banner-template'); ?>
    <section class="content-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part('content', get_post_format()); ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p><?php __('No Post Yet Added'); ?></p>
                    <?php endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>