<?php require('elements/header_packaging.php'); ?>
	<div class="page-content case-study">
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

	<section class="primarytext">
		<div class="container">
			<div>
				<?php
		            $a = new Area('Page Text');
		            $a->display($c);
		        ?>
	        </div>
		</div>
		<div class="container">
			<div class="grid three">
				<div>
					<?php
			            $a = new Area('Image 1');
			            $a->display($c);
			        ?>
				</div>
				<div>
					<?php
			            $a = new Area('Image 2');
			            $a->display($c);
			        ?>
				</div>
				<div>
					<?php
			            $a = new Area('Image 3');
			            $a->display($c);
			        ?>
				</div>
			</div>
		</div>
	</section>

	<section class="case-study-nav">
		<div class="container">
			<div class="two-column">
				<div>
					<?php
					    $a = new Area('Left Arrow');
					    $a->display($c);
					?>
				</div>
				<div>
					<?php
					    $a = new Area('Right Arrow');
					    $a->display($c);
					?>
				</div>
			</div>
			
		</div>
	</section>

	<section class="contact-box">
		<p>contact us: <span>845.883.6325</span></p>
	</section>

	<section class="testimonials">
		<?php
            $a = new Area('Additional Content');
            $a->display($c);
        ?>
	</section>
	</div>

<?php require('elements/footer_packaging.php'); ?>
