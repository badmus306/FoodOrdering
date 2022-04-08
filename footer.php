<!-- Footer -->
	   <div class="footer">
   		<div class="footerTop">
        	<div class="row">
                <div class="large-4 medium-6 small-12 columns footer-widget">
                	<h2>About Us</h2>
                    <div class="tx-div"></div>
                     <?php
                                   $result = ORM::for_table("site_about")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>


                <p> <?php echo $res['short_about'];?></p>

                                             <?php endforeach; ?>
                      </div>

                <div class="large-4 medium-6 small-12 columns footer-widget">
                	<h2>Pages</h2>
                    <div class="tx-div"></div>
                    <ul  class="menu vertical">
                    	<li><a href="index.php"> Home </a> </li>
                                <li><a href="about.php"> About </a></li>
                                <li><a href="innovation.php">Innovation</a></li>
                                <li><a href="market.php"> Product </a></li>
                               <li><a href="contact.php"> Contact </a></li>
					</ul>
                </div>

                <div class="large-4 medium-6 small-12 columns footer-widget">
                	<div class="textwidget">
                             <?php
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>
                    	<ul class="address">
							<li>
								<i class="fa fa-home"></i>
								<h4>Address:</h4>
                                <p><?php echo $res['address'];?>,  <?php echo $res['country'];?><br>
                                <?php echo $res['city'];?>,  <?php echo $res['country'];?></p>
							</li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <h4>Phone:</h4>
                                <p><?php echo $res['site_phone'];?><br>
                                <?php echo $res['linkedin'];?></p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:<?php echo $res['site_email'];?>"><?php echo $res['site_email'];?></a></p>
                            </li>
						</ul>

                        <hr>
                        <div class="socialicons">
                        	Social:
                            <a href="<?php echo $res['facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/<?php echo $res['twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
		         <div class="clearfix"></div>

			</div>
        </div><!-- footerTop Ends here.. -->
        <div class="footerbottom">
        	<div class="row">
            	<div class="medium-6 small-12 columns">
                    <div class="copyrightinfo">2021 &copy; <a href="#">Best Food Ltd</a> | All Rights Reserved.</div>
                </div><!-- left side -->
                <div class="medium-6 small-12 columns hide-for-small-only">
                	<div class="pull-right">
                			<p>Site Designed By <a href="#"> Best Food Ltd </a></p>

                        </div>
                </div><!-- Right Side -->
            </div>
         </div><!-- footer Bottom -->
       </div>
	   <!-- Footer Ends here -->

	</div>
    <!-- MAIN Container Ends here. -->
	<a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	<!-- Page Preloader -->
    <div class="preloader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
	</div>

    <!-- Including Jquery so All js Can run -->
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>

   	<!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="js/foundation.min.js"></script>
   	<!-- Crousel JS -->
   <script type="text/javascript" src="js/owl.carousel.min.js"></script>
   <!-- Webful JS -->
   <script src="js/webful.js"></script>


    <!-- REVOLUTION JS FILES DELETE if not using Revolution slider -->
	<script type="text/javascript" src="lib/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
        (Load Extensions only on Local File Systems !
        The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<!-- REVOLUTION JS FILES End -->
</body>

</html>
