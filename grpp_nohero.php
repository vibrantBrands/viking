<?php require('elements/header_grpp.php'); ?>
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

	<section class="service-products">
		<div class="grid three">
			<div>
				<?php
		            $a = new Area('Product Box 1');
		            $a->display($c);
		        ?>
		        	
		    </div>
			<div>
				<?php
		            $a = new Area('Product Box 2');
		            $a->display($c);
		        ?>
		    </div>
			<div>
				<?php
		            $a = new Area('Product Box 3');
		            $a->display($c);
		        ?>
		        </div>
		</div>
	</section>

	<section class="brown-bg contact">
		<div class="container">
			<?php
            $a = new Area('Brown BG Content');
            $a->display($c);
        ?>
		</div>
		
	</section>
	<section class="gray-box">
		<div class="container column">
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
