
<?php get_header();?>

<div class="container">
  	<div class="row">
  		<div class="col">
  			<div class="box">
              <?php
                if (is_home()) {
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
					if (is_home()) {
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
   		<div class="news-box">
   				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				    ?>
					<div class="blog-post" style="margin-bottom: 6px; ">
				    	<h1> <?php the_title();?> </h1>
				    	<img width = 90% src=<?php echo the_post_thumbnail_url();?>>
				    	<?php the_content();?>
				    </div>
				    <?php
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
   		</div>
			
	</div>
	<div class="col">
		<div class="box">
			<a class="read-more" href=../herr/nyheter>Herr nyheter</a>
		</div>
		<div class="box">
			<a class="read-more" href=../dam/nyheter>Dam nyheter</a>		
		</div>
	</div>
</div>

<?php get_footer();?>