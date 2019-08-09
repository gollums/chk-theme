<?php get_header();?>

<div class="container">
  	<div class="row">
  		<div class="col">
  			<div class="box">
              <?php
                if (is_single()) {
                  wp_nav_menu(
                    array(
                      'menu_class' => 'side-menu',
                      'menu' => 'front-page-side-menu',
                    )
                  ); 
                }
              ?>
          </div>
  			<div class="box">
				<?php
					if (is_single()) {
						wp_nav_menu(
							array(
								'menu_class' => 'side-menu',
								'menu' => 'Links',
							)
						);
					}
				?>
  			</div>
    	</div>
   	<div class="col-6">
      	<h1><?php the_title();?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
                <img width = 90% src=<?php echo the_post_thumbnail_url();?>  > 
          <?php
					the_content();
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>

	</div>
	<div class="col">
		<div class="box">
        <div class="calendar">
          <?php echo do_shortcode('[calendar id="95"]'); ?>
        </div>
    </div>
    <div class="box">
      <a class="read-more" href=../../nyheter>Fler nyheter</a>
    </div>
    <div class="box">
      <a class="read-more" href=../herr/nyheter>Herr nyheter</a>
    </div>
    <div class="box">
      <a class="read-more" href=../dam/nyheter>Dam nyheter</a>   
    </div>
	</div>
</div>

<?php get_footer();?>