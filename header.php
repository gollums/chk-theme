<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

		<?php wp_head();?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	</head>

<body <?php body_class();?>>

	<div class="container" id="container">
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
				<?php } else { 
					if(is_page() && get_the_title($post->post_parent) == 'Herr'){?>
						<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/herr.png" style="width: 100%; height:215px;"></a>
					<?php } else if (is_page() && get_the_title($post->post_parent) == 'Dam') { ?>
						<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/dam.png" style="width: 100%; height:215px;"></a>
					<?php } else{ ?>
					<a href="/chk"><img src="<?php echo get_template_directory_uri(); ?>/images/frontpage.png" style="width: 100%; height:215px;"></a>
				<?php }
					}
			?>	
		</div>
	</div>
		<header class="sticky-top">
			<div class="container">
				<div class="nav-menu">
					<?php wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'menu_class' => 'top-menu',
						)
					);?>
				</div>
			</div>
		</header>


