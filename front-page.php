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
                      'menu' => 'front-page-side-menu',
                    )
                  ); 
                }
              ?>
          </div>
            <div class="box">
              <!-- InstaWidget 
              <a href="https://instawidget.net/v/user/chalmershandbollsklubb" id="link-f402e433e76dea2adbf8a436b682851327f06910846c3268a86f03e3c0ee3e6c">@chalmershandbollsklubb</a>
              <script src="https://instawidget.net/js/instawidget.js?u=f402e433e76dea2adbf8a436b682851327f06910846c3268a86f03e3c0ee3e6c&width=300px"></script>-->
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
      			<?php 
      				if ( have_posts() ) : while ( have_posts() ) : the_post();
					     the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?> 
          <div>
            <?php 
              get_posts();
            ?>
          </div>
          <h1 style="text-align: center; color: #03255B"> — — — </h1>

          <!--- Fixar när jag vet hur java script fungerar...
          <div class="middle-navbar">
             <ul class="middle-navbar">
              <li><a href="javascript:;" onclick="showTab(1);" id="tabLink-1" class="">Nyheter</a></li>
              <li><a href="javascript:;" onclick="showTab(1);" id="tabLink-1" class="">Matcher</a></li>
              <li><a href="javascript:;" onclick="showTab(1);" id="tabLink-1" class="">Resultat</a></li>
            </ul> 
          </div>
          --->

          <div class="news-box">
            <?php 
              $args = array(
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

          <div class="news-box">
            <div class="box">
              <div class="side-bar">
                <?php
                  get_sidebar();
                ?>
              </div>
            </div>
          </div>
          
          <div class="news-box">
            <div class="box">
              <?php echo do_shortcode('[calendar id="112"]'); ?>
              <a href="/chk/calendar"> Hela kalendern </a>
            </div>
          </div>

          
    		</div>
    		<div class="col">
          <div class="box">
            <div class="calendar">
              <?php echo do_shortcode('[calendar id="95"]'); ?>
            </div>
          </div>
    			<div class="box">
      				<h1>Sponsorer</h1>


      			</div>
    		</div>
  		</div>
  
		



<?php get_footer();?>