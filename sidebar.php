<div class="col-sm-4">
    <div class="card">
        <?php 
            if(is_active_sidebar( 'sidebar' )) :
                dynamic_sidebar('sidebar');
            endif; 
        ?>
    </div>
</div>