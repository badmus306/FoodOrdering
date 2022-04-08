
<!DOCTYPE HTML>
<html>
<head>
    <?php
    session_start();
    include '../connect.php';
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>
<title><?php echo $res['site_name'];?> :: Login  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $res['site_keyword'];?>" />
<?php endforeach;?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/login.css" rel="stylesheet">
<!--//Metis Menu -->

</head>
<body>
<div class="main-content">
	<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1"> Signin <i class = "fa fa-lock"> </i> </h2>
				<div class="widget-shadow">
					<div class="login-body" style = "background:#ffa81d !important;">
                                            <form action="process_login.php" method="post">
							<input type="text" class="user" name="username" placeholder="Username" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">

							<input type="submit" name="Sign In" value="Sign In">

						</form>
					</div>
				</div>

			</div>
		</div>
		<!--footer-->

	</div>
</body>
</html>