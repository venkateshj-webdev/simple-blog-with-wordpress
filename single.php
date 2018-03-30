<?php get_header(); ?>
    <section>
        <div class="banner">
            <div class="banner-img">
                <div class="banner-text">
                    <h1 class="text-uppercase clearfix">My Blog Page</h1>
                    <a class="btn btn-primary clearfix rounded-0" href="#">Contact Me<div class="ripple-container"></div></a>
                </div>
                
            </div>
        </div>
    </section>

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
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                RECENT POSTS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>