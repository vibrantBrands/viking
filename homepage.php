<?php require('elements/header.php'); ?>

<div class="homepage">
	<!-- <section class="hero">
		<h1>Transparent Construction Project Management
			<h2>Powered by Accessibility.<br /> Enhanced with Accountability.</h2> 
	</h1>
		<span class="orange btn">
			<a href="/introductory-offer">Free Demo</a>
		</span>
	</section> -->
	<section class="hero">
		<img src="<?php echo $this->getThemePath(); ?>/img/construction-advisors.png" alt="Hero" class=
		"desktop">
		<img src="<?php echo $this->getThemePath(); ?>/img/taliho_mobile.png" alt="Hero Mobile" class="mobile">
	</section>
	<div class="careers">
		<div class="container">
			<?php
	            $a = new Area('Careers Header2');
	            $a->display($c);
	        ?>
		</div>
		<div class="container icons aos-init aos-animate" data-aos="fade-up">
			<a href="#emailform" data-lity>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/architecht-icon.png" alt="Architects">
				<p>Architects / Engineers</p>
			</div>
			</a>
			<div>
				<a href="#designbuild" data-lity>
					<img src="<?php echo $this->getThemePath(); ?>/img/design-icon.png" alt="Design">
					<p>Design-Build Firms</p>
				</a>
			</div>
			<div>
				<a href="#contractormanagers" data-lity>
					<img src="<?php echo $this->getThemePath(); ?>/img/construction-icon.png" alt="Construction">
					<p>Construction Managers</p>
				</a>
			</div>
			<div>
				<a href="#contractorform" data-lity>
					<img src="<?php echo $this->getThemePath(); ?>/img/contractors-icon.png" alt="Contractors">
					<p>Contractors</p>
				</a>
			</div>
			<div>
				<a href="#facilityform" data-lity>
					<img src="<?php echo $this->getThemePath(); ?>/img/facility-icon.png" alt="Facility">
					<p>Facility Owners</p>
				</a>
			</div>
		</div>
	</div>

	<!-- code for embedded email forms -->
		<div id="emailform" style="background:#fff;width:700px" class="lity-hide">
			<div id="wufoo-k1havj4406ebhtd"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/k1havj4406ebhtd/def/field3=Architect">online form</a>. </div> <script type="text/javascript"> var k1havj4406ebhtd; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'k1havj4406ebhtd', 'autoResize':true, 'height':'400', 'width':'600', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { k1havj4406ebhtd = new WufooForm(); k1havj4406ebhtd.initialize(options); k1havj4406ebhtd.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
		</div>
		<div id="contractormanagers" style="background:#fff;width:700px" class="lity-hide">
				<div id="wufoo-k1h4sy0r08l8ouk"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/k1h4sy0r08l8ouk">online form</a>. </div> <script type="text/javascript"> var k1h4sy0r08l8ouk; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'k1h4sy0r08l8ouk', 'autoResize':true, 'height':'400', 'width':'600', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { k1h4sy0r08l8ouk = new WufooForm(); k1h4sy0r08l8ouk.initialize(options); k1h4sy0r08l8ouk.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
		</div>
		<div id="facilityform" style="background:#fff;width:700px" class="lity-hide">
			<div id="wufoo-k1qyfxo50i5jq2d"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/k1qyfxo50i5jq2d">online form</a>. </div> <script type="text/javascript"> var k1qyfxo50i5jq2d; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'k1qyfxo50i5jq2d', 'autoResize':true, 'height':'260', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { k1qyfxo50i5jq2d = new WufooForm(); k1qyfxo50i5jq2d.initialize(options); k1qyfxo50i5jq2d.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
				
		</div>
		<div id="contractorform" style="background:#fff;width:700px" class="lity-hide">
			<div id="wufoo-k9h8d8f01r823u"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/k9h8d8f01r823u">online form</a>. </div> <script type="text/javascript"> var k9h8d8f01r823u; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'k9h8d8f01r823u', 'autoResize':true, 'height':'260', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { k9h8d8f01r823u = new WufooForm(); k9h8d8f01r823u.initialize(options); k9h8d8f01r823u.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
				
		</div>
		<div id="designbuild" style="background:#fff;width:700px" class="lity-hide">
			<div id="wufoo-kjihb5i0if6ljv"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/kjihb5i0if6ljv">online form</a>. </div> <script type="text/javascript"> var kjihb5i0if6ljv; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'kjihb5i0if6ljv', 'autoResize':true, 'height':'260', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { kjihb5i0if6ljv = new WufooForm(); kjihb5i0if6ljv.initialize(options); kjihb5i0if6ljv.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
				
		</div>
		<!-- end code for embedded email forms -->

	<div class="mobile">
		<?php
	            $a = new Area('App Header2');
	            $a->display($c);
	        ?>
		<div class="two-column container" data-aos="fade-up">
			<div class="image-box">
				<?php
		            $a = new Area('Taliho in Field Image');
		            $a->display($c);
	        	?>	
			</div>
			<div>
				<?php
					$a = new Area('Taliho in Field Content');
	            	$a->display($c);
				?>
			</div>
		</div>
		<div class="two-column container" data-aos="fade-up">
			<div class="image-box">
				<?php
		            $a = new Area('Taliho in Office Image');
		            $a->display($c);
		        ?>
			</div>
			<div>
				<?php
		            $a = new Area('Taliho in Office Content');
		            $a->display($c);
		        ?>
			</div>
		</div>
		<div class="two-column container" data-aos="fade-up">
			<div class="image-box">
				<?php
		            $a = new Area('Taliho Post Construction Image');
		            $a->display($c);
		        ?>
			</div>
			<div>
		        <?php
		            $a = new Area('Taliho Post Construction Content');
		            $a->display($c);
		        ?>
			</div>
		</div>
	</div>
	<div class="video" data-aos="fade-up">
		<div class="container">
			<img src="<?php echo $this->getThemePath(); ?>/img/video.png" alt="video" />
			<div class="playbar">
				<img src="<?php echo $this->getThemePath(); ?>/img/orange-play-btn.png" alt="play video" />
				<div class="text">How Taliho Works</div>
			</div>
		</div>
	</div>
	<div>
		<?php
            $a = new Area('Another Header2');
            $a->display($c);
        ?>
		<div class="two-column container" data-aos="fade-up">
			<div>
				<?php
		            $a = new Area('More Content');
		            $a->display($c);
		        ?>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/ipad.png" alt="Man Looking at iPad" data-aos="fade-up">
			</div>
		</div>
	</div>
	<div class="change">
		<div class="scroller">
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/testimonial-2.png" alt="Testimonial" data-aos="fade-up">
			</div>
		</div>
	</div>
</div>

<?php require('elements/footer.php'); ?>
