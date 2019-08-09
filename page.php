<?php get_header();?>

<?php
$page_slug;
if ( is_page() && get_the_title($post->post_parent) == 'Dam' ) {
	$page_slug = 'Dam';
}else if (is_page() && get_the_title($post->post_parent) == 'Herr' ) {
	$page_slug = 'Herr';
}else{
	$page_slug = 'front-page-side-menu';
}

?>
<div class="container">
  	<div class="row">
  		<div class="col">
  			<div class="box">
              <?php
              if ( is_page() ) { 
				    wp_nav_menu(
							array(
								'menu_class' => 'side-menu',
								'menu' => $page_slug,
							)
						); 
			} ?>
          </div>
         
          <div class="box">
          	<?php echo do_shortcode('[instagram-feed]'); ?>
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
   		<div>
   		<?php 
   			if (get_the_title($post) == 'Nyheter') { ?>
   			<div class="news-box">
		   		<div class="blog-post">
					<?php 
					$args = array(
					   'category_name'=>$page_slug,
					    'posts_per_page'=> 3,
					);
					$query = new WP_Query( $args );
					if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post();
					    //Post data
					    ?> <h2><?php the_title();?></h2>
					    <img style="margin: auto;" width = 90% src=<?php echo the_post_thumbnail_url();?>> <?php
					    the_content();
					endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif;
					?>
				</div>
			</div>
   			<?php }
   		?>
   		</div>

      	<h1><?php //the_title();?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
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
         <?php 
   			if (get_the_title($post) == 'Nyheter') { ?>
				<a class="read-more" href=../../nyheter>Fler nyheter </a>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_footer();?>