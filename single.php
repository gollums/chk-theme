<div class="container">
	<div class="header">
		<?php 
			if (is_page(herr)) { ?>
				<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/herr.png" style="width: 100%; height:215px;"></a>
			<?php } elseif (is_page(dam)) { ?>
				<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/dam.png" style="width: 100%; height:215px;"></a>
			<?php } elseif (is_page(about)) { ?>
				<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/omlaget.png" style="width: 100%; height:215px;"></a>
			<?php } elseif (is_page(contact)) { ?>
				<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/kontakt.png" style="width: 100%; height:215px;"></a>
			<?php } else { ?>
				<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/frontpage.png" style="width: 100%; height:215px;"></a>
			<?php }
		?>	
	</div>
</div>
<?php get_header();?>

<div class="container">
  	<div class="row">
  		<div class="col">
  			<div class="box">
					<?php
						if (is_page(herr)) {
							wp_nav_menu(
								array(
									'menu_class' => 'side-menu',
									'menu' => 'Herr',
								)
							); 
						}elseif (is_page(dam)) {
							wp_nav_menu(
								array(
									'menu_class' => 'side-menu',
									'menu' => 'Dam',
								)
							); 
						}
					?>
	  			</div>
    	</div>
   	<div class="col-6">
      	<h1><?php the_title();?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>

	</div>
	<div class="col">
	</div>
</div>

<?php get_footer();?>