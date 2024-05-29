

<?php if ( is_active_sidebar( 'left-sidebar-widget' ) ) : ?>
    


<div class="col-lg-4 order-1 order-lg-0">
<div class="sidebar sidebar-left">
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'left-sidebar-widget' ); ?>
    </aside>
   </div><!-- Sidebar end -->
</div><!-- Sidebar Col end -->

<?php endif; ?>