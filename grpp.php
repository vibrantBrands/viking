<?php require('elements/header_grpp.php'); ?>
	<div class="page-content">
	<?php
       $page = Page::getCurrentPage();

        if($c->getAttribute('hero_bg')):
              $hero_bg = $c->getAttribute('hero_bg')->getVersion()->getRelativePath();
        ?>
        <?php endif; ?>
        <section class="hero" style="background:url(<?php echo $hero_bg ?>);background-size:cover;">
		<div class="container">
				<?php
		            $a = new Area('Hero Text');
		            $a->display($c);
		        ?>
		</div>
	</section>
	<section class="maintext">
		<div class="container">
			<div>
				<?php
		            $a = new Area('Page Text');
		            $a->display($c);
		        ?>
	        </div>
		</div>
	</section>

	<section class="brown-bg">
		<div class="container">
			<?php
            $a = new Area('Brown BG Content');
            $a->display($c);
        ?>
		</div>
		
	</section>
	<section class="gray-box">
		<div class="container">
			<?php
            $a = new Area('Gray Box Text');
            $a->display($c);
        ?>
		</div>
		
	</section>
	<section class="bottom-content">
		<div class="container column">
			<?php
		        $a = new Area('Lower Page Content');
		        $a->display($c);
		    ?>
		</div>

	</section>
	</div>

<?php require('elements/footer_grpp.php'); ?>
