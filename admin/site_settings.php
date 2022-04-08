<?php include 'header.php'; ?>

  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">App Settings</li>
      </ol>
	<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "App Settings Updated Successfully!")?>
                                            </div>
                                            <?php endif;?>
      <div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Update Site</h2>
			</div>
			<div class="row">
				
				<div class="col-md-8 add_top_30">
                                    <form action="save_settings.php" method="post" enctype="multipart/form-data">
                                      <?php 
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?> 
									 <div class="row">
                                         <div class="col-md-6">
							<div class="form-group">
								<label>Site Name</label>
								<input type="text" name="site_name" class="form-control" value="<?php echo $res['site_name'];?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Site Title</label>
								<input type="text" name="site_title" class="form-control" value="<?php echo $res['site_title'];?>">
							</div>
						</div>
					</div>
                                         
                                        <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Site Keywords</label>
                 <input type="text" name="site_keyword" class="form-control" value="<?php echo $res['site_keyword'];?>">
							</div>
						</div>
                                              
						<div class="col-md-6">
							<div class="form-group">
								<label>Site Description</label>
           <input type="text" name="site_desc" class="form-control" value="<?php echo $res['site_desc'];?>">
							</div>
						</div>
					</div>
                                        <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Google Analytic Code</label>
	<textarea  class="form-control" name='google_code' ><?php echo $res['google_code'];?></textarea>
							          </div>
						</div>
					</div>
                                      
                                         <div class="row">
                                         <div class="col-md-6">
							<div class="form-group">
								<label>Site's Email</label>
    <input type="text" name="site_email" class="form-control" value="<?php echo $res['site_email'];?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone 1</label>
     <input type="text" name="site_phone" class="form-control" value="<?php echo $res['site_phone'];?>">
							</div>
						</div>
					</div>   
                                        <div class="row">
                                            <div class="col-md-4">
							<div class="form-group">
								<label>Phone 2</label>
 <input type="text" name="linkedin" class="form-control" value="<?php echo $res['linkedin'];?>">
							</div>
						</div>
                                         <div class="col-md-4">
							<div class="form-group">
								<label>Facebook Username</label>
  <input type="text" name="facebook" class="form-control" value="<?php echo $res['facebook'];?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Twitter Username</label>
 <input type="text" name="twitter" class="form-control" value="<?php echo $res['twitter'];?>">
							</div>
						</div>
                                            
					</div>    
                                        <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Address 1</label>
								<textarea  class="form-control" name='address' placeholder="School Address"><?php echo $res['address'];?></textarea>
							          </div>
						</div>
					</div>
                                        <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Address 2</label>
                  <input type="text" name="city" class="form-control" value="<?php echo $res['city'];?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Country</label>
<input type="text" name="country" class="form-control" value="<?php echo $res['country'];?>">
							</div>
						</div>
					</div>
                             <?php endforeach;?>          
                                        <div class="row">
                                         <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn_1 medium">Submit</button>
                                                </div>
                                        </div>
					<!-- /row--> 
                                    </form>
				</div>
			</div>
		</div>
		<!-- /box_general-->
	  </div>
	  <!-- /.container-fluid-->
   	</div>
   
<?php include 'footer.php'; ?>