<?php get_header(); ?>
	<?php get_template_part('banner-template'); ?>
	<section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
            	<div class="text-center w-100">
            		<h3 class="mt-2">My Services</h3>
            	</div>
				<div class="col-sm-4">
					<div class="card rounded-0">
						<?php if(is_active_sidebar('box1')):?>
							<?php dynamic_sidebar('box1');?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card rounded-0">
						<?php if(is_active_sidebar('box2')):?>
							<?php dynamic_sidebar('box2');?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card rounded-0">
						<?php if(is_active_sidebar('box3')):?>
							<?php dynamic_sidebar('box3');?>
						<?php endif; ?>
					</div>
				</div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>