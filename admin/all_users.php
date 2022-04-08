<?php include 'header.php';?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
	<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "User Record Deleted Successfully!")?>
                                            </div>
                                            <?php endif;?>	
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Users</div>
       
        <div class="card-body">
            <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
               
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
              <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 158px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Full Name</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 240px;" aria-label="Position: activate to sort column ascending">Username</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 115px;" aria-label="Office: activate to sort column ascending">Position</th>
                        Start date</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 76px;" aria-label="Price: activate to sort column ascending">Action</th></tr>
              </thead>
              <tbody>
                   <?php 
                                   $result = ORM::for_table("users")
                                   ->find_array();
                                    ?>
                                     <?php foreach ($result as $res):?> 
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $res['full_name'];?></td>
                  <td><?php echo $res['username'];?></td>
                  <td><?php echo $res['position'];?></td>
                  <td> <a href="delete_user.php?id=<?php echo $res['id']; ?>" 
														title="Delete Record" data-toggle="tooltip">
													<i class="fa fa-trash"></i></a></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table></div></div>
            </div>
          
        </div>
        </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
<?php include 'footer.php';?>