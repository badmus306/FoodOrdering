<?php

include '../connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$password = md5($password);

	//If there are input validations, redirect back to the login form

	//Create query
	$qry="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['full_name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			session_write_close();
			header("location: index.php");
			exit();
		}else {

  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'";
  echo "alert('Something went wrong, Enter correct details');window.location.href='login.php'";
   echo '</script>';
    exit;
   // echo "<script language = 'javascript'> alert('Wrong Details');'</script>";

                    }
	}
        else {
		die("Query failed");
	}
?>