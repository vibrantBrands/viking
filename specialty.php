<?php require('elements/header_packaging.php'); ?>
	<div class="page-content">
	<?php
       $page = Page::getCurrentPage();

        if($c->getAttribute('hero_bg')):
              $hero_bg = $c->getAttribute('hero_bg')->getVersion()->getRelativePath();
        ?>
        <?php endif; ?>
        <section class="hero" style="background:url(<?php echo $hero_bg ?>);background-size:cover;background-position:center;">
		<div class="container">
				<?php
		            $a = new Area('Hero Text');
		            $a->display($c);
		        ?>
		</div>
	</section>

	<section class="product-description">
		<div class="container column flush-left">
			<?php
	            $a = new Area('Product Description');
	            $a->display($c);
	        ?>
		</div>
	</section>
	<section class="testimonials">
		<?php
            $a = new Area('Additional Content');
            $a->display($c);
        ?>
	</section>
	<section class="product-section">
		<div class="two-column">
			<div>
				<?php
		            $a = new Area('Product Image');
		            $a->display($c);
		        ?>
			</div>
			<div>
				<?php
		            $a = new Area('Product Text');
		            $a->display($c);
		        ?>
			</div>
		</div>
	</section>
	</div>

<?php require('elements/footer_packaging.php'); ?>
