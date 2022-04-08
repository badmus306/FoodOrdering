<?php include 'header.php'; ?>

  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add User</li>
      </ol>
			<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "User added Successfully!")?>
                                            </div>
                                            <?php endif;?>
      <div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Add User</h2>
			</div>
			<div class="row">
				
				<div class="col-md-8 add_top_30">
                                    <form action="save_user.php" method="post" enctype="multipart/form-data">
                                     <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Full Name</label>
                                                                <input type="text" name="full_name" class="form-control" placeholder="Full Name">
							</div>
						</div>
					</div>
                                        <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Username</label>
                                                                <input type="text" name="username" class="form-control" placeholder="Username">
							</div>
						</div>
                                            <div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
                                                                <input type="text" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
					</div>
					<!-- /row-->
                                         <div class="row">
					<div class="col-md-12">
							<div class="form-group">
								<label>Position</label>
								<select class="form-control input-height" name="position">
                                                        <option value="Admin">Admin</option>
                                                        <option value="Moderator">Moderator</option>
                                                    </select>
                                                        </div>
						</div>
                                         </div>
                                         <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn_1 medium">Submit</button>
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