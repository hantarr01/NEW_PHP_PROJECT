<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business
 */
?>

<div id="mainbanner">
	<div class="slider">
		<img src="<?= bloginfo('template_directory'); ?>/image/coolimage.png" class="responsive-img" width="100%">
		<img src="<?= bloginfo('template_directory'); ?>/image/lamb.jpg" class="responsive-img" width="100%">
		<img src="<?= bloginfo('template_directory'); ?>/image/bb.jpg" class="responsive-img" width="100%">
		<img src="<?= bloginfo('template_directory'); ?>/image/nig.jpg" class="responsive-img" width="100%">
		<img src="<?= bloginfo('template_directory'); ?>/image/bmv.jpg" class="responsive-img" width="100%">
	</div>
</div>

<div class="allProductsTable">
<div class="products">

	<ul>
		<li>
			<div id="picture1">

				<div class="wht">
					<h5><b>HEADLIGHTS</b></h5>
					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
				</div>

				<div class="inpic1">
					<img src="<?= bloginfo('template_directory'); ?>/image/1picture.png"  class="responsive-img" id="imgproducts">
				</div>
			</div>
		</li>

		<li>
			<div id="picture2">

				<div class="wht">
					<h5><b>HEADLIGHTS</b></h5>
					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
				</div>

				<div class="inpic2">
					<img src="<?= bloginfo('template_directory'); ?>/image/2picture.png"  class="responsive-img" id="imgproducts">
				</div>
			</div>
		</div>
	</li>
</ul>

<div  class="products2">
	<ul class="ulmrg">
		<li>
			<div id="picture3">

				<div class="wht">
					<h5><b>HEADLIGHTS</b></h5>
					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
				</div>

				<div class="inpic3">
					<img src="<?= bloginfo('template_directory'); ?>/image/3picture.png"  class="responsive-img" id="imgproducts">
				</div>
			</div>
		</li>

		<li>
			<div id="picture4">

				<div class="wht">
					<h5><b>HEADLIGHTS</b></h5>
					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
				</div>

				<div class="inpic4">
					<img src="<?= bloginfo('template_directory'); ?>/image/4picture.png"   class="responsive-img" id="imgproducts">
				</div>
			</div>
		</li>

	</ul>
</div>
</div>
</div>

<div class="featProd">

	<div class="heading">
		<ul class="center">
			<li>
				<div class="inHeading">
					<div class="txtHead"><b>FEATURED PRODUCTS</b></div>
					<div class="brBttRed"></div>
				</div>
			</li>
		</ul>
	</div>
<div class="tblprod">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<ul>	
			<li>
			<div class="prodct1">
				<article>
					 <p class="upTextProd"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p> 
					 <?php add_theme_support( 'post-thumbnails' ); ?>

					 <div class="downTextProd">

						<div class="tags">
							<?php the_tags('<span>Теги:</span> '); ?>
						</div>	
					
					 	<?php the_content();?>

					 </div>

				</article>
			</div>
		<?php endwhile;?>
	
		<?php else:?>

		<?php endif; ?> 									
			</li>	
		</ul>		
	</div>

	<div class="hght"></div>
</div>



<div class="specoff" style="background-image: url(<?= bloginfo('template_directory'); ?>/image/manycars.png); background-repeat: no-repeat;background-size: 100% 100%; ">

	<div class="inspecoff">
		<div class="leftTXT">
			<div class="upTxt"><b>25% OFF</b></div>
			<p class="middleTxt"><b> ON ORGER OVER $999</b></p>
			<p class="downTxt">This Offer is vallid on all our items</p>
			<form>
				<input class="buttSpecOff" type="button" name="but1SpcOff" value="BUY NOW" >
			</form>
		</div>


		<div class="brdSpecOff"></div>

		<div class="rightTXT">
			<div class="upTxt"><b>25% OFF</b></div>
			<p class="middleTxt"><b>ON ORGER OVER $999</b></p>
			<p class="downTxt">This Offer is vallid on all our items</p>
			<form>
				<input class="buttSpecOff" type="button" name="but2SpcOff" value="BUY NOW">
			</form>
		</div>
	</div>


</div>
<?php
get_footer();?>

