<?php include 'header.php';?>

        <!-- Content Area -->
	    <div class="content-area contact-page">
            <div class="row">
               <div class="medium-3 small-12 columns">
                    <?php
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>
                    <img src="images/help/callgirl.png" alt="">
                    <br><br>
                    <h4> Lagos Office  </h4>
                    <p><?php echo $res['address'];?></p>
                    <h4> Germany Office </h4>
                    <p><?php echo $res['city'];?></p>
                    <h4>Contact Us</h4>
                    <p>Tel: <?php echo $res['site_phone'];?> <br> Tel: <?php echo $res['linkedin'];?> <br>Email: <a href="mailto:<?php echo $res['site_email'];?>"><?php echo $res['site_email'];?></a></p>
                    <br>
                    <h4>Follow Us</h4>
                    <div class="socialicons">
                        <a href="<?php echo $res['facebook'];?>"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/<?php echo $res['twitter'];?>"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    <?php endforeach; ?>
               </div><!-- left bar ends here -->
               <div class="medium-9 small-12 columns">
                    <!-- map ends here -->
                    <div class="contact-form">
                        <h2> Contact us  </h2>
                        <form method="POST" action="send_contact.php">
                            <div class="row">
                                <div class="medium-6 columns">
                                    <input name="name" type="text" placeholder="Name">
                                 </div>
                                 <div class="medium-6 columns">
                                     <input name="email" type="text" placeholder="Email">
                                 </div>
                                <div class="medium-12 columns">
                                    <textarea name="message" placeholder="Your message" rows="6"></textarea>
                                    <button class="primary button" value="submit" type="submit">Submit <i class = "fa fa-save"> </i> </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- contact Form ends here. -->
               </div>
            </div>
        </div>
	    <!-- Content Area Ends -->

        <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(+49)121-121-1211</span></h2>
                </div>
                <div class="medium-2 small-12 columns">
                    <a href="contact.php" class="button primary">Contact Us</a>
                </div>
           </div><!-- row -->
         </div>
        <!-- Call to Action End -->
<?php include 'footer.php'; ?>