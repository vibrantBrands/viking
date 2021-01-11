<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
    <div class="orange-ctas">
        <div class="container">
            <?php
                $a = new GlobalArea('Footer Text');
                $a->display($c);
            ?>
            <div class="btn-wrapper">
                <span class="btn blue"><a href="/contact-us">Request a Demo</a></span>
            </div>
        </div>
    </div>
    <div class="bottombar">
        <div class="logo">
            <img src="<?php echo $this->getThemePath(); ?>/img/footer-logo.svg" alt="Taliho Logo" />
        </div>
        <div class="apps">
            <div>
                <a href="http://www.facebook.com" target="social">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
            <div>
                <a href="http://www.twitter.com" target="social">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div>
                <a href="http://www.youtube.com" target="social">
                    <i class="fab fa-youtube"></i>
                </a>
                
            </div>
        </div>
        <!-- <div class="social">
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
        </div> -->
        <div class="contact">
            <a href="mailto:support@taliho.com"><i class="fa fa-envelope"></i>support@taliho.com</a>
            <a href="tel:18009696761"><i class="fa fa-phone"></i>(800) 969-6761</a>
        </div>
    </div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
