<?php get_header();?>

<div class="container">
  	<div class="row">
  		<div class="col">
  			<div class="box">
				<?php
					if (is_page()) {
						wp_nav_menu(
							array(
								'menu_class' => 'side-menu',
								'menu' => 'Dam',
							)
						); 
					}
				?>
  			</div>
  			<div class="box">
				<?php
					if (is_page()) {
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
      	<h1><?php //the_title();?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			<h1 style="text-align: center; color: #03255B"> — — — </h1>
		<div class="news-box">
            <?php 
              $args = array(
			   	'category_name'=>'Dam',
              	'posts_per_page'=> 2,
              );
              $query = new WP_Query( $args );
              if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post();
                //Post data
              	?>
                <div class="blog-post"> 
                <a class="blog-title" href=<?php the_permalink(); ?>><h2 class="blog-title"><?php the_title();?></h2></a>
                 <?php
                  if (has_post_thumbnail()){?>
                  	<div class="row">
                  		<div class="col-md-auto">
	                  		<img src=<?php echo the_post_thumbnail_url('thumbnail');?>>
	                  		<p><a class="read-more" href=<?php the_permalink(); ?>> Läs mer... </a></p>

	                  	</div>
	                  	<div class="col">
	                  		<?php the_excerpt();?>
	                  		
	                  	</div>
                  	</div>
                 <?php
                  } else{
                  	the_excerpt(); ?>
                  	<a class="read-more" href=<?php the_permalink(); ?>> Läs mer... </a>
                  <?php } ?>  
             
                </div>

              <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
              <?php endif;
            ?>
        </div>

	</div>
	<div class="col">
		<div class="box">
			<?php echo do_shortcode('[calendar id="93"]'); ?>
		</div>
	</div>
</div>

<?php get_footer();?>