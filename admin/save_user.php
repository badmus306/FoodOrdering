<?php
session_start();
include('../connect.php');
$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['position'];
// query
$sql = "INSERT INTO users (full_name,username,password,position) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>md5($c), ':d'=>$d));
 if($q){
      header("location:add_user.php?success=true");
        }else{
            header("location:add_user.php?failed=true");
        }

?>