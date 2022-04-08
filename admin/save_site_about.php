<?php 
include '../connect.php';
$short_about=$_POST['short_about'];
$full_about=$_POST['full_about'];
$innovation=$_POST['innovation'];
$market=$_POST['market'];
$query=ORM::for_table('site_about')->find_one(1);
$query->short_about=$short_about;
$query->full_about=$full_about;
$query->innovation=$innovation;
$query->market=$market;
$query->save();
if($query){
      header("location:site_about.php?success=true");
        }else{
            header("location:site_about.php?failed=true");
        } 
  

?>