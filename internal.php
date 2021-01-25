<?php require('elements/header.php'); ?>
	<div class="page-content">
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

<?php require('elements/footer.php'); ?>
