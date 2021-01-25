<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
        <div class="container row">
            <div>
                <img src="<?php echo $this->getThemePath(); ?>/img/viking-packaging-logo.png" alt="logo">
                </div>
                <div>
                    <h2>SIGN UP FOR A NEWSLETTER</h2>
                    <div id="wufoo-zk5fek01yaipq4"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/zk5fek01yaipq4">online form</a>. </div> <script type="text/javascript"> var zk5fek01yaipq4; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'zk5fek01yaipq4', 'autoResize':true, 'height':'242', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { zk5fek01yaipq4 = new WufooForm(); zk5fek01yaipq4.initialize(options); zk5fek01yaipq4.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
                </div>
                <div>
                    <p>P: <a href="tel:18458836325">845.883.6325</a></p>
                    <p>F: <a href="tel:18458836228">845.883.6228</a></p>
                    <p><a href="mailto:cgainey@vikingindustries.net">cgainey@vikingindustries.net</a></p>
                </div>
                <div><p>Viking Industries, Inc.</p>
                        <p>89 S. Ohioville Road</p>
                        <p>P.O. Box 249</p>
                        <p>New Paltz, NY 12561</p>
                    </div>
            </div>
            <div class="container column">
                <div class="social">
                    <a href="https://www.youtube.com/watch?v=P4k-3694I7w" target="social"><img src="<?php echo $this->getThemePath(); ?>/img/home/youtube.png" alt="youtube"></a>
                    <a href="https://twitter.com/vikingind?lang=en" target="social"><img src="<?php echo $this->getThemePath(); ?>/img/home/twitter.png" alt="twitter">
                    </a>
                    <a href="https://www.facebook.com/pages/category/Business-Supply-Service/Viking-Industries-158916338365291/" target="social"><img src="<?php echo $this->getThemePath(); ?>/img/home/facebook.png" alt="facebook"></a>
                    <a href="https://www.linkedin.com/company/viking-industries-inc-" target="social"><img src="<?php echo $this->getThemePath(); ?>/img/home/linkedin.png" alt="linkedin"></a>
                    <a href="https://www.instagram.com/vikingind/" target="social"><img src="<?php echo $this->getThemePath(); ?>/img/home/instagram.png" alt="instagram"></a> 
                </div>
                <p class="copyright">Copyright &copy; 2020 Viking Industries. All Rights Reserved</p>
            </div>
                
        </div>
    </footer>

<?php $this->inc('elements/footer_bottom.php');?>
