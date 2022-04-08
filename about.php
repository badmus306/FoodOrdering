<?php include 'header.php';?>
   <div class="content-area">
	    	<div class="row">
            	<!-- Welcome Message -->

                    	<div class="row welcome-message">
            <div class="medium-8 small-12 columns">
    	    	<h2>Welcome to Best Food Limited!</h2>
                <?php
                                   $result = ORM::for_table("site_about")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>


                <p> <?php echo $res['full_about'];?></p>

                                             <?php endforeach; ?>

        	</div>

        </div>
                    <div class="clearfix"></div>
			   </div>
    			<!-- Welcom Message Ends -->
                        <hr>
               <div class="home-module">
            <div class="row">
                <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong> Our Product  </strong><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati facilis officia itaque architecto aliquid dolores repellat adipisci, maxime officiis consequuntur?
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->

               <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong> Our Research </strong><br>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aspernatur voluptatem eum. Iusto dolorum atque, soluta tempora laborum sint obcaecati.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->

               <div class="medium-4 small-12 columns">
                    <div class="icon-box">
                        <div class="icon-side float-left">
                            <i class="fa fa-map" aria-hidden="true"></i>
                        </div>
                        <div class="info-side float-left">
                            <p><strong> Innovation </strong><br>
Leaders in Social Responsibility, we are rooted in the communities where we work and dedicated to the reciprocal success of everyone we touch.
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
               </div><!-- icon-box ends -->

            </div>
       </div><!-- icons-wrap -->
	        </div><!-- Row ends -->
		</div>
<?php include 'footer.php'; ?>