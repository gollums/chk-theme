<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div class="box">
		<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    		<?php dynamic_sidebar( 'sidebar' ); ?>
  		</aside>
	</div> 
<?php endif; ?>