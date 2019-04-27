<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page">

<header>
 	<nav>
 	<?php if (is_front_page() && is_home()){ ?>
 		<div class="nav-wrapper">
 			<a href="#" data-target="mobile-demo" class="sidenav-trigger" id="menu2"><i class="material-icons">menu</i></a>
 				<ul class="right hide-on-med-and-down">
 					<li>
 						<div id="up-header">

 							<div class="human" id="font">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/image/human.png">
 									My Account
 								</a>
 							</div>



 							<div class="cart" id="font">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/image/cart.png">
 									Cart
 								</a>
 							</div>



 							<div class="checkout" id="font">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/image/checkout.png">
 									Checkout
 								</a>
 							</div>

 							<div class="border"></div>

 							<div class="searchtop">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/image/search.png">
 								</a>
 							</div>

 						</div>

 												<!-- border -->
 										<div class="bord-bott"></div>
 												<!-- border -->

 						<div id="logo">							
 					<?php if (ot_get_option( 'logo_upload' )) { ?>
 						<img src="<?php echo ot_get_option( 'logo_upload' ); ?>"></img>
 					<?php } else { ?>
 						<h1><?php bloginfo('name'); ?></h1>
            		<?php } ?>
            			</div>

					<?php if (ot_get_option('desc_on_off') != 'off') {?>
						<p><?php bloginfo('description'); ?></p>
            		<?php } ?>


 						<div class="alltab">
 							<div class="intab1">
 								<a href="#">
 									<div class="tabs1">
 										<img src="<?= bloginfo('template_directory'); ?>/image/star.png">
 									</div>

 									<div class="tab1">
 										WISHLIST
 									</div>

 								</a>
 							</div>

 							<div class="intab2">
 								<a href="#">
 									<div class="tabs2">
 										<img src="<?= bloginfo('template_directory'); ?>/image/car.png">
 									</div>
 									<div class="tab2">
 										COMPARE
 									</div>

 								</a>
 							</div>

 							<div class="intab3">
 								<a href="#">
 									<div class="tabs3">
 										<img src="<?= bloginfo('template_directory'); ?>/image/cart2.png">
 									</div>
 									<div class="tab3">
 										MY CART
 									</div>
 								</a>
 							</div>

 							<div class="con-info">

 								<div class="phone">
 									<img src="<?= bloginfo('template_directory'); ?>/image/phone.png"">
 								</div>


 								 <?php if (ot_get_option( 'contact_phone' )) { ?>

         						 	<p href="tel:<?php echo str_replace(array(" ", ")", "(", "-"), "", ot_get_option( 'contact_phone' ))?>" class="fa-phone">

         						 <?php echo ot_get_option( 'contact_phone' ); ?></p>

          						<?php } ?>

 								<div class="number">
 									+123 456 7890
 								</div>

 								<div class="data">
 									MON-FRI: 8:30AM-7:30PM:SAT-SUN: 9:30AM-4:30PM
 								</div>

 							</div>

 						</div>
 				</li>
 			</ul>

 			<div class="nav-content">
 			</div>
 		</div>
 	</nav>

 		<ul class="sidenav" id="mobile-demo"> 


 			<li>
 				<nav>
 					<div class="nav-wrapper">
 						<form>
 							<div class="input-field"id="search2">
 								<input id="search" type="search" required>
 								<label class="label-icon" for="search"><i class="material-icons">search</i></label>
 								<i class="material-icons">close</i>
 							</div>
 						</form>
 					</div>
 				</nav>
 			</li>

 			<li class="logoMobile">
 					<?php if (ot_get_option( 'logo_upload' )) { ?>
 						<img src="<?php echo ot_get_option( 'logo_upload' ); ?>"></img>
 					<?php } else { ?>
 						<h1><?php bloginfo('name'); ?></h1>
            		<?php } ?>
 			</li>

 			<li>

 				<div class="rdA">
 					<a href="#">
 						<img src="<?= bloginfo('template_directory'); ?>/image/human.png">
 						My Account
 					</a>
 				</div>



 				<div class="rdA">
 					<a href="#">
 						<img src="<?= bloginfo('template_directory'); ?>/image/cart.png">
 						Cart
 					</a>
 				</div>

 				<div class="rdA">
 					<a href="#">
 						<img src="<?= bloginfo('template_directory'); ?>/image/checkout.png">
 						Checkout
 					</a>
 				</div>		

 			</li>

 			<div class="whtA">

 				<div class="intabm">
 					<a href="#">
 						<div>
 							<img src="<?= bloginfo('template_directory'); ?>/image/star.png">
 						</div>
 						<div class="tabm">
 							WISHLIST
 						</div>
 					</a>
 				</div>



 				<div class="intabm2">
 					<a href="#">
 						<div>
 							<img src="<?= bloginfo('template_directory'); ?>/image/car.png">
 						</div>
 						<div class="tabm">
 							COMPARE
 						</div>
 					</a>
 				</div>



 				<div class="intabm3">
 					<a href="#">
 						<div>
 							<img src="<?= bloginfo('template_directory'); ?>/image/cart2.png"> 
 						</div>	
 						<div class="tabmCart">
 							MY CART
 						</div>
 					</a>
 				</div>
 			</div>
 		</ul>

 	<div id="buttons">
 		<ul>
 				<div class="row" id="rowMenuHack">
 					<li><div class="col col s0 col l12"></div></li>
 				</div>

 			<div class="row" id="roW">
 				<li><div class="col s12 col l2"></div></li>

 				<li class="marg">
 					<a href="https://materializecss.com/media-css.html">
 						<div id="buttonshrefsmall"><p>HOME</p></div>
 					</a>
 				</li>	

 				<li class="marg">
 					<a href="https://materializecss.com/media-css.html">
 						<div id="buttonshref"><p>SERVICES</p></div>
 					</a>
 				</li>	


 				<li class="marg">
 					<a href="https://materializecss.com/media-css.html">
 						<div id="buttonshrefsmall"><p>ABOUT</p></div>
 					</a>
 				</li>					

 				<li class="marg">
 					<a href="https://materializecss.com/media-css.html">
 						<div id="buttonshref"><p>REVIEWS</p></div>
 					</a>
 				</li>

 				<li class="marg">
 					<a href="https://materializecss.com/media-css.html">
 						<div id="buttonshref"><p>LOCATIONS</p></div>
 					</a>
 				</li>

 				<li class="marg">
 					<a href="https://materializecss.com/media-css.html">
 						<div id="buttonshref"><p>CONTACTS</p></div>
 					</a>
 				</li>
 			</div>
 		</ul> 
 	</div>
</header> 

 	<?php
 	wp_nav_menu( [
 		'theme_location'  => '',
 		'menu'            => '', 
 		'container'       => 'li', 
 		'container_class' => 'marg', 
 		'container_id'    => 'buttonshrefsmall',
 		'menu_class'      => 'marg', 
 		'menu_id'         => '',
 		'echo'            => true,
 		'fallback_cb'     => 'wp_page_menu',
 		'before'          => '',
 		'after'           => '',
 		'link_before'     => '',
 		'link_after'      => '',
 		'items_wrap'      => '<div id="buttonshref" class=""></div>',
 		'depth'           => 0,
 		'walker'          => '',
 	] );
 	?>

 </div>