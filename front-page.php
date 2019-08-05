<div class="container">
	<div class="header">
		<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/frontpage.png" style="width: 100%; height:215px;"></a>
	</div>
</div>

<?php get_header();?>


	
	<div class="container">
  		<div class="row">
  			<div class="col">
	      			<div class="next-game">
	      				
	      			</div>
      			
    		</div>
    		<div class="col-6">
      			<?php 
      				if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?> 
    		</div>
    		<div class="col">
    			<div class="Sponsorer">
      				<h1>Sponsorer</h1>


      			</div>
    		</div>
  		</div>
  
		



<?php get_footer();?>