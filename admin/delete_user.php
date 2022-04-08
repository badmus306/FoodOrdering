<?php
include"../connect.php";
$id=$_GET['id'];
$query = ORM::for_table('users')->find_one($id);
$query->delete();
if(query){
      header("location:all_users.php?success=true");
        }else{
            header("location:all_users.php?failed=true");
        } 

?>