<?php 
include '../connect.php';
$site_name=$_POST['site_name'];
$site_title=$_POST['site_title'];
$site_keyword=$_POST['site_keyword'];
$site_desc=$_POST['site_desc'];
$google_code=$_POST['google_code'];
$site_email=$_POST['site_email'];
$site_phone=$_POST['site_phone'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$linkedin=$_POST['linkedin'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];

$query=ORM::for_table('site_settings')->find_one(1);
$query->site_name=$site_name;
$query->site_title=$site_title;
$query->site_desc=$site_desc;
$query->google_code=$google_code;
$query->site_email=$site_email;
$query->site_phone=$site_phone;
$query->facebook=$facebook;
$query->twitter=$twitter;
$query->linkedin=$linkedin;
$query->address=$address;
$query->city=$city;
$query->country=$country;
$query->save();
if(query){
      header("location:site_settings.php?success=true");
        }else{
            header("location:site_settings.php?failed=true");
        } 
  

?>